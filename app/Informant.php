<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informant extends Model
{
    protected $table = 'web_informant';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type', 'class', 'message', 'creator',
        'expire', 'dismissible', 'active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
