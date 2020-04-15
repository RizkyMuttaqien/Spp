<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
        if($user_auth->level == 'admin'){
            return $next($request);
        }else{
            return abort(404);
        }
    }
}
