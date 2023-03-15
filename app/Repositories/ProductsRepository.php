<?php

namespace App\Repositories;

use App\Interfaces\ProductsRepositoryInterface;
use GuzzleHttp\Client;

class ProductsRepository implements ProductsRepositoryInterface
{
    public function getAll()
    {
        $response_data = [];
        $client = new Client();
        $res = $client->get('https://fakestoreapi.com/products');
        if ($res->getStatusCode() === 200) { // 200 OK
            $response_data = json_decode($res->getBody());
        }


        return $response_data;
    }

    public function get($productId)
    {
        $response_data = [];
        $client = new Client();
        $res = $client->get("https://fakestoreapi.com/products/$productId");
        if ($res->getStatusCode() === 200) { // 200 OK
            $response_data = json_decode($res->getBody());
        }


        return $response_data;
    }
}
