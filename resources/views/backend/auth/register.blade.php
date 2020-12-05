@extends('backend.layouts.default')
@push('css')
    <style>
        .Md2-1 > h1{
            font-size: 130pt;
            color: #c9d6da;
            padding-left: 30px;
            margin: 0px;
            font-weight: bold;
        }
        .Md2-1{
            width: 100%;
            height: 800px;
            background-color: #e5edef;
            z-index: 99;
        }
        .customCMd2{
            position: relative;
            right: 75px;
        }
        .Md2-2{
            width: 255px;
            height: 800px;
            background-color: #376d7b;
            z-index: 9999;
            font-weight: bold;
        }
        .Md2-2 > h1{
            font-size: 130pt;
            color: #e5edef;
            text-align: end;
            margin: 0px;
            padding-right: 40px;
        }
        .Md8-8{

        }
        .customMd8{
            color: #e5edef;
            font-size: 48px;
            width: 55%;
            font-weight: bold;
        }
        .small-box{
            width: 67px;
            height: 67px;
            background-color: #376d7b;
            border-radius: 100px;
            margin-bottom: 40px;
        }
        .labelCustom{
            color: #202121;
            font-size: 15px;
            font-weight: normal;
        }
        .customInputBox{
            width: 497px;
            height: 48px;
            border-radius: 30px;
        }
        .customInputBox1{
            height: 48px;
            border-radius: 30px;
        }
        .customMd4W{
            width: 205px;
        }
        #customBTnNext{
            background-color: #376d7b;
            color: #fff;
            height: 48px;
            width: 112px;
            position: relative;
            top: 12px;
            border-radius: 30px;
        }
        .styled-select > select {
            font-size: 11px;
            left: 0;
            top: 0;
        }
        .styled-select {
        }
        @media (max-width: 1199px) {
            .customMd8 {
                color: #e5edef;
                font-size: 48px;
                width: 100%;
                font-weight: bold;
                text-align: center;
            }
            .Md8-8 {
                text-align: center;
            }
            .customInputBox {
                width: 100%;
                height: 48px;
                border-radius: 30px;
            }
            .customMd4W {
                width: 100%;
            }
            .customBtnWR{
                display: flex;
                align-items: center;
                flex-direction: column !important;
            }
            .small-box {
                width: 67px;
                height: 67px;
                background-color: #376d7b;
                border-radius: 100px;
                margin-bottom: 40px;
                display: inline-block;
            }
        }
        @media (max-width: 991px) {
            .small-box {
                width: 67px;
                height: 67px;
                background-color: #376d7b;
                border-radius: 100px;
                margin-bottom: 40px;
                display: inline-block;
            }
            .customBtnWR {
                display: flex;
                align-items: center;
                flex-direction: column !important;
                margin-bottom: 50px;
            }
            .Md2-1 {
                width: 100%;
                height: 800px;
                background-color: #e5edef;
                z-index: 99;
                display: none;
            }
            .Md2-2 {
                width: 255px;
                height: 800px;
                background-color: #376d7b;
                z-index: 9999;
                display: none;
            }
            .customMd8 {
                color: #e5edef;
                font-size: 48px;
                width: 100%;
                font-weight: bold;
                text-align: center;
                margin-top: 70px;
            }
        }
        .labelCustomTb2{
            font-weight: bold;
            color: #000;
        }
    </style>
@endpush

@section('content')
<div class="row" id="tab1">
    <div class="col-md-2">
        <div class="Md2-1">
            <h1>1</h1>
        </div>
    </div>
    <div class="customCMd2 col-md-2">
        <div class="Md2-2">
            <h1>2</h1>
        </div>
    </div>
    <div class="col-md-8">
        <div class="Md8-8">
            <h1 class="customMd8">TELL US A BIT ABOUT YOURSELF</h1>
            <div class="small-box">
            </div>
            <div class="form">
                <form action="#">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                             <label class="labelCustom">Email Address</label>
                                <input type="text" class="customInputBox form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="labelCustom">You Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 customMd4W">
                                <input type="text" class="customInputBox1 form-control" />
                            </div>
                            <div class="col-md-4 customMd4W">
                                <input type="text" class="customInputBox1 form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="labelCustom">Company</label>
                                <input type="text" class="customInputBox form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="labelCustom">What sector are you operating on?</label>
                                <div class="styled-select">
                                    <select class="customInputBox form-control">
                                        <option selected disabled>Retail</option>
                                        <option>Retail1</option>
                                        <option>Retail2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="labelCustom">What is the size of your company?</label>
                                <div class="styled-select">
                                    <select class="customInputBox form-control">
                                        <option selected disabled>Less then 20</option>
                                        <option>Retail1</option>
                                        <option>Retail2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row customBtnWR" style="display: flex;align-items: center;">
                            <div class="col-md-7">
                                <label class="labelCustom">Country</label>
                                <div class="styled-select">
                                    <select class="customInputBox form-control">
                                        <option selected disabled>United Kingdom</option>
                                        <option>Retail1</option>
                                        <option>Retail2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button class="btn" id="customBTnNext" onclick="gotToNext('2')">NEXT</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row" id="tab2" style="display: none;">
    <div class="col-md-1" style="width: 110px;padding-right:0px;">
        <div class="Md2-1">
            <h1 style="position: relative;top: 40px;padding-left:0px;text-align: center;font-size: 80pt;">1</h1>
        </div>
    </div>
    <div class="col-md-1"  style="width: 130px;padding-right:0px;padding-left:0px;">
        <div class="Md2-1">
            <h1 style="position: relative;top: 30px;font-size: 80pt;padding-left: 0px;">2</h1>
        </div>
    </div>
    <div class="customCMd2 col-md-1">
        <div class="Md2-2">
            <h1>3</h1>
        </div>
    </div>
    <div class="col-md-8">
        <div class="Md8-8" style="padding-left: 100px;">
            <h1 class="customMd8">ADD YOUR BILLING DETAILS</h1>
            <div class="small-box">
            </div>
            <div class="form">
                <form action="#">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="labelCustomTb2">PAYMENT DETAILS</label>
                            </div>
                            <div class="col-md-12">
                                <img style="margin-bottom: 20px;" src="{{asset('/assets/images/payments.png')}}" />
                                <img src="{{asset('assets/images/paypal.png')}}" style="position: relative;top: -10px;" />
                            </div>
                            <br>
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <input type="text" class="customInputBox form-control" placeholder="Name on card" />
                            </div>
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <input type="text" class="customInputBox form-control" placeholder="Name on card" />
                            </div>
                            <div class="col-md-12" style="margin-bottom: 20px;display: flex;">
                                <input type="text" class="customInputBox form-control" style="margin-right: 12px;width: 100px;" placeholder="Expiry Date" />
                                <input type="text" class="customInputBox form-control" style="width: 100px;" placeholder="CSV" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function () {
        gotToNext(1);
    });
    function gotToNext(val) {
        if(val == '2') {
            $('#tab1').hide();
            $('#tab2').show();
        }
    }
</script>
@endpush
