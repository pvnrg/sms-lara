<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class LanguageMiddleware
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


        if ($request->get('lang')) {
            $lang = $request->get('lang');
            $request->session()->replace(['_lang' => $lang]);

        } else if ($request->session()->has('_lang')) {
            $lang = $request->session()->get('_lang');
        } else {

            if (Auth::check()) {
                $lang = Auth::user()->language;
            } else {
                $lang = 'en';
            }

        }
        \App::setLocale($lang);

//        if ($request->is('language/*') or $request->is('language')) {
//            return $next($request);
//        }
//
//        if ($request->session()->has('_lang')) {
//            $lang = $request->session()->get('_lang');
//            \App::setLocale($lang);
//        }
        return $next($request);
    }
}
