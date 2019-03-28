@include('layout.header2');
<div id="columns" class="columns-container">
  <!-- container -->
  <div class="container">
    <div class="row">
      <div id="center_column" class="col-lg-9 col-md-9">
        <div class="single-post">
          <div class="blog-detail">
              <h1 class="title_block" style="font-size: 33px" >{{$tintuc->TieuDe}}</h1>
            <div class="blog-image">
              <img src="upload/tintuc/{{$tintuc->Hinh}}" alt="{{$tintuc->TieuDe}}" class="img-responsive">
            </div>
            {{-- <h1 class="title_block">phong</h1> --}}
            <div class="post-meta">
              <div class="fb-like" data-href="https://www.facebook.com/Th%C3%ADch-%C4%90%C3%A0-L%E1%BA%A1t-412471572820570/?modal=admin_todo_tour" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
              <br/> <span class="post-tip" style="font-size: 17px;"> <span class="fas fa-clock" style="font-size:17px;" ></span>{{$tintuc->created_at}} </span>
                <span style="font-size: 19px;"class="comment"><em class="fa fa-eye"></em> {{$tintuc->SoLuotXem}} Lượt xem</span>
              <h5 class="title_block">Chia sẻ bài viết<span class="cm-count"></span></h5>
              <div class="fb-share-button" data-href="{{asset('')}}/{{$tintuc->id}}/{{$tintuc->TieuDeKhongDau}}" data-layout="button_count" data-size="small"><a target="_blank" href="https://thanhphongsmartphone.herokuapp.com" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
              <div class="comments-area">
            </div><!-- end post-meta -->
            <div class="post-content">
          <p>
            {!!$tintuc->NoiDung!!}
          </p>
            </div>
            <div class="post-tag clearfix">
              <div class="post-tag-lr post-tag-left">
                <strong>Tags:</strong>
                <a href="#" title="Tip & trick">Đà Lạt</a>
                <a href="#" title="Culinary">Vui chơi Đà Lạt</a>

              </div>
              <div class="post-tag-lr post-tag-right">
                <div class="social_block">
                  <ul class="links">
                    <li><a href="#" title="Facebook"><em class="fa fa-facebook"></em><span class="unvisible">facebook</span> </a></li>
                    <li><a href="#" title="Twitter"><em class="fa fa-twitter"></em><span class="unvisible">Twitter</span> </a></li>
                    <li><a href="#" title="Google"><em class="fa fa-google-plus"></em><span class="unvisible">goGoogleogle</span> </a></li>
                    <li><a href="#" title="Linkedin"><em class="fa fa-linkedin"></em><span class="unvisible">Linkedin</span> </a></li>
                    <li><a href="#" title="Pinterest"><em class="fa fa-pinterest"></em><span class="unvisible">Pinterest</span> </a></li>
                    <li class="last"><a href="#" title="Instagram"><em class="fa fa-instagram"></em><span class="unvisible">Instagram</span> </a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- end blog-detail -->
          <div class="fb-like" data-href="https://www.facebook.com/Th%C3%ADch-%C4%90%C3%A0-L%E1%BA%A1t-412471572820570/?modal=admin_todo_tour" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>



            <h4 class="title_block">Bình luận về bài viết<span class="cm-count"></span></h4>
            <div class="fb-comments" data-href="https://www.facebook.com/ITthanhphong/{{$tintuc->id}}" data-numposts="5"></div>
            {{-- <ol class="comments-list">
              <li>
                <div class="comment-inner">
                  <div class="comment-head media">
                    <div class="cm-avatar pull-left">
                      <img src="img/default/avatar/avatar1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="cm-content media-body">
                      <div class="cm-meta">
                        <a class="link-author" href="#">Lunatmtn</a>
                        <span class="cm-date">Mar 2nd 2018</span>
                        <a href="#" class="reply-link"><i class="fa fa-mail-reply-all"></i>Reply</a>
                      </div>
                      <div class="cm-des">
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>
                      </div>
                    </div><!--end cm-content media-body -->
                  </div><!--end comment head -->
                </div><!--end comment inner -->
                <ol>
                  <li>
                    <div class="comment-inner">
                      <div class="comment-head media">
                        <div class="cm-avatar pull-left">
                          <img src="img/default/avatar/avatar2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="cm-content media-body">
                          <div class="cm-meta">
                            <a class="link-author" href="#">Admin</a>
                            <span class="cm-date">Mar 2nd 2018</span>
                            <a href="#" class="reply-link"><i class="fa fa-mail-reply-all"></i>Reply</a>
                          </div>
                          <div class="cm-des">
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>
                          </div>
                        </div><!--end cm-content media-body -->
                      </div><!--end comment head -->
                    </div><!--end comment inner -->
                  </li>
                </ol>
              </li>
              <li>
                <div class="comment-inner">
                  <div class="comment-head media">
                    <div class="cm-avatar pull-left">
                      <img src="img/default/avatar/avatar1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="cm-content media-body">
                      <div class="cm-meta">
                        <a class="link-author" href="#">Nunatmtn</a>
                        <span class="cm-date">Mar 2nd 2018</span>
                        <a href="#" class="reply-link"><i class="fa fa-mail-reply-all"></i>Reply</a>
                      </div>
                      <div class="cm-des">
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>
                      </div>
                    </div><!--end cm-content media-body -->
                  </div><!--end comment head -->
                </div><!--end comment inner -->
              </li>
            </ol><!--end comments lest --> --}}
          </div><!-- end comments-area -->

          {{-- <div class="comments-form">
            <h4 class="title_block">Leave us a comment</h4>
            <p>Dont worry! Your email is always unpublic. The fields (*) is require!</p>
            <form action="#" class="form-horizontal">
              <div class="form-group">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <input type="text" class="form-control input-email" placeholder="Your Name *">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <input type="email" class="form-control" placeholder="Your email *">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-12">
                  <textarea class="form-control" placeholder="Your comment *" ></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-12">
                  <button class="btn button btn-primary">Send message</button>
                </div>
              </div>
            </form><!--end form -->
          </div><!--end comments form --> --}}
        </div><!-- end single-post -->
      </div><!-- end center_column -->
      <div id="right_column" class="sidebar col-lg-3 col-md-3">
        <div id="blog-search" class="block blog-search">
          <h4 class="title_block">Tìm kiếm</h4>
          <div class="block_content">
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
          <h4 class="title_block">Địa điểm du lịch được yêu thích</h4>
          <div class="block_content">
            <ul class="list-block">
              @foreach($loaitin as $lt)
              <li>
                <a href="loaitin/{{$lt->id}}/{{$lt->TenKhongDau}}.html" title="Culinary">
                  {{$lt->Ten}}
                  <!-- <span class="count">30</span> -->
                </a>
              </li>
            @endforeach
            </ul>
          </div>
        </div><!-- end categories_blog_menu -->
        @foreach($quangcao as $qc)
        <div class="block block_banner">
          <ul>
            <li class="effect">
              <a class="image-wrap" href="{{$qc->link}}"><img class="img-responsive" src="upload/quangcao/{{$qc->Hinh}}" alt="{{$qc->Ten}}"></a>
            </li>
          </ul>
        </div><!-- end block_banner -->
        @endforeach
        <div id="recent-posts" class="block recent-posts">
          <h4 class="title_block">BÀI VIẾT LIÊN QUAN</h4>
          <div class="block_content">
            <ul class="posts-list">
              @foreach($tinlienquan as $tt)
              <li>
                <div class="media">
                  <div class="post-image">
                    <a href="tintuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">
                      <img class="img-responsive" src="upload/tintuc/{{$tt->Hinh}}" alt="{{$tt->TieuDe}}" width="202" height="152">
                    </a>
                  </div>
                  <div class="post-info media-body">
                    <h5><a href="tintuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html" title="">{{$tt->TieuDe}}</a></h5>
                  </div>
                </div>
              </li>
            @endforeach

            </ul>
          </div>
        </div><!-- end recent-posts -->

      </div><!-- end right_column -->
    </div>
  </div> <!-- end container -->
</div><!--end columns -->
@include('layout.footer');
