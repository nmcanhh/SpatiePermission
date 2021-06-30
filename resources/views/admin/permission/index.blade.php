@extends('admin.layout.index')

@section('content')
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Danh sách quyền</h1>
            <br>
{{--           <div>--}}
{{--                @if(session('thongbao'))--}}
{{--                    <div class="alert alert-success">--}}
{{--                        {{session('thongbao')}}--}}
{{--                     </div>--}}
{{--                @endif--}}
{{--              </div>--}}

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Thông tin về quyền</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>STT</th>
                        <th>Tên</th>
                        <th>Tên hiển thị</th>
                        <th>Ngày khởi tạo</th>
                      <th class="text-center">Tác vụ</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($listPermission as $permission)
                    <tr>
                        <td scope="row">{{$loop->index + 1}}</td>
                        <td>{{$permission->name}}</td>
                        <td>{{$permission->display_name}}</td>
                        <td>{{$permission->created_at}}</td>
                        <td class="text-center">
                            <button type="button" id="mloading" class="btn btn-info" onclick="window.location.href='{{route('admin.permission.edit', ['id'=>$permission->id])}}'">
                                <i class="fas fa-pen"></i>
                            </button>
                            <button type="button" id="mloading" class="btn btn-success" onclick="window.location.href='{{route('admin.permission.delete', ['id'=>$permission->id])}}'">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
@endsection
