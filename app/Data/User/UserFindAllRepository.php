<?php
namespace App\Data\User;

use App\Core\Repository\User\IUserFindAllRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserFindAllRepository implements IUserFindAllRepository
{
    public function findAll(): Collection
    {
        return User::all();
    }
}
