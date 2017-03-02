<?php

namespace App\Http\Controllers;

use Request;
use App\User;
use App\Mail\InviterAmisDansEquipe;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class TestController extends Controller
{
    public function lala()
    {
        echo 'bonjour';
    }

    public function build()
    {
        return $this->from('lala@gmail.com')//on peut aussi mettre une "global from address" dans config/mail
                    ->view('emails.InviterAmisDansEquipe');
                    //->text('emails.orders.shipped_plain');//si on veut plain-text version de l'email

    }

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

    public function test()
    {
        return view('test');
    }
}
