<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        //检测用户session是否存在
        if(session('id')){
            //进入下一层操作(请求)
            return $next($request);
        }else{
            //跳转登录页面去
            return  redirect('/login');
        }
    
    }
}
