@extends('templates.admin.master')
@section('content')
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý người dùng</h2>
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
                                    <a href="{{ route('admin.user.getadd') }}" class="btn btn-success btn-md">Thêm</a>
                                </div>
                            </div>

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Fullname</th>
                                    <th>Level</th>
                                    <th width="160px">Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($users))
                                    @foreach($users as $user)
                                        <tr class="">
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->fullname }}</td>
                                            <td>
                                                <?php
                                                    if($user->role == 1 && $user->username == 'admin' && $user->id == 1){
                                                        echo 'SupperAdmin';
                                                    }else if($user->role == 1){
                                                        echo 'Admin';
                                                    }else if($user->role == 2){
                                                        echo 'User';
                                                    }
                                                ?>
                                            </td>
                                            <td class="center">
                                                <a href="{{ route('admin.user.getEdit',$user->id) }}" title="" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                                                <a href="{{ route('admin.user.getdelete',$user->id) }}" title="" class="btn btn-danger"><i class="fa fa-pencil"></i> Xóa</a>
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