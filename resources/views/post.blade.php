<!-- Extending main layout -->
@extends('layouts.mainlay')

@section('container')
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-lg-12">
      <div class="post-title text-center mt-5">
        <h2>{{ $post->title }}</h5>
        <p class="mt-3">in <a href="/categories/{{ $post->category->slug }}" style="font-weight: 600" class="categoryTitle">{{ $post->category->name }}</a> &bull; 5 min read</p>
      </div>
    </div>
    @if ($post->image)
      <div class="img-container">
        <img src="{{ asset('storage/' . $post->image) }}" alt="" class="my-3" width="1150" height="400">
      </div>
    @else
      <div class="img-container">
        <img src="{{ asset('images/peace.jpg') }}" alt="post-image">
      </div>
    @endif
    <div class="post-body col-lg-8">
      <div class="post-by my-4">
        <img src="{{ asset('images/gojou.gif') }}" alt="Dafa" class="img-profile-post">
        <p><a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="category-name">{{ $post->category->name }}</a> <span style="color: #b5b6b6">&bull; {{ $post->created_at->diffForHumans() }}</span></p>
      </div>
      {!! $post->body !!}
      {{-- <a href="/blog" class="btn btn-prim my-5" style="font-family: 'Inter', sans-serif;">Back to blog</a> --}}
      <div class="see-recommendation my-5">
        <p style="font-weight: 600">See Also</p>
        <ul class="mb-5">
          <li><a href="#">How to become a front-end developer</a></li>
          <li><a href="#">How to become a back-end developer</a></li>
          <li><a href="#">How to become a blockchain developer</a></li>
        </ul>
        <p>Follow us on social media: <a href="#">Twitter</a>, <a href="#">Facebook</a>, and <a href="#">Instagram</a></p>
      </div>
      <div class="related-tag">
        <a href="#" class="btn btn-rltd-tag each-category">Programming</a>
        <a href="#" class="btn btn-rltd-tag each-category">Design</a>
        <a href="#" class="btn btn-rltd-tag each-category">Personal</a>
      </div>
      <div class="share-post py-5">
        <p>Share post</p>
        <div class="social-media d-flex m-4 justify-content-center">
          <h3 class="px-4"><a href="#"><i class="bi bi-twitter"></i></a></h3>
          <h3 class="px-4"><a href="#"><i class="bi bi-facebook"></i></a></h3>
          <h3 class="px-4"><a href="#"><i class="bi bi-linkedin"></i></a></h3>
        </div>
      </div>
    </div>
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