<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ExampleStoreRequest;
use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\JsonResponse;

class CityApiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/v1/cities",
     *     operationId="citiesAll",
     *     tags={"Cities"},
     *     summary="Display a listing of the resource",
     *     security={
     *       {"api_key": {}},
     *     },
     *     @OA\Response(
     *         response="200",
     *         description="Everything is fine",
     *     ),
     * )
     *
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $model = City::query()->get();
        return response()->json(CityResource::collection($model));
    }

}
