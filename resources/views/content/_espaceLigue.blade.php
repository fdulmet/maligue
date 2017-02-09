<div class="row">
    <div class="col-md-12">
        <form class="form-inline input-sm">
            <label id="nom_ligue">La ligue des pingouins</label>
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
        @include ('content.classement')
    </div>
    <div class="col-md-6">
        @include ('content.calendrier_et_scores')
    </div>
    <div class="row">
        <div class="col-md-12">
            @include ('content.menu')
        </div>
    </div>
</div>


