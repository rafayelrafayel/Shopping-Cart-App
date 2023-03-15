<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\CartRepositoryInterface;

class CartController extends Controller
{
    private CartRepositoryInterface $cartRepository;

    public function __construct(CartRepositoryInterface $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function cartList()
    {

        $cartItems =  $this->cartRepository->getAll();;
        return view('carts.index', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        $this->cartRepository->addToCart($request);
        session()->flash('success', 'Product is Added to Cart Successfully !');
        return redirect()->route('cart.list');
    }


    public function clearAllCart()
    {

        $this->cartRepository->clear();
        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('products.list');
    }
}
