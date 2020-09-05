
<nav>
    <h3 class="text-center mt-3 mb-2">Categories</h3>
    <div class="row ml-3">
        <ul class="side-menu">
            @foreach ($categories as $category)
                <li class="list-unstyled">
                    <a class="" href="/category/{{ $category->id }}">{{ $category->name }}</a>
                </li>
                <hr>
            @endforeach
        </ul>
    </div>
</nav>

