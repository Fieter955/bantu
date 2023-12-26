<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "posts",
            "posts" => post::all()
        ]);
    }

    public function view(post $post){
        return view('post',[
            'title' => 'post',
            'send' => $post
        ]);
    }
    
    
}
