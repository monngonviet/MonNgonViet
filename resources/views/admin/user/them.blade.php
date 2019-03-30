@extends('admin.layout.index')
@section('content')

<div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                  
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">tai khoan</h4>
                                @if(count($errors)>0)
                                <div class="alert alert-danger">
                                  @foreach($errors->all() as $err)
                                      {{$err}}<br>
                                  @endforeach
                              @endif
                
                              @if(session('thongbao'))
                                <div class="alert alert-success">
                                  {{session('thongbao')}}
                              @endif
                                <form class="" action="admin/user/them" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="form-group"><label>Tên</label>
                                            <div><input data-parsley-type="alphanum" type="text" name="username" class="form-control"
                                                    required placeholder="Nhập tên thể loại"></div>
                                        </div>
                                        <div class="form-group"><label>Email</label>
                                            <div><input data-parsley-type="alphanum" type="email" name="email" class="form-control"
                                                    required placeholder="Nhập tên thể loại"></div>
                                        </div>
                                        <div class="form-group"><label>Số điện thoại</label>
                                            <div><input data-parsley-type="alphanum" type="text" name="sdt" class="form-control"
                                                    required placeholder="Nhập tên thể loại"></div>
                                        </div>
                                        <div class="form-group"><label>Mật khẩu</label>
                                            <div><input data-parsley-type="alphanum" type="text" name="matkhau" class="form-control"
                                                    required placeholder="Nhập tên thể loại"></div>
                                        </div>
                                        
                                        <div class="form-group">
                                                <div><button type="submit"
                                                        class="btn btn-primary waves-effect waves-light">Thêm</button>
                                                    <button type="reset"
                                                        class="btn btn-secondary waves-effect m-l-5">Hủy</button></div>
                                            </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- end col -->
                   <!-- end col -->
                </div><!-- end row -->
            </div><!-- container-fluid -->
        </div><!-- content -->
        
    </div>
@endsection