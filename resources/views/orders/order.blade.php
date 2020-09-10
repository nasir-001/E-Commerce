@extends('platform::dashboard')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('title',__('Oder details'))
@section('description', __('All information for this order'))

@section('navbar')
    
@stop

@section('content')

    <div class="admin-wrapper py-3">
        <div class="row">

            <ul>
                @foreach ($products as $item)
                    <li class="">
                        {{ $item->id }}
                        {{-- {{ $item->name }}
                        {{ $item->price }} --}}
                    </li>
                @endforeach

            </ul>
            </div>
        </div>

@stop




