<ul>
	@if(isset($roomtypes))
		@foreach($roomtypes as $roomtype)
	<li class="selected">
		<a href="{{ route('chotel.roomtype.cat',[\Str::slug($roomtype->tname),$roomtype->id]) }}">{{ $roomtype->tname }}</a>
	</li>

		@endforeach
	@endif
</ul>