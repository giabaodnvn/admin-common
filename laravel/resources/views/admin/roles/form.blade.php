<div class="card-body">
    <div class="form-group">
          <label>Name <span class="required">*</span></label>
          <input type="text" class="form-control" name="name" value="{{ old('name', optional($role)->name) }}" placeholder="Role name">
          @error('name')
              <div class="text-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" rows="4" id="description" name="description" placeholder="ex: Manager role">{{ old('description', optional($role)->description) }}</textarea>
          <span class="text-muted float-right" id="character-counter"></span>
          @error('description')
              <div class="text-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="form-group">
          <label>Guard Name <span class="required">*</span></label>
          <input type="text" class="form-control" name="guard_name" value="{{ old('guard_name', optional($role)->guard_name) }}" placeholder="ex: web">
          @error('guard_name')
              <div class="text-danger">{{ $message }}</div>
          @enderror
    </div>
  </div>
</div>
<!-- Permission Flags -->
<div class="card">
  <div class="card-body">
    <div class="row">
        <div class="col-sm-12">
            <label>Permission Flags</label>
        </div>
        @foreach($permissions as $permission)
          <div class="col-sm-3">
            <div class="form-group clearfix">
                  <div class="icheck-primary">
                    <input type="checkbox" id="{{ $permission->id }}" value="{{ $permission->id}}" name="permissions[]" {{ in_array($permission->id, $roleHasPermission) ? 'checked' : '' }}>
                    <label class="my-checkbox" for="{{$permission->id}}">{{ $permission->name }}</label>
                  </div>
            </div>
          </div>
          @endforeach
    </div>
  </div>	           		 	
</div>
<!-- /Permission Flags -->
</div>
<!-- /.col (left) -->
<div class="col-md-3">
<div class="card card-primary">
  <div class="card-body">
      <div class="form-group">
        <tr>
            <td>
              <button type="submit" class="btn btn-block bg-gradient-success save-btn"><i class="fas fa-save fa-fw"></i> Save</button>
            </td>
            <td>
              <a href="{{ route('admin.roles.index') }}" class="btn btn-block bg-gradient-secondary"><i class="fas fa-undo-alt fa-fw"></i> Cancel</a>
            </td>
            <td>
         </tr>
      </div>
</div>
</div>
</div>