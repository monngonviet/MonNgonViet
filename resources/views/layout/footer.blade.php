<footer id="footer">
        <div id="footer-top" class="container">
            <div class="row">

                    <nav class="navbar new-nav-mnv">
                            <ul class="nav navbar-nav menu-footer-border">
                                <li class="dropdown dropdown-mnv menu-footer">
                                    @foreach($theloaitrangchu as $tc)
                                <a class="active" href="#" data-toggle="dropdown" data-hover="dropdown">{{$tc->Ten}}<b
                                            class="caret"></b></a>
                                            @endforeach
                                    <ul class="dropdown-menu">
                                    @foreach($loaitintrangchu as $tc)
                                        
                                        <li><a href="{{$tc->TenKhongDau}}">{{$tc->Ten}}</a></li>
                                        @endforeach
                    
                                    </ul>
                                </li>
                    
                                <li class="dropdown dropdown-mnv menu-footer">
                                    @foreach($theloaitintuc as $tt)
                                    <a href="{{$tt->TenKhongDau}}" data-toggle="" data-hover="dropdown">{{$tt->Ten}}<b
                                            class=""></b></a>
                                        @endforeach
                    
                                </li>
                    
                                <li class="dropdown dropdown-mnv menu-footer">
                                    @foreach($theloaivanhoaamthuc as $tt)
                                <a href="#" data-toggle="dropdown" data-hover="dropdown">{{$tt->Ten}}<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                    @foreach($tt->loaitin as $lt)
                    
                                        <li><a href="{{$lt->TenKhongDau}}">{{$lt->Ten}}</a></li>
                                        @endforeach
                                       
                                        <li class="dropdown-submenu">
                                         @foreach($theloaivanhoaamthuc1 as $tt)
                    
                                            <a href="#">{{$tt->Ten}}</a>
                                            <ul class="dropdown-menu">
                                                  @foreach($tt->loaitin as $lt)
                                                <li><a href="{{$lt->TenKhongDau}}">{{$lt->Ten}}</a></li>
                                                  @endforeach
                                                
                                            </ul>
                                        @endforeach
                    
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                    
                                <li class="dropdown dropdown-mnv menu-footer">
                                        @foreach($theloaidiachi as $tt)
                                    <a href="#" data-toggle="dropdown" data-hover="dropdown">{{$tt->Ten}}<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                    @foreach($tt->loaitin as $lt)
                                        <li><a href="{{$lt->TenKhongDau}}">{{$lt->Ten}}</a></li>
                                    @endforeach
                                    </ul>
                                    @endforeach
                    
                                </li>
                                <li class="dropdown dropdown-mnv menu-footer">
                                        @foreach($theloainghebep as $tt)
                                    <a href="#" data-toggle="dropdown" data-hover="dropdown">{{$tt->Ten}}<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                    @foreach($tt->loaitin as $lt)
                                    <li><a href="{{$lt->TenKhongDau}}">{{$lt->Ten}}</a></li>
                                    @endforeach
                                </ul>
                                    @endforeach
                                </li>
                                <li class="dropdown dropdown-mnv menu-footer">
                                        @foreach($theloailangnghe as $tt)
                                    <a href="#" data-toggle="dropdown" data-hover="dropdown">{{$tt->Ten}}<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                    @foreach($tt->loaitin as $lt)
                                        <li><a href="{{$lt->TenKhongDau}}">{{$lt->Ten}}</a></li>
                                    @endforeach
                                     </ul>
                                    @endforeach
                                </li>
                    
                                <li class="dropdown dropdown-mnv menu-footer">
                                        @foreach($theloaihoatdong as $tt)
                                        <a href="#" data-toggle="dropdown" data-hover="dropdown">{{$tt->Ten}}<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                    @foreach($tt->loaitin as $lt)
                                    <li><a href="{{$lt->TenKhongDau}}">{{$lt->Ten}}</a></li>
                                    @endforeach
                                </ul>
                                    @endforeach
                                </li>
                            </ul>
                        </nav>
                <!-- <ul class="">
                    <li>
                        Trang Chủ
                    </li>
                    <li>
                        Tin tức - sự kiện
                    </li>
                    <li>
                        Văn hoá ẩm thực
                    </li>
                    <li>
                        Địa chỉ ẩm thực
                    </li>
                    <li>
                        nghề bếp xưa & nay
                    </li>
                    <li>
                        Làng nghề
                    </li>
                    <li>
                        Hoạt động ẩm thực
                    </li>
                </ul> -->
            </div>
            <br>
            <div class="row">
                    @foreach($footer as $h)
                <div class="block col-sm-3 text-center">
                    <a href="trang-chu.html"><img src="upload/footer/{{$h->HinhLoGo}}" alt="Cozy Logo" /></a>
                    @endforeach

                </div>
                <div class="block col-sm-6">
                        @foreach($footer as $h)
                    {!!$h->NoiDung!!}
                   
                </div>

                <div class="block col-sm-3">
                    <h3>Theo dõi Trang</h3>
                    <div class="fb-page" data-href="{{$h->LinkFB}}" style="width: 100%"
                        data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                        data-show-facepile="true">
                        <blockquote cite="{{$h->LinkFB}}" class="fb-xfbml-parse-ignore">
                        <a href="{{$h->LinkFB}}">MÓN NGON VIỆT</a></blockquote>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


        <!-- BEGIN COPYRIGHT -->
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        &copy; 2019 monngonviet - Đã đăng ký Bản quyền. Được phát triển bởi <a
                            href="https://www.facebook.com/dongphamcom" target="_blank">Phạm Đông</a>

                        <!-- BEGIN SOCIAL NETWORKS -->
                        <ul class="social-networks">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                        <!-- END SOCIAL NETWORKS -->

                    </div>
                </div>
            </div>
        </div>
        <!-- END COPYRIGHT -->

    </footer>