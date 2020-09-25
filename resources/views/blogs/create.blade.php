<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
@include('includes/topnav')

    <div class="container">
        <div class="card-body">
            @include('blogs/messages')
            <h1>Create</h1>
                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" class="form-control" placeholder="Body"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" name="cover_image">
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
@include('includes/footer')