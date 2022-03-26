<!-- Extending main layout -->
@extends('layouts.mainlay')
@section('container')
  <div class="row">
    <div class="col-7">
      <div class="category-menu">
        <h1 class="author-title">{{ $title }}</h1>
      </div>
      @foreach ($posts as $post)
      <article class="mb-5">
        <div class="post-by">
          <img src="{{ asset('images/gojou.gif') }}" alt="Dafa" class="img-profile-post">
          <p><a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="category-name">{{ $post->category->name }}</a> <span style="color: #b5b6b6">&bull; {{ $post->created_at->diffForHumans() }}</span></p>
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
    </div>
    @include('components.sidebar')
  </div>
@endsection