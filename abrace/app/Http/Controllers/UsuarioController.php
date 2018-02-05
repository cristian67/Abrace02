<?php

namespace App\Http\Controllers;

use App\User;
use Session;
use Redirect;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $users = User::All();
        return view('admin.usuario.index', compact('users'));
    }

    public function create()
    {

        return view('admin.usuario.crear');
    }

    public function store(Request $request)
    {

        $this->validate($request,[

            'name'     => 'required|min:3',
            'email'     => 'required|min:3',
            'password'   => 'required|min:5'

        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
        ]);

        Session::flash('message', 'Usuario creado con éxito');
        return redirect('/admin/usuario');

    }

    public function edit($id)
    {

        $user = User::find($id);
        return view('admin.usuario.edit', ['user' => $user]);

    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'name'     => 'required|min:3',
            'email'     => 'required|email',

        ]);

        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('message', 'Usuario editado con éxito');
        return redirect('/admin/usuario');

    }

    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('message', 'Usuario eliminado con éxito');
        return redirect('/admin/usuario');

    }
}
