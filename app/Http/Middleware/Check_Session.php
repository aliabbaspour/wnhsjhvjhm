<?php

namespace App\Http\Middleware;

use Closure;

class Check_Session
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
        $name = $request->path();
        $step = $request->session()->get('step');

        if ($step == "verify")
        {
            return redirect('/');
        }

        return $next($request);
    }
}
