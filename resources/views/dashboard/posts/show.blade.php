@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-5 justify-content-center">
    <div class="col-lg-12">
      <div class="article">
          <h5>{{ $post->title }}</h5>
          @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="my-3" width="1150" height="400">
          @else
            <img src="{{ asset('images/peace.jpg') }}" alt="" class="my-3" width="1150" height="400">
          @endif
          <p>in <a href="/categories/{{ $post->category->slug }}" class="categoryTitle" style="font-weight: 600">{{ $post->category->name }}</a></p>
          <p>{!! $post->body !!}</p>
          <a href="/dashboard/posts" class="btn btn-prim mt-4">Back to posts</a>
      </div>
    </div>
  </div>
</div>
@endsection