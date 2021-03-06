<?php

namespace App\Http\Controllers;
 use App\Role;
 use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\Input;
 use Illuminate\Support\Facades\Session;
 use Illuminate\Support\Facades\Validator;

 class AuthController extends Controller
 {

     public function getSignUpPage() {
         return view ('auth.signup');
     }

     public function getSignInPage() {
         return view('auth.signin');
     }

     public function postSignUp (Request $request) {
         $request->validate([
             'name' => 'required',
             'email' => 'required|unique:users',
         ]);
             $user = new User();
             $user->name = $request['name'];
             $user->email = $request['email'];
             $user->password = bcrypt($request['password']);
             $user->save();
             $user->roles()->attach(Role::where('name', 'Client')->first());
//             Auth::login($user);
             return redirect()->route('main');
     }

    public function postSignIn(Request $request)
{
    if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
        return redirect()->route('main');
    }
    return redirect()->back();
}

     public function getLogout() {
         Auth::logout();
         return redirect('/');
     }
 }