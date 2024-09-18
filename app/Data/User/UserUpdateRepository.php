<?php
namespace App\Data\User;

use App\Core\Repository\User\IUserUpdateRepository;
use App\Models\User;

class UserUpdateRepository implements IUserUpdateRepository
{
    public function updateUser(User $model): bool
    {
        return $model->save();
    }
}
