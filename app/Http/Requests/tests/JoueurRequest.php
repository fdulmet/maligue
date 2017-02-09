<?php
//php artisan make:request CreerJoueurRequest

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class JoueurRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //tout le monde peut faire cette request
        //(parfois on veut que seulement certains types de gens puissent)
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()//aller voir dans joueurs/create.php les infos du formulaire
    {
        return [
            'nom' => 'required',
            'prenom' => 'required',
            'equipe' => 'required'
            //https://laravel.com/docs/5.3/validation pour les règles comme @ required pour email etc
        ];
    }
}
