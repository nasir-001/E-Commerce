<div id="sidebar" class="sidenav">
    <h3 class="mt-5 ml-5">Categories</h3>
    <div class="row m-3">
        <ul class="list-instyled">
            @foreach ($categories as $category)
                <li class="list-unstyled mt-2">
                    <a class="" href="{{ route('dashboard.index', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                </li>
                <hr>
            @endforeach
        </ul>
    </div>
</div>

