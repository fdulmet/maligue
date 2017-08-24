@foreach($equipes as $equipe)
    <strong>{{ $equipe->nom }}</strong> :
    @if($user->isAdmin() || $user->isAdminLigue())
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#deactivateEquipe{{ $equipe->id }}">
            Désactiver l'équipe
        </button>

        <div id="deactivateEquipe{{ $equipe->id }}" class="modal modal-inside" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> Êtes-vous sûr de vouloir désactiver l'équipe {{ $equipe->nom }} ?</h4>
                    </div>
                    <div class="modal-footer">
                        {!! link_to_route('equipe.deactivate', 'Oui', ['id' => $equipe->id], ['class' => 'btn btn-default']) !!}
                        <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <br>

    @foreach($equipe->users()->get() as $joueur)
        @if($joueur->capitaine == 1)
            {{ $joueur->prenom  }} {{ $joueur->nom }} (capitaine)<br>
        @else
            {{ $joueur->prenom  }} {{ $joueur->nom }} <br>
        @endif
    @endforeach
@endforeach