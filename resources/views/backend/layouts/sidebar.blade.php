<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
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
          <!--<li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>-->
          <!--<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>-->


@if (Auth::user()->role == 1 )
        <!-- 
          <li class="nav-item">
            <a href="{{URL::to('/list_bookcategory')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                List Book Category-->
                <!-- <span class="right badge badge-danger">New</span> -->
            <!--  </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/add_bookcategory')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Book Category -->
                <!-- <span class="right badge badge-danger">New</span> -->
             <!--  </p>
            </a>
          </li>-->
          <!--
          <li class="nav-item">
            <a href="{{URL::to('/list_triplep6')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                List triplep6
                <!-- <span class="right badge badge-danger">New</span> -->
             <!-- </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/list_triplep24')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                List triplep24
                <!-- <span class="right badge badge-danger">New</span> -->
             <!-- </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/list_dspm')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                List DSPM
                <!-- <span class="right badge badge-danger">New</span> -->
             <!-- </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/list_eq15')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                List EQ15
                <!-- <span class="right badge badge-danger">New</span> -->
             <!-- </p>
            </a>
          </li>-->
          <!--
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                แบบประเมิน
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="from_DSPM.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>แบบประเมิน DSPM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="from_Triple_P24.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>แบบประเมิน 24 คำถาม</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="from_eq15.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>แบบประเมิน 15 คำถาม</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="from_Triple_P6.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>แบบประเมิน 6 คำถาม</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="{{URL::to('/home')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                ตารางแบบประเมิน
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{URL::to('/list_dspm')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ตารางแบบประเมิน DSPM</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{URL::to('/list_triplep24')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ตารางแบบประเมิน 24 คำถาม</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{URL::to('/list_eq15')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ตารางแบบประเมิน 15 คำถาม</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{URL::to('/list_triplep6')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ตารางแบบประเมิน 6 คำถาม</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item">
            <a href="{{URL::to('/list_child')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                List child
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/list_hospital')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                List hospital
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{URL::to('/list_school')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                List school
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{URL::to('/user_list')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User List
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        
@endif


@if (Auth::user()->role == 2 )

          <li class="nav-item">
            <a href="{{URL::to('/home')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                ตารางแบบประเมิน
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{URL::to('/list_dspm')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ตารางแบบประเมิน DSPM</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{URL::to('/list_triplep24')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ตารางแบบประเมิน 24 คำถาม</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{URL::to('/list_eq15')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ตารางแบบประเมิน 15 คำถาม</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{URL::to('/list_triplep6')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ตารางแบบประเมิน 6 คำถาม</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item">
            <a href="{{URL::to('/list_child')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                List child
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

     
        
@endif



@if (Auth::user()->role == 3 )

          <li class="nav-item">
            <a href="{{URL::to('/home')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          
        
@endif


<li class="nav-item">
<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
<i class="nav-icon fas fa-th"></i> Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
</li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>