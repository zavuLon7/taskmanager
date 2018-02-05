@extends('layouts.app')

@section('content')
<div class="wrapper">
   <div class="page-header" style="background-image: url('../img/login-image.jpg');">
      <div class="filter"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-4 ml-auto mr-auto">
               <div class="card card-register" style="background-color: #5d5b5b;opacity: 0.8;">
                  <h3 class="title">Sign In</h3>
                  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                     {{ csrf_field() }}
                     <label>Email</label>
                     <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                     @if ($errors->has('email'))
                         <span class="help-block" style="color:#f5593d;display:block;text-align:center;">
                             <strong>{{ $errors->first('email') }}</strong>
                         </span>
                     @endif
                     <label>Password</label>
                     <input id="password" type="password" class="form-control" name="password" required>

                     @if ($errors->has('password'))
                         <span class="help-block" style="color:#f5593d;display:block;text-align:center;">
                             <strong>{{ $errors->first('password') }}</strong>
                         </span>
                     @endif
                     <button class="btn btn-danger btn-block btn-round">Sign In</button>
                  </form>
                  <div class="forgot">
                     <a href="{{route('register')}}" class="btn btn-link btn-danger">Sign Up</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection
