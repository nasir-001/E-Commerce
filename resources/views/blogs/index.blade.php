<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
@include('includes/topnav')

<a href="{{ route('blog.create') }}" class="btn btn-outline-primary float-right mt-2 mr-2">Create Post</a>
<a href="{{ route('my.blogs') }}" class="btn btn-outline-secondary float-right mt-2 mr-2">My Blogs</a>

    <div class="container">
        <div class="card-body">
            @include('blogs/messages')
        </div>
    </div>
    @forelse ($blogs as $blog)
        <div class="container">
            <h5 style="color: gray">{{ $blog->user->name }}</h5>
            <div class="card-body shadow-sm mt-3">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_images/{{ $blog->cover_image }}" style="width: 100%">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="{{ route('blog.show', ['id'=>$blog->id]) }}">{{ $blog->title }}</a></h3>
                        <p>{{ $blog->body }}</p>
                        <small>Written on {{ $blog->created_at }}</small>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    @empty
        <div class="container mt-5">
            <div class="row fill-viewport align-items-start">
                <div class="col-12 col-md-6 mx-auto mt-5 text-center">
                <h1 class="text-dark display-1">Ooops</h1>
                <p class="lead pb-3">No blogs found. &#128064;</p>
                </div>
            </div>
        </div>
    @endforelse
    <div class="container">
        <div class="card-body">
            {{ $blogs->links() }}
        </div>
    </div>
@include('includes/footer')