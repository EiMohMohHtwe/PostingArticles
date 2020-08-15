<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;
use Illumination\Support\Facades\URL;
use Illumination\Support\Facades\DB;

class PostController extends Controller
{
    public function getDashboard()
    {
        
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('dashboard', ['posts' => $posts]);
    }

    public function postCreatePost(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:1000'
        ]);
        $post = new Post();
        $post->body = $request['body'];
        $message = 'There was an error';
        if ($request->user()->posts()->save($post)) {
            $message = 'Post successfully created!';
        }
        return redirect()->route('dashboard')->with(['message' => $message]);
    }

   
    public function editpost(Request $request, $id)
    {

        $this->validate($request, [
            'body' => 'required|max:1000'
        ]);

        $posts = Post::find($id);

        $posts->body = request('body');
        $users->save();

        return redirect()->back();
    }

    public function edit(Post $post)
    {
        return view('editpost',compact('post'));
    }
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'body' => 'required|max:1000'
        ]);
     

        $post = Post::find($id);

        $post->body = request('body');
       
        $post->save();

        return redirect()->back();
    }

   
    
}
