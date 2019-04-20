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
                            <li>
                                <div class="">
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li><a href="dangnhap"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>
                            <li><a href="dang-ki-user"><i class="fa fa-pencil-square-o"></i>Đăng kí</a></li>
                            @endif

                            <li>
                                <div class="form-search-mnv">
                                    <form action="timkiem" method="post">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                        <input class="sb-search-input search-mnv" placeholder="Tìm kiếm" type="text"
                                            value="" name="tukhoa" id="search">
                                        <i class="fa fa-search sb-icon-search">
                                            <input class="sb-search-submit" type="submit" value="tukhoa"></i>
                                    </form>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                            <button id="nav-mobile-btn"><i class="fa fa-bars"></i></button>
                            <a href="" class="text-nav">Món Ngon Việt</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-desktop">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 nav-mnv">
                        <div class="col-md-1">
                            @foreach($footer as $h)
                            <a href="trang-chu.html" class="nav-logo logo-mnv"><img src="upload/footer/{{$h->HinhLoGo}}"
                                    alt="" /></a>@endforeach
                        </div>
                        <div class="col-md-11">
                            <a href="trang-chu.html">
                                <div class="col-md-2 padding-header">
                                    <img src="upload/footer/tinhhoa7.png" alt="">
                                </div>
                            </a>

                            <div class="col-md-10">
                                <nav class="navbar padding-header-qc">
                                    <!-- <button id="nav-mobile-btn"><i class="fa fa-bars"></i></button> -->
                                    @foreach($header as $h)
                                    <a href="{{$h->Link}}" class="banner-mnv"><img src="upload/footer/{{$h->Hinh}}"
                                            alt="Cozy Logo" /></a>
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
    <script type="text/javascript">
    function refrClock() {

        var d = new Date();

        var s = d.getSeconds();

        var m = d.getMinutes();

        var h = d.getHours();

        var day = d.getDay();

        var date = d.getDate();

        var month = d.getMonth();

        var year = d.getFullYear();

        var days = new Array("Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy");

        var months = new Array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");
        var am_pm;

        if (s < 10) {
            s = "0" + s
        }

        if (m < 10) {
            m = "0" + m
        }

        if (h > 12) {
            h -= 12;
            AM_PM = "PM"
        } else {
            AM_PM = "AM"
        }

        if (h < 10) {
            h = "0" + h
        }

        // document.getElementById("clock").innerHTML = days[day] + " | " + date + "/" + months[month] + "/" + year + " | " + " " + h + ":" + m + ":" + s + " " + AM_PM; setTimeout("refrClock()", 1000);
        document.getElementById("clock").innerHTML = days[day] + " | " + date + "/" + months[month] + "/" + year +
            " (GMT +7) ";

    }
    refrClock();
    </script>
