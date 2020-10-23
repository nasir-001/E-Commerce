<link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
<style>
    .dropdown:hover .dropdown-menu {
        display: block;
}
</style>
<div content-full title="Welcome">
    <nav class="flex items-center shadow-2xl justify-between flex-wrap bg-gray-800 p-6 w-full top-0">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <p class="navbar-brand text-2xl sm:text-3xl hover:text-gray-300 hover:bg-gray-700 px-2 py-2 rounded" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </p>
        </div>
    
        <div class="block sm:hidden focus:outline-none">
            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
    
        <div class="w-full flex-grow sm:flex sm:items-center sm:w-auto hidden sm:pt-0" id="nav-content">
            <ul class="list-reset sm:flex justify-end flex-1 items-center">
                @guest
                    <li class="hover:bg-gray-700 rounded sm:text-md hover:text-gray-300 py-2 px-4 text-white no-underline">
                        <a class="sm:inline-block" href="/category">Home 
                            <span>
                                <svg class="fill-current mb-1 h-4 w-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"/></svg>
                            </span>
                        </a>
                    </li>

                    <li class="sm:inline-block hover:bg-gray-700 rounded sm:text-md hover:text-gray-300 py-2 px-4 text-white no-underline">  
                        <a class="nav-link" href="{{ route('allBlogs') }}">Blog 
                            <span>
                                <svg class="fill-current h-4 w-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M172.2 226.8c-14.6-2.9-28.2 8.9-28.2 23.8V301c0 10.2 7.1 18.4 16.7 22 18.2 6.8 31.3 24.4 31.3 45 0 26.5-21.5 48-48 48s-48-21.5-48-48V120c0-13.3-10.7-24-24-24H24c-13.3 0-24 10.7-24 24v248c0 89.5 82.1 160.2 175 140.7 54.4-11.4 98.3-55.4 109.7-109.7 17.4-82.9-37-157.2-112.5-172.2zM209 0c-9.2-.5-17 6.8-17 16v31.6c0 8.5 6.6 15.5 15 15.9 129.4 7 233.4 112 240.9 241.5.5 8.4 7.5 15 15.9 15h32.1c9.2 0 16.5-7.8 16-17C503.4 139.8 372.2 8.6 209 0zm.3 96c-9.3-.7-17.3 6.7-17.3 16.1v32.1c0 8.4 6.5 15.3 14.8 15.9 76.8 6.3 138 68.2 144.9 145.2.8 8.3 7.6 14.7 15.9 14.7h32.2c9.3 0 16.8-8 16.1-17.3-8.4-110.1-96.5-198.2-206.6-206.7z"/></svg>
                            </span>
                        </a>
                    </li>

                    <li class="mr-3 hover:bg-gray-700 rounded sm:text-md hover:text-gray-300 py-2 px-4 text-white no-underline">
                        <a href="{{ route('login') }}" class="inline-block" href="#">{{ __('Login') }}
                            <span>
                                <svg class="h-4 w-4 inline fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"/></svg>
                            </span>
                        </a>
                    </li>
                @if (Route::has('register'))
                    <li class="nav-item hover:bg-gray-700 rounded sm:text-md hover:text-gray-300 py-2 px-4 text-white no-underline">
                        <a class="inline-block" href="{{ route('register') }}">{{ __('Register') }}
                            <span>
                                <svg class=" h-4 w-4 mb-1 inline fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"/></svg>
                            </span>
                        </a>
                    </li>
                @endif
                @else                    
                    <li class="hover:bg-gray-700 rounded sm:text-md hover:text-gray-300 py-2 px-4 text-white no-underline">
                        <a class="sm:inline-block" href="/category">Home 
                            <span>
                                <svg class="fill-current mb-1 h-4 w-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"/></svg>
                            </span>
                        </a>
                    </li>
                    <li class="hover:bg-gray-700 rounded sm:text-md hover:text-gray-300 py-2 px-4 text-white no-underline">
                        <a class="sm:inline-block" href="{{ route('cart.index') }}">Cart 
                            <span>                                
                                <svg id="Capa_1" class="fill-current mb-1 h-4 w-4 inline" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="256" x2="256" y1="512" y2="0"><stop offset="0" stop-color="#00b59c"/><stop offset="1" stop-color="#9cffac"/></linearGradient><g><g><path d="m508.996 156.995c-2.833-3.774-7.277-5.995-11.996-5.995h-92.076c-7.301-50.816-51.119-90-103.924-90-52.804 0-96.623 39.184-103.924 90h-78.055l-19.599-138.107c-1.049-7.396-7.38-12.893-14.851-12.893h-69.571c-8.284 0-15 6.716-15 15s6.716 15 15 15h56.55c.025.175 42.112 297.596 42.12 297.646 2.607 17.204 11.015 32.968 23.729 44.638-10.009 8.26-16.399 20.756-16.399 34.716 0 20.723 14.085 38.209 33.181 43.414-2.044 5.137-3.181 10.73-3.181 16.586 0 24.813 20.187 45 45 45s45-20.187 45-45c0-5.258-.915-10.305-2.58-15.01h125.16c-1.665 4.705-2.58 9.751-2.58 15.01 0 24.813 20.187 45 45 45s45-20.187 45-45-20.187-45-45-45h-240c-8.271 0-15-6.729-15-15s6.729-15 15-15h224.7c33.444 0 63.05-22.36 72.024-54.39l48.679-167.422c1.318-4.532.426-9.419-2.407-13.193zm-102.996 295.005c8.271 0 15 6.729 15 15s-6.729 15-15 15-15-6.729-15-15 6.729-15 15-15zm-210 0c8.271 0 15 6.729 15 15s-6.729 15-15 15-15-6.729-15-15 6.729-15 15-15zm105-361c41.355 0 75 33.645 75 75s-33.645 75-75 75-75-33.645-75-75 33.645-75 75-75zm132.851 238.468c-5.345 19.155-23.089 32.532-43.151 32.532-8.541 0-190.327 0-202.801 0-22.39 0-41.119-16.307-44.559-38.781l-20.074-142.219h73.81c7.301 50.816 51.12 90 103.924 90 52.805 0 96.623-39.184 103.924-90h72.094s-43.153 148.416-43.167 148.468zm-158.457-122.862c5.857 5.857 15.355 5.858 21.213 0l45-45c5.858-5.858 5.858-15.355 0-21.213-5.857-5.858-15.355-5.858-21.213 0l-34.394 34.394-4.394-4.393c-5.857-5.858-15.355-5.858-21.213 0s-5.858 15.355 0 21.213z"/></g></g></svg>
                            </span>
                            @if(Cart::getContent()->count() > 0)
                                <span>{{ Cart::getContent()->count() }}</span>
                            @endif
                        </a>
                    </li>
                    <li class="sm:inline-block hover:bg-gray-700 rounded sm:text-md hover:text-gray-300 py-2 px-4 text-white no-underline">  
                        <a class="nav-link" href="{{ route('allBlogs') }}">Blog 
                            <span>
                                <svg class="fill-current h-4 w-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M172.2 226.8c-14.6-2.9-28.2 8.9-28.2 23.8V301c0 10.2 7.1 18.4 16.7 22 18.2 6.8 31.3 24.4 31.3 45 0 26.5-21.5 48-48 48s-48-21.5-48-48V120c0-13.3-10.7-24-24-24H24c-13.3 0-24 10.7-24 24v248c0 89.5 82.1 160.2 175 140.7 54.4-11.4 98.3-55.4 109.7-109.7 17.4-82.9-37-157.2-112.5-172.2zM209 0c-9.2-.5-17 6.8-17 16v31.6c0 8.5 6.6 15.5 15 15.9 129.4 7 233.4 112 240.9 241.5.5 8.4 7.5 15 15.9 15h32.1c9.2 0 16.5-7.8 16-17C503.4 139.8 372.2 8.6 209 0zm.3 96c-9.3-.7-17.3 6.7-17.3 16.1v32.1c0 8.4 6.5 15.3 14.8 15.9 76.8 6.3 138 68.2 144.9 145.2.8 8.3 7.6 14.7 15.9 14.7h32.2c9.3 0 16.8-8 16.1-17.3-8.4-110.1-96.5-198.2-206.6-206.7z"/></svg>
                            </span>
                        </a>
                    </li>
                    <div class="dropdown inline-block relative">
                        <button class="text-gray-300 border font-semibold py-1 px-4 rounded-lg inline-flex items-center">
                            <span class="mr-1">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            </span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                        </button>
                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                            <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-6 block whitespace-no-wrap" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }} <span><svg class=" h-4 w-4 inline fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"/></svg></span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </div>
                @endguest
            </ul>
        </div>
      
</div>
    <div class="mt-5 bottom-0">
        @include('includes.footer')
    </div>
    <script>
		//Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function(){
            console.log("thisnjdfjs");
			document.getElementById("nav-content").classList.toggle("hidden");
		}
	</script>
</body>
</html>
