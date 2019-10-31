@extends('templates.chotel.master')
@section('content')
			<div class="about">
				@include('templates.chotel.leftbar')
				<div>
					<h3>Liên hệ đến BHotel</h3>
					<div class="vnecontent form">
						
						<h1>Liên hệ với chúng tôi</h1>
						
						<p>
						TRUNG TÂM ĐÀO TẠO LẬP TRÌNH VINAENTER EDU<br />
						Trụ sở: 154 Phạm Như Xương, Liên Chiểu, Đà Nẵng<br />
						Web: <a href="http://vinaenter.edu.vn" title="">www.vinaenter.edu.vn</a>
						</p>
						@if(Session::has('status'))
							<strong style="color: black;font-size: 15px">{{ Session::get('status') }}</strong>
						@endif
						<form action="{{ route('chotel.contact.index') }}" method="post">
							@csrf
							<p><input type="text" class="wpcf7-text" name="fullname" placeholder="Họ tên *"/></p>
							<p><input type="text" class="wpcf7-email" name="email" placeholder="Email *"/></p>
							<p><input type="text" class="wpcf7-text" name="subject" placeholder="Chủ đề *"/></p>
							<p><textarea class="wpcf7-textarea" name="contentt" placeholder="Nội dung *"></textarea></p>
							<p><input type="Submit" class="wpcf7-submit" value="Gửi liên hệ"/></p>
						</form>
							
					</div>
				</div>
			</div>
@stop