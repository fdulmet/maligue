<div class="row">
    <div class="col-md-12">
        <form class="form-inline input-sm">
            <label>Saison</label>
                <select>
                    <option>2015-2016</option>
                    <option>2014-2015</option>
                    <option>2013-2014</option>
                </select>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        @include ('content._classement')
    </div>
    <div class="col-md-6">
        @include ('content._calendrier')
    </div>
    <div class="row">
        <div class="col-md-12">
            @include ('content._menu')
        </div>
    </div>
</div>


