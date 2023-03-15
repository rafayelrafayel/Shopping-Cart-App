@extends('layouts.frontend')

@section('content')
    <div class="container">

        <div class="grid single-item">

            <div class="item">
                <h2>{{ $product->title }}</h2>
                <div class="image-block" style="background: url({{ $product->image }}) no-repeat center center ;">

                </div>
                <div class="price">${{ $product->price }}</div>
                <div class="description">{{ $product->description }}</div>
                <div class="quantity">
                    <div class="text">Quantity:</div>
                    <div class="qty-manage">
                        <button class="decrease-count">-</button>
                        <span class="qty-span">1</span>
                        <button class="increase-count">+</button>
                    </div>
                </div>

                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->title }}" name="name">
                    <input type="hidden" value="{{ $product->price }}" name="price">
                    <input type="hidden" value="{{ $product->image }}" name="image">
                    <input type="hidden" value="1" class="quantity-form" name="quantity">
                    <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                </form>
                <div class="green-line"></div>
            </div>

        </div>
    </div>
@endsection
