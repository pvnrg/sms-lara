<?php

namespace App\Http\Middleware;

use Closure;

class PermissionCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {


        $masterEmail = env('MASTER_ADMIN', null);


        //allow Master Admin to All Process
//        if (!is_null($masterEmail) && $request->user()->email == strtolower($masterEmail)) {
//            return $next($request);
//        }


        if (auth()->check()) {
            if (!is_null($masterEmail) && strcasecmp(auth()->user()->email, trim($masterEmail)) == 0) {
                return $next($request);
            }

            if (auth()->user()->can($permission)) {
                return $next($request);
            }

        }


        if (auth()->check() && auth()->user()->can($permission)) {
            return $next($request);
        }


//        flash('Unauthorized access', 'danger')->overlay();

        return response(view('auth.accessDenied'));
//        return redirect('/');
    }
}
