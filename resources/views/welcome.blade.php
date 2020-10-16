<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Anti-bodies Record System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="{{ asset('css/ars.css') }}" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            h2{
                color:green;
                margin-bottom: 10px;
                border-bottom: 5px solid green;
            }
            input{
                height: 40px;
                width: 220px;
            }
            .row, label{
                margin: 15px 3px;
            }
            
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links" style="background-color:black">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="body">
                <h2 class="title m-b-md">ANTI-BODIES RECORD SYSTEM</h2><br>
                
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active">
                        <a class="nav-link active" data-toggle="tab" href="#home-tab" role="tab">HOME</a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#update-tab" role="tab">UPDATE</a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#records-tab" role="tab">RECORDS</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="home-tab" role="tabpanel">
                        @include('ars_homepage.homeTab')
                    </div>
                    <div class="tab-pane" id="update-tab" role="tabpanel">
                        @include('ars_homepage.updateTab')
                    </div> 
                    <div class="tab-pane" id="records-tab" role="tabpanel">
                        @include('ars_homepage.recordsTab')
                    </div> 
                </div>
            </div>
        </div>
    </body>
</html>





            <!-- <div class="content" style="background-color:black">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div> -->