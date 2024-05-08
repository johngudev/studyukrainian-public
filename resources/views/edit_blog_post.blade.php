@extends('layouts.layout')

@section('title')
 - Edit Blog Post
@endsection


@section('css')
<!--link href="css/extra-styles.css" rel="stylesheet" -->
@endsection


@section('content')




<script src="/tinymce/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>

<script>
      tinymce.init({
        selector: '#content',
        plugins: 'table',
      });
    </script>
  </head>


<form class="bg-light p-5 flex flex-col"
    action="/admin/blogs/edit/{{ $slug }}"
    method="POST">

    @csrf

    <div class="my-3 col-12">
        <label for="title">Blog Post Title</label>
        <input type="text"
            class="form-control "
            name="title"
            id="title"
            value="{{ $title }}">
    </div>

    <div class="my-3 col-12">
        <label for="title">Blog Post Content</label>
        <textarea
            class="form-control "
            name="content"
            id="content"
            >{{ $content }}</textarea>
    </div>

    <div class="col-12">
        <input class="btn btn-primary" type="submit">
    </div>
</form>


@endsection