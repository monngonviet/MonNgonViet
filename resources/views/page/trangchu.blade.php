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

                            {{-- Van Hoa Am Thuc --}}
                            <?php $i=0;  ?>
                            @foreach($theloaitc1 as $tt)
                            <?php 
                            $data=$tt->tintuc->where('HienThi',1)->sortbyDesc('createa_at')->take(3);
                            ?>
                            <div class="sidebar sidebar-mnv">
                            <h2
                            @if($i==0) 
                            class="title-news culinary-culture"
                            @else
                            class="title-news community"
                            @endif
                            >{{$tt->Ten}}</h2>
                                <ul class="latest-news sidebar-mnv-li">
                                        @foreach($data as $ttt)
                                    <li class="col-md-12">
                                    <h3><a href="tin-tuc/{{$ttt->id}}/{{$ttt->TieuDeKhongDau}}.html">{{$ttt->TieuDe}}</a>
                                        </h3>
                                        <div class="image">
                                            <a href="tin-tuc/{{$ttt->id}}/{{$ttt->TieuDeKhongDau}}.html"></a>
                                            <img src="upload/tintuc/{{$ttt->Hinh}}" alt="" />
                                        </div>
                                        <ul class="top-info">
                                            <div class="des" data-maxlength="100">
                                                <p>{!!$ttt->TomTat!!}</p>
                                            </div>
                                        </ul>
                                    </li>
                                     @endforeach
                                </ul>
                            </div>
                            <?php $i++;?>
                            @endforeach
                            
                            {{-- video --}}
                            <div class="sidebar sidebar-mnv">
                                    <h2 class="title-news video">video</h2>
                                    <?php $i=0; ?>
                                    @foreach($videonoibat as $vd)
									<div class="card">
                                            @if(isset($vd->LinkYoutube)) 
                                    <iframe width="415" height="300" src="https://www.youtube.com/embed/{{$vd->LinkYoutube}}" frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                            @else
                                            <video width="200"controls>
                                                    <source src="upload/video/{{$vd->Video}}" type="video/mp4">
                                                  </video>
                                            @endif
										<div class="card-body">
                                        <h3><a href="chi-tiet-video/{{$vd->id}}/{{$vd->TieuDeKhongDau}}.html">{{$vd->TieuDe}}</a>
                                            </h3>
                                            <div
                                            class="des"
                                            >	<p class="card-text"></p></div>
                                        </div>
                                    </div>
                                    <?php $i++; ?>
                                    @endforeach

									<div class="carousel slide" data-ride="carousel" data-type="multi"
										data-interval="3000" id="myCarousel1">
										<div class="carousel-inner">
                                            <?php $i=0;?> 
                                            @foreach($video as $vd)
                                            <div
                                            @if($i==0)
                                            class="item active"
                                            @else
                                            class="item"
                                            @endif>
												<div class="col-md-4 col-sm-6 col-xs-12">
                                                        @if(isset($vd->LinkYoutube))
                                             <iframe width="150" height="150" src="https://www.youtube.com/embed/{{$vd->LinkYoutube}}" frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>

                                                        {{-- {!!$vd->LinkYoutube!!} --}}
                                                      {{-- @else
                                                      <video width="200" height="200" controls>
                                                              <source src="upload/video/{{$vd->Video}}" type="video/mp4">
                                                            </video> --}}
                                                        @endif
													<a href="chi-tiet-video/{{$vd->id}}/{{$vd->TieuDeKhongDau}}.html">{{$vd->TieuDe}}</a>
												</div>
                                            </div>
                                            <?php $i++;?> 
                                            @endforeach
											{{-- <div class="item">
												<div class="col-md-4 col-sm-6 col-xs-12">
													<a href="#">
														<img src="http://placehold.it/100x100" class="img-responsive">
													</a>
													<a href="">Lorem ipsum dolor sit amet consectetur adipisicing
														elit.</a>
												</div>
											</div> --}}
									
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
                                   
                                <h3><a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">{{$tt->TieuDe}}</a>
                                    </h3>
                                    <div class="image">
                                        <a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html"></a>
                                    <img src="upload/tintuc/{{$tt->Hinh}}" alt="" />
                                    </div>

                                    <a href="fb.com"> <ul class="top-info" >
                                            <div class="des" data-maxlength="100">
                                                <p>{!!$tt->TomTat!!}</p>
                                            </div>
                                        </ul></a>
                                    
                                </li>
                                @endforeach
                            </ul>
                        </div>
  {{-- Làng nghề --}}
                        <?php $i=0;  ?>
                        @foreach($theloaitc as $tt)
                        <?php 
                        $data=$tt->tintuc->where('HienThi',1)->sortbyDesc('createa_at')->take(3);
                        ?>
                        <div class="sidebar sidebar-mnv">
                        <h2
                        @if($i==0) 
                        class="title-news villages"
                        @else
                        class="title-news times"
                        @endif
                        >{{$tt->Ten}}</h2>
                            <ul class="latest-news sidebar-mnv-li">
                                    @foreach($data as $ttt)
                                <li class="col-md-12">
                                <h3><a href="tin-tuc/{{$ttt->id}}/{{$ttt->TieuDeKhongDau}}.html">{{$ttt->TieuDe}}</a>
                                    </h3>
                                    <div class="image">
                                        <a href="tin-tuc/{{$ttt->id}}/{{$ttt->TieuDeKhongDau}}.html"></a>
                                        <img src="upload/tintuc/{{$ttt->Hinh}}" alt="" />
                                    </div>
                                    <ul class="top-info">
                                        <div class="des" data-maxlength="100">
                                            <p>{!!$ttt->TomTat!!}</p>
                                        </div>
                                    </ul>
                                </li>
                                 @endforeach
                            </ul>
                        </div>
                        <?php $i++;?>
                        @endforeach
                        
                        <div class="sidebar sidebar-mnv">
                            <h2 class="title-news popular">Phổ biến nhất</h2>
                            <ul class="latest-news sidebar-mnv-li">
                                @foreach($phobien as $pb)
                                <li class="col-md-12">
                                <h3><a href="tin-tuc/{{$pb->id}}/{{$pb->TieuDeKhongDau}}.html">{{$pb->TieuDe}}</a>
                                    </h3>
                                    <div class="image">
                                        <a href="tin-tuc/{{$pb->id}}/{{$pb->TieuDeKhongDau}}.html"></a>
                                        <img src="upload/tintuc/{{$pb->Hinh}}" alt="{{$pb->TieuDe}}" />
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
                                @endforeach
                            </ul>
                        </div>
                        @foreach($quangcao as $qc)
                      <a href="{{$qc->link3}}"><img src="upload/quangcao/{{$qc->Hinh3}}" alt=""></a>  
                        @endforeach
                    </div>
                </div>
                
                <div class="col-md-2">
                    @foreach($quangcao as $qc)
                   <a href="{{$qc->link1}}"><img src="upload/quangcao/{{$qc->Hinh1}}" alt=""></a> 
                    <a href="{{$qc->link2}}"><img src="upload/quangcao/{{$qc->Hinh2}}" alt=""></a>
                    @endforeach
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
 
