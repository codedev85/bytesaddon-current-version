@component('mail::message')
Hello {{ $user['name'] }} 

Check below for your login credentials.<br>

<p>Email : {{ $user['email'] }}</p>
<p>Password : {{ $pass }}</p>

@component('mail::button', ['url' => env('APP_URL')])
Visit Portal
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
