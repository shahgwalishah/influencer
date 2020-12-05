@extends('frontend.layouts.default')
@push('css')
    <link href="{{asset('assets/css/campaign.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/campaign-dashboard.css')}}" rel="stylesheet" />
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
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12">
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/asos_image.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/Apple.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/HM.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/asos_image.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12">
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/asos_image.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/Apple.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/HM.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/asos_image.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12">
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/asos_image.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/Apple.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/HM.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/asos_image.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12">
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/asos_image.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/Apple.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/HM.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="md2">
                                <img class="custom_image_set" style="width:100px;" src="http://localhost:8000/assets/images/asos_image.png">
                                <p class="custom_p">Fashion, Jewelry</p>
                                <button class="learn_more" id="btn2-1">LEARN MORE</button>
                                <button class="add_to_fav" id="btn1">ADD TO FAV</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row text-center">
                    <button class="btn customizeBtn" id="btn5">LOAD MORE</button>
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
