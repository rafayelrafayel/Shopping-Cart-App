<?php

namespace App\Interfaces;

interface CartRepositoryInterface
{
    public function getAll();
    public function addToCart($product);
    public function clear();
}
