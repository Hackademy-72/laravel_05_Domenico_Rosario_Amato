<x-layout header="Accedi">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
               @csrf 
                <form method="POST" action="{{route('login')}}" class="p-5 shadow">
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

                    <button type="submit" class="btn btn-secondary">accedi</button>
                  </form>

            </div>
        </div>
    </div>

</x-layout>