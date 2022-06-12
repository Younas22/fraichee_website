<?php
namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use BadMethodCallException;
use Illuminate\Database\QueryException;
use Illuminate\Auth\AuthenticationException;
use ErrorException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Symfony\Component\HttpKernel\Exception\NotFoundHttpException::class,
        \Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException::class,
        \Illuminate\Database\QueryException::class,
        \Illuminate\Auth\AuthenticationException::class,
        \ErrorException::class,
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

           public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            $response = ['success' => false,'message' => 'Not Found!'];
            $response['data'] = (object)array();
            return response()->json($response, 404);
        }else if ($exception instanceof BadMethodCallException) {
            $response = ['success' => false,'message' => 'Bad Method!'];
            $response['data'] = (object)array();
            return response()->json($response, 404);
        }else if ($exception instanceof MethodNotAllowedHttpException) {
            $response = ['success' => false,'message' => 'Method Not Allowed!'];
            $response['data'] = (object)array();
            return response()->json($response, 404);
        }else if ($exception instanceof QueryException) {
            $response = ['success' => false,'message' => 'Query is wrong!'];
            $response['data'] = (object)array();
            return response()->json($response, 404);
        }
        else if ($exception instanceof AuthenticationException) {
            $response = ['success' => false,'message' => 'Unauthenticated!'];
            $response['data'] = (object)array();
            return response()->json($response, 404);
        }

        else if ($exception instanceof ErrorException) {
            $response = ['success' => false,'message' => 'Data Not Found!'];
            $response['data'] = (object)array();
            return response()->json($response, 404);
        }

    }
}
