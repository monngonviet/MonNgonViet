@include('layout.header2')
<html lang="zxx">

<!-- Mirrored from gitapp.top/demo/authfy/demo/login-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 13:52:47 GMT -->
<head>
  <!-- Basic Page Needs

  ================================================== -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- For Search Engine Meta Data  -->
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="yoursite.com" />
  <base href="http://localhost:80/TravelVN/public/">

  </head>

  <body>
    <!-- Start Preloader -->
    <div id="preload-block">
        <div class="square-block"></div>
    </div>
    <!-- Preloader End -->

    <div class="container-fluid">
      <div class="row">
        <div class="authfy-container col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
          <div class="col-sm-5 authfy-panel-left">
            <div class="brand-col">
              <div class="headline">
                <!-- brand-logo start -->
                <div class="brand-logo">
                  <img src="img/slide/dlheader2.png" width="150" alt="brand-logo">
                </div><!-- ./brand-logo -->
                <p>Đăng nhập với...</p>
                <!-- social login buttons start -->
                <div class="row social-buttons">
                  <div class="col-xs-4 col-sm-4 col-md-12">
                    <a href="#" class="btn btn-block btn-facebook">
                      <i class="fa fa-facebook"></i> <span class="hidden-xs hidden-sm">Signin with facebook</span>
                    </a>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-12">
                    <a href="#" class="btn btn-block btn-twitter">
                      <i class="fa fa-twitter"></i> <span class="hidden-xs hidden-sm">Signin with twitter</span>
                    </a>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-12">
                    <a href="#" class="btn btn-block btn-google">
                      <i class="fa fa-google-plus"></i> <span class="hidden-xs hidden-sm">Signin with google</span>
                    </a>
                  </div>
                </div><!-- ./social-buttons -->
              </div>
            </div>
          </div>
          <div class="col-sm-7 authfy-panel-right">
            <!-- authfy-login start -->
            <div class="authfy-login">
              <!-- panel-login start -->
              <div class="authfy-panel panel-login text-center active">
                <div class="authfy-heading">
                  <h3 class="auth-title">ĐĂNG NHẬP</h3>
                  <p>Bạn chưa có tài khoản<a class="lnk-toggler" data-panel=".panel-signup" href="#">Đăng kí tại đây</a></p>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    @if(count($errors)>0)
                      <div class="alert aler-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    @endif
                    @if(session('thongbao'))
                      <div class="alert aler-sucess">
                        {{session('thongbao')}}
                    @endif
                    <form name="loginForm" class="loginForm" action="dangnhap" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                      <div class="form-group">
                        <input type="email" class="form-control email" name="email" placeholder="Email address">
                      </div>
                      <div class="form-group">
                        <div class="pwdMask">
                          <input type="password" class="form-control password" name="password" placeholder="Password">
                          <span class="fa fa-eye-slash pwd-toggle"></span>
                        </div>
                      </div>
                      <!-- start remember-row -->
                      <div class="row remember-row">
                        <div class="col-xs-6 col-sm-6">
                          <label class="checkbox text-left">
                            <input type="checkbox" value="remember-me">
                            <span class="label-text">Nhớ mật khẩu</span>
                          </label>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                          <p class="forgotPwd">
                            <a class="lnk-toggler" data-panel=".panel-forgot" href="#">Quên mật khẩu?</a>
                          </p>
                        </div>
                      </div> <!-- ./remember-row -->
                      <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" >Đăng nhập</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div> <!-- ./panel-login -->
              <!-- panel-signup start -->
              <div class="authfy-panel panel-signup text-center">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="authfy-heading">
                      <h3 class="auth-title">Đăng kí tài khoản</h3>
                    </div>
                    <form name="signupForm" class="signupForm" action="dangkiuser" method="POST">
                          <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email address">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="fullname" placeholder="Tên của bạn">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="sdt" placeholder="Số diện thoại">
                      </div>
                      <div class="form-group">
                        <div class="pwdMask">
                          <input  type="password" class="form-control" name="password" placeholder="Password">
                          <span class="fa fa-eye-slash pwd-toggle"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <p class="term-policy text-muted small">I agree to the <a href="#">privacy policy</a> and <a href="#">terms of service</a>.</p>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng kí</button>
                      </div>
                    </form>
                    <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                  </div>
                </div>
              </div> <!-- ./panel-signup -->
              <!-- panel-forget start -->
              <div class="authfy-panel panel-forgot">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="authfy-heading">
                      <h3 class="auth-title">Recover your password</h3>
                      <p>Fill in your e-mail address below and we will send you an email with further instructions.</p>
                    </div>
                    <form name="forgetForm" class="forgetForm" action="#" method="POST">
                      <div class="form-group">
                        <input type="email" class="form-control" name="username" placeholder="Email address">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Recover your password</button>
                      </div>
                      <div class="form-group">
                        <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                      </div>
                      <div class="form-group">
                        <a class="lnk-toggler" data-panel=".panel-signup" href="#">Don’t have an account?</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div> <!-- ./panel-forgot -->
            </div> <!-- ./authfy-login -->
          </div>
        </div>
      </div> <!-- ./row -->
    </div> <!-- ./container -->

    <!-- Javascript Files -->

    <!-- initialize jQuery Library -->
    {{-- login --}}
    <script src="login/js/jquery-2.2.4.min.js"></script>

    <!-- for Bootstrap js -->
    <script src="login/js/bootstrap.min.js"></script>

    <!-- Custom js-->
    <script src="login/js/custom.js"></script>
@include('layout.footer')
