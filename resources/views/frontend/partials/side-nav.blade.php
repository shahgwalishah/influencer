<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="web-view-side-bar nav navbar-nav side-nav">
        <li class="customLi">
            <h2 class="customSizeSideNavH2">
                My Influencer Network
            </h2>
            <div class="asos-box">
                <span>asos</span>
            </div>
            <div class="asos-name">
                <span>ASOS UK</span>
            </div>
        </li>
        <li>
            <a href="{{route('dashboard')}}" @if(Route::currentRouteName() == 'dashboard') class="active-class-side-nav-bar" style="color: #aaafb1 !important;" @endif>
                Dashboard
                <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="{{route('add-campaign')}}" @if(Route::currentRouteName() == 'add-campaign') class="active-class-side-nav-bar" style="color: #aaafb1 !important;" @endif>
                Add a Campaign
                <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="{{route('my-campaign')}}" @if(Route::currentRouteName() == 'my-campaign') class="active-class-side-nav-bar" style="color: #aaafb1 !important;" @endif>
                My Campaigns
                <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
            </a>
        </li>
    </ul>

{{-- mobile view navbar --}}
    <ul style="display: none;" class="mobile-view-side-bar nav navbar-nav side-nav">
{{--        <li class="customLi">--}}
{{--            <h2 class="customSizeSideNavH2">--}}
{{--                My Influencer Network--}}
{{--            </h2>--}}
{{--            <div class="asos-box">--}}
{{--                <span>asos</span>--}}
{{--            </div>--}}
{{--            <div class="asos-name">--}}
{{--                <span>ASOS UK</span>--}}
{{--            </div>--}}
{{--        </li>--}}
        <li>
            <a href="#" data-toggle="collapse" data-target="#submenu-2">
                Dashboard
                <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
            </a>

            <ul id="submenu-2" class="collapse">
                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
            </ul>
        </li>
        <li>
            <a href="{{route('add-campaign')}}">
                Add a Campaign
                <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="{{route('my-campaign')}}">
                My Campaigns
                <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
            </a>
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
            <a href="#" class="bottomLine">
                <span class="head-bar-li">LOGOUT</span>
            </a>
        </li>
    </ul>
</div>
