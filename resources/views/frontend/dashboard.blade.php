@extends('frontend.layouts.default')
@push('css')
    <link href="{{asset('assets/css/campaign.css')}}" rel="stylesheet" />
    <style>
        .customDesc12-dashboard{
            padding-left: 100px;
            padding-right: 100px;
            margin-top: 40px;
        }
        .table>thead>tr>th {
            vertical-align: bottom;
            border-bottom: 2px solid #ddd;
            font-size: 13px !important;
            text-align: center;
        }
        .classTr > td {
            color: #717171;
        }
        .custom-f-S{
            font-size:12px;
        }
        .faPlus{
            background: #fff;
            color: #8394a0;
            padding: 4px;
            font-weight: normal;
            border-radius: 4px;
            cursor: pointer;
        }
        .customTh{
            position: absolute;
            height: 54px;
            display: flex;
            align-items: center;
        }
        .customThLast {
            position: absolute;
            right: 45px;
            height: 54px;
            display: flex;
            align-items: center;
            width: 65px;
        }
    </style>
@endpush
@section('head-nav-content')
    <ul class="customUlNav">
        <li>
            <a href="#">DASHBOARD</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="container customStyle">
        <div class="row">
            <h2 class="customCampaignH2">WELCOME BACK</h2>
        </div>
        <br>
        <div class="row">
            <div class="customDesc12-dashboard col-md-12">
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
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr style="background: #1c1f34;color: #fff;">
                            <th class="customTh">
                                <i class="fa fa-plus faPlus"></i>
                            </th>
                            <th>
                                Campaign Name
                            </th>
                            <th>Active Influencers</th>
                            <th>Reach instagram</th>
                            <th>Reach Facebook</th>
                            <th>Reach Twitter</th>
                            <th>Reach Youtube</th>
                            <th>Reach TikTok</th>
                            <th>Reach Snapchat</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th class="customTh">Hashtags</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="classTr">
                            <td>
                                <input type="checkbox" name="checkbox" />
                            </td>
                            <td>Black Friday Sale 2020</td>
                            <td>22</td>
                            <td>34,200</td>
                            <td>34,200</td>
                            <td>34,200</td>
                            <td>34,200</td>
                            <td>34,200</td>
                            <td>34,200</td>
                            <td>16 May 2017</td>
                            <td>29 Jun 2017</td>
                            <td>tag another tag</td>
                            <td>
                                <button class="btn custom-f-S" id="btn5-1">Running</button>
                                <button class="btn custom-f-S" id="btn6">See More</button>
                            </td>
                        </tr>
                            <tr class="classTr">
                                <td>
                                    <input type="checkbox" name="checkbox" />
                                </td>
                                <td>Black Friday Sale 2020</td>
                                <td>22</td>
                                <td>34,200</td>
                                <td>34,200</td>
                                <td>34,200</td>
                                <td>34,200</td>
                                <td>34,200</td>
                                <td>34,200</td>
                                <td>16 May 2017</td>
                                <td>29 Jun 2017</td>
                                <td>tag another tag</td>
                                <td>
                                    <button class="btn custom-f-S" id="btn5-1">Running</button>
                                    <button class="btn custom-f-S" id="btn6">See More</button>
                                </td>
                            </tr>
                            <tr class="classTr">
                                <td>
                                    <input type="checkbox" name="checkbox" />
                                </td>
                                <td>Black Friday Sale 2020</td>
                                <td>22</td>
                                <td>34,200</td>
                                <td>34,200</td>
                                <td>34,200</td>
                                <td>34,200</td>
                                <td>34,200</td>
                                <td>34,200</td>
                                <td>16 May 2017</td>
                                <td>29 Jun 2017</td>
                                <td>tag another tag</td>
                                <td>
                                    <button class="btn custom-f-S" id="btn5-1">Running</button>
                                    <button class="btn custom-f-S" id="btn6">See More</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
