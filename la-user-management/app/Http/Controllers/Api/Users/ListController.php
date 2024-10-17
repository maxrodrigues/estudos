<?php

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ListController extends Controller
{
    public function __invoke()
    {
        try {
            $users = User::paginate(10);
            return new JsonResponse(['data' => $users], Response::HTTP_OK);
        } catch (Exception $exception) {
            return new JsonResponse([], Response::HTTP_BAD_REQUEST);
        }
    }
}
