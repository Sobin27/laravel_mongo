<?php
namespace App\Core\Repository\User;


use Illuminate\Database\Eloquent\Collection;

interface IUserFindAllRepository
{
    public function findAll(): Collection;
}
