<?php //pour créer une migration file :
// php artisan make:migration create_joueurs_table --create="joueurs"
//(le --create="joueurs" est optionnel : il sert à mettre en plus du boilerplate (qqs entrées par défaut etc)

//ajouter les colonnes voulues (nom, prenom, etc.)

//pour faire migrer la dernière table créée (ou modifiée) vers la bdd :
//php artisan migrate

//pour undo-er une migration (qd on a pas encore poussé la production):
//php artisan migrate:rollback
//attention : rollback efface toutes les données (Dulmet, Francois, New Team, etc.)
//si migrate:rollback plante, regarder la toute fin du laracast sur les migrations

//pour modifier une table si on a déjà poussé la production :
//par exemple ajouter une entrée (colonne ?) equipe à la table joueurs :
//php artisan make:migration add_equipe_to_joueurs_table

//ENSUITE POUR REMPLIR UNE TABLE : SUIVRE INSTRUCTIONS DANS App/Joueur.php (eloquent model class)

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joueurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('nom');
            $table->string ('prenom');
            $table->string ('equipe');
            $table->timestamps();

            //$table->integer('user_id')->unsigned();//dans le cas d'articles qui appartiennent à un user

            //$table->foreign('user_id')//si qd un user delete son compte on veut que ses artciles soient deleted
            //      ->references('id')
            //      ->on('users')
            //      ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('joueurs');
    }
}
