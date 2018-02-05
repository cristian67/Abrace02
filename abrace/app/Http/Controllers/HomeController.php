<?php

namespace App\Http\Controllers;

use App\Corredor;
use Illuminate\Http\Request;
use App\Post;
use Mail;


class HomeController extends Controller
{
 public function index(){

     $post = Post::first();
     $corredores = Corredor::orderBy('id','desc')->get();

     return view('welcome')
         ->with('post',$post)
         ->with('corredores',$corredores);
 }

 /*
 public  function sendemail(Request $request){
    //dd($request->all());
     Mail::to($request->email)
         ->send(new MyMail($request->content,$request->name));
 }*/

 public function sendemail(Request $request){

     $this->validate($request,[

         'name'     => 'required',
         'mail'     => 'required|email',
         'asunto'   => 'required',
         'content'  => 'required'

     ]);



     Mail::send('emails.contact',$request->all(),function($msj){

         $msj->subject('Correo de la pagina Abrace');
         $msj->to('abrace.asesoria.inmobiliaria@gmail.com');
     });

     return back()->withInput();

 }



}
