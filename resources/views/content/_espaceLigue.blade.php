<div class="row" id="menu">
    <div class="col-md-12">
        @include('layouts.modal', ['id' => 'coordonneesCapitaines', 'titre' => 'Coordonnées capitaines', 'body' => 'modals.vueCoordonneesCapitaines'])
        @include('layouts.modal', ['id' => 'effectifsEquipes', 'titre' => 'Effectifs équipes', 'body' => 'modals.vueEffectifsEquipes'])
        <!--@ include('layouts.modal', ['id' => 'reglesReports', 'titre' => 'Règles pour les reports', 'body' => 'modals.vueReglesReports'])-->
        @include('layouts.modal', ['id' => 'reglesFootACinq', 'titre' => 'Règles du foot-à-5', 'body' => 'modals.vueReglesFootACinq'])
    </div>
</div>

<div class="row">
    <div class="col-md-6" id="classement">
        @ include ('content._classement')
    </div>
    <div class="col-md-6" id="calendrier">
        @include ('content._calendrier')
    </div>
</div>

