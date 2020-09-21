<style>
    @media (max-width: 1000px) {
        h1 {
            display: none;
        }
    }

    @media (min-width: 1000px) {
        h4 {
            display: none;
        }
    }
</style>
<nav>
    <h1 class="ml-3 mt-5 mb-4">Categories</h1>
    <h4 class="ml-3 mt-3 mb-4">Categories</h4>
    <div class="row">
        <ul class="side-menu">
            @foreach ($categories as $category)
                <li class="list-unstyled">
                    <a style="text-transform: uppercase" class="text-right" href="/category/{{ $category->id }}">{{ $category->name }}</a>
                </li> 
                <hr>
            @endforeach
        </ul>
    </div>
</nav>

