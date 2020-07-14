@component('mail::message')
# Introduction

This is messege query from {{ $name }}

{{ $messege }}.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
