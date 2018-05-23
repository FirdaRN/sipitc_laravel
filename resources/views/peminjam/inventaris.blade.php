@extends('base.navbar')
    <!-- Contact Section -->
   <section class="portfolio" id="portfolio">
      <div class="container">       
        <br>
<h3>List Inventaris</h3>
    <br>
        <h4>Laboratorium:</h4>
          <select class="form-control select2" style="width: 10%;">
                  <option selected="selected" value="">RPL</option>
                  <option value="ncc">NCC</option>
                  <option>KCV</option>
                  <option>LP</option>
                  <option>AJK</option>
                  <option>IGS</option>
                  <option>MIS</option>
                  <option>LP 2</option>
                  <option>Alpro</option>
                  <option>MI</option>
          </select>
        <br>
  </div>

  <div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <div class="scrollable">
              <div class="table-responsive">
                  <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>PC 1</td>
                        <td>CPU: Intel Core i7 <br> OS: Linux <br> RAM: 8GB</td>
                        <td><span class="label label-danger">Belum dipinjam</td>
                        <td>
                           <a href="{{ url('pinjam') }}"><button type="submit" class="btn btn-success btn-sm"><i>Pinjam</i></button></a>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="7">
                            <div class="text-right">
                                <ul class="pagination"> </ul>
                            </div>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
              </div>
              <div id="detail-rintu" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Edit Rincian Tugas</h4>
                    </div>
                    <div class="modal-body">
                      <from class="form-horizontal form-material">
                        <div class="form-group">
                         <div class="col-md-12 m-b-20">
                            <button type="button" class="btn btn-info btn-rounded m-b-20" data-toggle="modal" data-target="#add-rintu">Tambah Rincian Tugas</button>
                            <table id="mainTable" class="table editable-table table-bordered table-striped m-b-0">
                              <thead>
                                  <tr>
                                    <th width="3%">No</th>
                                    <th width="35%">Rincian Tugas</th>
                                    <th width="45%">Deskripsi</th>
                                    <th width="17%">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td width="3%">1</td>
                                  <td width="35%">
                                    Nyapu Lantai
                                  </td>
                                  <td style="word-wrap:break-word;min-width:45%;max-width:45%;">Menyapu seluruh lantai dengan bersih sampai kinclong bangettt sampe semut kalo jalan bisa kepleset</td>
                                  <td  width="17%">
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-sm m-r-5"><i class="ti-pencil-alt" data-toggle="modal" data-target="#edit-rintu"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-sm m-r-5"><i class="ti-trash"></i></button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </from>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                    </div>
                  </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <div id="add-rintu" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h4 class="modal-title" id="myModalLabel">Tambah Rincian Tugas</h4> </div>
                      <div class="modal-body">
                          <from class="form-horizontal form-material">
                              <div class="form-group">
                                  <div class="col-md-12 m-b-20">
                                      <input type="text" class="form-control" placeholder="Rincian Tugas"> </div>
                                  <div class="col-md-12 m-b-20">
                                      <input type="text" class="form-control" placeholder="Deskripsi"> </div>
                              </div>
                          </from>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                          <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                      </div>
                  </div>
                    <!-- /.modal-content -->
                </div>
              <!-- /.modal-dialog -->
              </div>
              <div id="edit-rintu" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h4 class="modal-title" id="myModalLabel">Edit Rincian Tugas</h4> </div>
                      <div class="modal-body">
                          <from class="form-horizontal form-material">
                              <div class="form-group">
                                  <div class="col-md-12 m-b-20">
                                      <input type="text" class="form-control" placeholder="Rincian Tugas"> </div>
                                  <div class="col-md-12 m-b-20">
                                      <input type="text" class="form-control" placeholder="Deskripsi"> </div>
                              </div>
                          </from>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                          <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                      </div>
                  </div>
                    <!-- /.modal-content -->
                </div>
              <!-- /.modal-dialog -->
              </div>
            </div>
        </div>
   </div>

</div>
      </div>
    </section>

@extends('base.footer')
 
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
              <a class="btn btn-primary btn-lg rounded-pill" href="peminjaman.php">
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
              <a class="btn btn-primary btn-lg rounded-pill" href="peminjaman.php">
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
              <a class="btn btn-primary btn-lg rounded-pill" href="peminjaman.php">
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
              <a class="btn btn-primary btn-lg rounded-pill" href="peminjaman.php">
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
              <a class="btn btn-primary btn-lg rounded-pill" href="peminjaman.php">
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
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
              <a class="btn btn-primary btn-lg rounded-pill" href="peminjaman.php">
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

  </body>

</html>
