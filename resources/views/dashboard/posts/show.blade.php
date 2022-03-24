@extends('dashboard.layouts.main')

@section('title')
    <title>{{ $post->title }}</title>
@endsection

@section('container')<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $post->title }}</h1>
  </div>
{{-- <h1 class="mb-5">{{ $post->title }}</h1> --}}

<p>{{ $post->user->name }} ||
     <a href="/guestcategories/{{ $post->category->id }}">
        {{ $post->category->name }}
    </a>
    </p>

{{ $post->content }}
<br><br><br>
<button class="border-0">
<a href="/dashboard/posts">Back</a></button>
@endsection
