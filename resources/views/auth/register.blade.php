@extends('backend.layouts.default')
@push('css')
    <link href="{{asset('assets/css/register.css')}}" rel="stylesheet" />
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
                                    <button type="button" class="btn" id="customBTnNext" onclick="gotToNext('2')">NEXT</button>
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
            <div class="Md2-2" style="width:210px;">
                <h1>3</h1>
            </div>
        </div>
        <div class="col-md-6">
            <div class="Md8-8" style="padding-left: 60px;">
                <h1 class="customMd6">ADD YOUR BILLING DETAILS</h1>
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
                                    <input type="text" class="customInputBox form-control" placeholder="Card Number" />
                                </div>
                                <div class="col-md-12" style="margin-bottom: 20px;display: flex;">
                                    <input type="text" class="customInputBox form-control" style="margin-right: 12px;width: 100px;" placeholder="Expiry Date" />
                                    <input type="text" class="customInputBox form-control" style="width: 100px;" placeholder="CSV" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="labelCustomTb2">BILLING ADDRESS</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="normalLabel">Address 1</label>
                                    <input type="text" class="customInputBox form-control" placeholder="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="normalLabel">Address 2</label>
                                    <input type="text" class="customInputBox form-control" placeholder="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 customWidthtab2">
                                    <label class="normalLabel">Postcode</label>
                                    <input type="text" class="customInputBoxTab2 form-control" placeholder="" />
                                </div>
                                <div class="col-md-3 customWidthtab2">
                                    <label class="normalLabel">Postcode</label>
                                    <input type="text" class="customInputBoxTab2 form-control" placeholder="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12 customMd12">
                                    <input type="checkbox" class="customMargin" name="checkbox" />
                                    <span>I agree to Sales Terms and Conditions and Privacy Policy</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12 customMd12">
                                    <input type="checkbox" class="customMargin" name="checkbox" />
                                    <span>I’d like to receive email newsletters and tips to help me get the most out of my monthly plan</span>
                                    <button type="button" class="btn" id="customBTnNext12" onclick="gotToNext('3')">NEXT</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2 customBoxMd3">
            <div class="md3Box text-center">
                <span class="span-plan-text">PLAN B</span>
                <h2 class="h2-Price">£150</h2>
                <p class="span-plan">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                </p>
            </div>
        </div>
    </div>
    <div class="row" id="tab3" style="display: none;">
        <div class="col-md-12 custom12Md1234" style="padding:0px;display: flex;align-items: center;">
            <div class="col-md-6 customMd6-1">
                <div class="bgColor1">
                    <h1 class="customh1B">1</h1>
                    <form>
                        <div class="form-group customFormGroup">
                            <div class="row text-right">
                                <label class="customLabelColor">What’s your email address?</label>
                                <input type="text" class="customInput" name="" />
                            </div>
                        </div>
                        <div class="form-group customFormGroup">
                            <div class="row text-right">
                                <label class="customLabelColor">What is your gender?</label>
                                <select class="customInput form-control">
                                    <option selected disabled>Select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Both</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group customFormGroup">
                            <div class="row text-right">
                                <label class="customLabelColor">What’s your date of birth?</label>
                                <div class="customFlex12">
                                    <select class="customInputC form-control" style="margin-right:40px;">
                                        <option selected disabled>Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Both</option>
                                    </select>
                                    <select class="customInputC form-control" style="margin-right:40px;">
                                        <option selected disabled>Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Both</option>
                                    </select>
                                    <select class="customInputC form-control">
                                        <option selected disabled>Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Both</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 customMd6-2">
                <h1 class="customMd6">TELL US ABOUT YOURSELF</h1>
                <div class="small-box">
                </div>
                <form class="customForm">
                    <div class="form-group customFormGroup">
                        <div class="row">
                            <div class="col-md-12 customCol12Md">
                                <label class="normalLabel">What’s your name?</label>
                                <div class="flex setFlex">
                                    <input type="text" name="text" style="margin-right: 20px;" class="customWH form-control" />
                                    <input type="text" name="text" class="customWH form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group customFormGroup">
                        <div class="row">
                            <div class="col-md-12 customCol12Md">
                                <label class="normalLabel">Where are you based (city)?</label>
                                <select class="customInput form-control">
                                    <option selected disabled>Select</option>
                                    <option>Multan</option>
                                    <option>Lahore</option>
                                    <option>Islamabad</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group customFormGroup">
                        <div class="row">
                            <div class="col-md-12 customCol12Md">
                                <label class="normalLabel">Which Languages do you speak? (select multiple)</label>
                                <select class="customInput form-control">
                                    <option selected disabled>Select</option>
                                    <option>Multan</option>
                                    <option>Lahore</option>
                                    <option>Islamabad</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 customBtnNext">
                                <button type="button" class="btn" id="custombtnBrown" onclick="gotToNext('4')">NEXT</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row" id="tab4" style="display: none;">
        <div class="col-md-12 custom12Md1234" style="padding:0px;display: flex;align-items: center;">
            <div class="col-md-6 customMd6-1">
                <div class="bgColor1">
                    <h1 class="customh1B">3</h1>
                    <div class="form-group customFormGroup csu">
                        <div class="c1">
                            <p>Fashion</p>
                            <input type="checkbox" name="check" />
                        </div>
                        <div class="c1">
                            <p>Beauty</p>
                            <input type="checkbox" name="check" />
                        </div>
                        <div class="c1">
                            <p>Fitness</p>
                            <input type="checkbox" name="check" />
                        </div>
                        <div class="c1">
                            <p>Healthy / Lifestyle</p>
                            <input type="checkbox" name="check" />
                        </div>
                        <div class="c1">
                            <p>Tourism / Travel</p>
                            <input type="checkbox" name="check" />
                        </div>
                        <div class="c1">
                            <p>Photography</p>
                            <input type="checkbox" name="check" />
                        </div>
                        <div class="c1">
                            <p>Food and Drink</p>
                            <input type="checkbox" name="check" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 customMd6-2">
                <h1 class="customMd6">TELL US ABOUT YOURSELF</h1>
                <div class="small-box">
                </div>
                <div class="form-group customFormGroup csu2">
                    <div class="c2">
                        <input type="checkbox" name="check" />
                        <p>Movies</p>
                    </div>
                    <div class="c2">
                        <input type="checkbox" name="check" />
                        <p>Jewellery</p>
                    </div>
                    <div class="c2">
                        <input type="checkbox" name="check" />
                        <p>Music</p>
                    </div>
                    <div class="c2">
                        <input type="checkbox" name="check" />
                        <p>Gaming</p>
                    </div>
                    <div class="c2">
                        <input type="checkbox" name="check" />
                        <p>Gambling / Restricted Content</p>
                    </div>
                    <div class="c2">
                        <input type="checkbox" name="check" />
                        <p>Anything / All of the Above</p>
                    </div>
                </div>
                <div class="form-group customFormGroup csu3">
                    <div class="c3">
                        <input type="checkbox" name="checkbox" />
                        <p>I agree to Influencia’s Privacy Policy and Website Terms and Conditions</p>
                    </div>
                    <div class="c3">
                        <input type="checkbox" name="checkbox" />
                        <p>I’d like to receive email newsletters and offers from My Influencer Network</p>
                    </div>
                    <div class="btn-btn">
                        <button class="btn" id="custombtnBrown">NEXT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            // gotToNext(1);
        });
        function gotToNext(val) {
            if(val == '2') {
                $('#tab1').hide();
                $('#tab2').show();
            }
            if(val == '3') {
                $('.customUl li a').addClass('changeColor');
                $('#btnLogin').addClass('changeColorBg');
                $('.customMd6').addClass('changeColor2');
                $('.small-box').addClass('changeColor3');
                $('#tab1').hide();
                $('#tab2').hide();
                $('#tab3').show();
            }
            if(val == '4') {
                $('.customUl li a').addClass('changeColor');
                $('#btnLogin').addClass('changeColorBg');
                $('.customMd6').addClass('changeColor2');
                $('.small-box').addClass('changeColor3');
                $('#tab1').hide();
                $('#tab2').hide();
                $('#tab3').hide();
                $('#tab4').show();
            }
        }
    </script>
@endpush
