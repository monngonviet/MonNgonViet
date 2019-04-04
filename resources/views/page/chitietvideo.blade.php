@extends('layout.index1')
@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="td-crumb-container">
                    <div class="entry-crumbs">
                        <span>
                            <a title="" class="entry-crumb" href="https://monngonviet.com.vn/">Home
                            </a>
                        </span>
                        <i class="fa fa-angle-right"> </i>
                        <span>
                            <a title="View all posts in Hoạt động &amp;amp; Cộng đồng" class="entry-crumb"
                                href="https://monngonviet.com.vn/category/hoat-dong-cong-dong/">Video</a></span> <i class="fa fa-angle-right"> </i><span><a
                                title="View all posts in Ẩm thực thế giới" class="entry-crumb"
                                href="https://monngonviet.com.vn/category/hoat-dong-cong-dong/am-thuc-the-gioi/">{{$video->TieuDe}}</a></span> 
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

                <div class="td-post-content">

                    <div class="td-post-featured-image"><a
                            href="https://monngonviet.com.vn/wp-content/uploads/2018/08/1.png" data-caption=""
                            class="td-modal-image">
                            <iframe width="560" height="500" src="https://www.youtube.com/embed/{{$video->LinkYoutube}}" frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                        <hr/>
                        {!!$video->NoiDung!!}
                    </div>
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


{{-- 
                    <div class="td-block-row td-post-next-prev">
                        <div class="td-block-span6 td-post-prev-post">
                            <div class="td-post-next-prev-content"><span>Previous article</span><a
                                    href="https://monngonviet.com.vn/2018/08/01/ca-ri-chay-loanh-quanh-nhieu-chuyen/">Cà
                                    ri chay – loanh quanh nhiều chuyện</a></div>
                        </div>
                        <div class="td-next-prev-separator"></div>
                    </div>
                    <div class="author-box-wrap">
                        <a href="https://monngonviet.com.vn/author/mnadmin/"><img alt=""
                                src="https://secure.gravatar.com/avatar/50c8510a8056a31c519bb2d0ccf74ade?s=96&amp;d=mm&amp;r=g"
                                srcset="https://secure.gravatar.com/avatar/50c8510a8056a31c519bb2d0ccf74ade?s=192&amp;d=mm&amp;r=g 2x"
                                class="avatar avatar-96 photo td-animation-stack-type0-1" height="96"
                                width="96">
                        </a>
                        <div class="desc">
                            <div class="td-author-name vcard author">
                                <span class="fn">
                                    <a href="https://monngonviet.com.vn/author/mnadmin/">mnadmin</a>
                                </span>
                            </div>
                            <div class="td-author-description"></div>
                            <div class="td-author-social"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <span class="td-page-meta" itemprop="author" itemscope=""
                        itemtype="https://schema.org/Person">
                        <meta itemprop="name" content="mnadmin"></span>
                    <meta itemprop="datePublished" content="2018-08-06T04:05:46+00:00">
                    <meta itemprop="dateModified" content="2018-08-06T04:05:46+00:00">
                    <meta itemscope="" itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage"
                        itemid="https://monngonviet.com.vn/2018/08/06/mua-chay-sap-den-tan-huong-thuc-don-duong-sinh-lanh-ngon-cua-kfc-nhe/">
                    <span class="td-page-meta" itemprop="publisher" itemscope=""
                        itemtype="https://schema.org/Organization"><span class="td-page-meta" itemprop="logo"
                            itemscope="" itemtype="https://schema.org/ImageObject">
                            <meta itemprop="url"
                                content="https://monngonviet.com.vn/wp-content/uploads/2018/05/logo-mon-ngon-viet.png">
                        </span>
                        <meta itemprop="name" content="Món Ngon Việt"></span>
                    <meta itemprop="headline "
                        content="Mùa Chay Sắp đến..Tận hưởng thực đơn dưỡng sinh lành ngon của KFC nhé">
                    <span class="td-page-meta" itemprop="image" itemscope=""
                        itemtype="https://schema.org/ImageObject">
                        <meta itemprop="url"
                            content="https://monngonviet.com.vn/wp-content/uploads/2018/08/1.png">
                        <meta itemprop="width" content="556">
                        <meta itemprop="height" content="448"></span> --}}
                </footer>
                </article>
            </div>

            <div class="sidebar col-md-4">
                <div class="details-left-img"><img src="assets/images/qc4.jpg" alt=""></div>
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