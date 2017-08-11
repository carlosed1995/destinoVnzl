<?php

namespace App\Http\Middleware;
use App\User;
use Closure;

class UsuarioAdmin
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
         $usuario_actual=\Auth::user();
        if($usuario_actual->tipo!=1){
       
               return   redirect('/index')->with('message', 'No tiene suficientes Privilegios para acceder a esta seccion');
        }
      //  return $next($request);
    }
}
