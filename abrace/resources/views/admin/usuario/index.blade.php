@extends('template.main')
@section('title'){{'Abrace | Admin'}}@endsection
@section('content')
    <style type="text/css">
        body {
            background-color: whitesmoke }
    </style>

    <?php $message=Session::get('message')?>


    @include('shared.navbarA')

    <div class="container-fluid ">
        <div class="jumbotron mt-5 bg-inverse text-white rounded-0">
            <div align="center">
                <div class="col-xs-12">
                    <h1 class="sean top-30 text-lg-center top-60 " style="color: whitesmoke">Usuarios</h1>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    @if(Session::has('message'))
        <div class="alert alert-info" role="alert">
            {{Session::get('message')}}
        </div>
    @endif
    <div class="container top-30">
        <div class="row">
            <div class="col-md-12 text-right">
                   <a href="{!! URL::to('/admin/usuario/create') !!}" class="btn btn-outline-success">Crear</a>
            </div>
        </div>
    </div>

    <div class="container top-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>email</th>
                            <th class="text-left w270">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $u)
                            <tr>
                                <td> {{$u->id}}   </td>
                                <td> {{$u->name}} </td>
                                <td> {{$u->email}} </td>
                                <td>
                                    {!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $u->id, $attributes = ['class'=>'btn btn-outline-info']); !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <section>
        @include('shared.footerAdmin')
    </section>
@stop
