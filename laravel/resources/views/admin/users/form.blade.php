<div class="card-body">
    <div class="form-group">
          <label>Name <span class="required">*</span></label>
          <input type="text" class="form-control" name="name" value="{{ old('name', optional($user)->name) }}" placeholder="Name">
          @error('name')
              <div class="text-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="form-group">
          <label>Email <span class="required">*</span></label>
          <input type="text" class="form-control" name="email" value="{{ old('email', optional($user)->email) }}" placeholder="ex: example@example.com">
          @error('email')
              <div class="text-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone" value="{{ old('phone', optional($user)->phone) }}" placeholder="ex: 0982345678">
          @error('phone')
              <div class="text-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="form-group">
          <label>Password @if(empty($user))<span class="required">*</span>@endif<span style="font-style: italic; font-weight: lighter; "> (8 to 20 characters)</span></label>
          <input type="password" class="form-control" name="password" placeholder="Password">
          @error('password')
              <div class="text-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="form-group">
          <label>Re-password @if(empty($user))<span class="required">*</span>@endif</label>
          <input type="password" class="form-control" name="passwordAgain" placeholder="Repeat Password">
          @error('passwordAgain')
              <div class="text-danger">{{ $message }}</div>
          @enderror
    </div>
    @if(!empty($user))
    <div class="form-group">
        <label>Role <span class="required">*</span></label>
        <select class="role-input" name="role" style="width:100%;">
            @foreach ($roles as $role)
                <option value="{{ $role->id }}" {{ in_array($role->name, $userHasRole) ? 'selected' : '' }} >{{ $role->name }}</option>
            @endforeach
        </select>
        @error('role')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    @else
    <div class="form-group">
        <label>Role <span class="required">*</span></label>
        <select class="role-input" name="role" style="width:100%;">
            @foreach ($roles as $role)
                <option value="{{ $role->id }}" {{ old('role') ? 'selected' : '' }}>{{ $role->name }}</option>
            @endforeach
        </select>
        @error('role')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    @endif
  </div>
</div>
</div>
<!-- /.col (left) -->
<div class="col-md-3">
    <div class="card card-primary">
        <div class="card-body">
            <div class="form-group">
                <label>Status <span class="required">*</span></label>
                <select class="status-input" name="status" style="width:100%;">
                    @foreach ($status as $k => $v)
                        <option value="{{ $k }}">{{ $v }}</option>
                    @endforeach
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="card card-primary">
        <div class="card-body">
            <div class="form-group">
                <label>Avatar</label>
                <div class="preview-image-wrapper" id="holder">
                    <img src="{{ !empty($user->avatar) ? $user->avatar : (old('avatar') ? old('avatar') : 'static/img/img-placeholder.png') }}" alt="Preview image" class="preview_image">
                </div>
                <div class="mt-2">
                    <input id="thumbnail" class="form-control" type="hidden" name="avatar" value="{{ old('avatar', optional($user)->avatar) }}">
                    <a id="lfm-img" href="#" data-input="thumbnail" data-preview="holder">Choose image</a>
                    <a href="javascript:void(0)" id="del-img" class="float-right" style="display: none">Remove</a>
                </div>
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
                    <a href="{{ route('admin.users.index') }}" class="btn btn-block bg-gradient-secondary"><i class="fas fa-undo-alt fa-fw"></i> Cancel</a>
                    </td>
                    <td>
                </tr>
            </div>
        </div>
    </div>
</div>
