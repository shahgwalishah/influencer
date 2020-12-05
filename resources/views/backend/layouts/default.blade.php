<!doctype html>
<html lang="en">
<head>
    <title>Influencer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    @include('backend.partials.headerScript')
    @stack('css')
    <style>
        .customContainer{
            background-color: #fff !important;
            height: 70px;
            padding-top: 10px;
            padding-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
        #btnLogin{
            background-color: #376d7b;
            color: #fff;
            border-radius: 20px;
            width: 157px;
            font-size: 11px;
        }
        #btnLogin1{
            background-color: #e5edef;
            color: #38393a;
            border-radius: 20px;
            margin-right: 10px;
            width: 157px;
            font-size: 11px;
        }
        .customHeader{
            height: 70px;
        }
        .customRow{
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
        .languages{
            margin-left: 20px;
        }
        .languages > a {
            margin-left: 5px;
            margin-right: 5px;
            font-weight: normal;
            color: #474747;
            font-size: 12px;
        }
        .activeClass:hover{
            color: #376d7b;
            font-weight: bold;
        }
        .customInfluencer {
            margin: 0px;
            font-weight: bold;
            letter-spacing: -2px;
        }
        .customRowM{
            margin: 0px;
        }
        .customUl{
            display: flex;
            padding-left: 0px;
            list-style: none;
            justify-content: center;
        }
        .customUl li a{
            cursor: pointer;
            color: #7f9ca4;
            font-size: 12px;
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
    <style>
        @media (max-width: 991px) {
            .customRowMR {
                position: absolute;
                top: 40px;
                z-index: 9999;
                background: #fff;
                width: 100%;
                padding: 40px;
            }
            .customRowM{
                display: none;
            }
            .faFaBars{
                display: block !important;
                font-size: 20px;
            }
            .customInfluencer {
                margin: 0px;
                font-weight: bold;
                letter-spacing: -2px;
                text-align: center;
            }
            .customRow{
                display: none;
            }
            .customResp{
                display: block !important;
            }
            .customContainer {
                background-color: #fff !important;
                height: 70px;
                padding-top: 10px;
                padding-bottom: 10px;
                display: flex;
                align-items: flex-end;
                justify-content: center;
                flex-direction: column;
            }
            .customUl {
                display: block;
                list-style: none;
            }
            .customUl > li > a{
                font-size: 18px;
            }
            .customUl > li {
                padding: 12px;
            }
        }
        @media (max-width: 767px) {
            .faFaBars {
                display: block !important;
                font-size: 20px;
                position: relative;
                right: 20px;
            }
        }
    </style>
</head>
<body>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <header class="customHeader">
        <div class="container customContainer">
            <div class="row customResp" style="display: none;">
                <i class="fa fa-bars faFaBars" onclick="openBox()" aria-hidden="true" style="display: none;color: #000"></i>
            </div>
            <br>
            <div class="row text-right customRow">
                <button class="btn" id="btnLogin1">GET STARTED TODAY</button>
                <button class="btn" id="btnLogin">LOGIN</button>
                <div class="languages">
                    <a href="#" class="activeClass">EN</a>
                    <a href="#" class="activeClass">FR</a>
                    <a href="#" class="activeClass">DE</a>
                </div>
            </div>
        </div>
        <!--  responsive box -->
        <div class="row customRowMR" style="display: none;">
            <div class="col-md-12">
                <ul class="customUl">
                    <li>
                        <a href="#">HOME</a>
                    </li>
                    <li>
                        <a href="#">BRANDS</a>
                    </li>
                    <li>
                        <a href="#">INFLUENCERS</a>
                    </li>
                    <li>
                        <a href="#">PRICING</a>
                    </li>
                    <li>
                        <a href="#">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--  responsive box end -->
        <div class="row customRowM" style="display: block;">
            <div class="col-md-12">
                <h3 class="customInfluencer">MY INFLUENCER NETWORK</h3>
            </div>
        </div>
        <div class="row customRowM">
            <div class="col-md-12">
                <ul class="customUl">
                    <li>
                        <a href="#">HOME</a>
                    </li>
                    <li>
                        <a href="#">BRANDS</a>
                    </li>
                    <li>
                        <a href="#">INFLUENCERS</a>
                    </li>
                    <li>
                        <a href="#">PRICING</a>
                    </li>
                    <li>
                        <a href="#">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="page-content">
            @yield('content')
        </div>
    </div>
    <!-- End Navigation -->
</div><!-- /#wrapper -->
@include('backend.partials.footerScripts')
<script>
    function openBox() {
        $('.customRowMR').slideToggle();
    }
</script>
@stack('js')
</body>
</html>
