<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ChangeLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->locale;
        $locales = ['vn','en'];
        if (in_array($locale, $locales)) {
            App::setLocale($locale);
        } else {
            App::setLocale('vn');
        }
        $request->route()->forgetParameter('locale');
        return $next($request);
    }
}
