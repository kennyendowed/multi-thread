<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
   protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        // if ($exception instanceof ModelNotFoundException && $request->wantsJson()) {
        //     return response()->json([
        //         'error' => 'Resource not found'
        //     ], 404);
        // }
        // else if ($exception) {
        //   return response()->json([
        //       'status' => 'Resource not found',
        //       'dev_message' =>'Resource not found '.$exception.' error'
        //   ], 404);
        // }

        if ($exception instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
          return response()->json([
              'status' => 'Authorization Token is Invalid'
          ], 401);

        }else if ($exception instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
          return response()->json([
              'status' => 'Authorization Token is Expired'
          ], 401);
        }
        else if ($exception instanceof \Tymon\JWTAuth\Exceptions\TokenBlacklistedException) {
          return response()->json([
              'status' => 'Authorization Token blacklisted'
          ], 400);

        }
        else if ($exception instanceof \Tymon\JWTAuth\Exceptions\UserNotDefinedException) {
          return response()->json([
              'status' => 'User Not Defined'
          ], 404);
        }
        else if ($exception instanceof JWTExceptions) {
          return response()->json([
              'status' => 'There is a problem with your token'
          ], 400);
        }
        else {
          return response()->json([
              'status' => 'Resource not found',
              'dev_message' =>'Resource not found '.$exception.' error'
          ], 404);
        }
        // else{
        //   return response()->json([
        //       'status' => 'error'.$exception
        //   ], 404);
        //
        // }

        return parent::render($request, $exception);
    }


    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return response()->json(['error' => 'Unauthenticated.'], 401);
    }

}
