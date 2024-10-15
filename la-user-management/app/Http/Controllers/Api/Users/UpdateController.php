<?php

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class UpdateController extends Controller
{
    public function __invoke($user)
    {
        try {
            $data = request()->all();


            return new JsonResponse(['data' => [
                'content' => $data,
            ]], Response::HTTP_OK);
        } catch (\Exception $exception) {
            return new JsonResponse([], Response::HTTP_BAD_REQUEST);
        }
    }
}
