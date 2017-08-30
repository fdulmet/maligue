<div class="container-fluid">
    <div class="row" id="banner">
        <div class="col-md-8">
            <h2 style="float:left;">
                <a href="{{ url('/') }}" id="titreNomLigue">
                    @if(isset($currentLigue))
                        {{ $currentLigue->nom }}
                    @else
                        Ma Ligue
                    @endif
                </a>
            </h2>
            <div class="col-md-8">
                @if(isset($currentLigue))
                    @include('banner._saisonsDropdownMenu')
                @endif
            </div>
        </div>
        <div class="col-md-3">
            @if(isset($currentLigue))
                @include('banner._logoutDropdownMenu')
            @endif
        </div>
        <div class="col-md-1">
            @if(isset($currentLigue))
                @include('banner._contact')
            @endif
        </div>
    </div>
</div>
