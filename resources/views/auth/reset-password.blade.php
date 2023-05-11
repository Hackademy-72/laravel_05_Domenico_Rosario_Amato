<x-layout header="Reset password">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7">

                <form method="POST" action="{{ route('password.update') }}" class="p-5 shadow">
                    
                    @csrf
                    
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{$request->email}}">
                    </div>
            
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control">
                    </div>
            
                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">Confirm Password</label>
                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control"> 
                    </div>

                    <input type="submit" name="reset" id="reset" class="btn btn-secondary" value="Reset password">
                    
                </form>
                
            </div>            
        </div>
    </div>    
                
                
                    
                    
                
</x-layout>

                    

                        
            
            
            