<link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
        <a class="navbar-brand" href="#">Hamdala</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav float-right ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/category">Home <span class="fas fa-home"></span></a>
            </li>
            <li class="nav-item active">  
              <a class="nav-link" href="{{ route('cart.index') }}">Cart <span class="fas fa-shopping-cart"></span>
                @if(Cart::getContent()->count() > 0)
                	<span>{{ Cart::getContent()->count() }}</span>
                @endif
              </a>
            </li>
            @guest
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">Login <span class="fas fa-sign-in-alt"></span></a>
            </li>

            @if (Route::has('register'))
                <a style="color: white;" class="nav-link" href="{{ route('register') }}">Sign Up <span class="fas fa-layer-group"></span></a>
            @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="">
					Fund Wallet <span class="fas fa-wallet"></span>
				</a>

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

</body>

</html>
