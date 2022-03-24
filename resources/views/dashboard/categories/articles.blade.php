@extends('layouts.main')

@section('title')
Ariticles
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                {{-- <div class="card-body"> --}}
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}


                        <ul>

                            @foreach ($posts as $post)

                    <div class="card-body row">
                        <div class="col-md-3">
                            <div class="card text mb-3" style="width: 47rem;">
                                <div class="card-header" >
                                  <h5 class="card-title"><a href="{{ url('article/single/' . $post->id)}}">{{ $post->title }}</h5></a>
                                  <h6 class="card-subtitle mb-2 text-muted">{{ $post->category->name }}</h6>
                                  <p class="card-text">{{ $post->excerpt }}</p>
                                  {{-- <a href="#" class="card-link">Card link</a>
                                  <a href="#" class="card-link">Another link</a> --}}
                                </div>
                              </div>
                        </div>
                    </div>

                            {{-- <div class="card">
                               <li><a href="{{ ('dashboard/posts/'. $post->id) }}">{{  $post->title }}<br></a>
                                   {{ $post->excerpt  }}</li>
                            </div> --}}
                            @endforeach

                        </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
