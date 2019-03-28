<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\TheLoai;
use App\LoaiTin;
use App\TinTuc;
    Route::get('admin/dangnhap','UserController@getdangnhapAdmin');
    Route::post('admin/dangnhap','UserController@postdangnhapAdmin');
    Route::get('admin/dangxuat','UserController@getdangxuatpAdmin');
    Route::get('dangxuatuser','PageController@getdangxuatuser');
    Route::post('dangkiuser','PageController@postdangkiuser');
    // Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
    Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'theloai'],function(){
      //admin/theloai/danhsach
      Route::get('danhsach','TheLoaiController@getDanhSach');
      Route::get('sua/{id}','TheLoaiController@getSua');
      Route::post('sua/{id}','TheLoaiController@postSua');
      Route::get('them','TheLoaiController@getThem');
      Route::post('them','TheLoaiController@postThem');
      Route::get('xoa/{id}','TheLoaiController@getXoa');
    });
    //
      Route::group(['prefix'=>'comment'],function(){
        //admin/slide/danhsach
      Route::get('danhsach','CommentController@getDanhSach');
      Route::get('xoa/{id}','CommentController@getXoa');
  });
    //Loại Tin
      Route::group(['prefix'=>'loaitin'],function(){
      //admin/theloai/danhsach
      Route::get('danhsach','LoaiTinController@getDanhSach');
      Route::get('sua/{id}','LoaiTinController@getSua');
      Route::post('sua/{id}','LoaiTinController@postSua');
      Route::get('them','LoaiTinController@getThem');
      Route::post('them','LoaiTinController@postThem');
      Route::get('xoa/{id}','LoaiTinController@getXoa');
    });
    //Tin tức
      Route::group(['prefix'=>'tintuc'],function(){
      //admin/tintuc/danhsach
      Route::get('danhsach','TinTuc1Controller@getDanhSach');
      Route::get('sua/{id}','TinTuc1Controller@getSua');
      Route::get('xem/{id}','TinTuc1Controller@getXem');
      Route::post('sua/{id}','TinTuc1Controller@postSua');
      Route::get('them','TinTuc1Controller@getThem');
      Route::post('them','TinTuc1Controller@postThem');
      Route::get('xoa/{id}','TinTuc1Controller@getXoa');
    });
    //Người dùng
      Route::group(['prefix'=>'user'],function(){
    //admin/user/danhsach
      Route::get('danhsach','UserController@getDanhSach');
      Route::get('sua/{id}','UserController@getSua');
      Route::post('sua/{id}','UserController@postSua');
      Route::get('them','UserController@getThem');
      Route::post('them','UserController@postThem');
      Route::get('xoa/{id}','UserController@getXoa');
  });
    //Slide
      Route::group(['prefix'=>'slide'],function(){
      //admin/slide/danhsach
      Route::get('danhsach','SlideController@getDanhSach');
      Route::get('sua/{id}','SlideController@getSua');
      Route::post('sua/{id}','SlideController@postSua');
      Route::get('them','SlideController@getThem');
      Route::post('them','SlideController@postThem');
      Route::get('xoa/{id}','SlideController@getXoa');
        //ăn uống
       
  });
  Route::group(['prefix'=>'anuong'],function(){
    //admin/slide/danhsach
    Route::get('danhsach','AnUongController@getDanhSach');
    Route::get('sua/{id}','AnUongController@getSua');
    Route::post('sua/{id}','AnUongController@postSua');
    Route::get('them','AnUongController@getThem');
    Route::post('them','AnUongController@postThem');
    Route::get('xoa/{id}','AnUongController@getXoa');
  });
  //LiênHệ
  Route::group(['prefix'=>'lienhe'],function(){
    //admin/slide/danhsach
    Route::get('danhsach','LienHeController@getDanhSach');
    Route::get('xoa/{id}','LienHeController@getXoa');
  });
  //QuangCao
  Route::group(['prefix'=>'quangcao'],function(){
  //admin/slide/danhsach
  Route::get('danhsach','QuangCaoController@getDanhSach');
  Route::get('sua/{id}','QuangCaoController@getSua');
  Route::post('sua/{id}','QuangCaoController@postSua');
  Route::get('them','QuangCaoController@getThem');
  Route::post('them','QuangCaoController@postThem');
  Route::get('xoa/{id}','QuangCaoController@getXoa');

});
      Route::group(['prefix'=>'ajax'],function(){
      Route::get('loaitin/{idTheLoai}','AjaxController@getLoaiTin');
  });
    });
    Route::get('lien-he.html','PageController@lienhe');
    Route::post('lien-he.html','PageController@postlienhe');
    Route::get('tin-tuc/{id}/{TieuDeKhongDau}.html','PageController@chitiettintuc');
    Route::get('trang-chu.html','PageController@trangchu');
    Route::get('loaitin/{id}/{TenKhongDau}.html','PageController@danhsachdiadiemdulich');
    Route::get('{id}/{TieuDeKhongDau}.html','PageController@chitiettintuc');

    Route::get('dia-diem-an-uong/{TenKhongDau}/{id}.html','PageController@danhsachdiadiemanuong');
    Route::get('an-uong/{id}/{TieuDeKhongDau}','PageController@anuong');
    Route::get('dangnhap','PageController@getDangNhap');
    Route::post('dangnhap','PageController@postDangNhap');
       Route::post('timkiem','PageController@timkiem');
    Route::any('{all}', function($uri){
      return View::make('page.errors');
      })->where('all', '.*');

 