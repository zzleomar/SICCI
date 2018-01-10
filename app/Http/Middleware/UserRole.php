<?php

namespace App\Http\Middleware;

use Closure;

class UserRole
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
        if($request->user()){
            switch ($request->user()->tipo) {
                case 'Administrador': //si es un administrador
                    return redirect('administrador');
                    break;
                
                case 'Comerciante': //si es un comerciante
                    return redirect('comerciante');
                    break;
            }
        }
        return $next($request);
    }
}
