<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use App\header;

use Illuminate\Routing\Controller;

class HeaderController extends Controller
{
  public function getDanhSach()
  {
    $header=Header::orderBy('id','DESC')->get();
    return view ('admin.header.danhsach',['header'=> $header]
  );
  }

  //Thêm
 
  //POST Thêm
 

  public function getSua($id)
  {
   
    $header=Header::find($id);
    return view ('admin.header.sua',['header'=>$header]);
  }
  public function postSua(Request $request,$id)
  {

    $validatedData = $request->validate([
      'Hinh' => 'dimensions:max_width=750,max_height=100',
      'Link' =>'Required'
  ],
  [
    'Hinh.dimensions'=>'Hình không phù hợp',
    'Link.Require' =>'Đường dẫn không được để trống'
    
  ]);
    $header=Header::find($id);
    $header->Link=$request->Link;
    $header->sdt=$request->sdt;
    $header->email=$request->email;
    $header->Fax=$request->fax;
    $header->DiaChi=$request->diachi;

    if($request->hasFile('Hinh'))
    {
      $file=  $request->file('Hinh');
      $duoi=$file->getClientOriginalExtension();
      if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
      {
        return redirect('admin/footer/sua')->with('loi','Bạn chỉ được tải hình');
      }
      $name=  $file->getClientOriginalName();
      $Hinh=  str_random(4)."_".$name;
      while (file_exists("upload/footer/".$Hinh))
        {
          $Hinh =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/footer", $Hinh);
        unlink("upload/footer/".$header->Hinh);
        $header->Hinh=$Hinh;
    }

   
      $header->save();
     return redirect('admin/header/danhsach')->with('thongbao','Sửa Thành Công');
  }



}
