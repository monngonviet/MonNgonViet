@extends('layout.index1')
@section('content')
<div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="td-crumb-container">
                        <div class="entry-crumbs">
                            <span>
                                <a title="Trang chủ Món Ngon Việt" class="entry-crumb" href="trang-chu.html">Trang chủ
                                </a>
                            </span>
                            <i class="fa fa-angle-right"> </i>
                       
                            <span>
                                
                                <a title="{{$tintuc->loaitin->Ten}}" class="entry-crumb"
                                >{{$tintuc->loaitin->Ten}}</a></span> <i class="fa fa-angle-right"> </i><span><a
                                    title="{{$tintuc->loaitin->Ten}}" class="entry-crumb"
                                    ></a>{{$tintuc->TieuDe}}</span> <span
                                class="">
                            </span>
                            
                        </div>
                        <div class="clearfix"></div>
                        <article class="post" itemscope="" itemtype="https://schema.org/Article">
                            <div class="td-post-header">
                                <ul class="td-category">
                                    <?php $i=0; ?>
                                    @foreach($theloai as $tl)
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
                                <header class="td-post-title">
                                <h1 class="entry-title">{{$tintuc->TieuDe}}</h1>

                                    <div class="row">

                                        <div class="text-author">
                                            <div class="col-md-6">
                                                <div class="author-left">
                                                        <?php
                                                        $thoigian=$tintuc->NgayTao; 
                                                        $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                                Đăng bởi <a href="">Admin</a> - <time>{{$dateM}}</time>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="author-right">
                                                    <span><i class="fa fa-eye"></i>{{$tintuc->SoLuotXem}}</span>
                                                    {{-- <span><i class="fa fa-comments"></i>100</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </header>
                            </div>
                        </article>
                    </div>

                    <div class="share-wraper col-sm-12 clearfix">
                        <h5>Chia sẻ bài viết:</h5>
                        <br/>
                        <ul class="social-networks">
                        <div class="fb-share-button" data-href="https:/monngonviet.com.vn/tin-tuc/{{$tintuc->id}}/{{$tintuc->TieuDeKhongDau}}.html" data-layout="button_count" data-size="small">
                                    <a target="_blank" href="" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                        </ul>

                        <a class="print-button" href="javascript:window.print();">
                            <i class="fa fa-print"></i>
                        </a>
                    </div>
                    <div>
                        <img src="upload/tintuc/{{$tintuc->Hinh}}" alt="{{$tintuc->TieuDe}}" style="width: 100%;">
                    </div>
                    <br/>
                    <div class="td-post-content">
                        {!!$tintuc->NoiDung!!}
                    </div>
                    @foreach($footer as $f)
                <div class="fb-comments" data-href="{{$f->LinkFB}}/{{$tintuc->id}}" data-numposts="5"></div>
                    @endforeach
                    <footer>

                        <div class="td-post-source-tags">
                        </div>
                        <hr>
                        <div class="share-wraper col-sm-12 clearfix">
                            <h5>Chia sẻ trang Facebook</h5><br/> 
                            <ul class="social-networks">
                            @foreach($footer as $f)
                            <div class="fb-like" data-href="{{$f->LinkFB}}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            @endforeach
                            </ul>

                            <a class="print-button" href="javascript:window.print();">
                                <i class="fa fa-print"></i>
                            </a>
                        </div>



                    </footer> 
                    </article>
                </div>
                <div class="sidebar col-md-4">
                    @foreach($quangcao4 as $qc)
                   <a href="{{$qc->link}}">
                        <div class="details-left-img"><img src="upload/quangcao/{{$qc->Hinh}}" alt=""></div>   
                    </a> 
                    @endforeach
                    <div class="details-news-laster">
                        <h2 class="section-title">Bài viết liên quan</h2>
                        <ul class="latest-news">
                            @foreach($tinlienquan as $tlq)
                            <li class="col-md-12">
                                <div class="image">
                                    <a href="tin-tuc/{{$tlq->id}}/{{$tlq->TieuDeKhongDau}}.html"></a>
                                <img src="upload/tintuc/{{$tlq->Hinh}}" alt="{{$tlq->TieuDeKhongDau}}">
                                </div>

                                <ul class="top-info">
                                        <?php
                                        $thoigian=$tintuc->NgayTao; 
                                        $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                    <li><i class="fa fa-calendar"></i> {{$dateM}}</li>
                                </ul>
                                <h3 class="des" data-maxlength="30"><a href="tin-tuc/{{$tlq->id}}/{{$tlq->TieuDeKhongDau}}.html">{{$tlq->TieuDe}} </a></h3>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <div class="details-news-read">
                        <h2 class="section-title">Bài Viết Mới Nhất</h2>
                        <ul class="latest-news">
                                @foreach($tintucmoinhat as $tt)
                                <li class="col-md-12">
                                <h3 class="des" data-maxlength="35"><a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">{{$tt->TieuDe}}</a></h3>
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
            $(".des a").text(function(index, currentText) {
              var maxLength = $(this).parent().attr('data-maxlength');
              if (currentText.length >= maxLength) {
                return currentText.substr(0, maxLength) + "...xem tiếp";
              } else {
                return currentText
              }
            });
          </script>
          
@section('script')
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=2219634835025739&autoLogAppEvents=1"></script>
@endsection
@endsection