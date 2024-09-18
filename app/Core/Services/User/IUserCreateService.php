<?php
namespace App\Core\Services\User;

use App\Http\Request\User\CreateUserRequest;

interface IUserCreateService
{
    public function createUser(CreateUserRequest $request): bool;
}
