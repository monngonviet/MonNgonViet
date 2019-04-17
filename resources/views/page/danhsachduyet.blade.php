@extends('admin.layout.index1')
@section('content')
    <!-- Begin page -->
 
        <!-- Top Bar Start -->
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Tin Tức</h4>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tiêu Đề</th>
                                                <th>Hình</th>
                                                <th>Ngày Đăng</th>
                                                <th>Loại Tin</th>
                                                <th>Thể Loại</th>
                                                <th>Trạng thái</th> 
                                                <th>Ngày cập nhật</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php $i=1; ?>
                                                @foreach($tintuc as $tt)
                                            <tr>
                                                <td> <?php echo $i; ?></td>
                                                <td>{{$tt->TieuDe}}</td>
                                                <td><img src="upload/tintuc/{{$tt->Hinh}}" width="100px" height="70px" alt=""></td>
                                            
                                                <?php
                                                $thoigian=$tt->NgayTao; 
                                                $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                                <td ><?php echo $dateM;?></td>  
                                                 
                                                <td>{{$tt->loaitin->Ten}}</td>
                                              
                                                <td>{{$tt->loaitin->theloai->Ten}}</td>
                                                <td>@if($tt->HienThi==0)
                                                    {{"Ẩn"}}
                                                    @else
                                                    {{"Hiển thị"}}
                                                    @endif
                                                    </td>
                                                <?php
                                                $thoigian=$tt->NgaySua; 
                                                $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                                <td ><?php echo $dateM;?></td>    
                                                <?php $i++; ?>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                  
                </div><!-- container-fluid -->
            </div><!-- content -->
        </div>
            @endsection
            <script type="text/javascript">
                function confirmAction() {
                     return confirm("Bạn có chắc muốn xóa không?")
                   }
              </script>
  