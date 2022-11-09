@extends('main')
@section('content')
    <section id="main-container" class="blog main-container">
        <div class="container">
            <div class="row">
               <div class="col-lg-6 mx-auto">
                  <div class="error-page text-center">
                     <div class="error-code">
                        <strong>404</strong>
                     </div>
                     <div class="error-message">
                        <h3>Oops... Page Not Found!</h3>
                     </div>
                     <div class="error-body">
                        <p>Try using the button below to go to main page of the site <p>
                        <a href="{{ route('web.index') }}" class="btn btn-primary solid blank"><i class="xts-icon xts-chevron-left"> </i> Back to Home Page</a>
                     </div>
                  </div>
               </div>
            </div><!-- Content row -->
        </div><!-- Container end -->
    </section>
@endsection