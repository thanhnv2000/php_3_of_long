<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('index')}}" class="brand-link">
      <img src="{!! asset('dist/img/logo.png')!!}" alt="AdminLTE Logo" class="brand-image  elevation-3"
           style="opacity: .9">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
        @if(Auth::check())
        <div class="image ">
          <img src="{{URL::to('/')}}/{{auth::user()->avatar}}" class="img-circle " alt="User Image">
        </div>
        <div class="info">
        
          <a href="#" class="d-block">Hello {{auth::user()->name}}</a>
          <br>
          <a href="{{route('logout')}}"><i class='fas fa-sign-out-alt'></i> Loguot</a>
          
        </div>
        @else
        <a href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i> Login</a>
        @endif
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
          <a href="{{route('dashboard')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bảng Điều Khiển</p>
                </a>
          </li>

          <!-- user -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link bg-danger">
              <i class="nav-icon far fa-user"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users')}}" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Danh Sách User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="fa fa-user-plus nav-icon"></i>
                  <p>Thêm User</p>
                </a>
              </li>
            </ul>
          </li>

           <!-- bảng -->
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-warning">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Danh Mục
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('categories')}}" class="nav-link">
                  <i class="fa fa-list-alt nav-icon"></i>
                  <p>Danh Sách Danh Mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('add.category')}}" class="nav-link">
                  <i class="fa fa-plus-square nav-icon"></i>
                  <p>Thêm Danh Mục</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- form -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link bg-success">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Sản Phẩm
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('index')}}" class="nav-link">
                  <i class="	fa fa-list-ul nav-icon"></i>
                  <p>Danh Sách Sản Phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('add.product')}}" class="nav-link">
                  <i class="fa fa-plus-square nav-icon"></i>
                  <p>Thêm Sản Phẩm</p>
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