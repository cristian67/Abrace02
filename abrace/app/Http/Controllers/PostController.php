<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Session;
use Redirect;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $posts = Post::All();
        return view('admin.posts.index', compact('posts'));

    }


    public function edit($id){

        $post = Post::find($id);
        return view('admin.posts.edit', ['post' => $post]);

    }

    public function update(Request $request, $id){

        $this->validate($request,[

            'nosotros'     => 'required|min:64',
            'empresa_uno'     => 'required|min:64',
            'empresa_dos'   => 'required|min:64',
            'servicios'  => 'required|min:64'

        ]);

        $post = Post::find($id);
        $post->fill($request->all());
        $post->save();

        Session::flash('message', 'Contenido editado con éxito');
        return redirect('/admin/contenido');

    }
}
