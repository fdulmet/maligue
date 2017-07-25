<!-- Modal -->
<div id="profilJoueur" class="modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                <h4 class="modal-title">
                    Profil Joueur
                    <button id="toggle-edit-profile" class="btn btn-default pull-right"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                </h4>
            </div>
            <div class="modal-body">

                <div class="wrap-player-infos">
                    <!--Prénom Nom-->
                    <div>
                        {{ Auth::user()->prenom }} {{ Auth::user()->nom }}
                    </div>
                    <!--Email-->
                    <div>
                        {{ Auth::user()->email }}
                    </div>
                    <!--Password-->
                    <div>
                    <div>
                        {{ Auth::user()->tel }}
                    </div>

                    </div>
                    <br>
                    <!--Equipe-->
                    <div>Equipe :
                        <?php
                            //Nom
                            $entreeEquipe = Auth::user()->equipes()->get();
                            foreach ($entreeEquipe as $equipe)
                            {
                                $equipe = $equipe->nom;
                                echo $equipe;
                            }

                            //Capitaine ?
                            $user = Auth::user();
                            $capitaine = $user->is_capitaine;
                            if ($capitaine == 1)
                            {
                                $capitaine = ' (capitaine)';
                            }
                            else
                            {
                                $capitaine = '';
                            }
                            echo $capitaine.'<br>';
                        ?>
                    </div>

                    <!--Ligue-->
                    <div>Ligue :
                        <?php
                            $ligue = \App\Equipe::find($entreeEquipe)->ligues()->get();
                            foreach ($ligue as $ligue)
                            {
                                $ligue = $ligue->nom;
                                echo $ligue;
                            }
                        ?>
                    </div>

                    <!--Sport-->
                    <div>Sport :
                        <?php
                        $ligue = \App\Equipe::find($entreeEquipe)->ligues()->get();
                        foreach ($ligue as $ligue)
                        {
                            $sport = $ligue->sport;
                            echo $sport;
                        }
                        ?>
                    </div>
                </div>

                <div class="wrap-player-form">
                    <form action="{{ route('user.update', Auth::user()->id) }}" method="POST" class="form">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control" name="prenom"
                                value="{{ Auth::user()->prenom }}"
                            >
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nom"
                                value="{{ Auth::user()->nom }}"
                            >
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email"
                                value="{{ Auth::user()->email }}"
                            >
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="tel"
                                value="{{ Auth::user()->tel }}"
                            >
                        </div>
                        <div class="form-group" style="overflow: hidden;">
                            <button type="submit" class="btn btn-primary pull-right">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--<div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" id="bouton_fermer_profil_joueur">Fermer</button>
            </div>-->
        </div>
    </div>
</div>
