<?php

namespace App\Http\Middleware;

use Closure;

class CheckAjaxMiddleware
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
        /**
         *     是否是ajax提交
         */
        if( ! $request->ajax() )
        {
            return response()->json(['status'=>false]);
        }
        return $next($request);
    }
}
