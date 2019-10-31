@extends('templates.chotel.master')
@section('content')
	<style>
		li:nth-child(4) {
			clear: both;
		}
	</style>
<div class="home">

		@if(isset($rooms))
			<?php
				$index = 0;
			?>
			@foreach($rooms as $room)
				@if($index < 1)
					<div class="featured">
						<img src="{{ pare_url_file($room->picture) }}" alt="" style="width: 860px; height: 378px;">
						<div>
							<div>
								<h1 style="position: absolute;left: 98px;top: 82px;font-family: 'Montserrat', sans-serif;font-weight: 200;font-size: 3em; color: darkblue">{{ $room->rname }}</h1>
								<p>{!! $room->description !!}</p>
								<a href="{{ route('chotel.roomtype.detail',[\Str::slug($room->rname.'html'),$room->id]) }}"></a>
							</div>
						</div>
					</div>
					<div>
						<ul>
				@else
							<li style="margin: 0px; margin-left: 18px;" class="chane">
								<a href="{{ route('chotel.roomtype.detail',[\Str::slug($room->rname.'html'),$room->id]) }}">
									<img src="{{ pare_url_file($room->picture) }}" alt="" style="width: 228px;">
								</a>
								<h3 class="title">
									<a href="{{ route('chotel.roomtype.detail',[\Str::slug($room->rname.'html'),$room->id]) }}">{{ $room->rname }}</a>
								</h3>
								<h3>Tiện ích: {{ $room->utilities->uname }}</h3>
								<div style="white-space: nowrap;width: 150px; height: 18px;text-overflow: ellipsis;overflow: hidden;">
									{!! substr($room->description,0,300)."..." !!}
								</div>

								<a href="{{ route('chotel.roomtype.detail',[\Str::slug($room->rname),$room->id]) }}" class="click-here"></a>

							</li>

				@endif
					{{--<li style="clear:both"></li>--}}

			@php
				$index ++;
			@endphp

			@endforeach

				</ul>
			</div>
		@endif
	</div>


<div class="blog">
	<ul class="paging"  style="margin-top:20px !important;">
		{!! $rooms->links() !!}
	</ul>
</div>
@stop
