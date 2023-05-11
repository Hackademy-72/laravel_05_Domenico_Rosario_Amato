<x-layout header="profilo utente">

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


</x-layout>