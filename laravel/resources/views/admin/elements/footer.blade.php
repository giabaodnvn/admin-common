<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> {{ env('APP_VERSION', '1.0.0' )}}
    </div>
    <strong>Copyright &copy; {{ date('Y') }} <a href="{{ url('/') }}">{{ env('APP_NAME') }}</a>.</strong> All rights reserved.
  </footer>