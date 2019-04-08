@extends('layout.index1')
@section('content')
<div id="wrapper">

      
            <!-- END HEADER -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="td-crumb-container">
                                <div class="entry-crumbs">
                                    <span>
                                        <a title="" class="entry-crumb" href="https://monngonviet.com.vn/">Home
                                        </a>
                                    </span>
                                    <i class="fa fa-angle-right"> </i>
                                    <span>
                                        <a title="{{$theloai->SEOTitle}}" class="entry-crumb"
                                            href="https://monngonviet.com.vn/category/hoat-dong-cong-dong/">{{$theloai->Ten}}</a></span>
                                    </span>
                                </div>
                                <div class="clearfix"></div>
                                <article class="post" itemscope="" itemtype="https://schema.org/Article">
                                    <div class="td-post-header">
                                        <header class="td-post-title">
                                        <h1 class="entry-title">{{$theloai->Ten}}</h1>
                                            <div class="row">
                                                <div class="text-author">
                                                    <div class="col-md-6">
                                                    </div>
                                                    <!-- <div class="col-md-6">
                                                        <div class="author-right">
                                                            <span><i class="fas fa-eye"></i>100</span>
                                                            <span><i class="fas fa-comments"></i>100</span>
                                                        </div>
                                                    </div> -->
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

                         @foreach($theloaitc as $tl)
                                    <?php 
                                    // $data=$tl->tintuc->where('HienThi',1)->sortbyDesc('created_at')->take(6);
                                    $data12=$tl->tintuc->where('HienThi',1)->count()
                                    ?>
                        @if($data12>=5)
                        <div class="td-pb-span12">
                            <div class="td_block_wrap td_block_big_grid_1 td_uid_9_5c9e1575a521e_rand td-grid-style-5 td-hover-1 td-big-grids td-pb-border-top td_block_template_1"
                                data-td-block-uid="td_uid_9_5c9e1575a521e">
                                <div id="td_uid_9_5c9e1575a521e" class="td_block_inner">
                                        <?php $i=0;?>
                                        @foreach($theloaitc as $tl)
                                        <?php 
                                        $data=$tl->tintuc->where('HienThi',1)->sortbyDesc('created_at')->take(6);
                                        $data1=count($data);
                                        ?>
                                       
                                        @foreach($data as $tt)
                                        @if($i==0) 
                                        <div class="td-big-grid-wrapper">
                                        <div class="td_module_mx5 td-animation-stack td-big-grid-post-0 td-big-grid-post td-big-thumb">
                                        <div class="td-module-thumb"><a
                                                href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html"
                                                rel="bookmark" class="td-image-wrap"
                                                title="{{$tt->SEOTitle}}"><img
                                                    width="534" height="448"
                                                    class="entry-thumb td-animation-stack-type0-2"
                                                    src="upload/tintuc/{{$tt->Hinh}}"
                                                    alt="{{$tt->SEOTitle}}"
                                                    title="{{$tt->SEOTitle}}"></a>
                                        </div>
                                        <div class="td-meta-info-container">
                                            <div class="td-meta-align">
                                                <div class="td-big-grid-meta">
                                                    <a href=""
                                                        class="td-post-category">{{$tt->loaitin->Ten}}</a>
                                                    <h3 class="entry-title td-module-title"><a
                                                            href=""
                                                            rel="bookmark"
                                                            title="{{$tt->SEOTile}}">{{$tt->TieuDe}}</a></h3>
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
                                                                    title="{{$tt->SEOTitle}}"><img width="265"
                                                                        height="198" class="entry-thumb td-animation-stack-type0-2"
                                                                        src=""
                                                                        srcset="upload/tintuc/{{$tt->Hinh}}"
                                                                        sizes="(max-width: 265px) 100vw, 265px" alt=""
                                                                        title="{{$tt->SEOTitle}}"></a></div>
                                                            <div class="td-meta-info-container">
                                                                <div class="td-meta-align">
                                                                    <div class="td-big-grid-meta">
                                                                        <a href=""
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
                                              
                                                @endforeach
                                                </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div> <!-- ./block -->
                        </div>
                        @endif
                        @endforeach
    
                        <div class="col-md-8">
                            <div id="listing-header" class="clearfix"></div>
                            <!-- BEGIN PROPERTY LISTING -->
                            <!-- BEGIN PROPERTY LISTING -->
                            <div id="blog-listing" class="grid-style1">
                                    @foreach($theloaitc as $tl)
                                    <?php 
                                    // $data=$tl->tintuc->where('HienThi',1)->sortbyDesc('created_at')->take(6);
                                    $data=$tl->tintuc->where('HienThi',1)->sortbyDesc('created_at')
                                    ?>
                                <div class="row" style="opacity: 1;">
                                        @foreach($data as $ttt)
                                    <div class="item col-md-6">
                                        <!-- Set width to 4 columns for grid view mode only -->
                                        <div class="image">
                                            <a href="tin-tuc/{{$ttt->id}}/{{$ttt->TieuDeKhongDau}}.html">
                                                <span class="btn btn-default"><i class="fa fa-file-o"></i>Xem thêm</span>
                                            </a>
                                            <img src="upload/tintuc/{{$ttt->Hinh}}" alt="">
                                        </div>
                                        <div class="tag"><i class="fa fa-file-text"></i></div>
                                        <div class="info-blog">
                                            <ul class="top-info">
                                                    <?php
                                                    $thoigian=$ttt->NgayTao; 
                                                    $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                                <li><i class="fa fa-calendar"></i>{{$dateM}}</li>
                                                <li><i class="fa fa-eye"></i> {{ $ttt->SoLuotXem}}</li>
                                                {{-- <li><i class="fa fa-tags"></i> </li> --}}
                                            </ul>
                                            <h3>
                                                <a href="tin-tuc/{{$ttt->id}}/{{$ttt->TieuDeKhongDau}}.html">{{$ttt->TieuDe}}</a>
                                            </h3>
                                            <div class="des"  data-maxlength="100">
                                                 <p>{!!$ttt->TomTat!!}</p>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                                <!-- END PROPERTY LISTING -->
                                <!-- BEGIN PAGINATION -->
                                <div class="pagination">
                                   
                                </div>
                                <!-- END PAGINATION -->
    
                            </div>
                            <!-- END PROPERTY LISTING -->
                        </div>

                        <div class="sidebar col-md-4">
                            <div class="details-left-img"><img src="assets/images/qc4.jpg" alt=""></div>
                            <div class="details-news-laster">
                                <h2 class="section-title">Bài viết được xem nhiều nhất</h2>
                                <ul class="latest-news">
                                    @foreach($tinnoibat as $tnb)
                                    <li class="col-md-12">
                                        <div class="image">
                                            <a href="blog-detail.html"></a>
                                        <img src="upload/tintuc/{{$tnb->Hinh}}" alt="{{$tnb->TieuDe}}">
                                        </div>
    
                                        <ul class="top-info">
                                                <?php
                                                $thoigian=$tnb->NgayTao; 
                                                $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                            <li><i class="fa fa-calendar"></i> {{$dateM}}</li>
                                        </ul>
    
                                        <h3><a href="tin-tuc/{{$tnb->id}}/{{$tnb->TieuDeKhongDau}}.html">{{$tnb->TieuDe}}</a></h3>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                         

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