@extends('frontend.layouts.default')
@push('css')
    <link href="{{asset('assets/css/campaign.css')}}" rel="stylesheet" />
@endpush
@section('head-nav-content')
    <ul class="customUlNav">
        <li>
            <a href="#">MY CAMPAIGNS</a>
        </li>
        <li>
            <span> <i class="fa fa-chevron-right pull-right"></i> </span>
        </li>
        <li>
            <a href="#">CAMPAIGNS 1</a>
        </li>
    </ul>
@endsection
@section('content')
<div class="container customStyle">
    <div class="row">
        <h2 class="customCampaignH2">CAMPAIGN NAME - BLACK FRIDAY SALE</h2>
    </div>
    <br>
    <div class="row">
        <div class="customDesc12 col-md-12">
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
            <br>
            <div class="row text-center">
                <div class="row-statistic custom-row-Cam">
                    <h2 class="y-Cam-h2">STATISTICS</h2>
                    <button class="btn" id="btn5">PDF</button>
                </div>
            </div>

            <div class="row">
                <div class="row-statistic row-reviews-check">
                    <div class="custom-flex-added col-md-4">
                        <div class="statistic-outer">
                            <div class="total-reach-statistic">
                                <h6 class="statistic">REACH</h6>
                                <h3 class="total-reach">124,500</h3>
                            </div>
                            <span class="total-over-view">
                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                            05.24%
                        </span>
                        </div>
                    </div>
                    <div class="custom-flex-added col-md-4">
                        <div class="statistic-outer">
                            <div class="total-reach-statistic">
                                <h6 class="statistic">ENGAGEMENT RATE</h6>
                                <h3 class="total-reach">21.64%</h3>
                            </div>
                            <span class="total-over-engagged">
                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                            02.86%
                        </span>
                        </div>
                    </div>
                    <div class="custom-flex-added col-md-4">
                        <div class="statistic-outer">
                            <div class="total-reach-statistic">
                                <h6 class="statistic">IMPRESSIONS</h6>
                                <h3 class="total-reach">27,584</h3>
                            </div>
                            <span class="total-over-view">
                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                            00.87%
                        </span>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="row row-statistic-charts">
                <div class="col-md-5">
                    <div class="outer-custom-box">
                        <div class="inner-box">
                            <div class="box-1">
                                <img src="{{asset('assets/images/dollar.png')}}" style="width:30px;" />
                            </div>
                            <div class="custom-box-statistics">
                                <p class="color1">£0.23</p>
                                <span class="color1-span">CPC</span>
                            </div>
                        </div>
                        <div class="inner-box">
                            <div class="box-2">

                            </div>
                            <div class="custom-box-statistics">
                                <p class="color2">24,017</p>
                                <span class="color2-span">CLICKS</span>
                            </div>
                        </div>
                        <div class="inner-box">
                            <div class="box-3">
                                <img src="{{asset('assets/images/users.png')}}" style="width:30px;" />
                            </div>
                            <div class="custom-box-statistics">
                                <p class="color3">92,251</p>
                                <span class="color2-span">ACTIVE INFLUENCERS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h4 class="custom-peri-h2">Impressions Per Social Media Platform</h4>
                    <div class="outer-pei-chart">
                        <div id="pie"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script src="{{asset('assets/js/jquery.rotapie.js')}}"></script>
    <script>
        $(function(){
            $('#pie').rotapie({
                slices: [
                    { color: '#006673', percentage: 10 }, // If color not set, slice will be transparant.
                    { color: '#0294a8', percentage: 30 }, // Font color to render percentage defaults to 'color' but can be overriden by setting 'fontColor'.
                    { color: '#77ccd1', percentage: 60 }
                ],
                sliceIndex: 0, // Start index selected slice.
                deltaAngle: 0.2, // The rotation angle in radians between frames, smaller number equals slower animation.
                minRadius: 100, // Radius of unselected slices, can be set to percentage of container width i.e. '50%'
                maxRadius: 110, // Radius of selected slice, can be set to percentage of container width i.e. '45%'
                minInnerRadius: 55, // Smallest radius inner circle when animated, set to 0 to disable inner circle, can be set to percentage of container width i.e. '35%'
                maxInnerRadius: 65, // Normal radius inner circle, set to 0 to disable inner circle, can be set to percentage of container width i.e. '30%'
                innerColor: '#fff', // Background color inner circle.
                minFontSize: 30, // Smallest fontsize percentage when animated, set to 0 to disable percentage display, can be set to percentage of container width i.e. '20%'
                maxFontSize: 40, // Normal fontsize percentage, set to 0 to disable percentage display, can be set to percentage of container width i.e. '10%'
                fontYOffset: 0, // Vertically offset the percentage display with this value, can be set to percentage of container width i.e. '-10%'
                fontFamily: 'Times New Roman', // FontFamily percentage display.
                fontWeight: 'bold', // FontWeight percentage display.
                decimalPoint: '.', // Can be set to comma or other symbol.
                clickable: true // If set to true a user can select a different slice by clicking on it.
                /*
                beforeAnimate: function (nextIndex, settings) {
                    var canvas = this;
                    return false; // Cancel rotation
                },
                afterAnimate: function(settings){
                    var canvas = this;
                    var index = settings.sliceIndex; // Retrieve current index.
                }
                */
            });
        });
    </script>
@endpush
