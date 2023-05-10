<x-layout header="annunci case inseriti">

    @if (session('HomeCreated'))
        <div class="alert alert-success">
            {{ session('HomeCreated') }}
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
                                <h2 class="card-text ">Prezzo: {{$home->price}} €</h2>
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