<?php

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\FilterListRequest;
use App\Models\User;
use App\Service\User\UserService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ListController extends Controller
{
    public function __construct(private UserService $service)
    {
        //
    }

    public function __invoke(FilterListRequest $request): JsonResponse
    {
        try {
            $users = $this->service->getUsers($request->validated());

            return new JsonResponse(['data' => $users], Response::HTTP_OK);
        } catch (Exception $exception) {
            return new JsonResponse([], Response::HTTP_BAD_REQUEST);
        }
    }
}
