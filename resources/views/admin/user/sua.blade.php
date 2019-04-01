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
                                <h4 class="mt-0 header-title">Sửa Tài Khoản</h4>
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
                                <form class="" action="admin/user/sua/{{$user->id}}" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control" name="username" value="{{$user->name}}"  />
                                    </div>
                                    <div class="form-group">
                                      <input type="checkbox" name="changePassword" id="changePassword"value="">
                                        <label>Đổi Password</label>
                                        <input type="password" class="form-control
                                        password" name="matkhau" placeholder="Vui lòng nhập khẩu" />
                                    </div>
                                    <div class="form-group">
                                        <label>Nhập lại mật khẩu</label>
                                        <input type="password" class="form-control
                                        password" name="nhaplaimatkhau" placeholder="Vui lòng nhập lại mật khẩu"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" value="{{$user->email}}"  class="form-control" name="email" placeholder="Vui lòng nhập Email" />
                                    </div>
                                    <div class="form-group" style="
                                    display: none;
                                  " >
                                        <label>Quyền</label><br/>
                                        <label class="radio-inline">
                                            <input
                                            @if($user->quyen==0)
                                              {{"checked"}}
                                            @endif
                                             name="quyen" value="0" checked="" type="radio">Người dùng
                                        </label>
                                        <label class="radio-inline">
                                            <input
                                            @if($user->quyen==1)
                                              {{"checked"}}
                                            @endif
                                             name="quyen" value="1" type="radio">Admin
                                        </label>
                                    </div>
                                        <div class="form-group">
                                                <div><button type="submit"
                                                        class="btn btn-primary waves-effect waves-light">Sửa</button>
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

{{-- @section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $("#changePassword").change(function(){
        if($(this).is(":checked"))
        {
          $(".password").removeAttr('disabled');
        }
        else {
          $(".password").attr('disabled','');
        }
      });
    });
  </script>
@endsection --}}
