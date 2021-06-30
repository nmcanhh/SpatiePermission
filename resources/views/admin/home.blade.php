@extends('admin.layout.index')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Trang chủ</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Số lượng người đăng ký -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body" onclick="window.location.href='{{route('admin.user.index')}}'">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Người dùng</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$user_count}} người</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-plus fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body" onclick="window.location.href='{{route('admin.topic.index')}}'">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Chủ đề</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$topic_count}} chủ đề</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-user-tag fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

{{--    <!-- Earnings (Monthly) Card Example -->--}}
{{--    <div class="col-xl-3 col-md-6 mb-4">--}}
{{--      <div class="card border-left-success shadow h-100 py-2">--}}
{{--          <div class="card-body" onclick="window.location.href='{{route('admin.role.index')}}'">--}}
{{--          <div class="row no-gutters align-items-center">--}}
{{--            <div class="col mr-2">--}}
{{--                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Vai trò</div>--}}
{{--                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$role_count}} vai trò</div>--}}
{{--            </div>--}}
{{--            <div class="col-auto">--}}
{{--              <i class="fas fa-user-tag fa-2x text-gray-300"></i>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}

{{--      <!-- Earnings (Monthly) Card Example -->--}}
{{--      <div class="col-xl-3 col-md-6 mb-4">--}}
{{--          <div class="card border-left-warning shadow h-100 py-2">--}}
{{--              <div class="card-body" onclick="window.location.href='{{route('admin.permission.index')}}'">--}}
{{--                  <div class="row no-gutters align-items-center">--}}
{{--                      <div class="col mr-2">--}}
{{--                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Quyền</div>--}}
{{--                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$permission_count}} quyền</div>--}}
{{--                      </div>--}}
{{--                      <div class="col-auto">--}}
{{--                          <i class="fas fa-key fa-2x text-gray-300"></i>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      </div>--}}

    </div>
</div>

@endsection
