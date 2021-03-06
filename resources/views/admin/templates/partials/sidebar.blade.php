    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-book"></i>
              </div>
          <div class="sidebar-brand-text mx-3">PUSTAKA</div>
        </a>

        <!-- Divider -->
        <!-- Heading -->
        <div class="sidebar-heading">
          Menu
        </div>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.dashboard')}}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
          </li>

                <!-- Nav Item - Page User Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.report.top-user')}}" >
            <i class="fas fa-fw fa-user"></i>
            <span>User</span>
            </a>
            </li>
        <!-- Nav Item - Pages Author Menu -->
        <li class="nav-item">
           <a class="nav-link collapsed" href="{{ route('admin.author.index')}}" >
            <i class="fas fa-fw fa-pen"></i>
            <span>Author</span>
           </a>
        </li>

        <!-- Nav Item - Page Books Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.book.index')}}" >
             <i class="fas fa-fw fa-book"></i>
             <span>Books</span>
            </a>
         </li>
         <hr class="sidebar-divider">
         <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.borrow.index')}}" >
             <i class="fas fa-fw fa-download"></i>
             <span>Borrowing Book</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.report.top-book')}}" >
             <i class="fas fa-fw fa-file"></i>
             <span>Library Reports</span>
            </a>
         </li>
        <!-- Divider -->


        <!-- Heading -->


        <!-- Nav Item - Pages Collapse Menu -->



      </ul>
      <!-- End of Sidebar -->
