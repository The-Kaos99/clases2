<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function roles()
    {
        //return $this->belongsToMany('App\Role', 'role_user_table', 'user_id', 'role_id');
        return $this->belongsToMany('App\Role');
    }
}
