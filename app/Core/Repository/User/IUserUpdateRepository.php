<?php
namespace App\Core\Repository\User;

use App\Models\User;

interface IUserUpdateRepository
{
    public function updateUser(User $model): bool;
}
