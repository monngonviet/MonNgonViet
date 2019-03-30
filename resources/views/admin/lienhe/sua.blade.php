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
                                <h4 class="mt-0 header-title">Sửa loại tin</h4>
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
                                <form class="" action="admin/loaitin/sua/{{$loaitin->id}}" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
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
                                                    <label>Trạng thái</label>
                                                    <br/>
                                                    <label class="radio-inline">
                                                        <input name="Status" value="0"
                                                        @if($loaitin->Status==0)
                                                          {{"checked"}}
                                                        @endif
                                                         checked="" type="radio">Không
                                                    </label>
                                                    <br/>

                                                    <label class="radio-inline">
                                                        <input name="Status" value="1"
                                                        @if($loaitin->Status==1)
                                                          {{"checked"}}
                                                        @endif
                                                         type="radio">Có
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