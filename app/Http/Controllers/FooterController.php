<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use App\Footer;

use Illuminate\Routing\Controller;

class FooterController extends Controller
{
  public function getDanhSach()
  {
    $footer=Footer::orderBy('id','DESC')->get();
    return view ('admin.footer.danhsach',['footer'=> $footer]
  );
  }
  public function getXem($id)
  {
    $footer=Footer::find($id);
    return view ('admin.footer.xem',['footer'=> $footer]);
  }
  //Thêm
  public function getThem()
  {
    $footer=Footer::all();
    return view('admin.footer.them',['footer'=>$footer]);
  }
  //POST Thêm
 

  public function getSua($id)
  {
   
    $footer=Footer::find($id);
    return view ('admin.footer.sua',['footer'=>$footer]);
  }
  public function postSua(Request $request,$id)
  {
    $footer=Footer::find($id);
   
    $footer->LinkFB = $request->LinkFb;
    $footer->NoiDung=$request->NoiDung;

    if($request->hasFile('HinhLoGo'))
    {
      $file=  $request->file('HinhLoGo');
      $duoi=$file->getClientOriginalExtension();
      if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
      {
        return redirect('admin/footer/sua')->with('loi','Bạn chỉ được tải hình');
      }
      $name=  $file->getClientOriginalName();
      $HinhLoGo=  str_random(4)."_".$name;
      while (file_exists("upload/footer/".$HinhLoGo))
        {
          $HinhLoGo =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/footer", $HinhLoGo);
        unlink("upload/footer/".$footer->HinhLoGo);
        $footer->HinhLoGo=$HinhLoGo;
    }
      $footer->save();
     return redirect('admin/footer/danhsach')->with('thongbao','Sửa Thành Công');
  }

  public function getXoa($id)
  {
    $footer =Footer::find($id);
    $footer->delete();
    return redirect('admin/footer/danhsach')->with('thongbao','Xóa Thành Công');
  }

}
