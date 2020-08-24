<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RentBooksLibrary</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

            .top-title{
                font-size: 20px;
                color:#ffffff;

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

            .top-left {
                position: absolute;
                right: 10px;
                top: 18px;
                
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 85px;
                color:#ffffff;
            }

            .links> a {
                color: #ffffff;   
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

            body{
background-image: url("/images/backfirst.jpg");
background-position: center ;
background-repeat: no-repeat;
background-size: cover; 

}

.page-footer{
    background:#eee;
    padding:20px;
    text-align:center;
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
       @if (Route::has('login'))
                <div class="top-right links">
                <a href="/Book/index">Books</a>
                <a href="/contect">contact</a>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                  
                </div>
            @endif
            <div class="flex-center position-ref full-height">
            <div class="top-left links">
                <p class="top-title">RentBookLibrary</p> <!--<a href="">-->
                </div>
                </div>

            <div class="content">
                <div class="title m-b-md">
                  Welecome to Books Rent
                </div>

                <div class="links">
                    <a href="/Book/index">Riyadh</a>
                    <a href="/Book/index">Jeddah</a>
                    <a href="/Book/index">Makkah</a>
                    <a href="/Book/index">Dammam</a>
                    <a href="/Book/index">Madinah</a>
                    <a href="/Book/index">Tabuk</a>
                    <a href="/Book/index">Khobar</a>
                    <a href="/Book/index">Abha</a>
                </div>
            </div>
        </div>
   <!-- Footerr -->
<footer class="page-footer font-small teal pt-4">

<!-- Footer Text -->
<div class="container-fluid text-center text-md-left">

  
<!-- Footer Text -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> RentBookLibrary.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
    </body>
</html>