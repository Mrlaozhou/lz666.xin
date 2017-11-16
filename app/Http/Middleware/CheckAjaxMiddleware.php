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
        // 防盗链操作
//        dd(server(['HTTP_REFERER','REMOTE_ADDR']));
        if( $request->ajax() )
        {
            return $next($request);
        }
        return response()->json([ 'status'=>false, 'remark'=>'仅限ajax访问' ]);
    }
}
