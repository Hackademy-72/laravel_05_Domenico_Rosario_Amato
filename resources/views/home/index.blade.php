<x-layout header="annunci case inseriti">

    <div class="container my-5">
        <div class="row justify-content-center">

            @if(count($homes))
                
                @foreach ($homes as $home)

                    <div class="col-12 col-md-4 my-3">
                        <div class="card">
                            <img src="{{Storage::url($home->image)}}" class="card-img-top img-fluid" alt="immagine articolo">
                            <div class="card-body">
                                <h5 class="card-title text-warning">Tipologia: {{$home->typology}}</h5>
                                <p class="card-text">Grandezza: {{$home->size}} MTQ</p>
                                <h2 class="card-text bold">Prezzo: {{$home->price}} €</h3>
                                <p class="card-text">Descrizione: {{$home->description}}</p>   
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