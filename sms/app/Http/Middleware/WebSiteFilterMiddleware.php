<?php

namespace App\Http\Middleware;

use App\WebSite;
use Closure;

class WebSiteFilterMiddleware
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

        if (\App::runningInConsole()) {
            return $next($request);
        }
        //

        $parse = (parse_url($request->url()));

        $host = strtolower($parse['host']);

        define('_WEBSITE', $host);

        $data = $this->findSiteData($host);

        if ($data) {
            define('_WEBSITE_ID', $data->id);
            define('_WEBSITE_NAME', $data->name);
            define('_WEBSITE_DESCRIPTION', $data->description);
            define('_MASTER', $data->master);

        } else {
            return response(__('Oops! No site found.'), 404);
        }

        return $next($request);
    }

    protected function findSiteData($host)
    {
        return WebSite::where('domain', $host)->first();
    }
}
