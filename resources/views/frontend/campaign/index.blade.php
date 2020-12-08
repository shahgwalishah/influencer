@extends('frontend.layouts.default')
@push('css')
    <link href="{{asset('assets/css/campaign.css')}}" rel="stylesheet" />
    <style>
        .modalHeadbgColor{
            background-image: linear-gradient(#89427d,#6e3d86);
            color: #fff;
            display: flex;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .btnClose{
            color: #000 !important;
            position: absolute;
            right: 20px;
        }
        .modal-content{
            border-radius: 10px;
        }
    </style>
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
                    <input type="date" name="start_date" class="form-control" />
                </div>
            </div>
            <div class="customMd2 col-md-2">
                <div class="form-group">
                    <label>End Date*</label>
                    <input type="date" name="end_date" class="form-control" />
                </div>
            </div>
            <div class="customMd4 col-md-4">
                <div class="form-group">
                    <label>Promo Code*</label>
                    <input type="text" name="promo_code" placeholder="Enter Promo Code" class="form-control" />
                </div>
            </div>
        </div>
        <div class="customMM col-md-12">
            <label>Display On*</label>
        </div>
        <div class="customResponseQ col-md-12 customHandleClass">
            @foreach($social_networks as $network)
                <div class="social-icons">
                    <input type="checkbox" id="social_{{$network->id}}" onclick="social_networks('{{$network->id}}','{{$network->name}}')" name="social_net_works[]" />
                    <img src="{{$network->image}}" style="width:30px;" />
                    <span>{{$network->name}}</span>
                </div>
            @endforeach
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
                <input type="checkbox" id="aa" onclick="clickGender('a')" name="all" />
                <span class="set-margin-S">All</span>
            </div>
            <div class="set-prefrence-p">
                <input type="checkbox" id="bb" onclick="clickGender('b')" name="male" />
                <span class="set-margin-S">Male</span>
            </div>
            <div class="set-prefrence-p">
                <input type="checkbox" id="cc" onclick="clickGender('c')" name="female" />
                <span class="set-margin-S">Female</span>
            </div>
            <div class="set-prefrence-p">
                <input type="checkbox" id="dd" name="binary" onclick="clickGender('d')" />
                <span class="set-margin-S">Prefer not to say / Non-binary</span>
            </div>
        </div>
        <div class="customResponsiveQ customHandleClass col-md-12">
            <div class="customP-0 col-md-3">
                <label>Age*</label>
                <select class="form-control">
                        <option>Any</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>greater then 25</option>
                </select>
            </div>
            <div class="customMd4 col-md-4">
                <label>Country*</label>
                <div class="custom-flex">
                    <select class="form-control">
                        <option>Any</option>
                        <option>Pakistan</option>
                        <option>United States</option>
                    </select>
                    <button type="button" class="btn btn4-custom" onclick="openCountryModal()" id="btn4">Add More</button>
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
                    <button type="button" class="btn btn4-custom" onclick="openCityModal()" id="btn4">Add More</button>
                </div>
            </div>
        </div>
        <div class="customHandleClass col-md-12">
            <label>Interests*</label>
        </div>
        <div class="col-md-12">
            <div class="row">
                @foreach($interest as $interests)
                <div class=" col-md-3">
                    <input type="checkbox" id="interests_{{$interests->id}}" name="interests[]" onclick="choose_interests('{{$interests->name}}','{{$interests->id}}')" />
                    <span>{{$interests->name}}</span>
                </div>
                @endforeach
            </div>
        </div>
        <div class="customMargin col-md-12">
            <label>Number of followers (at least)</label>
        </div>
        <div class="customResQ col-md-12 customHandleClass">
            @foreach(\App\Models\Campaign::NumberOfFollowers() as $data)
                <div class="social-icons-target">
                <div style="display: flex;align-items: center;">
                    <img src="{{$data['image']}}" style="width:30px;" />
                    <span>{{$data['name']}}</span>
                </div>
                <select class="form-control" name="number_of_followers[]">
                    <option>Select</option>
                    <option>1000</option>
                    <option>1000 to 2500</option>
                    <option>2500 to 3500</option>
                    <option>3500 to 4500</option>
                </select>
            </div>
            @endforeach
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

<!-- Modal -->
<div id="myModalCountry" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modalHeadbgColor">
{{--                <button type="button" class="btnClose" data-dismiss="modal">--}}
{{--                    <i class="fa fa-times"></i>--}}
{{--                </button>--}}
                <h4 class="modal-title">Add Country</h4>
            </div>
            <form action="{{route('addCountry')}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Country Name</label>
                                <input type="text" name="country_name" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="btn1" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default" id="btn2">Save</button>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="myModalCity" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modalHeadbgColor">
{{--                <button type="button" class="btnClose" data-dismiss="modal">--}}
{{--                    <i class="fa fa-times"></i>--}}
{{--                </button>--}}
                <h4 class="modal-title">Add City</h4>
            </div>
            <form action="{{route('addCountry')}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>City Name</label>
                                <input type="text" name="country_name" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="btn1" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default" id="btn2">Save</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
@push('js')
    <script>
        var arr = [];
        var arr1 = [];
        $.ajax({
            url:'{{route('getInterests')}}',
            method:'GET',

            success: function (response) {
                response.map(function (data) {
                   let d = {id:data.id,name:data.name};
                   arr.push(d);
                });
            },
            error: function (error) {
                console.log(error);
            }
        });

        $.ajax({
            url:'{{route('getNetWorks')}}',
            method:'GET',

            success: function (response) {
                response.map(function (data) {
                   let d = {id:data.id,name:data.name};
                   arr1.push(d);
                });
            },

            error: function (error) {
                console.log(error);
            }
        });

        function openCityModal() {
            $('#myModalCity').modal('show');
        }
        function openCountryModal() {
            $('#myModalCountry').modal('show');
        }
        function choose_interests(val,id){
            let checkData = $('#interests_'+id).prop('checked');
            if(checkData) {
                if(id == 1) {
                    arr.map((data) => {
                        $('#interests_'+data.id).prop('checked',true);
                    });
                }
            } else {
                arr.map((data) => {
                    $('#interests_'+data.id).prop('checked',false);
                });
            }
        }
        function social_networks(id,val) {
            let checkData = $('#social_'+id).prop('checked');
            if(checkData) {
                if(id == 7) {
                    arr1.map((data) => {
                        $('#social_'+data.id).prop('checked',true);
                    });
                }
            } else {
                arr1.map((data) => {
                    $('#social_'+data.id).prop('checked',false);
                });
            }
        }

        function clickGender(val) {
            let checkData = $('#aa').prop('checked');
            if(checkData) {
                if(val == 'a') {
                    $('#aa').prop('checked', true);
                    $('#bb').prop('checked', true);
                    $('#cc').prop('checked', true);
                    $('#dd').prop('checked', true);
                }
            } else {
                $('#aa').prop('checked', false);
                $('#bb').prop('checked', false);
                $('#cc').prop('checked', false);
                $('#dd').prop('checked', false);
            }
            if(val == 'b') {
                $('#aa').prop('checked', false);
                $('#bb').prop('checked', true);
                $('#cc').prop('checked', false);
                $('#dd').prop('checked', false);
            }
            if(val == 'c') {
                $('#aa').prop('checked', false);
                $('#bb').prop('checked', false);
                $('#cc').prop('checked', true);
                $('#dd').prop('checked', false);
            }
            if(val == 'd') {
                $('#aa').prop('checked', false);
                $('#bb').prop('checked', false);
                $('#cc').prop('checked', false);
                $('#dd').prop('checked', true);
            }
        }
    </script>
@endpush
