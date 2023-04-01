<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DB-Tweety</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/1716af8fd8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      .scroll{
            height: 450px;
            overflow-y: scroll;
        }

        .scroll::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .scroll {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
        #myBtn {
            /* display: none; */
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: rgb(78, 76, 76);
            color: rgb(252, 252, 252);
            cursor: pointer;
            padding: 15px;
            border-radius: 50px;
            font-size: 18px;
        }

        #myBtn:hover {
            background-color: #ffffff;
            color: #1874ec;
        }

        .content {
            position: relative;
            bottom: 0;
            background: rgba(0, 0, 0, 0.575);
            width: 100%;
            padding: 20px;
        }

    </style>
</head>

<body ng-app="myApp" style="background-image: url('./tweety_img/bg-tweety.jpg'); background-repeat:no-repeat; background-size:cover;">
    <div id="app" >
        <nav class="navbar navbar-expand-sm navbar-light bg-white fixed-top shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><i class="fa-solid fa-dove fa-bounce fa-xl" style="color: #1874ec;"></i>
                    <img src="{{ url('tweety_img/tweety-logo.png') }}" class="img-fluid" style="max-height: 70px; max-width:250px">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                </a>
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentDemo" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
                </button> --}}

                <div class="collapse navbar-collapse" id="navbarSupportedContentDemo">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="btn btn-info mr-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> --}}
                            <div class="text-center">
                                <br>
                                <b> {{ Auth::user()->name }} </b>
                            </div>
                            {{-- <span class="caret"></span> --}}
                            {{-- </a> --}}

                            {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <b> {{ __('Logout') }}</b>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                </div> --}}
                </li>
                @endguest
                </ul>
            </div>
    </div>
    </nav>
    <div id="top pb-5 " >

        {{ $slot }}
    </div>

    <a href="#top" id="myBtn" title="Go to top"><i class="fa-solid fa-angle-up fa-bounce"></i></a>
    </div>




    <script src="https://unpkg.com/turbolinks" data-turbolinks-suppress-warning></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(".tweethash").html(function(_, html) {

                return html.replace(/(\#\w+)/g, '<a href="https://www.google.com/$1" target="_blank">$1</a>');

            });
        });

    </script>
</body>

</html>
