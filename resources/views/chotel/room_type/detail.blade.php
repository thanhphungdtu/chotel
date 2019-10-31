@extends('templates.chotel.master')
@section('content')
			<div class="about">
				@include('templates.chotel.leftbar')
				<div>
					<h3>{{ $roomDetail->rname }}<a href="{{ route('chotel.booking',[$roomDetail->id]) }}" class="pull-right" style="color: bisque;background-color: #F25F2E;padding: 5px; border: 1px solid;border-radius: 5px;">Booking</a></h3>
					
					<div class="vnecontent">
						<img src="{{ pare_url_file($roomDetail->picture) }}" alt="" style="width: 560px;height: 250px" />
						<p>Giá phòng: <a href="">{{ $roomDetail->r_price }} VNĐ</a></p>
						<p>Loại phòng: <a href="" title="">{{ $roomDetail->roomtype->tname }}</a> Tiện ích: {{  $roomDetail->utilities->uname }}</p>
						{!! $roomDetail->description !!}
					</div>
					<div class="raroom">
						<ul>
						@if(isset($rooms))
							@foreach($rooms as $room)
							<li>
								<a href="{{ route('chotel.roomtype.detail',[\Str::slug($room->rname.'html'),$room->id]) }}" title="">{{ $room->rname }}</a>
							</li>
							@endforeach
						@endif
						</ul>
					</div>
				</div>
			</div>
@stop