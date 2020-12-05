@extends('frontend.layouts.default')
@push('css')
    <link href="{{asset('assets/css/campaign.css')}}" rel="stylesheet" />
    <style>
        .customClassHr{

        }
        .customCampaignH2{
            width: 95%;
        }
        .customClassHr {
            width: 75%;
            margin: 0 auto;
            border: 3px solid #c6595e;
        }
        .customClassHr2 {
            width: 50%;
            margin: 0 auto;
            border: 3px solid #c6595e;
        }
        .box-social-box-outer{
            box-shadow: 1px 4px 12px 7px #e0e7eb;
            padding: 20px;
        }
        .box-social-box{
            display: flex;
            align-items: center;
        }
        .customParaCC{
            width: 75%;
            margin: 0 auto;
            text-align: center;
            margin-top: 10px;
            color: #313131;
            font-weight: bold;
            font-size: 13px;
        }
        .cstomM{
            margin-bottom: 60px;
        }
        .custom_flex{
            display: flex;
            flex-direction: column;
            padding-left: 12px;
            width: 100%;
        }
        .customizeBtn5{
            font-size: 9px;
            height: 30px !important;
            position: relative;
            top: 9px;
            left: 7px;
            width: 100px !important;
        }
        .custom_btn5{
            position: relative;
            left: 25px;
            font-size: 12px;
            top: 5px;
            height: 32px !important;
        }
        .custom_span_paste{
            font-size: 12px;
            font-weight: bold;
        }
        .custom_btn_save{
            border-radius: 0px !important;
            padding: 10px 60px;
        }
        .cstomMM{
            margin-top:30px;
        }
        .copy_suggest{
            color: #434343;
            font-weight: bold;
            padding-left: 0px !important;
            font-size: 18px;
        }
        .copy_paste{
            font-weight: bold;
            color: #733e83;
            font-size: 19px;
        }
        .custom_M{
            margin-bottom: 12px;
        }
        .custom_MM{
            margin-top: 25px;
            margin-bottom: 15px;
        }
        .customCopyLink{
            display: flex;
            align-items: flex-end;
        }
        .custom_btn5_5{
            left: 25px;
            font-size: 12px;
            height: 32px !important;
            position: relative;
            top: -3px;
        }
        .small-images{
            text-align: center;
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .small-images > img {
            cursor: pointer;
        }
        .activated1{
            border: 5px solid #733e83;
            object-fit: cover;
        }
        .hasTags{
            background: #eeeeee;
            padding: 5px 10px;
            color: #7e8f9b;
            font-size: 9px;
        }
        .pColor {
            color: #989898;
            font-size: 13px;
        }
        .custom-section-settings > img {
            width: 100%;
        }
        #customBtn{
            background:#4a4a4a;
            color: #fff;
            border-radius: 0px !important;
            font-size: 13px;
            font-weight: bold;
            padding: 10px 20px;
        }
        .customPUK{
            color: #4a4a4a !important;
            font-weight: bold !important;
        }
        .customP{
            color: #4a4a4a !important;
            font-weight: bold !important;
        }
        .custom_join{
            border-radius: 0px !important;
            width: 150px !important;
            height: 40px !important;
        }

        #overlay {
            position: absolute;
            display: block;
            width: 100%;
            height: 55%;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.8);
            z-index: 2;
            cursor: pointer;
            margin: 0 0px auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .customStyle {
            padding-bottom: 0px !important;
        }
        @media (max-width: 767px) {
            #overlay {
                position: absolute;
                display: block;
                width:100%;
                height:52%;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(255, 255, 255, 0.8);
                z-index: 2;
                cursor: pointer;
                margin: 0 0px auto;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }
    </style>
@endpush
@section('head-nav-content')
    <ul class="customUlNav">
        <li>
            <a href="#">AVAILABLE CAMPAIGNS</a>
        </li>
        <li>
            <span> <i class="fa fa-chevron-right pull-right"></i> </span>
        </li>
        <li>
            <a href="#">BLACK FRIDAY SALE</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="container customStyle">
        <div class="row">
            <h2 class="customCampaignH2">ASOS  -  CAMPAIGN NAME BLACK FRIDAY SALE </h2>
            <hr>
        </div>
        <br>
        <div class="row">
            <div class="customDesc12 col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <div class="custom-section-settings">
                            <img src="{{asset('assets/images/ASOS logo.png')}}" />
                            <p class="customPUK">
                                ASOS UK
                            </p>
                            <p class="customP">
                                Fashion, Jewelry Accessories
                            </p>
                            <button class="btn" id="customBtn">LEARN MORE</button>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-5">
                                <label class="lab-my-campaign">Description</label>
                                <p class="pColor" style="text-align:justify;">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <div class="date-section">
                                    <div class="start-date">
                                        <span class="st-date">Start Date</span>: <span class="date-format">23/11/2020</span>
                                    </div>
                                    <div class="end-date">
                                        <span class="en-date">End Date</span>: <span class="date-format">01/01/2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="lab-my-campaign">Hashtags</label>
                                <div class="pColor">
                                    <span class="hasTags">tag</span>
                                    <span class="hasTags">anothertag</span>
                                    <span class="hasTags">tag</span>
                                    <span class="hasTags">anothertag</span>
                                    <span class="hasTags">tag</span>
                                    <span class="hasTags">anothertag</span>
                                    <span class="hasTags">tag</span>
                                    <span class="hasTags">anothertag</span>
                                    <span class="hasTags">tag</span>
                                    <span class="hasTags">anothertag</span>
                                    <span class="hasTags">tag</span>
                                    <span class="hasTags">anothertag</span>
                                    <span class="hasTags">tag</span>
                                    <span class="hasTags">anothertag</span>
                                    <span class="hasTags">tag</span>
                                    <span class="hasTags">anothertag</span>
                                </div>
                                <div class="social-icon-my-compaign">
                                    <label class="campaign-M-disp">Displayed on</label>
                                </div>
                                <div class="custom-social-links">
                                    <img src="{{asset('assets/images/fb.png')}}" style="margin-right:8px;width: 20px;height:20px;object-fit: contain;" />
                                    <img src="{{asset('assets/images/forma.png')}}" style="margin-right:8px;width: 20px" />
                                    <img src="{{asset('assets/images/tube.png')}}" style="margin-right:8px;width: 20px" />
                                    <img src="{{asset('assets/images/inst.png')}}" style="margin-right:8px;width: 20px" />
                                    <img src="{{asset('assets/images/tik.png')}}" style="margin-right:8px;width: 20px" />
                                    <img src="{{asset('assets/images/sn.png')}}" style="margin-right:8px;width: 20px" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="lab-my-campaign">Target</label>
                                <p class="pColor">
                                    Male only Any age<br>
                                    United Kingdom - All cities<br>
                                    Any followers on all social media platformsI
                                    <br><br>
                                    nterests: Fashion, Photography
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row text-center">
                    <div class="row-statistic custom-row-Cam" style="margin-bottom: 10px;">
                        <h2 class="y-Cam-h2" style="border-bottom: 0px !important;">Interested in joining this campaign? </h2>
                    </div>
                    <hr class="customClassHr">
                </div>
                <div class="row">
                    <p class="customParaCC">
                        To be part of this amazing campaign, click the JOIN NOW button below.
                        Make sure you turn notifications on to get reminded when the campaign starts/ends.
                        Find out all the assets you need per social media platform below and you’ll be all setup!
                        Ready? Go!
                    </p>
                </div>
                <div class="row" style="margin-top: 20px;margin-bottom: 30px">
                    <div class="col-md-12 text-center">
                        <button class="btn custom_join" id="btn1">JOIN NOW</button>
                    </div>
                </div>
                <div>
                    <div id="overlay">
                        <h4 style="font-weight: bold;color:#ac456c;font-size: 23px;">COMING SOON</h4>
                    </div>
                    <div class="row cstomMM">
                        <div class="col-md-2">
                            <div class="social-media-has-tashs">
                                <img src="/assets/images/insta.png">
                                <span>INSTAGRAM</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="social-media-has-tashs">
                                <img src="/assets/images/facebook.png">
                                <span>FACEBOOK</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="social-media-has-tashs">
                                <img src="/assets/images/twitter.png">
                                <span>TWITTER</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="social-media-has-tashs">
                                <img src="/assets/images/tiktok.png">
                                <span>TIK TOK</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="social-media-has-tashs">
                                <img src="/assets/images/you_tube.png">
                                <span>YOUTUBE</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="social-media-has-tashs">
                                <img src="/assets/images/snap_chat.png">
                                <span>SNAPCHAT</span>
                            </div>
                        </div>
                    </div>
                    <div class="row cstomMM">
                    <div class="col-md-6">
                        <div class="custom_M">
                            <span class="copy_paste">Copy</span>
                            <span class="copy_suggest">(suggested copy)</span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                        <div class="custom_MM">
                            <span class="copy_paste">Hashtags</span>
                        </div>
                        <p>
                            Please DO NO FORGET to add those hashtags to your posts. Thanks to them we will be able to track your results and get you paid accordingly!
                        </p>
                        <div class="pColor">
                            <span class="hasTags">tag</span>
                            <span class="hasTags">anothertag</span>
                            <span class="hasTags">tag</span>
                            <span class="hasTags">anothertag</span>
                            <span class="hasTags">tag</span>
                            <span class="hasTags">anothertag</span>
                            <span class="hasTags">tag</span>
                            <span class="hasTags">anothertag</span>
                            <span class="hasTags">tag</span>
                            <span class="hasTags">anothertag</span>
                            <span class="hasTags">tag</span>
                            <span class="hasTags">anothertag</span>
                            <span class="hasTags">tag</span>
                            <span class="hasTags">anothertag</span>
                            <span class="hasTags">tag</span>
                            <span class="hasTags">anothertag</span>
                        </div>
                        <div class="custom_MM">
                            <span class="copy_paste">Swipe up link</span>
                        </div>
                        <p class="customCopyLink">
                            <a href="#">
                                https://asos.co.uk/jflewjfo;pewjo;fgewj;ogjwlgrw
                            </a>
                            <button class="btn custom_btn5_5" id="btn5">COPY LINK</button>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img style="width: 100%;height: 373px;" id="customImage12" src="{{asset('assets/images/asos-glaad@1X.png')}}" />
                        <div class="small-images">
                            <img class="imageA" id="i" onclick="functionChangeImage('a')" style="    margin-right: 5px;
    margin-left: 5px;width: 80px;    height: 60px;" src="{{asset('assets/images/asos-glaad@1X.png')}}" />
                            <img class="imageB" onclick="functionChangeImage('b')" style="    margin-right: 5px;
    margin-left: 5px;width: 80px;    height: 60px;" src="{{asset('assets/images/123.jpg')}}" />
                            <img class="imageC" onclick="functionChangeImage('c')" style="    margin-right: 5px;
    margin-left: 5px;width: 80px;    height: 60px;" src="{{asset('assets/images/asos-glaad@1X.png')}}" />
                            <img class="imageD" onclick="functionChangeImage('d')" style="    margin-right: 5px;
    margin-left: 5px;width: 80px;    height: 60px;" src="{{asset('assets/images/123.jpg')}}" />
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            functionChangeImage('a');
        });
        function functionChangeImage(val) {
            console.log('functionChangeImage');
            let src;
            console.log('src');
            if(val == 'a'){
                src = $('.imageA').attr('src');
                $('.imageB').removeClass('activated1');
                $('.imageA').addClass('activated1');
                $('.imageC').removeClass('activated1');
                $('.imageD').removeClass('activated1');
            }
            if(val == 'b'){
                src = $('.imageB').attr('src');
                $('.imageA').removeClass('activated1');
                $('.imageB').addClass('activated1');
                $('.imageC').removeClass('activated1');
                $('.imageD').removeClass('activated1');
            }
            if(val == 'c'){
                src = $('.imageC').attr('src');
                $('.imageA').removeClass('activated1');
                $('.imageC').addClass('activated1');
                $('.imageB').removeClass('activated1');
                $('.imageD').removeClass('activated1');
            }
            if(val == 'd'){
                src = $('.imageD').attr('src');
                $('.imageA').removeClass('activated1');
                $('.imageD').addClass('activated1');
                $('.imageC').removeClass('activated1');
                $('.imageB').removeClass('activated1');
            }
            $('#customImage12').attr('src',src);
            console.log(src);
        }
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'doughnut',

            // The data for our dataset
            data: {
                labels: ['Red', 'Blue', 'Yellow'],
                datasets: [{
                    data: [10, 20, 30],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
            }
        });
    </script>
@endpush
