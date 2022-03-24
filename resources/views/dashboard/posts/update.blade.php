@extends('dashboard.layouts.main')

@section('title')
    <title>Update</title>
@endsection

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Post</h1>
  </div>

  <div class="mb-3">
    <form action="{{ url('/dashboard/posts/update/'.$post->id) }}" method="post">
        @csrf
        @method('put')
   <label for="title" class="form-label">Title</label>
   <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
   <label for="excerpt" class="form-label">Excerpt</label>
   <input type="text" name="excerpt" class="form-control" id="excerpt" placeholder="Excerpt" value="{{ $post->excerpt }}">
   <label for="category_id" class="form-label" name="category_id">Categories</label>
   <select class="form-select" name="category_id" aria-label="Default select example"value="{{ $post->category_id }}" >
   {{-- <option selected>- - Kategori - -</option> --}}
   <option value="{{ $post->category->id }}">{{ $post->category->name }}</option>
   <option value="1">History</option>
   <option value="2">Religion</option>
   <option value="3">Science</option>

 </select>
   {{-- <label for="user_id" class="form-label">Author</label> --}}
   <input type="hidden" name="user_id" class="form-control " id="user_id" placeholder="Author" value="{{ auth()->user()->id }}">
   <!-- <label for="exampleFormControlInput1" class="form-label"></label>
   <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title"> -->
 </div>
 {{-- <div class="mb-3">
   <label for="formFile" class="form-label">Choose Pict</label>
   <input class="form-control" name="pict" type="file" id="formFile">
 </div> --}}
 <div class="mb-3">
   <label for="content" class="form-label">Content</label>
   <textarea class="form-control" name="content" id="content" rows="4" >{{ $post->content }}</textarea>
 </div>
 <a href="{{ url('/dashboard/posts') }}" class="btn btn-danger">Back</a>
 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
 </form>
@endsection
