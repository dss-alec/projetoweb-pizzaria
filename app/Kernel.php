protected $routeMiddleware = [
    'admin' => \App\Http\Middleware\AdminMiddleware::class,
    'user' => \App\Http\Middleware\UserMiddleware::class,
];
