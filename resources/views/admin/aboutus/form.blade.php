<div class="col-md-12">
    <form role="form" method="post" action="" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Hình ảnh</label>
            <input type="file" name="picture">
        </div>
        <div class="form-group">
            <label>Mô tả:</label>
            <textarea class="form-control" id="pro_content" rows="3" name="preview_text">{{ old('preview_text',isset($abouts->preview_text) ? $abouts->preview_text : '') }}</textarea>
        </div>
        <div class="form-group">
            <label>Chi tiết:</label>
            <textarea class="form-control" id="detail_text" rows="3" name="detail_text">{{ old('detail_text',isset($abouts->detail_text) ? $abouts->detail_text : '') }}</textarea>
        </div>
        <div class="form-group">
            <label>Active</label>
            <input type="checkbox" name="active" class="form-control" value="1" required checked>
        </div>

        <button type="submit" name="submit" class="btn btn-success btn-md">Lưu thông tin</button>
    </form>
</div>
@section('script')
    <script src="{{$adminUrl}}/js/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('pro_content');
        CKEDITOR.replace('detail_text');
    </script>
@stop