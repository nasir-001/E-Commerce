<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
@include('includes/topnav')
    
    <div class="container text-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-dafault">
                <section class="fill-viewport">
                    <div class="container">
                        <div class="row fill-viewport align-items-start">
                            <div class="col-12 col-md-6 mx-auto text-center">
                                <h1 class="text-dark display-4 text-center">Dashboard</h1>
                                <a href="{{ route('blog.create') }}" class="btn btn-primary">Create Blog</a>
                                
                                @if (count($blogs) > 0)
                                    <h3>Your Blog</h3>
                                    <table class="table">
                                        <tr>
                                            <th>Title</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <td>{{ $blog->title }}</td>
                                                <td><a href="{{ route('blog.edit', ['id'=>$blog->id]) }}" class="btn btn-outline-secondary">Edit</a></td>
                                                <td>
                                                    <form action="{{ route('blog.destroy', ['id'=>$blog->id]) }}" method="POST" class="float-right">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>

                                @else
                                    <p>You have no blogs</p>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    
@include('includes/footer')