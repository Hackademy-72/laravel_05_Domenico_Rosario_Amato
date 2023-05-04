<nav class="navbar navbar-expand-lg bg-secondary navbar-custom " id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{route('homePage')}}">laravel-6</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white @if(Route::is('homePage')) active @endif" aria-current="page" href=" {{route('homePage')}} ">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white @if(Route::is('articoli')) active @endif" href=" {{route('articoli')}} ">inserisci gli articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white @if(Route::is('articoli-creati')) active @endif" href=" {{route('articoli-creati')}} ">Lista articoli inseriti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white @if(Route::is('contact_us')) active @endif" href=" {{route('contact_us')}} ">contattaci</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>