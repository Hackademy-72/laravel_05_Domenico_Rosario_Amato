<x-layout header="Recupero password">

  @if (session('status'))
    <div class="mb-4 font-medium text-sm alert text-center bg-success">
        {{ session('status') }}
    </div>
  @endif
      
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
              <form method="POST" action="{{route('password.email')}}" class="p-5 shadow">
                
                    
                  @csrf 
                
                    <div class="mb-3">
                      <label for="email" class="form-label">email</label>
                      <input type="email" name="email" class="form-control" id="email">
                    </div>

                    <button type="submit" class="btn btn-secondary">Recupera Password</button>

                    
              </form>

            </div>
        </div>
    </div>

  </x-layout>
                      