<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::latest()->get();
        return view('posts.index', ['post' => $post]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $post = new Post;
        $post->user_id = $request->input('user_id');
        $post->description = $request->input('description');
        $post->img_url = $request->input('img_url');
        $post->save();
        return redirect()->back()->with('status', 'Votre photo est publiée ! ');

    // // Form validation
    // $this->validate($request, [
    //     'user_id' => 'required',
    //     'description' => 'required|description',
    //     'img_url' => 'required|image',
    // ]);
    // //  Store data in database
    // $post = PostController::create($request->all());

    // $post = new Post;
    // // 
    // // return back()->with('success', 'data stored');
    // return redirect()->route('posts.store');
    }








    // Session::flash('flash_message', 'Task successfully added!');




    // return $request



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    { //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
    //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
    //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
    //
    }
}
