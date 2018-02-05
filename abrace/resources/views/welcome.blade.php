@extends('template.main')
@section('title'){{'Bienvenido'}}@endsection
@section('content')
    @include('shared.navbar')
        <div class="flex-center position-ref full-height">
            <!-- login
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif -->
                <section id="inicio">
                    <div class="hidden-md-up">
                    @include('template.header2')
                    </div>
                    <div class=" hidden-xs-down hidden-sm-down">
                        <div id="carouselExampleIndicators" class="carousel slide animated fadeIn fast" data-ride="carousel">
                            <div class="carousel-inner" >
                                <div class="carousel-item active mainImg" style="background-image:url('/img/lago.jpg');"> </div>
                                <div class="carousel-caption d-none d-md-block animated fadeIn">
                                    <div id="title" class="oswald animated fadeInUp" style="color:black; font-size: 84px;">ABRACE <p style="font-size: 0.3em"> S.A. </p> </div>
                                    <hr>
                                    <img class="fadeIn" src="/img/captura.jpg" width="280" height="200" alt=""> <p></p>
                                    <!-- btn star -->
                                    <a  href="#nosotros"  id="btn" class="btn btnStar">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                    @include('shared.contenido')

                <section id="contacto">
                    @include('shared.footer')
                </section>
        </div>
@stop

