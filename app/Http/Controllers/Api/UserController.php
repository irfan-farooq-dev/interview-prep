<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/user/profile",
     *   tags={"user"},
     *   security={{"bearerAuth":{}}},
     *   summary="Authenticated user profile",
     *   @OA\Response(response=200, description="User profile", @OA\JsonContent(ref="#/components/schemas/Profile")),
     *   @OA\Response(response=401, description="Unauthorized")
     * )
     */
    public function profile()
    {
        return response()->json([
            'id'    => 1,
            'name'  => 'Demo User',
            'email' => 'demo@example.com',
        ]);
    }

    /**
     * @OA\Get(
     *   path="/api/user/stats",
     *   tags={"user"},
     *   security={{"bearerAuth":{}}},
     *   summary="Authenticated user statistics",
     *   @OA\Response(response=200, description="User stats", @OA\JsonContent(ref="#/components/schemas/Stats")),
     *   @OA\Response(response=401, description="Unauthorized")
     * )
     */
    public function stats()
    {
        return response()->json([
            'projects'      => 5,
            'tasks'         => 12,
            'notifications' => 3,
        ]);
    }
}
