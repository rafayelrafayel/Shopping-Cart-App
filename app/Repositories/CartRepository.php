<?php

namespace App\Repositories;

use App\Interfaces\CartRepositoryInterface;
use Cart;


class CartRepository implements CartRepositoryInterface
{

    public function getAll()
    {
        return  Cart::content();
    }

    public function addToCart($product)
    {


        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => $product->quantity,
            'options' => [
                'image' => $product->image
            ]

        ]);
    }
    public function clear()
    {
        Cart::destroy();
    }
}
