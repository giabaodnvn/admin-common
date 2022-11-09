@extends('admin.layouts.main')
@push('styles')
    <!-- summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="static/css/lib/icheck-bootstrap.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="static/css/lib/select2.css">
	<link rel="stylesheet" href="static/css/lib/select2-bootstrap4.css">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Review</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('Edit Review') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="alert alert-info">
                @if (request()->has('ref_lang') && request()->get('ref_lang') == 'en')
                    <i class="icon fas fa-info"></i> You are editing "English" version
                @else
                    <i class="icon fas fa-info"></i> You are editing "Tiếng Việt" version
                @endif
            </div>
            <form action="{{route('admin.reviews.update', $review->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                      <div class="col-md-9">
                        <div class="card card-outline card-info">
                              <div class="card-header">
                                <h3 class="card-title">Edit Review</h3>
                              </div>
                            @include('admin.reviews.form', ['review' => $review, 'type' => 'edit'])
                </div>
            </form>
        </div>
    </section>
@endsection
@push('scripts')
<script>
    $(function () {
        //Define function to open filemanager window
        var lfm = function(options, cb) {
        var route_prefix = (options && options.prefix) ? options.prefix : '/admin/media';
        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
        window.SetUrl = cb;
        };

        // Define LFM summernote button
        var LFMButton = function(context) {
        var ui = $.summernote.ui;
        var button = ui.button({
            contents: '<i class="note-icon-picture"></i> ',
            tooltip: 'Insert image',
            click: function() {
                lfm({type: 'image', prefix: '/admin/media'}, function(lfmItems, path) {
                    lfmItems.forEach(function (lfmItem) {
                        context.invoke('insertImage', lfmItem.url);
                    });
                });
             }
        });
        return button.render();
      };

        //Initialize summernote with LFM button in the popover button group
        $('#content').summernote({
            height: 585,
            placeholder: 'Content...',
            toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                        ['table', ['table']],
                        ['popovers', ['lfm']],
                        ['insert', ['link','video']],
                        ['view', ['fullscreen', 'codeview', 'help']],
                ],
          buttons: {
              lfm: LFMButton
          }
        });

        //Initialize Select2 Elements
        $('.tag-input').select2({
            theme: 'bootstrap4',
            tags: true,
            allowClear: true,
            placeholder: "Select or input a tag",
        })
        $('.status-input').select2({
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
    })	

    $("input[data-featured-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

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

    $('#name').keyup(function() {
        var name = $(this).val();
        $('#slug').val(to_slug(name))
        function to_slug(str) {
            // Chuyển hết sang chữ thường
            str = str.toLowerCase();     
            // xóa dấu
            str = str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g, 'a');
            str = str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g, 'e');
            str = str.replace(/(ì|í|ị|ỉ|ĩ)/g, 'i');
            str = str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g, 'o');
            str = str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g, 'u');
            str = str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g, 'y');
            str = str.replace(/(đ)/g, 'd');
            // Xóa ký tự đặc biệt
            str = str.replace(/([^0-9a-z-\s])/g, '');
            // Xóa khoảng trắng thay bằng ký tự -
            str = str.replace(/(\s+)/g, '-');
            // xóa phần dự - ở đầu
            str = str.replace(/^-+/g, '');
            // xóa phần dư - ở cuối
            str = str.replace(/-+$/g, '');
            // return
            return str;
        }
    })
</script>
@endpush
@prepend('scripts')
<!-- Summernote -->
<script src="static/js/lib/summernote/summernote-bs4.js"></script>
<!-- Select2 -->
<script src="static/js/lib/select2/select2.full.js"></script>
<!-- Bootstrap Switch -->
<script src="static/js/lib/bootstrap-switch/bootstrap-switch.js"></script>
<!-- Laravel File Manager -->
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

@endprepend