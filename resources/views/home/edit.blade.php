<x-layout header="MODIFICA IL TUO ANNUNCIO">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">

            <form class="p-5 my-5 shadow" method="POST" action="{{route('home.update', compact('home'))}}" enctype="multipart/form-data">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                
                @csrf

                @method('put')

                <div class="mb-3">
                  <label for="typology" class="form-label">Tipologia casa <span class="text-danger">*</span></label>
                  <input type="text" name="typology" class="form-control" id="typology" value="{{ $home->typology }}" placeholder="villa, appartamento, bifamiliare, monolocale, ecc.">
                </div>

                <div class="mb-3">
                    <label for="size" class="form-label">Grandezza casa (MTQ) <span class="text-danger">*</span></label>
                    <input type="text" name="size" class="form-control" id="size" value="{{ $home->size }}" placeholder="200, 70, ecc.">
                </div>

                <div class="mt-3">
                    <label for="ActualImage" class="form-label bold">Immagine attuale =></label>
                    <img  width="200" src="{{Storage::url($home->image)}}" alt="immagine casa">

                </div>
                
                <div class="mb-3">
                    <label for="image" class="form-label">Immagine casa <span class="text-danger">*</span></label>
                    <input type="file" name="image" class="form-control" id="image" >
                </div>

                {{-- CHECKBOX MANY TO MANY --}}
                <div class="mb-3">
                    <label for="" class="form-label">Implementa un articolo a tua scelta</label><br>
                    
                    @foreach($articles->diff($home->articles) as $article)
                        <input type="checkbox" id="{{$article->id}}" value="{{$article->id}}" name="articles[]">

                        <label for="{{$article->id}}" class="form-label">{{$article->article}}</label><br>
                    @endforeach

                </div>
                {{-- FINE CHECKBOX MANY TO MANY --}}

                
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo casa <span class="text-danger">*</span></label>
                    <input type="float" name="price" class="form-control" id="price" value="{{ $home->price }}" placeholder="100000, 60000, ecc.">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione casa <span class="text-danger">*</span></label>
                    <textarea name="description" id="description" cols="30" rows="7" class="form-control"> {{$home->description}} </textarea>
                </div>

                <button type="submit" class="btn btn-secondary">Modifica l'annuncio della casa</button>
                <a href="{{route('home.index')}}" class="btn btn-secondary">Torna indietro</a>

                <h6 class="pt-5 text-muted">I campi designati da <span class="text-danger">*</span> sono obbligatori</h6>
              </form>

        </div>
    </div>
</div>




</x-layout>