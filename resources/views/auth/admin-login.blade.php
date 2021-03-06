@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row" style="margin-top: 130px">
      <div class="col-md-4 col-md-offset-4">
         <div class="panel panel-default">
            <div class="panel-heading" style="font-weight: bold;font-size: 20px;color: #fff;text-align: center;background: #212121;">Multiple Authentication - Admin</div>
            <div class="panel-body">
               <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                  {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     <label for="email" class="col-md-1 control-label"></label>
                     <div class="col-md-10">
                        <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                     </div>
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                     <label for="password" class="col-md-1 control-label"></label>
                     <div class="col-md-10">
                        <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-10 col-md-offset-1">
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-10 col-md-offset-1">
                        <button type="submit" class="btn btn-primary">
                        Login
                        </button>
                        <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                        Forgot Your Password?
                        </a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection