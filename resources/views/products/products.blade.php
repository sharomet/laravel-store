@extends('layouts.app')

@section('content')

    <div class="page-title">
        <div class="container">
            <h1>Categories</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">

            @if(count($products) > 1)
                @foreach($products as $product)

                    <div class="col-lg-4 category mb-4">
                        <div class="card category__card">
                            <a href="#" title="{{ $product->name }}">
                                <div class="category__image">
                                    <img src="{{ asset('img/'.$product->image)}}" class="img-fluid" alt="{{ $product->name }}">
                                </div>
                            </a>
                            <div class="card-body p-3">
                                <h2 class="category__name list-name mb-0">
                                    <a href="#" title="{{ $product->name }}">
                                        {{ $product->name }}
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </div>

                @endforeach
            @else

                <div class="col-12">
                    <p>No categories found</p>
                </div>

            @endif

        </div>
    </div>
@endsection
