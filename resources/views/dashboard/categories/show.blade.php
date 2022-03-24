@extends('dashboard.layouts.main')

@section('title')

    <title>Category</title>

@endsection

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

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

<br><br><br>
<button class="border-0">
<a href="/dashboard/posts">Back</a></button>
@endsection
