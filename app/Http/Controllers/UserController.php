<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
// import models for getting database data
use App\Models\User;

class UserController extends Controller
{
    //
    function login( Request $request ){
        // return $req->input();
        $user =  User::where(['email'=>$request->email])->first();

        if( !$user || !Hash::check($request->password, $user->password) ){
            return "Incorrect Email and/or Password ";
        }else{
            $request->session()->put('user', $user);
            // session()->save();
            // echo session('user');
            // return $user;
            return redirect('/');
        }
    }
}
