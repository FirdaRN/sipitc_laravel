<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

      <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('sipiTC-peminjam/vendor/bootstrap/css/bootstrap.min.css')}}" >

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" type="text/css" href="{{asset('sipiTC-peminjam/vendor/font-awesome/css/font-awesome.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic')}}" >

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('sipiTC-peminjam/vendor/magnific-popup/magnific-popup.css')}}" >

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('sipiTC-peminjam/css/freelancer.min.css')}}" >
     @yield('moreCSS')

  </head>

  <body id="page-top">

    <!-- Navigation -->
 @include('base.navbar')

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="{{asset('sipiTC-peminjam/img/profile.png')}}" alt="">
        <h1 class="text-uppercase mb-0">SipiTC</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Sistem Informasi Peminjaman Inventaris Laboratorium Infomatika(TC)</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->

<!--sidebar-->
 @include('base.footer')

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="{{asset('sipiTC-peminjam/img/portfolio/cabin.png')}}" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
              <a class="btn btn-primary btn-lg rounded-pill" href="{{ url('pinjam') }}">
                <i class="fa"></i>Pinjam</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="{{asset('sipiTC-peminjam/img/portfolio/cake.png')}}" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
              <a class="btn btn-primary btn-lg rounded-pill" href="{{ url('pinjam') }}">
                <i class="fa"></i>Pinjam</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="{{asset('sipiTC-peminjam/img/portfolio/circus.png')}}" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
              <a class="btn btn-primary btn-lg rounded-pill" href="{{ url('pinjam') }}">
                <i class="fa"></i>Pinjam</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="{{asset('sipiTC-peminjam/img/portfolio/game.png')}}" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
              <a class="btn btn-primary btn-lg rounded-pill" href="{{ url('pinjam') }}">
                <i class="fa"></i>Pinjam</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="{{asset('sipiTC-peminjam/img/portfolio/safe.png')}}" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
              <a class="btn btn-primary btn-lg rounded-pill" href="{{ url('pinjam') }}">
                <i class="fa"></i>Pinjam</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="{{asset('sipiTC-peminjam/img/portfolio/submarine.png')}}" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="">
                <i class="fa fa-close"></i>
                Close Project</a>
              <a class="btn btn-primary btn-lg rounded-pill" href="{{ url('pinjam') }}">
                <i class="fa"></i>Pinjam</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('sipiTC-peminjam/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('sipiTC-peminjam/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('sipiTC-peminjam/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('sipiTC-peminjam/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{asset('sipiTC-peminjam/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('sipiTC-peminjam/js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('sipiTC-peminjam/js/freelancer.min.js')}}"></script>
    @yield('moreJS')
  </body>

</html>
