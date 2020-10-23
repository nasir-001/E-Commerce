<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
@include('includes/topnav')
    <div class="container">
        <div class="card-body">
            @include('blogs/messages')
            <a href="/blogs" class="btn btn-secondary float-right">Go back</a>
            <h1>{{$blog->title}}</h1>
            <img src="/storage/cover_images/{{ $blog->cover_image }}" style="width: 100%">
            <br><br>
            <div>
                {{  $blog->body  }}
            </div>
            <hr>
            <small>Written on {{ $blog->created_at }} by <p>{{ $blog->user->name }}</p></small>
            <hr>
            @if (!Auth::guest())
                @if (Auth::user()->id == $blog->user->id)
                    <a href="{{ route('blog.edit', ['id'=>$blog->id]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('blog.destroy', ['id'=>$blog->id]) }}" method="POST" class="float-right">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                @endif     
            @endif
        </div>
    </div>
@include('includes/footer')