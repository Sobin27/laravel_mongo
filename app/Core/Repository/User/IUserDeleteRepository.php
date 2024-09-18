<?php
namespace App\Core\Repository\User;

interface IUserDeleteRepository
{
    public function deleteUser(string $id): bool;
}
