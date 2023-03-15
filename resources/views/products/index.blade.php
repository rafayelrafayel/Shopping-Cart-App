@extends('layouts.frontend')

@section('content')
    <div class="container">

        <div class="grid">
            @foreach ($products as $product)
                <div class="item">
                    <a href="{{ route('products.single', $product->id) }}" class="product-link">
                        <div class="image-block" style="background: url({{ $product->image }}) no-repeat center center ;">

                        </div>

                        <h3 class="text-gray-700 uppercase">{{ $product->title }}</h3>
                    </a>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->title }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}" name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                    </form>
                    <div class="green-line"></div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
