<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('api')->check()) {
            return response()->json(['messages' => 'Unauthenticated.','status'=>'false'], 200);
        }
        return $next($request);
    }
}
