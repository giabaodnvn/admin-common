<div class="card-body">
    <div class="form-group">
          <label>Title <span class="required">*</span></label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ old('title', optional($post)->title) }}">
          @error('title')
              <div class="text-danger">{{ $message }}</div>
          @enderror
    </div>

    <div class="form-group">
        <label>Slug <span class="required">*</span></label>
        <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" value="{{ old('slug', optional($post)->slug) }}">
        @error('slug')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    @if (request()->get('ref_lang') != 'en')
    <div class="form-group">
        <label>Tags</label>
        <select class="tag-input" multiple="multiple" name="tags[]" style="width: 100%;">
            @if (!empty($tags))
                @foreach($tags as $tag)
                    <option value="{{ old('tag', optional($tag)->name) }}" {{ in_array($tag->id, $postTags) ? 'selected' : '' }}>{{$tag->name}}</option>
                @endforeach 
            @endif
        </select>
    </div>
    @endif
    <div class="form-group">
        <label>Description <span class="required">*</span></label>
        <textarea class="form-control" rows="4" id="description" name="description" placeholder="Short description ...">{{ old('description', optional($post)->description) }}</textarea>
        <span class="text-muted float-right" id="character-counter"></span>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    @if (request()->get('ref_lang') != 'en')
    <div class="form-group">
        <input type="checkbox" name="featured" class="m-2" {{ old('featured', optional($post)->featured) == 'on' ? 'checked' : ''}} data-featured-switch>
        <label>Is featured?</label>
    </div>
    @endif
    <!-- /.card -->
    <div class="form-group">
        <label>Content <span class="required">*</span></label>
        <textarea class="form-control" rows="60" id="content" name="content">{{ old('content', optional($post)->content) }}</textarea>
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
                        <option value="{{ $k }}" {{ old('status', optional($post)->status) == $k ? 'selected' : ''}}>{{ $v }}</option>
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
                        <a href="{{ route('admin.posts.edit',$post->id) }}" target="_blank">Tiếng Việt</a>                        
                    @else
                        <img src="static/img/flags/us.svg" title="English" alt="English" height="14">
                        <a href="{{ route('admin.posts.edit',[$post->id,'ref_lang' => 'en']) }}" target="_blank">English</a>                        
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
                <div>
                    <label>Categories</label>
                </div>
                @if (!empty($categories))
                    @foreach($categories as $category)
                        <div class="icheck-primary">
                            <input type="checkbox" id="{{$category->id}}" name="categories[]" value="{{$category->id}}" {{ in_array($category->id, $postCategories) ? 'checked' : '' }}>
                            <label for="{{$category->id}}" class="my-checkbox">{{$category->name}}</label>
                        </div>
                        @if(count($category->subCategories))
                            @foreach($category->subCategories as $subCategory)
                                <div class="icheck-primary ml-4">
                                    <input type="checkbox" id="{{$subCategory->id}}" name="categories[]" value="{{$subCategory->id}}" {{ in_array($subCategory->id, $postCategories) ? 'checked' : '' }}>
                                    <label for="{{$subCategory->id}}" class="my-checkbox">{{$subCategory->name}}</label>
                                </div>			                      		
                            @endforeach
                        @endif	                    		
                    @endforeach                                    
                @endif
            </div>
        </div>
    </div>
    
    <div class="card card-primary">
        <div class="card-body">
            <div class="form-group">
                <label>Image <span class="required">*</span></label>
                <div class="preview-image-wrapper" id="holder">
                    <img src="{{ !empty($post->image) ? $post->image : (old('image') ? old('image') : 'static/img/img-placeholder.png') }}" alt="Preview image" class="preview_image">
                </div>
                <div class="mt-2">
                    <input id="thumbnail" class="form-control" type="hidden" name="image" value="{{ old('image', optional($post)->image) }}">
                    <a id="lfm-img" href="#" data-input="thumbnail" data-preview="holder">Choose image</a>
                    <a href="javascript:void(0)" id="del-img" class="float-right" style="display: none">Remove</a>
                </div>
                @error('image')
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
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-block bg-gradient-secondary"><i class="fas fa-undo-alt fa-fw"></i> Cancel</a>
                    </td>
                    <td>
                </tr>
            </div>
        </div>
    </div>
    <input type="hidden" name="locale" value="{{request()->ref_lang == 'en' ? 'en' : 'vn'}}">
</div>