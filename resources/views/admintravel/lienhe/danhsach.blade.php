@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Liên Hệ
                    <small>Danh sách</small>
                    @if(session('thongbao'))
                      <div class="alert aler-sucess">
                        {{session('thongbao')}}
                    @endif
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Lời nhắn</th>
                        <th>Ngày gửi</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lienhe as $sl)
                    <tr class="odd gradeX" align="center">
                        <td>{{$sl->id}}</td>
                        <td>{{$sl->Ten}}</td>
                        <td>{{$sl->Email}}</td>
                        <td>{{$sl->SoDienThoai}}</td>
                        <td>{{$sl->LoiNhan}}</td>
                        <td>{{$sl->created_at}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/lienhe/xoa/{{$sl->id}}"> Delete</a></td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
