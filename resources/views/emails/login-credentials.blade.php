@component('mail::message')
# Tus credenciales para acceder a {{config('app.name')}}|Medico

Utiliza estas credenciales para acceder al sistema.

@component('mail::table')
    | Email | Contraseña |
    |:----------|:------------|
    | {{$user->email}} | {{$password}} |
@endcomponent

@component('mail::button', ['url' => url('login')])
Ingresar
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
