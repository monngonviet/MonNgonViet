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
                                <h4 class="mt-0 header-title">Thêm Tin Tức</h4>
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
                                <form class="" action="admin/tintuc/them" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="form-group"><label>Tiêu Đề</label>
                                            <div><input data-parsley-type="alphanum" type="text" name="TieuDe" class="form-control"
                                                    required placeholder="Nhập tên tiêu đề"></div>
                                        </div>
                                        <div class="form-group">
                                                <label>Hình ảnh</label>
                                                <input type="file" name="Hinh">
                                            </div>
                                        <div class="form-group">
                                                <label>Thể loại</label>
                                                <select class="form-control" name="TheLoai" id="TheLoai">
                                                    @foreach($theloai as $tl)
                                                    <option value="{{$tl->id}}">{{$tl->Ten}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        <div class="form-group"><label >Loại Tin</label>
                                            <div class=""><select class="form-control" name="LoaiTin" id="LoaiTin1">
                                                    @foreach($loaitin as $lt)
                                                    <option value="{{$lt->id}}">{{$lt->Ten}}</option>
                                                    @endforeach
                                                </select></div>
                                        </div>

                                        <div class="form-group">
                                                <label>Tóm tắt</label>
                                                <textarea id="TomTat" class="form-control" rows="3" name="TomTat"></textarea>
                                            </div>
                                            <script>CKEDITOR.replace('TomTat',{
                                                 filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                                            });</script>

                                            <div class="form-group">
                                                    <label>Nội Dung</label>
                                                    <textarea id="NoiDung" class="form-control" rows="3" name="NoiDung"></textarea>
                                                </div>
                                                <script>CKEDITOR.replace('NoiDung');</script>
                                       
                                                <div class="form-group">
                                                        <label>Nổi Bật</label><br/>
                                                        <label class="radio-inline">
                                                            <input name="NoiBat" value="1" checked="" type="radio">Có
                                                        </label><br/>
                                                        <label class="radio-inline">
                                                            <input name="NoiBat" value="0" type="radio">Không
                                                        </label>
                                                    </div>

                                                    <div class="form-group">
                                                            <label>Hiển thị</label><br/>
                                                            <label class="radio-inline">
                                                                <input name="HienThi" value="1" checked="" type="radio">Có
                                                            </label><br/>
                                                            <label class="radio-inline">
                                                                <input name="HienThi" value="0" type="radio">Không
                                                            </label>
                                                        </div>

                                                    <div class="form-group"><label for="example-date-input"
                                                        class="">Ngày Tạo</label>
                                                    <div class=""><input class="form-control" type="date" name="NgayTao"
                                                            value="" id="today"></div>
                                                </div>
                                              
                                                    <div class="form-group"><label>Từ Khóa</label>
                                            <div><input data-parsley-type="alphanum" type="text" name="SEOTitle" class="form-control"
                                                    required placeholder="Nhập tên từ khóa"></div>
                                        </div>
                                        <div class="form-group">
                                                <div><button type="submit"
                                                        class="btn btn-primary waves-effect waves-light">Thêm</button>
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
<script>
    let today = new Date().toISOString().substr(0, 10);
    document.querySelector("#today").value = today;
  </script>
@endsection
