<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KakiAlas Music</title>
        <link rel="shortcut icon" href="{{{ asset('image/myfavicon.ico') }}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #0c4a55;
                color: #000200;
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
                top: 1px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 800;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: -150px;
            }

            .footer {
             text-align: center;
             padding: 10px;
             background-color: #02262d;
             color: #fff;
             text-decoration: none;
             border-radius: 50px;
             margin-top: 190px;
             font-family: 'Nunito', sans-serif;

            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">

                    @auth

                        <a href="{{ url('/home') }}">HOME</a>
                    @else

                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

<br><br>
            <div class="content">
                <img src="image/headerquiz1.jpg" class="img">
                <center><h1 style="color: #fff;">-MUSIC PLAYER FOR FREE-</h1></center>
                <div class="title m-b-md">

                </div>
                <div class="footer">
            <center>Copyright © 2020. Sigit Aditya Fahmi All Right Reserved</center>
        </div>

                
            </div>
        </div>
    </body>
</html>
