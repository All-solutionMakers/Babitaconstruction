<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class reflasSessiondata
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $response = $next($request);

        // Preserve flash data for the next request
        // $request->session()->forget('flash'); // Clear all flash data
        // $request->session()->flush('flash', []); // Clears flash data
        // $request->session()->flush(); // Clears all session data
        $request->session()->forget('_flash.old'); // Clears old flash data
        $request->session()->forget('_flash.new'); // Clears new flash data
        $request->session()->forget('_old_input'); // Clears new flash data
        $request->session()->forget('success'); // Clears new flash data
        $request->session()->forget('error'); // Clears new flash data

        $request->session()->forget('errors');
        $request->session()->forget('failedRows');

        return $response;
    }
}