<div id="sidebar" class="side-menu">
    <h3 class="mt-5 ml-5">Categories</h3>
    <div class="row m-3">
        <ul class="">
            @foreach ($categories as $category)
                <li class="list-unstyled">
                    {{-- <a class="" href="/category/{{ $category->id }}">{{ $category->name }}</a> --}}
                    <a class="" href="/category/{{ $category->id }}">{{ $category->name }}</a>
                </li>
                <hr>
            @endforeach
        </ul>
    </div>
</div>

