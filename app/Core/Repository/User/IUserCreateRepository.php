<?php
namespace App\Core\Repository\User;

use App\Models\User;

interface IUserCreateRepository
{
    public function createUser(User $model): bool;
}
