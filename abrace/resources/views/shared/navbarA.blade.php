<nav class="navbar fixed-top navbar-toggleable-md  navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img src="/img/logo.gif" width="30" height="30" alt="">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
            <div class="collapse navbar-collapse" id="navbarNav">
                <li class="nav-item active">
                    <a class="nav-link" href="/admin/corredor">  Corredores <i class="fa fa-user-circle fa-1x" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/contenido">  Contenido <i class="fa fa-info fa-1x" aria-hidden="true"></i> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/usuario">  Usuarios <i class="fa fa-users fa-1x" aria-hidden="true"></i></a>
                </li>
            </div>
        </ul>
        <div class="my-2 my-lg-0">
            <a class="btn btn-danger my-2 my-sm-0 buscar" href="/logout"> {!! Auth::user()->name !!} | Salir  <i class="fa fa-sign-out" aria-hidden="true"> </i>
            </a>
        </div>
    </div>
</nav >





