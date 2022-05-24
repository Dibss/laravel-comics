<header>
  <div class="top-blue-line">
  </div>
  <div class="top-nav">
    <div>
      <img src="{{ asset('images/dc-logo.png') }}" alt="dc logo">
    </div>
    <nav>
      {{-- nav links --}}
      <ul>
        <li><a href="{{ route('characters') }}">Characters</a></li>
        <li><a href="{{ route('comics') }}">Comics</a></li>
        <li><a href="{{ route('movies') }}">Movies</a></li>
        <li><a href="{{ route('tv') }}">Tv</a></li>
        <li><a href="{{ route('games') }}">Games</a></li>
        <li><a href="{{ route('collectibles') }}">Collectibles</a></li>
        <li><a href="{{ route('videos') }}">Videos</a></li>
        <li><a href="{{ route('fans') }}">Fans</a></li>
        <li><a href="{{ route('news') }}">News</a></li>
      </ul>
    </nav>
    <div>
      {{-- search bar --}}
      <input type="text" placeholder="Search">
    </div>
  </div>
  <div class="hero">
    {{-- hero --}}
  </div>
</header>