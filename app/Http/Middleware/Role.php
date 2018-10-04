<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class Role
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
        $user = $request->user();

        if (! $user)
            return response()->json([
                'errors' => "Unauthorized Request"
            ], Response::HTTP_FORBIDDEN);

        $action = $request->route()->getAction();

        $route_roles = isset($action['roles'])? $action['roles']: null;

        if ($user->hasAnyRoles($route_roles) || !$route_roles)
            return $next($request);
        return response()->json([
            'errors' => "Unauthorized Request"
        ], Response::HTTP_FORBIDDEN);
    }
}
