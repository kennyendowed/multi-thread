<?php

    namespace App\Http\Middleware;

    use Closure;
    use JWTAuth;
    use Exception;
    use Illuminate\Support\Facades\Auth;
    use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

    class JwtMiddleware extends BaseMiddleware
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
            try {
                $user = JWTAuth::parseToken()->authenticate();
            } catch (Exception $e) {
                if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                  return response()->json([
                      'status' => 'Authorization Token is Invalid'
                  ], 401);

                }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){

                  return response()->json([
                      'status' => 'Authorization Token is Expired'
                  ], 401);
                }
                else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenBlacklistedException) {
                  return response()->json([
                      'status' => 'Authorization Token blacklisted'
                  ], 400);

                }
                else if ($e instanceof \Tymon\JWTAuth\Exceptions\UserNotDefinedException) {
                  return response()->json([
                      'status' => 'User Not Defined'
                  ], 404);
                }
                else{
                  return response()->json([
                      'status' => 'Authorization Token not found'
                  ], 404);

                }
            }
            return $next($request);
        }

    //     public function handle($request, Closure $next)
    // {
    //     try
    //     {
    //         if (! $user = JWTAuth::parseToken()->authenticate() )
    //         {
    //              return response()->json([
    //                'code'   => 101 ,// means auth error in the api,
    //                'response' => 'User Not Defined' // nothing to show
    //              ]);
    //         }
    //     }
    //     catch (TokenExpiredException $e)
    //     {
    //         // If the token is expired, then it will be refreshed and added to the headers
    //         try
    //         {
    //             $refreshed = JWTAuth::refresh(JWTAuth::getToken());
    //             $user = JWTAuth::setToken($refreshed)->toUser();
    //             header('Authorization: Bearer ' . $refreshed);
    //         }
    //         catch (JWTException $e)
    //         {
    //              return response()->json([
    //                'code'   => 103, // means not refreshable
    //                'response' =>'Authorization Token is not refreshable'// nothing to show
    //              ]);
    //         }
    //     }
    //     catch (TokenBlacklistedException $e)
    //     {
    //          return response()->json([
    //            'code'   => 400, // means not refreshable
    //            'response' =>'Authorization Token blacklisted'// nothing to show
    //          ]);
    //     }
    //     catch (TokenInvalidException $e)
    //     {
    //          return response()->json([
    //            'code'   => 400, // means not refreshable
    //            'response' =>'Authorization Token Invalid'// nothing to show
    //          ]);
    //     }
    //     catch (UserNotDefinedException $e)
    //     {
    //          return response()->json([
    //            'code'   => 404, // means not refreshable
    //            'response' =>'User Not Defined'// nothing to show
    //          ]);
    //     }
    //     catch (JWTException $e)
    //     {
    //         return response()->json([
    //                'code'   => 101, // means auth error in the api,
    //                'response' => $e // nothing to show
    //         ]);
    //     }
    //
    //     // Login the user instance for global usage
    //     Auth::login($user, false);
    //
    //     return  $next($request);
    // }

}
