hello {{ $user->name }},

<br>

You new login password :- <br> {{ $user->password_random }} </br>

<br> thank you, <br>

{{ config('app.name') }}
