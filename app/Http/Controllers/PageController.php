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
use App\Header;
use App\Footer;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
  function __construct(){
    $theloaitrangchu=TheLoai::where('id',1)->get();
    $loaitintrangchu=LoaiTin::where('idTheLoai',1)->get();
    $theloaivanhoaamthuc=TheLoai::where('id',3)->get();
    $theloaivanhoaamthuc1=TheLoai::where('id',8)->get();
    $theloaidiachi=TheLoai::where('id',4)->get();
    $theloainghebep=TheLoai::where('id',5)->get();
    $theloailangnghe=TheLoai::where('id',6)->take(1)->latest()->get();
    $theloaihoatdong=TheLoai::where('id',7)->get();
    $theloaitintuc=LoaiTin::where('idTheLoai',9)->get();
    $header=Header::all();
    $footer=Footer::all();
    $slide1=Slide::where('Status',1)->get();
    $slideNoiBat=Slide::where('NoiBat',1)->take(2)->latest()->get();
    $tatcatintuc=TinTuc::where('HienThi',1)->latest()->paginate(3);
    // $tintuclangnghe =DB::table('TinTuc')
    // ->join('LoaiTin', 'TinTuc.idLoaiTin', '=',24)
    // ->join('TheLoai', 'LoaiTin.idTheLoai', '=', 6)
    // ->select('TinTuc.idLoaiTin','TinTuc.TieuDe','TinTuc.Hinh','TinTuc.TomTat',)
    // ->get();


     $theloai=TheLoai::all();
     $loaitin=LoaiTin::all();
     $tintuc=TinTuc::all();
    
     $quangcao =QuangCao::all();
     $user = User::all();
     $soluotxem = DB::table('TinTuc')->max('SoLuotXem');
     $tinnoibat=TinTuc::where('NoiBat',1)->take(3)->latest()->get();
     $tintucslide=TinTuc::orderBy('id','DESC')->take(10)->get();
     $danhsachloaitin=LoaiTin::orderBy('id','DESC')->take(5)->get();
     view()->share('loaitintrangchu',$loaitintrangchu);
     view()->share('theloaitrangchu',$theloaitrangchu);
     view()->share('theloaivanhoaamthuc',$theloaivanhoaamthuc);
     view()->share('theloaivanhoaamthuc1',$theloaivanhoaamthuc1);
     view()->share('theloaidiachi',$theloaidiachi);
     view()->share('theloainghebep',$theloainghebep);
     view()->share('theloailangnghe',$theloailangnghe);
     view()->share('theloaihoatdong',$theloaihoatdong);
     view()->share('theloaitintuc',$theloaitintuc);
     view()->share('header',$header);
     view()->share('footer',$footer);
     view()->share('slide1',$slide1);
     view()->share('slideNoiBat',$slideNoiBat);
    view()->share('tinnoibat',$tinnoibat);
     view()->share('theloai',$theloai);
      view()->share('loaitin',$loaitin);
       view()->share('tintuc',$tintuc);
       view()->share('tatcatintuc',$tatcatintuc);


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
  
   return view('page.trangchu');
 }

 function danhsachdiadiemdulich($id)
 {
   $loaitin=LoaiTin::find($id);
   $tintuc=TinTuc::orderBy('id','DESC')->get();
   $tintuc=TinTuc::where('idLoaiTin',$id)->orderBy('id','DESC')->paginate(3);
   $tintucnoibat=TinTuc::where('NoiBat',1)->take(3)->get();
   return view('page.danhsach',['loaitin'=>$loaitin,'tintuc'=>$tintuc,'tintucnoibat'=>$tintucnoibat]);
 }



function danhsachloaitin($id)
{
  $tintucnoibat=TinTuc::where('NoiBat',1)->take(3)->get();
  $loaitin=LoaiTin::find($id);
  $loaitin1=LoaiTin::where('id',$id);
  $tintuc=TinTuc::where('idLoaiTin',$id)->orderBy('id','DESC')->paginate(7);
  $tintucmoinhat=TinTuc::orderBy('id','DESC')->take(6)->get();
  return view('page.loaitin',['loaitin'=>$loaitin,'loaitin1'=>$loaitin1,'tintuc'=>$tintuc,'tintucnoibat'=>$tintucnoibat,'tintucmoinhat'=>$tintucmoinhat]);
}

//  function chitiettintuc($id)
//  {
//    $tintuc=TinTuc::find($id);
//    $tinnoibat=TinTuc::where('NoiBat',1)->take(1)->get();
//    $tinlienquan=TinTuc::where('idLoaiTin',$tintuc->idLoaiTin)->take(4)->get();
//    $theloai=TheLoai::all();
//    $tinhluotxem=TinTuc::where('id', $id)->update(['SoLuotXem' => $tintuc->SoLuotXem+1]);
//    return view('page.chitiettintuc',['tintuc'=>$tintuc,'tinnoibat'=>$tinnoibat,'tinlienquan'=>$tinlienquan,'theloai'=>$theloai,'tinhluotxem'=>$tinhluotxem]);
//  }

 function chitiettintuc($id)
 {
   $tintuc=TinTuc::find($id);
   $theloai=TheLoai::all();
   $tinlienquan=TinTuc::where('idLoaiTin',$tintuc->idLoaiTin)->take(3)->get();
  //  

   return view('page.chitiettintuc',['tintuc'=>$tintuc,'tinlienquan'=>$tinlienquan,'theloai'=>$theloai]);
 }
//  function danhsachtheloai($id)
//  {
//     $theloai=TheLoai::find($id);
//     $theloaids =
//    DB::table('TinTuc','TheLoai','LoaiTin')
//    ->join('LoaiTin','LoaiTin.id','idLoaiTin')
//    ->join('TheLoai','TheLoai.id','idTheLoai')
//    ->select('TinTuc.*','TheLoai.Ten')
//    ->where('idTheLoai',$theloai->id)
//    ->get();
//    return  view('page.danhsachtheloai',['theloaids'=>$theloaids]);
//  }
function danhsachtheloai($id)
{
  $theloai=TheLoai::find($id);
  // $loaitin=LoaiTin::where('idTheLoai')
  $loaitin=LoaiTin::where('idTheLoai',$theloai->id)->get();
  $tintuc=TinTuc::where('idLoaiTin',$loaitin->idTheLoai)->get();
  return  view('page.danhsachtheloai',['theloai'=>$theloai,'tintuc'=>$tintuc,'loaitin'=>$loaitin]);
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
