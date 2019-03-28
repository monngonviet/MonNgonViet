@include('layout.header')

  <!-- container -->
</br>
  <div id="columns" class="columns-container">
    <div class="container">
      <div class="contact-us">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h2 class="title_block">Liên hệ với chúng tôi</h2>
            <div class="contact-box">
              <p>Mình là một lập trình viên và là người thích đi phượt du lịch bằng xe máy, vì thế trong blog này nội dung mà mình chia sẻ chủ yếu đó là những cảnh đẹp món ăn ngon ở các địa điểm du lịch để chia sẻ với mọi người.

                Được phát triển bởi Phong, một coder vô danh đang sống và học tập tại thành phố Hồ Chí Minh<p>
              <ul>
                <li><i class="fa fa-map-marker"></i><span>16/2B hẻm 12, đường 904, phường Hiệp Phú, Quận 9, Thành Phố Hồ Chí Minh</span></li>
                <li><i class="fa fa-phone"></i><span>0832 210 125</span></li>
                <li><i class="fa fa-location-arrow"></i><a href="#" title="">thanhphong9718@gmail.com</a></li>
              </ul>
            </div><!-- contact-box-->
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="contact-form clearfix">
              <h2 class="title_block">Hãy nhắn tin cho chúng tôi</h2>
              <form method="post" action="" id="cform" autocomplete="on">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" name="name" placeholder="Tên của bạn"/>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="email" id="email" name="email" placeholder="Email của bạn"/>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="text" id="subject" name="sodienthoai" placeholder="Số điện thoại"/>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <textarea id="message" name="LoiNhan" placeholder="Nhập vào tin nhắn của bạn"></textarea>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="g-recaptcha" data-sitekey="6LcaApkUAAAAAEm9eg-qgiPhpjfuksxBR-K37oYe" data-callback="YourOnSubmitFn"></div>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button type="submit" onclick="alert('Chúng tôi sẽ gửi phản hồi nhanh nhất cho bạn')" class="btn button btn-primary">Gửi</button>
                  </div>
                </div>
              </form>
            </div><!-- end contac-form -->
          </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d979.6137033047067!2d106.78176942913248!3d10.852970599516848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527727f3a61b3%3A0xfb9a35128b0866f4!2zMTggxJDGsOG7nW5nIDkwNCwgUGjGsOG7nW5nIFTDom4gUGjDuiwgUXXhuq1uIDksIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1552656864796" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        {{-- <div id="contact-map" class="clearfix">
                  <div id="map"></div><!-- end map -->
          <div class="hidden-lg hidden-md hidden-sm hidden-xs contact-address">Celebrity Theatre, Phoenix, United States, 85008</div>
              </div><!-- end contact-map --> --}}
      </div><!-- end contact-us -->
    </div><!-- end container -->
  </div><!--end columns-->
</div><!--end columns -->
@include('layout.footer')
