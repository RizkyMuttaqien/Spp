<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class PetugasMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user_auth = Auth::user();
        if($user_auth->level == 'petugas' OR $user_auth->level == 'admin'){
            return $next($request);
        }else{
            return abort(404);
        }
    }
}
