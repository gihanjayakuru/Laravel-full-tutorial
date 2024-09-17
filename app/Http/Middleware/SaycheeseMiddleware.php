<!-- php artisan make:middleware SaycheeseMiddleware -->
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SaycheeseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        dump("Hey chess midleware");
        // return $next($request);   this is calling for next middleware , if we comment out need to put like bottom (otherwise error beacuse no calling for next middleware)
        return new JsonResponse([
            'data' => 'cheeesee',
        ]);
    }
}
