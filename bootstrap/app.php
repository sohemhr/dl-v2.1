<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Session\Middleware\StartSession;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'AuthNextAkses' => \App\Http\Middleware\AuthNextAkses::class,
            'AuthUsers' => \App\Http\Middleware\AuthUsers::class,
            'AuthFinance' => \App\Http\Middleware\AuthFinance::class,
            'AuthSales' => \App\Http\Middleware\AuthSales::class,
            'AuthOps' => \App\Http\Middleware\AuthOps::class,
            'AuthPublisher' => \App\Http\Middleware\AuthPublisher::class,
            'UserOnlineStatus' => \App\Http\Middleware\UserOnlineStatus::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
