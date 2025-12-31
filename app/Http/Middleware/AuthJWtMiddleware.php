<?php
namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Symfony\Component\HttpFoundation\Response;

class AuthJwtMiddleware
{
    public function handle($request, Closure $next)
    {
        $authHeader = $request->header('Authorization');

        if (! $authHeader || ! str_starts_with($authHeader, 'Bearer ')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $token = substr($authHeader, 7);

        try {
            // Replace with your auth-service public key
            $key_path  = config('jwt.public_key_path');
            $publicKey = file_get_contents($key_path);

            $decoded = JWT::decode($token, new Key($publicKey, 'RS256'));
            $request->attributes->set('user', $decoded);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Invalid token'], 401);
        }

        return $next($request);
    }
}