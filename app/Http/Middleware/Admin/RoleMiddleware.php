<?php


namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::user()->hasPermissionTo('Administer Roles')) //If user has this //permission
        {
            return $next($request);
        }

        return abort('401');
    }
}