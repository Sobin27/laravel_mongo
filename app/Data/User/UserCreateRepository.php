<?php
namespace App\Data\User;

use App\Core\Repository\User\IUserCreateRepository;
use App\Models\User;

class UserCreateRepository implements IUserCreateRepository
{
    /**
     * @throws \Throwable
     */
    public function createUser(User $model): bool
    {
        return $model->save();
    }
}
