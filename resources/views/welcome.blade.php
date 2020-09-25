<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <title>Welcome | Hamdala~Store</title>
    </head>
    <style>
        @media screen and (min-width: 990px) {
            img {
                height: 600px;
            }
        }
    </style>
    <body>
        
        <div id="container">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-lg">
            <div class="container">
                <p class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </p>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
        
                    </ul>
        
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">  
                                <a class="nav-link" href="{{ route('allBlogs') }}">Blog <span class="fas fa-blog"></span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/category">Shop <span class="fas fa-home"></span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} <span class="fas fa-sign-in-alt"></span></a>
                            </li>
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }} <span class="fas fa-layer-group"></span></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <li class="nav-item"> 
                                    <li class="nav-item">
                                        <a class="nav-link" href="/category">Shop <span class="fas fa-home"></span></a>
                                    </li>
                                    <li class="nav-item">  
                                        <a class="nav-link" href="{{ route('allBlogs') }}">Blog <span class="fas fa-blog"></span></a>
                                    </li>
                                    <a class="nav-link" href="{{ route('cart.index') }}">Cart <span class="fas fa-shopping-cart"></span>
                                    @if(Cart::getContent()->count() > 0)
                                        <span>{{ Cart::getContent()->count() }}</span>
                                    @endif
                                    </a>
                                </li>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
        
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <a class="dropdown-item" href="">
                                        Fund Wallet <span class="fas fa-wallet"></span>
                                    </a>
        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

        <div class="container">
            <div class="row fill-viewport align-items-start">
                <div class="col-12 col-md-6 mx-auto text-center">
                <h1 class="text-dark display-4">Hamdala Store</h1>                  </div>
            </div>
            </div>
        </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon" style="background-color: black"></span>
            </a>
            <a class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon" style="background-color: black"></span>
            </a>
            
        </div>
        <div class="container mt-5">
            <div class="row fill-viewport align-items-start">
                <div class="col-12 col-md-6 mx-auto text-center">
                <a href="/category" class="btn btn-outline-success">Go to Shop</a>
            </div>
            </div>
        </div>
        
    </div>
    
    <div class="mt-5">
        @include('includes.footer')
    </div>
</body>
</html>
