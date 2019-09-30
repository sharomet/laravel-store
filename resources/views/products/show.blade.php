@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('img/'.$product->image) }}" alt="{{ $product->name }}" class="img-fluid productDetail__image">
            </div>
            <div class="col-lg-6">
                <h1 class="productDetail__name">{{ $product->name }}</h1>

                @if(count($product->categories) > 0)

                    <p class="productDetail__categories">
                        @foreach($product->categories as $category)

                            <a href="{{ route('category', $category->id) }}">{{ $category->name }}</a>

                        @endforeach
                    </p>

                @endif

            </div>
        </div>
    </div>

@endsection
