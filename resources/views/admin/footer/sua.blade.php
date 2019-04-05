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
                                <h4 class="mt-0 header-title">Sửa Footer</h4>
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
                                <form class="" action="admin/footer/sua/{{$footer->id}}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        
                                        
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <p>
                                            <img src="upload/footer/{{$footer->HinhLoGo}}" width="90px" alt="">
                                            </p>
                                            <input type="file" name="HinhLoGo">
                                        </div>
                                      
                                       
                                        <div class="form-group">
                                                <label>Nội Dung</label>
                                                <textarea id="NoiDung" class="form-control" rows="3" name="NoiDung">{{$footer->NoiDung}}</textarea>
                                            </div>
                                            <script>CKEDITOR.replace('NoiDung',{
                                                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
    filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
    filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
    filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
    filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'

                                            });</script>
                                      
                                         <div class="form-group"><label>Link Trang FaceBook</label>
                                                <div><input data-parsley-type="alphanum" type="text" name="LinkFb" class="form-control"
                                                        required placeholder="Nhập tên đường dẫn Page FaceBook" value="{{$footer->LinkFB}}"></div>
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

