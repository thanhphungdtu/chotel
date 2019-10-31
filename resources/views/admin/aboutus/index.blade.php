@extends('templates.admin.master')
@section('content')
    <style>
        p.text_content {
            white-space: nowrap;
            width: 300px;
            height:40px;
            text-overflow: ellipsis;
            overflow: hidden;
            font-size: 14px;
        }
    </style>
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý giới thiệu</h2>
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
                                    <a href="{{ route('admin.aboutus.getadd') }}" class="btn btn-success btn-md">Thêm</a>
                                </div>
                            </div>

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th width="400px">Preview Text</th>
                                    <th style="width: 150px;">Hình ảnh</th>
                                    <th style="width: 120px; text-align: center">Active</th>
                                    <th width="160px">Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($abouts))
                                    @foreach($abouts as $about)
                                        <tr class="">
                                            <td>{{ $about->id }}</td>
                                            <td>{!! $about->preview_text !!}</td>
                                            <td><img src="{{ pare_url_file($about->picture) }}" alt="" style="width: 150px;"></td>
                                            <td style="text-align:center;width: 50px;"><a href="{{ route('admin.aboutus.action',['active',$about->id]) }}" class="label {{$about->getStatus($about->active)['class']}}">{{ $about->getStatus($about->active)['name'] }}</a></td>
                                            <td class="center">
                                                <a href="{{ route('admin.aboutus.getEdit',$about->id) }}" title="" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                                                <a href="{{ route('admin.aboutus.action',['delete',$about->id]) }}" title="" class="btn btn-danger"><i class="fa fa-pencil"></i> Xóa</a>
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