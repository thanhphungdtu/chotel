<div class="col-md-12">
    <form role="form" method="post" action="">
        @csrf
        <div class="form-group">
            <label>Loại phòng</label>
            <input type="text" name="tname" class="form-control" value="{{ old('tname',isset($roomType->tname) ? $roomType->tname : '') }}"/>
            @if($errors->has('tname'))
                <div class="error-text">
                    {{$errors->first('tname')}}
                </div>
            @endif
        </div>

        <button type="submit" name="submit" class="btn btn-success btn-md">Lưu thông tin</button>
    </form>
</div>