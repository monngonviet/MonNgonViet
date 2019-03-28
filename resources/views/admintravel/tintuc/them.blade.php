@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức
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
                                <form action="admin/tintuc/them" method="POST" enctype="multipart/form-data" ﻿>
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                    <div class="form-group">
                                        <label>Tiêu đề tin tức</label>
                                        <input class="form-control" name="TieuDe" placeholder="Nhập tiêu vào đây" />
                                    </div>
                                    <div class="form-group">
                                        <label>Thể loại</label>
                                        <select class="form-control" name="TheLoai" id="TheLoai">
                                            @foreach($theloai as $tl)
                                            <option value="{{$tl->id}}">{{$tl->Ten}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Loại Tin</label>
                                        <select class="form-control" name="LoaiTin" id="LoaiTin1">
                                            @foreach($loaitin as $lt)
                                            <option value="{{$lt->id}}">{{$lt->Ten}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tóm tắt</label>
                                        <textarea id="TomTat" class="form-control" rows="3" name="TomTat"></textarea>
                                    </div>
                                    <script>CKEDITOR.replace('TomTat');</script>
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea id="NoiDung" class="form-control" rows="3" name="NoiDung"></textarea>
                                    </div>
                                    <script>CKEDITOR.replace('NoiDung' );</script>
                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        <input type="file" name="Hinh">
                                    </div>

                                    <div class="form-group">
                                        <label>Nổi bật</label>
                                        <label class="radio-inline">
                                            <input name="NoiBat" value="1" checked="" type="radio">Có
                                        </label>
                                        <label class="radio-inline">
                                            <input name="NoiBat" value="0" type="radio">Không
                                        </label>
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
        @section('script')
        <script type="text/javascript">
            $(document).ready(function() {
                $("#TheLoai").change(function() {
                    var idTheLoai = $(this).val();
                    $.get("admin/ajax/loaitin/" + idTheLoai, function(data) {
                        $("#LoaiTin1").html(data);
                    });
                });
            });
        </script>
        @endsection
