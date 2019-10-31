@extends('templates.admin.master')
@section('content')
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý đặt phòng</h2>
                <div class="export">
                <a href ="{{ route('admin.transaction.export') }}" class="btn btn-info export pull-right" id="export-button"> Export file </a>
                </div>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="row">
                                <div class="col-sm-6" style="margin-bottom: 10px;">
                                </div>
                            </div>

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Họ tên</th>
                                    <th>Điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th style="width: 10px;">Email</th>
                                    <th>Tên phòng</th>
                                    <th>Ngày đặt</th>
                                    <th>Ngày trả</th>
                                    <th>Người lớn</th>
                                    <th>Trẻ em</th>
                                    <th>Thành tiền</th>
                                    <th>Trạng thái</th>
                                    <th width="160px">Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($transactions))
                                    @foreach($transactions as $transaction)
                                        <tr class="">
                                            <td>{{ $transaction->id }}</td>
                                            <td>{{ $transaction->t_name }}</td>
                                            <td>{{ $transaction->t_phone }}</td>
                                            <td>{{ $transaction->t_adress }}</td>
                                            <td>{{ $transaction->t_email }}</td>
                                            <td>{{ $transaction->t_name_room }}</td>
                                            <td>{{ $transaction->t_date_checkin }}</td>
                                            <td>{{ $transaction->t_date_checkout }}</td>
                                            <td>{{ $transaction->t_big }}</td>
                                            <td>{{ $transaction->t_mall }}</td>
                                            <td>{{ number_format($transaction->t_total,0,',',',') }}Đ</td>
                                            <td><a href="{{ route('admin.transaction.action',['active',$transaction->id]) }}" class="label {{$transaction->getStatus($transaction->t_active)['class']}}">{{ $transaction->getStatus($transaction->t_active)['name'] }}</a></td>

                                            <td class="center">
                                                <a href="{{ route('admin.transaction.action',['delete',$transaction->id]) }}" title="" class="btn btn-danger"><i class="fa fa-pencil"></i> Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-6">
                                </div>
                                <div class="col-sm-6" style="text-align: right;">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>

    </div>
    <!-- /. PAGE INNER  -->
@stop