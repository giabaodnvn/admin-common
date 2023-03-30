<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="#" class="brand-link logo-switch">
    <img src="{{ '/assets/img/logo-xs.png' }}" alt="AdminLTE Docs Logo Small" class="brand-image-xl logo-xs">
    <img src="{{ '/assets/img/logo-xl.png'  }}" alt="AdminLTE Docs Logo Large" class="brand-image-xs logo-xl" style="left: 12px">
  </a>
  <div class="sidebar">
    <div class="form-inline mt-2">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">
          <li class="nav-item">
              <a class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Khoa/Phòng<i class="fas fa-angle-left right"></i></p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                      <a href="{{ route('group.list') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Danh sách</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('group.create') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Tạo mới</p>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="nav-item">
              <a href="" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Nhân viên<i class="fas fa-angle-left right"></i></p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                      <a href="{{ route('employee.list') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Danh sách</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('employee.create') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Thêm mới</p>
                      </a>
                  </li>
              </ul>
          </li>

          <li class="nav-item">
              <a href="" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Ngày nghỉ<i class="fas fa-angle-left right"></i></p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                      <a href="{{ route('dayoff.list') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Danh sách</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Thêm mới</p>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="nav-item">
              <a href="{{ route('admin-logout') }}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Đăng xuất</p>
              </a>
          </li>
      </ul>
    </nav>
  </div>
</aside>
