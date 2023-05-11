  <nav class="navbar navbar-expand-lg bg-secondary navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{route('homePage')}}">laravel-6</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
      
          <ul class="navbar-nav ">

            <li class="nav-item">
              <a class="nav-link text-white @if(Route::is('homePage')) active @endif" aria-current="page" href=" {{route('homePage')}} ">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white @if(Route::is('articoli')) active @endif" href=" {{route('articoli')}} ">inserisci l'articolo</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link text-white @if(Route::is('articoli-creati')) active @endif" href=" {{route('articoli-creati')}} ">Lista articoli inseriti</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white @if(Route::is('home.create')) active @endif" href=" {{route('home.create')}} ">inserisci l'annuncio della casa</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white @if(Route::is('home.index')) active @endif" href=" {{route('home.index')}} ">Lista annunci case inseriti</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white @if(Route::is('contact_us')) active @endif" href=" {{route('contact_us')}} ">contattaci</a>
            </li>
            
            @auth
                
            <li class="nav-item dropdown bg-secondary">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Bentornat* {{Auth::user()->name}}
              </a>
              <ul class="dropdown-menu bg-secondary">
                <li><a class="dropdown-item text-white" href="#">profilo</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-white" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                
                <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
              </ul>
            </li>
      
            @else
                
            <li class="nav-item dropdown bg-secondary">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Benvenuto Ospite
              </a>
              <ul class="dropdown-menu bg-secondary">
                <li><a class="dropdown-item text-white" href="{{route('login')}}">Accedi</a></li>
                <li><a class="dropdown-item text-white" href="{{route('register')}}">Registrati</a></li>
                <li><hr class="dropdown-divider"></li>
              </ul>
            </li>

            @endauth
            
          </ul>
      </div>
    </div>
  </nav>
