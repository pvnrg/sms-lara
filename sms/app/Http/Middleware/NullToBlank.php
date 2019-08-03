<?php

namespace App\Http\Middleware;

use Closure;
use Response;

class NullToBlank
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
    //     dd($request);
    //     $output = $next($request);
    //     //$output = json_decode($output);
     
    //    echo "<pre>"; print_r($dd);exit;

    //     $output = $output->toArray();
        
    //     array_walk_recursive($output, function (&$item, $key) {
    //         $item =  $item === null ? "" : $item;
    //     });

    $output = $next($request);
        // if($output instanceof Model)
        //     return response()->json(array_map(function ($value) {
        //         return $value === null ? '' : $value;
        //     }, $output->toArray()));
//dd($output); 

        if($output instanceof App\Job) {
            $modelAsArray = $output->toArray();
        dd(12323 );
            array_walk_recursive($modelAsArray, function (&$item, $key) {
                $item = $item === null ? '' : $item;
            });
        
            return response()->json($modelAsArray);
        }

        return $output;

        // return $output;

    }

    
}
