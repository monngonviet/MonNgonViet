@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quảng cáo
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
                <form action="admin/quangcao/sua/{{$quangcao->id}}" method="POST" enctype="multipart/form-data"  >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                      <label>Tên</label>
                      <input class="form-control" value="{{$quangcao->Ten}}" name="Ten" placeholder="Nhập vào tên" />
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <p>
                        <img src="upload/quangcao/{{$quangcao->Hinh}}" width="90px" alt="">
                        </p>
                        <input type="file" name="Hinh">
                    </div>
                    <div class="form-group">
                        <label>Nội Dung</label>
                        <input class="form-control" value="{{$quangcao->NoiDung}}" name="NoiDung" placeholder="Nhập vào nội dung" />
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input class="form-control" value="{{$quangcao->link}}" name="Link" placeholder="Nhập vào link" />
                    </div>
                    <button type="submit" class="btn btn-default">Ok</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
