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
                                <h4 class="mt-0 header-title">Cập nhật quảng cáo</h4>
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
                                <form class="" action="admin/quangcao/sua/{{$quangcao->id}}" method="POST" enctype="multipart/form-data"  >
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <div class="form-group">
                                        <label>Hình ảnh quảng cáo vị trí 1 (max_width=170,max_height=700)</label>
                                        <p>
                                        <img src="upload/quangcao/{{$quangcao->Hinh1}}" width="150px" alt="">
                                        </p>
                                        <input type="file" name="Hinh1">
                                    </div>
                                    <div class="form-group"><label>Đường dẫn quảng cáo 1</label>
                                        <div><input data-parsley-type="alphanum" type="text" name="link1" class="form-control"
                                                required placeholder="Nhập đường dẫn quảng cáo" value="{{$quangcao->link1}}"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh quảng cáo vị trí 2 (max_width=170,max_height=700)</label>
                                        <p>
                                        <img src="upload/quangcao/{{$quangcao->Hinh2}}" width="150px" alt="">
                                        </p>
                                        <input type="file" name="Hinh2">
                                    </div>
                                    <div class="form-group"><label>Đường dẫn quảng cáo 2</label>
                                        <div><input data-parsley-type="alphanum" type="text" name="link2" class="form-control"
                                                required placeholder="Nhập đường dẫn quảng cáo" value="{{$quangcao->link2}}"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh quảng cáo vị trí 3 (max_width=445,max_height=230)</label>
                                        <p>
                                        <img src="upload/quangcao/{{$quangcao->Hinh3}}" width="150px" alt="">
                                        </p>
                                        <input type="file" name="Hinh3">
                                    </div>
                                    <div class="form-group"><label>Đường dẫn quảng cáo 3</label>
                                        <div><input data-parsley-type="alphanum" type="text" name="link3" class="form-control"
                                                required placeholder="Nhập đường dẫn quảng cáo" value="{{$quangcao->link3}}"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh quảng cáo vị trí 4 (max_width=330,max_height=275</label>
                                        <p>
                                        <img src="upload/quangcao/{{$quangcao->Hinh4}}" width="150px" alt="">
                                        </p>
                                        <input type="file" name="Hinh4">
                                    </div>
                                    <div class="form-group"><label>Đường dẫn quảng cáo 4</label>
                                        <div><input data-parsley-type="alphanum" type="text" name="link4" class="form-control"
                                                required placeholder="Nhập đường dẫn quảng cáo" value="{{$quangcao->link4}}"></div>
                                    </div>
                                        <div class="form-group">
                                                <div><button type="submit"
                                                        class="btn btn-primary waves-effect waves-light">Cập nhật</button>
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