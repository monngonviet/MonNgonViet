@extends('admin.layout.index')
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
                                    <h4 class="mt-0 header-title">Chi tiết </h4>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Tiêu Đề</th>
                                                <th>Hình</th>
                                                <th>Tóm Tắt</th>    
                                                <th>Nội Dung</th>           
                                                <th>Ngày Tạo</th>
                                                <th>Cập Nhật</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             
                                            <tr >
                                                <td>{{$tintuc->TieuDe}}</td>
                                                <td><img src="upload/tintuc/{{$tintuc->Hinh}}" width="100px" height="70px" alt=""></td>
                                                <td style="white-space: normal;">{!!$tintuc->TomTat!!}</td>
                                                <td style="white-space: normal;">{!!$tintuc->NoiDung!!}</td>
                                                <?php
                                                $thoigian=$tintuc->NgayTao; 
                                                $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                                <td ><?php echo $dateM;?></td>  
                                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tintuc/sua/{{$tintuc->id}}">Sửa</a></td>
                                            </tr>
                                             
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
