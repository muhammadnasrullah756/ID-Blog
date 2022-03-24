<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class CategoryController extends Controller
{
    public function show($id)
  {
    //  $category = Category::with('posts')->get();
    // $category = Category::find($id);
    // $category = $category->posts;
    // return view('dashboard.categories.show',compact('category'));

    $category = Category::find($id);
    $post = Post::where('category_id', $id)->get();

    return view('dashboard.categories.show', ['category' =>$category, 'post' => $post, 'title' => 'single']);
  }

  public function guest($id)
  {
  $category = Category::find($id);
    $post = Post::where('category_id', $id)->get();

    return view('dashboard.categories.guest', ['category' =>$category, 'post' => $post, 'title' => 'single']);
  }
}
