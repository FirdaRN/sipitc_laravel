<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SipiTC</title>

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

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">SipiTC</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="{{ url('login') }}">Login</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="{{ url('register') }}">Register</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
         <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nrp" class="col-md-4 col-form-label text-md-right">{{ __('NRP') }}</label>

                            <div class="col-md-6">
                                <input id="nrp" type="text" class="form-control{{ $errors->has('nrp') ? ' is-invalid' : '' }}" name="nrp" value="{{ old('nrp') }}" required autofocus>

                                @if ($errors->has('nrp'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nrp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required autofocus>

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success btn-md">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
          </div>
      </div>
    </header>
@extends('base.footer')
  </body>

</html>
