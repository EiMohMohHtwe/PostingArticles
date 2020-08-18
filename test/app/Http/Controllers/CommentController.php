<?php

namespace App\Http\Controllers;

use App\Comment;

use Illuminate\Http\Request;
use Illumination\Support\Facades\URL;
use Illumination\Support\Facades\DB;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')->get();

        return view('comment', ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comment");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post)
    {
        $comment = new Comment();
       $comment->comment = $request['comment'];
       $comment->user_id = auth()->user()->id;
       $comment->post_id = $post;
       $comment->save();

       return redirect()->back();
    }
}
