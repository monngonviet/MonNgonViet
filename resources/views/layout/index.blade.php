@include('layout.header')
<div id="columns" class="columns-container">
  
  <div class="section section-bannertext">
  <h4 class="title_block">Bài viết được xem nhiều nhất</h4>
        @foreach($tinnoibat as $tt)
            <div class="container">
                <div class="bannertext bannertext-1 block">
                    <div class="box-homehtml">
                        <div class="block-html block">
                            <h6 class="title_block">{{$tt->TieuDe}}</h6>
                             <p class="block-htmldes">{!!$tt->TomTat!!}</p>
                            <a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html" class="btn-more" title="{{$tt->TieuDe}}"><i class="fa fa-angle-right"></i>Đọc thêm</a>
                        </div><!--end block-html -->
                    </div>
                    <div class="box-homehtml box-image">
                        <div class="banner-item">
                            <a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html"><img class="img-responsive" src="upload/tintuc/{{$tt->Hinh}}" alt="{{$tt->TieuDe}}"></a>
                        </div><!--end banner-item-->
                    </div>
                </div>
            </div><!-- end container -->
          @endforeach
        </div><!-- end section-bannertext -->

    <div class="section section-featured">
    <div class="container">
      <div class="tiva-featured">
        <div class="tiva-featured-title">
          <h4 class="title_block">Những bài viết mới nhất</h4>
          <div class="des-text">
            <p class="cl-default">Hãy chọn nơi du lịch phù hợp với bạn nhe</p>
          </div>
        </div>
        <div class="block_content">
          <div class="featured-owlcaousel owl-carousel">
            @foreach($tintucslide as $tts)
            <div class="item">
              <div class="featured-container">
                <div class="featured-image">
                  <a href="tin-tuc/{{$tts->id}}/{{$tts->TieuDeKhongDau}}.html" title="">
                    <img src="upload/tintuc/{{$tts->Hinh}}" alt="{{$tts->TieuDe}}" class="img-responsive" width="370" height="480">
                  </a>
                </div>
                <div class="featured-content">
                  <div class="featured-contentmeta">
                  <a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html"> <span class="yellow label-activity">{{$tts->TieuDe}}</span> </a>
                    <h4 style="color: ghostwhite;">{{$tts->created_at}}</h4>
                  </div><!-- end featured-contentmeta -->
                </div><!-- end featured-content -->
              </div><!-- end featured-container -->
            </div><!-- end item -->
          @endforeach
          </div><!-- end featured-owlcaousel -->
        </div><!-- end bock_content -->
      </div><!-- end tiva-featured -->
    </div><!-- end container -->
  </div><!-- end section-featured -->

  <div class="container">
    <div class="tiva-featured">
      <div class="tiva-featured-title">
        <h2 class="title_block">Top địa điểm</h2>
        <div class="des-text">
          <p class="cl-default">Hãy nơi được yêu thích nhất năm</p>
        </div>
      </div>
      <div class="block_content">
        <div class="featured-owlcaousel owl-carousel">
          @foreach($loaitin as $tts)
          <div class="item">
            <div class="featured-container">
              <div class="featured-image">
                <a href="loaitin/{{$tts->id}}/{{$tts->TenKhongDau}}.html" title="">
                  <img src="upload/hinhloaitin/{{$tts->Hinh1}}" alt="{{$tts->TieuDe}}" class="img-responsive" width="370" height="480">
                </a>
              </div>
              <div class="featured-content">
                <div class="featured-contentmeta">
                <a href="loaitin/{{$tts->id}}/{{$tts->TenKhongDau}}.html"> <span class="yellow label-activity">{{$tts->TieuDe}}</span> </a>
                  <h4 style="color: ghostwhite;">{{$tts->created_at}}</h4>
                </div><!-- end featured-contentmeta -->
              </div><!-- end featured-content -->
            </div><!-- end featured-container -->
          </div><!-- end item -->
        @endforeach
        </div><!-- end featured-owlcaousel -->
      </div><!-- end bock_content -->
    </div><!-- end tiva-featured -->
  </div><!-- end container -->
  {{-- <div class="section section-prolist">
            <div class="container">
                <div class="tiva-topsight">
                    <h4 class="title_block">Top địa điểm</h4>
                    <div class="des-text">
                        <p class="cl-default">Khám phá ngay thôi</p>
                    </div>
                    <div class="block_content">
                        <div class="topsight-owl owl-carousel">
                          @foreach($loaitin as $lt)
                            <div class="item">

                                <div class="product-container">
                                    <div class="left-block">
                                        <div class="product-image-container">
                                            <a class="product_img_link" href="loaitin/{{$lt->id}}/{{$lt->TenKhongDau}}.html" title="{{$lt->Ten}}">
                                                <img src="upload/hinhloaitin/{{$lt->Hinh}}" alt="Around Alaska - the Ice land" class="img-responsive image-effect" width="480" height="319">
                                            </a>
                                        </div>
                                    </div><!--end left block -->
                                    <div class="right-block">
                                        <div class="product-box">
                                      <h5 class="name">
                                              <a class="product-name" href="loaitin/{{$lt->id}}/{{$lt->TenKhongDau}}.html" title="{{$lt->Ten}}">
                                                {{$lt->Ten}}
                                              </a>
                                          </h5>
                                            <div class="tour-active">Top 2019</div>
                                        </div>
                                    </div><!-- end right block -->
                                </div><!-- end product-container-->

                            </div>

                          @endforeach

                        </div><!-- end topsight-owl -->
                    </div><!-- end bock_content -->
                </div><!-- end tiva-topsight -->
            </div><!-- end container -->
        </div> --}}



        <!-- end section-prolist -->

        {{-- <div class="section section-banner">
            <div class="container">
                <div class="html-parallax">
                      <p class="txt1">greatest view you can explore</p>
                      <p class="txt2">The picture of nature</p>
                      <p class="txt3">So we are going to enjoy our breakfast.<br> Major key, don’t fall for the trap, stay focused. It’s the ones closest to <br>you that want to see you fail.</p>
                      <a href="#" class="btn btn-default" title="Discover now">Discover now</a>
                  </div>
            </div><!-- end container -->
        </div><!-- end section-banner --> --}}

        

  <div class="section section-contacttour">
            <div class="container">
                <div class="contacttour">
                    <div class="contacttour-lf">
                        <div class="media">
            <div class="media-left">
              <span class="icon-airplane-flight"></span>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Đặt vé máy bay để khám phá nào</h4>
              <p>Khám phá những nơi bạn muốn đến</p>
            </div>
          </div>
                    </div>
                    <div class="contacttour-rg">
                        <a href="https://www.traveloka.com/vi-vn/?id=6988541158078679749&adloc=vi-vn&kw=6988541158078679749_traveloka&gmt=e&gn=g&gd=c&gdm=&gcid=120960454098&gdp=&gdt=&gap=1t1&pc=2&cp=6988541158078679749_TB-COM-D-s_6988541158078679749_EM&aid=24326433378&wid=kwd-51659214310&fid=&gid=1028581&gclid=CjwKCAjwm-fkBRBBEiwA966fZKqn2qutu2123L_8426olsxENvbiQ2FYjanXCCrCRcEAlAVXenI6PhoCOIIQAvD_BwE"  target="_blank" class="btn btn-default" title="Book on agoda">Book on Traveloka</a>
                    </div>
                </div><!-- end contacttour -->
            </div><!-- end container -->
        </div><!-- end section-contacttour -->

  <div class="section section-instagram">
            <div class="container">
                <div class="block-instagram">
                    <h4 class="title_block">Hình ảnh từ Instagram</h4>
                    <div class="des-text">
                        <p class="cl-default">hashtag #neverlandtravel</p>
                    </div>
                    <div class="block_content">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-sp-6">
                                <a href="#" title=""><img class="img-responsive" src="img/instagram/insta1.jpg" alt=""></a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-sp-6">
                                <a href="#" title=""><img class="img-responsive" src="img/instagram/insta2.jpg" alt=""></a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-sp-6">
                                <a href="#" title=""><img class="img-responsive" src="img/instagram/insta3.jpg" alt=""></a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-sp-6">
                                <a href="#" title=""><img class="img-responsive" src="img/instagram/insta4.jpg" alt=""></a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-sp-6">
                                <a href="#" title=""><img class="img-responsive" src="img/instagram/insta5.jpg" alt=""></a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-sp-6">
                                <a href="#" title=""><img class="img-responsive" src="img/instagram/insta6.jpg" alt=""></a>
                            </div>
                        </div>
                        <p class="text-center"><a href="#" title="More on instagram"><i class="fa fa-angle-right"></i>Xem thêm </a></p>
                    </div>
                </div><!-- end block-instagram -->
            </div><!-- end container -->
        </div><!-- end section-instagram -->
</div><!--end columns -->
@include('layout.footer')
