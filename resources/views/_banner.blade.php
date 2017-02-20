<div class="container-fluid">
    <div class="row" id="banner">
        <div class="col-md-8">
            <div class="row">
                <h3 class="col-md-4">
                    <a href="{{ url('/') }}" id="titreNomLigue">
                        La ligue des pingouins
                    </a>
                </h3>
                <form class="col-md-5 form-inline input-sm" id="padding_menu_saison">
                    <br>
                    <select id="menu_saison">
                        <option>2016-2017</option>
                        <option>2015-2016</option>
                        <option>2014-2015</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            @include('content._logoutDropdownMenu')
        </div>
    </div>
</div>







