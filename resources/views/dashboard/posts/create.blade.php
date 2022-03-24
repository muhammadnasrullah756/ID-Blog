@extends('dashboard.layouts.main')

@section('title')
    <title>Create</title>
@endsection

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
  </div>

  <div class="mb-3">
    <form action="{{ url('/dashboard/posts/store') }}" method="post">
        @csrf
   <label for="title" class="form-label">Title</label>
   <input type="text" name="title" class="form-control" id="title" placeholder="Title">
   <label for="excerpt" class="form-label">Excerpt</label>
   <input type="text" name="excerpt" class="form-control" id="excerpt" placeholder="Excerpt">
   <label for="category_id" class="form-label" name="category_id">Categories</label>
   <select class="form-select" name="category_id" aria-label="Default select example" >
   <option selected>- - Kategori - -</option>
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
   <label for="exampleFormControlTextarea1" class="form-label">Content</label>
   <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="4"></textarea>
 </div>
 <a href="{{ url('/dashboard/posts') }}" class="btn btn-danger">Back</a>
 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
 </form>
@endsection
