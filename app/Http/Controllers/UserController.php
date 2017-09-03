<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs = $request->all();

        Auth::user()
            ->update([
                'nom' => $inputs['nom'],
                'prenom' => $inputs['prenom'],
                'email' => $inputs['email'],
                'tel' => $inputs['tel']
            ]);

        // Message de l'appli
        flash('Votre profil a bien été mis à jour')
            ->success();

        return redirect()
            ->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
