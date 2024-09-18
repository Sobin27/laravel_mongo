<?php
namespace App\Core\Services\User;

use App\Http\Request\User\UpdateUserRequest;

interface IUserUpdateService
{
    public function updateUser(UpdateUserRequest $request): bool;
}
