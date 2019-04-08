@extends('layout.index1')
@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="td-crumb-container">
                    <div class="entry-crumbs">
                        <span>
                            <a title="" class="entry-crumb" href="trang-chu.html">Home
                            </a>
                        </span>
                        <i class="fa fa-angle-right"> </i>
                        <span>
                          Video</span> <i class="fa fa-angle-right"> </i><span>{{$video->TieuDe}}</span> 
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
                                <h1 class="entry-title">{{$video->TieuDe}}</h1>
                                <div class="row">
                                    <div class="text-author">
                                        <div class="col-md-6">
                                            <div class="author-left">
                                                    <?php
                                                    $thoigian=$video->NgayTao; 
                                                    $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                                Người đăng : <a href="">admin</a> - <time>{{$dateM}}</time>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="author-right">
                                                <span><i class="fa fa-eye"></i>{{$video->SoLuotXem}}</span>
                                                <span><i class="fa fa-comments"></i></span>
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
                    <ul class="social-networks">
                            <div class="fb-share-button" data-href="http://localhost:81/MonNgonViet/public/chi-tiet-slide/{{$video->id}}/{{$video->TieuDeKhongDau}}.html" data-layout="button_count" data-size="small">
                                <a target="_blank" href="" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                    </ul>

                    <a class="print-button" href="javascript:window.print();">
                        <i class="fa fa-print"></i>
                    </a>
                </div>

                <div class="td-post-content">

                    <div class="td-post-featured-image">
                            <iframe width="560" height="500" src="https://www.youtube.com/embed/{{$video->LinkYoutube}}" frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                        <hr/>
                    </div>
                    {!!$video->NoiDung!!}
                    @foreach($footer as $f)
                    <div class="fb-comments" data-href="https://www.facebook.com/SmartPhone-Thanh-Phong-520022775180436/{{$video->id}}" data-numposts="5"></div>
                    @endforeach
                </div> 
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
                    <h2 class="section-title">Video mới nhất</h2>
                    <ul class="latest-news">
                        @foreach($videomoinhat as $vd)
                        <li class="col-md-12">
                            <div class="image">
                                <a href="blog-detail.html"></a>
                            <iframe width="90" height="100" src="https://www.youtube.com/embed/{{$vd->LinkYoutube}}" frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                            <ul class="top-info">
                                    <?php
                                    $thoigian=$vd->NgayTao; 
                                    $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                <li><i class="fa fa-calendar"></i>{{$dateM}}</li>
                            </ul>

                            <h3><a href="chi-tiet-video/{{$vd->id}}/{{$vd->TieuDeKhongDau}}.html">{{$vd->TieuDe}}</a></h3>
                        </li>

                        @endforeach
                    </ul>
                </div>
               
            </div>
        </div>
    </div>
</div>   
@endsection