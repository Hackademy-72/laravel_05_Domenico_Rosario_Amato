<x-layout header="Registrati">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
              <form method="POST" action="{{route('register')}}" class="p-5 shadow">
                
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

                    <div class="mb-3">
                      <label for="name" class="form-label">Nome e Cognome</label>
                      <input type="name" name="name" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3">
                      <label for="password_confirmation" class="form-label">Conferma Password</label>
                      <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>

                    <div class="row">
                      <div class="col-6">
                          <button type="submit" class="btn btn-secondary">Registrati</button>
                      </div>
                      <div class="col-6 text-end">
                          <a class="linkCustom" href="{{route('login')}}">Sei già registrato?</a>
                      </div>
                  </div>
                  
              </form>

            </div>
        </div>
    </div>

  </x-layout>
                      