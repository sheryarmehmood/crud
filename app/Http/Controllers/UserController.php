<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function specificUserPost($id){
        $posts = Posts::where('user_id', $id)->get();
        return view('posts')->with('posts', $posts); 
    }
}
