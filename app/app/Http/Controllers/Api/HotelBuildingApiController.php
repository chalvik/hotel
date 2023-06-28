<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\HotelBuildingResource;
use App\Repositories\Interfaces\HotelBuildingRepositoryInterface;
use Illuminate\Http\JsonResponse;

class HotelBuildingApiController extends Controller
{

    private $serviceHotelBuilding;

    public function __construct(HotelBuildingRepositoryInterface $serviceHotelBuilding)
    {
        $this->serviceHotelBuilding =  $serviceHotelBuilding;
    }

    /**
     * @OA\Get(
     *     path="/api/v1/buildings",
     *     operationId="buildingAll",
     *     tags={"Building"},
     *     summary="Display a listing of the resource",
     *     security={
     *       {"api_key": {}},
     *     },
     *     @OA\Response(
     *         response="200",
     *         description="Everything is fine",
     *
     *     ),
     * )
     *
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json( $this->serviceHotelBuilding->all(), 200 );
    }

    /**
     * @OA\Get(
     *     path="/api/v1/buildings/{buuilding}",
     *     operationId="buildingGet",
     *     tags={"Building"},
     *     summary="Get page by ID",
     *     security={
     *       {"api_key": {}},
     *     },
     *     @OA\Parameter(
     *         name="buuilding",
     *         in="path",
     *         description="The ID of example",
     *         required=true,
     *         example="1",
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Everything is fine",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="404 Not found",
     *     ),
     * )
     *
     * Display a listing of the resource.
     *
     * @param int $buuilding
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $buuilding): JsonResponse
    {
        return response()->json($this->serviceHotelBuilding->getById($buuilding), 200 );
    }


}
