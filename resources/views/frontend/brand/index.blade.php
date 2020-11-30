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
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row customRow-social-stats">
                    <div class="custom-Md-4 col-md-4">
                        <div class="social-box">
                            <div class="social-div">
                                <div class="social-icon">
                                    <img src="{{asset('assets/images/facebook.png')}}" style="width:30px;" />
                                </div>
                                <div class="total-likes">
                                    <p class="custom-p">12,284</p>
                                    <span class="total-avg">+08.21%</span>&nbsp;&nbsp;<span class="total-likes">Total Likes</span>
                                </div>
                            </div>
                            <div class="progress-bar-social">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bar-likes">
                                            <span class="total-reach">REACH:</span> <span class="total-count">35,684</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bar-posts">
                                            <span class="total-reach">POSTS:</span> <span class="total-count">465</span>
                                            <div class="progress">
                                                <div class="progress-bar"  role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:70%;background: #e39e65">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-z-indexx-down"></div>
                    </div>
                    <div class="custom-Md-4 col-md-4">
                        <div class="social-box">
                            <div class="social-div">
                                <div class="social-icon">
                                    <img src="{{asset('assets/images/twitter.png')}}" style="width:30px;" />
                                </div>
                                <div class="total-likes">
                                    <p class="custom-p">12,284</p>
                                    <span class="total-avg">+08.21%</span>&nbsp;&nbsp;<span class="total-likes">Total Likes</span>
                                </div>
                            </div>
                            <div class="progress-bar-social">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bar-likes">
                                            <span class="total-reach">REACH:</span> <span class="total-count">35,684</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bar-posts">
                                            <span class="total-reach">POSTS:</span> <span class="total-count">465</span>
                                            <div class="progress">
                                                <div class="progress-bar"  role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:70%;background: #e39e65">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-z-indexx-down-2"></div>
                    </div>
                    <div class="custom-Md-4 col-md-4">
                        <div class="social-box">
                            <div class="social-div">
                                <div class="social-icon">
                                    <img src="{{asset('assets/images/insta.png')}}" style="width:30px;" />
                                </div>
                                <div class="total-likes">
                                    <p class="custom-p">12,284</p>
                                    <span class="total-avg">+08.21%</span>&nbsp;&nbsp;<span class="total-likes">Total Likes</span>
                                </div>
                            </div>
                            <div class="progress-bar-social">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bar-likes">
                                            <span class="total-reach">REACH:</span> <span class="total-count">35,684</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bar-posts">
                                            <span class="total-reach">POSTS:</span> <span class="total-count">465</span>
                                            <div class="progress">
                                                <div class="progress-bar"  role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:70%;background: #e39e65">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-z-indexx-down-3"></div>
                    </div>
                </div>
                <div class="row customRow-social-stats">
                    <div class="custom-Md-4 col-md-4">
                        <div class="social-box">
                            <div class="social-div">
                                <div class="social-icon">
                                    <img src="{{asset('assets/images/tiktok.png')}}" style="width:30px;" />
                                </div>
                                <div class="total-likes">
                                    <p class="custom-p">12,284</p>
                                    <span class="total-avg">+08.21%</span>&nbsp;&nbsp;<span class="total-likes">Total Likes</span>
                                </div>
                            </div>
                            <div class="progress-bar-social">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bar-likes">
                                            <span class="total-reach">REACH:</span> <span class="total-count">35,684</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bar-posts">
                                            <span class="total-reach">POSTS:</span> <span class="total-count">465</span>
                                            <div class="progress">
                                                <div class="progress-bar"  role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:70%;background: #e39e65">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-z-indexx-down-4"></div>
                    </div>
                    <div class="custom-Md-4 col-md-4">
                        <div class="social-box">
                            <div class="social-div">
                                <div class="social-icon">
                                    <img src="{{asset('assets/images/you_tube.png')}}" style="width:30px;" />
                                </div>
                                <div class="total-likes">
                                    <p class="custom-p">12,284</p>
                                    <span class="total-avg">+08.21%</span>&nbsp;&nbsp;<span class="total-likes">Total Likes</span>
                                </div>
                            </div>
                            <div class="progress-bar-social">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bar-likes">
                                            <span class="total-reach">REACH:</span> <span class="total-count">35,684</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bar-posts">
                                            <span class="total-reach">POSTS:</span> <span class="total-count">465</span>
                                            <div class="progress">
                                                <div class="progress-bar"  role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:70%;background: #e39e65">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-z-indexx-down-5"></div>
                    </div>
                    <div class="custom-Md-4 col-md-4">
                        <div class="social-box">
                            <div class="social-div">
                                <div class="social-icon">
                                    <img src="{{asset('assets/images/snap_chat.png')}}" style="width:30px;" />
                                </div>
                                <div class="total-likes">
                                    <p class="custom-p">12,284</p>
                                    <span class="total-avg">+08.21%</span>&nbsp;&nbsp;<span class="total-likes">Total Likes</span>
                                </div>
                            </div>
                            <div class="progress-bar-social">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bar-likes">
                                            <span class="total-reach">REACH:</span> <span class="total-count">35,684</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bar-posts">
                                            <span class="total-reach">POSTS:</span> <span class="total-count">465</span>
                                            <div class="progress">
                                                <div class="progress-bar"  role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:70%;background: #e39e65">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-z-indexx-down-6"></div>
                    </div>
                </div>

                <div class="row customRow-hash-tags">
                    <div class="hash-tags-heading">
                        <h2 class="hash-tags-h2">HASHTAGS GALLERY</h2>
                        <hr class="borderBottom">
                        <p class="buster">#BRINGBLOCKBUSTERBACK</p>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="social-media-has-tashs">
                                <img src="{{asset('assets/images/insta.png')}}" />
                                <span>INSTAGRAM</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="social-media-has-tashs">
                                <img src="{{asset('assets/images/facebook.png')}}" />
                                <span>FACEBOOK</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="social-media-has-tashs">
                                <img src="{{asset('assets/images/twitter.png')}}" />
                                <span>TWITTER</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="social-media-has-tashs">
                                <img src="{{asset('assets/images/tiktok.png')}}" />
                                <span>TIK TOK</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="social-media-has-tashs">
                                <img src="{{asset('assets/images/you_tube.png')}}" />
                                <span>YOUTUBE</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="social-media-has-tashs">
                                <img src="{{asset('assets/images/snap_chat.png')}}" />
                                <span>SNAPCHAT</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row custom-row-images">
                                <div class="col-md-12" style="padding-left:0px;margin-bottom:6px;">
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/2.webp" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                </div>
                                <div class="col-md-12" style="padding-left:0px;margin-bottom:6px;">
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/2.webp" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                </div>
                                <div class="col-md-12" style="padding-left:0px;margin-bottom:6px;">
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/2.webp" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                </div>
                                <div class="col-md-12" style="padding-left:0px;margin-bottom:6px;">
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/2.webp" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                    <div class="col-md-2 customMd2-1">
                                        <img class="customImage" src="https://www.gstatic.com/webp/gallery/1.jpg" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <button class="btn customizeBtn" id="btn5">LOAD MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
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
