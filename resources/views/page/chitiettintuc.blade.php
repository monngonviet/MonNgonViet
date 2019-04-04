@extends('layout.index1')
@section('content')
<div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="td-crumb-container">
                        <div class="entry-crumbs">
                            <span>
                                <a title="" class="entry-crumb" href="https://monngonviet.com.vn/">Trang chủ
                                </a>
                            </span>
                            <i class="fa fa-angle-right"> </i>
                       
                            <span>
                                
                                <a title="{{$tintuc->loaitin->Ten}}" class="entry-crumb"
                            href="loai-tin/{{$tintuc->loaitin->id}}/{{$tintuc->loaitin->TenKhongDau}}">{{$tintuc->loaitin->Ten}}</a></span> <i class="fa fa-angle-right"> </i><span><a
                                    title="View all posts in Ẩm thực thế giới" class="entry-crumb"
                                    href="https://monngonviet.com.vn/category/hoat-dong-cong-dong/am-thuc-the-gioi/"></a>{{$tintuc->TieuDe}}</span> <i class=""> </i> <span
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
                                                    <span><i class="fa fa-comments"></i>100</span>
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
                            <li><a target="_blank"
                                    href="http://www.facebook.com/sharer.php?s=100&amp;p%5Burl%5D=http%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fcozy%2Fblog-detail.html%3Ffb%3Dtrue&amp;p%5Bimages%5D%5B0%5D=http%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fcozy%2Fimages%2Fnews-img1.jpg&amp;p%5Btitle%5D=Cozy%20Blog%20Post"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank"
                                    href="https://twitter.com/intent/tweet?url=http://www.wiselythemes.com/html/cozy/blog-detail.html&amp;text=Cozy%20Blog%20Post"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank"
                                    href="https://plus.google.com/share?url=http://www.wiselythemes.com/html/cozy/blog-detail.html"><i
                                        class="fa fa-google"></i></a></li>
                            <li><a target="_blank"
                                    href="http://pinterest.com/pin/create/button/?url=http://www.wiselythemes.com/html/cozy/blog-detail.html&amp;description=Cozy%20Blog%20Post&amp;media=http%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fcozy%2Fimages%2Fnews-img1.jpg"><i
                                        class="fa fa-pinterest"></i></a></li>
                            <li><a
                                    href="mailto:?subject=Check%20out%20this%20blog%20post%20from%20Cozy%20Real%20Estate!&amp;body=http://www.wiselythemes.com/html/cozy/blog-detail.html"><i
                                        class="fa fa-envelope"></i></a></li>
                        </ul>

                        <a class="print-button" href="javascript:window.print();">
                            <i class="fa fa-print"></i>
                        </a>
                    </div>

                    <div class="td-post-content">
                        {!!$tintuc->NoiDung!!}
                    </div>

                    <footer>

                        <div class="td-post-source-tags">
                        </div>
                        <hr>
                        <div class="share-wraper col-sm-12 clearfix">
                            <h5>Share this Post:</h5>
                            <ul class="social-networks">
                                <li><a target="_blank"
                                        href="http://www.facebook.com/sharer.php?s=100&amp;p%5Burl%5D=http%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fcozy%2Fblog-detail.html%3Ffb%3Dtrue&amp;p%5Bimages%5D%5B0%5D=http%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fcozy%2Fimages%2Fnews-img1.jpg&amp;p%5Btitle%5D=Cozy%20Blog%20Post"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank"
                                        href="https://twitter.com/intent/tweet?url=http://www.wiselythemes.com/html/cozy/blog-detail.html&amp;text=Cozy%20Blog%20Post"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank"
                                        href="https://plus.google.com/share?url=http://www.wiselythemes.com/html/cozy/blog-detail.html"><i
                                            class="fa fa-google"></i></a></li>
                                <li><a target="_blank"
                                        href="http://pinterest.com/pin/create/button/?url=http://www.wiselythemes.com/html/cozy/blog-detail.html&amp;description=Cozy%20Blog%20Post&amp;media=http%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fcozy%2Fimages%2Fnews-img1.jpg"><i
                                            class="fa fa-pinterest"></i></a></li>
                                <li><a
                                        href="mailto:?subject=Check%20out%20this%20blog%20post%20from%20Cozy%20Real%20Estate!&amp;body=http://www.wiselythemes.com/html/cozy/blog-detail.html"><i
                                            class="fa fa-envelope"></i></a></li>
                            </ul>

                            <a class="print-button" href="javascript:window.print();">
                                <i class="fa fa-print"></i>
                            </a>
                        </div>



                    </footer> 
                    </article>
                </div>
                <div class="sidebar col-md-4">
                    <div class="details-left-img"><img src="assets/images/qc4.jpg" alt=""></div>
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

                                <h3><a href="tin-tuc/{{$tlq->id}}/{{$tlq->TieuDeKhongDau}}.html">{{$tlq->TieuDe}} </a></h3>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <div class="details-news-read">
                        <h2 class="section-title">Bài Viết Mới Nhất</h2>
                        <ul class="latest-news">
                                @foreach($tintucmoinhat as $tt)
                                <li class="col-md-12">
                                <h3><a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">{{$tt->TieuDe}}</a></h3>
                                    <ul class="top-info">
                                            <?php
                                            $thoigian=$tt->NgayTao; 
                                            $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                        <li><strong>admin </strong> - <i class="fa fa-calendar"></i> {{$dateM}}</li>
                                        <div class="td-module-comments"><a href="">0</a></div>
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection