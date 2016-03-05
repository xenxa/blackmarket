<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Amsgames\LaravelShop\Traits\ShopItemTrait;

class Product extends Model
{
    use ShopItemTrait;
    /**
     * Name of the route to generate the item url.
     *
     * @var string
     */
    protected $itemRouteName = 'product';

    /**
     * Name of the attributes to be included in the route params.
     *
     * @var string
     */
    protected $itemRouteParams = ['slug'];

}
