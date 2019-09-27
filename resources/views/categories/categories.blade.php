@extends('layouts.app')

@section('content')

    <div class="page-title">
        <div class="container">
            <h1>Categories</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">

            @if(count($categories) > 1)
                @foreach($categories as $category)

                    <div class="col-lg-4 category mb-4">
                        <div class="card category__card">
                            <a href="#" title="{{ $category->name }}">
                                <div class="category__image">
                                    <img src="{{ asset('img/'.$category->image)}}" class="img-fluid" alt="{{ $category->name }}">
                                </div>
                            </a>
                            <div class="card-body p-3">
                                <h2 class="category__name list-name mb-0">
                                    <a href="#" title="{{ $category->name }}">
                                        {{ $category->name }}
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
