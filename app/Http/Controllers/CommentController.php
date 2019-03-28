<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\TheLoai;
use App\Comment;
use App\LoaiTin;
use App\TinTuc;

use Illuminate\Routing\Controller;

class CommentController extends Controller
{
    //
    public function getDanhSach()
    {
        $tintuc=TinTuc::all();

        return view('admin.comment.danhsach',['tintuc'=>$tintuc]);
    }
    public function getXoa($id)
    {
      $theloai =TheLoai:: find($id);
      $theloai->delete();

      return redirect('admin/theloai/danhsach')->with('thongbao','Xóa Thành Công');
    }

}
