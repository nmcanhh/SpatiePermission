@extends('admin.layout.index')

@section('content')
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Danh sách người dùng</h1>
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
              <h6 class="m-0 font-weight-bold text-primary">Thông tin người dùng</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>STT</th>
                      <th>Tên người dùng</th>
                      <th>Email</th>
                      <th>Ngày khởi tạo</th>
                      <th class="text-center">Tác vụ</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($listUser as $user)
                    <tr>
                        <td scope="row">{{$loop->index + 1}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                      <td>{{$user->created_at}}</td>
                        <td class="text-center">
                            <button type="button" id="mloading" class="btn btn-info" onclick="window.location.href='{{route('admin.user.edit', ['id'=>$user->id])}}'">
                                <i class="fas fa-pen"></i>
                            </button>
                            <button type="button" id="mloading" class="btn btn-success" onclick="window.location.href='{{route('admin.user.delete', ['id'=>$user->id])}}'">
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
