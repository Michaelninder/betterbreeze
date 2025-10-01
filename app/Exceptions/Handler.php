<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
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
        $this->renderable(function (\Symfony\Component\HttpKernel\Exception\HttpException $e, $request) {
            $statusCode = $e->getStatusCode();
            $errorMessage = trans("errors.{$statusCode}.message");
            $errorDescription = trans("errors.{$statusCode}.description");

            if ($errorMessage === "errors.{$statusCode}.message") {
                $errorMessage = trans('errors.default.message');
                $errorDescription = trans('errors.default.description');
            }

            return response()->view('pages.error', [
                'errorCode' => $statusCode,
                'errorMessage' => $errorMessage,
                'errorDescription' => $errorDescription,
            ], $statusCode);
        });

    }
}
