<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\HotelSpecialOfferResource;
use App\Repositories\Interfaces\HotelInfrastructureCategoryInterface;
use App\Repositories\Interfaces\HotelInfrastructureInterface;
use Illuminate\Http\JsonResponse;

class HotelInfrastructureCategoryApiController extends Controller
{

    private $serviceHotelInfrastructureCategory;

    public function __construct(HotelInfrastructureCategoryInterface $serviceHotelInfrastructureCategory)
    {
        $this->serviceHotelInfrastructureCategory =  $serviceHotelInfrastructureCategory;
    }

    /**
     * @OA\Get(
     *     path="/api/v1/infrastructure-categories",
     *     operationId="infrastructureCategoriesAll",
     *     tags={"InfrastructureCategories"},
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
        return response()->json($this->serviceHotelInfrastructureCategory->all(), 200 );
    }


    /**
     * @OA\Get(
     *     path="/api/v1/infrastructure-categories/{id}",
     *     operationId="infrastructureCategoriesGet",
     *     tags={"InfrastructureCategories"},
     *     summary="Get Special Offer  by ID",
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
        return response()->json( $this->serviceHotelInfrastructureCategory->getById($id), 200  );
    }

}
