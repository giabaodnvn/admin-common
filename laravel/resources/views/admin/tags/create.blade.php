@extends('admin.layouts.main')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Tags</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('Create Tag') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <form action="{{route('admin.tags.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                        <div class="col-md-9">
                        <div class="card card-outline card-info">
                                <div class="card-header">
                                <h3 class="card-title">Add Tag</h3>
                                </div>
                                <div class="card-body">
                                <div class="form-group">
                                        <label>Name <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
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
                                    <select class="form-control" name="status">
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
                                            <a href="{{ route('admin.tags.index') }}" class="btn btn-block bg-gradient-secondary"><i class="fas fa-undo-alt fa-fw"></i> Cancel</a>
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