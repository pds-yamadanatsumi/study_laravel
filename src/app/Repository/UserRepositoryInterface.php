<?php

declare(strict_types=1);

namespace App\Repository;

use App\Models\User;


interface UserRepositoryInterface 
{
    public function find(int $id);
}
