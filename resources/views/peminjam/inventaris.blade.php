@extends('base.navbar')
    <!-- Contact Section -->
   <section class="portfolio" id="portfolio">
      <div class="container">
                <div class="box-header">                  
                      <form id="formInventarisLab" class="form-horizontal" role="form" method="POST" action="{{ action('Inventaris\InventarisController@inventarislab')}}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <br><br>
                          <label class="col-md-4 control-label"><h3> Laboratorium </h3></label>
                          <div class="col-md-4 ">
                              <select class="form-control" name="KodeLab">
                                  @foreach ($listlab as $itemlab)
                                  <option value="{{$itemlab->id}}" @if($itemlab->id ==$lab_terpilih) ? ' selected="selected"' : '' @endif > {{$itemlab->nama}}</option>
                                  @endforeach
                              </select>
                              
                              <small class="help-block"></small>
                          </div>
                          <br>
                          <div class="form-group">
                              <div class="col-md-4 ">
                                  <button type="submit" class="btn btn-primary" id="button-reg">
                                      Pilih
                                  </button>
                              </div>
                          </div>
                      </div>
                      </form>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <table id="dataInventaris" class="table table-bordered table-hover">
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
                     <?php foreach ($data as $itemInventaris):  ?>
                      <tr>
                        <td>{{$itemInventaris->id}}</td>
                        <td>{{$itemInventaris->nama}}</td>
                        <td>{{$itemInventaris->deskripsi}}</td>
                        @if($itemInventaris->status =='0')         
                            <td>Belum Dipinjam<a></td>         
                        @else
                            <td>Sudah Dipinjam</td>        
                        @endif
                        @if($itemInventaris->status =='0')         
                            <td><a href="{{{ URL::to('pinjam') }}}">
                              <span class="label label-success">Pinjam</span>
                            </a></td>         
                        @else
                            <td></td>        
                        @endif
                      </tr>
                      <?php endforeach  ?>  
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
                </div><!-- /.box-body -->       
 
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
