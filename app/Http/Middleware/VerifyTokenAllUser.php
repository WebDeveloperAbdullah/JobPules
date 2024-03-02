<?php

namespace App\Http\Middleware;

use App\Helper\JWTToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyTokenAllUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $token= $request->cookie('token');
        $result=JWTToken::checkToken($token);
        if($result=="unautorized"){
            return redirect("/login")->with("error","Login Error");
    }else{
        $request->headers->set('email', $result->email);
        $request->headers->set('id', $result->id);
        return $next($request);
    }
}

}
