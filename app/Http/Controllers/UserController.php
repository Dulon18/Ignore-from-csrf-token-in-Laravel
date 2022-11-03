<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function create()
    {
        return view('userForm');
    }
    function store(Request $request)
    {
        User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,

        ]);
        return redirect()->back();
    }
}
