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
                                <h4 class="mt-0 header-title">Sửa Video</h4>
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
                                <form class="" action="admin/video/sua/{{$video->id}}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="form-group"><label>Tiêu Đề</label>
                                            <div><input data-parsley-type="alphanum" type="text" name="TieuDe" id="TieuDe" class="form-control"
                                                    required placeholder="Nhập tên tiêu đề" value="{{$video->TieuDe}}"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Video</label>
                                            <p>
                                            <img src="upload/video/{{$video->Video}}" width="200px" alt="">
                                            </p>
                                            <input type="file" name="Video">
                                        </div>
                                        <div class="form-group"><label>Link Youtube</label>
                                            <div><input data-parsley-type="alphanum" type="text" value="{{$video->LinkYoutube}}" name="LinkYoutube" class="form-control"
                                             placeholder="Nhập tên từ khóa"></div>
                                </div>
                                   
                                        <div class="form-group">
                                            <label>Tóm tắt</label>
                                            <textarea id="TomTat"  class="form-control" rows="3" name="TomTat">{{$video->TomTat}}</textarea>
                                        </div>
                                        <script>CKEDITOR.replace('TomTat');</script>

                                        <div class="form-group">
                                                <label>Nội Dung</label>
                                                <textarea id="NoiDung" class="form-control" rows="3" name="NoiDung">{{$video->NoiDung}}</textarea>
                                            </div>
                                            <script>CKEDITOR.replace('NoiDung',{
                                                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
    filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
    filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
    filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
    filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                                            });</script>
                                   
                                          

                                                <div class="form-group">
                                                <label>Trạng Thái</label><br/>
                                                 <label class="radio-inline">
                                                      <input name="HienThi" value="1"
                                                        @if($video->HienThi==1)
                                                      {{"checked"}}
                                                     @endif
                                                      checked="" type="radio">Có
                                                     </label><br/>
                                                     <label class="radio-inline">
                                               <input name="HienThi" value="0"
                                                        @if($video->HienThi==0)
                                                 {{"checked"}}
                                                  @endif
                                                   type="radio">Không
                                                </label>
                                                        </div>

                                                        <div class="form-group">
                        <label>Nổi bật</label><br/>
                        <label class="radio-inline">
                            <input name="NoiBat" value="0"
                            @if($video->NoiBat==0)
                              {{"checked"}}
                            @endif
                             checked="" type="radio">Không
                        </label><br/>
                        <label class="radio-inline">
                            <input name="NoiBat" value="1"
                            @if($video->NoiBat==1)
                              {{"checked"}}
                            @endif
                             type="radio">Có
                        </label>
                    </div>                                    
                                                <div class="form-group"><label>Từ Khóa</label>
                                                <div><input data-parsley-type="alphanum" type="text" value="{{$video->SEOTitle}}" name="SEOTitle" id="SEOTitle"class="form-control"
                                                required placeholder="Nhập tên từ khóa"></div>
                                    </div>

                                    <div class="form-group"><label for="example-date-input"
                                                        class="">Ngày Cập Nhật</label>
                                                    <div class=""><input class="form-control" type="date" name="NgaySua"
                                                            value="" id="today"></div>
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
    <script>
    let today = new Date().toISOString().substr(0, 10);
    document.querySelector("#today").value = today;
  </script>
  <script type="text/javascript">
        $(function () {
            $("#TieuDe").keyup(function () {
                var text = $.trim($(this).val().toLowerCase());
            $('#SEOTitle').val(text);
            }).keyup();
        });
    </script>
<script>
@endsection
