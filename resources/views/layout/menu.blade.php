<div class="row session-nav ">
    <nav class="navbar new-nav-mnv">
        <ul class="nav navbar-nav background-menu-mnv">
            <li class="dropdown dropdown-mnv">
                @foreach($theloaitrangchu as $tc)
            <a class="active" href="{{$tc->TenKhongDau}}.html" data-toggle="" data-hover="dropdown">{{$tc->Ten}}<b
                        class="caret"></b></a>
                        @endforeach
                <ul class="dropdown-menu">
                @foreach($loaitintrangchu as $tc)
                    
                    <li><a href="{{$tc->TenKhongDau}}">{{$tc->Ten}}</a></li>
                    @endforeach

                </ul>
            </li>

            <li class="dropdown dropdown-mnv">
                @foreach($theloaitintuc as $tt)
                <a href="the-loai/{{$tt->id}}/{{$tt->TenKhongDau}}.html" data-toggle="" data-hover="dropdown">{{$tt->Ten}}<b
                        class=""></b></a>
                    @endforeach

            </li>

            <li class="dropdown dropdown-mnv">
                @foreach($theloaivanhoaamthuc as $tt)
            <a href="the-loai/{{$tt->id}}/{{$tt->TenKhongDau}}.html" data-toggle="" data-hover="dropdown">{{$tt->Ten}}<b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                @foreach($tt->loaitin as $lt)

                    <li><a href="loai-tin/{{$lt->id}}/{{$lt->TenKhongDau}}.html">{{$lt->Ten}}</a></li>
                    @endforeach
                   
                    <li class="dropdown-submenu">
                     @foreach($theloaivanhoaamthuc1 as $tt)

                        <a href="#">{{$tt->Ten}}</a>
                        <ul class="dropdown-menu">
                              @foreach($tt->loaitin as $lt)
                            <li><a href="loai-tin/{{$lt->id}}/{{$lt->TenKhongDau}}.html">{{$lt->Ten}}</a></li>
                              @endforeach
                            
                        </ul>
                    @endforeach

                    </li>
                    @endforeach
                </ul>
            </li>

            <li class="dropdown dropdown-mnv">
                    @foreach($theloaidiachi as $tt)
                <a href="the-loai/{{$tt->id}}/{{$tt->TenKhongDau}}.html" data-toggle="" data-hover="dropdown">{{$tt->Ten}}<b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                @foreach($tt->loaitin as $lt)
                    <li><a href="loai-tin/{{$lt->id}}/{{$lt->TenKhongDau}}.html">{{$lt->Ten}}</a></li>
                @endforeach
                </ul>
                @endforeach

            </li>
            <li class="dropdown dropdown-mnv">
                    @foreach($theloainghebep as $tt)
                <a href="the-loai/{{$tt->id}}/{{$tt->TenKhongDau}}.html" data-toggle="" data-hover="dropdown">{{$tt->Ten}}<b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                @foreach($tt->loaitin as $lt)
                <li><a href="loai-tin/{{$lt->id}}/{{$lt->TenKhongDau}}.html">{{$lt->Ten}}</a></li>
                @endforeach
            </ul>
                @endforeach
            </li>
            
            <li class="dropdown dropdown-mnv">
                    @foreach($theloailangnghe as $tt)
                <a href="the-loai/{{$tt->id}}/{{$tt->TenKhongDau}}.html" data-toggle="" data-hover="dropdown">{{$tt->Ten}}<b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                @foreach($tt->loaitin as $lt)
                    <li><a href="loai-tin/{{$lt->id}}/{{$lt->TenKhongDau}}.html">{{$lt->Ten}}</a></li>
                @endforeach
                 </ul>
                @endforeach
            </li>

            <li class="dropdown dropdown-mnv">
                    @foreach($theloaihoatdong as $tt)
                    <a href="the-loai{{$tt->id}}/the-loai/{{$tt->id}}/{{$tt->TenKhongDau}}.html" data-toggle="" data-hover="dropdown">{{$tt->Ten}}<b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                @foreach($tt->loaitin as $lt)
                <li><a href="loai-tin/{{$lt->id}}/{{$lt->TenKhongDau}}.html">{{$lt->Ten}}</a></li>
                @endforeach
            </ul>
                @endforeach
            </li>
        </ul>
    </nav>

</div>