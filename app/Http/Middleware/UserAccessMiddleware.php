<?php

namespace App\Http\Middleware;

use App\Http\Helpers\UserAccess\UserAccessChecker;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userAccess = (new UserAccessChecker())->getUserAccess($request);
        if ($userAccess){
            return $next($request);
        }
        abort(403);
    }
}
