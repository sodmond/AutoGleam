@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
{{-- $slot --}}
<img src="{{ asset('img/logo.png') }}" class="" alt="Autogleam Express" style="max-width:180px;">
@endif
</a>
</td>
</tr>
