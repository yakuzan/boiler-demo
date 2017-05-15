<?php

namespace App\Services;

use App\User;
use Yakuzan\Boiler\Services\AbstractService;

class UserService extends AbstractService
{
    protected $entity = User::class;
}
