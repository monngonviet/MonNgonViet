<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\TheLoai;
use App\LoaiTin;
use App\TinTucNoiBat;
use Illuminate\Routing\Controller;
class TinTucNoiBatController extends Controller
{
  public function getDanhSach()
  {
    $tintucnoibat=Tintucnoibat::orderBy('id','DESC')->get();
    return view ('admin.tintucnoibat.danhsach',['tintucnoibat'=> $tintucnoibat]
  );
  }
  public function getXem($id)
  {
    $tintucnoibat=Tintucnoibat::find($id);
    return view ('admin.tintucnoibat.xem',['tintucnoibat'=> $tintucnoibat]);
  }
  //Thêm
  public function getThem()
  {
    $tintucnoibat=Tintucnoibat::all();
    
    return view('admin.tintucnoibat.them',['tintucnoibat'=>$tintucnoibat]);
  }
  //POST Thêm
  public function postThem(Request $request)
  {
    $validatedData = $request->validate([
    'TieuDe' => 'required|unique:tintucnoibat,TieuDe|min:3|max:100',
    'NoiDung' => 'required',
  ],
  [
    'TieuDe.require'=>'Bạn chưa nhập tên',
    'TieuDe.unique'=>"Tên Tiêu Đề đã tồn tại",
    'TieuDe.min'=>'Tên tiêu đề phải có độ dài từ 3 đến 100 ký tự',
    'TieuDe.max'=>'Tên tiêu đề không được quá 100 ký tự',
    'NoiDung.require'=>'Bạn chưa nhập nội dung bài viết',
  
  ]);
    $tintucnoibat=new Tintucnoibat;
    $tintucnoibat->TieuDe = $request->TieuDe;
    $tintucnoibat->TieuDeKhongDau=changeTitle($request->TieuDe);
    $tintucnoibat->SEOTitle=$request->SEOTitle;
    $tintucnoibat->NoiDung=$request->NoiDung;
    $tintucnoibat->HienThi=$request->HienThi;
    $tintucnoibat->SoLuotXem=0;
    $tintucnoibat->NgayTao=$request->NgayTao;
    if($request->hasFile('Hinh'))
    {
      $file=  $request->file('Hinh');
      $duoi=$file->getClientOriginalExtension();
      if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
      {
        return redirect('admin/tintucnoibat/them')->with('loi','Bạn chỉ được tải hình');
      }
      $name=  $file->getClientOriginalName();
      $Hinh=  str_random(4)."_".$name;
      while (file_exists("upload/tintucnoibat/".$Hinh))
        {
          $Hinh =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/tintucnoibat", $Hinh);
        $tintucnoibat->Hinh=$Hinh;
    }
    else {
      $tintucnoibat->Hinh="";
    }
    $tintucnoibat->save();
    return redirect('admin/tintucnoibat/danhsach')->with('thongbao','Thêm Thành Công');
  }

  public function getSua($id)
  {
  
    $tintucnoibat=tintucnoibat::find($id);
    return view ('admin.tintucnoibat.sua',['tintucnoibat'=>$tintucnoibat]);
  }
  public function postSua(Request $request,$id)
  {
    $validatedData = $request->validate([
      'TieuDe' => 'required|min:3|max:100',
  ],
  [
    'TieuDe.require'=>'Bạn chưa nhập tên',
    'TieuDe.min'=>'Tên tiêu đề phải có độ dài từ 3 đến 100 ký tự',
    'TieuDe.max'=>'Tên tiêu đề không được quá 100 ký tự',
  ]);
    $tintucnoibat=tintucnoibat::find($id);
    $tintucnoibat->TieuDe = $request->TieuDe;
    $tintucnoibat->TieuDeKhongDau=changeTitle($request->TieuDe);
    $tintucnoibat->SEOTitle=$request->SEOTitle;
    $tintucnoibat->NoiDung=$request->NoiDung;
    $tintucnoibat->HienThi=$request->HienThi;
    $tintucnoibat->SoLuotXem=0;
    
    if($request->hasFile('Hinh'))
    {
      $file=  $request->file('Hinh');
      $duoi=$file->getClientOriginalExtension();
      if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
      {
        return redirect('admin/tintucnoibat/sua')->with('loi','Bạn chỉ được tải hình');
      }
      $name=  $file->getClientOriginalName();
      $Hinh=  str_random(4)."_".$name;
      while (file_exists("upload/tintucnoibat/".$Hinh))
        {
          $Hinh =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/tintucnoibat", $Hinh);
        unlink("upload/tintucnoibat/".$tintucnoibat->Hinh);
        $tintucnoibat->Hinh=$Hinh;
    }

    $tintucnoibat->save();
   return redirect('admin/tintucnoibat/danhsach')->with('thongbao','Sửa Thành Công');
  }

  public function getXoa($id)
  {
    $tintucnoibat =Tintucnoibat:: find($id);
    $tintucnoibat->delete();

    return redirect('admin/tintucnoibat/danhsach')->with('thongbao','Xóa Thành Công');
  }

}
