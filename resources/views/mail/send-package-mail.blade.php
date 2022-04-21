@component('mail::message')
# Information du colis

Description:{{ $datapackage['description'] }},
lenght: {{ $datapackage['lenght'] }},
largeur:{{ $datapackage['width'] }}
poids:{{ $datapackage['weight'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
