<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Common\Constant;

class CheckAdminRole
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
        if ($request->session()->has('loginInfo') && $request->session()->get('loginInfo')->quyen === Constant::ROLE['ADMIN']) {
            return $next($request);
        }
        abort(404);
    }
}
