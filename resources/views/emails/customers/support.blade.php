@component('mail::message')
# From {{ $data['name'] }}

<p>{{ $data['message'] }}</p>

@component('mail::button', ['url' => 'https://www.bit-cash.com'])
Bit-cash
@endcomponent

@component('mail::panel')
<p>Thank you for being a part of Bit-Cash.com.</p>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
