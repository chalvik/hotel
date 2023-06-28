<?php

namespace App\Http\Controllers\Api;

use App\Repositories\Interfaces\HotelSliderRepositoryInterface;
use Illuminate\Http\JsonResponse;

class HotelSliderApiController extends Controller
{

    private $serviceHotelSlider;

    public function __construct(HotelSliderRepositoryInterface $serviceHotelSlider)
    {
        $this->serviceHotelSlider =  $serviceHotelSlider;
    }

    /**
     * @OA\Get(
     *     path="/api/v1/sliders/{id}",
     *     operationId="slidersGet",
     *     tags={"Sliders"},
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
        return response()->json($this->serviceHotelSlider->getById($id));
    }
}
