@extends('backend.layouts.default')
@push('css')
    <link href="{{asset('assets/css/register.css')}}" rel="stylesheet" />
    <style>
        #btnLogin{
            display: none;
        }
        #btnLogin1{
            display: none;
        }
        .customRowM{
            display: none !important;
        }
        .customContainer{
            background-color:transparent !important;
        }
        .customContainer2{
            width:50%;
        }
        #btn1 {
            background-color: #6d3d86;
            color: #fff;
            font-weight: bold;
            border-radius: 0px !important;
        }
        .alert-danger{
            background-image: linear-gradient(#89427d,#6e3d86) !important;
            color: #fff !important;
            display: flex !important;
            align-items: center !important;
            font-weight: 600 !important;
        }
    </style>
@endpush

@section('content')
    <div class="container customContainer2">
        <div class="row">
            <h1>Login</h1>
            @if(session()->has('error_message'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            {{session()->get('error_message')}}
                        </div>
                    </div>
                </div>
            @endif
            <form action="{{route('loginPost')}}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="email" name="email" class="form-control" required />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" required />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn" id="btn1">Sign In</button>
                            <button class="btn" onclick="window.location.href='/reset-password'" id="btn1">Reset Password</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script>

    </script>
@endpush
