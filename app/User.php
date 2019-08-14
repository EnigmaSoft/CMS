<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password', 'birthday', 'banned', 'banreason',
        'gm', 'email', 'emailcode', 'forumaccid', 'lastknownip',
        'paypalNX', 'mPoints', 'cardNX', 'pin', 'gender',

        # Custom
        'mainchar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guarded = [
        'password',
    ];


    /**
     * Get the User record associated with the Character.
     */
    public function character()
    {
        return $this->hasMany(Character::class, 'id', 'accountid');
    }

}
