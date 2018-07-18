<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        // Aici verificam daca este a incercat sa se conecteze
        if ($request->user() === null) {
            return response("Permisiuni insuficiente", 401);
        }
        //Aici preluam actiunea trimisa pe ruta din web
        $actions = $request->route()->getAction();
        //Aici verificam daca utilizatorul are vre-un rol
        $roles = isset($actions['roles']) ? $actions['roles'] : null;
        if ($request->user()->hasAnyRole($roles) || !$roles) {
            // Aici spunem daca totul este in regula si poate sa mearga mai departe
            return $next($request);
        }
        return response("Permisiuni insuficiente", 401);
    }
}
