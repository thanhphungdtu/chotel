@extends('templates.admin.master')
@section('content')
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Thêm người dùng</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" method="post" action="">
                                    @csrf
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" value="{{ old('username') }}"/>
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" value="{{ old('password') }}"/>
                                    </div>

                                    <div class="form-group">
                                        <label>Fullname</label>
                                        <input type="text" name="fullname" class="form-control" value="{{ old('fullname') }}"/>
                                    </div>

                                    <div class="form-group">
                                        <label>User Level</label>
                                        <label class="radio-inline">
                                            <input name="rdoLevel" value="1" checked="" type="radio">Admin
                                        </label>
                                        <label class="radio-inline">
                                            <input name="rdoLevel" value="2" type="radio">User
                                        </label>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-success btn-md">Lưu thông tin</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
@stop