<div id="wrapper">

		<!-- BEGIN HEADER -->
		<header id="header">
			<div id="top-bar">
				<div class="container background-mnv">
					<div class="row">
						<div class="col-sm-12">
                            @foreach($header as $h)
							<ul id="top-info">
								<li>Số điện thoại: {{$h->sdt}}</li>
								<li>Email: <a href="mailto:{{$h->email}}"> {{$h->email}}</a></li>
							</ul>
                            @endforeach
							<ul id="top-buttons">

								<li>
									<div class="language-switcher">
										<span><i class="fa fa-globe"></i> English</span>
										<ul>
											<li><a href="#">Deutsch</a></li>
											<li><a href="#">Espa&ntilde;ol</a></li>
											<li><a href="#">Fran&ccedil;ais</a></li>
											<li><a href="#">Portugu&ecirc;s</a></li>
										</ul>
									</div>
								</li>
								<li class="divider"></li>

								<li><a href="#"><i class="fa fa-sign-in"></i> Login</a></li>
								<li><a href="#"><i class="fa fa-pencil-square-o"></i> Register</a></li>

								<li>
									<div class="form-search-mnv">
										<form>
											<input class="sb-search-input search-mnv" placeholder="Search..."
												type="text" value="" name="search" id="search">

											<i class="fa fa-search sb-icon-search"> <input class="sb-search-submit"
													type="submit" value=""></i>
										</form>
									</div>
								</li>
								<button id="nav-mobile-btn"><i class="fa fa-bars"></i></button>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 nav-mnv">
                                @foreach($footer as $h)
							<a href="trang-chu.html" class="nav-logo logo-mnv"><img
									src="upload/footer/{{$h->HinhLoGo}}" alt="" /></a>
							<!-- BEGIN SEARCH -->
                            @endforeach

							<!-- END SEARCH -->

							<!-- BEGIN MAIN MENU -->
							<nav class="navbar">
								<!-- <button id="nav-mobile-btn"><i class="fa fa-bars"></i></button> -->
                                @foreach($header as $h)
                            <a href="{{$h->Link}}" class="banner-mnv"><img src="upload/footer/{{$h->Hinh}}"
										alt="Cozy Logo" /></a>
                                    @endforeach
							</nav>
							<!-- END MAIN MENU -->
						</div>
					</div>
					<!-- <div class="row session-nav" id="nav-section"> -->
	            @include('layout.menu')
				</div>
			</div>
		</header>