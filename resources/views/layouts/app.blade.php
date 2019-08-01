<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/javascript.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- CDN Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- FIN - CDN Bootstrap-->
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

</head>
<body>
            <!-- vertical navbar -->
            <header>
            <div class="vertical-nav bg-white" id="sidebar" style="background: black;">
                <div class="py-4 px-3 mb-4 bg-light">
                    <div class="media d-flex align-items-center">
                        <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                        <div class="media-body">
                            <h4 class="m-0">Pepito Perez</h4>   
                            <p class="font-weight-light text-muted mb-0"> <strong style="color: red;">Perfil: </strong> Web developer</p>
                        </div>
                    </div>
                </div>

                <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic bg-light" id="btnNav">
                            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic bg-light" id="btnNav">
                            <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                            Acerca
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic bg-light">
                            <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                            Servicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic bg-light">
                            <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                            Galeria
                        </a>
                    </li>
                </ul>


                <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Sesión</p>
    
                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic bg-light">
                            <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                            Cerrar Sesión
                        </a>
                    </li>
                </ul>
                <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Charts</p>

                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic bg-light">
                            <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                            Area charts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic bg-light">
                            <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                            Bar charts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic bg-light">
                            <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                            Pie charts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic bg-light">
                            <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
                            Line charts
                        </a>
                    </li>
                </ul>

            </div>
        </header>
        <!-- End vertical navbar -->

        <!-- Page content holder -->
        <div class="page-content p-4" id="content">
            <!-- Toggle button -->
            <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
                <i class="fa fa-bars mr-2"></i>
                <small class="text-uppercase font-weight-bold">Menu</small>
            </button>

            <div class="row text-white">
                <div class="bg-white p-5 rounded my-12 shadow-sm">
                    <h2 class="lead font-italic text-gray display-4 text-muted text-center">Bootstrap vertical nav</h2>
                    <hr>
                    <p class="lead font-italic text-gray mb-0 text-muted">Build a fixed sidebar using Bootstrap 4 vertical navigation and media objects.</p>
                    <p class="lead font-italic text-gray text-muted">Snippet by <a href="#" class="text-gray">
                        <u>Bootstrapious</u></a>
                    </p>
                    
                    <p class="lead font-italic mb-0 text-muted">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                </div>               
            </div>
    
            <div class="separator"></div>

            <div class="row text-white">
                <div class="bg-white p-5 rounded my-12 shadow-sm">
                    <h2 class="lead font-italic text-gray display-4 text-muted text-center">Bootstrap vertical nav</h2>
                    <hr>
                    <p class="lead font-italic text-gray mb-0 text-muted">Build a fixed sidebar using Bootstrap 4 vertical navigation and media objects.</p>
                    <p class="lead font-italic text-gray text-muted">Snippet by <a href="#" class="text-gray">
                        <u>Bootstrapious</u></a>
                    </p>
                    
                    <p class="lead font-italic mb-0 text-muted">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                </div>               
            </div>
    

        </div>
        <!-- FIN - Page content holder -->



    <!-- CDN JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- FIN - CDN JQuery -->
    <!-- CDN Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- FIN - CDN Bootstrap-->
</body>
</html>
