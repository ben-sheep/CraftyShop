<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class BasketItem extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }
    public function option()
    {
        return $this->belongsTo('App\Option','option_id');
    }
}
