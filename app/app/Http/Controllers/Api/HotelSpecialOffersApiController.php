<?php

namespace App\Http\Controllers\Api;


use App\Http\Resources\HotelSpecialOfferResource;
use App\Repositories\Interfaces\HotelSpecialOffersRepositoryInterface;
use Illuminate\Http\JsonResponse;

class HotelSpecialOffersApiController extends Controller
{

    private $serviceHotelpecialOffers;

    public function __construct(HotelSpecialOffersRepositoryInterface $serviceHotelpecialOffers)
    {
        $this->serviceHotelpecialOffers =  $serviceHotelpecialOffers;
    }

    /**
     * @OA\Get(
     *     path="/api/v1/special-offers",
     *     operationId="specialOffersAll",
     *     tags={"SpecialOffers"},
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
        return response()->json( HotelSpecialOfferResource::collection($this->serviceHotelpecialOffers->all()));
    }


    /**
     * @OA\Get(
     *     path="/api/v1/special-offers/{id}",
     *     operationId="specialOffersGet",
     *     tags={"SpecialOffers"},
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
     * @param int $special_offer
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $special_offer): JsonResponse
    {
        return response()->json( HotelSpecialOfferResource::make($this->serviceHotelpecialOffers->getById($special_offer)) );
    }

}
