<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index() {
        $data = Post::where('user_id', Auth::id())->get();
        return view('dashboard.posts.index', [
            'posts' => $data,
        ]);
    }

    public function create() {
        return view('dashboard.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:3',
            'excerpt' => 'required',
            'content' => 'required',
            // 'category_id'
        ]);

        Post::create([
            'user_id' => Auth::Id(),
            // 'category_id' => Auth::name(),
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'category_id' => $request->category_id,
        ]);

        // Post::create([
        //     'user_id' => Auth()->id(),
        //     'title' => request('title'),
        //     'excerpt' => request('excerpt'),
        //     'content' => request('content')
        // ]);
        return redirect('/dashboard/posts')->with('status', 'Berhasil membuat Todo Baru');

    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('dashboard.posts.update', ['post'=>$post]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|min:3',
            'excerpt' => 'required',
            'content' => 'required',

        ]);


        Post::where('id', $id)->update([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'category_id' => $request->category_id,
        ]);

        return redirect('/dashboard/posts')->with('status', 'Berhasil Update Artikel');
    }

    public function delete($id)
    {
        Post::destroy($id);
        return redirect('/dashboard/posts')->with('status', 'Artikel Berhasil dihapus');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    public function single($id)
    {
        $post = Post::find($id);
        return view('dashboard.categories.single', [
            'post' => $post
        ]);
    }
}
