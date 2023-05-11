<x-layout header="annunci case inseriti">

    @if (session('HomeCreated'))
        <div class="alert alert-success text-center">
            {{ session('HomeCreated') }}
        </div>
    @endif

    @if (session('HomeUpdated'))
        <div class="alert alert-success text-center">
            {{ session('HomeUpdated') }}
        </div>
    @endif

    @if (session('HomeDeleted'))
        <div class="alert alert-success text-center">
            {{ session('HomeDeleted') }}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">

            @if(count($homes))
                
                @foreach ($homes as $home)

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

            @else
                <div class="col-12 text-center">
                    <h2>non ci sono ancora annunci inseriti. Rprova più tardi :/</h2>
                </div>
            @endif    

        </div>
    </div>

</x-layout>