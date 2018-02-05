<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Abrase')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- boostrap 4 -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link media="all" type="text/css" rel="stylesheet" href="/css/styles.css">
    <link media="all" type="text/css" rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">

</head>

<style>
    body{
        background-color: white;
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
    }
</style>

<body>

@if(Session::has('message'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('message')}}
    </div>
@endif

<div class="container top-60">
    <div class="row">
        <div class="col-lg-12 text-center top-60">
            <div class="card top-60">
                <div class="card-block">
                    <img src="/img/logo.gif" width="80" height="80" alt="">
                    <hr>
                    <h4 class="card-title">Ingresar al Sistema de Administración</h4>
                    {!! Form::open(['route'=>'login.store', 'method'=>'POST']) !!}
                    <div class="form-group">
                        {!! Form::label('Correo') !!}
                        {!! Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingresar email']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Contraseña ') !!}
                        {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresar contraseña']) !!}
                    </div>
                    <div class="col-lg-12 text-center top-30">
                        {!! Form::submit('Ingresar',['class'=>'btn btn-success']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('shared.footerAdmin')
</body>








