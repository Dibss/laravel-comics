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

@section('features')

  <div class="features">
    <div class="features__content">
      <div>
        <img src="/images/buy-comics-digital-comics.png" alt="buy digital comics">
        <a href="#"><span>digital comics</span></a>
      </div>
      <div>
        <img src="/images/buy-comics-merchandise.png" alt="dc merchandise">
        <a href="#"><span>dc merchandise</span></a>
      </div>
      <div>
        <img src="/images/buy-comics-subscriptions.png" alt="subscribe">
        <a href="#"><span>subscription</span></a>
      </div>
      <div>
        <img src="/images/buy-comics-shop-locator.png" alt="dc shop locator" id="shop-locator">
        <a href="#"><span>comic shop locator</span></a>
      </div>
      <div>
        <img src="/images/buy-dc-power-visa.svg" alt="dc power visa">
        <a href="#"><span>dc power visa</span></a>
      </div>
    </div>
  </div>
@endsection