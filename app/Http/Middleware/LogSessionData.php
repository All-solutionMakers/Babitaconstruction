<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogSessionData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        Log::info('Session data before handling the request:', session()->all());
        $request->session()->reflash(); 
        $response = $next($request);

        Log::info('Session data after handling the request:', session()->all());

        return $response;
    }
}
