<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\HotelSpecialOfferResource;
use App\Repositories\Interfaces\HotelInfrastructureInterface;
use Illuminate\Http\JsonResponse;

class HotelInfrastructureApiController extends Controller
{

    private $serviceHotelInfrastructure;

    public function __construct(HotelInfrastructureInterface $serviceHotelInfrastructure)
    {
        $this->serviceHotelInfrastructure =  $serviceHotelInfrastructure;
    }

    /**
     * @OA\Get(
     *     path="/api/v1/infrastructures",
     *     operationId="infrastructuresAll",
     *     tags={"Infrastructures"},
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
        return response()->json( $this->serviceHotelInfrastructure->all(), 200 );
    }


    /**
     * @OA\Get(
     *     path="/api/v1/infrastructures/{id}",
     *     operationId="infrastructuresGet",
     *     tags={"Infrastructures"},
     *     summary="Get infrastructure  by ID",
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
        return response()->json( $this->serviceHotelInfrastructure->getById($id), 200 );
    }

}
