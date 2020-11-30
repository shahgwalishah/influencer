@extends('frontend.layouts.default')
@push('css')
    <link href="{{asset('assets/css/campaign.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/avail_campaign.css')}}" rel="stylesheet" />
@endpush
@section('head-nav-content')
    <ul class="customUlNav">
        <li>
            <a href="#">AVAILABLE CAMPAIGNS</a>
        </li>
    </ul>
@endsection
@section('content')
<div class="container customStyle">
    <div class="row">
        <h2 class="customCampaignH2">CAMPAIGNS AVAILABLE FOR YOU TO JOIN</h2>
    </div>
    <br>
    <div class="row">
        <div class="customDesc12 col-md-12">
            <div class="row custom-row-pD">
                <div class="col-md-4">

                </div>
                <div class="col-md-8">
                <div class="row customRow-Md8">
                    <div class="col-md-4">
                        <select class="form-control">
                            <option selected>Select</option>
                            <option></option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control">
                            <option selected>Select</option>
                            <option></option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control">
                            <option selected>Select</option>
                            <option></option>
                        </select>
                    </div>
                    <button class="btn customBtn51" id="btn5-1">FILTER</button>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="custom-md-3">
                        <button class="btn customBtn51-changeColor" id="btn5-1">SCHEDULED</button>
                        <img src="/assets/images/asos.png" />
                    </div>
                </div>
                <div class="col-md-9">
                    <h2 class="custom-h2-avail">CAMPAIGN NAME - BLACK FRIDAY SALE</h2>
                    <a href="#" class="custom-anchor-tag">Not Interested</a>
                    <p class="paragraph-avail">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <p class="paragraph-avail">
                        Start Date: 12/11/2020   -    End Date: 02/01/2021
                    </p>
                    <p class="paragraph-avail">
                        <span class="custom-display-on">Display on:</span>
                        <img class="image-avail" src="/assets/images/fb.png" />
                        <img class="image-avail" src="/assets/images/forma.png" />
                        <img class="image-avail" src="/assets/images/inst.png" />
                        <img class="image-avail" src="/assets/images/tik.png" />
                        <img class="image-avail" src="/assets/images/tube.png" />
                        <img class="image-avail" src="/assets/images/sn.png" />
                    </p>
                    <div class="buttons-btn-custom">
                        <button class="btn customizable" id="btn-customizable1">LEARN MORE</button>
                        <button class="btn customizable" id="btn-customizable">JOIN NOW</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="custom-md-3">
                        <button class="btn customBtn51" id="btn5-1">RUNNING</button>
                        <img src="/assets/images/asos.png" />
                    </div>
                </div>
                <div class="col-md-9 customMd9">
                    <h2 class="custom-h2-avail">CAMPAIGN NAME - BLACK FRIDAY SALE</h2>
                    <a href="#" class="custom-anchor-tag">Not Interested</a>
                    <p class="paragraph-avail">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <p class="paragraph-avail">
                        Start Date: 12/11/2020   -    End Date: 02/01/2021
                    </p>
                    <p class="paragraph-avail">
                        <span class="custom-display-on">Display on:</span>
                        <img class="image-avail" src="/assets/images/fb.png" />
                        <img class="image-avail" src="/assets/images/forma.png" />
                        <img class="image-avail" src="/assets/images/inst.png" />
                        <img class="image-avail" src="/assets/images/tik.png" />
                        <img class="image-avail" src="/assets/images/tube.png" />
                        <img class="image-avail" src="/assets/images/sn.png" />
                    </p>
                    <div class="buttons-btn-custom">
                        <button class="btn customizable" id="btn-customizable1">LEARN MORE</button>
                        <button class="btn customizable" id="btn-customizable">JOIN NOW</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="custom-md-3">
                        <button class="btn customBtn51-changeColor" id="btn5-1">SCHEDULED</button>
                        <img src="/assets/images/asos.png" />
                    </div>
                </div>
                <div class="col-md-9 customMd9">
                    <h2 class="custom-h2-avail">CAMPAIGN NAME - BLACK FRIDAY SALE</h2>
                    <a href="#" class="custom-anchor-tag">Not Interested</a>
                    <p class="paragraph-avail">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <p class="paragraph-avail">
                        Start Date: 12/11/2020   -    End Date: 02/01/2021
                    </p>
                    <p class="paragraph-avail">
                        <span class="custom-display-on">Display on:</span>
                        <img class="image-avail" src="/assets/images/fb.png" />
                        <img class="image-avail" src="/assets/images/forma.png" />
                        <img class="image-avail" src="/assets/images/inst.png" />
                        <img class="image-avail" src="/assets/images/tik.png" />
                        <img class="image-avail" src="/assets/images/tube.png" />
                        <img class="image-avail" src="/assets/images/sn.png" />
                    </p>
                    <div class="buttons-btn-custom">
                        <button class="btn customizable" id="btn-customizable1">LEARN MORE</button>
                        <button class="btn customizable" id="btn-customizable">JOIN NOW</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="custom-md-3">
                        <button class="btn customBtn51" id="btn5-1">RUNNING</button>
                        <img src="/assets/images/asos.png" />
                    </div>
                </div>
                <div class="col-md-9 customMd9">
                    <h2 class="custom-h2-avail">CAMPAIGN NAME - BLACK FRIDAY SALE</h2>
                    <a href="#" class="custom-anchor-tag">Not Interested</a>
                    <p class="paragraph-avail">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <p class="paragraph-avail">
                        Start Date: 12/11/2020   -    End Date: 02/01/2021
                    </p>
                    <p class="paragraph-avail">
                        <span class="custom-display-on">Display on:</span>
                        <img class="image-avail" src="/assets/images/fb.png" />
                        <img class="image-avail" src="/assets/images/forma.png" />
                        <img class="image-avail" src="/assets/images/inst.png" />
                        <img class="image-avail" src="/assets/images/tik.png" />
                        <img class="image-avail" src="/assets/images/tube.png" />
                        <img class="image-avail" src="/assets/images/sn.png" />
                    </p>
                    <div class="buttons-btn-custom">
                        <button class="btn customizable" id="btn-customizable1">LEARN MORE</button>
                        <button class="btn customizable" id="btn-customizable">JOIN NOW</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="custom-md-3">
                        <button class="btn customBtn51-changeColor" id="btn5-1">SCHEDULED</button>
                        <img src="/assets/images/asos.png" />
                    </div>
                </div>
                <div class="col-md-9 customMd9">
                    <h2 class="custom-h2-avail">CAMPAIGN NAME - BLACK FRIDAY SALE</h2>
                    <a href="#" class="custom-anchor-tag">Not Interested</a>
                    <p class="paragraph-avail">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <p class="paragraph-avail">
                        Start Date: 12/11/2020   -    End Date: 02/01/2021
                    </p>
                    <p class="paragraph-avail">
                        <span class="custom-display-on">Display on:</span>
                        <img class="image-avail" src="/assets/images/fb.png" />
                        <img class="image-avail" src="/assets/images/forma.png" />
                        <img class="image-avail" src="/assets/images/inst.png" />
                        <img class="image-avail" src="/assets/images/tik.png" />
                        <img class="image-avail" src="/assets/images/tube.png" />
                        <img class="image-avail" src="/assets/images/sn.png" />
                    </p>
                    <div class="buttons-btn-custom">
                        <button class="btn customizable" id="btn-customizable1">LEARN MORE</button>
                        <button class="btn customizable" id="btn-customizable">JOIN NOW</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="custom-md-3">
                        <button class="btn customBtn51" id="btn5-1">RUNNING</button>
                        <img src="/assets/images/asos.png" />
                    </div>
                </div>
                <div class="col-md-9 customMd9">
                    <h2 class="custom-h2-avail">CAMPAIGN NAME - BLACK FRIDAY SALE</h2>
                    <a href="#" class="custom-anchor-tag">Not Interested</a>
                    <p class="paragraph-avail">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <p class="paragraph-avail">
                        Start Date: 12/11/2020   -    End Date: 02/01/2021
                    </p>
                    <p class="paragraph-avail">
                        <span class="custom-display-on">Display on:</span>
                        <img class="image-avail" src="/assets/images/fb.png" />
                        <img class="image-avail" src="/assets/images/forma.png" />
                        <img class="image-avail" src="/assets/images/inst.png" />
                        <img class="image-avail" src="/assets/images/tik.png" />
                        <img class="image-avail" src="/assets/images/tube.png" />
                        <img class="image-avail" src="/assets/images/sn.png" />
                    </p>
                    <div class="buttons-btn-custom">
                        <button class="btn customizable" id="btn-customizable1">LEARN MORE</button>
                        <button class="btn customizable" id="btn-customizable">JOIN NOW</button>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 cstomMd12">
                    <button class="btn customizeBtn" id="btn5">LOAD MORE</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush
