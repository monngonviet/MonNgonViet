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
                                    <h4 class="mt-0 header-title">Footer</h4>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Hình Banner LoGo</th>
                                                <th>Đường dẫn</th>
                                                <th>Số điện thoại</th>
                                                <th>Số Fax</th>
                                                <th>Email</th>
                                                <th>Đại chỉ</th>

                                                <th>Thao tác</th>
                                            </tr> 
                                        </thead>
                                        <tbody>
                                                <?php $i=1; ?>
                                                @foreach($header as $tt)
                                                <tr>
                                               <td><?php echo $i?></td>
                                               <td><img src="upload/footer/{{$tt->Hinh}}" alt="" width="150px"></td>
                                               <td>{{$tt->Link}}</td>
                                               <td>{{$tt->sdt}}</td>
                                               <td>{{$tt->Fax}}</td>
                                               <td>{{$tt->email}}</td>
                                               <td  style="white-space: normal;">{{$tt->DiaChi}}</td>
                                               <td class="center"><i class="mdi mdi-table-edit"></i> <a href="admin/header/sua/{{$tt->id}}" style="
                                                color: blue;">Sửa</a></td>
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
                     return confirm("Bạn có chắc là muốn xóa không?")
                   }
              </script>
  