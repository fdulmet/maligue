<div class="container-fluid">
    <div class="row" id="banner">
        <div class="col-md-8">
           <span style="float: left">
                <h3>
                    <a href="{{ url('/') }}" id="titreNomLigue">
                        {{ $nomAuthLigue }}
                    </a>
                </h3>
            </span>
            <form>
                <br>
                <select id="menu_saison">
                    <option>2016-2017</option>
                    <option>2015-2016</option>
                    <option>2014-2015</option>
                </select>
            </form>
        </div>
        <div class="col-md-4">
            @include('banner._logoutDropdownMenu')
        </div>
    </div>
</div>







