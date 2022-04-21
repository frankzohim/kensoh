@component('mail::message')
# Information du colis

Description:{{ $datapackage['description'] }},
lenght: {{ $datapackage['lenght'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
