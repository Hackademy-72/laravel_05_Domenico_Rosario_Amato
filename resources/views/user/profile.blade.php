<x-layout header="profilo utente">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title p-3">I tuoi dati:</h5>
                    <div class="card-text p-3">Nome Utente: {{Auth::user()->name}}</div>
                    <div class="card-text p-3">Email: {{Auth::user()->email}}</div>
                    <div class="card-text p-3">Iscritto il: {{Auth::user()->created_at}}</div>

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#userDestroy">
                        Disiscriviti dal sito
                    </button>

                </div>
            </div>

        </div>
    </div>

    <div class="container my-4">
        <div class="row justify-content-center">

            @foreach (Auth::user()->homes->sortByDesc('created_at') as $home)
              
            <div class="col-12 col-md-4 my-3">
                <div class="card">
                    <img src="{{Storage::url($home->image)}}" class="card-img-top img-fluid" alt="immagine articolo">
                    <div class="card-body">
                        <h5 class="card-title">Tipologia: {{$home->typology}}</h5>
                        <h3 class="card-text">Grandezza: {{$home->size}} MTQ</h3>

                        
                        <hr>
                        <p class="small">Creato da: {{$home->user_id ? $home->user->name : 'Utente guest'}}</p>
                        

                        <div class="mt-3 d-inline">

                            <a href="{{route('home.show', compact('home'))}}" class="btn btn-secondary">Maggiori informazioni</a>
                            
                            @if($home->user_id && $home->user->id == Auth::user()->id)
                                <a href="{{route('home.edit', compact('home'))}}" class="btn btn-warning">Modifica annuncio</a>
                                <form action="{{route('home.destroy', compact('home'))}}" method="POST" class="pt-3">
                                    
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Cancella annuncio</button>
                                
                                </form>
                            @endif
                                
                        </div>
                        

                    </div>
                </div>    
            </div>

            @endforeach

        </div>
    </div>


    {{-- MODALE --}}

    <div class="modal" tabindex="-1" id="userDestroy">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Sei sicuro di voler eliminare il tuo account?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>L'operazione sarà definitiva</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>

              <form method="POST" action="{{route('user.destroy')}}" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger ">Disiscriviti dal sito</button>
              </form>
            
            </div>
          </div>
        </div>
      </div>


</x-layout>