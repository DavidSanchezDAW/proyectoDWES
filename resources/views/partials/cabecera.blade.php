<!-- <nav class="navbar navbar-dark bg-light">
  <a class="navbar-brand" href="#">
    <img src="{{asset('img/logo.png')}}" width="30" height="30" alt="">
  </a>
    <a class="nav-link" href="{{ route('miembros') }}"> Miembros</a>
    <a class="nav-link" href="{{ route('eventos') }}"> Eventos</a>
    <a class="nav-link" href="{{ route('contacto') }}"> Contacto</a>
    <a class="nav-link" href="{{ route('dondeEstamos') }}"> Donde estamos</a>
</nav> -->
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
         <img class="logo" src="{{asset('img/logo.png')}}" width="30" height="30" alt="">
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a class="nav-link px-2 text-white" href="{{ route('miembros') }}">Miembros</a></li>
          <li><a class="nav-link px-2 text-white" href="{{ route('eventos') }}">Eventos</a></li>
          <li><a class="nav-link px-2 text-white" href="{{ route('contacto') }}">Contacto</a></li>
          <li><a class="nav-link px-2 text-white" href="{{ route('dondeEstamos') }}">Donde estamos</a></li>
        </ul>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a class="nav-link px-2 text-white" href="{{ route('login') }}">Login</a></li>
          <li><a class="nav-link px-2 text-white" href="{{ route('register') }}">Register</a></li>
        </ul>
      </div>
    </div>
  </header>