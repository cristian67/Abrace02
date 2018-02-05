<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corredor;
use Illuminate\Support\Facades\Storage;
use Session;
use Redirect;

class CorredorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        $corredores = Corredor::Corredores();
        return view('admin/corredor',compact('corredores'));
    }


    public function create(){

        return view('admin.corredor.create');

    }

    public function store(Request $request){

        $this->validate($request,[

            'nombre'     => 'required|min:3',
            'apellido'     => 'required|min:3',
            'fono'   => 'required|min:5',
            'horario'   => 'required|min:4',
            'img'  => 'required|image'

        ]);


        Corredor::create($request->all());

        Session::flash('message', 'Corredor creado con éxito');
        return redirect('/admin/corredor');

    }

    public function edit($id){

        $corredor = Corredor::find($id);
        return view('admin.corredor.edit', ['corredor' => $corredor]);

    }

    public function update(Request $request, $id){

        $this->validate($request,[

            'nombre'     => 'required|min:3',
            'apellido'     => 'required|min:3',
            'fono'   => 'required|min:5',
            'horario'   => 'required|min:4'

        ]);

        $corredor = Corredor::find($id);
        $corredor->fill($request->all());
        $corredor->save();

        Session::flash('message', 'Actualizado con éxito');
        return redirect('/admin/corredor');
    }

    public function destroy($id){

        Corredor::destroy($id);
        Session::flash('message', 'Corredor eliminado con éxito');
        return redirect('/admin/corredor');
    }
}
