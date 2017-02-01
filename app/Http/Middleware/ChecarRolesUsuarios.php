<?php

namespace App\Http\Middleware;

use Closure;

class ChecarRolesUsuarios
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $rol)
    {
        if(auth()->user()->hasRoles($rol))
        {
            return $next($request);
        }

        return redirect('/');
    }
}
