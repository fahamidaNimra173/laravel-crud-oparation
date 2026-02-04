<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function create()
    {
        return  view('create');
    }
    public function ourFilesStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png'
        ]);
        $post = new Post;
        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $request->image;
        $post->save();
        return redirect()->route('home')->with('success', 'your post has been successfully created');
    }
    public function editPost($id)
    {
        $post = Post::findOrFail($id); //

        return view('edit', ['ourPost' => $post]);
    }
    public function updatePost($id, Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png'
        ]);
        $post = Post::findOrFail($id);
        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $request->image;
        $post->save();
        return redirect()->route('home')->with('success', 'your post has been successfully updated');
        return view('update', ['ourUpdatedPost' => $post]);
    }
}
