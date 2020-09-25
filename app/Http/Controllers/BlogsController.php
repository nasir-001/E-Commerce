<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('blogs.index')->with([
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        // file upload
        if($request->hasFile('cover_image')){
            // Get filename with extension 
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' .time(). '.' . $extension;
            // upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->user_id = auth()->user()->id;
        $blog->cover_image = $fileNameToStore;
        $blog->save();

        return redirect()->route('allBlogs')->with('success', 'Blog Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blogs.show')->with([
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);

        if(auth()->user()->id !== $blog->user->id){
            return redirect()->route('allBlogs')->with('error', 'Unauthorized Page!');
        }

        return view('blogs.edit')->with([
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        // file upload
        if($request->hasFile('cover_image')){
            // Get filename with extension 
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' .time(). '.' . $extension;
            // upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        if($request->hasFile('cover_image')){
            $blog->cover_image = $fileNameToStore;
        }
        $blog->save();

        return redirect()->route('allBlogs')->with('success', 'Blog Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if(auth()->user()->id !== $blog->user->id){
            return redirect()->route('allBlogs')->with('error', 'Unauthorized Page!');
        }

        if($blog->cover_image != 'noimage.jpg'){
            // delete the image
            Storage::delete('public/cover_images/'.$blog->cover_image);
        }

        $blog->delete();
        return redirect()->route('allBlogs')->with('success', 'Blog deleted');
    }
}
