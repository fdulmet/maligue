@if(Auth::user()->isAdmin() || Auth::user()->isAdminLigue())
<div class="row" id="menu_admin">
    <div class="col-md-12">
        {!! link_to_route('saison.index', 'Saisons', [], ['class' => 'btn btn-info btn-lg']) !!}
    </div>
</div>
@endif

<div class="row" id="menu">
    <div class="col-md-12">
        @include('layouts.modal', ['id' => 'coordonneesCapitaines', 'titre' => 'Coordonnées capitaines', 'body' => 'modals.vueCoordonneesCapitaines'])
        @include('layouts.modal', ['id' => 'effectifsEquipes', 'titre' => 'Effectifs équipes', 'body' => 'modals.vueEffectifsEquipes'])
        @include('layouts.modal', ['id' => 'reglesReports', 'titre' => 'Règlement ligue', 'body' => 'modals.vueReglesReports'])
        @include('layouts.modal', ['id' => 'reglesFootACinq', 'titre' => 'Règles foot-à-5', 'body' => 'modals.vueReglesFootACinq'])
    </div>
</div>

<div class="row">
    <div class="col-md-6" id="classement">
        @include ('content._classement')
    </div>
    <div class="col-md-6" id="calendrier">
        @include ('content._calendrier')
    </div>
</div>

<!--
<div class="row">
    <div class="col-md-11" id="cadeaux">
        at include ('content._cadeaux')
    </div>
</div>
-->

