<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
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
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
       
        if($exception instanceof TokenBlacklistedException) {
            return response()->json(['error' => 'Token cannot be used, get new one'],Response::HTTP_BAD_REQUEST);
            }
        elseif($exception instanceof TokenExpiredException) {
        return response()->json(['error' => 'Token is Expired'],esponse::HTTP_BAD_REQUEST);
        }
        elseif($exception instanceof JWTException) {
        return response()->json(['error' => 'Token is not provided'],Response::HTTP_BAD_REQUEST);
        }
        elseif($exception instanceof TokenInvalidException) {
            return response()->json(['error' => 'Token is invalid'],esponse::HTTP_BAD_REQUEST);
            }
        return parent::render($request, $exception);
    }
}
