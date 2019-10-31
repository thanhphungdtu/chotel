<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{$adminUrl}}/img/find_user.png" class="user-image img-responsive" />
            </li>


            <li>
                <a class="active-menu" href="{{ route('admin.index.index') }}"><i class="fa fa-dashboard fa-3x"></i> Trang chủ</a>
            </li>
            <li>
                <a href="{{ route('admin.roomtype.index') }}"><i class="fa fa-bar-chart-o fa-3x"></i> Quản lý loại phòng</a>
            </li>
            <li>
                <a href="{{ route('admin.room.index') }}"><i class="fa fa-qrcode fa-3x"></i> Quản lý phòng</a>
            </li>
            <li>
                <a href="{{ route('admin.utilitie.index') }}"><i class="fa fa-sitemap fa-3x"></i> Quản lý tiện ích</a>
            </li>
            <li>
                <a href="{{ route('admin.user.index') }}"><i class="fa fa-bar-chart-o fa-3x"></i> Quản lý người dùng</a>
            </li>
            <li>
                <a href="{{ route('admin.aboutus.index') }}"><i class="fa fa-sitemap fa-3x"></i> Quản lý giới thiệu</a>
            </li>
            <li>
                <a href="{{ route('admin.contact.index') }}"><i class="fa fa-qrcode fa-3x"></i> Quản lý liên hệ</a>
            </li>
            <li>
            <a href="{{ route('admin.transaction.list') }}"><i class="fa fa-bar-chart-o fa-3x"></i> Quản lý đặt phòng</a>
            </li>

        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->