@extends('layouts.app')

@section('content')
<!-- Navigation & Tittle -->
    <title>Daftar - {{ env('APP_NAME') }}</title>
<!-- end of Navigation & tittle -->

<!-- main content -->
<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="{{ asset('images/logo.png') }}" alt="logo" width="100" class="logo" style="width:300px;height:50px;">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Registrasi</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                @csrf

                  <div class="row">

                    <div class="form-group col-6">
                      <label for="name">Nama Lengkap</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <div class="invalid-feedback">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group col-6">
                      <label for="role user">Role User</label>
                      <select class="form-control selectric">
                        <option>Admin / Staff P2MB & Humas</option>
                        <option>Dewan Juri</option>
                        <option>Kepala Biro P2MB & Humas</option>
                      </select>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="email">Alamat E-Mail</label>
                    <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <div class="invalid-feedback">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>

                  <div class="row">
                      
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password" name="password">
                      <div class="invalid-feedback">
                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                      </div>
                    </div>

                    <div class="form-group col-6">
                      <label for="password-confirm" class="d-block">Password Confirmation</label>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; SIBIDIK UMG - Biro P2MB Humas 2020 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection

