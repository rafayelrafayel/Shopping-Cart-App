@extends('layouts.frontend')


@section('content')
    <div class="container">
        <div class="cart">
            @if (Cart::count() > 0)
                <div class="cart-title">Your Cart</div>
                <div class="cart-count">{{ Cart::count() }} items</div>
            @endif
            <div class="cart-items">
                @foreach ($cartItems as $item)
                    <div class="cart-item">
                        <div class="image">
                            <div class="image-block"
                                style="background: url({{ $item->options->image }}) no-repeat center center ;">

                            </div>
                        </div>
                        <div class="info">
                            <div class="title">{{ $item->name }}</div>
                            <div class="qty">Quantity: {{ $item->qty }} </div>
                            <div class="price">${{ $item->price }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            @if (Cart::count() > 0)
                <div class="total">
                    <div class="total-info"> Total: <span>${{ Cart::total() }}</span></div>
                    <div class="clear-cart">
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-red-800 bg-red-300"><svg width="18" height="18"
                                    viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.2374 8.78436H11.5156L10.5312 7.79999H12.2593L14.9062 2.94374C14.95 2.88541 14.9536 2.83072 14.9171 2.77968C14.8807 2.72864 14.8333 2.70312 14.775 2.70312H5.41245L4.4062 1.71874H15.0812C15.4604 1.71874 15.7375 1.87916 15.9125 2.19999C16.0875 2.52082 16.0729 2.87082 15.8687 3.24999L13.1125 8.28124C13.025 8.45624 12.9229 8.58385 12.8062 8.66405C12.6895 8.74426 12.5 8.78436 12.2374 8.78436ZM4.86558 16.8562C4.47183 16.8562 4.14005 16.7177 3.87026 16.4406C3.60047 16.1635 3.46558 15.8281 3.46558 15.4344C3.46558 15.0406 3.60412 14.7088 3.8812 14.4391C4.15828 14.1693 4.48641 14.0344 4.86558 14.0344C5.25933 14.0344 5.59474 14.1729 5.87183 14.45C6.14891 14.7271 6.28745 15.0625 6.28745 15.4562C6.28745 15.8354 6.14891 16.1635 5.87183 16.4406C5.59474 16.7177 5.25933 16.8562 4.86558 16.8562ZM16.8531 17.5781L11.5812 12.35H4.64683C4.13641 12.35 3.76089 12.1604 3.52026 11.7812C3.27964 11.4021 3.28328 11.001 3.5312 10.5781L5.08433 7.99686L3.15933 3.90624L0.0749512 0.799991L0.796826 0.0999908L17.5531 16.8781L16.8531 17.5781ZM10.5968 11.3437L8.05933 8.78436H5.78433L4.44995 11.0156C4.4062 11.1031 4.4062 11.1797 4.44995 11.2453C4.4937 11.3109 4.55933 11.3437 4.64683 11.3437H10.5968ZM13.375 16.8562C12.9958 16.8562 12.6677 16.7177 12.3906 16.4406C12.1135 16.1635 11.9749 15.8281 11.9749 15.4344C11.9749 15.0406 12.1135 14.7088 12.3906 14.4391C12.6677 14.1693 12.9958 14.0344 13.375 14.0344C13.7395 14.0344 14.064 14.1729 14.3484 14.45C14.6328 14.7271 14.775 15.0625 14.775 15.4562C14.775 15.8354 14.6328 16.1635 14.3484 16.4406C14.064 16.7177 13.7395 16.8562 13.375 16.8562Z"
                                        fill="#8D0000" />
                                </svg>
                                Clear Cart</button>
                        </form>
                    </div>
                </div>
                <div class="checkout">
                    <form action="{{ route('cart.clear') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <button class="px-4 py-2 text-white bg-blue-800 rounded">Check out</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
@endsection
