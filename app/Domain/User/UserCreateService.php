<?php
namespace App\Domain\User;

use App\Core\Repository\User\IUserCreateRepository;
use App\Core\Services\User\IUserCreateService;
use App\Http\Request\User\CreateUserRequest;
use App\Models\User;

class UserCreateService implements IUserCreateService
{
    private User $user;

    public function __construct(
        private readonly IUserCreateRepository $userCreateRepository,
    )
    { }

    public function createUser(CreateUserRequest $request): bool
    {
        $this->mapRequestToModel($request);
        return $this->userCreateRepository->createUser($this->user);
    }
    private function mapRequestToModel(CreateUserRequest $request): void
    {
        $this->user = new User();
        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->password = $request->password;
    }
}
