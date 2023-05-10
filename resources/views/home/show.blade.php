<x-layout header="{{$home->typology}}">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card">
                    <img src="{{Storage::url($home->image)}}" class="card-img-top img-fluid" alt="immagine articolo">
                    <div class="card-body">
                        <h5 class="card-title">Tipologia: {{$home->typology}}</h5>
                        <h3 class="card-text">Grandezza: {{$home->size}} MTQ</h3>
                        <h2 class="card-text ">Prezzo: {{$home->price}} €</h2>
                        <hr>
                        <p class="card-text">Descrizione: {{$home->description}}</p>
                        <hr>
                        <p>Annuncio creato il. {{$home->created_at}}</p>
                        <a href="{{route('home.index', compact('home'))}}" class="btn btn-secondary">Torna indietro</a>
                    </div>
                </div>    
            </div>
        </div>
    </div>
                        


</x-layout>