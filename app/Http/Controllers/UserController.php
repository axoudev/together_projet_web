<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    //get by id
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    //create
    public function create()
    {
        return view('users.create');
    }

    //insert
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        $user->save();
        return redirect('/users');
    }

    //edit
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    //update
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name; //ini harus sama dengan name di form
        // $user->email = $request->email;
        // $user->password = $request->password;
        $user->save();
        return redirect('/users');
    }
}
