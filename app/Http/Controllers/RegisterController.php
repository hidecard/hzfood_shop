<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin;

class RegisterController extends Controller
{
   public function register(){
    return view('frontend.layout.register');
    }
public function user_register(Request $request){

    $validate = validator($request->all(),   [
        'name'=> 'required | min:3',
        'email'=> 'required|email|unique:users,email',
        'password'=>'required|min:4|confirmed'
    ]);
    if($validate->fails()){
        return back()->withErrors($validate);
    }
    $post = User::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'password'=> $request->password,
        'role'=> 1
    ]);
    if($post){
         return redirect()->back()->with('success', 'success!!');
    }else{
        dd('fail');
    }
}
}
