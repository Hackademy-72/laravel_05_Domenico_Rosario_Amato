<x-layout header="INSERISCI GLI ARTICOLI">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">

            <form class="p-5 my-5 shadow" method="POST" action="{{route('articoli-store')}}" enctype="multipart/form-data">

                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                  <label for="article" class="form-label">Nome articolo <span class="text-danger">*</span></label>
                  <input type="text" name="article" class="form-control" id="article" value="{{ old('article') }}">
                </div>

                <div class="mb-3">
                    <label for="categoy" class="form-label">Categoria articolo <span class="text-danger">*</span></label>
                    <input type="text" name="category" class="form-control" id="category" value="{{ old('category') }}">
                </div>

                
                <div class="mb-3">
                    <label for="image" class="form-label">Immagine articolo</label>
                    <input type="file" name="image" class="form-control" id="image" >
                </div>
                
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo <span class="text-danger">*</span></label>
                    <input type="float" name="price" class="form-control" id="price" value="{{ old('price') }}">
                </div>
               
                <button type="submit" class="btn btn-secondary">Condividi il tuo articolo</button>

                <h6 class="pt-5 text-muted">I campi designati da <span class="text-danger">*</span> sono obbligatori</h6>
              </form>

        </div>
    </div>
</div>




</x-layout>