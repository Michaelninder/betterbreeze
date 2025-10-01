<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Session;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontReport = [];

    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function register()
    {
        $this->renderable(function (\Symfony\Component\HttpKernel\Exception\HttpException $e, $request) {
            if (! Session::isStarted()) {
                Session::start();
            }

            $statusCode = $e->getStatusCode();
            $errorMessage = trans("errors.{$statusCode}.message");
            $errorDescription = trans("errors.{$statusCode}.description");

            if ($errorMessage === "errors.{$statusCode}.message") {
                $errorMessage = trans('errors.default.message');
                $errorDescription = trans('errors.default.description');
            }

            $hideNavbar = ! auth()->check();

            return response()->view('pages.error', [
                'errorCode' => $statusCode,
                'errorMessage' => $errorMessage,
                'errorDescription' => $errorDescription,
                'hideFooter' => true,
                'hideScrollToTopBtn' => true,
                'hideNavbar' => $hideNavbar,
            ], $statusCode);
        });
    }
}