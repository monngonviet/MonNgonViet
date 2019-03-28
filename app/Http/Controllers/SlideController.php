<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use App\Slide;

use Illuminate\Routing\Controller;

class SlideController extends Controller
{
  public function getDanhSach()
  {
    $slide=Slide::orderBy('id','DESC')->get();
    return view ('admin.slide.danhsach',['slide'=> $slide]
  );
  }
  public function getXem($id)
  {
    $slide=Slide::find($id);
    return view ('admin.slide.xem',['slide'=> $slide]);
  }
  //Thêm
  public function getThem()
  {
    $slide=Slide::all();
    return view('admin.slide.them',['silde'=>$slide]);
  }
  //POST Thêm
  public function postThem(Request $request)
  {
    $slide=new Slide;
    $slide->Ten = $request->Ten;
    $slide->TenKhongDau=changeTitle($request->Ten);
    $slide->TomTat=$request->TomTat;
    $slide->NoiDung=$request->NoiDung;
    $slide->Status=$request->HienThi;
    $slide->SoLuotXem=0;
    $slide->NgayTao=$request->NgayTao;
    $slide->SEONoiDung=$request->TomTat;
    $slide->KeyWord=$request->KeyWord;

    if($request->hasFile('Hinh'))
    {
      $file=  $request->file('Hinh');
      $duoi=$file->getClientOriginalExtension();
      if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
      {
        return redirect('admin/slide/them')->with('loi','Bạn chỉ được tải hình');
      }
      $name=  $file->getClientOriginalName();
      $Hinh=  str_random(4)."_".$name;
      while (file_exists("upload/slide/".$Hinh))
        {
          $Hinh =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/slide", $Hinh);
        $slide->Hinh=$Hinh;
    }
    else {
      $slide->Hinh="";
    }
    $slide->save();
    return redirect('admin/slide/danhsach')->with('thongbao','Thêm Thành Công');
  }

  public function getSua($id)
  {
   
    $slide=Slide::find($id);
    return view ('admin.slide.sua',['slide'=>$slide]);
  }
  public function postSua(Request $request,$id)
  {
    $slide=new Slide;
    $slide->Ten = $request->Ten;
    $slide->TenKhongDau=changeTitle($request->Ten);
    $slide->SEOTitle=$request->Ten;
    $slide->TomTat=$request->TomTat;
    $slide->NoiDung=$request->NoiDung;
    $slide->Status=$request->HienThi;
    $slide->SoLuotXem=0;
    $slide->NgayTao=$request->NgayTao;
    $slide->SEONoiDung=$request->TomTat;
    if($request->hasFile('Hinh'))
    {
      $file=  $request->file('Hinh');
      $duoi=$file->getClientOriginalExtension();
      if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
      {
        return redirect('admin/slide/sua')->with('loi','Bạn chỉ được tải hình');
      }
      $name=  $file->getClientOriginalName();
      $Hinh=  str_random(4)."_".$name;
      while (file_exists("upload/slide/".$Hinh))
        {
          $Hinh =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/slide", $Hinh);
        unlink("upload/slide/".$slide->Hinh);
        $slide->Hinh=$Hinh;
    }
    $slide->save();
   return redirect('admin/slide/sua/'.$id)->with('thongbao','Sửa Thành Công');
  }

  public function getXoa($id)
  {
    $slide =Slide::find($id);
    $slide->delete();
    return redirect('admin/slide/danhsach')->with('thongbao','Xóa Thành Công');
  }

}
