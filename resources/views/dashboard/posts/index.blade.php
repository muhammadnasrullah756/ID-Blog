@extends('dashboard.layouts.main')

@section('title')
    <title>My Posts</title>
@endsection

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
  </div>

  <div class="table-responsive col-lg-8">
      <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Author</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post )

         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
           {{-- <td>{{ $post->excerpt }}</td> --}}
           <td>{{ $post->category->name }}</td>
          <td>{{ $post->user->name }}</td>
          {{-- <td>{{ auth()->user()->name }}</td> --}}
          <td>
              <button class="border-0">
              {{-- <a href="/dashboard/posts/{{ $post->id }}"> --}}
              <a href={{ url('dashboard/posts/'. $post->id) }}>
              <span data-feather="eye"></span></a></button>
              <button class="border-0">
              <a href={{ url('dashboard/posts/edit/'. $post->id ) }}>
              <span data-feather="edit"></span></a></button>
              <form action="{{ url('dashboard/posts/delete/'.$post->id) }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="border-0" onclick="return confirm('Are u Sure?')"><span data-feather="trash-2"></span></button>
              </form>
              {{-- <a href="/dashboard/posts/{{ $post->id }}">
              <span data-feather="trash-2"></span></a> --}}
          </td>
        </tr>

        {{-- <article>
        <h2><a href="/dashboard/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
        </article> --}}
        @endforeach
    </tbody>
</table>
</div>
@endsection
