<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
<script src="https://cdn.tiny.cloud/1/v9eljexk288flu6of2bwfs1778eb4s83ui53odowgzocjq4f/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
                        <textarea id="summary-ckeditor" name="body" class="form-control" placeholder="Body"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" name="cover_image">
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
    
        {{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script>
        CKEDITOR.replace( 'summary-ckeditor' );
        </script> --}}
@include('includes/footer')
