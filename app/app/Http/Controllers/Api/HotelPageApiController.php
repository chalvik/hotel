<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\HotelPageResource;
use App\Repositories\Interfaces\HotelPageRepositoryInterface;
use Illuminate\Http\JsonResponse;

class HotelPageApiController extends Controller
{

    private $serviceHotelPage;

    public function __construct(HotelPageRepositoryInterface $serviceHotelPage)
    {
        $this->serviceHotelPage =  $serviceHotelPage;
    }


    /**
     * @OA\Get(
     *     path="/api/v1/pages?hotel_id={hotel_id}",
     *     operationId="pagesAll",
     *     tags={"HotelPages"},
     *     summary="Display a listing of the resource",
     *     security={
     *       {"api_key": {}},
     *     },
     *     @OA\Parameter(
     *         name="hotel_id",
     *         in="path",
     *         description="The ID of hotel",
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
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json( $this->serviceHotelPage->all() );
    }

    /**
     * @OA\Get(
     *     path="/api/v1/pages/{page}",
     *     operationId="pagesGet",
     *     tags={"HotelPages"},
     *     summary="Get page by ID",
     *     security={
     *       {"api_key": {}},
     *     },
     *     @OA\Parameter(
     *         name="page",
     *         in="path",
     *         description="The ID of example",
     *         required=true,
     *         example="main",
     *         @OA\Schema(
     *             type="string",
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
     * @param int $page
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(string $page): JsonResponse
    {
        return response()->json( HotelPageResource::make($this->serviceHotelPage->getBySlug($page)) );
    }

}
