<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('admin.dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="{{route('slider.index')}}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
               Manage Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('slider.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider All</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('slider.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider create</p>
                </a>
              </li></ul>
              <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Manage Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category All</p>
                </a>
              </li>
              </ul>
             
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('category.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category create</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('feature.index')}}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
              Manage Feature
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('feature.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Featured Places</p>
                </a>
              </li>
              </ul>
             
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('feature.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create new</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('blog.index')}}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
              Manage blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('blog.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>blog </p>
                </a>
              </li>
              </ul>
             
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('blog.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create new</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('video.index')}}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
              Manage video
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('video.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Featured video</p>
                </a>
              </li>
              </ul>
             
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('video.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create video</p>
                </a>
              </li>
              </ul>
          </li>
         
          <li class="nav-item">
            <a href="{{route('destination.index')}}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
               Dream Destination
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('destination.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All</p>
                </a>
              </li>
              </ul>
             
              
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
              @csrf
              </form>
              </li>
             
            </ul>
          </li>
        
           
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>