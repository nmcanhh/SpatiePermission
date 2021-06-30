	@extends('admin.layout.index')
	@section('content')
	<!-- Page Content -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">


			<!-- Begin Page Content -->
			<div class="container-fluid">

				<!-- Page Heading -->
				<h1 class="h3 mb-1 text-gray-800">Thêm người dùng</h1>
                <br>

				<!-- Content Row -->
				<div class="row">

					<!-- Border Left Utilities -->

					<div class="col-lg-6">

						<div class="card mb-4 py-3 border-left-primary">
							<div class="card-body">
								@if(session('loi'))
                            <div class="alert alert-danger">
                                {{session('loi')}}
                            </div>
                        @endif

                        @if($error ?? '')
                            <div class="alert alert-danger">
                                @foreach($error->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
								<div>
									<form action="" method="POST">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="form-group">
											<label><b>Tên người dùng:</b></label>
											<input class="form-control" name="name" placeholder="Nhập tên người dùng" />
										</div>
										<div class="form-group">
											<label><b>Tài khoản:</b></label>
											<input class="form-control" name="email" placeholder="Nhập email" />
										</div>
										<div class="form-group">
											<label><b>Mật khẩu:</b></label>
											<input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" />
										</div>
										<div class="form-group">
											<label><b>Nhập lại mật khẩu:</b></label>
											<input type="password" class="form-control" name="passwordAgain" placeholder="Nhập lại mật khẩu" />
										</div>
{{--                                        <div class="form-group">--}}
{{--                                            <label><b>Quyền người dùng:</b></label>--}}
{{--                                            <select multiple class="form-control" name="roles[]">--}}
{{--                                                @foreach($listRole as $role)--}}
{{--                                                    <option value="{{$role->id}}">{{$role->display_name}}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
										<div class="text-center">
											<button type="submit" id="mloading" class="btn btn-success"><i class="fas fa-check"></i></button>
											<button type="reset" class="btn btn-danger"><i class="fas fa-redo-alt"></i></button>
										</div>
										<form>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
					<!-- /.container-fluid -->

				</div>
				<!-- End of Main Content -->



			</div>

			@endsection
