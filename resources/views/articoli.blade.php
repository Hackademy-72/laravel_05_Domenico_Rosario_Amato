<x-layout header="INSERISCI GLI ARTICOLI">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">

            <form class="p-5 my-5 shadow" method="POST" action="{{route('articoli-store')}}">

                @csrf

                <div class="mb-3">
                  <label for="article" class="form-label">Nome articolo</label>
                  <input type="text" name="article" class="form-control" id="article">
                </div>

                <div class="mb-3">
                    <label for="categoy" class="form-label">Categoria articolo</label>
                    <input type="text" name="category" class="form-control" id="category" aria-describedby="emailHelp">
                </div>
                
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="float" name="price" class="form-control" id="price" aria-describedby="emailHelp">
                </div>
               
                <button type="submit" class="btn btn-secondary">Condividi il tuo articolo</button>
              </form>

        </div>
    </div>
</div>




</x-layout>