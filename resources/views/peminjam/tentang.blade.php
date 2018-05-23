@extends('base.navbar')
<section>
  <br><br>
<h2 class="text-center text-uppercase text-secondary mb-0">Tentang</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">SipiTC merupakan sistem informasi peminjaman inventaris yang ada di laboratorium Departemen Informatika ITS</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Tujuan dari SipiTC yaitu mempermudah alur peminjaman inventaris baik bagi peminjam dan admin laboratorium</p>
          </div>
        </div>
</section>

@extends('base.footer')
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

  </body>

</html>
