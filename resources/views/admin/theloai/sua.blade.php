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
                                <h4 class="mt-0 header-title">Sửa thể loại</h4>
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
                                <form class="" action="admin/theloai/sua/{{$theloai->id}}" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="form-group"><label>Tên</label>
                                            <div><input data-parsley-type="alphanum" type="text" value="{{$theloai->Ten}}" name="Ten" class="form-control"
                                                    required placeholder="Nhập tên thể loại"></div>
                                        </div>
                                        <div class="form-group">
                                                <label>Trạng thái</label>
                                                <br/>
                                                <label class="radio-inline">
                                                    <input name="Status" value="0"
                                                    @if($theloai->Status==0)
                                                      {{"checked"}}
                                                    @endif
                                                     checked="" type="radio">Không
                                                </label>
                                                <br/>

                                                <label class="radio-inline">
                                                    <input name="Status" value="1"
                                                    @if($theloai->Status==1)
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