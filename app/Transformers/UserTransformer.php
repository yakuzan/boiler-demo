<?php

namespace App\Transformers;

use App\User;
use Yakuzan\Boiler\Transformers\AbstractTransformer;

class UserTransformer extends AbstractTransformer
{
    public function transform(User $entity)
    {
        return $entity->toArray();
    }
}
