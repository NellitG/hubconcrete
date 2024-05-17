protected $routeMiddleware = [
    // Other route middleware
    'ensure.token.is.valid' => \App\Http\Middleware\EnsureTokenIsValid::class,
];
