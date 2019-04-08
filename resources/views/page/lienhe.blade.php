@extends('layout.index1')
@section('content')
	<div class="content contacts">
			@foreach($header as $h)

			<div id="contacts_map">
				{!!$h->DiaChi!!}
			</div>
			@endforeach
			
			<div class="container">
				<div class="row">

					<div id="contacts-overlay" class="col-sm-7">
						<i id="contacts-overlay-close" class="fa fa-minus"></i>
						@foreach($header as $h)
						<ul class="col-sm-6">
								<li><i class="fa fa-envelope"></i> <a
									href="mailto:youremail@domain.com">{{$h->email}}</a></li>
									
						</ul>

						<ul class="col-sm-6">
						<li><i class="fa fa-phone"></i>Số điện thoại :{{$h->sdt}}</li>
							<li><i class="fa fa-print"></i> Fax: {{$h->Fax}}</li>
						</ul>
						@endforeach
					</div>

					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-4 col-sm-offset-8">
						<h2 class="section-title">Liên hệ với chúng tôi</h2>
						<p class="col-sm-12 center"><a href="#"></a></p>
						@if(count($errors)>0)
						<div class="alert alert-danger">
						  @foreach($errors->all() as $err)
							  {{$err}}<br>
						  @endforeach
					  @endif
		
					  @if(session('thongbao'))
						<div class="alert alert-success">
						  {{session('thongbao')}}
					  @endif
						<form action="lien-he.html" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>

							<div class="col-sm-12">
								<input type="text" name="Name" placeholder="Nhập tên của bạn"
									class="form-control required fromName" required/>

								<input type="email" name="Email" placeholder="Nhập Email của bạn"
									class="form-control required fromEmail" required/>

								<input type="text" name="sdt" placeholder="Số điện thoại"
                                    class="form-control required subject"required />
                                    
								<textarea name="LoiNhan" rows="5" placeholder="Lời nhắn của bạn" class="form-control required" required></textarea>
							</div>

							<div class="center">
								<button type="submit" class="btn btn-default-color btn-lg"><i
										class="fa fa-envelope"></i>Gửi</button>
							</div>
						</form>
					</div>
					<!-- END MAIN CONTENT -->

				</div>
			</div>
		</div>

@endsection