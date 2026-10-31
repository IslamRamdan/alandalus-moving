<?php

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$user = App\Models\User::first();

$routes = [
    ['GET', '/', 'Public Homepage', false],
    ['GET', '/blog', 'Public All Blogs Page (mdwna)', false],
    ['GET', '/blog/2', 'Public Single Blog Page (show)', false],
    ['GET', '/dashboard', 'Admin Dashboard (Auth)', true],
    ['GET', '/admin/blogs', 'Admin Blogs Index (Auth)', true],
    ['GET', '/admin/blog/create', 'Admin Blog Create (Auth)', true],
    ['GET', '/admin/blog/edit/2', 'Admin Blog Edit (Auth)', true],
];

foreach ($routes as [$method, $uri, $label, $auth]) {
    $request = Illuminate\Http\Request::create($uri, $method);
    if ($auth && $user) {
        Illuminate\Support\Facades\Auth::setUser($user);
    }
    $response = $kernel->handle($request);
    $code = $response->getStatusCode();
    echo "[{$label}] {$method} {$uri} -> Status: {$code}" . PHP_EOL;
    if ($code >= 400) {
        $ex = $response->exception;
        if ($ex) {
            echo "   Error: " . $ex->getMessage() . " at " . $ex->getFile() . ":" . $ex->getLine() . PHP_EOL;
        }
    }
}
