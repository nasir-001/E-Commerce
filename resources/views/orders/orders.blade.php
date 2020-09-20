@extends('platform::dashboard')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
@section('title',__('All Orders'))
@section('description', __('All orders in this company'))

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
                    <div class="row {{ $order->error == 'Payment not verified' || $order->error == Null ? 'alert-danger' : '' }} {{ $order->shipped ? 'alert-info' : '' }}">
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
                                    <a href="{{ route('order.show', ['id'=>$order->id]) }}" class="btn btn-primary btn-sm">View <i class="fas fa-eye"></i></a>
                                </div>
                                <div class="cols mt-3">
                                    <form action="{{ route('order.destroy', ['id'=>$order->id]) }}">
                                        <button class="btn btn-danger btn-sm">Delete <i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-1 mb-1">
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