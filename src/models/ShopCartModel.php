<?php

namespace Amsgames\LaravelShop\Models;

/**
 * This file is part of LaravelShop,
 * A shop solution for Laravel.
 *
 * @author Alejandro Mostajo
 * @copyright Amsgames, LLC
 * @license MIT
 * @package Amsgames\LaravelShop
 */

use Amsgames\LaravelShop\Contracts\ShopCartInterface;
use Amsgames\LaravelShop\Traits\ShopCartTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class ShopCartModel extends Model implements ShopCartInterface
{

    use ShopCartTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('shop.cart_table');
    }

}