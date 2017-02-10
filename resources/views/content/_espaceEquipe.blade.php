<div class="row">
    <h4 class="col-md-12">
        {{ Auth::user()->equipe }}
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <p>
            <b>Effectif :</b>
            <br>
            <span>
                <?php
                $users = App\User::where('equipe', Auth::user()->equipe)->get();
                ?>
                @foreach ($users as $user)
                    {{ $user->prenom }} {{ $user->nom }}
                    <br>
                @endforeach
            </span>
            <p>
            <button id="openerInviterAmisDansEquipe">Inviter des amis à rejoindre mon équipe</button>
            @include ('content.dialogBoxInviterAmisDansEquipe')
            </p>
        </p>
        <br>
        <p>
            <b>Prochain match de :</b>
            <span></span>
        </p>
        <p>
            <b>Participer à :</b>
            <span></span>
        </p>
        <p>
            <b>Composition pour tel match :</b>
            <span></span>
        </p>
        <p>
            <b>Test eloquent relationships :</b>
                <?php
                    $user = App\User::find(1);

                    $user->equipes as $equipe) {
                    //
                    }
                ?>

        </p>
    </div>
</div>















