@include('templates.chotel.header')
    {{--content--}}
@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible" style="position: fixed;right: 20px;top: 20px;left: 50%;transform: translateX(-50%);z-index: 999999999999">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Hi Bạn!</strong> {{Session::get('success')}}
    </div>
@endif
        @yield('content')
    {{--end content--}}
@include('templates.chotel.footer')