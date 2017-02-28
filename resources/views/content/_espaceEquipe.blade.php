<div class="row">
    <h4 class="col-md-12">
        La New Team
        <?php
            $equipe = App\Equipe::find(1);
            echo $equipe;
        ?>
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <p>
            <b>Effectif :</b>
            <br>
            <span>
                <?php
                $users = App\User::where('nom', Auth::user()->nom)->get();
                ?>
                @foreach ($users as $user)
                    {{ $user->prenom }} {{ $user->nom }}&nbsp;&nbsp;
                @endforeach
            </span>
            <br>
            @include('layouts.modal', ['id' => 'inviterAmisDansEquipe', 'titre' => 'Inviter amis dans équipe', 'body' => 'modals.vueInviterAmisDansEquipe'])
        </p>
        <br>
            <b>Prochain match :</b>
            <div>La New Team vs Les Manchots</div>
            <div>Y participer : oui-non </div>
            <div>Composition :</div>

        <br>
        <!--Test eloquent relationships :</b>-->
        <?php
        /*
        $user = App\User::find(1);
        $user->equipes as $equipe) {
        }
        */
        ?>
    </div>
</div>















