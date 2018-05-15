@extends('base.navbar')

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
         <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="form-group">
                <button type="submit" class="btn btn-secondary"><a href="/sipitc_laravel/public/beranda">Submit</a></button>
              </div>
            </form>
          </div>
      </div>
    </header>
@extends('base.footer')
  </body>

</html>
