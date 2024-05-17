protected $routeMiddleware = [
    // Other middleware
    'ensure.token.is.valid' => \App\Http\Middleware\EnsureTokenIsValid::class,
];
