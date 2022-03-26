@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
  <a href="/dashboard/posts/create" class="btn btn-second my-3">Create post</a>
</div>

@if(session()->has('success'))
  <div class="alert alert-success my-3" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-12">
  <table class="table table-hover table-borderless mt-3">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge btn-info"><span data-feather="eye"></span></a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge btn-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?');"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection