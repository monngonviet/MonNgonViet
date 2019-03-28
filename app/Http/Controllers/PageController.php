<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\LoaiTin;
use App\TheLoai;
use App\TinTuc;
use App\Comment;
use App\Slide;
use App\QuangCao;
use App\LienHe;
use App\User;
use App\DiaDiemAnUong;
use App\DanhMucAnUong;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
  function __construct(){
    $danhmucanuong=DanhMucAnUong::all();
      
     $theloai=TheLoai::all();
     $loaitin=LoaiTin::all();
     $tintuc=TinTuc::all();
     $slide =Slide::all();
     $quangcao =QuangCao::all();
     $user = User::all();
     $soluotxem = DB::table('TinTuc')->max('SoLuotXem');
     $tinnoibat=TinTuc::where('SoLuotXem','=',$soluotxem)->take(1)->get();
     $tintucslide=TinTuc::orderBy('id','DESC')->take(10)->get();
     $danhsachloaitin=LoaiTin::orderBy('id','DESC')->take(5)->get();
    view()->share('tinnoibat',$tinnoibat);
 
    view()->share('danhmucanuong',$danhmucanuong);
     view()->share('theloai',$theloai);
      view()->share('loaitin',$loaitin);
       view()->share('tintuc',$tintuc);
        view()->share('slide',$slide);
        view()->share('danhsachloaitin',$danhsachloaitin);
          view()->share('quangcao',$quangcao);
            view()->share('user',$user);
            view()->share('tintucslide',$tintucslide);
            if(Auth::check()){
              view()->share('nguoidung',Auth::user());
      }

  }
 function trangchu()
 {
   return view('layout.index');

 }
 function danhsachdiadiemdulich($id)
 {
   $loaitin=LoaiTin::find($id);
   $tintuc=TinTuc::orderBy('id','DESC')->get();
   $tintuc=TinTuc::where('idLoaiTin',$id)->orderBy('id','DESC')->paginate(3);
   return view('page.danhsach',['loaitin'=>$loaitin,'tintuc'=>$tintuc]);
 }

 function danhsachdiadiemanuong($id)
 {
   $danhmucanuong=DanhMucAnUong::find($id);
   $anuong=DiaDiemAnUong::orderBy('id','ASC')->get();
   $anuong=DiaDiemAnUong::where('idDanhMuc',$id)->orderBy('id','ASC')->paginate(20);
   return view('page.anuong',['anuong'=>$anuong,'danhmucanuong'=>$danhmucanuong]);
 }

 function chitiettintuc($id)
 {
   $tintuc=TinTuc::find($id);
   $tinnoibat=TinTuc::where('NoiBat',1)->take(1)->get();
   $tinlienquan=TinTuc::where('idLoaiTin',$tintuc->idLoaiTin)->take(4)->get();
   $theloai=TheLoai::all();
   $tinhluotxem=TinTuc::where('id', $id)->update(['SoLuotXem' => $tintuc->SoLuotXem+1]);
   return view('page.chitiettintuc',['tintuc'=>$tintuc,'tinnoibat'=>$tinnoibat,'tinlienquan'=>$tinlienquan,'theloai'=>$theloai,'tinhluotxem'=>$tinhluotxem]);
 }

function anuong($id)
{
  $anuong=DiaDiemAnUong::find($id);
  
   return view('page.chitiettintuc',['anuong'=>$anuong]);
}

 public function lienhe()
 {
   return view('page.lienhe');
 }
 public function postlienhe(Request $request)
 {
   $lienhe = new LienHe;
   $lienhe->Ten = $request->name;
   $lienhe->Email = $request->email;
   $lienhe->SoDienThoai=$request->sodienthoai;
   $lienhe->LoiNhan=$request->LoiNhan;
   $lienhe->save();
   return redirect('trang-chu.html');
 }
 public function getDangNhap(){
   return view('page.login');
 }

 public function postDangNhap(Request $request)
 {
   $validatedData = $request->validate([
      'email' => 'required|min:3|max:100',
  ],
  [
    'email.required'=>'Bạn chưa nhập tên',
    'email.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
    'email.max'=>'Tên thể loại không được quá 100 ký tự',
  ]);
   if (Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
   {
     return redirect('trang-chu.html');
   }
   else {
     return redirect('dangnhap')->with('thongbao','Sai tên hoặc mật khẩu đăng nhập');
   }

 }
 public  function getdangxuatuser(){
   Auth::logout();
    return redirect('trang-chu.html');
 }

 public function postdangkiuser(Request $request)
 {
   $validatedData = $request->validate([
      'email' => 'required|unique:Users,email|min:3|max:100',
      'sdt'=>'min:9|max:11',
  ],
  [
    'email.required'=>'Bạn chưa nhập tên',
    'email.unique'=>'Email đã tồn tại',
    'email.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
    'email.max'=>'Tên thể loại không được quá 100 ký tự',
    'sdt.min'=>'Số điện thoại không đúng',
    'sdt.max'=>'Số điện thoại không đúng',

  ]);
   $user =new User;
   $user->name= $request->fullname;
   $user->email=$request->email;
   $user->password=bcrypt($request->password);
   $user->quyen=0;
   $user->sdt= $request->sdt;
   $user->save();
   return redirect('dangnhap')->with('thongbao','Đăng kí thành công');

 }

 function timkiem(Request $request)
 {
   $tukhoa =$request->tukhoa;
   $tintuc =TinTuc::where('TieuDe','like',"%$tukhoa%")->take(10)->paginate(10);
   return view('page.timkiem',['tintuc'=>$tintuc,'tukhoa'=>$tukhoa]);
 }
}
