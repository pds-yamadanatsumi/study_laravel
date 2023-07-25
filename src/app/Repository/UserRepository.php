<?php

declare(strict_types=1);

namespace App\Repository;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function find(int $id): User
    {
        $user = User::find($id);
        return $user;
    }
}

