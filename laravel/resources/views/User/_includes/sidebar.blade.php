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
            <a href="{{ route('set-timekeep-user') }}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Chấm Công</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user-logout') }}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Đăng xuất</p>
            </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>