
<nav>
    @if (count($categories) > 0)
        <h4 class="ml-1 sm:mt-3 mb-4 text-gray-800 text-2xl font-semibold uppercase">Categories</h4>
        <div class="sm:flex">
            <ul class="flex-shrink-0 z-0">
                @foreach ($categories as $category)
                <div class="bg-white shadow-2xl rounded">
                    <li class="uppercase ml-1 py-4">
                        <a class="hover:underline border-b border-gray-400 rounded hover:text-gray-600 hover:bg-gray-400 px-3 py-2" href="/category/{{ $category->id }}">{{ $category->name }}</a>
                    </li>
                </div>
                @endforeach
            </ul>
        </div>
    @endif
    
</nav>

