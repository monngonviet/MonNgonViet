@include('layout.header2')
{{-- code --}}

<!--end columns-->
<?php 
function doimau($str,$tukhoa)
{
return str_replace($tukhoa,"<span style='color:reb;'>$tukhoa</span>", $str);
}
?>
<div id="columns" class="columns-container">
				<!-- container -->
				<div class="container">
					<div class="row">
						<div id="center_column" class="col-lg-9 col-md-9">
							<div class="blog-posts clearfix">
                            
								<div class="row">
                                <!-- danhsachloaitin -->
                                  @foreach($tintuc as $tt)
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12">
										<div class="post post-medium">
											<div class="row">
												<div class="col-lg-5 col-md-5">
													<div class="post-image">
														<a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">
															<img src="upload/tintuc/{{$tt->Hinh}}" alt="" class="img-responsive">
														</a>
													</div>
												</div>
												<div class="col-lg-7 col-md-7">
													<div class="post-content">
														<h4 class="title_block"><a href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html" title="{{$tt->TieuDe}}">{!!doimau($tt->TieuDe,$tukhoa)!!}</a></h4>
														<div class="post-meta">
															<!-- <span class="post-tip"><span class="icon icon-folder"></span>Tip &amp; trick</span> -->
                                                            <span style="font-size: 14px;"class="comment"><em class="fa fa-eye"></em> {{$tt->SoLuotXem}}</span>
														</div><!-- end post-meta -->
														<div class="des" data-maxlength="200" >
															<p>{!!$tt->TomTat!!}</p>
														</div>
                                                        
														<div class="post-meta">
															<span class="post-date"><span class="icon icon-clock-outline"></span>{{$tt->created_at}}</span>
															<a class="btn btn-default" href="tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html" title="Read more">Xem thêm<i class="zmdi zmdi-chevron-right"></i></a>
														</div><!-- end post-meta -->
													</div>
												</div>
											</div>
										</div><!-- end post -->
									</div>
                                    
								@endforeach
                                
								</div><!-- end row -->
								<div class="content_sortPagiBar bottom clearfix">
								{!!$tintuc->links()!!}
								</div><!-- end content_sortPagiBar -->
							</div><!-- end blog-posts -->
						</div><!-- end center_column -->
						<div id="right_column" class="sidebar col-lg-3 col-md-3">
							<div id="blog-search" class="block blog-search">
								<h4 class="title_block">Tìm kiếm</h4>
								<div class="block_content" style="">
									<form id="blogsearch" action="timkiem" method="post">
									<input type="hidden" name="_token" value="{{csrf_token()}}"/>	
									<div class="input-group">
											<input class="search_query form-control" type="text" id="search_query_blog" name="tukhoa" placeholder="Search" value="" autocomplete="off">
											<div class="input-group-btn">
												<button type="submit" name="submit_search" class="btn button"><i class="fa fa-search"></i></button> 
											</div>
										</div>
									</form>
								</div>
							</div><!-- end blog-search -->
							<div id="categories_blog_menu" class="block blog-menu">
								<h4 class="title_block">Top Địa Điểm</h4>
								<div class="block_content" style="">
									<ul class="list-block">
                                        @foreach($danhsachloaitin as $lt)
										<li>
											<a href="loaitin/{{$lt->id}}/{{$lt->TenKhongDau}}.html" title="{{$lt->Ten}}">
												{{$lt->Ten}}
												<!-- <span class="count">30</span> -->
											</a>
										</li>
										@endforeach
									</ul>
								</div>
							</div><!-- end categories_blog_menu -->
							<div class="block block_banner">
								<ul>
									<li class="effect">
										<a class="image-wrap" href="#"><img class="img-responsive" src="img/banner/banner-cate1.jpg" alt=""></a>
									</li>
								</ul>
							</div><!-- end block_banner -->
							<div id="recent-posts" class="block recent-posts">
							@foreach($quangcao as $qc)
								<h4 class="title_block">{{$qc->Ten}}</h4>
							
        	<div class="block block_banner">
          <ul>
            <li class="effect">
              <a class="image-wrap" href="{{$qc->link}}"><img class="img-responsive" src="upload/quangcao/{{$qc->Hinh}}" alt="{{$qc->Ten}}"></a>
            </li>
          </ul>
       	 </div><!-- end block_banner -->
        @endforeach

								</div>
							</div><!-- end recent-posts -->
							<!-- end block-tag -->
						</div><!-- end right_column -->
					</div><!-- end row -->
				</div> <!-- end container -->
			</div>
            

<!-- <script type="text/javascript" src="jquery.shorten.1.0.js"></script> -->


<script>
  $(".des p").text(function(index, currentText) {
    var maxLength = $(this).parent().attr('data-maxlength');
    if (currentText.length >= maxLength) {
      return currentText.substr(0, maxLength) + " ..... ";
    } else {
      return currentText
    }
  });
</script>

 @include('layout.footer')