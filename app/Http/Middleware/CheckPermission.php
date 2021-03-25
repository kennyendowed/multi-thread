<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        $permission = explode('|', $permission);


        if(checkPermission($permission)){
            return $next($request);
        }

        $data=array(
        'message'=>"You do not have the required permission to access this resource please contact admin",
        'code'=>'403'
        );

                  return response()->json(compact('data'));
    }
}
