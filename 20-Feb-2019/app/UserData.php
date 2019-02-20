<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
      protected $fillable = [
        'username',
        'company',
        // add all other fields
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'users';
}
