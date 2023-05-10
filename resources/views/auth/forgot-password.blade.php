<x-layout header="Recupero password">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
              <form method="POST" action="{{route('forgot-password')}}" class="p-5 shadow">
                
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
                
                    <div class="mb-3">
                      <label for="email" class="form-label">email</label>
                      <input type="email" name="email" class="form-control" id="email">
                    </div>

                    
              </form>

            </div>
        </div>
    </div>

  </x-layout>
                      

</x-layout>