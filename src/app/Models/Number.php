<?php

declare(strict_types=1);

namespace App\Models;

class Number 
{
    protected $number;

    public function __construct($number = 0)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }
}