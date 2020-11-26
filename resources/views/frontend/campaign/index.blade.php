@extends('frontend.layouts.default')
@push('css')
    <link href="{{asset('assets/css/campaign.css')}}" rel="stylesheet" />
@endpush
@section('head-nav-content')
    <ul class="customUlNav">
        <li>
            <a href="#">ADD A CAMPAIGN</a>
        </li>
    </ul>
@endsection
@section('content')
<div class="row text-right customRow">
    <button class="btn" id="btn1">DELETE</button>
    <button class="btn" id="btn2">SAVE AS DRAFT</button>
    <button class="btn" id="btn3">PUBLISH</button>
</div>
<div class="container customStyle">
    <div class="row">
        <h2 class="customCampaignH2">GENERAL</h2>
    </div>
    <br>
    <form>
        <div class="col-md-12">
            <div class="form-group">
                <label>Campaign Name*</label>
                <input type="text" name="campaign-name" class="form-control" />
            </div>
        </div>
        <div class="customP col-md-12">
            <div class="customM8AC col-md-8">
                <div class="form-group">
                    <label>Description (explain this campaign, its objectives and products/services to the influencers)*</label>
                    <textarea class="form-control" name="description" cols="12" rows="8">

                </textarea>
                </div>
            </div>
            <div class="customM4AC col-md-4">
                <div class="form-group">
                    <label>Hashtags*</label>
                    <textarea class="form-control" name="description" cols="12" rows="8">
                </textarea>
                </div>
            </div>
        </div>
        <div class="customP col-md-12">
            <div class="customMd2 col-md-2">
                <div class="form-group">
                    <label>Sector*</label>
                    <select class="form-control">
                        <option>Select</option>
                    </select>
                </div>
            </div>
            <div class="customMd2 col-md-2">
                <div class="form-group">
                    <label>Start Date*</label>
                    <select class="form-control">
                        <option>Select</option>
                    </select>
                </div>
            </div>
            <div class="customMd2 col-md-2">
                <div class="form-group">
                    <label>End Date*</label>
                    <select class="form-control">
                        <option>Select</option>
                    </select>
                </div>
            </div>
            <div class="customMd4 col-md-4">
                <div class="form-group">
                    <label>End Date*</label>
                    <input type="text" name="promo_code" placeholder="Enter Promo Code" class="form-control" />
                </div>
            </div>
        </div>
        <div class="customMM col-md-12">
            <label>Display On*</label>
        </div>
        <div class="customResponseQ col-md-12 customHandleClass">
            <div class="social-icons">
                <input type="checkbox" name="insta" />
                <img src="{{asset('assets/images/insta.png')}}" style="width:30px;" />
                <span>Instagram</span>
            </div>
            <div class="social-icons">

                <input type="checkbox" name="facebook" />
                <img src="{{asset('assets/images/facebook.png')}}" style="width:30px;" />
                <span>Facebook</span>
            </div>
            <div class="social-icons">
                <input type="checkbox" name="twitter" />
                <img src="{{asset('assets/images/twitter.png')}}" style="width:30px;" />
                <span>Twitter</span>
            </div>
            <div class="social-icons">
                <input type="checkbox" name="tiktok" />
                <img src="{{asset('assets/images/tiktok.png')}}" style="width:30px;" />
                <span>Tik Tok</span>
            </div>
            <div class="social-icons">
                <input type="checkbox" name="you_tube" />
                <img src="{{asset('assets/images/you_tube.png')}}" style="width:30px;" />
                <span>Youtube</span>
            </div>
            <div class="social-icons">
                <input type="checkbox" name="snap_chat" />
                <img src="{{asset('assets/images/snap_chat.png')}}" style="width:30px;" />
                <span>Snapchat</span>
            </div>
            <div class="social-icons">
                <input type="checkbox" name="all_media" />
                <span>All Social Media</span>
            </div>
        </div>
        <br>
        <br>
    </form>
</div>
<br>
<br>
<div class="container customStyle">
    <div class="row">
        <h2 class="customCampaignH2">TARGET</h2>
    </div>
    <br>
    <form>
        <div class="customHandleClass col-md-12">
             <label>Gender*</label>
        </div>
        <div class="customRPQ col-md-12 customHandleClass">
            <div class="set-prefrence-p">
                <input type="checkbox" name="all" />
                <span class="set-margin-S">All</span>
            </div>
            <div class="set-prefrence-p">
                <input type="checkbox" name="male" />
                <span class="set-margin-S">Male</span>
            </div>
            <div class="set-prefrence-p">
                <input type="checkbox" name="female" />
                <span class="set-margin-S">Female</span>
            </div>
            <div class="set-prefrence-p">
                <input type="checkbox" name="binary" />
                <span class="set-margin-S">Prefer not to say / Non-binary</span>
            </div>
        </div>
        <div class="customResponsiveQ customHandleClass col-md-12">
            <div class="customP-0 col-md-3">
                <label>Age*</label>
                <select class="form-control">
                        <option>Any</option>
                        <option>Any1</option>
                        <option>Any2</option>
                </select>
            </div>
            <div class="customMd4 col-md-4">
                <label>Country*</label>
                <div class="custom-flex">
                    <select class="form-control">
                        <option>Any</option>
                        <option>Any1</option>
                        <option>Any2</option>
                    </select>
                    <button class="btn btn4-custom" id="btn4">Add More</button>
                </div>
            </div>
            <div class="customMd4T col-md-4">
                <label>City (Optional)</label>
                <div class="custom-flex">
                    <select class="form-control">
                        <option>Any</option>
                        <option>Multan</option>
                        <option>Lahore</option>
                        <option>Islamabad</option>
                    </select>
                    <button class="btn btn4-custom" id="btn4">Add More</button>
                </div>
            </div>
        </div>
        <div class="customHandleClass col-md-12">
            <label>Interests*</label>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class=" col-md-3">
                    <input type="checkbox" name="all_interest" />
                    <span>All interests</span>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" name="all_interest" />
                    <span>Healthy / Lifestyle</span>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" name="all_interest" />
                    <span>Food and Drink</span>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" name="all_interest" />
                    <span>Music</span>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-3">
                    <input type="checkbox" name="all_interest" />
                    <span>Beauty</span>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" name="all_interest" />
                    <span>Tourism / Travel</span>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" name="all_interest" />
                    <span>Movies</span>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" name="all_interest" />
                    <span>Gaming</span>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-3">
                    <input type="checkbox" name="all_interest" />
                    <span>Fitness</span>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" name="all_interest" />
                    <span>Photography</span>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" name="all_interest" />
                    <span>Jewellery</span>
                </div>
                <div class="col-md-3">
                    <input type="checkbox" name="all_interest" />
                    <span>Gambling / Restricted Content</span>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-3">
                    <input type="checkbox" name="all_interest" />
                    <span>Fashion</span>
                </div>
            </div>
        </div>
        <div class="customMargin col-md-12">
            <label>Number of followers (at least)</label>
        </div>
        <div class="customResQ col-md-12 customHandleClass">
            <div class="social-icons-target">
                <div style="display: flex;align-items: center;">
                    <img src="{{asset('assets/images/insta.png')}}" style="width:30px;" />
                    <span>Instagram</span>
                </div>
                <select class="form-control">
                    <option>Select</option>
                    <option>Select1</option>
                    <option>Select2</option>
                </select>
            </div>
            <div class="social-icons-target">
                <div style="display: flex;align-items: center;">
                    <img src="{{asset('assets/images/facebook.png')}}" style="width:30px;" />
                    <span>Facebook</span>
                </div>
                <select class="form-control">
                    <option>Select</option>
                    <option>Select1</option>
                    <option>Select2</option>
                </select>
            </div>
            <div class="social-icons-target">
                <div style="display: flex;align-items: center;">
                    <img src="{{asset('assets/images/twitter.png')}}" style="width:30px;margin-bottom:3px;" />
                    <span>Twitter</span>
                </div>
                <select class="form-control">
                    <option>Select</option>
                    <option>Select1</option>
                    <option>Select2</option>
                </select>
            </div>
            <div class="social-icons-target">
                <div style="display: flex;align-items: center;">
                    <img src="{{asset('assets/images/tiktok.png')}}" style="width:30px;" />
                    <span>Tik Tok</span>
                </div>
                <select class="form-control">
                    <option>Select</option>
                    <option>Select1</option>
                    <option>Select2</option>
                </select>
            </div>
            <div class="social-icons-target">
                <div style="display: flex;align-items: center;">
                    <img src="{{asset('assets/images/you_tube.png')}}" style="width:30px;" />
                    <span>Youtube</span>
                </div>
                <select class="form-control">
                    <option>Select</option>
                    <option>Select1</option>
                    <option>Select2</option>
                </select>
            </div>
            <div class="social-icons-target">
                <div style="display: flex;align-items: center;">
                    <img src="{{asset('assets/images/snap_chat.png')}}" style="width:30px;" />
                    <span>Snapchat</span>
                </div>
                <select class="form-control">
                    <option>Select</option>
                    <option>Select1</option>
                    <option>Select2</option>
                </select>
            </div>
        </div>
    </form>
</div>
<br>
<br>
<div class="container customStyle">
    <div class="row">
        <h2 class="customCampaignH2">AD CONTENT AND CREATIVES</h2>
    </div>
    <br>
    <form>
        <div class="customMargin col-md-12">
            <label>Number of followers (at least)</label>
        </div>
        <div class="customResQ col-md-12 customHandleClass">
            <div class="social-icons-target">
                <div style="display: flex;align-items: center;">
                    <img src="{{asset('assets/images/insta.png')}}" style="width:30px;" />
                    <span>Instagram</span>
                </div>
            </div>
            <div class="social-icons-target">
                <div style="display: flex;align-items: center;">
                    <img src="{{asset('assets/images/facebook.png')}}" style="width:30px;" />
                    <span>Facebook</span>
                </div>
            </div>
            <div class="social-icons-target">
                <div style="display: flex;align-items: center;">
                    <img src="{{asset('assets/images/twitter.png')}}" style="width:30px;margin-bottom:3px;" />
                    <span>Twitter</span>
                </div>
            </div>
            <div class="social-icons-target">
                <div style="display: flex;align-items: center;">
                    <img src="{{asset('assets/images/tiktok.png')}}" style="width:30px;" />
                    <span>Tik Tok</span>
                </div>
            </div>
            <div class="social-icons-target">
                <div style="display: flex;align-items: center;">
                    <img src="{{asset('assets/images/you_tube.png')}}" style="width:30px;" />
                    <span>Youtube</span>
                </div>
            </div>
            <div class="social-icons-target">
                <div style="display: flex;align-items: center;">
                    <img src="{{asset('assets/images/snap_chat.png')}}" style="width:30px;" />
                    <span>Snapchat</span>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <label class="custom-lL">Copy</label>
                    <textarea class="form-control" cols="5" rows="8"></textarea>
                </div>
                <div class="col-md-5">
                    <label class="custom-lL">Creatives</label>
                    <div class="bg-color-div">
                        <h2>UPLOAD ASSETS (video, audio, images)</h2>
                    </div>
                    <div class="custom-div">
                        <img src="{{asset('assets/images/doc.png')}}" style="width:50px;margin-top: 10px;" />
                        <p class="custom-pText">
                            <span class="custom-color">Drag and drop</span>files here
                        </p>
                        <p class="custom-pText">
                            or <span class="custom-color">browse</span>
                            to begin the upload
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <label>Uploaded assets</label>
                    <div class="custom-uploaded-assets">
                        <p class="hover-able">Banner.jpeg</p>
                        <p class="hover-able">Remove</p>
                    </div>
                    <div class="custom-uploaded-assets">
                        <p class="hover-able">image2.jpeg</p>
                        <p class="hover-able">Remove</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="customMargin col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <label>Swipe up link</label>
                    <input type="text" name="" class="form-control" />
                </div>
                <div class="col-md-6">
                    <label>Link to videos</label>
                    <input type="text" name="" class="form-control" />
                </div>
            </div>
        </div>
    </form>
</div>
<div class="row text-right customRow">
    <button class="btn" id="btn1">DELETE</button>
    <button class="btn" id="btn2">SAVE AS DRAFT</button>
    <button class="btn" id="btn3">PUBLISH</button>
</div>
@endsection
