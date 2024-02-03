<!DOCTYPE html>
<html lang="vi">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-6EYWWNL0FN"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "G-6EYWWNL0FN");
        </script>
        <meta charset="utf-8" />
        <title>{{ $company->company_name }}</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="icon" href="{{ asset('assets/img/logo-icon.jpeg') }}" type="image/jpg" />
        <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/font.css') }}" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="{{ asset('assets/css/custom-chat.css') }}" type="text/css" />
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css" />
        <style>
            .btn-primary {
                background-color: #7266ba !important;
                border-color: #7266ba !important;
            }
            .btn-primary:hover {
                background-color: #6254b2 !important;
                border-color: #6254b2 !important;
            }
        </style>
    </head>
    <body onload="startTime()" class="noselect">
        <div style="" class="app app-header-fixed bg-2019">
            <div class="left-side">
                <h1 class="text-white text-right welcome-text">Welcome back</h1>
                <h1 class="text-white text-right text-bold text-3x">
                    {{ $company->company_name }}
                </h1>
                <h1 id="clock" class="text-white text-right"></h1>
                <div class="support-contact">
                    <small class="text-white" style="font-size: 16px;">Happy business, happy life!</small>
                </div>
            </div>
            <div class="login-wrap">
                <div class="container w-xxl w-auto-xs" ng-controller="SigninFormController" ng-init="app.settings.container = false;">
                    <br />
                    <a href="{{ config('app.url') }}" class="text-center block"> <h1 class="text-success">{{ $company->company_name }}</h1> </a>
                    <br />
                    <div class="m-b-lg">
                        <div class="wrapper text-center">
                            <strong>Đăng nhập hệ thống</strong>
                        </div>
                        <form method="post" accept-charset="utf-8">

                            @csrf

                            <div class="text-bold wrapper text-center"></div>
                                <div class="list-group list-group-sm">
                                    <div class="list-group-item">
                                        <input type="email" name="email" value="" placeholder="Email" class="form-control no-border no-shadow" autocomplete="off" required />
                                    </div>
                                    <div class="list-group-item">
                                        <input type="password" name="password" value="" placeholder="Password" class="form-control no-border no-shadow" autocomplete="off" required />
                                    </div>
                                </div>

                                @if (session()->has('status'))
                                    <div class="text-center">
                                        <span style="color:red">{{ session('status') }}</span>
                                    </div>
                                @endif

                            <button type="submit" name="submit_form" value="submit_form" class="btn btn-lg btn-primary btn-block">Đăng nhập</button>
                            <div class="line line-dashed"></div>
                            <div class="text-center">Hotline: <strong>0356783592</strong></div>
                        </form>
                    </div>
                    <div class="text-center copy-right-text">
                        <p>
                            <span class="text-muted text-xxs">Copyright © 2018 NGUYEN DUC VINH Jsc. All rights reserved.</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="blur-layout"></div>
        </div>
        <script type="text/javascript">
            var BASE_URL = "{{ config('app.url') }}";
        </script>
        <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/js/retina.js') }}"></script>
        <script type="text/javascript">
            // Clock
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById("clock").innerHTML = h + ":" + m + ":" + s;
                var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                } // add zero in front of numbers < 10
                return i;
            }
            // End clock
        </script>
        <script>
            (function (a, s, y, n, c, h, i, d, e) {
                s.className += " " + y;
                h.start = 1 * new Date();
                h.end = i = function () {
                    s.className = s.className.replace(RegExp(" ?" + y), "");
                };
                (a[n] = a[n] || []).hide = h;
                setTimeout(function () {
                    i();
                    h.end = null;
                }, c);
                h.timeout = c;
            })(window, document.documentElement, "async-hide", "dataLayer", 4000, { "GTM-M4X4WRN": true });
        </script>

    </body>
</html>
