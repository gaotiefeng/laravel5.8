<?php

namespace App\Http\Middleware;

use Closure;

class CrossRequest
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
        $response = $next($request);
        $request->header('Access-Control-Allow-Origin', '*');
        $request->header('Access-Control-Allow-Credentials', 'true');
        $request->header('Access-Control-Allow-Headers', '*');
        if ($request->getMethod() == 'OPTIONS') {
            return $response;
        }
        return $response;
    }
}
