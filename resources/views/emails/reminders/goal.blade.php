@component('mail::message')
    Bonjour Benjamin,

    Vous n'avez pas encore rentré le score du match E1 - E2 du date heure

    @component('mail::button', ['url' => config('app.url')])
        Entrer le score
    @endcomponent
@endcomponent