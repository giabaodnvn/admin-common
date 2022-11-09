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
                    <h3>Category</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('Add Category') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="alert alert-info">
                <i class="icon fas fa-info"></i> You are editing "Tiếng việt" version
            </div>
            <form action="{{route('admin.categories.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                      <div class="col-md-9">
                        <div class="card card-outline card-info">
                              <div class="card-header">
                                <h3 class="card-title">Add Category</h3>
                              </div>
                              <div class="card-body">
                                <div class="form-group">
                                      <label>Name <span class="required">*</span></label>
                                      <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                      @error('name')
                                          <div class="text-danger">{{ $message }}</div>
                                      @enderror
                                </div>
                                <div class="form-group">
                                    <label>Slug <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug">
                                    @error('slug')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                      <label>Parent <span class="required">*</span></label>
                                    <select class="form-control parent" name="parent_id" style="width: 100%;">
                                        <option value="" selected="">None</option>
                                        @if (!empty($categories))
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @if(count($category->subCategories))
                                                    @include('admin.categories.child_category_create', ['subcategories' => $category->subCategories])
                                                @endif
                                            @endforeach                                    
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                      <label>Description</label>
                                      <textarea class="form-control" rows="6" id="description" name="description" placeholder="Short description ..."></textarea>
                                      <span class="text-muted float-right" id="character-counter"></span>
                                </div>
                              </div>
                           </div>
                      </div>
                  <!-- /.col (left) -->
                      <div class="col-md-3">
                        <div class="card card-primary">
                              <div class="card-body">
                                  <div class="form-group">
                                    <label>Status <span class="required">*</span></label>
                                    <select class="form-control status" name="status">
                                        @foreach ($status as $k => $v)
                                            <option value="{{$k}}">{{$v}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                            </div>
                          </div>
                        <div class="card card-primary">
                              <div class="card-body">
                                  <div class="form-group">
                                    <tr>
                                        <td>
                                          <button type="submit" class="btn btn-block bg-gradient-success save-btn"><i class="fas fa-save fa-fw"></i> Save</button>
                                        </td>
                                        <td>
                                          <a href="{{ route('admin.categories.index') }}" class="btn btn-block bg-gradient-secondary"><i class="fas fa-undo-alt fa-fw"></i> Cancel</a>
                                        </td>
                                        <td>
                                     </tr>
                                  </div>
                            </div>
                          </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@push('scripts')
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.parent').select2({
            theme: 'bootstrap4',
        });

        $('.status').select2({
            theme: 'bootstrap4',
            minimumResultsForSearch: Infinity,
            placeholder: "Select a status",
        });
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
<!-- Select2 -->
<script src="static/js/lib/select2/select2.full.js"></script>
@endprepend