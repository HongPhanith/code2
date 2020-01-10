@component('mail::message')
# Welcome from CTS,

Thank you for joining. 

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
