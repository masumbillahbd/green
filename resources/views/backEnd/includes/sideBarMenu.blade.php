 <div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{ url('/dashboard')}}" class="site_title"><span>Admin Panel</span></a>
    </div>

    <div class="navbar nav_title" style="border: 0;">
      <span style="font-size: 19px;padding: 10px;">{{ Auth::user()->name }}</span>
    </div>

    <div class="clearfix"></div>





    <!-- sidebar menu -->

    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">

        <ul class="nav side-menu">
          <li> <a href="{{ url('/dashboard')}}"> <i class="fa fa-home"></i> Dashboard</a> </li>
          <li> <a href="{{ url('/profile/manage')}}"> <i class="fa fa-user"></i> My Profile</a> </li>

          <!-- user info -->
          @if(auth::user()->role=='Admin')
          <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ url('/user/add' )}}">Create User</a></li>
              <li><a href="{{ url('/user/manage' )}}">Manage Users</a></li>
            </ul>
          </li>
          @endif

          <!-- category info -->
          <li><a><i class="fa fa-edit"></i> Category <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ url('/category/add' )}}">Create Category</a></li>
              <li><a href="{{ url('/category/manage' )}}">Manage Category</a></li>
            </ul>
          </li>

          <!-- sub category info -->
          <li><a><i class="fa fa-edit"></i> Sub Category <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ url('/sub_category/add' )}}">Create Sub Category</a></li>
              <li><a href="{{ url('/sub_category/manage' )}}">Manage Sub Category</a></li>
            </ul>
          </li>

          <!-- Post -->
          <li><a><i class="fa fa-bar-chart-o"></i> Post <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ url('/post/add' )}}">Create Post</a></li>
              <li><a href="{{ url('/post/manage' )}}">Manage Post</a></li>
            </ul>
          </li>


          <!-- Tag -->
          <li><a><i class="fa fa-tag"></i> Tag <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ url('/tag/manage')}}">Manage Tag</a></li>
            </ul>
          </li>

          <!-- Photo -->
          <li><a><i class="fa fa-image"></i>Photo <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ url('/photo/manage')}}">Manage Photo </a></li>
            </ul>
          </li>

          <!-- Logo -->
          <li><a><i class="fa fa-image"></i>Logo <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <!-- <li><a href="{{ url('/logo/add') }}">Create Logo</a></li> -->
              <li><a href="{{ url('/logo/manage')}}">Manage Logo </a></li>
            </ul>
          </li>

          <!-- Favicon -->
          <li><a><i class="fa fa-image"></i>Favicon <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <!-- <li><a href="{{ url('/favicon /add') }}">Create Favicon</a></li> -->
              <li><a href="{{ url('/favicon/manage')}}">Manage Favicon </a></li>
            </ul>
          </li>

          <!-- Favicon -->
          <li><a><i class="fa fa-cog"></i>Settings <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ url('/setting/manage')}}"> Manage </a></li>
            </ul>
          </li>

        </ul>
      </div>


      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>

