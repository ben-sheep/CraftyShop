<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function product_images()
    {
        return $this->hasMany('App\ProductImage');
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
