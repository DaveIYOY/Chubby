<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class user
{

    public function handle(Request $request, Closure $next)
    {
        {
            $username =$request->input('username');
            $password =$request->input('password');
    
    
            if($request->username == 'admin' && $request->password == 'admin'){
            
            
               return $next($request);
            }else{
             return redirect('loginform')->withErrors(['error' => 'Invalid credentials']);}
        }
    }
}
