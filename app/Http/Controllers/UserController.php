<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();

        return view('manage.users.index', compact('users'));
    }

   
    public function create()
    {
        return view('manage.users.create');
    }

    
    public function store(Request $request)
    {
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);

        return redirect()->route('manage.users.show', $user->id);
    }

    
    public function show($id)
    {
        $user = User::find($id);
        return view('manage.users.show', compact('user'));
    }

    
    public function edit($id)
    {
        $user = User::find($id);
        return view('manage.users.edit', compact('user'));
    }

    
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> bcrypt($request->password),
        ]);

        return redirect()->route('manage.users.show', $user->id);
    }

    
    public function destroy($id)
    {
        //
    }
}
