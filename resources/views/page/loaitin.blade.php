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
                                    href="https://monngonviet.com.vn/category/hoat-dong-cong-dong/">{{$loaitin->Ten}}</a></span>
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
                                            <!-- <div class="col-md-6">
                                                <div class="author-right">
                                                    <span><i class="fas fa-eye"></i>100</span>
                                                    <span><i class="fas fa-comments"></i>100</span>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </header>
                                {{-- @foreach($tintuc as $tl)
                                <ul class="td-category">
                                    
                                    @foreach($tl->loaitin as $ttt)
                                    <li class="entry-category cate-community">
                                        <a href="#">
                                            {{$ttt->Ten}}
                                        </a>
                                    </li>
                                     @endforeach
                                    
                                </ul>
                                @endforeach --}}
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit deleniti ducimus
                                    esse, doloremque repudiandae praesentium debitis ab vel velit recusandae atque
                                    ipsam, eos aut repellat quia porro, ut labore iure.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="td-pb-span12">
                    <div class="td_block_wrap td_block_big_grid_1 td_uid_9_5c9e1575a521e_rand td-grid-style-5 td-hover-1 td-big-grids td-pb-border-top td_block_template_1"
                        data-td-block-uid="td_uid_9_5c9e1575a521e">
                        <div id="td_uid_9_5c9e1575a521e" class="td_block_inner">
                            <div class="td-big-grid-wrapper">
                                <div
                                    class="td_module_mx5 td-animation-stack td-big-grid-post-0 td-big-grid-post td-big-thumb">
                                    <div class="td-module-thumb"><a
                                            href="https://monngonviet.com.vn/2018/08/06/mua-chay-sap-den-tan-huong-thuc-don-duong-sinh-lanh-ngon-cua-kfc-nhe/"
                                            rel="bookmark" class="td-image-wrap"
                                            title="Mùa Chay Sắp đến..Tận hưởng thực đơn dưỡng sinh lành ngon của KFC nhé"><img
                                                width="534" height="448"
                                                class="entry-thumb td-animation-stack-type0-2"
                                                src="https://monngonviet.com.vn/wp-content/uploads/2018/08/1-534x448.png"
                                                alt=""
                                                title="Mùa Chay Sắp đến..Tận hưởng thực đơn dưỡng sinh lành ngon của KFC nhé"></a>
                                    </div>
                                    <div class="td-meta-info-container">
                                        <div class="td-meta-align">
                                            <div class="td-big-grid-meta">
                                                <a href="https://monngonviet.com.vn/category/hoat-dong-cong-dong/"
                                                    class="td-post-category">Hoạt động &amp; Cộng đồng</a>
                                                <h3 class="entry-title td-module-title"><a
                                                        href="https://monngonviet.com.vn/2018/08/06/mua-chay-sap-den-tan-huong-thuc-don-duong-sinh-lanh-ngon-cua-kfc-nhe/"
                                                        rel="bookmark"
                                                        title="Mùa Chay Sắp đến..Tận hưởng thực đơn dưỡng sinh lành ngon của KFC nhé">Mùa
                                                        Chay Sắp đến..Tận hưởng thực đơn dưỡng sinh lành ngon của
                                                        KFC nhé</a></h3>
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
                                    <div
                                        class="td_module_mx6 td-animation-stack td-big-grid-post-1 td-big-grid-post td-small-thumb">
                                        <div class="td-module-thumb"><a
                                                href="https://monngonviet.com.vn/2018/08/01/ca-ri-chay-loanh-quanh-nhieu-chuyen/"
                                                rel="bookmark" class="td-image-wrap"
                                                title="Cà ri chay – loanh quanh nhiều chuyện"><img width="265"
                                                    height="198" class="entry-thumb td-animation-stack-type0-2"
                                                    src="https://monngonviet.com.vn/wp-content/uploads/2018/08/20597240_836370036514978_778655349813624032_n-265x198.jpg"
                                                    srcset="https://monngonviet.com.vn/wp-content/uploads/2018/08/20597240_836370036514978_778655349813624032_n-265x198.jpg 265w, https://monngonviet.com.vn/wp-content/uploads/2018/08/20597240_836370036514978_778655349813624032_n-80x60.jpg 80w"
                                                    sizes="(max-width: 265px) 100vw, 265px" alt=""
                                                    title="Cà ri chay – loanh quanh nhiều chuyện"></a></div>
                                        <div class="td-meta-info-container">
                                            <div class="td-meta-align">
                                                <div class="td-big-grid-meta">
                                                    <a href="https://monngonviet.com.vn/category/hoat-dong-cong-dong/"
                                                        class="td-post-category">Hoạt động &amp; Cộng đồng</a>
                                                    <h3 class="entry-title td-module-title"><a
                                                            href="https://monngonviet.com.vn/2018/08/01/ca-ri-chay-loanh-quanh-nhieu-chuyen/"
                                                            rel="bookmark"
                                                            title="Cà ri chay – loanh quanh nhiều chuyện">Cà ri chay
                                                            – loanh quanh nhiều chuyện</a></h3>
                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                    <div
                                        class="td_module_mx6 td-animation-stack td-big-grid-post-2 td-big-grid-post td-small-thumb">
                                        <div class="td-module-thumb"><a
                                                href="https://monngonviet.com.vn/2018/07/06/bao-my-khen-cap-vo-chong-viet-ban-mon-banh-bao-ngon-nhat-o-orlando/"
                                                rel="bookmark" class="td-image-wrap"
                                                title="Báo Mỹ khen cặp vợ chồng Việt bán món bánh bao ngon nhất ở Orlando"><img
                                                    width="265" height="198"
                                                    class="entry-thumb td-animation-stack-type0-2"
                                                    src="https://monngonviet.com.vn/wp-content/uploads/2018/07/36677479_1846460158750883_6183637103801270272_n-265x198.jpg"
                                                    srcset="https://monngonviet.com.vn/wp-content/uploads/2018/07/36677479_1846460158750883_6183637103801270272_n-265x198.jpg 265w, https://monngonviet.com.vn/wp-content/uploads/2018/07/36677479_1846460158750883_6183637103801270272_n-80x60.jpg 80w, https://monngonviet.com.vn/wp-content/uploads/2018/07/36677479_1846460158750883_6183637103801270272_n-534x400.jpg 534w"
                                                    sizes="(max-width: 265px) 100vw, 265px" alt=""
                                                    title="Báo Mỹ khen cặp vợ chồng Việt bán món bánh bao ngon nhất ở Orlando"></a>
                                        </div>
                                        <div class="td-meta-info-container">
                                            <div class="td-meta-align">
                                                <div class="td-big-grid-meta">
                                                    <a href="https://monngonviet.com.vn/category/hoat-dong-cong-dong/"
                                                        class="td-post-category">Hoạt động &amp; Cộng đồng</a>
                                                    <h3 class="entry-title td-module-title"><a
                                                            href="https://monngonviet.com.vn/2018/07/06/bao-my-khen-cap-vo-chong-viet-ban-mon-banh-bao-ngon-nhat-o-orlando/"
                                                            rel="bookmark"
                                                            title="Báo Mỹ khen cặp vợ chồng Việt bán món bánh bao ngon nhất ở Orlando">Báo
                                                            Mỹ khen cặp vợ chồng Việt bán món bánh bao ngon nhất ở
                                                            Orlando</a></h3>
                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                    <div
                                        class="td_module_mx6 td-animation-stack td-big-grid-post-3 td-big-grid-post td-small-thumb">
                                        <div class="td-module-thumb"><a
                                                href="https://monngonviet.com.vn/2018/07/05/den-singapore-trai-nghiem-le-hoi-am-thuc/"
                                                rel="bookmark" class="td-image-wrap"
                                                title="Đến Singapore, trải nghiệm Lễ hội ẩm thực"><img width="265"
                                                    height="198" class="entry-thumb td-animation-stack-type0-2"
                                                    src="https://monngonviet.com.vn/wp-content/uploads/2018/07/Hinh-4-1sing-265x198.jpg"
                                                    srcset="https://monngonviet.com.vn/wp-content/uploads/2018/07/Hinh-4-1sing-265x198.jpg 265w, https://monngonviet.com.vn/wp-content/uploads/2018/07/Hinh-4-1sing-80x60.jpg 80w"
                                                    sizes="(max-width: 265px) 100vw, 265px" alt=""
                                                    title="Đến Singapore, trải nghiệm Lễ hội ẩm thực"></a></div>
                                        <div class="td-meta-info-container">
                                            <div class="td-meta-align">
                                                <div class="td-big-grid-meta">
                                                    <a href="https://monngonviet.com.vn/category/hoat-dong-cong-dong/"
                                                        class="td-post-category">Hoạt động &amp; Cộng đồng</a>
                                                    <h3 class="entry-title td-module-title"><a
                                                            href="https://monngonviet.com.vn/2018/07/05/den-singapore-trai-nghiem-le-hoi-am-thuc/"
                                                            rel="bookmark"
                                                            title="Đến Singapore, trải nghiệm Lễ hội ẩm thực">Đến
                                                            Singapore, trải nghiệm Lễ hội ẩm thực</a></h3>
                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                    <div
                                        class="td_module_mx6 td-animation-stack td-big-grid-post-4 td-big-grid-post td-small-thumb">
                                        <div class="td-module-thumb"><a
                                                href="https://monngonviet.com.vn/2018/06/25/thoa-suc-ngam-he-cung-carlo-rino-va-vi-vu-dao-ngoc-phu-quoc/"
                                                rel="bookmark" class="td-image-wrap"
                                                title="Thỏa sức ngắm hè cùng Carlo Rino và vi vu Đảo Ngọc Phú Quốc"><img
                                                    width="265" height="198"
                                                    class="entry-thumb td-animation-stack-type0-2"
                                                    src="https://monngonviet.com.vn/wp-content/themes/Newspaper/images/no-thumb/td_265x198.png"
                                                    alt=""></a></div>
                                        <div class="td-meta-info-container">
                                            <div class="td-meta-align">
                                                <div class="td-big-grid-meta">
                                                    <a href="https://monngonviet.com.vn/category/hoat-dong-cong-dong/"
                                                        class="td-post-category">Hoạt động &amp; Cộng đồng</a>
                                                    <h3 class="entry-title td-module-title"><a
                                                            href="https://monngonviet.com.vn/2018/06/25/thoa-suc-ngam-he-cung-carlo-rino-va-vi-vu-dao-ngoc-phu-quoc/"
                                                            rel="bookmark"
                                                            title="Thỏa sức ngắm hè cùng Carlo Rino và vi vu Đảo Ngọc Phú Quốc">Thỏa
                                                            sức ngắm hè cùng Carlo Rino và vi vu Đảo Ngọc Phú
                                                            Quốc</a></h3>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


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
                            @foreach($tintuc as $tt)
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
                            {{-- <div class="item col-md-6">
                                <!-- Set width to 4 columns for grid view mode only -->
                                <div class="image">
                                    <a href="blog-detail.html">
                                        <span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
                                    </a>
                                    <img src="http://placehold.it/766x515" alt="">
                                </div>
                                <div class="tag"><i class="fa fa-film"></i></div>
                                <div class="info-blog">
                                    <ul class="top-info">
                                        <li><i class="fa fa-calendar"></i> July 24, 2014</li>
                                        <li><i class="fa fa-comments-o"></i> 4</li>
                                        <li><i class="fa fa-tags"></i> Tips, Mortgage</li>
                                    </ul>
                                    <h3>
                                        <a href="blog-detail.html">7 tips to get the best mortgage.</a>
                                    </h3>
                                    <p>Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac
                                        pellentesque fringilla, tortor libero condimen. Aliquam fermem tum nulla
                                        felis, sed molestie libero porttitor in.</p>
                                </div>
                            </div> --}}
                        </div>

                        {{-- <div class="row">
                            <div class="item col-md-6">
                                <!-- Set width to 4 columns for grid view mode only -->
                                <div class="image">
                                    <a href="blog-detail.html">
                                        <span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
                                    </a>
                                    <img src="http://placehold.it/766x515" alt="">
                                </div>
                                <div class="tag"><i class="fa fa-file-text"></i></div>
                                <div class="info-blog">
                                    <ul class="top-info">
                                        <li><i class="fa fa-calendar"></i> July 05, 2014</li>
                                        <li><i class="fa fa-comments-o"></i> 1</li>
                                        <li><i class="fa fa-tags"></i> Location, Price, House</li>
                                    </ul>
                                    <h3>
                                        <a href="blog-detail.html">House, location or price: What's the most
                                            important factor?</a>
                                    </h3>
                                    <p>Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac
                                        pellentesque fringilla, tortor libero condimen. Aliquam fermem tum nulla
                                        felis, sed molestie libero porttitor in.</p>
                                </div>
                            </div>

                            <div class="item col-md-6">
                                <!-- Set width to 4 columns for grid view mode only -->
                                <div class="image">
                                    <a href="blog-detail.html">
                                        <span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
                                    </a>
                                    <img src="http://placehold.it/766x515" alt="">
                                </div>
                                <div class="tag"><i class="fa fa-file-text"></i></div>
                                <div class="info-blog">
                                    <ul class="top-info">
                                        <li><i class="fa fa-calendar"></i> June 27, 2014</li>
                                        <li><i class="fa fa-comments-o"></i> 3</li>
                                        <li><i class="fa fa-tags"></i> Sell, Best Price, Real Estate</li>
                                    </ul>
                                    <h3>
                                        <a href="blog-detail.html">Selling your home for the best price.</a>
                                    </h3>
                                    <p>Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac
                                        pellentesque fringilla, tortor libero condimen. Aliquam fermem tum nulla
                                        felis, sed molestie libero porttitor in.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="item col-md-6">
                                <!-- Set width to 4 columns for grid view mode only -->
                                <div class="image">
                                    <a href="blog-detail.html">
                                        <span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
                                    </a>
                                    <img src="http://placehold.it/766x515" alt="">
                                </div>
                                <div class="tag"><i class="fa fa-film"></i></div>
                                <div class="info-blog">
                                    <ul class="top-info">
                                        <li><i class="fa fa-calendar"></i> June 22, 2014</li>
                                        <li><i class="fa fa-comments-o"></i> 1</li>
                                        <li><i class="fa fa-tags"></i> Rent, Property</li>
                                    </ul>
                                    <h3>
                                        <a href="blog-detail.html">So you've decided to rent out your home?</a>
                                    </h3>
                                    <p>Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac
                                        pellentesque fringilla, tortor libero condimen. Aliquam fermem tum nulla
                                        felis, sed molestie libero porttitor in.</p>
                                </div>
                            </div>

                            <div class="item col-md-6">
                                <!-- Set width to 4 columns for grid view mode only -->
                                <div class="image">
                                    <a href="blog-detail.html">
                                        <span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
                                    </a>
                                    <img src="http://placehold.it/766x515" alt="">
                                </div>
                                <div class="tag"><i class="fa fa-file-text"></i></div>
                                <div class="info-blog">
                                    <ul class="top-info">
                                        <li><i class="fa fa-calendar"></i> June 16, 2014</li>
                                        <li><i class="fa fa-comments-o"></i> 2</li>
                                        <li><i class="fa fa-tags"></i> Market, Deals, New York</li>
                                    </ul>
                                    <h3>
                                        <a href="blog-detail.html">On the market: Best deals in New York.</a>
                                    </h3>
                                    <p>Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac
                                        pellentesque fringilla, tortor libero condimen. Aliquam fermem tum nulla
                                        felis, sed molestie libero porttitor in.</p>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                    <!-- END PROPERTY LISTING -->


                    <!-- BEGIN PAGINATION -->
                    <div >
                            {!!$tatcatintuc->links();!!}
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