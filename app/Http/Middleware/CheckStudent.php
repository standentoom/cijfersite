<?php


namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckStudent
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
        if (auth::user()->teacher == 1) {
            
            return $next($request);
        }

        return redirect()->back()->with('message', 'Je bent geen docent');
        
    }
}
