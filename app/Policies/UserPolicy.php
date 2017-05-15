<?php

namespace App\Policies;

use App\User;
use Yakuzan\Boiler\Policies\AbstractPolicy;

class UserPolicy extends AbstractPolicy
{
	protected $entity = User::class;
}
