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
    $quangcao->Ten= $request->Ten;
    $quangcao->NoiDung= $request->NoiDung;
    if($request->has('link'))
    $quangcao->link=$request->link;
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
      $quangcao= QuangCao::find($id);
      $quangcao->link1=$request->link1;
      $quangcao->link2=$request->link2;
      $quangcao->link3=$request->link3;
      $quangcao->link4=$request->link4;
      // Hinh 1
      if($request->hasFile('Hinh1'))
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
      // Hinh 2
      if($request->hasFile('Hinh2'))
      {
        $file=  $request->file('Hinh2');
        $duoi=$file->getClientOriginalExtension();
        if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
        {
          return redirect('admin/quangcao/sua')->with('loi','Bạn chỉ được tải hình');
        }
        $name=  $file->getClientOriginalName();
        $Hinh2=  str_random(4)."_".$name;
        while (file_exists("upload/quangcao/".$Hinh2))
          {
            $Hinh2 =str_random(4)."_". $name;
          }
          // code...
          $file->move("upload/quangcao", $Hinh2);
          unlink("upload/quangcao/".$quangcao->Hinh2);
          $quangcao->Hinh2=$Hinh2;
        }
        // Hinh 3
        if($request->hasFile('Hinh3'))
        {
          $file=  $request->file('Hinh3');
          $duoi=$file->getClientOriginalExtension();
          if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
          {
            return redirect('admin/quangcao/sua')->with('loi','Bạn chỉ được tải hình');
          }
          $name=  $file->getClientOriginalName();
          $Hinh3=  str_random(4)."_".$name;
          while (file_exists("upload/quangcao/".$Hinh3))
            {
              $Hinh3 =str_random(4)."_". $name;
            }
            // code...
            $file->move("upload/quangcao", $Hinh3);
            unlink("upload/quangcao/".$quangcao->Hinh3);
            $quangcao->Hinh3=$Hinh3;
          }
          // Hinh 4
          if($request->hasFile('Hinh4'))
          {
            $file=  $request->file('Hinh4');
            $duoi=$file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png'&& $duoi !='jpeg' )
            {
              return redirect('admin/quangcao/sua')->with('lỗi','Bạn chỉ được tải hình');
            }
            $name=  $file->getClientOriginalName();
            $Hinh4=  str_random(4)."_".$name;
            while (file_exists("upload/quangcao/".$Hinh4))
              {
                $Hinh4 =str_random(4)."_". $name;
              }
              // code...
              $file->move("upload/quangcao", $Hinh4);
              unlink("upload/quangcao/".$quangcao->Hinh4);
              $quangcao->Hinh4=$Hinh4;
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
