{{-- @dd($posting) --}}

@extends('layouts.main')

@section('container')
  <h1 class="mb-5 mt-lg-5">Post Page</h1>
    <article class="mb-5">
        <h3>{{ $posting["title"] }}</h3>
        <h6>{{ $posting["author"] }}</h6>
        <p>{{ $posting["body"] }}</p>
    </article>
    <a href="/blog">Back to Blog</a>
@endsection