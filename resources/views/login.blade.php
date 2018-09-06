@extends('layout')

@section('content')
  <body class="login-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="dropdown button-dropdown">
        <a href="#" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-header">Dropdown header</a>
          <a class="dropdown-item" href="#">Action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">One more separated link</a>
        </div>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand"  >
          Now Ui Kit
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image={{ asset('img/blurred-image-1.jpg') }}>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Futuro enlace</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">Algún día</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Sígueme Twitter" data-placement="bottom" href="https://twitter.com/xtravaa" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Buscame en Facebook" data-placement="bottom" href="https://www.facebook.com/alvisex" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Sigueme Instagram" data-placement="bottom" href="https://www.instagram.com/alvise.x" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url({{asset('img/login.jpg')}})"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">

            <form class="form" method="" action="/inicio">
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src={{ asset('/img/now-logo.png') }} alt="">
                </div>
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Usuario..." name="username" id="username">
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="password" placeholder="Constraseña..." class="form-control" name="pass" id="pass" />
                </div>
              </div>
              <div class="card-footer text-center">
               {{--  <input type="submit" class="btn btn-primary btn-round btn-lg btn-block"> --}}
                <a  onclick="validar()" class="btn btn-primary btn-round btn-lg btn-block">Ingresar</a>

                <div class="pull-left">
                  <h6>
                    <a onclick="inicarQR()"  class="btn btn-link" >Usar QR</a>
                  </h6>
                </div>
                <div class="pull-right">
              </div>
            </form>
            </div>

          <video id="qr-video" width="200px" height="200px" ></video>

        <script>
          function inicarQR() {
              const scanner = new Instascan.Scanner({
                  video: document.getElementById('qr-video')
              });

              scanner.addListener('scan', function (content) {
                  // alert('Se detectó: ' + content);

                  fetch(`/validarqr?token=${content}`)
                      .then(function (response) {
                          console.log(response);
                          return response.json()
                      })
                      .then(function (usuario) {
                          alert('Bienvenido')
                          console.log(usuario)
                          window.location.replace("/inicio");
                      })
                      .catch(function (reason) {
                          alert('Usuario invalido')
                          console.log('Algo fallo' + reason)
                      })
              });

              Instascan.Camera.getCameras().then( cameras => {
                  if (cameras.length > 0 )
                    scanner.start(cameras[0]);
              })
          }

          function validar() {
              var user = document.getElementById('username').value;
              var pass = document.getElementById('pass').value;

              fetch(`/validar?username=${user}&pass=${pass}`)
                  .then(function (response) {
                      return response.json()
                  })
                  .then(function (usuario) {
                      console.log(usuario)
                      window.location.replace("/inicio");
                  })
                  .catch(function (reason) {
                      alert('Usuario invalido')
                      console.log('Algo fallo' + reason)
                  })
          }
        </script>
        </div>
      </div>
    </div>

  <footer class="footer">
    <div class="container">
      <nav>
        <ul>
          <li>
            <a href="">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="">
              About Us
            </a>
          </li>
          <li>
            <a href="">
              Blog
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright" id="copyright">
        &copy;
        <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
        </script>, Designed by
        Invision. Coded by
        Creative Tim.  Adapted by
        <a href="https://facebook.com/alvisex" >Alvise Leal</a>.
      </div>
    </div>
  </footer>
  @endsection