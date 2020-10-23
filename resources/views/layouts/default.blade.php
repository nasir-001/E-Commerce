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
    <div id="container" class="bg-gray-200">
        <div class="relative" id="topnav">
            @include('includes.topnav')
        </div>
        
        <div class="flex relative px-2 sm:mx-auto sm:px-12">
            <div class="hidden sm:block sm:w-1/5 top-0">
                @include('includes.sidebar')
            </div>
            <div class="sm:mx-3 lg:mx-0 xl:mx-0"></div>
            <div id="main" class="sm:w-4/5 mt-16">
                @yield('content')
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