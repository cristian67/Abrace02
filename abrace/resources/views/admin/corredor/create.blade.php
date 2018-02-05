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
        <h3 class="card-title">Crear un Corredor</h3>

        {!! Form::open(['route'=>'corredor.store', 'method'=>'POST', 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('Nombre: ') !!}
            {!! Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ingresar nombre de usuario']) !!}
            @if($errors->has('nombre'))
                <strong><span style="color: orangered"> *{{$errors->first('nombre')}}</span></strong>
            @endif
        </div>

        <div class ="form-group">
            {!! Form::label('Apellido: ') !!}
            {!! Form::text('apellido',null,['class'=>'form-control', 'placeholder'=>'Ingresar apellido']) !!}
            @if($errors->has('apellido'))
                <strong><span style="color: orangered"> *{{$errors->first('apellido')}}</span></strong>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('fono: ') !!}
            {!! Form::text('fono',null,['class'=>'form-control', 'placeholder'=>'Ingresar fono']) !!}
            @if($errors->has('fono'))
                <strong><span style="color: orangered"> *{{$errors->first('fono')}}</span></strong>
            @endif
        </div>


        <div class="form-group">
            {!! Form::label('Horario: ') !!}
            {!! Form::text('horario',null,['class'=>'form-control', 'placeholder'=>'Ingresar Horario']) !!}
            @if($errors->has('horario'))
                <strong><span style="color: orangered"> *{{$errors->first('horario')}}</span></strong>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('Subir Archivo: ') !!}
            {!! Form::file('img') !!}
            @if($errors->has('img'))
                <strong><span style="color: orangered"> *{{$errors->first('img')}}</span></strong>
            @endif
        </div>

            <div class="col-lg-12 text-center top-30">
            {!! Form::submit('Registrar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
            </div>
        </div>
    </div>

    <section>
        @include('shared.footerAdmin')
    </section>


@stop