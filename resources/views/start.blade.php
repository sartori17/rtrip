
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="discrption" content="parallax one page">
    <meta name="keyword" content="agency, business, corporate, creative, freelancer, interior, joomla theme, K2 Blog, minimal, modern, multipurpose, personal, portfolio, responsive, simple">

    <title>RoadTrip</title>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800,900%7cRaleway:300,400,500,600,700" rel="stylesheet">

    <!-- custom styles (optional) -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
  </head>
  <body>

    <!-- Loader
    ================================================== -->
    <div id="preloader">
      <div class='loader-ring'>
        <div class='loader-ring-light'></div>
        <div class='loader-ring-track'></div>
      </div>
    </div>
    <!-- End Loader
================================================== -->


    <!-- Navbar
    ================================================== -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">

        <a class="navbar-brand" href="#">
          <!--<img src="img/logo.png" alt="logo" class="logo-1" style="width: 200px;">-->
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fas fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}" data-scroll-nav="1">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar
================================================== -->


    <!-- Header
    ================================================== -->
    <header id="home" class="header cover-bg" data-image-src="img/main-img.jpg" data-overlay='7' data-scroll-index='0'>
      <div class="container h-100">
        <div class="row align-items-center h-100">

          <div class="col-12 caption">
          	<h2><img src="img/logo.png" alt="logo" class="logo-1" style="width: 250px;"></h2><br>
            <h4>Serviço de transporte de passageiros, programa turístico, tours e receptivo</h4>
            <h2 class="mt-20 mb-20">em <span></span></h2>
            <p class="mt-20"></p>


            <div class="scoial-icon mt-20 text-center">
              <a href="https://www.facebook.com/roadtrip.transporte.turismo/"><span><i class="fab fa-facebook-f"></i></span></a>
              <a href="https://www.instagram.com/ROADTRIP.TRANSPORTE.TURISMO/"><span><i class="fab fa-instagram"></i></span></a>
              <a href="#0" title="+351 936 059 647"><span><i class="fas fa-phone"></i></span></a>
            </div>
          </div>

        </div>
      </div>
    </header>
    <!-- End Header
================================================== -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/Migrate.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- scrollIt js -->
    <script src="js/scrollIt.min.js"></script>

    <!-- typed -->
    <script src="js/typed.js"></script>

    <!-- magnific-popup -->
		<script src="js/jquery.fancybox.min.js"></script>

		<!-- isotope.pkgd.min js -->
		<script src="js/isotope.pkgd.min.js"></script>

    <!-- validator js -->
    <script src="js/validator.js"></script>

    <!-- custom JavaScript -->
    <script src="js/custom.js"></script>

  </body>
</html>
