<?php
namespace App\Domain\User;

use App\Core\Repository\User\IUserFindAllRepository;
use App\Core\Services\User\IUserFindAllService;
use Illuminate\Database\Eloquent\Collection;

class UserFindAllService implements IUserFindAllService
{
    public function __construct(
        private readonly IUserFindAllRepository $userFindAllRepository
    )
    { }
    public function findAll(): Collection
    {
        return $this->userFindAllRepository->findAll();
    }
}
