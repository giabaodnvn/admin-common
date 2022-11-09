<div class="card-body">
    <div class="form-group">
          <label>Name <span class="required">*</span></label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name', optional($review)->name) }}">
          @error('name')
              <div class="text-danger">{{ $message }}</div>
          @enderror
    </div>

    <div class="form-group">
        <label>Slug <span class="required">*</span></label>
        <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" value="{{ old('slug', optional($review)->slug) }}">
        @error('slug')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    @if (request()->get('ref_lang') != 'en')
    <div class="form-group">
        <label>Referral Link <span class="required">*</span></label>
        <input type="text" class="form-control" name="link" placeholder="Referral Link" value="{{ old('link', optional($review)->link) }}">
        @error('link')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    @endif

    <div class="form-group">
        <label>Description <span class="required">*</span></label>
        <textarea class="form-control" rows="4" id="description" name="description" placeholder="Short description ...">{{ old('description', optional($review)->description) }}</textarea>
        <span class="text-muted float-right" id="character-counter"></span>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- /.card -->
    <div class="form-group">
        <label>Content <span class="required">*</span></label>
        <textarea class="form-control" rows="60" id="content" name="content">{{ old('content', optional($review)->content) }}</textarea>
        @error('content')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
  </div>
</div>
</div>
<!-- /.col (left) -->
<div class="col-md-3">
    @if (request()->get('ref_lang') != 'en')
    <div class="card card-primary">
        <div class="card-body">
            <div class="form-group">
                <label>Status <span class="required">*</span></label>
                <select class="form-control status-input" name="status" style="width: 100%;">
                    @foreach ($status as $k =>$v)
                        <option value="{{ $k }}" {{ old('status', optional($review)->status) == $k ? 'selected' : ''}}>{{ $v }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    @endif

    @if ($type == 'edit')
    <div class="card card-primary">
        <div class="card-body">
            <div class="form-group">
                <label>Languages</label>
                <div>
                    @if (request()->has('ref_lang') && request()->ref_lang == 'en')
                        <img src="static/img/flags/vn.svg" title="Tiếng Việt" alt="Tiếng Việt" height="14">
                        <a href="{{ route('admin.reviews.edit',$review->id) }}" target="_blank">Tiếng Việt</a>                        
                    @else
                        <img src="static/img/flags/us.svg" title="English" alt="English" height="14">
                        <a href="{{ route('admin.reviews.edit',[$review->id,'ref_lang' => 'en']) }}" target="_blank">English</a>                        
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif

    @if (request()->get('ref_lang') != 'en')
    <div class="card card-primary">
        <div class="card-body">
            <div class="form-group">
                <label>Rate <span class="required">*</span></label>
                <select class="form-control rate-input" name="rate" style="width: 100%;">
                    @foreach ($rates as $k =>$v)
                        <option value="{{ $v }}" {{ old('rate', optional($review)->rate) == $v ? 'selected' : ''}}>{{ $v }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    
    <div class="card card-primary">
        <div class="card-body">
            <div class="form-group">
                <label>Logo <span class="required">*</span></label>
                <div class="preview-image-wrapper" id="holder">
                    <img src="{{ !empty($review->logo) ? $review->logo : (old('logo') ? old('logo') : 'static/img/img-placeholder.png') }}" alt="Preview image" class="preview_image">
                </div>
                <div class="mt-2">
                    <input id="thumbnail" class="form-control" type="hidden" name="logo" value="{{ old('logo', optional($review)->logo) }}">
                    <a id="lfm-img" href="#" data-input="thumbnail" data-preview="holder">Choose image</a>
                    <a href="javascript:void(0)" id="del-img" class="float-right" style="display: none">Remove</a>
                </div>
                @error('logo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    @endif
    <div class="card card-primary">
        <div class="card-body">
            <div class="form-group">
                <tr>
                    <td>
                    <button type="submit" class="btn btn-block bg-gradient-success save-btn"><i class="fas fa-save fa-fw"></i> Save</button>
                    </td>
                    <td>
                    <a href="{{ route('admin.reviews.index') }}" class="btn btn-block bg-gradient-secondary"><i class="fas fa-undo-alt fa-fw"></i> Cancel</a>
                    </td>
                    <td>
                </tr>
            </div>
        </div>
    </div>
    <input type="hidden" name="locale" value="{{request()->ref_lang == 'en' ? 'en' : 'vn'}}">
</div>