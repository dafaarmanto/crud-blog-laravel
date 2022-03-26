<!-- Extending main layout -->
@extends('layouts.mainlay')
@section('container')
  <div class="category-menu">
    <h5 class="category-selector">Category</h5>
    <a href="/blog" class="btn btn-category each-category {{ request()->is('blog') ? "active-category" : "" }}">All</a>
    @foreach ($categories as $category)
      <a href="/categories/{{ $category->slug }}" class="btn btn-category each-category {{ request()->is('categories/'.$category->slug) ? "active-category" : "" }}">{{ $category->name }}</a>
    @endforeach
  </div>
  <div class="row">
    <div class="col-7">
      @if ($posts->count())
      @foreach ($posts as $post)
        <article class="mb-5">
          <div class="post-by">
            <img src="{{ URL::asset('images/gojou.gif'); }}" alt="Dafa" class="img-profile-post">
            <p>Dafa Armanto in <a href="/categories/{{ $post->category->slug }}" class="category-name">{{ $post->category->name }}</a></p>
          </div>
          <div class="row">
            <div class="col-9">
              <div class="post">
                <a href="/blog/{{ $post->slug }}"><h5 class="mt-3">{{ $post->title }}</a></h5>
                <p class="mt-2">{{ $post->excerpt }}</p>
                <div class="post-misc">
                  <div class="texxt">
                    <p class="mt-3 read-time">5 min read</p>
                    <p class="mt-3 read-time">5 min read</p>
                    <p class="mt-3 read-time">5 min read</p>
                  </div>
                  <span style="font-size: 12px; color: #b5b6b6;">
                    <a href="#" style="color: #212121"><i class="far fa-2x fa-bookmark"></i></a>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="thumbnail">
                <img src="{{ asset('images/gojou.gif') }}" alt="" width="160px" height="160px">
              </div>
            </div>
          </div>
          <hr class="divider" />
        </article>
      @endforeach
      @else
        <div class="post-not-found">
          <img src="{{ asset('images/3d-notfound.png') }}" alt="notfound" width="200px" height="200px">
          <p class="mt-4">Currently, there are no posts found here.</p>
        </div>
      @endif
    </div>
    @include('components.sidebar')
  </div>
@endsection