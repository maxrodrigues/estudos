<?php

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GetUserController extends Controller
{
    public function __invoke(User $user)
    {
        try {
            return new JsonResponse(['data' => $user], Response::HTTP_OK);
        }catch (\Exception $exception){
            return new JsonResponse([], Response::HTTP_BAD_REQUEST);
        }
    }
}
