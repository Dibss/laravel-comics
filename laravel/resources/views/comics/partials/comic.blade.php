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
  <div class="container">
    <div class="comic-page">
      <div class="comic-page__overview">
        <h2>{{ $comic['title']}}</h2>
        <div class="price">
          <div class="price__left">
            <span>U.S. Price: <span>{{ $comic['price'] }}</span></span>
            <span>AVAILABLE</span>
          </div>
          <div class="price__right">
            <span>Check availability <i class="fa-solid fa-caret-down"></i></span>
          </div>
        </div>
        <p>{{ $comic['description'] }}</p>
      </div>
      <div class="comic-page__ad">
        <div>
          <span>advertisement</span>
          <img src="/images/adv.jpg" alt="ad">
        </div>
      </div>
    </div>
  </div>
  <div class="bg-dirtywhite">
    <div class="container">
      <div class="comic-page-details">
        <div class="talent">
          <h3>Talent</h3>
          <div>
            <h4>Art by:</h4>
          </div>
          <div>
            <h4>Written by</h4>
          </div>
        </div>
        <div class="specs">
          <h3>Specs</h3>
          <div>
            <h4>Series:</h4>
            <span><a href="#">{{ $comic['series'] }}</a></span>
          </div>
          <div>
            <h4>U.S. Price:</h4>
            <span>{{ $comic['price'] }}</span>
          </div>
          <div>
            <h4>On Sale Date:</h4>
            <span>{{ $comic['sale_date'] }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection