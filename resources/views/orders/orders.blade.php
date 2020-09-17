@extends('platform::dashboard')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
@section('title',__('Oder details'))
@section('description', __('All information for this order'))

@section('navbar')
    
@stop

@section('content')

    <div class="admin-wrapper py-3">
        @if ($orders->count() > 0)
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col ml-1">
                        Customer
                    </div>
                    <div class="col">
                        Phone
                    </div>
                    <div class="col">
                        Time
                    </div>
                    <div class="col">
                        Bill
                    </div>
                    <div class="col">
                        Actions
                    </div>
                </div>
                <hr>
                @foreach ($orders as $order)
                    <div class="row {{ $order->error ? 'alert-danger' : '' }} {{ $order->shipped ? 'alert-success' : '' }}">
                        <div class="col ml-1">
                           <h4> {{ $order->billing_first_name }}</h4>
                        </div>
                        <div class="col">
                            {{ $order->billing_phone }}
                        </div>
                        <div class="col">
                            {{ $order->created_at }}
                        </div>
                        <div class="col">
                            {{ $order->billing_total }}
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="cols mt-3">
                                    <a href="/order/{{ $order->id }}" class="btn btn-primary btn-sm">View <i class="fas fa-eye"></i></a>
                                </div>
                                <div class="cols mt-3">
                                    <form action="{{ route('order.destroy', ['id'=>$order->id]) }}">
                                        <button class="btn btn-danger btn-sm">Delete <i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
        @else
        <div class="container mt-5">
            <div class="row fill-viewport align-items-start">
              <div class="col-12 col-md-6 mx-auto text-center">
                <h1 class="text-dark display-1">No Orders</h1>
              </div>
            </div>
          </div>
        @endif
        
    </div>
@stop