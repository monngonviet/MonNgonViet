@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Tức
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
              @if(count($errors)>0)
                @foreach($errors ->all as $err)
                  {{$err}}<br>
                @endforeach
              @endif

              @if(session('thongbao'))
                <div class="alert aler-sucess">
                  {{session('thongbao')}}
              @endif
                <form action="admin/tintuc/sua/{{$tintuc->id}}" method="POST" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Tiêu Đề</label>
                        <input class="form-control" value="{{$tintuc->TieuDe}}" name="TieuDe" placeholder="Nhập Tiêu Đề " />
                    </div>
                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="TheLoai" id="TheLoai">
                            @foreach($theloai as $tl)
                            <option
                            @if($tintuc->loaitin->theloai->id==$tl->id)
                              {{"selected"}}
                            @endif
                             value="{{$tl->id}}">{{$tl->Ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Loại Tin</label>
                        <select class="form-control" name="LoaiTin" id="LoaiTin">
                            @foreach($loaitin as $tl)
                            <option
                            @if($tintuc->loaitin->id==$tl->id)
                              {{"selected"}}
                            @endif
                             value="{{$tl->id}}">{{$tl->Ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <textarea id="TomTat" class="form-control" rows="3" name="TomTat">
                        {{$tintuc->TomTat}}</textarea>
                    </div>
                    <script>CKEDITOR.replace('TomTat' );</script>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="NoiDung" class="form-control" rows="3" name="NoiDung">
                        {{$tintuc->NoiDung}}</textarea>
                    </div>
                    <script>CKEDITOR.replace('NoiDung' );</script>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <p>
                        <img src="upload/tintuc/{{$tintuc->Hinh}}" width="90px" alt="">
                        </p>
                        <input type="file" name="Hinh">
                    </div>

                    <div class="form-group">
                        <label>Nổi bật</label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="0"
                            @if($tintuc->NoiBat==0)
                              {{"checked"}}
                            @endif
                             checked="" type="radio">Không
                        </label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="1"
                            @if($tintuc->NoiBat==1)
                              {{"checked"}}
                            @endif
                             type="radio">Có
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">OK</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách Comment
                    <small>Danh sách</small>
                    @if(session('thongbao'))
                    <div class="alert aler-sucess">
                        {{session('thongbao')}}
                        @endif
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Nội dung</th>
                        <th>Ngày đăng</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tintuc->comment as $tt)
                    <tr class="odd gradeX" align="center">
                        <td>{{$tt->id}}</td>
                        <td>{{$tt->user->name}}</td>
                        <td>{{$tt->NoiDung}}</td>
                        <td>{{$tt->create_at}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/tintuc/xoa/{{$tt->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tintuc/sua/{{$tt->id}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
