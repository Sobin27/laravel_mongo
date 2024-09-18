<?php
namespace App\Core\Services\User;

use Illuminate\Database\Eloquent\Collection;

interface IUserFindAllService
{
    public function findAll(): Collection;
}
