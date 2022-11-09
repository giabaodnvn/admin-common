@extends('admin.layouts.main')
@push('styles')
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="static/css/lib/icheck-bootstrap.css">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Role</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('Create Role') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <form action="{{route('admin.roles.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                      <div class="col-md-9">
                        <div class="card card-outline card-info">
                              <div class="card-header">
                                <h3 class="card-title">Add Role</h3>
                              </div>
                        @include('admin.roles.form', ['role' => null, 'roleHasPermission'=> []])
                </div>
            </form>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        function countRemainCharactor(textareaId, spanId, maxLength = 500) {
            const messageEle = document.getElementById(textareaId);
            messageEle.setAttribute('maxLength', maxLength);
            const counterEle = document.getElementById(spanId);
            counterEle.classList.add('form-text')
            const currentLength = messageEle.value.length;
            messageEle.addEventListener('input', function (e) {
                const target = e.target;
                const remainLength = maxLength-target.value.length;
                counterEle.innerHTML = `${remainLength}/${maxLength} character(s) remain.`;
            });
            counterEle.innerHTML =  `${maxLength-currentLength}/${maxLength} character(s) remain.`;
         }
        countRemainCharactor('description', 'character-counter');
    </script>
@endpush