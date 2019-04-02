<div class="sidebar sidebar-mnv">
        @foreach($theloailangnghe as $tt)
    <h2 class="title-news villages">{{$tt->Ten}}</h2>
        <ul class="latest-news sidebar-mnv-li">
            <?php 
                $data=$tt->tintuc->where('HienThi',1)->sortbyDesc('createa_at')->take(4);
                $tintuc1=$data->shift();
                ?>
                {{-- @foreach($tt->loaitin as $lt)
                @foreach($lt->tintuc as $ttt) --}}
            <li class="col-md-12">
            <h3><a href="blog-detail.html">{{$tintuc1['TieuDe']}}</a>
                </h3>
                <div class="image">
                    <a href="blog-detail.html"></a>
                    <img src="upload/tintuc/{{$tintuc1['Hinh']}}" alt="" />
                </div>
                <ul class="top-info">
                    <div class="des" data-maxlength="100">
                        <p>{!!$tintuc1['TomTat']!!}</p>
                    </div>
                </ul>
                {{-- @endforeach --}}
            </li>
             {{-- @endforeach --}}
           
        </ul>
        @endforeach
   
    </div>