@extends('layout.layout')

@section('title', 'Comics')

@section('nav-links')
  <ul>
    <li><a href="{{ route('characters') }}">Characters</a></li>
    <li><a href="{{ route('comics') }}" class="active">Comics</a></li>
    <li><a href="{{ route('movies') }}">Movies</a></li>
    <li><a href="{{ route('tv') }}">Tv</a></li>
    <li><a href="{{ route('games') }}">Games</a></li>
    <li><a href="{{ route('collectibles') }}">Collectibles</a></li>
    <li><a href="{{ route('videos') }}">Videos</a></li>
    <li><a href="{{ route('fans') }}">Fans</a></li>
    <li><a href="{{ route('news') }}">News</a></li>
    <li><a href="#">Shop</a></li>
  </ul>
@endsection

@section('main-content')
  <div class="comics">
    <div class="btn-tag">
      <span>CURRENT SERIES</span>
    </div>
    <div class="current-series">
      <div>
        @foreach ($comics as $key -> $comic)
          <img src="{{$comic['thumb']}}" alt="{{$comic['title']}} poster">
        @endforeach
      </div>
      <div class="btn">
        <span><a href="#">LOAD MORE</a></span>
      </div>
    </div>
  </div>
@endsection