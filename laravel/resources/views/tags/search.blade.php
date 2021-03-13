@extends('app')

@section('title', $search )

@section('content')
@include('nav')

<div class="container">
  <div class="card mt-3">
    <div class="card-body">
      <h2 class="h4 card-title m-0">「{{ $search }}」の検索結果{{ $tags->count() }}件</h2>
    </div>

    @foreach ($tags as $tagKey => $tagName)
    @foreach ($tagName->articles as $article)
    @include('articles.card')
    @endforeach
    @endforeach
  </div>
</div>

@endsection
