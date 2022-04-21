@component('mail::message')
# Information du colis

Description:{{ $datapackage['description'] }},
lenght: {{ $datapackage['lenght'] }},
largeur:{{ $datapackage['width'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
