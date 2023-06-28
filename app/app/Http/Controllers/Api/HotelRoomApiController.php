<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ExampleStoreRequest;
use App\Http\Resources\HotelRoomResource;
use App\Repositories\Interfaces\HotelRoomRepositoryInterface;
use Illuminate\Http\JsonResponse;

class HotelRoomApiController extends Controller
{


    private $serviceHotelRoom;

    public function __construct(HotelRoomRepositoryInterface $serviceHotelRoom)
    {
        $this->serviceHotelRoom =  $serviceHotelRoom;
    }

    /**
     * @OA\Get(
     *     path="/api/v1/rooms",
     *     operationId="roomsAll",
     *     tags={"Rooms"},
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
        return response()->json( $this->serviceHotelRoom->all() );
    }


    /**
     * @OA\Get(
     *     path="/api/v1/rooms/{room}",
     *     operationId="roomsGet",
     *     tags={"Rooms"},
     *     summary="Get page by ID",
     *     security={
     *       {"api_key": {}},
     *     },
     *     @OA\Parameter(
     *         name="room",
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
     * @param int $room
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $room): JsonResponse
    {
        return response()->json( HotelRoomResource::make($this->serviceHotelRoom->getById($room)) );
    }

}
