<!-- Top Menu Items -->
<ul class="web-view-header nav navbar-right top-nav">
    <li>
        <input type="search" name="search" placeholder="search..." class="customSearch form-control" />
        <i class="faSearch fa fa-search"></i>
    </li>
    <li>
        <a href="#">
            <i class="faMyAccount fa fa-user" aria-hidden="true"></i>
            <span class="head-bar-li">My Account</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="faQuestionHelp fa fa-question-circle" aria-hidden="true"></i>
            <span class="head-bar-li">Help</span>
        </a>
    </li>
    <li>
        <a href="{{route('logout_user')}}" class="bottomLine">
            <span class="head-bar-li">LOGOUT</span>
        </a>
    </li>
    {{--            <li class="dropdown">--}}
    {{--                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>--}}
    {{--                <ul class="dropdown-menu">--}}
    {{--                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>--}}
    {{--                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>--}}
    {{--                    <li class="divider"></li>--}}
    {{--                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>--}}
    {{--                </ul>--}}
    {{--            </li>--}}
</ul>

<!-- Top Menu Items -->
<ul style="display: none;" class="mobile-view-header nav navbar-right top-nav">
    <li style="width: 100%;">
        <input type="search" name="search" placeholder="search..." class="customSearch form-control" />
        <i class="faSearch fa fa-search"></i>
    </li>
    {{--            <li class="dropdown">--}}
    {{--                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>--}}
    {{--                <ul class="dropdown-menu">--}}
    {{--                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>--}}
    {{--                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>--}}
    {{--                    <li class="divider"></li>--}}
    {{--                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>--}}
    {{--                </ul>--}}
    {{--            </li>--}}
</ul>
