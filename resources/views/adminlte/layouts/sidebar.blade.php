<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link navbar-light">
    <img alt="Laravel 7 Auth" class="brand-image"
      src="https://raw.githubusercontent.com/adiyansahcode/adiyansahcode/main/assets/laravel-icon-new.svg"
      style="filter: invert(36%) sepia(80%) saturate(4145%) hue-rotate(199deg) brightness(101%) contrast(106%);">
    <span class="brand-text font-weight-light">Laravel 7 Auth</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">User</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @if (Route::has('home'))
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link">
            <i class="nav-icon fa-solid fa-house"></i>
            <p> Home </p>
          </a>
        </li>
        @endif

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-users"></i>
            <p>
              Users
              <i class="right fa-solid fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-user"></i>
                <p>User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-briefcase"></i>
                <p>Role</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
