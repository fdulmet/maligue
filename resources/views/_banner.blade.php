<div class="container-fluid">
    <div class="row" id="banner">
        <div class="col-md-8">
           <span id="spanFloatleft">
                <h3>
                    <a href="{{ url('/') }}" id="titreNomLigue">
                        {{ $nomAuthLigue }}
                    </a>
                </h3>
            </span>
            <div class="col-md-8">
                @include('banner._saisonsDropdownMenu')
            </div>
        </div>
        <div class="col-md-4">
            @include('banner._logoutDropdownMenu')
        </div>
    </div>
</div>







