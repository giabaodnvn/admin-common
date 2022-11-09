<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        @can('dashboard')
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}"><i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard</p></a>
        </li>            
        @endcan
        @can('users.index')
        <li class="nav-item {{Request::is('admin/users*') || Request::is('admin/roles*') || Request::is('admin/permissions*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-user-shield"></i><p>
                Administration
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link {{ Request::is('admin/users*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                    <p>User</p>
                    </a>
                </li>
                @can('roles.index')
                <li class="nav-item">
                    <a href="{{ route('admin.roles.index') }}" class="nav-link {{ Request::is('admin/roles*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-shield-alt"></i>
                    <p>Roles & Permissions</p>
                    </a>
                </li>
                @endcan
                {{-- <li class="nav-item">
                    <a href="{{ route('admin.permissions.index') }}" class="nav-link {{ Request::is('admin/permissions*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-fingerprint"></i>
                    <p>Permission</p>
                    </a>
                </li> --}}
            </ul>
        </li>
        @endcan
        @can('posts.index')
        <li class="nav-item {{Request::is('admin/posts*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
            <p>
                Posts
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.posts.create') }}" class="nav-link {{Request::is('admin/posts/create') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Post</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.posts.index') }}" class="nav-link {{Request::is('admin/posts') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>List Post</p>
                </a>
            </li>
            </ul>
        </li>
        @endcan
        @can('categories.index')
        <li class="nav-item {{Request::is('admin/categories*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th-list"></i>
            <p>
                Categories
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.categories.create')}}" class="nav-link {{ Request::is('admin/categories/create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Category</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.categories.index')}}" class="nav-link {{ Request::is('admin/categories') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List Category</p>
                </a>
            </li>
            </ul>
        </li>
        @endcan
        @can('tags.index')
        <li class="nav-item {{Request::is('admin/tags*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tags"></i>
            <p>
                Tags
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.tags.create')}}" class="nav-link {{ Request::is('admin/tags/create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Tag</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.tags.index')}}" class="nav-link {{ Request::is('admin/tags') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List Tag</p>
                </a>
            </li>
            </ul>
        </li>
        @endcan

        <li class="nav-item {{Request::is('admin/reviews*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-star-half-alt"></i>
            <p>
                Reviews
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.reviews.create')}}" class="nav-link {{ Request::is('admin/reviews/create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Review</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.reviews.index')}}" class="nav-link {{ Request::is('admin/reviews') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List Review</p>
                </a>
            </li>
            </ul>
        </li>
  
        @can('media.index')
        <li class="nav-item {{Request::is('admin/media*') ? 'menu-open' : ''}}">
            <a href="{{ route('unisharp.lfm.show', ['type' => 'image']) }}" class="nav-link">
                <i class="nav-icon fas fa-images"></i>
            <p>
                Media
            </p>
            </a>
        </li>
        @endcan
        <li class="nav-header">OTHER</li>
        <li class="nav-item">
            <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
                Logout
            </p>
            </a>
            <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display:none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>