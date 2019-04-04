<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use App\Video;


use Illuminate\Routing\Controller;

class VideoController extends Controller
{
  public function getDanhSach()
  {
    $video=Video::orderBy('SoLuotXem','DESC')->get();
    return view ('admin.video.danhsach',['video'=> $video]
  );
  }
  public function getXem($id)
  {
    $video=Video::find($id);
    return view ('admin.video.xem',['video'=> $video]);
  }
  //Thêm
  public function getThem()
  {
    $video=Video::all();
    return view('admin.video.them',['video'=>$video]);
  }
  //POST Thêm
  public function postThem(Request $request)
  {
    $validatedData = $request->validate([
      'TieuDe' => 'required|unique:video,TieuDe|min:3|max:100',
  ],
  [
    'TieuDe.require'=>'Bạn chưa nhập tên',
    'TieuDe.unique'=>"Tên Tiêu Đề đã tồn tại",
    'TieuDe.min'=>'Tên tiêu đề phải có độ dài từ 3 đến 100 ký tự',
    'TieuDe.max'=>'Tên tiêu đề không được quá 100 ký tự',
  ]);
    $video=new Video;
    $video->TieuDe = $request->TieuDe;
    $video->LinkYoutube=convertyoutube($request->LinkYoutube);
    $video->TieuDeKhongDau=changeTitle($request->TieuDe);
    $video->SEOTitle=$request->SEOTitle;
    $video->TomTat=$request->TomTat;
    $video->NoiDung=$request->NoiDung;
    $video->NoiBat=$request->NoiBat;
    $video->HienThi=$request->HienThi;
    $video->SoLuotXem=0;
    $video->NgayTao=$request->NgayTao;
    if($request->hasFile('Video'))
    {
      $file=  $request->file('Video');
     
      // if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
      // {
      //   return redirect('admin/video/them')->with('loi','Bạn chỉ được tải hình');
      // }
      $name=  $file->getClientOriginalName();
      $Video=  str_random(4)."_".$name;
      while (file_exists("upload/video/".$Video))
        {
          $Video =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/video", $Video);
        $video->Video=$Video;
    }
    else {
      $video->Video="";
    }
    $video->save();
    return redirect('admin/video/danhsach')->with('thongbao','Thêm Thành Công');
  }

  public function getSua($id)
  {

    $video=video::find($id);
    return view ('admin.video.sua',['video'=>$video]);
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
    $video=video::find($id);
    $video->TieuDe = $request->TieuDe;
    $video->TieuDeKhongDau=changeTitle($request->TieuDe);
    $video->LinkYoutube=convertyoutube($request->LinkYoutube);
    $video->SEOTitle=$request->SEOTitle;
    $video->TomTat=$request->TomTat;
    $video->NoiDung=$request->NoiDung;
    $video->NoiBat=$request->NoiBat;
    $video->HienThi=$request->HienThi;
    $video->SoLuotXem=0;
    $video->NgaySua=$request->NgaySua;
    if($request->hasFile('Video'))
    {
      $file=  $request->file('Video');
      // $duoi=$file->getClientOriginalExtension();
      // if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
      // {
      //   return redirect('admin/video/sua')->with('loi','Bạn chỉ được tải hình');
      // }
      $name=  $file->getClientOriginalName();
      $Video=  str_random(4)."_".$name;
      while (file_exists("upload/video/".$Video))
        {
          $Video =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/video", $Video);
        unlink("upload/video/".$video->Video);
        $video->Video=$Video;
    }
    $video->save();
   return redirect('admin/video/danhsach')->with('thongbao','Sửa Thành Công');
  }

  public function getXoa($id)
  {
    
    $video =video::find($id);
    $video->delete();
  
    return redirect('admin/video/danhsach')->with('thongbao','Xóa Thành Công');
  }

}
