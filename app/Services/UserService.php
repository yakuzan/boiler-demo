<?php

namespace App\Services;

use App\Policies\UserPolicy;
use App\User;
use Yakuzan\Boiler\Services\AbstractService;

class UserService extends AbstractService
{
    protected $entity = User::class;

    protected $policy = UserPolicy::class;
}
