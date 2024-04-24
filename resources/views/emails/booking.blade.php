<x-mail::message>
Hello {{ $bookingInfo['firstname'] }},

Your car detailing appointment has been confirmed. See the details below;

<x-mail::panel>
<p><strong>Firstname:</strong> {{ $bookingInfo['firstname'] }}</p>
<p><strong>Lastname:</strong> {{ $bookingInfo['lastname'] }}</p>
<p><strong>Phone:</strong> {{ $bookingInfo['phone'] }}</p>
<p><strong>Car Make:</strong> {{ $bookingInfo['car_make'] }}</p>
<p><strong>Scheduled Date:</strong> {{ $bookingInfo['date'] }}</p>
<p><strong>Scheduled Time:</strong> {{ $bookingInfo['hour'] }}</p>
<p><strong>Subscription Package:</strong> {{ $packageName }}</p>
</x-mail::panel>

If you have any questions, please don't hesitate to <a href="{{ route('contact') }}">contact</a> us.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
