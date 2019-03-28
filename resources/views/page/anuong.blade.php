@include('layout.header2')
<div id="columns" class="columns-container">
				<!-- container -->
				<div class="container">
					<div class="row">
						<div id="center_column" class="col-lg-12 col-md-12">
							<!-- <div class="content_sortPagiBar top clearfix">
								<div class="pull-left hidden-xs">
									<nav class="tiva-nav-tabs-box">
										<ul class="nav tiva-nav-tabs" role="tablist">
										<li class="active"><a href="#tiva-grid" data-toggle="tab" aria-expanded="true"><i class="fa fa-th"></i></a></li>
										<li class=""><a href="#tiva-list" data-toggle="tab" aria-expanded="false"><i class="fa fa-list-ul"></i></a></li>
										</ul>
									</nav>
								</div>
								<div class="sort pull-right">
									<form id="productsSortForm" action="#" class="form-inline pull-right">
										<div class="select">
											<label for="selectProductSort">Sort by</label>
											<select id="selectProductSort" class="selectProductSort form-control">
												<option value="0" selected="selected">name</option>
												<option value="1">Price: Lowest first</option>
												<option value="2">Price: Highest first</option>
												<option value="3">Product Name: A to Z</option>
												<option value="4">Product Name: Z to A</option>
												<option value="5">In stock</option>
											</select>
										</div>
									</form>
									<form action="#" class="form-inline pull-right">
										<div class="select">
											<label>Prices</label>
											<select class="form-control">
												<option value="0" selected="selected">0 - 50$</option>
												<option value="1">50$ - 100$</option>
												<option value="2">100$ - 200$</option>
												<option value="3">200$ - 300$</option>
												<option value="4">300$ - 400$</option>
												<option value="5">400$ - 500$</option>
											</select>
										</div>
									</form>
									<form action="#" class="form-inline pull-right">
										<div class="select">
											<label>Activities</label>
											<select class="form-control">
												<option value="city-tour" selected="selected">City tour</option>
												<option value="escorted-tour">Escorted Tour</option>
												<option value="rail-tour">Rail Tour</option>
												<option value="river-cruise">River Cruise</option>
												<option value="tour-cruise">Tour &amp; Cruise</option>
												<option value="wildlife">Wildlife</option>
											</select>
										</div>
									</form>
									<form action="#" class="form-inline pull-right">
										<div class="select">
											<label>Places</label>
											<select class="form-control">
												<option value="0" selected="selected">Europe</option>
												<option value="1">Paris</option>
												<option value="2">Italy</option>
												<option value="3">Singapore</option>
												<option value="4">Australia</option>
												<option value="5">Korea</option>
											</select>
										</div>
									</form>
								</div>
							</div> -->
							<div class="tab-content">
								<div class="tab-pane fade active in" id="tiva-grid">
									<div class="row">
										@foreach($anuong as $an)
										<div class="type_block_product col-sp-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<div class="product-container product-style2">
		                                    	<h2 class="name">
	                                                <a class="product-name" href="page-detail.html" title=" {{$an->TieuDeKhongDau}}">
	                                                    {{$an->TieuDe}}
	                                                </a>
	                                            </h2>
		                                        <div class="left-block">
		                                            <div class="product-image-container">
		                                                <a class="product_img_link" href="page-detail.html" title="Around Alaska - the Ice land">
		                                                    <img src="upload/hinhanuong/{{$an->Hinh}}" alt="Around Alaska - the Ice land" class="img-responsive image-effect" width="480" height="319">
		                                                </a>
		                                                <span class="label-reduction label">HOT</span>
		                                            </div>
		                                        </div><!--end left block -->
		                                        <div class="right-block">
		                                            <div class="product-box">
		                                                <div class="tour-days"><span class="icon icon-clock-outline"></span>{{$an->created_at}}</div>
		                                            	<div class="description">
		                                            		<p>{{$an->TomTat}}</p>
		                                            	</div>
		                                                <div class="content_price">
		                                                	<span>
		                                                		<span class="price product-price">35.000 - 40.000đ</span>
		                                                    
		                                                	</span>
		                                                </div>
		                                            </div>
		                                        </div><!-- end right block -->
		                                        <div class="bottom-block">	
	                                        		<div class="p-left">
	                                        			<span class="label-activity"><span class="icon-star"></span>City tour</span>
	                                        			<span class="label-minage"><span class="icon-user"></span>Min age: 10</span>
	                                        		</div>
	                                        		<div class="p-right">
	                                        			<a class="btn btn-default" href="dia-diem-an-uong/{{$an->id}}/{{$an->TieuDeKhongDau}}" rel="nofollow" title="View detail">Xem thêm</a>
	                                        		</div>
		                                        </div><!-- end bottom block --> 
		                                    </div><!-- end product-container-->
										</div><!-- end type_block_product -->
										@endforeach
									</div><!-- end row -->
								</div><!-- end tiva-grid -->
								<div class="tab-pane fade" id="tiva-list">
									<div class="row">
										<div class="type_block_product col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="product-container product-style2">
												<div class="row">
													<div class="col-lg-5 col-md-5">
				                                        <div class="left-block">
				                                            <div class="product-image-container">
				                                                <a class="product_img_link" href="page-detail.html" title="Around Alaska - the Ice land">
				                                                    <img src="img/product/1.jpg" alt="Around Alaska - the Ice land" class="img-responsive image-effect" width="991" height="659">
				                                                </a>
				                                                <span class="label-reduction label">-30%</span>
				                                            </div>
				                                        </div><!--end left block -->
													</div>
													<div class="col-lg-7 col-md-7">
														<div class="right-block">
				                                            <div class="product-box">
																<h5 class="name">
					                                                <a class="product-name" href="page-detail.html" title="Around Alaska - the Ice land">
					                                                    Around Alaska - the Ice land
					                                                </a>
					                                            </h5>
				                                                <div class="tour-days"><span class="icon icon-clock-outline"></span>5 days 4 nights</div>
				                                            	<div class="description">
				                                            		<p>Lorem ipsum dolor sit amet, cursus faucibus vel non cras lorem, eu per, mauris odio, elit tortor. Dolor placerat fringilla suscipit, eget maecenas sodales laoreet scelerisque quia, duis augue urna id nostra aliquet eros, vestibulum ut donec odio amet, erat at posuere penatibus.</p>
				                                            	</div>
				                                                <div class="content_price">
				                                                	<span>
				                                                		<span class="price product-price">$490.00</span>
				                                                    	<span class="old-price product-price">$700.00</span>
				                                                	</span>
				                                                </div>
				                                            </div>
				                                        </div><!-- end right block -->
				                                        <div class="bottom-block">	
			                                        		<div class="p-left">
			                                        			<span class="label-activity"><span class="icon-star"></span>City tour</span>
			                                        			<span class="label-minage"><span class="icon-user"></span>Min age: 10</span>
			                                        		</div>
			                                        		<div class="p-right">
			                                        			<a class="btn btn-default" href="page-detail.html" rel="nofollow" title="View detail">View detail</a>
			                                        		</div>
				                                        </div><!-- end bottom block -->
													</div>
												</div>
											</div><!-- end product-container-->
										</div><!-- end type_block_product -->
										<div class="type_block_product col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="product-container product-style2">
												<div class="row">
													<div class="col-lg-5 col-md-5">
														<div class="left-block">
				                                            <div class="product-image-container">
				                                                <a class="product_img_link" href="page-detail.html" title="Discover the tradition in Kyoto">
				                                                    <img src="img/product/2.jpg" alt="Discover the tradition in Kyoto" class="img-responsive image-no-effect" width="991" height="659">
				                                                </a>
				                                                <span class="label-reduction label">-30%</span>
				                                            </div>
				                                        </div><!--end left block -->
													</div>
													<div class="col-lg-7 col-md-7">
														<div class="right-block">
				                                            <div class="product-box">
				                                                <h5 class="name">
				                                                    <a class="product-name" href="page-detail.html" title="Discover the tradition in Kyoto">
				                                                        Discover the tradition in Kyoto
				                                                    </a>
				                                                </h5>
				                                                <div class="tour-days"><span class="icon icon-clock-outline"></span>5 days 4 nights</div>
				                                                <div class="product-des">
																	<p>Lorem ipsum dolor sit amet, cursus faucibus vel non cras lorem, eu per, mauris odio, elit tortor. Dolor placerat fringilla suscipit, eget maecenas sodales laoreet scelerisque quia, duis augue urna id nostra aliquet eros, vestibulum ut donec odio amet, erat at posuere penatibus.</p>
																</div>
				                                                <div class="content_price">
				                                                	<span>
				                                                		<span class="price product-price">$490.00</span>
				                                                    	<span class="old-price product-price">$700.00</span>
				                                                	</span>
				                                                </div>
				                                            </div>
				                                        </div><!--end right block -->
				                                        <div class="bottom-block">	
			                                        		<div class="p-left">
			                                        			<span class="label-activity"><span class="icon-star"></span>City tour</span>
			                                        			<span class="label-minage"><span class="icon-user"></span>Min age: 10</span>
			                                        		</div>
			                                        		<div class="p-right">
			                                        			<a class="btn btn-default" href="page-detail.html" rel="nofollow" title="View detail">View detail</a>
			                                        		</div>
				                                        </div><!-- end bottom block -->
													</div>
												</div>
											</div><!-- end product-container-->
										</div><!-- end type_block_product -->
										<div class="type_block_product col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="product-container product-style2">
												<div class="row">
													<div class="col-lg-5 col-md-5">
														<div class="left-block">
				                                            <div class="product-image-container">
				                                                <a class="product_img_link" href="page-detail.html" title="Ocean tour in Ninh Van Bay">
				                                                    <img src="img/product/3.jpg" alt="Ocean tour in Ninh Van Bay" class="img-responsive image-no-effect" width="991" height="659">
				                                                </a>
				                                                <span class="label-reduction label">-30%</span>
				                                            </div>
				                                        </div><!--end left block -->
													</div>
													<div class="col-lg-7 col-md-7">
														<div class="right-block">
				                                            <div class="product-box">
				                                                <h5 class="name">
				                                                    <a class="product-name" href="page-detail.html" title="Ocean tour in Ninh Van Bay">
				                                                        Ocean tour in Ninh Van Bay
				                                                    </a>
				                                                </h5>
				                                                <div class="tour-days"><span class="icon icon-clock-outline"></span>5 days 4 nights</div>
				                                                <div class="product-des">
																	<p>Lorem ipsum dolor sit amet, cursus faucibus vel non cras lorem, eu per, mauris odio, elit tortor. Dolor placerat fringilla suscipit, eget maecenas sodales laoreet scelerisque quia, duis augue urna id nostra aliquet eros, vestibulum ut donec odio amet, erat at posuere penatibus.</p>
																</div>
				                                                <div class="content_price">
				                                                	<span>
				                                                		<span class="price product-price">$490.00</span>
				                                                    	<span class="old-price product-price">$700.00</span>
				                                                	</span>
				                                                </div>
				                                            </div>
				                                        </div><!--end right block -->
				                                        <div class="bottom-block">	
			                                        		<div class="p-left">
			                                        			<span class="label-activity"><span class="icon-star"></span>City tour</span>
			                                        			<span class="label-minage"><span class="icon-user"></span>Min age: 10</span>
			                                        		</div>
			                                        		<div class="p-right">
			                                        			<a class="btn btn-default" href="page-detail.html" rel="nofollow" title="View detail">View detail</a>
			                                        		</div>
				                                        </div><!-- end bottom block -->
													</div>
												</div>
											</div><!-- end product-container-->
										</div><!-- end type_block_product -->
										<div class="type_block_product col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="product-container product-style2">
												<div class="row">
													<div class="col-lg-5 col-md-5">
														<div class="left-block">
				                                            <div class="product-image-container">
				                                                <a class="product_img_link" href="page-detail.html" title="Around Roma - Italy">
				                                                    <img src="img/product/4.jpg" alt="Around Roma - Italy" class="img-responsive image-no-effect" width="991" height="659">
				                                                </a>
				                                                <span class="label-reduction label">-30%</span>		                                            </div>
				                                        </div><!--end left block -->
													</div>
													<div class="col-lg-7 col-md-7">
														<div class="right-block">
				                                            <div class="product-box">
				                                                <h5 class="name">
				                                                    <a class="product-name" href="page-detail.html" title="Around Roma - Italy">
				                                                        Around Roma - Italy
				                                                    </a>
				                                                </h5>
				                                                <div class="tour-days"><span class="icon icon-clock-outline"></span>5 days 4 nights</div>
				                                                <div class="product-des">
																	<p>Lorem ipsum dolor sit amet, cursus faucibus vel non cras lorem, eu per, mauris odio, elit tortor. Dolor placerat fringilla suscipit, eget maecenas sodales laoreet scelerisque quia, duis augue urna id nostra aliquet eros, vestibulum ut donec odio amet, erat at posuere penatibus.</p>
																</div>
				                                                <div class="content_price">
				                                                	<span>
				                                                		<span class="price product-price">$490.00</span>
				                                                    	<span class="old-price product-price">$700.00</span>
				                                                	</span>
				                                                </div>
				                                            </div>
				                                        </div><!--end right block -->
				                                        <div class="bottom-block">	
			                                        		<div class="p-left">
			                                        			<span class="label-activity"><span class="icon-star"></span>City tour</span>
			                                        			<span class="label-minage"><span class="icon-user"></span>Min age: 10</span>
			                                        		</div>
			                                        		<div class="p-right">
			                                        			<a class="btn btn-default" href="page-detail.html" rel="nofollow" title="View detail">View detail</a>
			                                        		</div>
				                                        </div><!-- end bottom block -->
													</div>
												</div>
											</div><!-- end product-container-->
										</div><!-- end type_block_product -->
										<div class="type_block_product col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="product-container product-style2">
												<div class="row">
													<div class="col-lg-5 col-md-5">
														<div class="left-block">
				                                            <div class="product-image-container">
				                                                <a class="product_img_link" href="page-detail.html" title="Santorini - Greece">
				                                                    <img src="img/product/5.jpg" alt="Santorini - Greece" class="img-responsive image-no-effect" width="991" height="659">
				                                                </a>
				                                                <span class="label-reduction label">-30%</span>
				                                            </div>
				                                        </div><!--end left block -->
													</div>
													<div class="col-lg-7 col-md-7">
														<div class="right-block">
				                                            <div class="product-box">
				                                                <h5 class="name">
				                                                    <a class="product-name" href="page-detail.html" title="Santorini - Greece">
				                                                        Santorini - Greece
				                                                    </a>
				                                                </h5>
				                                                <div class="tour-days"><span class="icon icon-clock-outline"></span>5 days 4 nights</div>
				                                                <div class="product-des">
																	<p>Lorem ipsum dolor sit amet, cursus faucibus vel non cras lorem, eu per, mauris odio, elit tortor. Dolor placerat fringilla suscipit, eget maecenas sodales laoreet scelerisque quia, duis augue urna id nostra aliquet eros, vestibulum ut donec odio amet, erat at posuere penatibus.</p>
																</div>
				                                                <div class="content_price">
				                                                	<span>
				                                                		<span class="price product-price">$490.00</span>
				                                                    	<span class="old-price product-price">$700.00</span>
				                                                	</span>
				                                                </div>
				                                            </div>
				                                        </div><!--end right block -->
				                                        <div class="bottom-block">	
			                                        		<div class="p-left">
			                                        			<span class="label-activity"><span class="icon-star"></span>City tour</span>
			                                        			<span class="label-minage"><span class="icon-user"></span>Min age: 10</span>
			                                        		</div>
			                                        		<div class="p-right">
			                                        			<a class="btn btn-default" href="page-detail.html" rel="nofollow" title="View detail">View detail</a>
			                                        		</div>
				                                        </div><!-- end bottom block -->
													</div>
												</div>
											</div><!-- end product-container-->
										</div><!-- end type_block_product -->
										<div class="type_block_product col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="product-container product-style2">
												<div class="row">
													<div class="col-lg-5 col-md-5">
														<div class="left-block">
				                                            <div class="product-image-container">
				                                                <a class="product_img_link" href="page-detail.html" title="Special Day Trip">
				                                                    <img src="img/product/6.jpg" alt="Special Day Trip" class="img-responsive image-no-effect" width="991" height="659">
				                                                </a>
				                                                <span class="label-reduction label">-30%</span>&gt;
				                                            </div>
				                                        </div><!--end left block -->
													</div>
													<div class="col-lg-7 col-md-7">
														<div class="right-block">
				                                            <div class="product-box">
				                                                <h5 class="name">
				                                                    <a class="product-name" href="page-detail.html" title="Special Day Trip">
				                                                        Special Day Trip
				                                                    </a>
				                                                </h5>
				                                                <div class="tour-days"><span class="icon icon-clock-outline"></span>5 days 4 nights</div>
				                                                <div class="product-des">
																	<p>Lorem ipsum dolor sit amet, cursus faucibus vel non cras lorem, eu per, mauris odio, elit tortor. Dolor placerat fringilla suscipit, eget maecenas sodales laoreet scelerisque quia, duis augue urna id nostra aliquet eros, vestibulum ut donec odio amet, erat at posuere penatibus.</p>
																</div>
				                                                <div class="content_price">
				                                                	<span>
				                                                		<span class="price product-price">$700.00</span>
	                                                    				<span class="old-price product-price">$1000.00</span>
				                                                	</span>
				                                                </div>
				                                            </div>
				                                        </div><!--end right block -->
				                                        <div class="bottom-block">	
			                                        		<div class="p-left">
			                                        			<span class="label-activity"><span class="icon-star"></span>City tour</span>
			                                        			<span class="label-minage"><span class="icon-user"></span>Min age: 10</span>
			                                        		</div>
			                                        		<div class="p-right">
			                                        			<a class="btn btn-default" href="page-detail.html" rel="nofollow" title="View detail">View detail</a>
			                                        		</div>
				                                        </div><!-- end bottom block -->
													</div>
												</div>
											</div><!-- end product-container-->
										</div><!-- end type_block_product -->
										<div class="type_block_product col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="product-container product-style2">
												<div class="row">
													<div class="col-lg-5 col-md-5">
														<div class="left-block">
				                                            <div class="product-image-container">
				                                                <a class="product_img_link" href="page-detail.html" title="All Stunning Places">
				                                                    <img src="img/product/7.jpg" alt="All Stunning Places" class="img-responsive image-no-effect" width="991" height="659">
				                                                </a>
				                                                <span class="label-reduction label">-30%</span>		                                            </div>
				                                        </div><!--end left block -->
													</div>
													<div class="col-lg-7 col-md-7">
														<div class="right-block">
				                                            <div class="product-box">
				                                                <h5 class="name">
				                                                    <a class="product-name" href="page-detail.html" title="All Stunning Places">
				                                                        All Stunning Places
				                                                    </a>
				                                                </h5>
				                                                <div class="tour-days"><span class="icon icon-clock-outline"></span>5 days 4 nights</div>
				                                                <div class="product-des">
																	<p>Lorem ipsum dolor sit amet, cursus faucibus vel non cras lorem, eu per, mauris odio, elit tortor. Dolor placerat fringilla suscipit, eget maecenas sodales laoreet scelerisque quia, duis augue urna id nostra aliquet eros, vestibulum ut donec odio amet, erat at posuere penatibus.</p>
																</div>
				                                                <div class="content_price">
				                                                	<span>
				                                                		<span class="price product-price">$490.00</span>
				                                                    	<span class="old-price product-price">$700.00</span>
				                                                	</span>
				                                                </div>
				                                            </div>
				                                        </div><!--end right block -->
				                                        <div class="bottom-block">	
			                                        		<div class="p-left">
			                                        			<span class="label-activity"><span class="icon-star"></span>City tour</span>
			                                        			<span class="label-minage"><span class="icon-user"></span>Min age: 10</span>
			                                        		</div>
			                                        		<div class="p-right">
			                                        			<a class="btn btn-default" href="page-detail.html" rel="nofollow" title="View detail">View detail</a>
			                                        		</div>
				                                        </div><!-- end bottom block -->
													</div>
												</div>
											</div><!-- end product-container-->
										</div><!-- end type_block_product -->
										<div class="type_block_product col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="product-container product-style2">
												<div class="row">
													<div class="col-lg-5 col-md-5">
														<div class="left-block">
				                                            <div class="product-image-container">
				                                                <a class="product_img_link" href="page-detail.html" title="Santorini - Greece">
				                                                    <img src="img/product/8.jpg" alt="Santorini - Greece" class="img-responsive image-no-effect" width="991" height="659">
				                                                </a>
				                                                <span class="label-reduction label">-30%</span>
				                                            </div>
				                                        </div><!--end left block -->
													</div>
													<div class="col-lg-7 col-md-7">
														<div class="right-block">
				                                            <div class="product-box">
				                                                <h5 class="name">
				                                                    <a class="product-name" href="page-detail.html" title="Santorini - Greece">
				                                                        Santorini - Greece
				                                                    </a>
				                                                </h5>
				                                                <div class="tour-days"><span class="icon icon-clock-outline"></span>5 days 4 nights</div>
				                                                <div class="product-des">
																	<p>Lorem ipsum dolor sit amet, cursus faucibus vel non cras lorem, eu per, mauris odio, elit tortor. Dolor placerat fringilla suscipit, eget maecenas sodales laoreet scelerisque quia, duis augue urna id nostra aliquet eros, vestibulum ut donec odio amet, erat at posuere penatibus.</p>
																</div>
				                                                <div class="content_price">
				                                                	<span>
				                                                		<span class="price product-price">$490.00</span>
				                                                    	<span class="old-price product-price">$700.00</span>
				                                                	</span>
				                                                </div>
				                                            </div>
				                                        </div><!--end right block -->
				                                        <div class="bottom-block">	
			                                        		<div class="p-left">
			                                        			<span class="label-activity"><span class="icon-star"></span>City tour</span>
			                                        			<span class="label-minage"><span class="icon-user"></span>Min age: 10</span>
			                                        		</div>
			                                        		<div class="p-right">
			                                        			<a class="btn btn-default" href="page-detail.html" rel="nofollow" title="View detail">View detail</a>
			                                        		</div>
				                                        </div><!-- end bottom block -->
													</div>
												</div>
											</div><!-- end product-container-->
										</div><!-- end type_block_product -->
										<div class="type_block_product col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="product-container product-style2">
												<div class="row">
													<div class="col-lg-5 col-md-5">
														<div class="left-block">
				                                            <div class="product-image-container">
				                                                <a class="product_img_link" href="page-detail.html" title="Discover the tradition in Kyoto">
				                                                    <img src="img/product/9.jpg" alt="Discover the tradition in Kyoto" class="img-responsive image-no-effect" width="991" height="659">
				                                                </a>
				                                                <span class="label-reduction label">-30%</span>
				                                            </div>
				                                        </div><!--end left block -->
													</div>
													<div class="col-lg-7 col-md-7">
														<div class="right-block">
				                                            <div class="product-box">
				                                                <h5 class="name">
				                                                    <a class="product-name" href="page-detail.html" title="Discover the tradition in Kyoto">
				                                                        Discover the tradition in Kyoto
				                                                    </a>
				                                                </h5>
				                                                <div class="tour-days"><span class="icon icon-clock-outline"></span>5 days 4 nights</div>
				                                                <div class="product-des">
																	<p>Lorem ipsum dolor sit amet, cursus faucibus vel non cras lorem, eu per, mauris odio, elit tortor. Dolor placerat fringilla suscipit, eget maecenas sodales laoreet scelerisque quia, duis augue urna id nostra aliquet eros, vestibulum ut donec odio amet, erat at posuere penatibus.</p>
																</div>
				                                                <div class="content_price">
				                                                	<span>
				                                                		<span class="price product-price">$490.00</span>
				                                                    	<span class="old-price product-price">$700.00</span>
				                                                	</span>
				                                                </div>
				                                            </div>
				                                        </div><!--end right block -->
				                                        <div class="bottom-block">	
			                                        		<div class="p-left">
			                                        			<span class="label-activity"><span class="icon-star"></span>City tour</span>
			                                        			<span class="label-minage"><span class="icon-user"></span>Min age: 10</span>
			                                        		</div>
			                                        		<div class="p-right">
			                                        			<a class="btn btn-default" href="page-detail.html" rel="nofollow" title="View detail">View detail</a>
			                                        		</div>
				                                        </div><!-- end bottom block -->
													</div>
												</div>
											</div><!-- end product-container-->
										</div><!-- end type_block_product -->
										<div class="type_block_product col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="product-container product-style2">
												<div class="row">
													<div class="col-lg-5 col-md-5">
														<div class="left-block">
				                                            <div class="product-image-container">
				                                                <a class="product_img_link" href="page-detail.html" title="Special Day Trip">
				                                                    <img src="img/product/10.jpg" alt="Special Day Trip" class="img-responsive image-no-effect" width="991" height="659">
				                                                </a>
				                                                <span class="label-reduction label">-30%</span>
				                                            </div>
				                                        </div><!--end left block -->
													</div>
													<div class="col-lg-7 col-md-7">
														<div class="right-block">
				                                            <div class="product-box">
				                                                <h5 class="name">
				                                                    <a class="product-name" href="page-detail.html" title="Special Day Trip">
				                                                        Special Day Trip
				                                                    </a>
				                                                </h5>
				                                                <div class="tour-days"><span class="icon icon-clock-outline"></span>5 days 4 nights</div>
				                                                <div class="product-des">
																	<p>Lorem ipsum dolor sit amet, cursus faucibus vel non cras lorem, eu per, mauris odio, elit tortor. Dolor placerat fringilla suscipit, eget maecenas sodales laoreet scelerisque quia, duis augue urna id nostra aliquet eros, vestibulum ut donec odio amet, erat at posuere penatibus.</p>
																</div>
				                                                <div class="content_price">
				                                                	<span>
				                                                		<span class="price product-price">$490.00</span>
				                                                    	<span class="old-price product-price">$700.00</span>
				                                                	</span>
				                                                </div>
				                                            </div>
				                                        </div><!--end right block -->
				                                        <div class="bottom-block">	
			                                        		<div class="p-left">
			                                        			<span class="label-activity"><span class="icon-star"></span>City tour</span>
			                                        			<span class="label-minage"><span class="icon-user"></span>Min age: 10</span>
			                                        		</div>
			                                        		<div class="p-right">
			                                        			<a class="btn btn-default" href="page-detail.html" rel="nofollow" title="View detail">View detail</a>
			                                        		</div>
				                                        </div><!-- end bottom block -->
													</div>
												</div>
											</div><!-- end product-container-->
										</div><!-- end type_block_product -->
									</div><!-- end row -->
								</div><!-- end tiva-list -->
							</div>
							<div class="content_sortPagiBar bottom clearfix">
								<!-- phan trang -->
							</div>
						</div><!-- end center_column -->
					</div>
				</div> <!-- end container -->
			</div>
@include('layout.footer')