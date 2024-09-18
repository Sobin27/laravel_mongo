<?php
namespace App\Http\Controllers;

use App\Core\Services\User\IUserCreateService;
use App\Core\Services\User\IUserDeleteService;
use App\Core\Services\User\IUserFindAllService;
use App\Core\Services\User\IUserUpdateService;
use App\Http\Request\User\CreateUserRequest;
use App\Http\Request\User\UpdateUserRequest;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function __construct(
        private readonly IUserCreateService $userCreateService,
        private readonly IUserUpdateService $userUpdateService,
        private readonly IUserFindAllService $userFindAllService,
        private readonly IUserDeleteService $userDeleteService
    )
    { }
    public function createUser(CreateUserRequest $request): Response
    {
        return response()->json([
            'message' => 'User created successfully',
            'data' => $this->userCreateService->createUser($request),
        ], 201);
    }
    public function updateUser(UpdateUserRequest $request): Response
    {
        return response()->json([
            'message' => 'User updated successfully',
            'data' => $this->userUpdateService->updateUser($request),
        ]);
    }
    public function findAllUsers(): Response
    {
        return response()->json([
            'message' => 'Users retrieved successfully',
            'data' => $this->userFindAllService->findAll(),
        ]);
    }
    public function deleteUser(string $id): Response
    {
        return response()->json([
            'message' => 'User deleted successfully',
            'data' => $this->userDeleteService->deleteUser($id),
        ]);
    }
}
