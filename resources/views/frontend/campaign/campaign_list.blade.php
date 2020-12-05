@extends('frontend.layouts.default')
@push('css')
    <link href="{{asset('assets/css/campaign.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <style>
        .customTh{
            height: 30px;
        }
        .faPlus{
            color: #1c1f34;
            background-color: #ffffff;
            padding: 4px;
            font-size: 10px;
            border-radius: 3px;
        }
        .trClassActive{
            background-color: #684077;
            color: #fff;
        }
        .trClassCheckBoxActive{
            background-color: #fff15f;
        }
        .activeBtn2{
            background-color: #d46d5d !important;
            color: #000 !important;
        }
        .activeBtn{
            background-color: #ffffff !important;
            color: #000 !important;
        }
        .activeTags{
            background-color: #fff;
            padding: 2px 6px;
            color: #000;
            font-size: 12px;
        }
        .custom_export{
            width: 100% !important;
            height: 28px !important;
            font-size: 12px;
        }
    </style>
@endpush
@section('head-nav-content')
    <ul class="customUlNav">
        <li>
            <a href="#">MY CAMPAIGNS</a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="container customStyle">
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
                <button class="btn custom_export" id="btn5">EXPORT CSV</button>
            </div>
        </div>
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
                <button class="btn custom_export" id="btn5">FILTER</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                 <label>Status</label>
                <select class="form-control">
                    <option>Select</option>
                    <option>1</option>
                    <option>2</option>
                </select>
             </div>
            <div class="col-md-2">
                <label>Hashtags</label>
                <select class="form-control">
                    <option>Select</option>
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>
            <div class="col-md-2">
                <label>Active Influencers</label>
                <select class="form-control">
                    <option>Select</option>
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>
            <div class="col-md-2">
                <label>Sort By</label>
                <select class="form-control">
                    <option>Select</option>
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>
            <div class="col-md-2">
                <label>End Date</label>
                <select class="form-control">
                    <option>Select</option>
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>
            <div class="col-md-2">
                <label>Start Date</label>
                <select class="form-control">
                    <option>Select</option>
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr style="background: #1c1f34;color: #fff;">
                            <th>
                                <div class="customTh">
                                    <i class="fa fa-plus faPlus"></i>
                                </div>
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
                                    <input type="checkbox" name="checkbox">
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
                                    <input type="checkbox" name="checkbox">
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
                                <input type="checkbox" name="checkbox">
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
                            <tr class="trClassActive classTr">
                                <td>
                                    <input type="checkbox" class="trClassCheckBoxActive" name="checkbox">
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
                                <td>
                                    <span class="activeTags">tag</span>
                                    <span class="activeTags">another</span>
                                    <span class="activeTags">...</span>
                                </td>
                                <td>
                                    <button class="activeBtn btn custom-f-S" id="btn5-1">Running</button>
                                    <button class="activeBtn2 btn custom-f-S" id="btn6">See More</button>
                                </td>
                            </tr>
                            <tr class="classTr">
                                <td>
                                    <input type="checkbox" name="checkbox">
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
                                    <input type="checkbox" name="checkbox">
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
                                    <input type="checkbox" name="checkbox">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endpush
