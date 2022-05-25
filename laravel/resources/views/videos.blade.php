@extends('layout.layout')

@section('title', 'Videos')

@section('nav-links')
  <ul>
    <li><a href="{{ route('characters') }}">Characters</a></li>
    <li><a href="{{ route('comics') }}">Comics</a></li>
    <li><a href="{{ route('movies') }}">Movies</a></li>
    <li><a href="{{ route('tv') }}">Tv</a></li>
    <li><a href="{{ route('games') }}">Games</a></li>
    <li><a href="{{ route('collectibles') }}">Collectibles</a></li>
    <li><a href="{{ route('videos') }}" class="active">Videos</a></li>
    <li><a href="{{ route('fans') }}">Fans</a></li>
    <li><a href="{{ route('news') }}">News</a></li>
    <li><a href="#">Shop</a></li>
  </ul>
@endsection

@section('main-content')
  <div class="bg-dark">
    <div class="container">
      <div class="videos">
        <div class="btn-tag">
          <span>VIDEOS</span>
        </div>
        <div class="cs">
          <h2>Coming soon...</h2>
        </div>
      </div>
    </div>
  </div>
@endsection