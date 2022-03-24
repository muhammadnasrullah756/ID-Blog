@extends('layouts.main')

@section('title')
Home
@endsection

@section('content')

<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    .content {
                text-align: center;
                margin-top: 250px;
            }
  </style>

<link href="cover.css" rel="stylesheet">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card"> --}}
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="content">
                {{-- <div class="card-body"> --}}
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    {{-- {{ __('Welcome To ID - BLOG') }} --}}

                        {{-- @foreach ($posts as $post)
                            {{ $post->title }}

                        @endforeach --}}



                        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
                        <main class="px-3">
                            <h1>ID - BLOG</h1>
                            {{-- <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p> --}}
                            <p class="lead">ID - BLOG is a Blog for building simple and beautiful articles. Create, Read, Edit the text, and you can travel through sea of articles to find more inspiration.</p>

                            <p class="lead">
                              <a href="/dashboard/posts/create" class="btn btn-lg btn-secondary fw-bold border-white bg-dark">Make Ur Own Post</a>
                            </p>
                          </main>

                          <footer class="mt-auto text-dark-50">
                            {{-- <p>Cover template for <a href="https://getbootstrap.com/" class="text-red">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-red">@mdo</a>.</p> --}}
                          </footer>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
