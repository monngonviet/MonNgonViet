@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại Tin
                    <small>Sửa {{$loaitin->Ten}}</small>
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
                <form action="admin/loaitin/sua/{{$loaitin->id}}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên Loại Tin</label>
                        <input class="form-control" value="{{$loaitin->Ten}}" name="Ten" placeholder="Nhập tên tại đây" />
                    </div>

                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="TheLoai">
                            @foreach($theloai as $tl)
                            <option
                            @if($loaitin->idTheLoai == $tl->id)
                              {{"selected"}}
                            @endif
                            value="{{$tl->id}}">{{$tl->Ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <p>
                        <img src="upload/hinhloaitin/{{$loaitin->Hinh}}" width="90px" alt="">
                        </p>
                        <input type="file" name="Hinh">
                    </div>
                    <button type="submit" class="btn btn-default">OK</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
