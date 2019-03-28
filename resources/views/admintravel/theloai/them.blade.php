@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể loại
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
              @if(count($errors)>0)
                <div class="alert aler-danger">
                  @foreach($errors->all() as $err)
                      {{$err}}<br>
                  @endforeach
              @endif

              @if(session('thongbao'))
                <div class="alert aler-sucess">
                  {{session('thongbao')}}
              @endif
                <form action="admin/theloai/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>Tên thể loại</label>
                        <input class="form-control" name="Ten" placeholder="Nhập tên thể loại ở đây" />
                    </div>
                      
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
