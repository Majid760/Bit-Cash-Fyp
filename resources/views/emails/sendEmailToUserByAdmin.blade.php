@component('mail::message')
# HI {{ $data['firstname'] }}
@component('mail::panel')
{!! $data['message'] !!}
@endcomponent
@component('mail::button', ['url' => 'https://www.bit-cash.com'])
Visit Bitcash.com
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
