<div class="col-lg-8 col-md-7 col-sm-4 col-xs-3">
	<div class="topheader-navholder">
		<div class="topheader-navholder-ct">
			<span id="btn-menu"><i class="fa fa-bars"></i></span>
			<nav id="main-nav">
				<ul class="nav navbar-nav megamenu">
					<li class="dropdown">
						<a href='trang-chu.html'>Trang chủ</b></a>
					</li>
					<li class="dropdown">
						<a >Địa điểm du lịch<b class="caret"></b></a>
						<div id="dropdown-menu2" class="dropdown-menu">
							<ul>
								@foreach($theloai as $tl)
								<li class="parent dropdown-submenu">
									<a >{{$tl->Ten}}</a>
									<div class="dropdown-menu level2">
										<ul>
											@foreach($tl->loaitin as $lt)
												<li><a href="loaitin/{{$lt->id}}/{{$lt->TenKhongDau}}.html">{{$lt->Ten}}</a></li>
											@endforeach
										</ul>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</li>
					<li class="dropdown">
						<a href='#'>Địa điểm ăn uống <b class="caret"></b></a>
						<div id="dropdown-menu3" class="dropdown-menu">
							<ul>
								<li class="parent dropdown-submenu">
									<a href='page-booknow.html'>Đà lạt</a>
									<div class="dropdown-menu level2">
										<ul>	
										@foreach($danhmucanuong as $danhmuc)
											<li><a href="dia-diem-an-uong/{{$danhmuc->TenKhongDau}}/{{$danhmuc->id}}.html">{{$danhmuc->Ten}}</a></li>
											@endforeach
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li class="dropdown">
						<a href='kinh-nghiem-du-lich'>Kinh nghiệm du lịch </b></a>
					</li>
					{{-- <li class="dropdown">
						<a href='#'>Khách sạn<b class="caret"></b></a>
						<div id="dropdown-menu2" class="dropdown-menu">
							<ul>
								<li>
									<a href='page-category-left.html'>Đà lạt</a>
								</li>
								<li>
									<a href='page-category-left.html'>Vũng tàu</a>
								</li>
							</ul>
						</div>
					</li> --}}
					<li class="dropdown">
						<a href='lien-he.html'>Liên hệ</b></a>
					</li>
					
				</ul>
			</nav><!-- end main-nav -->
		</div><!-- end topheader-navholder-ct -->
	</div><!-- end topheader-navholder -->
</div>
