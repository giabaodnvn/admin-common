<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Log in</title>
    <base href="{{ asset('') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="static/css/lib/fontawesome.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="static/css/lib/icheck-bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="static/css/admin.css">
    <!-- Custom style -->
    <link rel="stylesheet" href="static/css/auth-custom.css">

</head>
<body class="hold-transition login-page" id="particles-js">
<div class="login-box">
  <div class="login-logo text-white">
    <b>Admin</b>LTE</a>
  </div>
  <div class="card">
    @yield('content')
  </div>
</div>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="static/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="static/js/admin.js"></script>
</body>
</html>
