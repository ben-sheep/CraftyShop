<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Cashier\Billable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;
    use Billable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function reviews()
    {
        return $this ->hasMany("App\Review");
    }
    public function basketItems()
    {
        return $this ->hasMany("App\BasketItem",'user_id');
    }
    public function orders()
    {
        return $this ->hasMany("App\TabOrder",'customer_id');
    }
    public function checkBasketOptions()
    {
        $basketItems = $this->basketItems->sortBy('created_at');
        $count = 0;
        $collection = collect([]);
        foreach($basketItems as $basketItem)
        {

            if($basketItem->option !== null)//has options
            {
                $name = $basketItem->product->name . " - " . $basketItem->option->name;
                $price = $basketItem->option->price;
                $option_id = $basketItem->option_id;

            }else{//no options
                $name = $basketItem->product->name;
                $price = $basketItem->product->price;
                $option_id = "null";
            }

            $quantity = $basketItem->quantity;
            $total = $quantity * $price;
            $collection[$count] = collect([
                'name' => $name,
                'quantity' => $quantity,
                'price' => $price,
                'total' => $total,
                'image' => $basketItem->product->product_images->sortBy('order')->first->image->image,
                'product_id' => $basketItem->product->id,
                'option_id' => $option_id
            ]);
            $count += 1;
        }


        return $collection;
    }
    public function basketTotalPrice()
    {
        $basket = $this->checkBasketOptions();
        $total = 0;
        foreach($basket as $basketItem)
        {
            $total += $basketItem['price'] * $basketItem['quantity'];
        }
        return [round($total,2),(integer)(100 * round($total,2))];
    }
    public function getBasketItem($product_id,$option_id)
    {
        $user = $this;

        if(Option::find($option_id))
        {
            $basketItem = BasketItem::where([['user_id', "=", $user->id],['option_id', "=", $option_id],['product_id', "=", $product_id]])->get()->first();
        } else
        {
            $basketItem = BasketItem::where([['user_id', "=", $user->id],['product_id', "=", $product_id]])->get()->first();
        }
        return $basketItem;
    }
    public function addBasketItem($product_id,$option_id,$quantity)
    {
        $basketItem = new BasketItem();

        if ($option_id) {
            $basketItem->option_id = $option_id;
        }
        $basketItem->product_id = $product_id;
        $basketItem->user_id = $this->id;
        $basketItem->quantity = $quantity;
        $basketItem->save();

        return $basketItem->quantity;
    }

}
