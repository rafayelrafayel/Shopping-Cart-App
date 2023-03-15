<?php

namespace App\Interfaces;

interface ProductsRepositoryInterface
{
    public function getAll();

    public function get($productId);
}
