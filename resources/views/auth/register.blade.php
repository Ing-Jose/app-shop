@extends('layouts.app')
@section('bady-class', 'login-page sidebar-collaps')
@section('content')
<div class="page-header header-filter" style="background-image: url('{{ asset('../img/bg7.jpg') }}'); background-size: cover; background-position: top center;">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <div class="card card-login">
          <form class="form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf
            <div class="card-header card-header-primary text-center">
              <h4 class="card-title">Registro</h4>
              <!-- <div class="social-line">
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-google-plus"></i>
                </a>
              </div> -->
            </div>
            <p class="description text-center">Completa tus Datos</p>
            <div class="card-body">
              <!-- input para el nombre -->
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Nombre..." name="name" value="{{ old('name') }}" required autofocus>
              </div>
              <!-- input para el Email -->
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">mail</i>
                  </span>
                </div>
                <input type="email" class="form-control" placeholder="Email..." name="email" value="{{ old('email') }}" required>
              </div>
              <!-- input para contraseña -->
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" class="form-control" placeholder="Password..." name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <!-- input para confirmar contraseña -->
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input id="password-confirm" type="password" class="form-control" placeholder="Password..." name="password_confirmation" required>
              </div>
            </div>
            <div class="footer text-center">
              <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">
                  Confirmar Registro
              </button>
              <!-- <a href="#pablo" class="btn btn-primary btn-link btn-wd btn-lg">Confirmar Registro</a> -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>
</div>
@endsection
