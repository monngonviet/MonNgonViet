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
                                    <h4 class="mt-0 header-title">Liên hệ</h4>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên người liên hệ</th>
                                                <th>Lời nhắn</th>
                                                <th>Email</th>
                                                <th>Số điện thoại</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php $i=1; ?>
                                            @foreach($lienhe as $tl)
                                            <tr>
                                                <td><?php echo $i ?></td>
                                            <td>{{$tl->Ten}}</td>
                                            <td>{{$tl->LoiNhan}}</td>
                                            <td>{{$tl->Email}}</td>
                                            <td>{{$tl->SoDienThoai}}</td>
                                            
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