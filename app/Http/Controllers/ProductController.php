<?php

namespace App\Http\Controllers;


use App\Interfaces\ProductsRepositoryInterface;
use App\Http\Requests\ProductGetRequest;

class ProductController extends Controller
{

    private ProductsRepositoryInterface $productsRepository;

    public function __construct(ProductsRepositoryInterface $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }

    public function productList()
    {
        $products = $this->productsRepository->getAll();
        return view('products.index', compact('products'));
    }

    public function getSingle($id)
    {

        $product = $this->productsRepository->get($id);

        return view('products.single', compact('product'));
    }
}
