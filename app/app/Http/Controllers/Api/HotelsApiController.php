<?php

namespace App\Http\Controllers\Api;

use App\Repositories\Interfaces\HotelRepositoryInterface;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\HotelResource;
use Illuminate\Http\Request;

class HotelsApiController extends Controller
{

    private $serviceHotel;

    public function __construct(HotelRepositoryInterface $serviceHotel)
    {
        $this->serviceHotel =  $serviceHotel;
    }

    /**
     * @OA\Get(
     *     path="/api/v1/hotels",
     *     operationId="hotelsAll",
     *     tags={"Hotels"},
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
    public function index(Request $request): JsonResponse
    {
        return response()->json($this->serviceHotel->all(), 200  );
    }

    /**
     * @OA\Get(
     *     path="/api/v1/hotels/{id}",
     *     operationId="hotelsGet",
     *     tags={"Hotels"},
     *     summary="Get hotel by ID",
     *     security={
     *       {"api_key": {}},
     *     },
     *     @OA\Parameter(
     *         name="id",
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
     * )
     *
     * Display a listing of the resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return response()->json( $this->serviceHotel->getById($id), 200 );
    }

}
