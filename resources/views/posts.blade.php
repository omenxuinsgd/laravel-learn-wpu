{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
  <h1 class="mb-5 mt-lg-5">Blog Page</h1>
  @foreach ($posts as $item)
    <article class="mb-5">
        <h3><a href="/post/{{ $item["slug"] }}">
                {{ $item["title"] }}
            </a>
        </h3>
        <h6>{{ $item["author"] }}</h6>
        <p>{{ $item["body"] }}</p>
    </article>
  @endforeach
@endsection