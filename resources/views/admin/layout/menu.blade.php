
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://www.facebook.com/denvaufc">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SYSTEM</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.home') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Trang chủ</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Bảng điều khiển
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#role" aria-expanded="true" aria-controls="role">--}}
{{--          <i class="fas fa-fw fa-table"></i>--}}
{{--          <span>Vai trò</span>--}}
{{--        </a>--}}
{{--        <div id="role" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
{{--          <div class="bg-white py-2 collapse-inner rounded">--}}
{{--            <h6 class="collapse-header">Lựa chọn tác vụ:</h6>--}}
{{--              <a class="collapse-item" href="{{ route('admin.role.index') }}">Danh sách</a>--}}
{{--              <a class="collapse-item" href="{{ route('admin.role.add') }}">Thêm</a>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#permission" aria-expanded="true" aria-controls="permission">--}}
{{--          <i class="fas fa-fw fa-table"></i>--}}
{{--          <span>Quyền</span>--}}
{{--        </a>--}}
{{--        <div id="permission" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
{{--          <div class="bg-white py-2 collapse-inner rounded">--}}
{{--            <h6 class="collapse-header">Lựa chọn tác vụ:</h6>--}}
{{--            <a class="collapse-item" href="{{ route('admin.permission.index') }}">Danh sách</a>--}}
{{--            <a class="collapse-item" href="{{ route('admin.permission.add') }}">Thêm</a>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </li>--}}

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#topic" aria-expanded="true" aria-controls="topic">
                <i class="fas fa-fw fa-table"></i>
                <span>Chủ đề</span>
            </a>
            <div id="topic" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Lựa chọn tác vụ:</h6>
                    <a class="collapse-item" href="{{ route('admin.topic.index') }}">Danh sách</a>
                    <a class="collapse-item" href="{{ route('admin.topic.add') }}">Thêm</a>
                </div>
            </div>
        </li>



      <!-- Heading -->
      <div class="sidebar-heading">
        Cài đặt
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#user" aria-expanded="true" aria-controls="user">
          <i class="fas fa-fw fa-user"></i>
          <span>User</span>
        </a>
        <div id="user" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Lựa chọn tác vụ:</h6>
              <a class="collapse-item" href="{{ route('admin.user.index') }}">Danh sách</a>
              <a class="collapse-item" href="{{ route('admin.user.add') }}">Thêm</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
