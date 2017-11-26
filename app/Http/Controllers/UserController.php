<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\User\EditUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\User\DeleteUserRequest;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    public function edit(EditUserRequest $request) {
    }
    public function update(UpdateUserRequest $request, $id) {
      $user = User::find($id);
      if (!$user) {
        abort(404);
      } else {

        if ($request->filled('first_name')) {
          $user->first_name = $request->input('first_name');
        }
        if ($request->filled('last_name')) {
          $user->last_name = $request->input('last_name');
        }
        if ($request->filled('phone')) {
          $user->phone = $request->input('phone');
        }
        if ($request->filled('email')) {
          $user->email = $request->input('email');
        }
        if ($request->filled('password')) {
          $user->password = bcrypt($request->input('password'));
        }
        try {
          $user->save();
          flash('Votre profil a bien été mis à jour')->success();
          return back();
        } catch (QueryException $exception) {
          return back()->withInput(
            $request->except('password')
          );
        }
      }
    }
    public function delete(DeleteUserRequest $request) {
      $user = User::find($id);
      if (!$user) {
        abort(404);
      } else {
        try {
          $user->delete();
          flash("L'utilisateur a bien été supprimé")->success();
          return back();
        } catch (QueryException $exception) {
          return back()->withInput(
            $request->except('password')
          );
        }
      }
    }
}
