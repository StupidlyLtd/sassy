<?php

namespace Stupidly\Sassy\App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsSassyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->user() && function_exists($request->user()->isSassyAdmin()) && $request->user()->isSassyAdmin())
            return $next($request);

        return redirect('/');
    }
}
