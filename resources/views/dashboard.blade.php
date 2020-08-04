@extends('layouts.category.topnav')

@section('title', '| Dashboard')

@section('body')
<div class="container">
    <div class="row">
        @foreach($categories as $category)
            <div class="col-sm-3 border m-3">
                <div class="card-body">
                    <div class="container">
                        <div class="card-title text-center">
                            {{ $category->name }}
                        </div>
                        <div class="card-title text-center">
                            <p>{{ $category->slug }}</p>
                        </div>
                    </div>
                </div>
            </div>
           
        @endforeach
    </div>
</div>

@endsection

@include('layouts/category/bottomnav')