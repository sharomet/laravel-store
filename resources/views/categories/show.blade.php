@extends('layouts.app')

@section('content')

    <div class="page-title">
        <div class="container">
            <h1>{{ $category['name'] }}</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">

            @if(count($category->products) > 1)

                @foreach($category->products as $product)

                    <div class="col-lg-4 product mb-4">
                        <div class="card product__card">
                            <a href="{{ route('product', $product->id) }}" title="{{ $product->name }}">
                                <div class="product__image">
                                    <img src="{{ asset('img/'.$product->image) }}" class="img-fluid" alt="{{ $product->name }}">
                                </div>
                            </a>
                            <div class="card-body p-3">
                                <h2 class="product__name list-name mb-0">
                                    <a href="{{ route('product', $product->id) }}" title="{{ $product->name }}">
                                        {{ $product->name }}
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </div>

                @endforeach

            @else

                <div class="col-12">
                    <p>No Products found</p>
                </div>

            @endif

        </div>
    </div>

@endsection
