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
        .content .box_company {
            width: 490px;
            float: left;
            padding: 10px 20px 0px 20px;
            text-align: justify;
            font: 12px Tahoma;
            color: #3d2610;
            line-height: 1.5em;
        }

    </style>
    <div class="content">
        <!--End Bang Gia -->
        <div class="content_main">
            <div class="cover_aboutus">
                <div class="box_company">
                    <div class="title_aboutus"><img src="http://resort.scodeweb.com/images/txt-contact-us-vn.png"></div>
                    <!-- modal content -->
                    <!-- Load jQuery, SimpleModal and Basic JS files -->
                    <div class="clear"></div>
                </div>
                <div id="orderroom-area" style="padding-top:25px;float:left;margin-left:20px;clear:both">
                    <form name="f" method="post" action="{{ route('chotel.booking.save') }}">
                        @csrf
                        <div class="row">
                            <label for="name" class="w_label"><b>Họ tên (*) :</b></label>
                           {{-- {{dd($rooms)}}--}}
                            {{ $rooms->name }}
                        </div>
                        <div class="clear"></div>
                        <div class="row">
                            <label for="address" class="w_label"><b>Địa chỉ :</b></label>
                            {{ $rooms->options->t_address }}
                        </div>
                        <div class="clear"></div>
                        <div class="row">
                            <label for="tel" class="w_label"><b>Điện thoại :</b></label>
                            {{ $rooms->options->t_phone }}
                        </div>
                        <div class="clear"></div>
                        <div class="row">
                            <label for="email" class="w_label"><b>Email (*) :</b></label>
                            {{ $rooms->options->t_email }}
                        </div>
                        <div class="clear"></div>
                        <div class="row">
                            <label for="message" class="w_label"><b>Nội dung (*) :</b></label>
                            {{ $rooms->options->t_note }}
                        </div>
                        <div class="clear"></div>
                    </div>
                <div id="orderroom-area" style="padding-top:25px;float:none;margin-left:20px;float:left;width:515px">
                    <div class="row">
                        <label for="name" class="w_label"><b>Tên Phòng :</b></label>
                        {{ $rooms->options->type_id }} - <font color="red">{{ $rooms->price }}VND /1 suất</font>
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                        <label for="address" class="w_label"><b>Ngày Đặt :</b></label>
                        {{ $rooms->options->t_checkin }}
                    </div>
                    <div class="row">
                        <label for="address" class="w_label"><b>Ngày Trả :</b></label>
                        {{ $rooms->options->t_checkout }}
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                        <label for="tel" class="w_label"><b>Người lớn :</b></label>
                        {{ $rooms->options->t_big }}
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                        <label for="email" class="w_label"><b>Trẻ em  :</b></label>
                        {{ $rooms->options->t_mall }}
                    </div>

                    <div class="clear"></div>
                    <div class="row">
                        <label for="message" class="w_label"><b>Thành tiền  :</b></label>
                        <font color="red">{{ Cart::subtotal() }} VNĐ</font>
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                        <label for="Message" class="w_label">&nbsp;</label>
                       {{-- <input type="button" class="submit-button btn btn-success" value="Thanh toán online" style="width:120px">
                        <input type="hidden" value="1950000" name="total">--}}
                        <input type="submit" name="order_offline" value="Thanh toán trực tiếp" class="submit-button  btn btn-success" style="width:175px; margin-top: 15px;">
                        <input type="button" value="Hủy" class="submit-button  btn btn-success" style="width:60px;margin-top: 15px;">
                    </div>
                    </form>
                </div>
                <div class="clear"></div>
            </div>
            <!-- End About-->
        </div>
        <!-- End Content Main -->
    </div>
    <div class="clear"></div>
@stop