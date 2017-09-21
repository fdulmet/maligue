@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{ asset('images/logo_maligue.svg') }}">
        @endcomponent
    @endslot

    <p>
        Bonjour #NAME,
    </p>

    <p>
        Vous n'avez pas encore rentré le score du match #E1 - #E2 du #date #heure
    </p>

    @component('mail::button', ['url' => config('app.url')])
        Entrer le score
    @endcomponent

    {{-- Subcopy --}}
    @if (isset($subcopy))
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endif

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            &copy; {{ date('Y') }} {{ config('app.name') }}. Tous droits réservés.
        @endcomponent
    @endslot
@endcomponent