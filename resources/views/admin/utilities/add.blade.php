@extends('templates.admin.master')
@section('content')
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Thêm tiện ích</h2>
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
                                        <label>Loại tiện ích</label>
                                        <input type="text" name="uname" class="form-control" alue="{{ old('uname') }}"/>
                                       {{-- @if($errors->has('uname'))
                                            <div class="error-text">
                                                {{$errors->first('uname')}}
                                            </div>
                                        @endif--}}
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