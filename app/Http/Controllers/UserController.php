<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view ('users.index')->with('users', $users);
    }

    public function getUsers(){
        $users = User::all();
        return view ('users.index')->with('users', $users);
    }

    public function show($id){
        $user = User::find($id);
        return view('users.index')->with('users', $user);
    }

    public function create()
    {
        return view('users.createUser');
    }

    public function store(Request $request){
        $input = $request->all();
        User::create($input);
        return redirect('users')->with('flash_message', 'New User created Successfully!');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.editUser')->with('users', $user);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('users')->with('flash_message', 'User updated successfully.');
    }

    public function destroy($id){
        User::destroy($id);
        return redirect('users')->with('flash_message', 'User deleted successfully.!');
    }

}
