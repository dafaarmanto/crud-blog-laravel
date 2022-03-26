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
  @foreach ($categories as $category)
    <ul class="mb-5">
      <li>
        <a href="/categories/{{ $category->slug }}"><h5 class="mt-3">{{ $category->name }}</a></h5>
      </li>
    </ul>
  @endforeach
@endsection