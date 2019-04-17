<div id="wrapper">

    <!-- BEGIN HEADER -->
    <header id="header">
        <div id="top-bar">
            <div class="container background-mnv">
                <div class="row">
                    <div class="col-sm-12">
              
                        <ul id="top-info">
                            <li>
                                <div id="clock">Loading...</div>
                            </li>
                            @if(Auth::User() != null)
                            <li>Chào {{Auth::user()->name}}</li>
                        </ul>
           
                        <ul id="top-buttons">
                            <li>
                                <div class="">
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li><a href="dangxuatuser"><i class="fa fa-sign-in"></i> Đăng xuất</a></li>
                            <li><a href="dang-tin.html"><i class="fa fa-home"></i>Đăng tin tức</a></li>
                            @else
                            <li><a href="dangnhap"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>
                            <li><a href="dang-ki-user"><i class="fa fa-pencil-square-o"></i>Đăng kí</a></li>
                            @endif
                          
                            <li>
                                <div class="form-search-mnv">
                                    <form action="timkiem" method="post">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                        <input class="sb-search-input search-mnv" placeholder="Tìm kiếm" type="text" value="" name="tukhoa" id="search">
                                        <i class="fa fa-search sb-icon-search">
                                            <input class="sb-search-submit" type="submit" value="tukhoa"></i>
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
                        <div class="col-md-1">
                            @foreach($footer as $h)
                            <a href="trang-chu.html" class="nav-logo logo-mnv"><img src="upload/footer/{{$h->HinhLoGo}}" alt="" /></a>@endforeach
                        </div>
                        <div class="col-md-11">
                            <a href="trang-chu.html"><div class="col-md-2 padding-header">
                                    <img  src="upload/footer/tinhhoa7.png" alt="">
                                </div></a>
                         
                            <div class="col-md-10">
                                <nav class="navbar padding-header-qc">
                                    <!-- <button id="nav-mobile-btn"><i class="fa fa-bars"></i></button> -->
                                    @foreach($header as $h)
                                    <a href="{{$h->Link}}" class="banner-mnv"><img src="upload/footer/{{$h->Hinh}}" alt="Cozy Logo" /></a>
                                    @endforeach
                                </nav>
                            </div>
                        </div>
                        <!-- END MAIN MENU -->
                    </div>
                </div>
                <!-- <div class="row session-nav" id="nav-section"> -->
                @include('layout.menu')
            </div>
        </div>

    </header>
