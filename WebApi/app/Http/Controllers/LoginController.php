<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use DB;
class LoginController extends Controller
{
    public function postlogin (Request $request){
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect('/sadmin');
        }
        return redirect('/login');
}
