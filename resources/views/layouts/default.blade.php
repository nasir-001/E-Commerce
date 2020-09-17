<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>E-Commerce @yield('title')</title>
</head>
<style>
    @media (min-width: 1000px) {
        #empty {
            display: none;
        }
    }
</style>
<body>
    <div id="container">


        <div id="topnav">
            @include('includes.topnav')
        </div>
        
        <div class="row">
            <div class="col">
                
            </div>
            <div class="col">
                @include('includes.sidebar')
            </div>

            <div class="col-9">
                <div id="main">
                    @yield('content')
                </div>
            </div>
        </div>

        <footer>
            @include('includes.footer')
        </footer>

    </div>

    <script>
        $(document).ready(function(){
            $("#sidebarCollapse").on('click', function(){
                 $("#sidebar").toggleClass('active')
                
            });
        });
    </script>

</body>
</html>