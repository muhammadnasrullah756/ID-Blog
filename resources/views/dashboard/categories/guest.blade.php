@extends('layouts.main')

@section('title')

    <title>Category</title>

@endsection

<style>
    /* .content { margin-top:10px;
    } */
    h1 {
        text-align:center;
    }
    .container {
        -align:center;
    }
</style>

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $category->name }}</div>

                <div class="card-body row">
                    @if (count($post) === 0)
                        <span class="text-center">Haven't Any Post</span>
                    @else

                <table class="table table-striped table-sm ">
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

                      @foreach ($post as $item )



                       <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>

                         <td>{{ $item->category->name }}</td>
                        <td>{{ $item->user->name }}</td>

                        <td>
                          <button class="border-0">
                              <a href="{{ url('article/single/' . $item->id)}}">
                              <span data-feather="eye"></span></a></button>
                        </td>

                      </tr>

                      @endforeach



                  </tbody>

              </table>
            </div>
        </div>
    </div>
</div>
</div>

@endif

              {{-- <br><br><br>
              <button class="border-0">
              <a href="/dashboard/posts">Back</a></button> --}}

{{-- <div class="container">
<h1>{{ $category->name }}</h1>
<div class ="row justify-content-center">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<div class=" col-md-8">
    <div class="div card">
    <table class="table table-striped table-sm ">
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
        @foreach ($post as $item )

         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->title }}</td>

           <td>{{ $item->category->name }}</td>
          <td>{{ $item->user->name }}</td>

          <td>
            <button class="border-0">
                <a href={{ url('/dashboard/posts/'.$item->id) }}>
                <span data-feather="eye"></span></a></button>
          </td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<br><br><br>
<button class="border-0">
<a href="/dashboard/posts">Back</a></button> --}}
@endsection
