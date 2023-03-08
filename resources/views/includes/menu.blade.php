
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('menu') }}</div>
                    <div class="card-body">
                        <div class="list-group">
                        @if(auth()->check())
                            <a href="http://127.0.0.1:8000/home" class="list-group-item ">Ver incidencias</a>
                            @if (! auth()->user()->is_client)
                            @endif
                            <a href="http://127.0.0.1:8000/report" class="list-group-item ">Reportar Incidencias</a>
                            @if (auth()->user()->is_admin)
                            <a class="nav-link dropdown-toggle list-group-item  " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Administracion</a>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="http://127.0.0.1:8000/usuarios">Usuarios</a></li>
                                <li><a class="dropdown-item" href="http://127.0.0.1:8000/proyectos">Proyectos</a></li>
                                </ul>
                            @endif    
                            @else
                            <a href="#" class="list-group-item ">Bienvenido</a>
                            <a href="#" class="list-group-item ">Reportar Creditos</a>
                            <a href="#" class="list-group-item ">Administracion</a>
                            @endif
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>