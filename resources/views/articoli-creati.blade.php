<x-layout header="LISTA ARTICOLI">

<div class="container my-5">
    <div class="row justify-content-center">
        
        @foreach($articles as $article)
            <div class="col-12 col-md-4 my-4">
                <div class="card">
                    <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-warning">{{$article->article}}</h5>
                        <p class="card-text">Categoria: {{$article->category}}</p>
                        <h3 class="card-text bold">Prezzo: {{$article->price}} €</h3>
                    </div>
                </div>    
            </div>
        @endforeach
    </div>
</div>

</x-layout>
                    