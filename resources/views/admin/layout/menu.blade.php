<div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left"><a href="index.html" class="logo"><span>
          
        <img src="upload/footer/H8GT_logo-mon-ngon-viet (1).png"
                        alt="" height="60">
                     </span><i><img src="Admin_MonNgonViet/assets/images/logo-sm.png" alt=""
                        height="50"></i></a>
                    
                    </div>
        <nav class="navbar-custom">
            <ul class="navbar-right d-flex list-inline float-right mb-0">
                
                        {{-- <div class="">
                                <span>Chào {{Auth::user()->name}}</span>
                            </div> --}}
                    {{-- <form role="search" class="app-search">
                        <div class="form-group mb-0"><input type="text" class="form-control" placeholder="Search..">
                            <button type="submit"><i class="fa fa-search"></i></button></div>
                    </form> --}}
           
        
                        <!-- item-->
                       
                </li>
                <li class="dropdown notification-list">
                    <div class="dropdown notification-list nav-pro-img"><a
                            class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false"><img
                                src="upload/footer/H8GT_logo-mon-ngon-viet (1).png" alt="user" class="rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                            <!-- item-->
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="dangxuatadmin"><i
                                    class="mdi mdi-power text-danger"></i> Đăng xuất</a>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="list-inline menu-left mb-0">
                <li class="float-left"><button class="button-menu-mobile open-left waves-effect"><i
                            class="mdi mdi-menu"></i></button></li>
                <li class="d-none d-sm-block">
                 
                </li>
            </ul>
        </nav>
    </div><!-- Top Bar End -->
    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Quản lí món ngon Việt</li>
                  
                         <li><a href="javascript:void(0);" class="waves-effect"><i
                                class="mdi mdi-format-list-bulleted-type"></i><span> Thể loại <span
                                    class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span></span></a>
                        
                        <ul class="submenu">
                            <li><a href="admin/theloai/danhsach">Danh sách thể loại</a></li>
                            {{-- <li><a href="admin/theloai/them">Thêm thể loại</a></li> --}}
                        </ul>
                           {{-- Loại tin --}}

                           <li><a href="javascript:void(0);" class="waves-effect"><i
                            class="mdi mdi-format-list-bulleted-type"></i><span> Loại Tin <span
                                class="float-right menu-arrow"><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                        <li><a href="admin/loaitin/danhsach">Danh sách loại tin</a></li>
                        <li><a href="admin/loaitin/them">Thêm loại tin</a></li>
                    </ul>
                            {{-- Tin Tức --}}
                            <li><a href="javascript:void(0);" class="waves-effect"><i
                                class="mdi mdi-format-list-bulleted-type"></i><span> Tin Tức <span
                                    class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                            <li><a href="admin/tintuc/danhsach">Danh sách tin tức</a></li>
                            <li><a href="admin/tintuc/danhsachchoduyet">Danh sách chờ duyệt</a></li>
                            <li><a href="admin/tintuc/them">Thêm tin tức</a></li>

                        </ul>

                </li>
                            {{-- Slide --}}
                            <li><a href="javascript:void(0);" class="waves-effect"><i
                                class="mdi mdi-format-list-bulleted-type"></i><span>Quản Lý Slide<span
                                    class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                            <li><a href="admin/slide/danhsach">Danh sách Slide</a></li>
                            <li><a href="admin/slide/them">Thêm Slide</a></li>
                        </ul>
                        {{-- Quang cao --}}
                        <li><a href="javascript:void(0);" class="waves-effect"><i
                            class="mdi mdi-format-list-bulleted-type"></i><span>Quản Lý Quảng Cáo<span
                                class="float-right menu-arrow"><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                        <li><a href="admin/quangcao/danhsach">Danh sách quảng cáo</a></li>
                        {{-- <li><a href="admin/quangcao/them">Thêm quảng cáo</a></li> --}}
                    </ul>
                    {{-- Liên hệ --}}
                    <li><a href="javascript:void(0);" class="waves-effect"><i
                        class="mdi mdi-format-list-bulleted-type"></i><span>Quản Lý Liên Hệ<span
                            class="float-right menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                    <li><a href="admin/lienhe/danhsach">Danh sách liên hệ</a></li>
                </ul>
                </li>
                {{-- Footer --}}
                <li><a href="javascript:void(0);" class="waves-effect"><i
                    class="mdi mdi-format-list-bulleted-type"></i><span>Quản Lý Footer<span
                        class="float-right menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></span></a>
                <ul class="submenu">
                <li><a href="admin/footer/danhsach">Danh sách Footer</a></li>
                 
                    
            </ul>
            </li>
               {{-- Header --}}
               <li><a href="javascript:void(0);" class="waves-effect"><i
                class="mdi mdi-format-list-bulleted-type"></i><span>Quản Lý Header<span
                    class="float-right menu-arrow"><i
                        class="mdi mdi-chevron-right"></i></span></span></a>
            <ul class="submenu">
            <li><a href="admin/header/danhsach">Danh sách header</a></li>
        </ul>
        </li>
               {{-- Hinh ke slide --}}
       
        {{--  --}}
          
            <li><a href="javascript:void(0);" class="waves-effect"><i
                class="mdi mdi-format-list-bulleted-type"></i><span>Quản Lý Tài Khoản<span
                    class="float-right menu-arrow"><i
                        class="mdi mdi-chevron-right"></i></span></span></a>
            <ul class="submenu">
            <li><a href="admin/user/danhsach">Danh sách Tài Khoản</a></li>
            <li><a href="admin/user/them">Thêm</a></li>
        </ul>
        </li>
        {{-- Video --}}
          
        <li><a href="javascript:void(0);" class="waves-effect"><i
            class="mdi mdi-format-list-bulleted-type"></i><span>Quản Lý Video<span
                class="float-right menu-arrow"><i
                    class="mdi mdi-chevron-right"></i></span></span></a>
        <ul class="submenu">
        <li><a href="admin/video/danhsach">Danh sách Video</a></li>
        <li><a href="admin/video/them">Thêm Video</a></li>
        </ul>
    </li>
    {{--  --}}
    <li><a href="javascript:void(0);" class="waves-effect"><i
        class="mdi mdi-format-list-bulleted-type"></i><span>Quản Lý Tin Nổi Bật<span
            class="float-right menu-arrow"><i
                class="mdi mdi-chevron-right"></i></span></span></a>
    <ul class="submenu">
    <li><a href="admin/tintucnoibat/danhsach">Danh sách tin nổi bật</a></li>
    <li><a href="admin/tintucnoibat/them">Thêm tin tức</a></li>
</ul>
</li>
            </div>

            <!-- Sidebar -->
            <div class="clearfix"></div>
        </div><!-- Sidebar -left -->
    </div>