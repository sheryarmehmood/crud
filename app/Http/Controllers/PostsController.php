<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class PostsController extends Controller
{
    public function index(){

        $role = Auth::user()->is_admin;
        if($role == NULL){
            $id = Auth::user()->id;
            $posts = Posts::with('user')->where('user_id',$id)->get();}
        else if($role == 1){
            $posts = Posts::where('user_id', '!=' , NULL) ->get();
        }
//        $posts = Posts::all();
//        $id = Auth::user()->id;
//        $posts = Posts::with('user')->where('user_id',$id)->get();
        return view('posts')->with('posts',$posts);
    }

    public function createPost() {
        return view('create-post');
    }

    public function addPost(Request $request) {

        $this->validate($request, [
            'title' => 'required|min:5',
            'body' => 'required|max:30',
        ]);

        $post = new Posts();
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        session()->flash('notify','Post added successfully');
        return redirect('/posts');
    }


    public function updatePost($id){
    $post = Posts::where('id',$id)->first();
    return view('update-post')->with('post',$post);
    }

    public function updatePostsData(Request $request) {


        $data = array(
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'body'  => $request->body
        );
        $id =  $request->id;
        Posts::where('id',$id)->update($data);
        session()->flash('notify','Post updated successfully');
        return redirect('/posts'); 
    }

    public function deletePost($id) {
    $post = Posts::where('id',$id)->delete();
    session()->flash('notify','Post deleted successfully');
    return redirect('posts');
    }
}

?>


