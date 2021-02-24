<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Mockery\Exception\InvalidOrderException;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontReport = [
        //
    ];

    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    public function register()
    {
        // $this->reportable(function (Throwable $e) {
        // 
        // });

        $this->renderable(function (InvalidOrderException $e, $request) {
            return response()->view('errors.' . $e->getStatusCode(), [], $e->getStatusCode());
        });
    }
    /*   public function render($request, Throwable $e)
    {
          if ($this->isHttpException($e)) {
            if (view()->exists('errors.' . $e->getStatusCode())) {
                return response()->view('errors.' . $e->getStatusCode(), ['error_status' => $e->getStatusCode()], $e->getStatusCode());
            }
        }

        return parent::render($request, $e); 
    } */
}
