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
                                    <h4 class="mt-0 header-title">Tài khoản User</h4>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên</th>
                                                <th>Email</th>
                                                <th>PassWord</th>
                                                <th>Số điện thoại</th>
                                             <th>Cập nhật</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php $i=1; ?>
                                                @foreach($user as $tl)
                                            <tr>
                                                <td> <?php echo $i; ?></td>
                                                <td>{{$tl->name}}</td>
                                                <td>{{$tl->email}}</td>
                                                <td>{{$tl->password}}
                                                        </td>
                                                        <td>{{$tl->sdt}}
                                                        </td>
                                                <td class="center"><i class="mdi mdi-table-edit"></i> <a href="admin/user/sua/{{$tl->id}}" style="
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