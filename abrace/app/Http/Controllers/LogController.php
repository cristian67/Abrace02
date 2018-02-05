<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use Session;

class LogController extends Controller
{

    public function index(){

        return view('admin.home');

    }

    public function store(Request $request){
        if(Auth::attempt(['email' =>  $request['email'], 'password' => $request['password']])){
            return Redirect::to('admin/corredor');
        }

        Session::flash('message','Datos incorrectos');
        return Redirect::to('/login');

    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }
}
