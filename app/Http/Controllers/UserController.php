<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    public function profile(){

        return view('user.profile');
    }
    
    public function destroy(){

        $user_homes = Auth::user()->homes;

        foreach($user_homes as $user_home){

            $user_home->update([
                'user_id'=> NULL,
            ]);
        }

        Auth::user()->delete();

        return redirect(route('homePage'))->with('UserDeleted', 'hai cancellato il tuo account :/ speriamo di rivederci presto');
    }
}
