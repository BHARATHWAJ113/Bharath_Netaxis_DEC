<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .a:hover{
                color:#fff !important;
            }
            body {
            margin: 0;
            font-family: Arial;
            font-size: 17px;
        }

        #myVideo {
            position:fixed;
            right: 0; 
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            opacity: 70%;
        }

        .content {
            position: relative;
            bottom: 0;
            background: rgba(0, 0, 0, 0.575);
            width: 100%;
            color: #f1f1f1;
            /* margin-top: 15%; */
            padding: 20px;
        }
        </style>
    </head>
    <body>

        <video autoplay muted loop id="myVideo" class="img-fluid">
            <source src="{{ url('bg.mp4')}}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="flex-center content position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="text-warning" href="{{ url('/tweety') }}">Home</a>
                    @else
                        <a class="text-warning" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="text-warning " href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md text-danger">
                    <b>Laravel Projects</b>
                </div>

                <div class="links">
                    <a class="text-warning a" href="https://laravel.com/docs">Docs</a>
                    <a class="text-success a" href="/cv">Bharath CV</a>
                    <a class="text-primary a" href="/tweety"><b>Tweety</b></a>
                    <a class="text-success a" href="FrontEnd/assesment/index.html">Assessment</a>
                    <a class="text-success a" href="FrontEnd/assignment/index.html">Assignment</a>
                    <a class="text-warning a" href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
