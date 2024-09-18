<?php
namespace App\Domain\User;

use App\Core\Repository\User\IUserDeleteRepository;
use App\Core\Services\User\IUserDeleteService;

class UserDeleteService implements IUserDeleteService
{
    public function __construct(
        private readonly IUserDeleteRepository $userDeleteRepository
    )
    { }
    public function deleteUser(string $id): bool
    {
        return $this->userDeleteRepository->deleteUser($id);
    }
}
