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
use App\Video;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\TinTucNoiBat;

class PageController extends Controller
{
  function __construct(){
    $theloaitrangchu=TheLoai::where('id',1)->get();
    $loaitintrangchu=LoaiTin::where('idTheLoai',1)->get();
    $theloaivanhoaamthuc=TheLoai::where('id',3)->get();
    $theloaivanhoaamthuc1=TheLoai::where('id',8)->get();
    $theloaidiachi=TheLoai::where('id',4)->get();
    $theloainghebep=TheLoai::where('id',5)->get();
    $theloailangnghe=TheLoai::where('id',6)->get();
    $theloaitc=TheLoai::where('id','=',6)->orwhere('id','=',5)->orwhere('id','=',9)->get();
    $theloaitc1=TheLoai::where('id','=',3)->orwhere('id','=',7)->orderBy('id','asc')->get();
    $videonoibat=Video::where('NoiBat',1)->take(1)->latest()->get();
    $video=Video::where('HienThi',1)->take(6)->latest()->get();
    $theloaihoatdong=TheLoai::where('id',7)->get();
    $theloaitintuc=LoaiTin::where('idTheLoai',9)->get();
    $header=Header::all();
    $footer=Footer::all();
    $slide1=Slide::where('Status',1)->get();

    $slideNoiBat=TinTucNoiBat::where('HienThi',1)->take(2)->latest()->get();

    $tatcatintuc=TinTuc::where('HienThi',1)->latest()->paginate(3);

    // $tintuclangnghe =DB::table('TinTuc')
    // ->join('LoaiTin', 'TinTuc.idLoaiTin', '=',24)
    // ->join('TheLoai', 'LoaiTin.idTheLoai', '=', 6)
    // ->select('TinTuc.idLoaiTin','TinTuc.TieuDe','TinTuc.Hinh','TinTuc.TomTat',)
    // ->get();
    
     $theloai=TheLoai::all();
     $loaitin=LoaiTin::all();
     $tintuc=TinTuc::all();
     $quangcao1=QuangCao::where('id','=',4)->where('HienThi',1)->get();
     $quangcao2=QuangCao::where('id','=',5)->where('HienThi',1)->get();
     $quangcao3=QuangCao::where('id','=',6)->where('HienThi',1)->get();
     $quangcao4=QuangCao::where('id','=',7)->where('HienThi',1)->get();
    $Carbon= Carbon::now(); 
     $user = User::all();
    //  $soluotxem = DB::table('TinTuc')->max('SoLuotXem');
     $phobien=TinTuc::orderBy('SoLuotXem','DESC')->take(3)->get();
    
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
     view()->share('Carbon',$Carbon);
     view()->share('quangcao1',$quangcao1);
     view()->share('quangcao2',$quangcao2);
     view()->share('quangcao3',$quangcao3);
     view()->share('quangcao4',$quangcao4);

     view()->share('tintuc',$tintuc);
     view()->share('tatcatintuc',$tatcatintuc);
     view()->share('theloaitc',$theloaitc);
     view()->share('theloaitc1',$theloaitc1);
     view()->share('videonoibat',$videonoibat);
     view()->share('video',$video);
     view()->share('phobien',$phobien);
     view()->share('danhsachloaitin',$danhsachloaitin);
   
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

function danhsachloaitin($id, $idTheLoai)
{
  $tintucnoibat=TinTuc::where('NoiBat',1)->take(3)->get();
  $loaitin=LoaiTin::find($id);
  $theloai1=TheLoai::where( 'TenKhongDau',$idTheLoai)->get();
  $tintucds=TinTuc::where('idLoaiTin',$id)->orderBy('id','DESC')->paginate(7);
  $tintucmoinhat=TinTuc::orderBy('id','DESC')->take(6)->get();
  $tintucslide=TinTuc::where('idLoaiTin',$id)->inRandomOrder()->take(5)->get();
  $demtintuc=TinTuc::where('idLoaiTin',$id)->count();
  return view('page.loaitin',['demtintuc'=>$demtintuc,'tintucslide'=>$tintucslide,'loaitin'=>$loaitin,'theloai1'=>$theloai1,'tintucds'=>$tintucds,'tintucnoibat'=>$tintucnoibat,'tintucmoinhat'=>$tintucmoinhat]);
}

function loaitinvideo()
{
  $tintucnoibat=TinTuc::where('NoiBat',1)->take(3)->get();
  $tintucmoinhat=TinTuc::orderBy('id','DESC')->take(6)->get();
  $theloai1=TheLoai::all();
  $video=Video::where('HienThi',1)->orderBy('id','DESC')->paginate(7);
  return view('page.loaitinvideo',['video'=>$video,'theloai1'=>$theloai1,'tintucnoibat'=>$tintucnoibat,'tintucmoinhat'=>$tintucmoinhat]);
}

 function chitiettintuc($id)
 {
   $footer=Footer::all();
   $quangcao=QuangCao::all();
   $tintuc=TinTuc::find($id);
   $theloai=TheLoai::all();
   $tinlienquan=TinTuc::where('idLoaiTin',$tintuc->idLoaiTin)->take(3)->get();
   $tintucmoinhat=TinTuc::orderBy('id','DESC')->take(6)->get();
   $tinhluotxem=TinTuc::where('id', $id)->update(['SoLuotXem' => $tintuc->SoLuotXem+1]);
  //  
   return view('page.chitiettintuc',['tintucmoinhat'=>$tintucmoinhat,'tintuc'=>$tintuc,'tinlienquan'=>$tinlienquan,'theloai'=>$theloai,'tinhluotxem'=>$tinhluotxem,'quangcao'=>$quangcao,'footer'=>$footer]);
 }

 function chitietvideo($id)
 {
   $footer=Footer::all();
   $video=Video::find($id);
   $videomoinhat=Video::where('HienThi',1)->take(3)->latest()->get();
   $theloai=TheLoai::all();
   $tinhluotxem=Video::where('id', $id)->update(['SoLuotXem' => $video->SoLuotXem+1]);

   return view('page.chitietvideo',['video'=>$video,'videomoinhat'=>$videomoinhat,'theloai'=>$theloai,'footer'=>$footer,'tinhluotxem'=>$tinhluotxem]);
 }

 function chitietslide($id)
 {
  $footer=Footer::all();
  $theloai=TheLoai::all();
  $quangcao=QuangCao::all();
  $tintucmoinhat=TinTuc::orderBy('id','DESC')->take(6)->get();
  $slide=Slide::find($id);
  $tinhluotxem=Slide::where('id', $id)->update(['SoLuotXem' => $slide->SoLuotXem+1]);

  return view ('page.chitietslide',['tinhluotxem'=>$tinhluotxem,'slide'=>$slide,'theloai'=>$theloai,'quangcao'=>$quangcao,'tintucmoinhat'=>$tintucmoinhat,'footer'=>$footer]);
 }
function chitiettinnoibat($id )
{
  $tintucnoibat=TinTucNoiBat::find($id);

  $tinhluotxem=TinTucNoiBat::where('id', $id)->update(['SoLuotXem' => $tintucnoibat->SoLuotXem+1]);

  $footer=Footer::all();
  $theloai=TheLoai::all();
  $quangcao=QuangCao::all();
  $tintucmoinhat=TinTuc::orderBy('id','DESC')->take(6)->get();
  return view('page.chitiettinnoibat',['tintucnoibat'=>$tintucnoibat,'theloai'=>$theloai,'quangcao'=>$quangcao,'tintucmoinhat'=>$tintucmoinhat,'footer'=>$footer,'tinhluotxem'=>$tinhluotxem]);
}

//    DB::table('TinTuc','TheLoai','LoaiTin')
//    ->join('LoaiTin','LoaiTin.id','idLoaiTin')
//    ->join('TheLoai','TheLoai.id','idTheLoai')
//    ->select('TinTuc.*','TheLoai.Ten')
//    ->where('idTheLoai',$theloai->id)
//    ->get();

function danhsachtheloai($id)
{
  $theloaitc=TheLoai::where('id',$id)->orderBy('id','DESC')->get();
  $theloaitc1=TheLoai::where('id',$id)->orderBy('id','DESC')->inRandomOrder()->take(5)->get();
  $theloai=TheLoai::find($id);
 

  $loaitin=LoaiTin::where('idTheLoai',$id)->count();
  $theloai1=TheLoai::all();
  $soluotxem = DB::table('TinTuc')->max('SoLuotXem');
  $tinnoibat=TinTuc::where('HienThi',1)->orderBy('SoLuotXem','DESC')->take(5)->get();

  return view('page.danhsachtheloai',['loaitin'=>$loaitin,'theloai'=>$theloai,'theloai1'=>$theloai1,'theloaitc'=>$theloaitc,'tinnoibat'=>$tinnoibat]);
}

 public function lienhe()
 {
   $header= Header::all();
   return view('page.lienhe',['header'=>$header]);
 }
 public function postlienhe(Request $request)
 {
  $validatedData = $request->validate([
  'Email' => 'required|min:3|max:100',
  'Name' => 'required|min:1|max:100',

],
[
  'Email.required'=>'Bạn chưa nhập tên',
  'Email.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
  'Email.max'=>'Tên thể loại không được quá 100 ký tự',
  'Name.required'=>'Bạn chưa nhập tên',
  'Name.min'=>'Tên thể loại phải có độ dài từ 1 đến 100 ký tự',
  'Name.max'=>'Tên thể loại không được quá 100 ký tự',
]);
   $lienhe = new LienHe;
   $lienhe->Ten = $request->Name;
   $lienhe->Email = $request->Email;
   $lienhe->SoDienThoai=$request->sdt;
   $lienhe->LoiNhan=$request->LoiNhan;
   $lienhe->save();

   return redirect('lien-he.html')->with('thongbao','Cảm ơn bạn đã liên hệ với chúng tôi, chúng tôi sẽ phản hồi lời nhắn của bạn sớm nhất');
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
 public  function getdangxuatadmin(){
  Auth::logout();
  return redirect('admin/dangnhap');
}
public function getdangkiuser()
{
  return view('page.dangki');
}
 public function postdangkiuser(Request $request)
 {
   $validatedData = $request->validate([
    'email' => 'required|unique:Users,email|min:3|max:100',
    'sdt'=>'min:9|max:11',
    'password'=>'confirmed',
  ],
  [
    'email.required'=>'Bạn chưa nhập tên',
    'email.unique'=>'Email đã tồn tại',
    'email.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
    'email.max'=>'Tên thể loại không được quá 100 ký tự',
    'sdt.min'=>'Số điện thoại không đúng',
    'sdt.max'=>'Số điện thoại không đúng',
    'password.confirmed' =>'Nhập lại mật khẩu không đúng'
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
  $tintucnoibat=TinTuc::where('NoiBat',1)->take(3)->get();
  $tintucmoinhat=TinTuc::orderBy('id','DESC')->take(6)->get();
  $tukhoa =$request->tukhoa;
  $tintuc =TinTuc::where('TieuDe','like',"%$tukhoa%")->take(10)->paginate(10);

  return view('page.timkiem',['tintuc'=>$tintuc,'tukhoa'=>$tukhoa,'tintucnoibat'=>$tintucnoibat,'tintucmoinhat'=>$tintucmoinhat]);
 }
}
