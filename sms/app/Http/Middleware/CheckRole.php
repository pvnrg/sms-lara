<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $masterEmail = env('MASTER_ADMIN', null);


        //allow Master Admin to All Process
        if (!is_null($masterEmail) && $request->user()->email == strtolower($masterEmail)) {
            return $next($request);
        }


        // Get the required roles from the route
        $roles = $this->getRequiredRoleForRoute($request->route());
        // Check if a role is required for the route, and
        // if so, ensure that the user has that role.
        if ($request->user()->hasRole($roles) || !$roles) {
            return $next($request);
        }

        Auth::user()->hasPermission('access.users');

        return response(view('auth.accessDenied'), 401);


//        return response([
//            'error' => [
//                'code' => 'INSUFFICIENT_ROLE',
//                'description' => 'You are not authorized to access this resource.',
//            ],
//        ], 401);
    }

    private function getRequiredRoleForRoute($route)
    {
        $actions = $route->getAction();

        return isset($actions['roles']) ? $actions['roles'] : null;
    }
}
