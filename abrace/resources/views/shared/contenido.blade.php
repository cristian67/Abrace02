
<!-- Nosotros-->
<section id="nosotros">
    <div id="sec1" class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron mt-5  rounded-0">
                    <h1 ALIGN=center class="center-block display-3 "> Nosotros </h1>
                    <hr class="my-4">
                    <div class="texto0 hide">
                        {!! $post->nosotros !!}
                        <p>
                        <hr>
                        <p class="top-30">
                            <div class="my-2 my-lg-0 text-center top-100">
                            <a id="grandeLetra" class=" btn btn-warning my-2 my-sm-0 btn-lg buscar" href="http://abrace.portalinmobiliario.cl/Propiedades/Listado?orden=propiedad-desc"> Buscar Propiedades  <i style="color: whitesmoke !important;" class="fa fa-search" aria-hidden="true"> </i>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Empresa -->
<section id="empresa">
    <div id="sec2" class="container-fluid top-60">
        <div class="row">
            <div class="col-lg-3 text-left top-100 texto1 hide ">
                {!! $post->empresa_uno !!}
            </div>
            <!-- Imagen central -->
            <div class="col-lg-6 text-center top-60">
                <h2 class="center-block display-3 ">  </h2>
                <img id="no" src="/img/negocio.jpg" alt="">
                <p class="top-30">
                <div class="my-2 my-lg-0 text-center">
                    <a id="grandeLetra" class=" btn btn-outline-success my-2 my-sm-0 buscar" href="http://abrace.portalinmobiliario.cl/Propiedades/Listado?orden=propiedad-desc">  Buscar Propiedades  <i class="fa fa-search" aria-hidden="true"> </i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 text-right  top-100 animated FadeIn texto2 hide">
                {!! $post->empresa_dos !!}
            </div>
        </div>
    </div>
</section>
<section id="corredores">
    <div class="container-fluid top-60">
        <div class="jumbotron mt-5 text-white rounded-0">
            <h1 ALIGN=center class="center-block display-3"> Corredores </h1>
            <hr class="my-4">
            <div class="row corre hide">
                @foreach( $corredores as $c)
                    <div class=" col-lg-4 text-align top-30 ">
                        <div class="card card-inverse card-primary mb-3 text-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <img  id="corredor"class="animated fadeIn text-align image" src="/imgCorredor/{{$c->img}}">
                                    <P></P>
                                    <p> Nombre:  {{$c->nombre}}  {{$c->apellido}} </p>
                                    <p> Fono:  {{$c->fono}} </p>
                                    <hr>
                                    <p> Horarios:
                                    <p>
                                        {{$c->horario}}
                                        <footer>Corredor de  <cite title="Source Title">Abrace</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12 text-center top-60">
                    <div class="my-2 my-lg-0 text-center">
                        <a id="grandeLetra" class=" btn btn-warning my-2 my-sm-0 btn-lg buscar" href="http://abrace.portalinmobiliario.cl/Propiedades/Listado?orden=propiedad-desc"> Buscar Propiedades  <i style="color: whitesmoke !important;" class="fa fa-search" aria-hidden="true"> </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Servicios -->
<section id="servicios">
    <div class="container-fluid top-60">
        <div class="row">
            <div class="col-lg-6 text-center top-60">
                <h2 class="sean display-3"> </h2>
                <img id="no" src="/img/negocio2.jpg" alt="">
            </div>
            <div class="col-lg-6 text-left top-100 texto3 hide ">
                {!! $post->servicios !!}
            </div>
            <div class="col-lg-12 text-center top-60" id="servi">
                <div class="my-2 my-lg-0 text-center">
                    <a id="grandeLetra" class="btn btn-outline-success my-2 my-sm-0 buscar" href="http://abrace.portalinmobiliario.cl/Propiedades/Listado?orden=propiedad-desc">   Buscar Propiedades  <i class="fa fa-search" aria-hidden="true"> </i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>