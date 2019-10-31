<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CHotel | VinaEnter Edu</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{$publicUrl}}/css/style.css" type="text/css">

</head>
<body>
	<div class="page">
		<div class="header">
			<a href="{{ route('chotel.index.index') }}" id="logo"><img src="{{$publicUrl}}/images/logo.png" alt="logo"></a>
			<div>
				<div>
					<a href="http://vinaenter.edu.vn">Một dự án PHP tại VinaEnter Edu</a>
				</div>
				<div>
					<ul>
						<li class="selected">
							<a href="{{ route('chotel.index.index') }}"><span>Trang chủ</span></a>
						</li>
						<li>
							<a href="{{ route('chotel.about.index') }}"><span>Giới thiệu</span></a>
						</li>
						<li>
							<a href="{{ route('chotel.roomtype.index') }}"><span>Các phòng</span></a>
						</li>
						<li style="clear: none">
							<a href="{{ route('chotel.contact.index') }}"><span>Liên hệ</span></a>
						</li>
					</ul>
					<form action="{{ route('chotel.roomtype.index') }}" method="get">
						<input type="text"  value="{{ Request::get('search') }}" name="search" placeholder="Tìm phòng khách sạn...">
						<input type="submit" value="">
					</form>
				</div>
			</div>
		</div>
		<div class="body">
