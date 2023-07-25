<?php

declare(struct_types=1);

namespace App\Services;

use App\Models\User;
use App\Models\Purchase;
use App\Repository\UserRepositoryInterface;
use App\Repository\UserRepository;

class UserPurchaseService
{
    private $userRepository;

    public function __construct(
        UserRepositoryInterface $userRepository
    ){
        $this->userRepository = $userRepository;
    }
    
    public function retrievePurchase(int $identifier)
    {
        $user = $this->userRepository->find($identifier);
    
        return $user;
    }
}