<?php
namespace App\Data\User;

use App\Core\Repository\User\IUserDeleteRepository;
use App\Models\User;

class UserDeleteRepository implements IUserDeleteRepository
{
    public function deleteUser(string $id): bool
    {
        return User::destroy($id);
    }
}
