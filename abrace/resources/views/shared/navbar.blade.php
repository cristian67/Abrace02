<nav id= "navi" class="navbar fixed-top navbar-toggleable-md navbar-light navbar-trans" style="background-color: #e3f2fd;">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img src="/img/logo.gif" width="30" height="30" alt="">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto nav-pills">
            <div class="collapse navbar-collapse" id="navbarNav">
                <li class="nav-item">
                    <a data-scroll  class="nav-link active letra" href="#inicio"> Inicio <i class="fa fa-home fa-1x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-scroll href="#nosotros" class="nav-link letra">Nosotros <i class="fa fa-users fa-1x" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a data-scroll href="#empresa" class="nav-link letra" >Empresa <i class="fa fa-university fa-1x" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a data-scroll  href="#corredores" class="nav-link letra">Corredores <i class="fa fa-user-circle fa-1x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-scroll href="#servicios" class="nav-link letra">Servicios <i class="fa fa-info fa-1x" aria-hidden="true"></i> </a>
                </li>
                <li class="nav-item">
                    <a data-scroll href="#contacto" class="nav-link letra "> Contacto <i class="fa fa-envelope-o fa-1x" aria-hidden="true"></i></a>
                </li>
            </div>
        </ul>
        <div class="my-2 my-lg-0">
            <a class="btn btn-success my-2 my-sm-0 buscar" href="http://abrace.portalinmobiliario.cl/Propiedades/Listado?orden=propiedad-desc">Buscar en Portal Inmobiliario <i class="fa fa-search" aria-hidden="true"> </i>
            </a>
        </div>
    </div>
</nav>

<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('#navi').addClass('bg-inverse');
            $('#navi').removeClass('navbar-light');
        }
        else{
            $('#navi').removeClass('bg-inverse');


        };
    });
</script>


<!--
<nav id= "navi"  class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto nav-pills">
            <div class="collapse navbar-collapse" id="navbarNav">
                <li class="nav-item">
                    <a data-scroll  class="nav-link active " href="#inicio" > Inicio</a>
                </li>
                <li class="nav-item">
                    <a data-scroll href="#nosotros" class="nav-link">Nosotross</a>
                </li>
                <li class="nav-item">
                    <a data-scroll href="#empresa" class="nav-link" >Empresa</a>
                </li>
                <li class="nav-item">
                    <a data-scroll  href="#servicios" class="nav-link">Servicio</a>
                </li>
                <li class="nav-item">
                    <a data-scroll href="#corredores" class="nav-link">Corredores</a>
                </li>
                <li class="nav-item">
                    <a data-scroll href="#mapa" class="nav-link "  >Contacto</a>
                </li>
            </div>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav> -->