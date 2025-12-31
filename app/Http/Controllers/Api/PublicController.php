<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/public/info",
     *   tags={"public"},
     *   summary="Public service info",
     *   @OA\Response(response=200, description="Service info", @OA\JsonContent(ref="#/components/schemas/Info"))
     * )
     */
    public function info()
    {
        return response()->json([
            'service' => 'profile-service',
            'version' => '1.0.0',
            'message' => 'Welcome to Profile Service (public endpoint)',
        ]);
    }

    /**
     * @OA\Get(
     *   path="/api/public/news",
     *   tags={"public"},
     *   summary="Public news list",
     *   @OA\Response(
     *     response=200,
     *     description="Array of news items",
     *     @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/NewsItem"))
     *   )
     * )
     */
    public function news()
    {
        return response()->json([
            ['title' => 'Microservices concept demo', 'date' => now()],
            ['title' => 'Profile service running smoothly', 'date' => now()],
        ]);
    }
}
