<?php

namespace App\Http\Controllers\Api\Notifications;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CreateNotificationController extends Controller
{
    public function __invoke()
    {
        try {
            return new JsonResponse([], Response::HTTP_OK);
        }catch (\Exception $exception){
            return new JsonResponse([], Response::HTTP_BAD_REQUEST);
        }
    }
}
