@component('mail::message')
# Nom de l'utilisateur:{{ $data['name'] }}

{{ $data['message'] }}

@component('mail::button', ['url' => ''])
marquer lu
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
