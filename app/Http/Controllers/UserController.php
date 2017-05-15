<?php

namespace App\Http\Controllers;

use App\Transformers\UserTransformer;
use App\Services\UserService;
use App\User;
use Yakuzan\Boiler\Controllers\AbstractApiController;

class UserController extends AbstractApiController
{
    protected $entity = User::class;

    protected $transformer = UserTransformer::class;

    protected $service = UserService::class;
}
