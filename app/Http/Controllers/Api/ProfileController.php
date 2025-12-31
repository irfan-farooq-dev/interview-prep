<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    /**
     * @OA\Get(
     *   path="/api/clear",
     *   tags={"maintenance"},
     *   summary="Clear caches and refresh config",
     *   @OA\Response(response=200, description="Result message", @OA\MediaType(mediaType="text/plain"))
     * )
     */
    public function clear()
    {
        // Clear application cache
        \Artisan::call('cache:clear');
        \Artisan::call('config:clear');
        \Artisan::call('config:cache');
        // \Artisan::call('view:clear');

        return "ProfileService Cleared!";
    }

    public function getProfile(Request $request)
    {
        return response()->json([
            'id'    => 1,
            'name'  => 'Demo User',
            'email' => 'demo@example.com',
        ]);
    }
}
