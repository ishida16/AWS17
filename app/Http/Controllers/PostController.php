<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function tomail(PostRequest $request, Post $post)
    {
        //return $post->get();//$postの中身を戻り値にする。
        $input = $request['post'];
	    $post->fill($input)->save();
        return view('posts.tomail')->with(['posts' => $post->get()]);
    }

}
