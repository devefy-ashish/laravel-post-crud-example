<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        $data= Post::all();

        return view('welcome',compact('data'));
    }

    public function addPost(){
        return view('addPost');
    }

    public function submitPost(Request  $request){

        $validator = $request->validate([
            'title' => 'required|string|min:3',
            'content' => 'required|string|min:10',
        ]);

        Post::create([
            'title' => $request['title'],
            'description' => $request['content'],
        ]);

        $request->session()->flash('success', "Data Submitted Succesfully!!");

        return  redirect()->back()->withErrors($validator)->withInput();

    }


    public function deletePost($id)
    {
       
        $post = Post::findOrFail($id);

        $post->delete();

        session()->flash('success', 'Post deleted successfully!');

        return redirect()->route('home');
        
    }

    public function editPost($id)
    {
       
        $post = Post::findOrFail($id);

        return view('editPost',compact('post'));
        
    }


    public function updatePost(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|min:3',
            'content' => 'required|string|min:10',
        ]);

        $post = Post::findOrFail($id);

        $post->update([
            'title' => $request->input('title'),
            'description' => $request->input('content'),
        ]);

        session()->flash('success', 'Post updated successfully!');

        return redirect()->route('home');
    }


}
