@extends('frontend.layouts.default')
@push('css')
    <link href="{{asset('assets/css/campaign.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link href="{{asset('assets/css/campaign-dashboard.css')}}" rel="stylesheet" />
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
            <h2 class="customCampaignH2">WELCOME BACK EMMA</h2>
            <hr>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="Md12">
                    <h3 class="latest-brand">LATEST BRANDS</h3>
                    <button class="btn custom_set_btn" id="btn5">SEE ALL</button>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-2 text-center">
                    <div class="md2">
                        <img class="custom_image_set" style="width:100px;" src="{{asset('assets/images/asos_image.png')}}" />
                        <p class="custom_p">Fashion, Jewelry</p>
                        <button class="learn_more" id="btn2-1">LEARN MORE</button>
                        <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="md2">
                        <img class="custom_image_set" style="width:100px;" src="{{asset('assets/images/Apple.png')}}" />
                        <p class="custom_p">Fashion, Jewelry</p>
                        <button class="learn_more" id="btn2-1">LEARN MORE</button>
                        <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="md2">
                        <img class="custom_image_set" style="width:100px;" src="{{asset('assets/images/HM.png')}}" />
                        <p class="custom_p">Fashion, Jewelry</p>
                        <button class="learn_more" id="btn2-1">LEARN MORE</button>
                        <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="md2">
                        <img class="custom_image_set" style="width:100px;" src="{{asset('assets/images/asos_image.png')}}" />
                        <p class="custom_p">Fashion, Jewelry</p>
                        <button class="learn_more" id="btn2-1">LEARN MORE</button>
                        <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="md2">
                        <img class="custom_image_set" style="width:100px;" src="{{asset('assets/images/amazon.png')}}" />
                        <p class="custom_p">Fashion, Jewelry</p>
                        <button class="learn_more" id="btn2-1">LEARN MORE</button>
                        <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="md2">
                        <img class="custom_image_set" style="width:100px;" src="{{asset('assets/images/Apple.png')}}" />
                        <p class="custom_p">Fashion, Jewelry</p>
                        <button class="learn_more" id="btn2-1">LEARN MORE</button>
                        <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="Md12" style="margin-top: 25px;">
                    <h3 class="latest-brand">LATEST CAMPAIGNS</h3>
                </div>
            </div>
        </div>
        <div class="row customMarginCD">
            <div class="col-md-12">
               <div class="col-md-6">
                   <div class="row">
                       <div class="col-md-4">
                           <div class="custom-md-3">
                               <button class="btn customBtn51-changeColor" id="btn5-1">RUNNING</button>
                               <img class="customHI" style="width:100%;" src="/assets/images/asos.png">
                               <p>
                                   <span class="custom-display-on">Display on:</span>
                               </p>
                               <p class="paragraph-avail2">
                                   <img class="image-avail" src="/assets/images/facebook.png">
                                   <img class="image-avail" src="/assets/images/twitter.png">
                                   <img class="image-avail" src="/assets/images/insta.png">
                                   <img class="image-avail" src="/assets/images/tiktok.png">
                                   <img class="image-avail" src="/assets/images/you_tube.png">
                                   <img class="image-avail" src="/assets/images/snap_chat.png">
                               </p>
                           </div>
                       </div>
                       <div class="col-md-8 customMd8CD">
                           <h2 class="custom-h2-avail">CAMPAIGN NAME - BLACK FRIDAY SALE</h2>
                           <p class="paragraph-avail">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                           </p>
                           <p class="paragraph-avail">
                               Start Date: 12/11/2020   -    End Date: 02/01/2021
                           </p>
                           <div class="buttons-btn-custom">
                               <button class="btn customizable" id="btn-customizable1">LEARN MORE</button>
                               <button class="btn customizable" id="btn-customizable">JOIN NOW</button>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="row">
                       <div class="col-md-4">
                           <div class="custom-md-3">
                               <button class="btn customBtn51-changeColor" id="btn5-1">RUNNING</button>
                               <img class="customHI" style="width:100%;" src="/assets/images/asos.png">
                               <p>
                                   <span class="custom-display-on">Display on:</span>
                               </p>
                               <p class="paragraph-avail2">
                                   <img class="image-avail" src="/assets/images/facebook.png">
                                   <img class="image-avail" src="/assets/images/twitter.png">
                                   <img class="image-avail" src="/assets/images/insta.png">
                                   <img class="image-avail" src="/assets/images/tiktok.png">
                                   <img class="image-avail" src="/assets/images/you_tube.png">
                                   <img class="image-avail" src="/assets/images/snap_chat.png">
                               </p>
                           </div>
                       </div>
                       <div class="col-md-8 customMd8CD">
                           <h2 class="custom-h2-avail">CAMPAIGN NAME - BLACK FRIDAY SALE</h2>
                           <p class="paragraph-avail">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                           </p>
                           <p class="paragraph-avail">
                               Start Date: 12/11/2020   -    End Date: 02/01/2021
                           </p>
                           <div class="buttons-btn-custom">
                               <button class="btn customizable" id="btn-customizable1">LEARN MORE</button>
                               <button class="btn customizable" id="btn-customizable">JOIN NOW</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        </div>
        <div class="row customMarginCD">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="custom-md-3">
                                <button class="btn customBtn51-changeColor" style="background:#ac456c" id="btn5-1">SCHEDULED</button>
                                <img class="customHI" style="width:100%;" src="/assets/images/asos.png">
                                <p>
                                    <span class="custom-display-on">Display on:</span>
                                </p>
                                <p class="paragraph-avail2">
                                    <img class="image-avail" src="/assets/images/facebook.png">
                                    <img class="image-avail" src="/assets/images/twitter.png">
                                    <img class="image-avail" src="/assets/images/insta.png">
                                    <img class="image-avail" src="/assets/images/tiktok.png">
                                    <img class="image-avail" src="/assets/images/you_tube.png">
                                    <img class="image-avail" src="/assets/images/snap_chat.png">
                                </p>
                            </div>
                        </div>
                        <div class="col-md-8 customMd8CD">
                            <h2 class="custom-h2-avail">CAMPAIGN NAME - BLACK FRIDAY SALE</h2>
                            <p class="paragraph-avail">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                            </p>
                            <p class="paragraph-avail">
                                Start Date: 12/11/2020   -    End Date: 02/01/2021
                            </p>
                            <div class="buttons-btn-custom">
                                <button class="btn customizable" id="btn-customizable1">LEARN MORE</button>
                                <button class="btn customizable" id="btn-customizable">JOIN NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="custom-md-3">
                                <button class="btn customBtn51-changeColor" style="background:#ac456c" id="btn5-1">SCHEDULED</button>
                                <img class="customHI" style="width:100%;" src="/assets/images/asos.png">
                                <p>
                                    <span class="custom-display-on">Display on:</span>
                                </p>
                                <p class="paragraph-avail2">
                                    <img class="image-avail" src="/assets/images/facebook.png">
                                    <img class="image-avail" src="/assets/images/twitter.png">
                                    <img class="image-avail" src="/assets/images/insta.png">
                                    <img class="image-avail" src="/assets/images/tiktok.png">
                                    <img class="image-avail" src="/assets/images/you_tube.png">
                                    <img class="image-avail" src="/assets/images/snap_chat.png">
                                </p>
                            </div>
                        </div>
                        <div class="col-md-8 customMd8CD">
                            <h2 class="custom-h2-avail">CAMPAIGN NAME - BLACK FRIDAY SALE</h2>
                            <p class="paragraph-avail">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                            </p>
                            <p class="paragraph-avail">
                                Start Date: 12/11/2020   -    End Date: 02/01/2021
                            </p>
                            <div class="buttons-btn-custom">
                                <button class="btn customizable" id="btn-customizable1">LEARN MORE</button>
                                <button class="btn customizable" id="btn-customizable">JOIN NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row customMarginCD">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="custom-md-3">
                                <button class="btn customBtn51-changeColor" style="background:#ac456c" id="btn5-1">SCHEDULED</button>
                                <img class="customHI" style="width:100%;" src="/assets/images/asos.png">
                                <p>
                                    <span class="custom-display-on">Display on:</span>
                                </p>
                                <p class="paragraph-avail2">
                                    <img class="image-avail" src="/assets/images/facebook.png">
                                    <img class="image-avail" src="/assets/images/twitter.png">
                                    <img class="image-avail" src="/assets/images/insta.png">
                                    <img class="image-avail" src="/assets/images/tiktok.png">
                                    <img class="image-avail" src="/assets/images/you_tube.png">
                                    <img class="image-avail" src="/assets/images/snap_chat.png">
                                </p>
                            </div>
                        </div>
                        <div class="col-md-8 customMd8CD">
                            <h2 class="custom-h2-avail">CAMPAIGN NAME - BLACK FRIDAY SALE</h2>
                            <p class="paragraph-avail">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                            </p>
                            <p class="paragraph-avail">
                                Start Date: 12/11/2020   -    End Date: 02/01/2021
                            </p>
                            <div class="buttons-btn-custom">
                                <button class="btn customizable" id="btn-customizable1">LEARN MORE</button>
                                <button class="btn customizable" id="btn-customizable">JOIN NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="custom-md-3">
                                <button class="btn customBtn51-changeColor" style="background:#ac456c" id="btn5-1">SCHEDULED</button>
                                <img class="customHI" style="width:100%;" src="/assets/images/asos.png">
                                <p>
                                    <span class="custom-display-on">Display on:</span>
                                </p>
                                <p class="paragraph-avail2">
                                    <img class="image-avail" src="/assets/images/facebook.png">
                                    <img class="image-avail" src="/assets/images/twitter.png">
                                    <img class="image-avail" src="/assets/images/insta.png">
                                    <img class="image-avail" src="/assets/images/tiktok.png">
                                    <img class="image-avail" src="/assets/images/you_tube.png">
                                    <img class="image-avail" src="/assets/images/snap_chat.png">
                                </p>
                            </div>
                        </div>
                        <div class="col-md-8 customMd8CD">
                            <h2 class="custom-h2-avail">CAMPAIGN NAME - BLACK FRIDAY SALE</h2>
                            <p class="paragraph-avail">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                            </p>
                            <p class="paragraph-avail">
                                Start Date: 12/11/2020   -    End Date: 02/01/2021
                            </p>
                            <div class="buttons-btn-custom">
                                <button class="btn customizable" id="btn-customizable1">LEARN MORE</button>
                                <button class="btn customizable" id="btn-customizable">JOIN NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="Md12">
                    <h3 class="latest-brand">MY ACTIVE CAMPAIGNS</h3>
                </div>
            </div>
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
            <div class="col-md-12 text-center">
                <button class="btn btn_my_campaign">GO TO MY CAMPAIGNS</button>
                <button class="btn btn_my_campaign">COMPLETE  MY CAMPAIGNS</button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="Md12">
                    <h3 class="latest-brand">MY FOLLOWING</h3>
                </div>
            </div>
            <div class="col-md-12">
                <div class="md21199 col-md-2">
                    <div class="customflexSocialBoxes md-2-facebook">
                        <i class="fa fa-facebook-f customFacebook customFa" style="font-size: 21px !important;"></i>
                        <div class="customInnerText">
                            <h3>1,701</h3>
                            <span>FOLLOWERS</span>
                        </div>
                        <div class="customUpTraffic">
                            <span>+4</span>
                            <i class="fa fa-arrow-up customArrowUp" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="social-profile">
                        <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-1/cp0/p50x50/122373292_4833240586747592_4011893574055353620_o.jpg?_nc_cat=110&ccb=2&_nc_sid=7206a8&_nc_eui2=AeGR6jYTw3HhpUhRpuOjf_1_VY73dmegxD9Vjvd2Z6DEPyleQbZhzjaNU3rUKcQnB4WCAJBb3CV8D8CO0nENNHDW&_nc_ohc=32rgB5DjnqgAX_eZpkL&_nc_ht=scontent-sin6-2.xx&tp=27&oh=26ac1b4538879350bf72f791bad27aab&oe=5FEEF1F1" />
                        <div class="social-addresses">
                            <span class="social-name">Facebook</span>
                            <span class="social-username">@abhisek.daas</span>
                        </div>
                    </div>
                </div>
                <div class="md21199 col-md-2">
                    <div class="customflexSocialBoxes md-2-twitter">
                        <i class="fa fa-twitter customFa" aria-hidden="true"></i>
                        <div class="customInnerText">
                            <h3>1,701</h3>
                            <span>FOLLOWERS</span>
                        </div>
                        <div class="customUpTraffic">
                            <span>+4</span>
                            <i class="fa fa-arrow-up customArrowUp" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="social-profile">
                        <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-1/cp0/p50x50/122373292_4833240586747592_4011893574055353620_o.jpg?_nc_cat=110&ccb=2&_nc_sid=7206a8&_nc_eui2=AeGR6jYTw3HhpUhRpuOjf_1_VY73dmegxD9Vjvd2Z6DEPyleQbZhzjaNU3rUKcQnB4WCAJBb3CV8D8CO0nENNHDW&_nc_ohc=32rgB5DjnqgAX_eZpkL&_nc_ht=scontent-sin6-2.xx&tp=27&oh=26ac1b4538879350bf72f791bad27aab&oe=5FEEF1F1" />
                        <div class="social-addresses">
                            <span class="social-name">Facebook</span>
                            <span class="social-username">@abhisek.daas</span>
                        </div>
                    </div>
                </div>
                <div class="md21199 col-md-2">
                    <div class="customflexSocialBoxes md-2-insta">
                        <i class="fa fa-instagram customFa" aria-hidden="true"></i>
                        <div class="customInnerText">
                            <h3>1,701</h3>
                            <span>FOLLOWERS</span>
                        </div>
                        <div class="customUpTraffic">
                            <span>+4</span>
                            <i class="fa fa-arrow-up customArrowUp" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="social-profile">
                        <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-1/cp0/p50x50/122373292_4833240586747592_4011893574055353620_o.jpg?_nc_cat=110&ccb=2&_nc_sid=7206a8&_nc_eui2=AeGR6jYTw3HhpUhRpuOjf_1_VY73dmegxD9Vjvd2Z6DEPyleQbZhzjaNU3rUKcQnB4WCAJBb3CV8D8CO0nENNHDW&_nc_ohc=32rgB5DjnqgAX_eZpkL&_nc_ht=scontent-sin6-2.xx&tp=27&oh=26ac1b4538879350bf72f791bad27aab&oe=5FEEF1F1" />
                        <div class="social-addresses">
                            <span class="social-name">Facebook</span>
                            <span class="social-username">@abhisek.daas</span>
                        </div>
                    </div>
                </div>
                <div class="md21199 col-md-2">
                    <div class="customflexSocialBoxes md-2 md-2-tiktok">
                        <img src="{{asset('assets/images/tik.png')}}" class="customFa" style="width: 30px;" />
                        <div class="customInnerText">
                            <h3>1,701</h3>
                            <span>FOLLOWERS</span>
                        </div>
                        <div class="customUpTraffic">
                            <span>+4</span>
                            <i class="fa fa-arrow-up customArrowUp" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="social-profile">
                        <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-1/cp0/p50x50/122373292_4833240586747592_4011893574055353620_o.jpg?_nc_cat=110&ccb=2&_nc_sid=7206a8&_nc_eui2=AeGR6jYTw3HhpUhRpuOjf_1_VY73dmegxD9Vjvd2Z6DEPyleQbZhzjaNU3rUKcQnB4WCAJBb3CV8D8CO0nENNHDW&_nc_ohc=32rgB5DjnqgAX_eZpkL&_nc_ht=scontent-sin6-2.xx&tp=27&oh=26ac1b4538879350bf72f791bad27aab&oe=5FEEF1F1" />
                        <div class="social-addresses">
                            <span class="social-name">Facebook</span>
                            <span class="social-username">@abhisek.daas</span>
                        </div>
                    </div>
                </div>
                <div class="md21199 col-md-2">
                    <div class="customflexSocialBoxes md-2 md-2-you_tube">
                        <i class="fa fa-youtube-play customFa" aria-hidden="true"></i>
                        <div class="customInnerText">
                            <h3>1,701</h3>
                            <span>FOLLOWERS</span>
                        </div>
                        <div class="customUpTraffic">
                            <span>+4</span>
                            <i class="fa fa-arrow-up customArrowUp" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="social-profile">
                        <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-1/cp0/p50x50/122373292_4833240586747592_4011893574055353620_o.jpg?_nc_cat=110&ccb=2&_nc_sid=7206a8&_nc_eui2=AeGR6jYTw3HhpUhRpuOjf_1_VY73dmegxD9Vjvd2Z6DEPyleQbZhzjaNU3rUKcQnB4WCAJBb3CV8D8CO0nENNHDW&_nc_ohc=32rgB5DjnqgAX_eZpkL&_nc_ht=scontent-sin6-2.xx&tp=27&oh=26ac1b4538879350bf72f791bad27aab&oe=5FEEF1F1" />
                        <div class="social-addresses">
                            <span class="social-name">Facebook</span>
                            <span class="social-username">@abhisek.daas</span>
                        </div>
                    </div>
                </div>
                <div class="md21199 col-md-2">
                    <div class="customflexSocialBoxes md-2-snap_chat">
                        <i class="fa fa-snapchat-ghost customFa" aria-hidden="true"></i>
                        <div class="customInnerText">
                            <h3>1,701</h3>
                            <span>FOLLOWERS</span>
                        </div>
                        <div class="customUpTraffic">
                            <span>+4</span>
                            <i class="fa fa-arrow-up customArrowUp" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="social-profile">
                        <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-1/cp0/p50x50/122373292_4833240586747592_4011893574055353620_o.jpg?_nc_cat=110&ccb=2&_nc_sid=7206a8&_nc_eui2=AeGR6jYTw3HhpUhRpuOjf_1_VY73dmegxD9Vjvd2Z6DEPyleQbZhzjaNU3rUKcQnB4WCAJBb3CV8D8CO0nENNHDW&_nc_ohc=32rgB5DjnqgAX_eZpkL&_nc_ht=scontent-sin6-2.xx&tp=27&oh=26ac1b4538879350bf72f791bad27aab&oe=5FEEF1F1" />
                        <div class="social-addresses">
                            <span class="social-name">Facebook</span>
                            <span class="social-username">@abhisek.daas</span>
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
@endpush
