<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('larasGarden/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('larasGarden/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('larasGarden/vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('larasGarden/vendor/owl-carousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link rel="stylesheet" href="{{ asset('larasGarden/vendor/animate/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('larasGarden/vendor/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('larasGarden/style/font-awesome.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('larasGarden/style/util.css') }}">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css"> -->
  <link rel="stylesheet" href="{{ asset('larasGarden/style/style.css') }}">
  <title>Laras Garden</title>
</head>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html"><img class="logo" width="150px" src="{{ asset('larasGarden/image/laras_garden.png') }}"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ route('home') }}/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home') }}/#about">About</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home') }}/#food_menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home') }}/#chef">Chef</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home') }}/#event">Event</a></li>
          <li><a class="nav-link scrollto active" href="#news">News</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home') }}/#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home') }}/#reservation">Contact Us</a></li>
          <li><a class="getstarted scrollto" href="#about">E - Menu</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  @yield('content')
  
  <!-- section footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <div class="right-text-content">
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="logo">
            <a href="index.html"><img src="/image/PNG1.png" width="150px" alt=""></a>
          </div>
        </div>
        <div class="col-lg-4 col-xs-12">
          <div class="left-text-content">
            <p>© Copyright Laras Garden Resto
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end section footer -->
  <script src="{{ asset('larasGarden/vendor/jquery/jquery-min.3.6.0.js') }}"></script>
  <script src="{{ asset('larasGarden/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('larasGarden/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('larasGarden/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('larasGarden/vendor/slick/slick.min.js') }}"></script>
  <!-- <script src="/vendor/countdowntime/countdowntime.js"></script> -->
  <script src="{{ asset('larasGarden/js/slick-custom.js') }}"></script>
  <script src="{{ asset('larasGarden/js/app.min.js') }}"></script>
  <script src="{{ asset('larasGarden/js/main.js') }}"></script>
  <script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
  <script>
    const galleryLightbox = GLightbox({
      selector: '.gallery-lightbox'
    });
  </script>
</body>

</html>