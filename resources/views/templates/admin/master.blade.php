@include('templates.admin.header')
@include('templates.admin.leftbar')

<div id="page-wrapper">
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible" style="position: fixed; right: 20px; width: 35%;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{Session::get('success')}}
        </div>
    @endif
    @if(Session::has('danger'))
        <div class="alert alert-danger alert-dismissible" style="position: fixed; right: 20px; width: 35%;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{Session::get('danger')}}
        </div>
    @endif
    @yield('content')
</div>
<!-- /. PAGE WRAPPER  -->
@yield('script')
@include('templates.admin.footer')
