<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\QuangCao;

use Illuminate\Routing\Controller;

class QuangCaoController extends Controller
{
    //
    public function getDanhSach()
    {
      $quangcao = QuangCao::all();
      return view ('admin.quangcao.danhsach',['quangcao'=> $quangcao]
    );
    }

    public function getThem()
    {
      return view('admin.quangcao.them');
    }
    public function postThem(Request $request)
    {
    $quangcao =new QuangCao;
    $quangcao->link=$request->link;
    $quangcao->HienThi=$request->HienThi;
    $quangcao->Ten=$request->Ten;

    if($request->hasFile('Hinh'))
    {
      $file=  $request->file('Hinh');
      $duoi=$file->getClientOriginalExtension();
      if($duoi != 'jpg' && $duoi !='png' && $duoi !='jpeg' )
      {
        return redirect('admin/quangcao/them')->with('loi','Bạn chỉ được tải hình');
      }
      $name=  $file->getClientOriginalName();
      $Hinh=  str_random(4)."_".$name;
      while (file_exists("upload/quangcao/".$Hinh))
        {
          $Hinh =str_random(4)."_". $name;
        }
        // code...
        $file->move("upload/quangcao", $Hinh);
        $quangcao->Hinh=$Hinh;
    }
    else {
      $quangcao->Hinh="";
    }
    $quangcao->save();
    return redirect('admin/quangcao/them')->with('thongbao','Thêm Thành Công');
    }

    public function getSua($id)
    {
      $quangcao = QuangCao::find($id);
        return view ('admin.quangcao.sua',['quangcao'=> $quangcao]);
    }


    public function postSua(Request $request,$id)
    {
      $validatedData = $request->validate([
        'Hinh1' => 'dimensions:max_width=170,max_height=700',
        'Hinh2' => 'dimensions:max_width=170,max_height=700',
        'Hinh3' => 'dimensions:max_width=445,max_height=230',
        'Hinh4' => 'dimensions:max_width=330,max_height=275',
    ],
    [
      'Hinh1.dimensions'=>'Hình quảng cáo vị trí 1 không phù hợp',
      'Hinh2.dimensions'=>'Hình quảng cáo vị trí 2 không phù hợp',
      'Hinh3.dimensions'=>'Hình quảng cáo vị trí 3 không phù hợp',
      'Hinh4.dimensions'=>'Hình quảng cáo vị trí 4 không phù hợp',
      
    ]);
      $quangcao= QuangCao::find($id);
      $quangcao->link=$request->link;
      $quangcao->HienThi=$request->HienThi;
      $quangcao->Ten=$request->Ten;
      

      // Hinh 1
      if($request->hasFile('Hinh'))
     {
       $file=  $request->file('Hinh1');
       $duoi=$file->getClientOriginalExtension();
       if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
       {
         return redirect('admin/quangcao/sua')->with('loi','Bạn chỉ được tải hình');
       }
       $name=  $file->getClientOriginalName();
       $Hinh1=  str_random(4)."_".$name;
       while (file_exists("upload/quangcao/".$Hinh1))
         {
           $Hinh1 =str_random(4)."_". $name;
         }
         // code...
         $file->move("upload/quangcao", $Hinh1);
         unlink("upload/quangcao/".$quangcao->Hinh1);
         $quangcao->Hinh1=$Hinh1;
       }
 
     $quangcao->save();
     return redirect('admin/quangcao/danhsach')->with('thongbao','Thêm Thành Công');
     }


    public function getXoa($id)
    {
      $quangcao =QuangCao:: find($id);
      $quangcao->delete();

      return redirect('admin/quangcao/danhsach')->with('thongbao','Xóa Thành Công');
    }

}
