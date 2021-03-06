@extends('base.navbar')
    <!-- Contact Section -->
    <section id="peminjaman">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Nama Lengkap</label><h3>Nama Lengkap : </h3>
                  <input class="form-control" id="name" type="text" placeholder="" required="required" data-validation-required-message="Masukkan nama lengkap anda.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>NRP</label><h3>NRP : </h3>
                  <input class="form-control" id="nrp" type="tel" placeholder="" required="required" data-validation-required-message="Masukkan NRP anda.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email</label><h3>Email : </h3>
                  <input class="form-control" id="email" type="email" placeholder="" required="required" data-validation-required-message="Masukkan alamat email anda.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Nomor Telepon</label><h3>Nomor Telepon : </h3>
                  <input class="form-control" id="telepon" type="tel" placeholder="" required="required" data-validation-required-message="Masukkan nomor telepon anda.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
                <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>RMK</label><h3>RMK : </h3>
                  <input class="form-control" id="rmk" type="tel" placeholder="" required="required" data-validation-required-message="Masukkan RMK yang anda tekuni."></input>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
                <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Dosen Pembimbing</label><h3>Dosen Pembimbing : </h3>
                  <input class="form-control" id="dosen" type="tel" placeholder="" required="required" data-validation-required-message="Masukkan nama dosen pembimbing 1 atau 2 anda."></input>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Inventaris</label><h3>Inventaris : </h3>
                  <input class="form-control" id="message" type="tel" placeholder="" required="required" data-validation-required-message="Masukkan barang yang ingin anda pinjam."></input>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Kirim</button>
              </div>
            </form>
          </div>
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
