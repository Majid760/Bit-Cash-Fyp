@component('mail::message')
# From {{ $data['name'] }}

@component('mail::panel')
    {{ $data['message'] }}
@endcomponent

@component('mail::button', ['url' => 'https://www.bit-cash.com'])
Bit Cash
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
