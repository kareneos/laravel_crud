<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Laravel CRUD">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon"/>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    @yield('styles')
</head>

<body>
    <div class="navigation"> 
        <div class="nav-mobile d-block d-md-none">
            <nav class="navbar bg-dark navbar-dark fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{url('/')}}">Laravel CRUD</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <img class="navbar-ham" src="{{asset('/images/icon-nav.png')}}" alt="ícono menú">
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item d-flex justify-content-center">
                            <a class="nav-link d-flex align-items-center gap-3" href="{{route('products')}}">
                                <img class="sidebar-icon" src="{{asset('/images/icon-products.png')}}" alt="ícono productos">
                                Productos
                            </a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- lateral nav -->
        <div class="container-fluid d-none d-md-block">
            <div class="row">
                <div class="sidebar border-top border-right col-md-3 col-lg-2 p-0">
                    <div class="offcanvas-md offcanvas-end" id="sidebarMenu" >
                        <div class="admin-nav-lateral d-flex flex-column overflow-y-auto bg-dark">
                            <ul class="nav flex-column">
                                <li class="nav-item border-bottom">
                                    <a class="nav-link d-flex align-items-center gap-3" href="{{url('/')}}">
                                        Laravel CRUD
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link d-flex align-items-center gap-3" href="{{route('products')}}">
                                        <img class="sidebar-icon" src="{{asset('/images/icon-products.png')}}" alt="ícono productos">
                                        Productos
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    @yield('content')
</body>

<!-- Script -->
<script src="{{asset('/js/bootstrap.js')}}"></script>
<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/main.js')}}"></script>

@yield('js')
</body>
</html>
