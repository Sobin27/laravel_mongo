<?php
namespace App\Core\Repository\User;

use App\Models\User;

interface IUserFindByIdRepository
{
    public function findById(string $id): User|null;
}
