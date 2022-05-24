<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- font awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>@yield('title')</title>
</head>
<body>

  {{-- @include('partials.header') --}}
  <header>
    <div class="top-blue-line">
    <ul>
      <li>DC POWER&#8480; VISA&#174;</li>
      <li>ADDITIONAL DC SITES<i class="fa-solid fa-caret-down"></i></li>
    </ul>
    </div>
    <div class="top-nav">
      <div>
        <img src="{{ asset('images/dc-logo.png') }}" alt="dc logo">
      </div>
      <nav>
        @yield('nav-links')
      </nav>
      <div>
        {{-- search bar --}}
        <input type="text" placeholder="Search"><i class="fa-solid fa-magnifying-glass"></i>
      </div>
    </div>
    <div class="hero">
      {{-- hero --}}
      <h2>il computer impazzisce se metto l'immagine</h2>
    </div>
  </header>

  <main>
    <div class="container">
      @yield('main-content')
    </div>
  </main>

{{-- @include('partials.footer') --}}
  <footer>
    <div class="features">
      <div class="features__content">
        <div>
          <img src="../../../public/images/buy-comics-digital-comics.png" alt="buy digital comics">
          <a href="#"><span>digital comics</span></a>
        </div>
        <div>
          <img src="../../../public/images/buy-comics-merchandise.png" alt="dc merchandise">
          <a href="#"><span>dc merchandise</span></a>
        </div>
        <div>
          <img src="../../../public/images/buy-comics-subscriptions.png" alt="subscribe">
          <a href="#"><span>subscription</span></a>
        </div>
        <div>
          <img src="../../../public/images/buy-comics-shop-locator.png" alt="dc shop locator">
          <a href="#"><span>comic shop locator</span></a>
        </div>
        <div>
          <img src="../../../public/images/buy-dc-power-visa.png" alt="dc power visa">
          <a href="#"><span>dc power visa</span></a>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="footer__content">
        <div class="links">
          <div class="link-col">
            <h2>dc comics</h2>
            <ul>
              <li><a href="#">Characters</a></li>
              <li><a href="#">Comics</a></li>
              <li><a href="#">Movies</a></li>
              <li><a href="#">TV</a></li>
              <li><a href="#">Games</a></li>
              <li><a href="#">Videos</a></li>
              <li><a href="#">News</a></li>
            </ul>
            <h2>shop</h2>
            <ul>
              <li><a href="#">Shop DC</a></li>
              <li><a href="#">Shop DC Collectibles</a></li>
            </ul>
          </div>
          <div class="link-col">
            <h2>dc</h2>
            <ul>
              <li><a href="#">Terms Of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Ad Choices</a></li>
              <li><a href="#">Advertising</a></li>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Subscriptions</a></li>
              <li><a href="#">Talent Workshops</a></li>
              <li><a href="#">CPSC Certificates</a></li>
              <li><a href="#">Ratings</a></li>
              <li><a href="#">Shop Help</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="link-col">
            <h2>sites</h2>
            <ul>
              <li><a href="#">DC</a></li>
              <li><a href="#">MAD Magazine</a></li>
              <li><a href="#">DC Kids</a></li>
              <li><a href="#">DC Universe</a></li>
              <li><a href="#">DC Power Visa</a></li>
            </ul>
          </div>
        </div>
        <div class="logo">
        </div>
      </div>
    </div>
    <div class="social">
      <div class="social__content">
        <div class="btn-signup">
          <span>sign-up now!</span>
        </div>
        <div class="links">
          <span>follow us</span>
          <div>
            <img src="" alt="facebook">
            <img src="" alt="twitter">
            <img src="" alt="youtube">
            <img src="" alt="pinterest">
            <img src="" alt="">
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>