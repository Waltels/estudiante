<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Router;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        using: function(Router $router){
            $router->middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));
    
            $router->middleware('web')
            ->group(base_path('routes/web.php'));
            /* RUTAS DE ADMIN */
            $router->middleware('web','auth')
            ->name('admin.')
            ->prefix('admin')
            ->group(base_path('routes/admin.php'));
            /* RUTAS DE CURSO */
            $router->middleware('web','auth')
            ->name('student.')
            ->prefix('student')
            ->group(base_path('routes/student.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
