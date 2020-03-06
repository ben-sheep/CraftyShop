<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Group extends Model
{
    public function options()
    {
        return $this->hasMany('App\Option');
    }
}
