<?php

namespace App\Http\Controllers;

use Request;
use App\User;

class TestController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view ('tests.index')->with('users', $users);
    }

    public function show($id)
    {
        $users = User::findOrFail($id);
        return view('tests.show', compact('users'));
    }

    public function create()
    {
        return view ('tests.create');
    }

    public function store()
    {
        $input = Request::all();

        User::create($input);

        return redirect('tests');
    }





    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('tests.edit', compact('user'));
    }

    public function update($id, UserRequest $request)
    {
        $joueur = User::findOrFail($id);
        $joueur->update($request->all());
        return redirect('joueurs');
    }

}
