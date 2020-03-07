<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   
    public function addPost(){
        return view('Posts.add');
    }

    public function allPostOne(){
        return view('Posts.index');
    }

    


}
