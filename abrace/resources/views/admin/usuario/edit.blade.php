@extends('template.main')
@section('title'){{'Abrace | Admin'}}@endsection
@section('content')
    <style type="text/css">
        body {
            background-color: whitesmoke }
    </style>

    @include('shared.navbarA')
    <div class="card top-100">
        <div class="card-block">
            <h3 class="card-title"> Modificar Usuario {{ $user->name }}</h3>

                {!! Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT']) !!}
                <div class="form-group">
                    {!! Form::label('Nombre: ') !!}
                    {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresar nombre de usuario']) !!}
                    @if($errors->has('name'))
                        <strong><span style="color: orangered"> *{{$errors->first('name')}}</span></strong>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('Correo: ') !!}
                    {!! Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingresar email']) !!}
                    @if($errors->has('email'))
                        <strong><span style="color: orangered"> *{{$errors->first('email')}}</span></strong>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('Contraseña: ') !!}
                    {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresar contraseña']) !!}
                </div>
                <div class="col-lg-12 text-center top-30">
                    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
                    {!! Form::close()!!}
                    <hr>
                {!! Form::model($user,['route'=>['usuario.destroy',$user->id],'method'=>'DELETE']) !!}
                    {!! Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
                {!! Form::close() !!}
                </div>
        </div>
    </div>
    <section>
        @include('shared.footerAdmin')
    </section>
@stop