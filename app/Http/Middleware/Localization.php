<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;

class Localization
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
        if (Request::segment(1) === "en") {
            session()->put('locale', 'en');
        } else {
            session()->put('locale', 'tr');
        }
        App::setlocale(session()->get('locale'));
        return $next($request);
    }
}
