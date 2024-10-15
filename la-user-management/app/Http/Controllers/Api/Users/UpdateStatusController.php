<?php

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class UpdateStatusController extends Controller
{
    public function __invoke($user)
    {
        try {
            return new JsonResponse([], Response::HTTP_OK);
        }catch (\Exception $exception){
            return new JsonResponse([], Response::HTTP_BAD_REQUEST);
        }
    }
}
