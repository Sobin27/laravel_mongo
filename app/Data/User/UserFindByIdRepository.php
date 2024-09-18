<?php
namespace App\Data\User;

use App\Core\Repository\User\IUserFindByIdRepository;
use App\Models\User;

class UserFindByIdRepository implements IUserFindByIdRepository
{
    public function findById(string $id): User|null
    {
        return User::query()->find($id);
    }
}
