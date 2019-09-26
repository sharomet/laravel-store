@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @if(count($categories) > 1)
                @foreach($categories as $category)

                    <div class="category-item">
                        <a href="#" title="{{ $category->title }}">
                            <div class="category-images">
                                <img src="{{ asset('img/'.$category->image)}}" class="img-fluid" alt="{{ $category->title }}">
                            </div>
                            <p class="category-list-title">{{ $category->name }}</p>
                        </a>
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
