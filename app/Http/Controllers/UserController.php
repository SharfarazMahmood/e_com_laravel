<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
// import models for getting database data
use App\Models\User;


class UserController extends Controller
{
    //
    function login( Request $request ){
        // return $req->input();
        $user =  User::where(['email'=>$request->email])->first();
        
        if( !$user || !Hash::check($request->password, $user->password) ){

            $errors = [];
            $errors["loginErrors"] = "Incorrect Email and/or Password";
            return view('/login', ['errors'=>$errors]);
            // return "Incorrect Email and/or Password ";
        }else{
            $request->session()->put('user', $user);
            // session()->save();
            // echo session('user');
            // return $user;
            return redirect('/');
        }
    }

    function logout(Request $request){
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }

    function register( Request $request ){
        // return $request->input();
        $user =  new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login');

        
        // if( !$user || !Hash::check($request->password, $user->password) ){
        //     return "Incorrect Email and/or Password ";
        // }else{
        //     $request->session()->put('user', $user);
        //     // session()->save();
        //     // echo session('user');
        //     // return $user;
        //     return redirect('/');
        // }
    }
}
