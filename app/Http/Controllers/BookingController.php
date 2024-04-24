<?php

namespace App\Http\Controllers;

use App\Mail\SendBookingMail;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Stripe\StripeClient;

class BookingController extends Controller
{
    public function index()
    {
        return view('booking');
    }

    public function checkSlot(Request $request)
    {
        $this->validate($request, [
            'package' => ['required', 'integer'],
            'date' => ['required', 'date'],
            'hour' => ['required', 'max:5'],
        ]);
        $package = $request->package;
        $date = $request->date;
        $hour = $request->hour;
        $booking = Booking::where('scheduled_date', $date)->where('hours', $hour)->get();
        if ($booking->count() < 1) {
            return redirect()->route('booking', $request->except('_token'))
                            ->with('success', 'Scheduled date and hour available, please proceed to complete your booking.');
        }
        return redirect()->route('booking')->withErrors(['err_msg' => 'Scheduled date and hour not available']);
    }

    public function book(Request $request)
    {
        $this->validate($request, [
            'firstname' => ['required', 'max:255'],
            'lastname' => ['required', 'max:255'],
            'email' => ['required', 'max:255'],
            'phone' => ['required', 'max:255'],
            'package' => ['required', 'integer'],
            'date' => ['required', 'date'],
            'hour' => ['required', 'max:5'],
            'car_make' => ['required', 'max:255'],
            'message' => ['nullable', 'max:500']
        ]);
        $booking = Booking::where('scheduled_date', $request->date)->where('hours', $request->hour)->get();
        if ($booking->count() > 0) {
            return back()->withErrors(['err_msg' => 'Scheduled date and hour not available.']);
        }
        $package = Package::find($request->package); 
        return $this->makePayment($request, $package);
    }

    public function makePayment(Request $request, $package)
    {
        try {
            $stripe = new StripeClient(env('STRIPE_SECRET'));
            $checkoutSession = $stripe->checkout->sessions->create([
                'customer_email' => $request->email,
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => 'Car Detailing - '.$package->title
                            ],
                            'unit_amount' => round($package->amount * 100, 2),
                        ],
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => url('/booking/pay/success?session_id={CHECKOUT_SESSION_ID}'),
                'cancel_url' => route('booking.cancel'),
                'metadata' => $request->except('_token'),
            ]);
            return redirect($checkoutSession->url);
        } catch (\Exception $e) {
            Log::info('Stripe: ' . $e->getMessage());
            return back()->with(['payment_err' => 'Problem encountered with payment. Please refresh the page and try again.']);
        }
    }

    public function paymentSuccess()
    {
        if (isset($_GET['session_id'])) {
            DB::beginTransaction();
            try{
                $sessionId = $_GET['session_id'];
                $stripe = new StripeClient(env('STRIPE_SECRET'));
                $paymentData = $stripe->checkout->sessions->retrieve($sessionId, []);
                $metaData = $paymentData['metadata'];
                $booking = new Booking();
                $booking->package_id = $metaData['package'];
                $booking->firstname = $metaData['firstname'];
                $booking->lastname = $metaData['lastname'];
                $booking->email = $metaData['email'];
                $booking->phone = $metaData['phone'];
                $booking->car_make = $metaData['car_make'];
                $booking->scheduled_date = $metaData['date'];
                $booking->hours = $metaData['hour'];
                $booking->save();
                DB::table('payments')->insert([
                    'booking_id' => $booking->id,
                    'amount' => ($paymentData->amount_total / 100),
                    'reference' => $paymentData->id,
                    'memo' => 'Stripe_Payment_Intent ' .$paymentData->payment_intent,
                    'status' => $paymentData->payment_status,
                    'created_at' => now(),
                ]);
                DB::commit();
                Mail::to($metaData['email'])->cc('admin@autogleamexpress.com')->send(new SendBookingMail($metaData));
                return redirect()->route('booking')->with('success', 'You car detailing appointment has been booked.');
            } catch(\Exception $e) {
                DB::rollBack();
                Log::info('Stripe Error: ' . $e->getMessage());
                return redirect()->route('booking')->withErrors(['payment_err' => 'Problem encountered with payment, pls try again or contact system administrator if issue persist.']);
            }
        }
        return redirect()->route('user.home');
    }

    public function paymentCancel()
    {
        if (isset($_GET['session_id'])) {
            dd($_GET['session_id']);
        }
        return redirect()->route('booking')->withErrors(['payment_err' => 'Payment was cancelled, please try again if you think this is an error.']);
    }
}
