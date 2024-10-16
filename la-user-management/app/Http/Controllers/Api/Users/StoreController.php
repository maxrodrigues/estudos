<?php

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Models\User;
use App\Repository\Contracts\BaseRepositoryContract;
use App\Repository\User\Contracts\UserRepositoryContract;
use App\Service\User\Contracts\UserServiceContract;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class StoreController extends Controller
{
    public function __construct(protected UserServiceContract $service)
    {
        //
    }
    public function __invoke(CreateUserRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();
            $user = $this->service->createNewUser($data);

            return new JsonResponse(['data' => $user], Response::HTTP_CREATED);
        } catch (\Exception $exception) {
            return new JsonResponse(['message' => $exception->getMessage(),], Response::HTTP_BAD_REQUEST);
        }
    }
}
