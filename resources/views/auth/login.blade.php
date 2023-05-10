<x-layout header="Accedi">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <form method="POST" action="{{route('login')}}" class="p-5 shadow">
                    
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
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3 form-check">
                      <input type="checkbox" name="remember" class="form-check-input" id="remember">
                      <label class="form-check-label" for="remember">Ricordati di me</label>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-secondary">accedi</button>
                        </div>
                        <div class="col-6 text-end">
                            <a class="linkCustom" href="{{route('register')}}">Non sei Registrato?</a>

                            <a class="linkCustom p-5" href="{{route('password.request')}}">Password dimenticata?</a>
                        </div>
                    </div>
                  
                </form>

            </div>
        </div>
    </div>

</x-layout>