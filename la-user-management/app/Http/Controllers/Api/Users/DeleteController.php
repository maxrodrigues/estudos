<?php

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DeleteController extends Controller
{
    public function __invoke($user)
    {
        try {
            $data = $user;
            return new JsonResponse(['data' => [
                'content' => $data,
            ]], Response::HTTP_OK);
        } catch (\Exception $exception) {
            return new JsonResponse([], Response::HTTP_BAD_REQUEST);
        }
    }
}
