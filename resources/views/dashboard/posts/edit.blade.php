@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h4>Edit Post</h4>
</div>
<div class="row d-flex justify-content-center align-items-center mt-5">
  <div class="col-lg-8">
    <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
      @method('put')
      @csrf
      <div class="post-field mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}" required autofocus>
        @error('title')
            <div class="invalid-feedback fs-6">
              {{ $message }}
            </div>
        @enderror
      </div>
      <div class="post-field mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly="readonly" required value="{{ old('slug', $post->slug) }}">
        @error('slug')
        <div class="invalid-feedback fs-6">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="post-field mb-3">
        <label for="category" class="form-label">Category</label>
        <select name="category_id" class="form-select @error('category_id') is-invalid @enderror" id="category_dd">
          @foreach ($categories as $category)
              @if (old('category_id', $post->category_id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
          @endforeach
        </select>
      </div>
      <div class="post-field mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea name="body" id="editor" class="form-select @error('body') is-invalid @enderror">{{ old('body', $post->body) }}</textarea>
        @error('body')
            <p class="text-danger mt-2 fs-6">{{ $message }}</p>
        @enderror
      </div>
      <button type="submit" class="btn btn-prim my-3">Edit Post</button>
    </form>
  </div>
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', () => {
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  document.addEventListener('trix-file-accept', (e) => {
    e.preventDefault();
  })

  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
  });

  CKEDITOR.config.height='600px'

</script>
@endsection