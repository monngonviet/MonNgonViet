@extends('layout.index1')
@section('content')

<div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <div class="td-crumb-container">
                        <div class="entry-crumbs">
                            <span>
                                <a title="" class="entry-crumb" href="trang-chu.html">Home
                                </a>
                            </span>
                            <i class="fa fa-angle-right"> </i>
                            <span>
                                <a title="{{$loaitin->Ten}}" class="entry-crumb"
                                    href="">{{$loaitin->theloai->Ten}}</a></span>
                                    <i class="fa fa-angle-right"> </i>
                                    <span
                                      title="{{$loaitin->Ten}}" class="entry-crumb">
                                            {{$loaitin->Ten}}</span>
                            </span>
                        </div>
                        <div class="clearfix"></div>
                        <article class="post" itemscope="" itemtype="https://schema.org/Article">
                            <div class="td-post-header">

                                <header class="td-post-title">
                                    <h1 class="entry-title">{{$loaitin->Ten}}</h1>
                                    <div class="row">
                                        <div class="text-author">
                                            <div class="col-md-6">
                                            </div>
                                        </div>
                                    </div>
                                </header>
                          
                                <ul class="td-category">
                                    <?php $i=0; ?>
                                    @foreach($theloai1 as $tl)
                                    @foreach($tl->loaitin as $ttt)
                                    <li 
                                    @if($i==0)
                                    class="entry-category cate-community"
                                    @elseif ($i==1)
                                    class="entry-category cate-world-cuisine"
                                    @elseif($i==2)
                                    class="entry-category cate-classified"
                                    @elseif($i==3)
                                    class="entry-category cate-culinary-address"
                                    @elseif($i==4)
                                    class="entry-category cate-focus"
                                    @elseif($i==5)
                                    class="entry-category cate-community"
                                    @else
                                    class="entry-category cate-news-event"
                                    @endif
                                    >
                                        <a href="loai-tin/{{$ttt->id}}/{{$ttt->theloai->TenKhongDau}}/{{$ttt->TenKhongDau}}.html">
                                            {{$ttt->Ten}}
                                        </a>
                                    </li>
                                    <?php $i++;?>
                                     @endforeach
                                     
                                     @endforeach
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="td-pb-span12">
                    <div class="td_block_wrap td_block_big_grid_1 td_uid_9_5c9e1575a521e_rand td-grid-style-5 td-hover-1 td-big-grids td-pb-border-top td_block_template_1"
                        data-td-block-uid="td_uid_9_5c9e1575a521e">
                        <div id="td_uid_9_5c9e1575a521e" class="td_block_inner">
                               
                                <?php $i=0;?>
                                @foreach($tintucslide as $tt)
                                @if($i==0) 
                                <div class="td-big-grid-wrapper">
                                <div class="td_module_mx5 td-animation-stack td-big-grid-post-0 td-big-grid-post td-big-thumb">
                                <div class="td-module-thumb"><a
                                        href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html"
                                        rel="bookmark" class="td-image-wrap"
                                        title="{{$tt->TieuDe}}"><img
                                            width="534" height="448"
                                            class="entry-thumb td-animation-stack-type0-2"
                                            src="upload/tintuc/{{$tt->Hinh}}"
                                            alt="{{$tt->TieuDe}}"
                                            title=""></a>
                                </div>
                                <div class="td-meta-info-container">
                                    <div class="td-meta-align">
                                        <div class="td-big-grid-meta">
                                            <a href="https://monngonviet.com.vn/category/hoat-dong-cong-dong/"
                                                class="td-post-category">{{$tt->loaitin->Ten}}</a>
                                            <h3 class="entry-title td-module-title"><a
                                                    href="https://monngonviet.com.vn/2018/08/06/mua-chay-sap-den-tan-huong-thuc-don-duong-sinh-lanh-ngon-cua-kfc-nhe/"
                                                    rel="bookmark"
                                                    title="Mùa Chay Sắp đến..Tận hưởng thực đơn dưỡng sinh lành ngon của KFC nhé">{{$tt->TieuDe}}</a></h3>
                                        </div>
                                        <div class="td-module-meta-info">
                                            <span class="td-post-author-name"><a
                                                    href="https://monngonviet.com.vn/author/mnadmin/">mnadmin</a>
                                                <span>-</span> </span> <span class="td-post-date"><time
                                                    class="entry-date updated td-module-date"
                                                    datetime="2018-08-06T04:05:46+00:00">6 Tháng Tám,
                                                    2018</time></span> </div>
                                    </div>
                                </div>
                                </div>
                                <div class="td-big-grid-scroll">
                                        @else
                                                <div
                                                    class="td_module_mx6 td-animation-stack td-big-grid-post-1 td-big-grid-post td-small-thumb">
                                                    <div class="td-module-thumb"><a
                                                            href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html"
                                                            rel="bookmark" class="td-image-wrap"
                                                            title="Cà ri chay – loanh quanh nhiều chuyện"><img width="265"
                                                                height="198" class="entry-thumb td-animation-stack-type0-2"
                                                                src=""
                                                                srcset="upload/tintuc/{{$tt->Hinh}}"
                                                                sizes="(max-width: 265px) 100vw, 265px" alt=""
                                                                title="{{$tt->SEOTitle}}"></a></div>
                                                    <div class="td-meta-info-container">
                                                        <div class="td-meta-align">
                                                            <div class="td-big-grid-meta">
                                                                <a href="https://monngonviet.com.vn/category/hoat-dong-cong-dong/"
                                                                    class="td-post-category">{{$tt->loaitin->Ten}}</a>
                                                                <h3 class="entry-title td-module-title"><a
                                                                        href="https://monngonviet.com.vn/2018/08/01/ca-ri-chay-loanh-quanh-nhieu-chuyen/"
                                                                        rel="bookmark"
                                                                        title="{{$tt->SEOTitle}}">{{$tt->TieuDe}}</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endif
                                        <?php $i++;?>
                                        @endforeach
                                        </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div> <!-- ./block -->
                </div>


                <div class="col-md-8">
                    <div id="listing-header" class="clearfix">
                    </div>
                    <!-- BEGIN PROPERTY LISTING -->
                    <div id="blog-listing" class="list-style clearfix">
                        <div class="row">
                            @foreach($tintucds as $tt)
                            <div class="item col-md-6">
                                <!-- Set width to 4 columns for grid view mode only -->
                                <div class="image">
                                    <a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">
                                        <span class="btn btn-default"><i class="fa fa-file-o"></i>Xem thêm</span>
                                    </a>
                                <img src="upload/tintuc/{{$tt->Hinh}}" alt="">
                                </div>
                                <div class="tag"><i class="fa fa-file-text"></i></div>
                                <div class="info-blog">
                                    <ul class="top-info">
                                            <?php
                                            $thoigian=$tt->NgayTao; 
                                            $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                        <li><i class="fa fa-calendar"></i> {{$dateM}}</li>
                                        <li><i class="fa fa-comments-o"></i> 2</li>
                                        {{-- <li><i class="fa fa-tags"></i> Properties, Prices, best deals</li> --}}
                                    </ul>
                                    <h3>
                                        <a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">{{$tt->TieuDe}}</a>
                                    </h3>
                                    <div class="des" data-maxlength="100">
                                            <p>{!!$tt->TomTat!!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- END PROPERTY LISTING -->
                    <!-- BEGIN PAGINATION -->
                    <div >
                            {!!$tintucds->links();!!}
                    </div>
                    <!-- END PAGINATION -->
                </div>
                <div class="sidebar col-md-4">
                    <div class="details-left-img"><img src="assets/images/qc4.jpg" alt=""></div>
                    <div class="details-news-laster">
                        <h2 class="section-title">Bài Viết nổi bật</h2>
                        <ul class="latest-news">
                            @foreach($tintucnoibat as $tt)
                            <li class="col-md-12">
                                <div class="image">
                                    <a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html"></a>
                                <img src="upload/tintuc/{{$tt->Hinh}}" alt="">
                                </div>

                                <ul class="top-info">
                                        <?php
                                        $thoigian=$tt->NgayTao; 
                                        $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                    <li><i class="fa fa-calendar"></i>{{$dateM}}</li>
                                </ul>

                                <h3><a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">{{$tt->TieuDe}}</a></h3>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="details-news-read">
                        <h2 class="section-title">Tin Tức Mới nHẤT</h2>
                        <ul class="latest-news">
                            @foreach($tintucmoinhat as $tt)
                            <li class="col-md-12">
                            <h3><a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">{{$tt->TieuDe}}</a></h3>
                                <ul class="top-info">
                                        <?php
                                        $thoigian=$tt->NgayTao; 
                                        $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                    <li><strong>admin </strong> - <i class="fa fa-calendar"></i> {{$dateM}}</li>
                                    <div class="td-module-comments"><a href="">{{$tt->SoLuotXem}}</a></div>
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <script>
            $(".des p").text(function(index, currentText) {
              var maxLength = $(this).parent().attr('data-maxlength');
              if (currentText.length >= maxLength) {
                return currentText.substr(0, maxLength) + "...xem tiếp";
              } else {
                return currentText
              }
            });
          </script>
@endsection