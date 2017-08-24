<b>Effectif</b>
<p>
    <?php

use App\User;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
    use App\Equipe;

    //On prend l'id de l'équipe du mec authentifié
    $authEquipe = Auth::user()->equipes()->get();
    foreach ($authEquipe as $authEquipe)
    {
        $idAuthEquipe = $authEquipe->id;
    }

    //Dans table equipe_user on prend ceux qui ont même equipe_id que mec authentifié
    $usersDeMemeEquipeQueAuth = DB::table('equipe_user')->where('equipe_id', $idAuthEquipe)->get();
    //On prend leurs user_id
    foreach ($usersDeMemeEquipeQueAuth as $userId)
    {
        $id = $userId->user_id;
        //Et on va dans table users pour afficher prenoms/noms correspondants à ces id
        $user = User::where('id', $id)->get();
        foreach ($user as $user)
        {
            $prenom = $user->prenom;
            $nom = $user->nom;

            if ($user->isCapitaine())
            {
                $capitaine = '(capitaine)';
            }
            else
            {
                $capitaine = '';
            }

            echo $prenom.' '.$nom.' '.$capitaine."<br>";
        }
    }

    //$user = App\User::find(1)->equipes()->get();
    //$lala = App\User::where('id_equipe', $idAuthEquipe)->get();
    ?>

</p>




