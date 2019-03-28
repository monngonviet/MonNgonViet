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
                                <h4 class="mt-0 header-title">Sửa Tin Tức</h4>
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
                                <form class="" action="admin/tintuc/sua/{{$tintuc->id}}" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="form-group"><label>Tiêu Đề</label>
                                            <div><input data-parsley-type="alphanum" type="text" name="TieuDe" class="form-control"
                                                    required placeholder="Nhập tên tiêu đề" value="{{$tintuc->TieuDe}}"></div>
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