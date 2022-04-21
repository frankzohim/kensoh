@component('mail::message')
# Information du colis

Description:{{ $datapackage['description'] }},
longueur: {{ $datapackage['lenght'] }},
largeur:{{ $datapackage['width'] }}
poids:{{ $datapackage['weight'] }}
depart:{{ $datapackage['departure'] }}
destination: {{ $datapackage['destination'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
