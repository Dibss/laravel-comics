@extends('layout.layout')

@section('title', 'Comic')

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
    <li><a href="#">Shop <i class="fa-solid fa-caret-down"></i></a></li>
  </ul>
@endsection

@section('comic-poster')
  <div class="blue-line"></div>
  <div class="comic-poster">
    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}} poster">
    <span class="type">{{ $comic['type'] }}</span>
    <span class="gallery">VIEW GALLERY</span>
  </div>
@endsection

@section('main-content')
  <div class="comic-page">

  </div>
@endsection