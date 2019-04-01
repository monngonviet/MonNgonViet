@extends('layout.index')
@section('content')
<div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 border-top-row padding-none-mnv">
                    <!-- list item right -->
                    {{-- Tất cả tin tức --}}
                    <div class="col-md-6">
                        <div class="sidebar sidebar-mnv">
                            <ul class="latest-news sidebar-mnv-li">
                                @foreach($tatcatintuc as $tt)
                                <li class="col-md-12">
                                    <h3>
                                        <a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">{{$tt->TieuDe}}
                                        </a>
                                    </h3>
                                    <div class="image">
                                        <a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html"></a>
                                        <img src="upload/tintuc/{{$tt->Hinh}}" alt="" />
                                    </div>

                                    <ul class="top-info">
                                        <div class="des" data-maxlength="100">
                                            <p>{!!$tt->TomTat!!}
                                            </p>
                                        </div>
                                    </ul>
                                </li>

                               @endforeach
                                <div >
                                        {!!$tatcatintuc->links();!!}
                                </div>
                            </ul>
                            <div class="sidebar sidebar-mnv">
                                <h2 class="title-news culinary-culture">Văn hoá ẩm thực</h2>
                                <ul class="latest-news sidebar-mnv-li">

                                    <li class="col-md-12">
                                        <h3><a href="blog-detail.html">How to get your dream property for the best
                                                price?</a>
                                        </h3>
                                        <div class="image">
                                            <a href="blog-detail.html"></a>
                                            <img src="http://placehold.it/100x100" alt="" />
                                        </div>

                                        <ul class="top-info">
                                            <li>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                                    dignissimos facilis ea debitis. Odio labore facilis totam eaque
                                                    nam.
                                                    Accusamus quisquam earum nobis sequi suscipit amet inventore
                                                    quaerat
                                                    iusto saepe.</p>
                                            </li>
                                        </ul>


                                    </li>
                                    <li class="col-md-12">
                                        <h3><a href="blog-detail.html">7 tips to get the best mortgage.</a></h3>

                                        <div class="image">
                                            <a href="blog-detail.html"></a>
                                            <img src="http://placehold.it/100x100" alt="" />
                                        </div>

                                        <ul class="top-info">
                                            <li>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                                                    illum?
                                                    Iste asperiores maxime molestiae distinctio at doloremque in,
                                                    eum
                                                    hic
                                                    deleniti ea quas culpa optio quidem amet sed suscipit
                                                    repudiandae!
                                                </p>
                                            </li>
                                        </ul>

                                    </li>
                                    <li class="col-md-12">
                                        <h3><a href="blog-detail.html">House, location or price: What's the most
                                                important
                                                factor?</a></h3>
                                        <div class="image">
                                            <a href="blog-detail.html"></a>
                                            <img src="http://placehold.it/100x100" alt="" />
                                        </div>

                                        <ul class="top-info">
                                            <li>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quae
                                                    autem
                                                    exercitationem dolor cumque laudantium, ratione eum dolorem?
                                                    Quaerat, a
                                                    voluptas. Pariatur atque voluptas cum numquam magni qui
                                                    repellendus
                                                    quisquam.</p>
                                            </li>
                                        </ul>


                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar sidebar-mnv">
                                <h2 class="title-news community">Hoạt động cộng đồng</h2>
                                <ul class="latest-news sidebar-mnv-li">
                                    <li class="col-md-12">
                                        <h3><a href="blog-detail.html">How to get your dream property for the best
                                                price?</a>
                                        </h3>
                                        <div class="image">
                                            <a href="blog-detail.html"></a>
                                            <img src="http://placehold.it/100x100" alt="" />
                                        </div>

                                        <ul class="top-info">
                                            <li>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                                    dignissimos facilis ea debitis. Odio labore facilis totam eaque
                                                    nam.
                                                    Accusamus quisquam earum nobis sequi suscipit amet inventore
                                                    quaerat
                                                    iusto saepe.</p>
                                            </li>
                                        </ul>


                                    </li>
                                    <li class="col-md-12">
                                        <h3><a href="blog-detail.html">7 tips to get the best mortgage.</a></h3>

                                        <div class="image">
                                            <a href="blog-detail.html"></a>
                                            <img src="http://placehold.it/100x100" alt="" />
                                        </div>

                                        <ul class="top-info">
                                            <li>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                                                    illum?
                                                    Iste asperiores maxime molestiae distinctio at doloremque in,
                                                    eum
                                                    hic
                                                    deleniti ea quas culpa optio quidem amet sed suscipit
                                                    repudiandae!
                                                </p>
                                            </li>
                                        </ul>

                                    </li>
                                    <li class="col-md-12">
                                        <h3><a href="blog-detail.html">House, location or price: What's the most
                                                important
                                                factor?</a></h3>
                                        <div class="image">
                                            <a href="blog-detail.html"></a>
                                            <img src="http://placehold.it/100x100" alt="" />
                                        </div>

                                        <ul class="top-info">
                                            <li>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quae
                                                    autem
                                                    exercitationem dolor cumque laudantium, ratione eum dolorem?
                                                    Quaerat, a
                                                    voluptas. Pariatur atque voluptas cum numquam magni qui
                                                    repellendus
                                                    quisquam.</p>
                                            </li>
                                        </ul>


                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar sidebar-mnv">
                                <h2 class="title-news video">video</h2>
                                <div class="card">
                                    <img class="card-img-top"
                                        src="assets/images/nhung-mon-ngon-la-mieng-lam-tu-hoa-o-viet-nam-324x235.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h3><a href="blog-detail.html">How to get your dream property for the best
                                                price?</a>
                                        </h3>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="carousel slide" data-ride="carousel" data-type="multi"
                                    data-interval="3000" id="myCarousel1">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <a href="#">
                                                    <img src="http://placehold.it/100x100" class="img-responsive">
                                                </a>
                                                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit.</a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <a href="#">
                                                    <img src="http://placehold.it/100x100" class="img-responsive">
                                                </a>
                                                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit.</a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <a href="#">
                                                    <img src="http://placehold.it/100x100" class="img-responsive">
                                                </a>
                                                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit.</a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <a href="#">
                                                    <img src="http://placehold.it/100x100													class="
                                                        img-responsive">
                                                </a>
                                                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit.</a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-4 col-sm-6 col-xs-12"><a href="#">
                                                    <img src="http://placehold.it/100x100" class="img-responsive">
                                                </a>
                                                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit.</a>
                                            </div>

                                        </div>
                                        <div class="item">
                                            <div class="col-md-4 col-sm-6 col-xs-12"><a href="#">
                                                    <img src="http://placehold.it/100x100" class="img-responsive">
                                                </a>
                                                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit.</a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <a href="#">
                                                    <img src="http://placehold.it/100x100													class="
                                                        img-responsive">
                                                </a>
                                                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit.</a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <a href="#">
                                                    <img src="http://placehold.it/100x100" class="img-responsive">
                                                </a>
                                                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><i
                                            class="glyphicon glyphicon-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#myCarousel1" data-slide="next"><i
                                            class="glyphicon glyphicon-chevron-right"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- list item left -->
                    {{-- Tin tức nổi bật --}}
                    <div class="col-md-6 border-left-right ">
                        <div class="sidebar sidebar-mnv">

                            <h2 class="title-news">Tin tức nổi bật</h2>
                            <ul class="latest-news sidebar-mnv-li">
                                    @foreach($tinnoibat as $tt)
                                <li class="col-md-12">
                                   
                                <h3><a href="blog-detail.html">{{$tt->TieuDe}}</a>
                                    </h3>
                                    <div class="image">
                                        <a href="blog-detail.html"></a>
                                    <img src="upload/tintuc/{{$tt->Hinh}}" alt="" />
                                    </div>

                                    <a href="fb.com"> <ul class="top-info" >
                                            <div class="des" data-maxlength="100">
                                                <p>{!!$tt->TomTat!!}</p>
                                            </div>
                                        </ul></a>
                                    
                                </li>
                                @endforeach
                               {{-- Làng nghề --}}
                            </ul>
                        </div>

                        <div class="sidebar sidebar-mnv">
                            @foreach($theloailangnghe as $tt)
                        <h2 class="title-news villages">{{$tt->Ten}}</h2>
                            <ul class="latest-news sidebar-mnv-li">
                                    @foreach($tt->loaitin as $lt)
                                    @foreach($lt->tintuc as $ttt)
                                <li class="col-md-12">
                                <h3><a href="blog-detail.html">{{$ttt->TieuDe}}</a>
                                    </h3>
                                    <div class="image">
                                        <a href="blog-detail.html"></a>
                                        <img src="upload/tintuc/{{$ttt->Hinh}}" alt="" />
                                    </div>
                                    <ul class="top-info">
                                        <div class="des" data-maxlength="100">
                                            <p>{!!$ttt->TomTat!!}</p>
                                        </div>
                                    </ul>
                                    @endforeach
                                </li>
                                 @endforeach
                               
                            </ul>
                            @endforeach
                       
                        </div>


                        
                        <div class="sidebar sidebar-mnv">
                            <h2 class="title-news times">ẩm thực xưa và nay</h2>
                            <ul class="latest-news sidebar-mnv-li">

                                <li class="col-md-12">
                                    <h3><a href="blog-detail.html">How to get your dream property for the best
                                            price?</a>
                                    </h3>
                                    <div class="image">
                                        <a href="blog-detail.html"></a>
                                        <img src="http://placehold.it/100x100" alt="" />
                                    </div>

                                    <ul class="top-info">
                                        <li>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                                dignissimos facilis ea debitis. Odio labore facilis totam eaque nam.
                                                Accusamus quisquam earum nobis sequi suscipit amet inventore quaerat
                                                iusto saepe.</p>
                                        </li>
                                    </ul>


                                </li>
                                <li class="col-md-12">
                                    <h3><a href="blog-detail.html">7 tips to get the best mortgage.</a></h3>

                                    <div class="image">
                                        <a href="blog-detail.html"></a>
                                        <img src="http://placehold.it/100x100" alt="" />
                                    </div>

                                    <ul class="top-info">
                                        <li>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, illum?
                                                Iste asperiores maxime molestiae distinctio at doloremque in, eum
                                                hic
                                                deleniti ea quas culpa optio quidem amet sed suscipit repudiandae!
                                            </p>
                                        </li>
                                    </ul>

                                </li>
                                <li class="col-md-12">
                                    <h3><a href="blog-detail.html">House, location or price: What's the most
                                            important
                                            factor?</a></h3>
                                    <div class="image">
                                        <a href="blog-detail.html"></a>
                                        <img src="http://placehold.it/100x100" alt="" />
                                    </div>

                                    <ul class="top-info">
                                        <li>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quae
                                                autem
                                                exercitationem dolor cumque laudantium, ratione eum dolorem?
                                                Quaerat, a
                                                voluptas. Pariatur atque voluptas cum numquam magni qui repellendus
                                                quisquam.</p>
                                        </li>
                                    </ul>


                                </li>
                            </ul>
                        </div>
                        <div class="sidebar sidebar-mnv">
                            <h2 class="title-news events">tin tức sự kiện</h2>
                            <ul class="latest-news sidebar-mnv-li">

                                <li class="col-md-12">
                                    <h3><a href="blog-detail.html">How to get your dream property for the best
                                            price?</a>
                                    </h3>
                                    <div class="image">
                                        <a href="blog-detail.html"></a>
                                        <img src="http://placehold.it/100x100" alt="" />
                                    </div>

                                    <ul class="top-info">
                                        <li>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                                dignissimos facilis ea debitis. Odio labore facilis totam eaque nam.
                                                Accusamus quisquam earum nobis sequi suscipit amet inventore quaerat
                                                iusto saepe.</p>
                                        </li>
                                    </ul>


                                </li>
                                <li class="col-md-12">
                                    <h3><a href="blog-detail.html">7 tips to get the best mortgage.</a></h3>

                                    <div class="image">
                                        <a href="blog-detail.html"></a>
                                        <img src="http://placehold.it/100x100" alt="" />
                                    </div>

                                    <ul class="top-info">
                                        <li>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, illum?
                                                Iste asperiores maxime molestiae distinctio at doloremque in, eum
                                                hic
                                                deleniti ea quas culpa optio quidem amet sed suscipit repudiandae!
                                            </p>
                                        </li>
                                    </ul>

                                </li>
                                <li class="col-md-12">
                                    <h3><a href="blog-detail.html">House, location or price: What's the most
                                            important
                                            factor?</a></h3>
                                    <div class="image">
                                        <a href="blog-detail.html"></a>
                                        <img src="http://placehold.it/100x100" alt="" />
                                    </div>

                                    <ul class="top-info">
                                        <li>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quae
                                                autem
                                                exercitationem dolor cumque laudantium, ratione eum dolorem?
                                                Quaerat, a
                                                voluptas. Pariatur atque voluptas cum numquam magni qui repellendus
                                                quisquam.</p>
                                        </li>
                                    </ul>


                                </li>
                            </ul>
                        </div>
                        <div class="sidebar sidebar-mnv">
                            <h2 class="title-news popular">Phổ biến nhất</h2>
                            <ul class="latest-news sidebar-mnv-li">

                                <li class="col-md-12">
                                    <h3><a href="blog-detail.html">How to get your dream property for the best
                                            price?</a>
                                    </h3>
                                    <div class="image">
                                        <a href="blog-detail.html"></a>
                                        <img src="http://placehold.it/100x100" alt="" />
                                    </div>

                                    <ul class="top-info">
                                        <li>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                                dignissimos facilis ea debitis. Odio labore facilis totam eaque nam.
                                                Accusamus quisquam earum nobis sequi suscipit amet inventore quaerat
                                                iusto saepe.</p>
                                        </li>
                                    </ul>


                                </li>
                                <li class="col-md-12">
                                    <h3><a href="blog-detail.html">7 tips to get the best mortgage.</a></h3>

                                    <div class="image">
                                        <a href="blog-detail.html"></a>
                                        <img src="http://placehold.it/100x100" alt="" />
                                    </div>

                                    <ul class="top-info">
                                        <li>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, illum?
                                                Iste asperiores maxime molestiae distinctio at doloremque in, eum
                                                hic
                                                deleniti ea quas culpa optio quidem amet sed suscipit repudiandae!
                                            </p>
                                        </li>
                                    </ul>

                                </li>
                                <li class="col-md-12">
                                    <h3><a href="blog-detail.html">House, location or price: What's the most
                                            important
                                            factor?</a></h3>
                                    <div class="image">
                                        <a href="blog-detail.html"></a>
                                        <img src="http://placehold.it/100x100" alt="" />
                                    </div>

                                    <ul class="top-info">
                                        <li>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quae
                                                autem
                                                exercitationem dolor cumque laudantium, ratione eum dolorem?
                                                Quaerat, a
                                                voluptas. Pariatur atque voluptas cum numquam magni qui repellendus
                                                quisquam.</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <img src="assets/images/qc3.jpg" alt="">
                    </div>
                </div>

                <div class="col-md-2">
                    <img src="assets/images/qc1.jpg" alt="">
                    <img src="assets/images/qc2.jpg" alt="">

                </div>
            </div>
        </div>
    </div>

    @endsection
          @section('script')
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
 
