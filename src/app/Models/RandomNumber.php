<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Number;

class RandomNumber extends Number 
{
    public function __construct()
    {
        parent::__construct(mt_rand(1, 10000));
    }
}