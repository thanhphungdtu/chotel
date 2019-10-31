@extends('templates.admin.master')
@section('content')
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý danh mục</h2>
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
                                    <a href="{{ route('admin.roomtype.getadd') }}" class="btn btn-success btn-md">Thêm</a>
                                </div>
                            </div>

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên loại</th>
                                        <th width="160px">Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @if(isset($roomTypeLists))
                                      @foreach($roomTypeLists as $roomTypeList)
                                    <tr class="">
                                        <td>{{ $roomTypeList->id }}</td>
                                        <td>{{ $roomTypeList->tname }}</td>
                                        <td class="center">
                                            <a href="{{ route('admin.roomtype.getEdit',$roomTypeList->id) }}" title="" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                                            <a href="{{ route('admin.roomtype.getdelete',$roomTypeList->id) }}" title="" class="btn btn-danger"><i class="fa fa-pencil"></i> Xóa</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                  @endif
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-6">
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