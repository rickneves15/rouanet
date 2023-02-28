<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ResponseTrait
{
    public function responseSuccess($data, $message = "Successful", $status_code = JsonResponse::HTTP_OK): JsonResponse
    {
        return response()->json([
            'status'  => true,
            'message' => $message,
            'data'    => $data,
        ], $status_code);
    }

    public function responseError($message = 'Data is invalid', $status_code = JsonResponse::HTTP_BAD_REQUEST): JsonResponse
    {
        return response()->json([
            'status'  => false,
            'message' => $message,
            'data'    => null,
        ], $status_code);
    }
}
