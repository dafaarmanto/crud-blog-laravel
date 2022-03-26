<!-- Extending main layout -->
@extends('layouts.mainlay')
@section('container')
  <div class="category-menu">
    <h5 class="category-selector">Category</h5>
    <a href="/blog" class="btn btn-category each-category {{ request()->is('blog') ? "active-category" : "" }}">All</a>
    @foreach ($categories as $category)
      <a href="/categories/{{ $category->slug }}" class="btn btn-category each-category">{{ $category->name }}</a>
    @endforeach
  </div>
  <div class="row">
    <div class="col-8 feeds">
      @if ($posts->count())
      @foreach ($posts as $post)
      <article class="mb-5">
        <div class="post-by">
          @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-profile-post">
          @else
            <img src="{{ asset('images/peace.jpg') }}" alt="" class="img-profile-post">
          @endif
          <p><a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="category-name">{{ $post->category->name }}</a> <span style="color: #b5b6b6">&bull; {{ $post->created_at->diffForHumans() }}</span></p>
        </div>
        <div class="row">
          <div class="col-9">
            <div class="post">
              <a href="/blog/{{ $post->slug }}"><h5 class="mt-3">{{ $post->title }}</a></h5>
              <p class="mt-2"><a href="/blog/{{ $post->slug }}">{{ $post->excerpt }}</a></p>
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
            @if ($post->image)
            <div class="thumbnail">
              <img src="{{ asset('storage/' . $post->image) }}" alt="" width="160px" height="160px">
            </div>
            @else
            <div class="thumbnail">
              <img src="{{ asset('images/peace.jpg') }}" alt="" width="160px" height="160px">
            </div>
            @endif
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
  <button type="button" class="btn btn-dark btn-floating btn-lg" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script>
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
      ) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
@endsection