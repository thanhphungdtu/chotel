@extends('templates.admin.master')
@section('content')
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý phòng</h2>
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
                                    <a href="{{ route('admin.room.getadd') }}" class="btn btn-success btn-md">Thêm</a>
                                </div>
                            </div>

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên phòng</th>
                                    <th>Loại phòng</th>
                                    <th>Tiện ích</th>
                                    <th style="width: 150px;">Hình ảnh</th>
                                    <th>Ngày tạo</th>
                                    <th width="160px">Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($rooms))
                                    @foreach($rooms as $room)
                                        <tr class="">
                                            <td>{{ $room->id }}</td>
                                            <td>{{ $room->rname }}</td>
                                            <td>{{ isset($room->roomtype->tname) ? $room->roomtype->tname : '[N\A]' }}</td>
                                            <td>{{ isset($room->utilities->uname) ? $room->utilities->uname : '[N\A]' }}</td>
                                            <td><img src="{{ pare_url_file($room->picture) }}" alt="" style="width: 150px;"></td>
                                            <td>{{ $room->created_at }}</td>
                                            <td class="center">
                                                {{--@can('admin')--}}
                                                <a href="{{ route('admin.room.getEdit',$room->id) }}" title="" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                                                <a href="{{ route('admin.room.getdelete',$room->id) }}" title="" class="btn btn-danger"><i class="fa fa-pencil"></i> Xóa</a>
                                               {{-- @endcan--}}
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
                                    {{ $rooms->links() }}
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