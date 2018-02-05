@extends('template.main')
@section('title'){{'Abrace | Admin'}}@endsection
@section('content')

    <style type="text/css">
        body {
            background-color: whitesmoke }
    </style>

@include('shared.navbarA')

    {!! Form::model($post,['route'=>['contenido.update',$post->id], 'method'=>'PUT']) !!}
    <div class="container-fluid ">
        <div class="row">
                <div class="col-lg-12 top-60">
                    <div class="card">
                        <div class="card-block">
                            {!! Form::label('Nosotros') !!}
                            {!! Form::textarea('nosotros',null,['class'=>'ckeditor']) !!}
                        </div>
                    </div>
                    @if($errors->has('nosotros'))
                        <strong><span style="color: orangered">  * {{$errors->first('nosotros')}}</span></strong>
                    @endif
                </div>
                <div class="col-lg-6 top-30">
                    <div class="card">
                        <div class="card-block">
                            {!! Form::label('Empresa (izquierda)') !!}
                            {!! Form::textarea('empresa_uno',null,['class'=>'ckeditor']) !!}
                        </div>
                    </div>
                    @if($errors->has('empresa_uno'))
                        <strong><span style="color: orangered"> *{{$errors->first('empresa_uno')}}</span></strong>
                    @endif
                </div>
                <div class="col-lg-6 top-30">
                    <div class="card">
                        <div class="card-block">
                            {!! Form::label('Empresa (derecha)') !!}
                            {!! Form::textarea('empresa_dos',null,['class'=>'ckeditor']) !!}
                        </div>
                    </div>
                    @if($errors->has('empresa_dos'))
                        <strong><span style="color: orangered"> * {{$errors->first('empresa_dos')}}</span></strong>
                    @endif
                </div>
                <div class="col-lg-12 top-30">
                    <div class="card">
                        <div class="card-block">
                            {!! Form::label('Servicios') !!}
                            {!! Form::textarea('servicios',null,['class'=>'ckeditor']) !!}
                        </div>
                    </div>
                    @if($errors->has('servicios'))
                        <strong><span style="color: orangered"> {{$errors->first('servicios')}}</span></strong>
                    @endif
                </div>
            <div class="col-lg-12 text-center top-30">
            {!! Form::submit('Actualizar',['class'=>'btn btn-primary btn-lg my-2 my-lg-0 ']) !!}
            {!! Form::close() !!}
            </div>
        </div>

    </div>

<section>
    @include('shared.footerAdmin')
</section>





<script>

</script>
@stop