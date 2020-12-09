@extends('frontend.layouts.default')
@push('css')
    <link href="{{asset('assets/css/campaign.css')}}" rel="stylesheet" />
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
        <div class="row">
            <h2 class="customCampaignH2">MY CAMPAIGN LIST</h2>
        </div>
        <br>
        <div class="row">
            <div class="customDesc12 col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Campaign Name</th>
                                <th>Campaign Description</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Promo Code</th>
                                <th>Country</th>
                                <th>City</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($campaigns as $campaign)
                            <tr>
                                <td>{{$campaign->id}}</td>
                                <td>{{$campaign->name}}</td>
                                <td>{{$campaign->description}}</td>
                                <td>{{$campaign->start_date}}</td>
                                <td>{{$campaign->end_date}}</td>
                                <td>{{$campaign->promo}}</td>
                                <td>{{$campaign->country}}</td>
                                <td>{{$campaign->city}}</td>
                            </tr>
                        </tbody>
                        @endforeach
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
