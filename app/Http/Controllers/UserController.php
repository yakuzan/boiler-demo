<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Transformers\UserTransformer;
use App\User;
use Yakuzan\Boiler\Controllers\AbstractApiController;

class UserController extends AbstractApiController
{
    protected $entity = User::class;

    protected $service = UserService::class;

    protected $transformer = UserTransformer::class;

    public function me()
    {
        $data = fractal(auth()->user(), $this->transformer())->toArray();

        return $this->respond($data);
    }
}
