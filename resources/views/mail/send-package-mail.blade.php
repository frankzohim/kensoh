@component('mail::message')
# Information du colis

Description:{{ $datapackage['description'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
