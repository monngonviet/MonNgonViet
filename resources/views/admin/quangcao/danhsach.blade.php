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
                                    <h4 class="mt-0 header-title">Thể loại</h4>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Hình 1</th>
                                                <th>Hình 2</th>
                                                <th>Hình 3</th>
                                                <th>Hình 4</th>
                                                <th>Thao tác</th>
                                                <th>Đường dẫn hình 1</th>
                                                <th>Đường dẫn hình 2</th>
                                                <th>Đường dẫn hình 3</th>
                                                <th>Đường dẫn hình 4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($quangcao as $tt)
                                            <tr>
                                               <td><img src="upload/quangcao/{{$tt->Hinh1}}" width="185px" height="150px" alt=""></td>
                                               <td><img src="upload/quangcao/{{$tt->Hinh2}}" width="185px" height="150px" alt=""></td>
                                               <td><img src="upload/quangcao/{{$tt->Hinh3}}"width="185px" height="150px" alt=""></td>
                                               <td><img src="upload/quangcao/{{$tt->Hinh4}}" width="185px" height="150px"alt=""></td>
                                               <td class="center"><i class="mdi mdi-table-edit"></i> <a href="admin/quangcao/sua/{{$tt->id}}" style="
                                                color: blue;">Sửa </a></td>
                                               <td>{{$tt->link1}}</td>
                                               <td>{{$tt->link2}}</td>
                                               <td>{{$tt->link3}}</td>
                                               <td>{{$tt->link4}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <!-- end row --> 
                </div><!-- container-fluid -->
            </div><!-- content -->
        </div>
            @endsection
            <script type="text/javascript">
                function confirmAction() {
                     return confirm("Bạn có chắc là muốn xóa không?")
                   }
              </script>
  