<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class SiswaMiddleware
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
        if($user_auth->level == 'siswa'){
            return $next($request);
        }else{
            return abort(404);
        }
    }
}
