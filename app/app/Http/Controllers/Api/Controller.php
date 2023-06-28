<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as BaseController;


/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Hostel OpenApi Documentation",
 *      description="Документация отелей",
 * )
 *
 * @OA\Tag(
 *     name="Hotels",
 *     description="Отели"
 * )
 * @OA\Tag(
 *     name="HotelPages",
 *     description="Страницами  сайта"
 * )\
 * @OA\Tag(
 *     name="Sliders",
 *     description="Информационные Слайдеры и галереи"
 * )
 * @OA\Tag(
 *     name="Rooms",
 *     description="Номера отелей"
 * )
 * @OA\Tag(
 *     name="Building",
 *     description="Корпуса отелей"
 * )
 * @OA\Tag(
 *     name="SpecialOffers",
 *     description="Спецпредложения и акции"
 * )

 * @OA\Tag(
 *     name="Cities",
 *     description="Города"
 * )
 *
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="Основной API"
 * )
 *
 */
class Controller extends BaseController
{


}
