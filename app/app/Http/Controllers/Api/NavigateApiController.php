<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ExampleStoreRequest;
use App\Repositories\Interfaces\NavigationRepositoryInterface;
use Illuminate\Http\JsonResponse;


class NavigateApiController extends Controller
{

    private $serviceNavigations;

    public function __construct(NavigationRepositoryInterface $serviceNavigations)
    {
        $this->serviceNavigations =  $serviceNavigations;
    }

    /**
     * @OA\Get(
     *     path="/api/v1/navigation",
     *     operationId="navigateAll",
     *     tags={"Navigation"},
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
        return response()->json($this->serviceNavigations->all(), 200);
    }

    /**
     * @OA\Get(
     *     path="/api/v1/navigation/{id}",
     *     operationId="navigateGet",
     *     tags={"Navigation"},
     *     summary="Display a listing of the resource",
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
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return response()->json( $this->serviceNavigations->getById($id), 200 );
    }

}
