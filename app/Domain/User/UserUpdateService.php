<?php
namespace App\Domain\User;

use App\Core\Repository\User\IUserFindByIdRepository;
use App\Core\Repository\User\IUserUpdateRepository;
use App\Core\Services\User\IUserUpdateService;
use App\Http\Request\User\UpdateUserRequest;
use App\Models\User;

class UserUpdateService implements IUserUpdateService
{
    private User $user;

    public function __construct(
        private readonly IUserFindByIdRepository $userFindByIdRepository,
        private readonly IUserUpdateRepository $userUpdateRepository,
    )
    { }
    public function updateUser(UpdateUserRequest $request): bool
    {
        $this->findUserById($request);
        $this->mapRequestToModel($request);
        return $this->userUpdateRepository->updateUser($this->user);
    }
    private function mapRequestToModel(UpdateUserRequest $request): void
    {
        $this->user->name = $request->name;
        $this->user->email = $request->email;
    }
    private function findUserById(UpdateUserRequest $request): void
    {
        $this->user = $this->userFindByIdRepository->findById($request->userId);
    }
}
