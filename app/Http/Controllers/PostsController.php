<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* this is the syntax of using DB
        $post = DB::select('SELECT * FROM posts');
        */

        // $posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view ('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $this->validate($request, [
        'title' => 'required',
        'body' => 'required'
    ]);
        //dd($request->post());
        $post = new Post();
        $post->title = $request->post('title');
        $post->body = $request->post('body');
        $post->save();
        return redirect('/posts')->with('success', 'Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post:: find($id);
        return view ('posts.showPost')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post:: find($id);
        return view ('posts.editPost',['post'=>$post]);
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
            'body' => 'required'
        ]);

        //dd($request->post());

        $post = Post::find($id);
        $post->title = $request->post('title');
        $post->body = $request->post('body');
        $post->update();
        return view('posts.showPost',['post'=>$post]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Post Deleted'); 

    }
}
