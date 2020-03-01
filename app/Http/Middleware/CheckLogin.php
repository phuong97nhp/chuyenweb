<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App\Model\Users;

class CheckLogin
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
        if(Session::has('account') == true){
            $arr = [
                'user_account'=>Session::get('account')["user"],
                'user_password'=>Session::get('account')["password"],
            ];
            
            if(Users::where($arr)->count()==1){
                return redirect()->intended(route('home'));
            }
            else{
                return $next($request);
            }
        }
        else{
            return $next($request);
        }
    }
}
