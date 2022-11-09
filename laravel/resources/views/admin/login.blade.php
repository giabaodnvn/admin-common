@extends('admin.layouts.auth')
@section('content')
    <div class="card-body login-card-body">
    <p class="login-box-msg">Sign in to start your session</p>
    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <strong>Error! </strong> <span class="text-center">{{ Session::get('error') }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form action="{{ route('admin.login') }}" method="post">
        @csrf
      <div class="input-group mb-3">
        <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{old('email')}}">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
        @if ($errors->has('email'))
             <span class="error invalid-feedback" style="display: block;">{{ $errors->first('email') }}</span>
        @endif
      <div class="input-group mb-3">
        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      @if ($errors->has('password'))
            <span class="error invalid-feedback" style="display: block;">{{ $errors->first('password') }}</span>
        @endif
      <div class="row">
        <div class="col-8">
          <div class="icheck-primary">
            <input type="checkbox" id="remember" name="remember" {{ (old('remember')) ? 'checked' : '' }}>
            <label for="remember">
              Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    {{-- <p class="mb-1">
      <a href="">I forgot my password</a>
    </p> --}}
  </div>
@endsection