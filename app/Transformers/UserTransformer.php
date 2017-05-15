<?php

namespace App\Transformers;

use App\User;
use Yakuzan\Boiler\Transformers\AbstractTransformer;

class UserTransformer extends AbstractTransformer
{
    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ];
    }
}
