<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Kit by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files esto lo da laravle para hacer referencia a rutas absolutas {{asset("")}} -->
  <link href="{{ asset('/css/material-kit.css?v=2.0.4') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('/css/demo.css') }}" rel="stylesheet" />
</head>

<!-- declaramos una seccion para que dependiendo de la pagina cambie login-page sidebar-collapse -->
<!-- esta seccion llevara como nombre bady-class por es una clase que se aplica al elemento bady -->
<body class="@yield('bady-class')">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <!-- href="/register" ó {{ url('/register')}} ó {{ url('register')}} hace referencia a la ruta raiz -->
        <a class="navbar-brand" href="{{ url('/')}}">
          App Shop </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse">
        <!-- opsiones del menú -->
        <ul class="navbar-nav ml-auto">
          <!-- esto es un condicional, primera condicion usuario invitado segunda usuario registrado -->
          @guest
              <li class="nav-item">
                  <!-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> -->
                  <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
              </li>
              <li class="nav-item">
                  <!-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> -->
                  <a class="nav-link" href="{{ route('register') }}">Registrar</a>
              </li>
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <!-- guarda el nombre del usuario -->
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <!-- obsion para cerrar seccion de usuario logeados -->
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          Cerrar seccion
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
          <!-- botones de icono de redes sociales  -->
          <!-- <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li> -->

        </ul>
      </div>
    </div>
  </nav>
  <div class="wrapper">
    <!-- se declara una secion que se definira en las vistas hijas
        la declaramos con la palabra yield-->
    @yield('content')

  </div>


  <!--   Core JS Files   -->
  <script src="{{ asset('/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/plugins/moment.min.js') }}"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{ asset('/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <!--	Plugin for Sharrre btn -->
  <script src="{{ asset('/js/plugins/jquery.sharrre.js') }}" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('/js/material-kit.js?v=2.0.4') }}" type="text/javascript"></script>
</body>

</html>
