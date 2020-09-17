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
    <body>
        
        <div id="container" class="mb-2">
            <div  id="main">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg" style="height: 80px">
                    <a class="navbar-brand" href="#" style="font-size: 2rem">Hamdala</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav float-right ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="/category">Shop <span class="fas fa-home"></span></a>
                        </li>
                        <li class="nav-item active">  
                            <a class="nav-link" href="">Blog <span class="fas fa-blog"></span></a>
                        </li>
                        @guest
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('login') }}">Login <span class="fas fa-sign-in-alt"></span></a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a style="color: white;" class="nav-link" href="{{ route('register') }}">Sign Up <span class="fas fa-layer-group"></span></a>
                            @endif
                        </li>
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
            
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                              
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                        
                        </li>
                      </ul>
                    </div>
                  </nav>
            </div>
            
            <div class="container mt-5">
                <div class="row fill-viewport align-items-start">
                  <div class="col-12 col-md-6 mx-auto text-center">
                    <h1 class="text-dark display-3">Hamdala Store</h1>
                    <a href="/category" class="btn btn-outline-success">Go to Shop</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        <div class="mt-5">
            @include('includes.footer')
        </div>
    </body>
</html>
