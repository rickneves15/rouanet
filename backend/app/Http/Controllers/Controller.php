<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title=" Documentação API Rouanet",
 *      description="Documentação API Rouanet",
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 * )

 *
 * @OA\Tag(
 *     name="Projects",
 *     description=" Api Endpoints"
 * )
 * @OA\Schemes(format="http")
 * 
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
