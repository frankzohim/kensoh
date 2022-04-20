@component('mail::message')
# Introduction

{{ $data['message'] }}

@component('mail::button', ['url' => ''])
marquer lu
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
