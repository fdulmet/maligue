@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            ![logo]({{asset('images/logo_maligue.svg')}})
            ![]({{base64_encode(file_get_contents(resource_path(asset('images/logo_maligue.svg'))))}})
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

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
            © {{ date('Y') }} {{ config('app.name') }}. Tous droits réservés.
        @endcomponent
    @endslot
@endcomponent
