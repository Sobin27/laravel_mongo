<?php
namespace App\Providers\DependencyInjection;

use App\Core\Repository\User\IUserCreateRepository;
use App\Core\Repository\User\IUserDeleteRepository;
use App\Core\Repository\User\IUserFindAllRepository;
use App\Core\Repository\User\IUserFindByIdRepository;
use App\Core\Repository\User\IUserUpdateRepository;
use App\Core\Services\User\IUserCreateService;
use App\Core\Services\User\IUserDeleteService;
use App\Core\Services\User\IUserFindAllService;
use App\Core\Services\User\IUserUpdateService;
use App\Data\User\UserCreateRepository;
use App\Data\User\UserDeleteRepository;
use App\Data\User\UserFindAllRepository;
use App\Data\User\UserFindByIdRepository;
use App\Data\User\UserUpdateRepository;
use App\Domain\User\UserCreateService;
use App\Domain\User\UserDeleteService;
use App\Domain\User\UserFindAllService;
use App\Domain\User\UserUpdateService;

class UserDi extends DependencyInjection
{
    protected function services(): array
    {
        return [
            [IUserCreateService::class, UserCreateService::class],
            [IUserUpdateService::class, UserUpdateService::class],
            [IUserFindAllService::class, UserFindAllService::class],
            [IUserDeleteService::class, UserDeleteService::class]
        ];
    }

    protected function repositories(): array
    {
        return [
            [IUserCreateRepository::class, UserCreateRepository::class],
            [IUserUpdateRepository::class, UserUpdateRepository::class],
            [IUserFindByIdRepository::class, UserFindByIdRepository::class],
            [IUserFindAllRepository::class, UserFindAllRepository::class],
            [IUserDeleteRepository::class, UserDeleteRepository::class]
        ];
    }
}
