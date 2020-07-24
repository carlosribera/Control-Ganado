<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>@yield('titulo', 'Control GANADO') | Redes&Reses</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset("assets/$theme/css/bootstrap.min.css")}}">

    @yield("styles")
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset("assets/$theme/dashboard.css")}}" rel="stylesheet">
</head>

<body>
    <!-- Inicio header -->
    @include("theme/$theme/header")
    <!-- Fin header -->
    <div class="container-fluid">
        <div class="row">
            <!-- Inicio Aside -->
            @include("theme/$theme/aside")
            <!-- Fin Aside -->

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                
                <!-- Inicio contenido   -->
                    @yield('contenido')
                <!-- Fin contenido   -->

            </main>
        </div>
    </div>
    <script src="{{asset("assets/$theme/js/jquery-3.5.1.slim.min.js")}}"></script>
    <script>
        window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="{{asset("assets/$theme/js/bootstrap.bundle.js")}}">
    </script>
    <script src="{{asset("assets/$theme/js/feather.min.js")}}"></script>
    <script src="{{asset("assets/$theme/js/Chart.js/2.7.3/Chart.min.js")}}"></script>
    <script src="{{asset("assets/$theme/dashboard.js")}}">
    </script>
    @yield("scripts")
</body>

</html>