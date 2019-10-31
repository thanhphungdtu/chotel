@extends('templates.chotel.master')
@section('content')
    <div class="blog">
        <div class="vnelist">
            <ul>
                @if(isset($roomtypes))
                    @foreach($roomtypes as $roomtype)
                        <li><a href="{{ route('chotel.roomtype.cat',[\Str::slug($roomtype->tname),$roomtype->id]) }}">{{ $roomtype->tname }}</a></li>
                    @endforeach
                @endif
            </ul>

        </div>

        <ul>
            @if(isset($rooms))
                @foreach($rooms as $room)
            <li>
                <div>
                    <a href="#"><img src="{{ pare_url_file($room->picture) }}" alt="" style="width: 270px; height: 230px;"></a> <span></span>
                </div>
                <div>
                    <div>
                        <h3>Phòng {{ $room->rname }}</h3>
                        <div>
                            <span>Tiện ích: {{ $room->utilities->uname }}</span>
                        </div>
                    </div>
                    <p>
                        {!! $room->description !!}
                    </p>
                    <a href="{{ route('chotel.roomtype.detail',[\Str::slug($room->rname.'html'),$room->id]) }}">Chi tiết</a>
                </div>
            </li>
                @endforeach
            @endif

        </ul>
        <ul class="paging">
            <li>
                {{ $rooms->links() }}
            </li>
        </ul>
    </div>
@stop