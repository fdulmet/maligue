@component('mail::message')
Bonjour {{ $username }},

Vous n'avez pas encore rentré le score du match {{ $team1 }} - {{ $team2 }} du {{ $date }} {{ $heure }}.

@component('mail::button', ['url' => config('app.url')])
    Entrer le score
@endcomponent

@endcomponent