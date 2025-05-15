<?php

use App\Http\Middleware\Authenticate;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/userapi.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'guest' => RedirectIfAuthenticated::class,
            'auth' => Authenticate::class,
            'csrf' => VerifyCsrfToken::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        
    })->create();
