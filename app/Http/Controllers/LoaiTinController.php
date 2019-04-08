<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\LoaiTin;
use App\TheLoai;
use Illuminate\Routing\Controller;


class LoaiTinController extends Controller
{
    //
    // function __construct(){
    //   $quangcao=QuangCao::all();
    //   view()->share('quangcao',$quangcao);
    // }
    public function getDanhSach()
    {
      $loaitin = LoaiTin::all();
      return view ('admin.loaitin.danhsach',['loaitin'=> $loaitin]
    );
    }

    public function getThem()
    {
        $theloai = TheLoai::all();
      return view('admin.loaitin.them',['theloai'=>$theloai]);
    }
    public function postThem(Request $request)
    {
      $validatedData = $request->validate([
         'Ten' => 'required|unique:LoaiTin,Ten|min:3|max:100',
     ],
     [
       'Ten.require'=>'Bạn chưa nhập tên',
       'Ten.unique'=>'Bạn nhập tên đã tồn tại',
       'Ten.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
       'Ten.max'=>'Tên thể loại không được quá 100 ký tự',
     ]);
    $loaitin =new LoaiTin;
    $loaitin->Ten= $request->Ten;
    $loaitin->TenKhongDau= changeTitle($request->Ten);
    $loaitin->idTheLoai=$request->TheLoai;
    $loaitin->SEOTitle= $request->Ten;
    $loaitin->Status=1;
    $loaitin->save();

    return redirect('admin/loaitin/them')->with('thongbao','Thêm Thành Công');
    }

    public function getSua($id)
    {
      $theloai= TheLoai::all();
      $loaitin=LoaiTin::find($id);
      return view ('admin.loaitin.sua',['loaitin'=>$loaitin,'theloai'=>$theloai]);
    }
    public function postSua(Request $request,$id)
    {
      $validatedData = $request->validate([
         'Ten' => 'required|min:3|max:100',
     ],
     [
       'Ten.require'=>'Bạn chưa nhập tên',
       'Ten.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
       'Ten.max'=>'Tên thể loại không được quá 100 ký tự',
     ]);
     $loaitin= LoaiTin::find($id);
     $loaitin ->Ten = $request->Ten;
     $loaitin->TenKhongDau= changeTitle($request->Ten);
     $loaitin->idTheLoai = $request->TheLoai;
     $loaitin->SEOTitle= $request->Ten;
     $loaitin ->Status = $request->Status;  

     $loaitin->save();
     return redirect('admin/loaitin/danhsach')->with('thongbao','Sửa Thành Công');
    }


    public function getXoa($id)
    {
      $loaitin =LoaiTin:: find($id);
      $loaitin->delete();

      return redirect('admin/loaitin/danhsach')->with('thongbao','Xóa Thành Công');
    }
}
