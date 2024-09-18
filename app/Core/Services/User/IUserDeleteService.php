<?php
namespace App\Core\Services\User;

interface IUserDeleteService
{
    public function deleteUser(string $id): bool;
}
