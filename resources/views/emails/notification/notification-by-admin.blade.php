@component('mail::message')
# HI Our Dear Customer;
@component('mail::panel')
{{ $data['message'] }}
@endcomponent
@component('mail::button', ['url' => 'https://www.bit-cash.com'])
Visit Bitcash.com
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
