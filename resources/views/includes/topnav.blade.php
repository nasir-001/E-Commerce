<link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">

<body>
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
                          <a style="font-size: 20px;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a style="font-size: 20px;" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
						<li class="nav-item active"> 
							<li class="nav-item">
								<a class="nav-link" href="/category">Home <span class="fas fa-home"></span></a>
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

</body>

</html>
