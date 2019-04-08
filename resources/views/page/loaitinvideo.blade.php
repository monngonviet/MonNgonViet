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
                            <span><a href="loai-tin-video">Video</a>
                                </span>
                                     
                                 
                            </span>
                        </div>
                        <div class="clearfix"></div>
                        <article class="post" itemscope="" itemtype="https://schema.org/Article">
                            <div class="td-post-header">

                                <header class="td-post-title">
                                    
                                    <h1 class="entry-title">video</h1>
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
                                    <a href="the-loai/{{$tl->id}}/{{$tl->TenKhongDau}}.html">
                                            {{$tl->Ten}}
                                        </a>
                                    </li>
                                    <?php $i++;?>
                                     @endforeach
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
                {{-- @if(count($loaitin->tintuc->TieuDe)) --}}
               


                <div class="col-md-8">
                    <div id="listing-header" class="clearfix">
                    </div>
                    <!-- BEGIN PROPERTY LISTING -->
                    <div id="blog-listing" class="list-style clearfix">
                        <div class="row">
                            @foreach($video as $tt)
                            <div class="item col-md-6">
                                <!-- Set width to 4 columns for grid view mode only -->
                                <iframe width="500" height="350" src="https://www.youtube.com/embed/{{$tt->LinkYoutube}}" frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>

                                {{-- <div class="image">
                                    <a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">
                                        <span class="btn btn-default"><i class="fa fa-file-o"></i>Xem thêm</span>
                                    </a>
                                <img src="upload/tintuc/{{$tt->Hinh}}" alt="">
                                </div> --}}
                                <div class=""></div>
                                <div class="info-blog">
                                    <ul class="top-info">
                                            <?php
                                            $thoigian=$tt->NgayTao; 
                                            $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                        <li><i class="fa fa-calendar"></i> {{$dateM}}</li>
                                        <li><i class="fa fa-eye"></i> {{$tt->SoLuotXem}}</li>
                                        {{-- <li><i class="fa fa-tags"></i> Properties, Prices, best deals</li> --}}
                                    </ul>
                                    <h3>
                                        <a href="chi-tiet-video/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">{{$tt->TieuDe}}</a>
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
                            {!!$video->links();!!}
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