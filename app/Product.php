<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Traits\Resizable;

class Product extends Model
{

    public function product_images()
    {
        return $this->hasMany('App\ProductImage');
    }
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
    public function options()
    {
        return $this->hasMany('App\Option');
    }
    public function thumbnail()
    {
        foreach($this->product_images as $image)
        {
            if($image->thumbnail)
            {
                return $image;
            }
        }
    }
    public function category()
    {
        return $this->belongsTo('App\ShopCategory','category_id');
    }


}
