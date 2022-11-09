@extends('admin.layouts.main')
@push('styles')
	<!-- Select2 -->
	<link rel="stylesheet" href="static/css/lib/select2.css">
	<link rel="stylesheet" href="static/css/lib/select2-bootstrap4.css">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>User</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('Edit User') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <form action="{{route('admin.users.update', $user->id )}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                      <div class="col-md-9">
                        <div class="card card-outline card-info">
                              <div class="card-header">
                                <h3 class="card-title">Add User</h3>
                              </div>
                            @include('admin.users.form', ['user' => $user])
                </div>
            </form>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $('.status-input').select2({
            theme: 'bootstrap4',
            minimumResultsForSearch: Infinity,
        })
        $('.role-input').select2({
            theme: 'bootstrap4',
            minimumResultsForSearch: Infinity,
        })
        
        //Standalone button Laravel File Manager
        var route_prefix = "admin/media";
        $('#lfm-img').filemanager('image', {prefix: route_prefix});

        if ($('#thumbnail').val()) {
            $('#del-img').show();
        }

        $('#thumbnail').change(function () {
            if($(this).val() != null) {
                $('#del-img').show();
            } else {
                $('#del-img').hide();
            }
        }) 

        $("#del-img").click(function() {
            $(".preview-image-wrapper img").attr('src', 'static/img/img-placeholder.png');
            $("#thumbnail").val(null);
            $(this).hide();
        });

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
@prepend('scripts')
<!-- Select2 -->
<script src="static/js/lib/select2/select2.full.js"></script>
<!-- Laravel File Manager -->
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@endprepend