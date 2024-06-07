<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    protected $middleware = [
        \App\Http\Middleware\CorsMiddleware::class,
        // otros middlewares
    ];
}
