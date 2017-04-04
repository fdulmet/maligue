<div class="container-fluid">
    <div class="row" id="banner">
        <div class="col-md-8">
           <span id="spanFloatleft">
                <h3>
                    <a href="{{ url('/') }}" id="titreNomLigue">
                        @if(isset($nomAuthLigue))
                            {{ $nomAuthLigue }}
                        @else
                            Ma Ligue
                        @endif
                    </a>
                </h3>
            </span>
            <div class="col-md-8">
                @if(isset($nomAuthLigue))
                    @include('banner._saisonsDropdownMenu')
                @else
                @endif
            </div>
        </div>
        <div class="col-md-4">
            @if(isset($nomAuthLigue))
                @include('banner._logoutDropdownMenu')
            @else
            @endif
        </div>
    </div>
</div>