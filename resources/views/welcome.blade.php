<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <title>Welcome | Hamdala~Store</title>
        <style>
            

            html, body {
                background-color: #f1f1f1;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            #container {
                min-height: 100%;
            }
            #main {
                overflow: auto;
                padding-bottom: 100px;
            }
            #footer {
                background-color: #2e4053;
                position: relative;
                height: 100px;
                clear: both;
            }
            li a {
                font-size: 20px;
            } 

            @media screen and (max-width: 950px) {
                #Introduction {
                    display: none;
                }

                #productImage {
                    margin-right: 60px;
                }
            }

            @media screen and (max-width: 590px) {
                img {
                    width: 50px;
                }
                #productImage {
                    width: 100% !important;
                    display: table-row-group;
                }
                
            }
        </style>
    </head>
    <body>
        <div id="container" class="mb-2">
            <div  id="main">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
                    <h1 style="color: white;">Hamdala</h1>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    @if (Route::has('login'))
                        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                            @auth

                            @else
                                <ul class="navbar-nav ml-auto float-right">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="">Blog</a>
                                    </li>

                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                    </li>

                                    @if (Route::has('register'))
                                        <a style="font-size: 20px; color: white;" class="nav-link" href="{{ route('register') }}">Register</a>
                                    @endif
                                    
                                </ul>
                                
                            @endauth    
                        </div>
                    @endif
                </nav>
            </div>
            
                <div class="row" id="system-view">
                    <div class="col-3 pl-5">
                        <div class="card shadow-lg justify-content p-2" id="Introduction">
                            <h1 class="text-center">Hamdala</h1>
                            Lorem ipsum, dolor sit amet consectetur 
                            adipisicing elit. Culpa veritatis, quam 
                            nam laborum nemo eaque facere, nostrum 
                            dolorum nesciunt, optio hic autem quibusdam 
                            aspernatur quidem non quis consequatur voluptatibus quae?
                            Lorem ipsum, dolor sit amet consectetur 
                            adipisicing elit. Culpa veritatis, quam 
                            nam laborum nemo eaque facere, nostrum 
                            dolorum nesciunt, optio hic autem quibusdam 
                            aspernatur quidem non quis consequatur voluptatibus quae?
                            Lorem ipsum, dolor sit amet consectetur 
                            adipisicing elit. Culpa veritatis, quam 
                            nam laborum nemo eaque facere, nostrum 
                            dolorum nesciunt, optio hic autem quibusdam 
                            aspernatur quidem non quis consequatur voluptatibus quae?
                        </div>
                    </div>
                   
                    <div class="col-9 pr-5">
                        <div class="card shadow-lg" id="productImage">
                            <div class="row justify-content-center">
                                @foreach ($products as $product)
                                <div class="m-3">
                                    <h4>{{ $product->name }}</h4><br/>
                                    <a href="#"><img src="{{ asset('images/welcome1.jpg') }}" width="150px">
                                    <p class="text-center">Price &dollar;1500</p>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>

        <div class="mt-5">
            @include('includes.footer')
        </div>
    </body>
</html>
