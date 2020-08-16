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
              <a class="nav-link" href="{{ route('cart.index') }}">Cart <span class="fas fa-shopping-cart"></span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="">Logout <span class="fas fa-sign-out
                -alt"></span></a>
            </li>
            
            </li>
          </ul>
          {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> --}}
        </div>
      </nav>

</body>

</html>
