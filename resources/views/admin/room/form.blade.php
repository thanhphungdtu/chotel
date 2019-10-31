<div class="col-md-12">
    <form role="form" method="post" action="" enctype="multipart/form-data">
        @csrf
        {{--<div class="form-group">
            <label>Loại phòng</label>
            <input type="text" name="rname" class="form-control" value="{{ old('rname',isset($roomType->rname) ? $roomType->rname : '') }}"/>
            @if($errors->has('rname'))
                <div class="error-text">
                    {{$errors->first('rname')}}
                </div>
            @endif
        </div>--}}
        <div class="form-group">
            <label>Tên phòng:</label>
            <input type="text" name="rname" class="form-control" value="{{ old('rname',isset($room->rname) ? $room->rname : '') }}">
        </div>
        <div class="form-group">
            <label>Hình ảnh</label>
            <input type="file" name="picture">
        </div>
        <div class="form-group">
            <label>Loại phòng</label>
            <select class="form-control" name="type_id">
                <option value="">Chọn loại phòng</option>
                @if(isset($roomTypes))
                    @foreach($roomTypes as $roomType)
                    <option value="{{ $roomType->id }}" {{ old('type_id',isset($room->type_id) ? $room->type_id : '') == $roomType->id ? "selected='selected'" : ""  }}>{{$roomType->tname}}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group">
            <label>Tiện ích</label>
            <select class="form-control" name="uid">
                <option value="">Chọn tiện ích</option>
                @if(isset($utilities))
                    @foreach($utilities as $utilitie)
                         <option value="{{ $utilitie->id }}" {{ old('uid',isset($room->uid) ? $room->uid : '') == $utilitie->id ? "selected='selected'" : ""  }}>{{ $utilitie->uname }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group">
            <label>Chi tiết:</label>
            <textarea class="form-control" id="pro_content" rows="3" name="description">{{ old('description',isset($room->description) ? $room->description : '') }}</textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-success btn-md">Lưu thông tin</button>
    </form>
</div>
@section('script')
    <script src="{{$adminUrl}}/js/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('pro_content');
    </script>
@stop