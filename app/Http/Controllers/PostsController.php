<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


// laravel-5-framework
use App\Models\Post;
use Psy\Command\WhereamiCommand;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index')
        ->with('posts',Post::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,svg,gif|max:5048'
        ]);
        $slug = Str::slug($request->title, '-');
        $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        Post::create([
            'title' => $request->input('title'),
            'slug' => $slug ,
            'image_path' => $newImageName,
            'description'=> $request->input('description'),
            'user_id'=> auth()->user()->id
        ]);

        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show')
        ->with('post',Post::Where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($slug)
{
        // PostController.php
        $post = Post::where('slug', $slug)->firstOrFail();

        // Check if the user is logged in and is the owner of the post
        if (Auth::check() && Auth::user()->id === $post->user_id) {
            return view('blog.edit')->with('post', $post);
        }

        // If the user is not logged in or not the owner, show an error or redirect to login
        if (Auth::check()) {
            abort(403, 'Unauthorized action.'); // User is logged in but not the owner
        } else {
            return redirect()->route('login')->with('error', 'You cannot edit other user\'s posts. Please be a Legend and login to create and edit your own posts.');
        }
    }







    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $rules = [
            'title'=>'required',
            'description'=>'required',
            'image'=>'sometimes|nullable|mimes:jpg,png,svg,gif|max:5048'
        ];

        $request->validate($rules);
        if($request->hasfile('image')){
            $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
            Post::where('slug',$slug)->update(['image_path' => $newImageName]);}

        Post::where('slug',$slug)->update([
            'title' => $request->input('title'),
            'slug' => $slug ,

            'description'=> $request->input('description'),
            'user_id'=> auth()->user()->id
        ]);
        return redirect('/blog/' . $slug)
        ->with('message','The post has been modified');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Post::where('slug',$slug)->delete();

        return redirect('/blog')
        ->with('message','The post has been Deleted');
    }
}
