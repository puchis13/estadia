<div class="container-fluid">
<nav class="navbar navbar-expand-md  fixed-top bg-light text-black"  >
  <div class="container-fluid">

      <a class="navbar-brand" href="{{ route('inicio') }}"> <img src="{{ asset('imagenes/logo/logoBO10.png') }}" width=200px height=50px alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="bombasDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Bombas
          </a>
          <ul class="dropdown-menu " style="max-height: 300px;
          overflow-x: hidden;
          overflow-y: scroll;" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('altamira') }}">Altamira</a></li>
              <li><a class="dropdown-item" href="{{ route('armstrong') }}">Armstrong</a></li>
              <li><a class="dropdown-item" href="{{ route('aurora') }}">Aurora picsa</a></li>
              <li><a class="dropdown-item" href="{{ route('barmesa') }}">Barmesa</a></li>
              <li><a class="dropdown-item" href="{{ route('franklin') }}">Franklin Electric</a></li>
              <li><a class="dropdown-item" href="{{ route('flygt') }}">Flygt</a></li>
              <li><a class="dropdown-item" href="{{ route('grundfos') }}">Grundfos</a></li>
              <li><a class="dropdown-item" href="{{ route('impel') }}">Impel</a></li>
              <li><a class="dropdown-item" href="{{ route('jandy') }}">Jandy</a></li>
              <li><a class="dropdown-item" href="{{ route('mann') }}">Mann pumps</a></li>
              <li><a class="dropdown-item" href="{{ route('netzsch') }}">Netzsch</a></li>
              <li><a class="dropdown-item" href="{{ route('pentair') }}">Pentair</a></li>
              <li><a class="dropdown-item" href="{{ route('tsurumi') }}">Tsurumi Pump</a></li>
              <li><a class="dropdown-item" href="{{ route('wilo-scot') }}">Wilo/Scot</a></li>
              <li><a class="dropdown-item" href="{{ route('wdm') }}">Wdm</a></li>
              <li><a class="dropdown-item" href="{{ route('zoeller') }}">Zoeller</a></li>
          </ul>
          <!-- end menu desplegable -->
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="otrasLineasDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Otras lineas de productos
          </a>
          <!-- start menu desplegable -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('contraincendios') }}">Variadores</a></li>
              <li><a class="dropdown-item" href="{{ route('hidroneumaticos') }}">Tableros</a></li>
              <li><a class="dropdown-item" href="{{ route('motores') }}">Motores</a></li>
          </ul>
          <!-- end menu desplegable -->
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ route('blog') }}">Blog</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ route('tienda') }}">Tienda</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
      </li>
      @if (Route::has('login'))
          @auth
              <li class="nav-item ">
                  <a class="nav-link" href="{{ route('profile.show') }}">Perfil</a>
              </li>
              @if (auth()->user()->can('modificacion'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                  </li>
              @endif
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          this.closest('form').submit();">
                          Salir   
                      </a>
                  </li>
              </form>
          @else
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Acceder</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">Registrate Aqui</a>
                  </li>
              @endif
          @endauth
      @endif
      </ul>
  </div>
  </div>
</nav>
</div>
<!-- end nav -->