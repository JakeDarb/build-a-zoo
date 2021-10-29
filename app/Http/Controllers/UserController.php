<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class UserController extends Controller
{
    public function index(){
        $user = 'test';
        $data['user'] = $user;
        return view('user/index');
    }

    public function create(){
        return view('user/create');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|max:200',
            'password' => 'required|max:200'
        ]);

        //$user = new User();
        //$user->name = $request->input('name');
        //$user->email = $request->input('email');
        //$user->password = $request->input('password');
        //$user->save();
        return redirect('user/index');
    }
}
