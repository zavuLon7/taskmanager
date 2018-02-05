@extends('layouts.app')

@section('content')
<div class="wrapper">
   <div class="page-header" style="background-image: url('../img/login-image.jpg');">
      <div class="filter"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-4 ml-auto mr-auto">
               <div class="card card-register" style="background-color: #5d5b5b;opacity: 0.8;">
                  <h3 class="title">Sign Up</h3>
                  <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-12 control-label">Name</label>

                          <div class="col-md-12">
                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                              @if ($errors->has('name'))
                                  <span class="help-block" style="color:#f5593d;display:block;text-align:center;">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                          <div class="col-md-12">
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                              @if ($errors->has('email'))
                                  <span class="help-block" style="color:#f5593d;display:block;text-align:center;">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-12 control-label">Password</label>

                          <div class="col-md-12">
                              <input id="password" type="password" class="form-control" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="help-block" style="color:#f5593d;display:block;text-align:center;">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="password-confirm" class="col-md-12 control-label">Confirm Password</label>

                          <div class="col-md-12">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-12 col-md-offset-4">
                              <button type="submit" class="btn btn-danger btn-block btn-round">
                                  Sign Up
                              </button>
                          </div>
                      </div>
                  </form>
                  <div class="forgot">
                     <a href="{{route('login')}}" class="btn btn-link btn-danger">Sign In</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<style>
  .form-group { margin-bottom:0px; }
</style>

@endsection
