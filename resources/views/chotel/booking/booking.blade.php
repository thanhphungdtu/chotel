@extends('templates.chotel.master')
@section('content')
    <style>
        .content {
            width: 965px;
            height: 600px;
            padding: 8px 10px 10px 10px;
            _background: url(/images/bg-content.png) left top no-repeat;
            _overflow: hidden;
            line-height: 1.5em;
            font: 12px Verdana;
            color: #3d2610;
            position: relative;
            border-radius: 13px;
            background: rgba(255,255,255,0.8);
            min-height: 425px;
            margin-bottom: 20px;
            margin-top: 0px;
            float: left;
        }
        .content .banggia {
            width: 210px;
            float: left;
            overflow: hidden;
            margin-top: 67px;
            list-style-type: none;
        }
        .content .content_main {
            width: 680px;
            float: right;
            height: 600px;
            overflow: hidden;
            padding-left: 10px;
            overflow: hidden;
            position: relative;
        }
        .banggia h3 {
            background: url({{$publicUrl}}/images/cost.png) no-repeat scroll 0 0 transparent;
            border-bottom: 1px solid #DFDFDF;
            font-size: 16px;
            line-height: 30px;
            padding-bottom: 5px;
            padding-left: 36px;
            padding-top: 5px;
        }
        .banggia li {
            border-bottom: 1px solid #dfdfdf;
            background: url({{$publicUrl}}/images/button-check_basic_red.png) no-repeat scroll 0 0 transparent;
            padding-left: 22px;
            padding-bottom: 5px;
        }
        .banggia span {
            width: 150px;
            display: inline-block;
            color: #F68B1F;
            font-weight: bold;
        }
        .banggia i {
            display: inline-block;
            font-style: normal;
            padding-left: 2px;
            width: 154px;
        }
        .clear {
            clear: both;
            font-size: 0px;
            line-height: 0;
            padding: 0px;
            margin: 0px;
        }
        .content_main .cover_aboutus {
            padding-bottom: 10px;
            font: 12px Verdana;
            color: #3d2610;
        }
        .cover_aboutus .title_aboutus {
            width: 570px;
            padding: 10px 0px 10px 0px;
        }
        .booking {
            width: 630px;
            display: inline;
            float: right;
            margin-bottom: 3px;
            margin-top: 3px;
            float: left;
            height: 800px;
        }
        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle;
            height: 25px;
        }
        .form-group{
            margin: 5px;
        }
        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle;
            height: 25px;
            width: 300px;
        }

    </style>
    <div class="content">
        <ul class="banggia">
            <h3>Bảng giá phòng </h3>
            <li><span>Standard A</span> <i>400 000 VNĐ</i></li>
            <li><span>Standard B</span> <i>530 000 VNĐ</i></li>
            <li><span>Superior</span> <i>590 000 VNĐ</i></li>
            <li><span>Deluxe single</span> <i>650 000 VNĐ</i></li>
            <li><span>Deluxe double beb</span> <i>990 000 VNĐ</i></li>
            <li><span>Excutive Deluxe </span> <i>780 000 VNĐ</i></li>
            <li><span>VIP 1</span> <i>1 100 000 VNĐ</i></li>
            <li><span>VIP 2</span> <i>830 000 VNĐ</i></li>
        </ul>
        <!--End Bang Gia -->
        <div class="content_main">
            <div class="cover_aboutus">
                <form class="form-inline" action="" method="post">
                    @csrf
                    <div class="title_aboutus"><img src="http://resort.scodeweb.com/images/txt-booking.png"></div>
                    <div class="booking">
                        <div class="form-group">
                            <label for="email" style="display: block">Họ tên (*) :</label>
                            <input type="text" class="form-control" id="t_name" name="t_name">
                        </div>
                        <div class="form-group">
                            <label for="pwd" style="display: block">Di Động (*) :</label>
                            <input type="phone" class="form-control" id="pwd"  name="t_phone">
                        </div>
                        <div class="form-group">
                            <label for="pwd" style="display: block">Email (*) :</label>
                            <input type="email" class="form-control" id="pwd"  name="t_email">
                        </div>

                        <div class="form-group">
                            <label for="pwd" style="display: block">Địa chỉ :</label>
                            <input type="text" class="form-control" id="pwd"  name="t_address">
                        </div>

                        <div class="form-group">
                            <label for="pwd" style="display: block">Ngày đặt (*) :</label>
                            <input type="datetime-local" class="form-control" placeholder="00/00/0000" id="pwd"  name="t_checkin">
                        </div>

                        <div class="form-group">
                            <label for="pwd" style="display: block">Ngày trả (*) :</label>
                            <input type="datetime-local" class="form-control" placeholder="00/00/0000" id="pwd"  name="t_checkout">
                        </div>

                        <div class="form-group">
                            <label for="pwd" style="display: block">Loại phòng (*) :</label>
                            <select class="form-control" id="sel1" name="type_id" style="height: 32px; width: 300px;">
                                <option value="">Chọn loại phòng</option>
                                @if(isset($roomTypes))
                                    @foreach($roomTypes as $roomType)
                                        <option value="{{ $roomType->id }}" {{ old('type_id',isset($room->type_id) ? $room->type_id : '') == $roomType->id ? "selected='selected'" : ""  }}>{{$roomType->tname}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pwd" style="display: block">Số lượng phòng (*) :</label>
                            <input type="number" class="form-control" id="pwd"  name="t_qty">
                        </div>

                        <div class="form-group">
                            <label for="pwd" style="display: block">Người lớn :</label>
                            <input type="number" class="form-control" id="pwd"  name="t_big">
                        </div>

                        <div class="form-group">
                            <label for="pwd" style="display: block">Trẻ em :</label>
                            <input type="number" class="form-control" id="pwd"  name="t_mall">
                        </div>


                        <div class="form-group">
                        <label for="pwd" style="display: block">Ghi chú :</label>
                        <textarea name="t_note" cols="80" rows="5"></textarea>
                        </div>

                        <br class="clear">
                            <input type="submit" name="submit" value="Đặt Phòng" class="submit-button btn btn-primary" style="margin-top: 10px">
                            <input type="reset" name="submit" value="Làm lại" class="submit-button btn btn-primary" style="margin-top: 10px">
                        </div>
                </form>
            </div>
            <!-- End About-->
        </div>
        <!-- End Content Main -->
    </div>
    <div class="clear"></div>
@stop