<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;

class User extends \Yakuzan\Boiler\Entities\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $access_rules = [
        'name'     => 'required|max:255',
        'email'    => 'required|email|unique:users|max:255',
        'password' => 'required|max:255',
    ];

    public function modify_rules(Request $request): array
    {
        return [
            'name'     => 'required|max:255',
            'email'    => 'required|email|unique:users,email,'.$request->user.'|max:255',
            'password' => 'required|max:255',
        ];
    }
}
