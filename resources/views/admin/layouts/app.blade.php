
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

        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title>
            {{ config('app.name') }}
        </title>

        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="icon" href="{{ asset('assets/img/logo-icon.jpeg') }}" type="image/png" />
        <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
        <!-- Layout -->
        <link href="{{ asset('bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/font.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('assets/css/cropper.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/main_cropper.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/jkanban.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/flag-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/nouislider.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/headtotail_bk.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui-1.10.3.custom.min.js') }}"></script>

        <script>
            // handle confict between jquery tooltip and bootstrap tooltip
            $.widget.bridge("uitooltip", $.ui.tooltip);
        </script>
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/js/jkanban.min.js') }}"></script>
        <script type="text/javascript">
            var BASE_URL = '{{ config('app.url') }}';
            var MULTIPLE_DB = "1";
            var CURRENCY_SYMBOL = "đ";
            var CURRENT_CURRENCY = "VND";
            const access_phone = 0;

            var BASE_CURRENCY_SYMBOL = CURRENCY_SYMBOL;
            var BASE_CURRENCY_UNIT = CURRENT_CURRENCY;
            COMPANY_N = "{{ config('app.name') }}";
            var UID = "4";
            var LIMIT_SEACRH_KEY = 100;
            /*  var ws = new WebSocket("wss://myspaserversocket.herokuapp.com/");
            ws.onopen = function(event) {
            ws.send('myspa da ket noi socket');
            };
            ws.onerror = function(error) {
                console.log('WebSocket Error: ' + error);
            };*/

            function active_nav_menu(menu, sub_menu = "") {
                $(`nav.navi > ul.nav > li[data-ncode="${menu}"]`).addClass("active");
                if (sub_menu != "") {
                    $(`nav.navi > ul.nav > li[data-ncode="${menu}"] .nav-sub > li[data-sncode="${sub_menu}"]`).addClass("active");
                }
            }
        </script>
        <!-- fe khai start -->
        <script src="{{ asset('assets/js/currency_formatter.js') }}"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/pop_up_momo_register_form.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('assets/css/custom-chat.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('assets/css/fe-fix.css') }}?v=4.31.101" type="text/css" />
        <!-- fe khai end -->
        <style>
            .badge-money-zalo {
                position: absolute;
                top: -5px;
                right: 0;
                z-index: 99999;
            }
        </style>
    </head>
    <style>
        .btn-primary {
            background-color: #7266ba;
            border-color: #7266ba;
        }

        .btn-primary:hover {
            background-color: #6254b2;
            border-color: #6254b2;
        }

        .navbar-nav > li > a {
            background: #abd373;
        }

        .navbar-nav > li > a:hover,
        .nav .open > a,
        .nav .open > a:hover,
        .nav .open > a:focus,
        .nav > li > a:focus {
            background: #abd373;
        }

        .navbar-nav > li > a:hover {
            background: #9acc51;
        }

        .navbar-nav .open .dropdown-menu,
        .navbar-nav .dropdown-menu {
            background: #abd373;
        }

        .btn-success {
            background-color: #abd373;
            border-color: #abd373;
        }

        .btn-success:hover {
            background-color: #9acc51;
            border-color: #9acc51;
        }

        .bg-primary {
            background-color: #7266ba;
        }

        .bg-success {
            background-color: #abd373;
        }

        .panel-default .panel-heading {
            background: #7266ba;
        }

        .text-primary {
            color: #7266ba;
        }

        .progress-bar-primary,
        .label-primary {
            background-color: #7266ba;
        }

        ul.service-card-list li.service-card-active {
            background: #7266ba;
        }

        .dropdown-menu > li > a:hover,
        .dropdown-menu > li > a:focus,
        .dropdown-menu > .active > a,
        .dropdown-menu > .active > a:hover,
        .dropdown-menu > .active > a:focus {
            background: #9acc51 !important;
        }

        .label-success {
            background-color: #abd373;
        }

        .text-success {
            color: #abd373;
        }

        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            background: #abd373;
            border-color: #abd373;
        }

        .card-selected {
            background: #abd373 !important;
        }

        .select2-results .select2-highlighted {
            background: #7266ba;
        }
    </style>
    <body class=" ">
        <div class="app app-header-fixed noselect">
            <div class="modal fade" id="popup-re-password-user" tabindex="-1" role="dialog" data-backdrop="static" role="dialog">
                <div data-dismiss="none" class="modal-dialog popup-re-password" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <style>
                                #popup-re-password-user .popup-changepass-title {
                                    font-size: 20px;
                                    margin-top: 24px;
                                    line-height: 1.5;
                                }

                                #popup-re-password-user .input-group {
                                    margin-top: 24px;
                                }

                                #popup-re-password-user .form-group input[type="text"],
                                #popup-re-password-user .form-group input[type="email"],
                                #popup-re-password-user .form-group input[type="password"] {
                                    height: 45px;
                                    border: 1px solid #ddd;
                                    border-top-right-radius: 0.25rem;
                                    border-bottom-right-radius: 0.25rem;
                                    display: block;
                                    box-sizing: border-box;
                                    -webkit-box-sizing: border-box;
                                    font-size: 16px;
                                    -webkit-transition: all 0.1s ease;
                                    -moz-transition: all 0.1s ease;
                                    transition: all 0.1s ease;
                                }

                                #popup-re-password-user .panel-login input:hover,
                                #popup-re-password-user .panel-login input:focus {
                                    outline: none;
                                    -webkit-box-shadow: none;
                                    -moz-box-shadow: none;
                                    box-shadow: none;
                                    border-color: #ccc;
                                }

                                #popup-re-password-user .popup-changepass {
                                    width: 80%;
                                    margin: 0 auto;
                                }

                                #popup-re-password-user .popup-changepass-btn {
                                    padding: 8px 16px;
                                    border: 0;
                                    outline: none;
                                    background-color: #7266ba;
                                    font-size: 16px;
                                    font-weight: bold;
                                    color: #fff;
                                    border-radius: 8px;
                                    margin-top: 14px;
                                }

                                #popup-re-password-user .popup-re-password > .modal-content > button {
                                    color: #7266ba;
                                }

                                #popup-re-password-user .popup-changepass .input-group:not(:nth-child(2)) {
                                    margin-top: 14px;
                                }

                                #popup-re-password-user .popup-changepass .input-group-addon {
                                    border-color: #ddd;
                                }

                                #popup-re-password-user .popup-changepass .input-group > .input-group-addon {
                                    background-color: #abd373;
                                    color: #fff;
                                    min-width: 35px;
                                }
                            </style>
                            <div class="popup-changepass">
                                <div class="panel-heading">
                                    <div class="popup-changepass-title">Đã lâu quý vị chưa đổi mật khẩu, vui lòng thay đổi và sử dụng mật khẩu mới để tăng tính bảo mật hơn. Trân trọng cảm ơn!</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="text-italic text-xs">Mật khẩu phải có ít nhất 8 kí tự và chứa ít nhất một chữ in hoa và một kí tự đặc biệt (~!@#$%^&*).</p>
                                        <br />
                                        <form id="login-form" class="col-lg-offset-1 col-lg-10" action="" method="post" role="form" style="display: block;">
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                <input type="password" id="popup_password" tabindex="1" class="form-control" required placeholder="Nhập mật khẩu mới" />
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                <input type="password" id="popup_re_password" tabindex="2" class="form-control" required placeholder="Nhập lại mật khẩu mới" />
                                            </div>
                                            <button type="button" name="login-submit" id="submit_re_password_new" tabindex="3" class="popup-changepass-btn"><i class="fas fa-sign-in-alt"></i> Đổi mật khẩu</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="popup-re-password-user-success" tabindex="-1" role="dialog" data-backdrop="static" role="dialog">
                <div data-dismiss="none" class="modal-dialog popup-re-password" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <h5 style="line-height: 1.5;">Thay đổi mật khẩu thành công! Hệ thống sẽ logout ra sau 10 giây nữa. Quý vị vui lòng đăng nhập bằng mật khẩu mới để tiếp tục sử dụng</h5>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $("#submit_re_password_new").on("click", function () {
                        var password = $.trim($("#popup_password").val());
                        var rePassword = $.trim($("#popup_re_password").val());
                        var passwordRegex = /^(?=.*[A-Z])(?=.*\W).{8,}$/;
                        var containsWhitespace = /\s/.test(password);
                        if (password == "" || rePassword == "") {
                            alert("Vui lòng điền đầy đủ mật khẩu");
                            return;
                        }
                        if (containsWhitespace) {
                            alert("Mật khẩu không được chứa khoảng trắng.");
                            return;
                        }
                        if (!passwordRegex.test(password)) {
                            alert("Mật khẩu phải có ít nhất 8 kí tự và chứa ít nhất một chữ in hoa và một kí tự đặc biệt (~!@#$%^&*).");
                            return;
                        }

                        if (password !== rePassword) {
                            alert("Mật khẩu xác nhận không trùng khớp.");
                            return;
                        }
                        submit_re_password_new();
                        $("#submit_re_password_new").empty().append("Đang gửi...");
                        $("#submit_re_password_new").attr("disabled", "disabled");
                    });

                    function submit_re_password_new() {
                        $.ajax({
                            url: BASE_URL + "ManageUser/re_password",
                            type: "post",
                            dataType: "json",
                            data: {
                                password: $("#popup_password").val(),
                                re_password: $("#popup_re_password").val(),
                            },
                            success: function (res) {
                                if (res.status == "fail") {
                                    alert(res.message);
                                    location.reload();
                                } else {
                                    $(document.querySelector("#popup-re-password-user")).modal("hide");
                                    $(document.querySelector("#popup-re-password-user-success")).modal("show");
                                    setTimeout(function () {
                                        window.location = BASE_URL + "logout";
                                    }, 10000);
                                }
                            },
                        });
                        return;
                    }
                });
            </script>
            <div id="base_url" class="hide">{{ config('app.url') }}</div>
            <div id="current_lang" class="hide">vietnamese</div>
            <div id="current_currency" class="hide">VND</div>
            <script src="https://lima.myspa.vn/assets/js/languages.js?lang=vietnamese&v=4.31.101"></script>



            <!-- header -->
            <header id="header" class="app-header navbar" role="menu">
                @include('admin.layouts.header')
            </header>
            <!-- / header -->



            <!-- aside -->
            <aside id="aside" class="app-aside hidden-xs bg-dark">
                @include('admin.layouts.menu')
            </aside>
            <!-- / aside -->



            <!-- modal -->
            <div class="modal fade" id="modal_load_qr" tabindex="-1" role="dialog">
                @include('admin.layouts.modal')
            </div>
            <!-- /.modal -->



            <!-- content -->
            <div id="content" class="app-content" role="main">
                @yield('content')
            </div>
            <!-- / content -->


            <!-- footer -->
            <footer id="footer" class="b-t bg-light app-footer app-footer-fixed" role="footer">
                @include('admin.layouts.footer')
            </footer>
            <!-- / footer -->



        </div>
        <div class="material-button-anim hide">
            <ul class="list-inline" id="options">
            <li class="option">
                <a href="https://lima.myspa.vn/ManageUser/add_member" class="material-button option1" type="button">
                <span class="icon-users icon" aria-hidden="true"></span>
                </a>
            </li>
            <li class="option">
                <a href="https://lima.myspa.vn/ManageOrder/add_order" class="material-button option2" type="button">
                <span class="icon-grid icon" aria-hidden="true"></span>
                </a>
            </li>
            <li class="option">
                <a href="https://lima.myspa.vn/ManageAppointment/" class="material-button option3" type="button">
                <span class="icon-calendar icon" aria-hidden="true"></span>
                </a>
            </li>
            </ul>
            <button class="material-button material-button-toggle" type="button">
            <span class="fa fa-plus" aria-hidden="true"></span>
            </button>
        </div>
        <!-- Modal customer info -->
        <div id="show_modal_customer">
            <!-- modal customer here -->
        </div>
        <!-- close Modal customer info -->
        <!-- modal cus omicall -->
        <div class="modal fade" id="call_transaction_global" tabindex="-1" role="dialog" aria-labelledby="modal_cus_omicall" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="modal_cus_omicall">Thông tin khách hàng Omicall</h1>
                </div>
                <div class="modal-body" style="overflow: hidden">
                    <div class="panel wrapper">
                        <div class="row">
                        <div style="display: flex">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 info-cus-omicall">
                                    <h4><i class="fa fa-user" aria-hidden="true"></i> Họ tên: </h4>
                                    <p class="name_omicall"></p>
                                    <h4><i class="fa fa-phone" aria-hidden="true"></i> Điện thoại: </h4>
                                    <p class="phone_omicall"></p>
                                    <h4><i style="font-size:85%" class="fa icon-envelope-letter" aria-hidden="true"></i> Email: </h4>
                                    <p class="email_omicall"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="img_omicall" width="100px" src="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="panel wrapper">
                        <div class="row">
                        <div class="col-md-12 call-history" style="position: relative;overflow: hidden;">
                            <h4>Lịch sử cuộc gọi</h4>
                            <ul class="timeline"></ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- close modal cus omicall -->
        <!-- popup callio -->
        <div class="modal fade" id="call_callio_transaction_global" tabindex="-1" role="dialog" aria-labelledby="modal_cus_callio" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="modal_cus_callio">Thông tin khách hàng Callio</h1>
                </div>
                <div class="modal-body" style="overflow: hidden">
                    <div class="panel wrapper">
                        <div class="row">
                        <div style="display: flex">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 info-cus-callio">
                                    <h4><i class="fa fa-user" aria-hidden="true"></i> Họ tên: </h4>
                                    <p class="name_callio"></p>
                                    <h4><i class="fa fa-phone" aria-hidden="true"></i> Điện thoại: </h4>
                                    <p class="phone_callio"></p>
                                    <h4><i style="font-size:85%" class="fa icon-envelope-letter" aria-hidden="true"></i> Email: </h4>
                                    <p class="email_callio"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="img_callio" width="100px" src="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="panel wrapper">
                        <div class="row">
                        <div class="col-md-12 call-history" style="position: relative;overflow: hidden;">
                            <h4>Lịch sử cuộc gọi</h4>
                            <ul class="timeline"></ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- close popup callio -->
        <!-- popup grandstream -->
        <div class="modal fade" id="call_grandstream_transaction_global" tabindex="-1" role="dialog" aria-labelledby="modal_cus_grandstream" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="modal_cus_grandstream">Thông tin khách hàng Grandstream</h1>
                </div>
                <div class="modal-body" style="overflow: hidden">
                    <div class="panel wrapper">
                        <div class="row">
                        <div style="display: flex">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 info-cus-grandstream">
                                    <h4><i class="fa fa-user" aria-hidden="true"></i> Họ tên: </h4>
                                    <p class="name_grandstream"></p>
                                    <h4><i class="fa fa-phone" aria-hidden="true"></i> Điện thoại: </h4>
                                    <p class="phone_grandstream"></p>
                                    <h4><i style="font-size:85%" class="fa icon-envelope-letter" aria-hidden="true"></i> Email: </h4>
                                    <p class="email_grandstream"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="img_grandstream" width="100px" src="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="panel wrapper">
                        <div class="row">
                        <div class="col-md-12 call-history" style="position: relative;overflow: hidden;">
                            <h4>Lịch sử cuộc gọi</h4>
                            <ul class="timeline"></ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Notification -->
        <div id="notifications"></div>
        <!-- close popup grandstream -->
        <!-- modal contract extension -->
        <div class="modal fade" id="modal_contract_extension" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">
            <div class="modal-content" style="border:none">
                <div class="modal-body">
                    <div class="tab-setting">
                        <div class="tab-container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="pull-left">
                                <h3 class="text-success">Gia hạn hợp đồng</h3>
                            </li>
                        </ul>
                        <div class="tab-content tab-content-1">
                            <div class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                    Để gia hạn hợp đồng, quý khách vui lòng chuyển khoản với nội dung như sau:<br>
                                    <h4>Thông tin tài khoản:</h4>
                                    Chủ tài khoản: <span class="text-bold">CTY CỔ PHẦN MYSPA</span><br>
                                    Số tài khoản: <span class="text-bold">0531002559877</span><br>
                                    Ngân hàng: <span class="text-bold">Vietcombank</span><br>
                                    Số tiền: <span class="text-bold">15,108,000</span><span class="text-italic">
                                    (Hợp đồng 1 năm)</span>
                                    <br>
                                    Nội dung chuyển khoản: <span class="text-bold text-success text-uppercase">
                                    Da Tham My Quoc Te LimA - Gia han hop dong - Goi Cao cap                                        </span>
                                    <br><br>
                                    Hotline hỗ trợ: <span class="text-lg text-danger">0899 310 908</span>
                                    </div>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Đóng</button>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- modal brand app and momo -->
        <div class="modal fade" id="popup_moba_app" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="border:none">
                <div class="modal-body">
                    <div class="tab-setting">
                        <div class="tab-container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="pull-left">
                                <h3 class="text-success">
                                    XÂY DỰNG APP THƯƠNG HIỆU - GIẢI PHÁP BÁN HÀNG VÀ CSKH CỦA CÁC THƯƠNG HIỆU HÀNG ĐẦU
                                </h3>
                            </li>
                        </ul>
                        <div class="tab-content tab-content-1">
                            <div class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-12">
                                    <a class="moba_app_register_fixed btn btn-success btn-rounded m-t-sm" data-dismiss="modal" style="background:none;border:none;">
                                    <img src="https://lima.myspa.vn/assets/img/popup_moba_2.jpeg" style="max-width:100%; width: 1000px" />
                                    </a>
                                    <img src="https://lima.myspa.vn/assets/img/popup_moba_2.jpeg" style="max-width:100%; width: 1000px"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-rounded m-t-sm" data-dismiss="modal">Đóng</button>
                    <a href="https://lima.myspa.vn/assets/pdf/moba_app_new.pdf" target="_blank" class="btn btn-primary btn-rounded m-t-sm">Bảng giá và quy trình triển khai</a>
                    <a class="moba_app_register btn btn-success btn-rounded m-t-sm" data-dismiss="modal">Đăng ký</a>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- popup momo and new year -->
        <div class="modal fade custom" id="popup_moba_app_register" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document" style="width:1000px;max-width: 94%;">
            <br><br><br>
            <div class="modal-content" style="background:url(https://lima.myspa.vn/assets/img/thiet-ke-app-december-promo-DESK.jpg); background-size: cover;padding: 25px 0px 65px 0px;">
                <button type="button" class="close text-3x text-white" style="color:#FFF; opacity:1;position:absolute;right:10px;top:0;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <img class="img_moba_mobile" src="https://lima.myspa.vn/assets/img/logo_moba_2.png" alt="">
                <div class="modal-body" style="width: 445px;
                    max-width: 100%;
                    padding: 0px 25px;">
                    <div class="colg-lg-12">
                        <div class="tab-setting event_30year">
                        <div class="tab-container">
                            <ul class="nav nav-tabs" role="tablist" >
                                <h3>App Thương Hiệu</h3>
                            </ul>
                            <div class="tab-content tab-content-1">
                                <div class="tab-pane active">
                                    <div class="row">
                                    <div class="col-md-10 col-md-offset-1 md-content">
                                        <div class="clearfix"></div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label><i class="fa fa-user"></i></label>
                                                <input type="text" id="brandapp_company_fullname" name="fullname" value="Lê Hồng Phương" class="form-control rounded" placeholder="Họ tên">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label><i class="fa fa-building"></i></label>
                                                <input type="text" id="brandapp_company_name" name="company_name" value="Da Thẩm Mỹ Quốc Tế LimA" class="form-control rounded" placeholder="Tên công ty" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                                <input type="text" id="brandapp_company_address" name="address" value="93 Lê Lợi, Tp. Vũng Tàu" class="form-control rounded" placeholder="Địa chỉ">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label><i class="fa fa-phone" aria-hidden="true"></i></label>
                                                <input type="text" id="brandapp_company_phone" name="telephone" value="0901010220" class="form-control rounded" placeholder="Điện thoại">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label><i class="fa fa-envelope"></i></label>
                                                <input type="text" id="brandapp_company_email" name="email" value="Phuonglh@limcom.vn, kimnhung@myspa.vn" class="form-control rounded" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" id="brandapp_coupon_code" name="coupon_code" value="TKA21P-BACKEND" class="form-control rounded" placeholder="Mã khuyến mãi" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-wrap">
                                                <select class="form-select" id="event-select" aria-label="Default select example">
                                                    <option selected="">Hạng mục quan tâm</option>
                                                    <option value="Vé thường tham dự">Vé thường tham dự</option>
                                                    <option value="Tôn vinh thương hiệu vàng làm đẹp uy tín quốc gia">Tôn vinh thương hiệu vàng làm đẹp uy tín quốc gia</option>
                                                    <option value="Tôn vinh thương hiệu vàng đào tạo làm đẹp uy tín quốc gia">Tôn vinh thương hiệu vàng đào tạo làm đẹp uy tín quốc gia</option>
                                                    <option value="Tôn vinh hệ thống xuất sắc 2022">Tôn vinh hệ thống xuất sắc 2022</option>
                                                    <option value="Tôn vinh thương hiệu sản phẩm uy tín quốc gia">Tôn vinh thương hiệu sản phẩm uy tín quốc gia</option>
                                                    <option value="Tôn vinh thương hiệu bàn tay vàng xuất sắc quốc gia">Tôn vinh thương hiệu bàn tay vàng xuất sắc quốc gia</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="modal-footer">
                                                <p>
                                                <a id="btn_read_more" class="" data-dismiss="modal" data-toggle="modal" data-target="#popup_moba_app">Tìm hiểu thêm</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div style="position: relative;
            z-index: 1;
            text-align: center;">
            <input type="checkbox" id="check_not_show" name="check_not_show" /> <label class="text-white" for="check_not_show"> Không hiển thị lần sau</label>
            </div>
        </div>
        <!-- close popup momo and new year -->
        <!-- modal brand app fixed-->
        <div class="modal fade" id="popup_moba_app_fixed" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="border:none">
                <div class="modal-body">
                    <div class="tab-setting">
                        <div class="tab-container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="pull-left">
                                <h3 class="text-success">
                                    XÂY DỰNG APP THƯƠNG HIỆU - GIẢI PHÁP BÁN HÀNG VÀ CSKH CỦA CÁC THƯƠNG HIỆU HÀNG ĐẦU
                                </h3>
                            </li>
                        </ul>
                        <div class="tab-content tab-content-1">
                            <div class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-12">
                                    <a style="position:relative;background: none;border: none;" class="moba_app_register_fixed btn btn-success btn-rounded m-t-sm" data-dismiss="modal" style="background:none;border:none;">
                                        <div style="position:relative;">
                                            <img src="https://lima.myspa.vn/assets/img/popup_moba_top_thang1_fixed.jpeg" style="max-width:100%; width: 1000px" />
                                            <!--                                                <div class="box_over_popup_moba">-->
                                            <!--                                                    <p><img style="width: 8%;margin-right: 5%;" src="-->                                                <!--assets/img/fire.png"> <span class="count_register_moba">33/50</span> Doanh ngiệp <br> đăng ký thành công</p>-->
                                            <!--                                                    <button>Đăng ký ngay &ensp; <i class="fa fa-caret-right"></i></button>-->
                                            <!--                                                </div>-->
                                        </div>
                                        <img src="https://lima.myspa.vn/assets/img/bottom_popup_moba.jpeg" style="max-width:100%; width: 1000px" />
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-rounded m-t-sm" data-dismiss="modal">Đóng</button>
                    <a href="https://lima.myspa.vn/assets/pdf/moba_app_new.pdf" target="_blank" class="btn btn-primary btn-rounded m-t-sm">Bảng giá và quy trình triển khai</a>
                    <a class="moba_app_register_fixed btn btn-success btn-rounded m-t-sm" data-dismiss="modal">Đăng ký</a>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- modal qr code brand app -->
        <div class="modal fade" id="popup_moba_app_qr_code" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="border:none; background:white; box-shadow:none">
                <div class="modal-body">
                    <div class="tab-setting">
                        <div class="tab-container">
                        <button type="button" class="close text-3x text-white" style="color:black; opacity:1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="clearfix"></div>
                        <div class="tab-content tab-content-1 text-center" style="border:none; background:none">
                            <div class="tab-pane active">
                                <h1>Quét mã để tải APP Thương Hiệu</h1>
                                <div class="row" style="display: flex;justify-content: center;flex-wrap: wrap;">
                                    <div class="col-md-6">
                                    <a href="https://play.google.com/store/apps/details?id=com.myspa.timaspa&pcampaignid=web_share" target="_blank" rel="noopener noreferrer">
                                    <img src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=https://play.google.com/store/apps/details?id=com.myspa.timaspa&pcampaignid=web_share" style="max-width:100%;width:300px;height:auto;" />
                                    </a>
                                    <a href="https://play.google.com/store/apps/details?id=com.myspa.timaspa&pcampaignid=web_share" target="_blank" rel="noopener noreferrer">
                                    <img src="https://lima.myspa.vn/assets/img/chplay.webp" style="width:300px;max-width:100%">
                                    </a>
                                    <br><br>
                                    </div>
                                    <div class="col-md-6">
                                    <a href="https://apps.apple.com/vn/app/timas-sky-spa/id6444360266?l=vi" target="_blank" rel="noopener noreferrer">
                                    <img src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=https://apps.apple.com/vn/app/timas-sky-spa/id6444360266?l=vi" style="max-width:100%;width:300px;height:auto;" />
                                    </a>
                                    <a href="https://apps.apple.com/vn/app/timas-sky-spa/id6444360266?l=vi" target="_blank" rel="noopener noreferrer">
                                    <img src="https://lima.myspa.vn/assets/img/appstore.png" style="width:300px;max-width:100%">
                                    </a>
                                    <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- modal regis design branch app -->
        <!-- step 1 -->
        <div class="modal fade" id="popup-regis-branchapp-form" tabindex="-1" role="dialog">
            <div class="wrap-popup-regis-branch">
            <div data-dismiss="modal" class="modal-dialog modal-lg" role="document" style="width:1000px;max-width: 94%;">
                <button type="button" class="close text-3x text-white" style="color:#FFF; opacity:1;position:absolute; right:10px;top:0;z-index:10" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <div data-toggle="modal" data-target="#popup_moba_app_register_fixed" class="cus-popup-regis-brandapp" style="background:url(https://lima.myspa.vn/assets/img/brandapp-29-step1.png) no-repeat;">
                    <div onclick="event.stopPropagation()" class="not_show_later">
                        <input type="checkbox" id="check_not_show_fixed" name="check_not_show_fixed" /> <label class="text-white" for="check_not_show"> Không hiển thị lần sau</label>
                    </div>
                </div>
                <img data-dismiss="modal" data-toggle="modal" data-target="#popup_moba_app_register_fixed" class="img_moba_mobile modal-dialog modal-lg" src="https://lima.myspa.vn/assets/img/brandapp-29-step1-mb.png" alt="">
            </div>
            </div>
        </div>
        <!-- close step 1 -->
        <!-- step 2 -->
        <div class="modal fade custom" id="popup_moba_app_register_fixed" tabindex="-1" role="dialog">
            <div class="wrap-popup-regis-branch">
            <div class="modal-dialog modal-lg" role="document" style="width:1000px;max-width: 94%;">
                <div class="modal-content cus-popup-regis-brandapp" style="background:url(https://lima.myspa.vn/assets/img/brandapp-29-step2.png) no-repeat;">
                    <!-- <div class="modal-content" style="background:url(https://lima.myspa.vn/assets/img/thiet-ke-app-december-promo-DESK.jpg); background-size: cover;padding: 25px 0px;"> -->
                    <button type="button" class="close text-3x text-white" style="color:#FFF; opacity:1;position:absolute;right:10px;top:0;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                    <!-- <img class="img_moba_mobile" src="https://lima.myspa.vn/assets/img/logo_moba_2.png" alt=""> -->
                    <img class="img_moba_mobile" src="https://lima.myspa.vn/assets/img/brandapp-29-step2-mb.png" alt="">
                    <div class="modal-body form-moba" style="width: 400px; max-width: 100%">
                        <div class="colg-lg-12">
                        <div class="tab-setting">
                            <div class="tab-container">
                                <ul class="nav nav-tabs" role="tablist">
                                    <h3>ĐĂNG KÝ ƯU ĐÃI THIẾT KẾ APP</h3>
                                </ul>
                                <div class="tab-content tab-content-1">
                                    <div class="tab-pane active">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1 md-content">
                                            <div class="clearfix"></div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                <label><i class="fa fa-user"></i></label>
                                                <input type="text" id="brandapp_company_fullname_fixed" name="fullname" value="Lê Hồng Phương" class="form-control rounded" placeholder="Họ tên">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                <label><i class="fa fa-building"></i></label>
                                                <input type="text" id="brandapp_company_name_fixed" name="company_name" value="Da Thẩm Mỹ Quốc Tế LimA" class="form-control rounded" placeholder="Tên công ty" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                <label><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                                <input type="text" id="brandapp_company_address_fixed" name="address" value="93 Lê Lợi, Tp. Vũng Tàu" class="form-control rounded" placeholder="Địa chỉ">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                <label><i class="fa fa-phone" aria-hidden="true"></i></label>
                                                <input type="text" id="brandapp_company_phone_fixed" name="telephone" value="0901010220" class="form-control rounded" placeholder="Điện thoại">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                <label><i class="fa fa-envelope"></i></label>
                                                <input type="text" id="brandapp_company_email_fixed" name="email" value="Phuonglh@limcom.vn, kimnhung@myspa.vn" class="form-control rounded" placeholder="Email">
                                                </div>
                                            </div>
                                            <div style="display:none" class="col-lg-12">
                                                <div class="form-group">
                                                <input type="text" id="brandapp_coupon_code_fixed" name="coupon_code" value="TKA21P-BACKEND" class="form-control rounded" placeholder="Mã khuyến mãi" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="modal-footer">
                                                <!-- <p> <span class="count_register_moba">33/50</span>
                                                    Doanh nghiệp đăng ký thành công</p> -->
                                                <input type="hidden" id="g-recaptcha-response-brandapp" name="g_recaptcha_response_brandapp" />
                                                <a id="submit_brand_app_register_fixed" class="btn btn-rounded">Nhận ưu đãi ngay</a>
                                                <p>
                                                    <a style="color:#abd373" aria-label="tel" href="tel:0356783592"><span> <img style="width:14px; margin-bottom:4px" class="phone icon" src="https://myspa.vn/assets/frontend/images/icon/phone.svg" alt="icon phone"></span> 034 3131 003</a>
                                                </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="modal fade" id="popup-regis-event-step1" tabindex="-1" role="dialog">
            <div data-dismiss="modal" class="popup-event-cus" role="document">
            <div class="event-30yr-wraper">
                <div class="event-30yr-imgs">
                    <button type="button" class="popup-event-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <img data-toggle="modal" data-target="#popup-regis-event" class="event-30yr-img" src="https://lima.myspa.vn/assets/img/popup-event30yr-step1-s1.png" alt="">
                    <style>
                        p, ul , li {
                        margin: 0;
                        padding: 0
                        }
                        .countdown-end-content {
                        display: none;
                        }
                        .countdown-wraper{
                        text-align: center;
                        margin-top: -28px;
                        }
                        .countdown-title{
                        font-size: 18px;
                        font-weight: bold;
                        color: #fff;
                        }
                        .countdown-event ul {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        gap: 20px;
                        margin-top: 14px;
                        }
                        .countdown-event ul li {
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;
                        /* gap: 6px; */
                        width: 70px;
                        border-radius: 14px;
                        height: 70px;
                        /* padding: 16px 8px 8px 8px; */
                        font-size: 10px;
                        border: 4px solid #684318;
                        background-color: #fac670;
                        font-weight: bold;
                        }
                        .countdown-event ul li span{
                        font-size: 28px;
                        font-weight: bold;
                        }
                        .popup-regis-event-container{
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100%;
                        width: 100%;
                        }
                        @media screen and (max-width: 1023px) {
                        .countdown-wraper{
                        margin-top: 0;
                        }
                        .countdown-title{
                        font-size: 14px;
                        color: #fff4b8;
                        }
                        .countdown-event ul {
                        gap: 20px;
                        margin: 14px 0;
                        }
                        .countdown-event ul li {
                        gap: 4px;
                        width: 60px;
                        border-radius: 8px;
                        height: 60px;
                        padding: 12px;
                        font-size: 10px;
                        border: 4px solid #684318;
                        }
                        .countdown-event ul li span{
                        font-size: 20px;
                        }
                        }
                    </style>
                    <div class="countdown-wraper">
                        <p class="countdown-title">Thời gian còn lại</p>
                        <div class="countdown-event">
                        <ul>
                            <li><span class="countdown-event-days"></span>Ngày</li>
                            <li><span class="countdown-event-hours"></span>Giờ</li>
                            <li><span class="countdown-event-minutes"></span>Phút</li>
                            <li><span class="countdown-event-seconds"></span>Giây</li>
                        </ul>
                        </div>
                    </div>
                    <script>
                        (function () {
                        const second = 1000,
                            minute = second * 60,
                            hour = minute * 60,
                            day = hour * 24;

                        let today = new Date(),
                            dd = String(today.getDate()).padStart(2, "0"),
                            mm = String(today.getMonth() + 1).padStart(2, "0"),
                            yyyy = today.getFullYear(),
                            nextYear = yyyy + 1,
                            dayMonth = "08/18/",
                            endDays = dayMonth + yyyy;

                        today = mm + "/" + dd + "/" + yyyy;
                        if (today > endDays) {
                            endDays = dayMonth + nextYear;
                        }

                        const countDown = new Date(endDays).getTime(),
                            x = setInterval(function () {
                            const now = new Date().getTime(),
                            distance = countDown - now;
                            const days = document.querySelectorAll(".countdown-event-days");
                            const hours = document.querySelectorAll(".countdown-event-hours");
                            const minutes = document.querySelectorAll(".countdown-event-minutes");
                            const seconds = document.querySelectorAll(".countdown-event-seconds");
                            const title = document.querySelectorAll(".countdown-title");
                            const event = document.querySelectorAll(".countdown-wraper");
                            days.forEach(item => {
                                item.innerText = Math.floor(distance / day);
                            });
                            hours.forEach(item => {
                                item.innerText = String(Math.floor((distance % day) / hour)).padStart(2, "0");
                            });
                            minutes.forEach(item => {
                                item.innerText = String(Math.floor((distance % hour) / minute)).padStart(2, "0");
                            });
                            seconds.forEach(item => {
                                item.innerText = String(Math.floor((distance % minute) / second)).padStart(2, "0");
                            });
                            if (distance < 0) {
                                event.forEach(item => {
                                item.style.display = "none";
                                });
                                clearInterval(x);
                            }
                            }, 0);
                        })();
                    </script>
                    <div style="margin-top: 14px" onclick="event.stopPropagation()" class="not_show_later text-center mg-top-10">
                        <input type="checkbox" id="check_not_show_event" name="check_not_show_event" />
                        <label class="text-white" for="check_not_show_event"> Không hiển thị lần sau</label>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- close step 1 -->
        <!-- step 2 -->
        <div class="modal fade" id="popup-regis-event" tabindex="-1" role="dialog">
            <div class="popup-regis-event-container">
            <div class="modal-dialog popup-event-cus" role="document">
                <div class="modal-content">
                    <button type="button" class="btn-close-event" data-dismiss="modal" aria-label="Close">&#x2715;</button>
                    <div class="modal-body text-center">
                        <div class="wrap-popup-regis-event">
                        <img class="popup-bg" alt="img" loading="lazy"
                            src="https://lima.myspa.vn/assets/img/pop-30yr-s3.png" />
                        <img class="popup-bg-mb" alt="img" src="https://lima.myspa.vn/assets/img/pop-30yr-s3-mb.png" />
                        <div class="form-events">
                            <div class="form-event-wrap">
                                <div class="form-event_header">
                                    <p style="margin :0" class="form-event_title">
                                    Đăng ký tham gia
                                    </p>
                                </div>
                                <form class="form-event">
                                    <div class="input-wrap">
                                    <input value="Lê Hồng Phương" id="popup_event_name" type="text" placeholder="Họ và tên">
                                    </div>
                                    <div class="input-wrap">
                                    <input value="0901010220" id="popup_event_phone" type="text" placeholder="Số điện thoại">
                                    </div>
                                    <div class="input-wrap">
                                    <input value="Da Thẩm Mỹ Quốc Tế LimA" id="popup_event_business_name" type="text" placeholder="Tên doanh nghiệp">
                                    </div>
                                    <div class="input-wrap">
                                    <select id="popup_event_select" class="input-select" aria-label="Default select example">
                                        <option value="Hạng mục quan tâm" selected>Hạng mục quan tâm</option>
                                        <option value="Vé thường tham dự">Vé thường tham dự</option>
                                        <option value="Thương hiệu vàng làm đẹp 2023">Thương hiệu vàng làm đẹp 2023</option>
                                        <option value="Thương hiệu làm đẹp số 1 Việt Nam 2023">Thương hiệu làm đẹp số 1 Việt Nam 2023</option>
                                        <option value="Đại sứ ngành làm đẹp 2023">Đại sứ ngành làm đẹp 2023</option>
                                        <option value="Ban giám khảo The Face Beauty 2023">Ban giám khảo The Face Beauty 2023
                                        </option>
                                        <option value="Nhà tài trợ">Nhà tài trợ</option>
                                    </select>
                                    </div>
                                    <div class="form-btn_wrap">
                                    <button id="submit_event_the_face_beauty" type="button" class="form-event_btn">
                                    Đăng kí ngay
                                    </button>
                                    </div>
                                    <a target="_blank" href="https://myspa.vn/su-kien" class="event-seemore">
                                    Xem chi tiết
                                    </a>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- close step 2 -->
        <!-- close popup event the face beauty -->
        <div id="permissionModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">Quyền hạn</div>
                    <button type="button" class="btn btn-close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="title">Tài khoản của bạn không có quyền thao tác tính năng này</div>
                </div>
                <div class="clearfix"></div>
            </div>
            </div>
        </div>
        <!-- ------------------------- JS --------------------------- -->
        <style>
            div#chat_momo_moba {
            width: 48px;
            height: 48px;
            right: 24px;
            bottom: 47px;
            z-index: 1000;
            position: fixed;
            border-radius: 100%;
            background: #abd373;
            box-shadow: var(--omi-sdk-sgh);
            }
            div#chat_momo_moba i {
            position: absolute;
            width: 48px;
            height: 48px;
            text-align: center;
            line-height: 2.5;
            font-size: 20px;
            color: white;
            font-weight: 700;
            }
        </style>
        <div id="chat_momo_moba" class="hide-when-print">
            <a id="zalo_chat_icon_link_footer" href="https://lima.myspa.vn/ManageMessage?subdomain=lima&token=64f5a208a09854d58b039ce4|9DandZ2kgbli44xcFjNZ&e=1" target="_blank">
            <div class="icon_chat">
                <i class="icon icon-bubble"></i>
            </div>
            </a>
        </div>
        <script type="text/javascript">
            // var module = {};
            var API_USER = {"id":347196,"fullname":"Nguy\u1ec5n \u0110\u1ee9c Vinh","email":"vinhnd@limcom.vn","telephone":null,"birthday":null,"gender":null,"created_at":"2023-09-03 13:45:01","platform":"MANAGER WEB","token":"64f5a208a09854d58b039ce4|9DandZ2kgbli44xcFjNZ","token_expired_at":"2023-09-06 16:23:20","refresh_token":"0UZA74H8FeqkjjG3oBFaA3Vqa7TSyywe0um5Hftz78f9yVHmvU5x0UDVIosD8krw","avatar":null,"current_platform":null,"ci_api_token":"2wZLg6tdPQZ6snPNi6XUZrCAznDSM6HxwKmuGZHqhWwhyA2o6ZyKPaE64fIp7t7zOmRfkDXv8YZ3r2hkXuqJguZaxoYhfpC5XrAuaWH4Yqz0bG9ZX6tArvRVxgQtnLF7","roles":"W10=","permissions":"W10="};

            var BASE_URL = '{{ config('app.url') }}';

            var UID = '4';
            var MERCHANT_APP = '';
            var hide_member_phone = true;
            var DOMAIN_OMICALL =
                '';
            var PWD_OMICALL =
                '';
            var SIP_USER =
                '';
            var TOKEN_CALLIO =
                '';
        </script>
        <script src='{{ asset('assets/js/echo.iife.min.js') }}'></script>
        <script src='{{ asset('assets/js/pusher.min.js') }}'></script>
        <script src='{{ asset('assets/js/sockjs.min.js') }}'></script>
        <script src="{{ asset('assets/js/nouislider.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/wNumb.js') }}" type="text/javascript" ></script>
        <script src='{{ asset('assets/js/ui-load.js') }}'></script>
        <script src='{{ asset('assets/js/moment.min.js') }}'></script>
        <script src='{{ asset('assets/js/ui-jp.config.js') }}'></script>
        <script src='{{ asset('assets/js/ui-jp.js') }}'></script>
        <script src='{{ asset('assets/js/ui-nav.js') }}'></script>
        <script src='{{ asset('assets/js/ui-toggle.js') }}'></script>
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>
        <script src="{{ asset('assets/js/cropper.min.js') }}"></script>
        <script src="{{ asset('assets/js/main_cropper.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap_calendar.js') }}"></script>
        <script src="{{ asset('assets/js/retina.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.floatThead.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.print.js') }}"></script>
        <script src="{{ asset('assets/js/moment_vi.js') }}"></script>
        <script src="{{ asset('assets/js/xlsx.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/file-saver.min.js') }}"></script>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>

        @stack('pageFooter')

        <script omi-sdk type="text/javascript" src="https://cdn.omicrm.com/sdk/2.0.0/sdk.min.js"></script>
        <script src="{{ asset('assets/js/myspa.js') }}"></script>
        <script src="{{ asset('assets/js/js.print.js') }}"></script>
        <script src="https://www.google.com/recaptcha/api.js?render=6LfxZwAgAAAAAMKhU0BYmqjd_kkbUhu-AVAILFso"></script>
        <script type="text/javascript">
            if (TOKEN_CALLIO) {
                var CALLIO_API = {
                        baseUrl: 'https://client.callio.vn',
                        token: TOKEN_CALLIO
                    },
                    CALLIO_LoadStart = new Date();
                (function() {
                    var s1 = document.createElement("script"),
                        s0 = document.getElementsByTagName("script")[0];
                    s1.async = true;
                    s1.src = `${CALLIO_API.baseUrl}/widget-embed.js`;
                    s1.charset = 'UTF-8';
                    s0.parentNode.insertBefore(s1, s0);
                })();
                waitForElm('.callio-widget-icon').then((elm) => {
                    elm.style.display = 'none';
                });
            }
        </script>
        <script type="text/javascript">
            $(function() {

                $('#check_not_show').click(function() {
                    if ($('#check_not_show').is(':checked')) {
                        check_not_show(1);
                        return;
                    }
                });
                $('#check_not_show_fixed').click(function() {
                    if ($('#check_not_show_fixed').is(':checked')) {
                        check_not_show(1);
                        return;
                    }
                });
                $('#check_not_show_momo').click(function() {
                    if ($('#check_not_show_momo').is(':checked')) {
                        check_not_show(6);
                        return;
                    }
                });
                $('#check_not_show_event').click(function() {
                    if ($('#check_not_show_event').is(':checked')) {
                        check_not_show(3);
                        return;
                    }
                });

                $('.qr_code_moba_app').on('click', function() {
                    $(document.querySelector('#popup_moba_app_qr_code')).modal('show');
                });

                $('.regis_event_30yr').on('click', function() {
                    $(document.querySelector('#popup-regis-event-step1')).modal('show');
                });

                $('.register_moba_app').on('click', function() {
                    $(document.querySelector('#popup-regis-branchapp-form')).modal('show');
                });

                $('.moba_app_register').on('click', function() {

                    $(document.querySelector('#popup-regis-branchapp-form')).modal('show');
                            });

                $('.moba_app_register_fixed').on('click', function() {
                    $(document.querySelector('#popup-regis-branchapp-form')).modal('show');
                    recaptcha();
                });

                $(document).ready(function() {
                    grecaptcha.ready(function() {
                        grecaptcha.execute('6LfxZwAgAAAAAMKhU0BYmqjd_kkbUhu-AVAILFso', {
                                action: 'submit'
                            })
                            .then(function(token) {
                                $('#g-recaptcha-response').val(token);
                                $('#g-recaptcha-response-brandapp').val(token);
                            });
                    });

                    if ("") {
                        recaptcha();
                    }
                });

                $('#submit_payment_momo_register').on('click', function() {
                    submit_payment_momo_register();
                })

                $('#submit_brand_app_register').on('click', function() {
                    var ec = $(this).attr('data-ec')
                    const res = validate_momo();
                    if (res) {
                        $('#submit_brand_app_register').empty().append('Đang gửi...');
                        $('#submit_brand_app_register').attr('disabled', 'disabled');
                        submit_register_brand_app(ec);
                    }
                });

                $(document).ready(function() {
                    if ("") {
                        recaptcha();
                    }
                })

                $('#submit_event_the_face_beauty').on('click', function() {
                    if ($.trim($('#popup_event_phone').val()) !== '') {
                        submit_event_the_face_beauty();
                        $('#submit_event_the_face_beauty').empty().append('Đang gửi...');
                        $('#submit_event_the_face_beauty').attr('disabled', 'disabled');
                    } else {
                        alert("Vui lòng điền đầy đủ số điện thoại")
                    }

                })

                $('#submit_brand_app_register_fixed').on('click', function() {
                    $('#submit_brand_app_register_fixed').empty().append('Đang gửi...');
                    $('#submit_brand_app_register_fixed').attr('disabled', 'disabled');
                    submit_register_brand_app_fixed();
                });

                $('#zalo_chat_icon_link_footer').on('click', (e) => {
                    e.preventDefault();
                    const tokenUser = '{"id":347196,"fullname":"Nguy\u1ec5n \u0110\u1ee9c Vinh","email":"vinhnd@limcom.vn","telephone":null,"birthday":null,"gender":null,"created_at":"2023-09-03 13:45:01","platform":"MANAGER WEB","token":"64f5a208a09854d58b039ce4|9DandZ2kgbli44xcFjNZ","token_expired_at":"2023-09-06 16:23:20","refresh_token":"0UZA74H8FeqkjjG3oBFaA3Vqa7TSyywe0um5Hftz78f9yVHmvU5x0UDVIosD8krw","avatar":null,"current_platform":null,"ci_api_token":"2wZLg6tdPQZ6snPNi6XUZrCAznDSM6HxwKmuGZHqhWwhyA2o6ZyKPaE64fIp7t7zOmRfkDXv8YZ3r2hkXuqJguZaxoYhfpC5XrAuaWH4Yqz0bG9ZX6tArvRVxgQtnLF7","roles":"W10=","permissions":"W10="}';
                    if(!tokenUser)
                        $('#permissionModal').modal('show');
                    else
                        window.open($('#zalo_chat_icon_link_footer').attr('href'), '_blank');
                });


                function validate_momo() {
                    const regex = /(84|0[3|5|7|8|9])+([0-9]{9}|[0-9]{8})\b/;
                    let res = false;
                    // SUBMIT FORM
                    if ($.trim($('#brandapp_company_fullname').val()) == '') {
                        $('#brandapp_company_fullname').focus();
                        $('#brandapp_company_fullname').addClass('warning');
                        $('#brandapp_company_fullname ~ .errors_log').show();
                        return res = false;
                    } else {
                        $('#brandapp_company_fullname').removeClass('warning');
                        $('#brandapp_company_fullname ~ .errors_log').hide();
                        res = true;
                    }
                    if ($.trim($('#brandapp_company_name').val()) == '') {
                        $('#brandapp_company_name').focus();
                        $('#brandapp_company_name').addClass('warning');
                        $('#brandapp_company_name ~ .errors_log').show();
                        return res = false;
                    } else {
                        $('#brandapp_company_name').removeClass('warning');
                        $('#brandapp_company_name ~ .errors_log').hide();
                        res = true;

                    }
                    if ($.trim($('#brandapp_company_phone').val()) == '') {
                        $('#brandapp_company_phone').focus();
                        $('#brandapp_company_phone').addClass('warning');
                        $('#brandapp_company_phone ~ .errors_log').show();
                        return res = false;
                    } else {
                        $('#brandapp_company_phone').removeClass('warning');
                        $('#brandapp_company_phone ~ .errors_log').hide();
                        res = true;

                    }
                    if (regex.test($('#brandapp_company_phone').val())) {
                        $('#brandapp_company_phone').removeClass('warning');
                        $('#brandapp_company_phone ~ .errors_log').hide();
                        res = true;

                    } else {
                        $('#brandapp_company_phone').focus();
                        $('#brandapp_company_phone').addClass('warning');
                        $('#brandapp_company_phone ~ .errors_log').text('Số điện thoại sai định dạng');
                        $('#brandapp_company_phone ~ .errors_log').show();
                        return res = false;
                    }
                    if ($.trim($('#brandapp_company_email').val()) == '') {
                        // warning('#brandapp_company_email');
                        $('#brandapp_company_email').focus();
                        $('#brandapp_company_email').addClass('warning');
                        $('#brandapp_company_email ~ .errors_log').show();
                        return res = false;
                    } else {
                        $('#brandapp_company_email').removeClass('warning');
                        $('#brandapp_company_email ~ .errors_log').hide();
                        res = true;
                    }
                    if ($('#pop_up_account_owner').length && $.trim($('#pop_up_account_owner').val()) == '') {
                        // warning('#pop_up_account_owner');
                        $('#pop_up_account_owner').focus();
                        $('#pop_up_account_owner').addClass('warning');
                        $('#pop_up_account_owner ~ .errors_log').show();
                        return res = false;
                    } else {
                        $('#pop_up_account_owner').removeClass('warning');
                        $('#pop_up_account_owner ~ .errors_log').hide();
                        res = true;

                    }
                    if ($('#pop_up_account_number').length && $.trim($('#pop_up_account_number').val()) == '') {
                        $('#pop_up_account_number').focus();
                        $('#pop_up_account_number').addClass('warning');
                        $('#pop_up_account_number ~ .errors_log').show();
                        return res = false;
                    } else {
                        $('#pop_up_account_number').removeClass('warning');
                        $('#pop_up_account_number ~ .errors_log').hide();
                        res = true;

                    }
                    if ($('#pop_up_bank_name').length && $.trim($('#pop_up_bank_name').val()) == '') {
                        // warning('#pop_up_bank_name');
                        $('#pop_up_bank_name').focus();
                        $('#pop_up_bank_name').addClass('warning');
                        $('#pop_up_bank_name ~ .errors_log').show();
                        return res = false;
                    } else {
                        $('#pop_up_bank_name').removeClass('warning');
                        $('#pop_up_bank_name ~ .errors_log').hide();
                        res = true;
                    }
                    return res;
                }

                function check_not_show(logo_type) {
                    $.ajax({
                        url: BASE_URL + "Dashboard/check_not_show",
                        type: "post",
                        dataType: 'json',
                        data: {
                            type: logo_type
                        },
                        success: function(res) {

                        }
                    });
                }

                function submit_register_brand_app(ec = null) {
                    type = '1'
                    reg_type = 'MOBA'
                    title = 'tạo APP THƯƠNG HIỆU'
                    brandapp_coupon_code = $('#brandapp_coupon_code').val()
                    if (ec == 'momo') {
                        type = '2'
                        reg_type = "BEAUTYX"
                        title = "bán hàng trên sàn TMĐT"
                        brandapp_coupon_code = ''
                    }
                    $.ajax({
                        url: BASE_URL + "MyspaManager/register_brand_app",
                        type: "post",
                        dataType: 'json',
                        data: {
                            type: type,
                            brandapp_company_name: $('#brandapp_company_name').val(),
                            brandapp_coupon_code: brandapp_coupon_code,
                            brandapp_company_fullname: $('#brandapp_company_fullname').val(),
                            brandapp_company_phone: $('#brandapp_company_phone').val(),
                            brandapp_company_email: $('#brandapp_company_email').val(),
                            brandapp_company_address: $('#pop_up_business_add').val(),
                            reg_account_owner: $('#pop_up_account_owner').val(),
                            reg_account_number: $('#pop_up_account_number').val(),
                            reg_bank_name: $('#pop_up_bank_name').val(),
                            reg_type: reg_type,
                            title: title,
                            recaptcha: $('#g-recaptcha-response').val(),
                        },
                        success: function(res) {
                            if (res.status == 'fail') {
                                alert(res.message);
                                location.reload();
                            } else {
                                $('#popup_moba_app_register').hide();
                                Notify('Đăng ký TMDT thành công');
                                check_not_show(2);
                            }
                        }
                    });
                    return;
                }

                function submit_event_the_face_beauty() {
                    $.ajax({
                        url: BASE_URL + "MyspaManager/event_the_face_beauty",
                        type: "post",
                        dataType: 'json',
                        data: {
                            type: 1,
                            event_name: $('#popup_event_business_name').val(),
                            event_fullname: $('#popup_event_name').val(),
                            event_phone: $('#popup_event_phone').val(),
                            event: $('#popup_event_select').val(),
                            recaptcha: $('#g-recaptcha-response-brandapp').val()
                        },
                        success: function(res) {
                            if (res.status == 'fail') {
                                alert(res.message);
                                location.reload();
                            } else {
                                $('#popup-regis-event .form-event_header p').hide();
                                $('#popup-regis-event form.form-event').hide();
                                $('#popup-regis-event .form-event_header').append('<p class="form-event_title p-sm">' + res.message + '</p>');
                                check_not_show(3);
                            }
                        }
                    });
                    return;
                }

                function submit_payment_momo_register() {
                    $.ajax({
                        url: BASE_URL + "MyspaManager/register_payment_integration_momo",
                        type: "post",
                        dataType: 'json',
                        data: {
                            type: 1,
                            reg_name: $('#payment_momo_company_name').val(),
                            reg_fullname: $('#payment_momo_company_fullname').val(),
                            reg_phone: $('#payment_momo_company_phone').val(),
                            reg_email: $('#payment_momo_company_email').val(),
                            reg_address: $('#payment_momo_company_address').val(),
                            recaptcha: $('#g-recaptcha-response-brandapp').val()
                        },
                        success: function(res) {
                            if (res.status == 'fail') {
                                alert(res.message);
                                location.reload();
                            } else {
                                $('#popup_payment_momo_register').hide();
                                Notify('Đăng ký tích hợp thanh toán MOMO thành công');
                                check_not_show(6);
                            }
                        }
                    });
                    return;
                }

                function submit_register_brand_app_fixed() {
                    $.ajax({
                        url: BASE_URL + "MyspaManager/register_brand_app",
                        type: "post",
                        dataType: 'json',
                        data: {
                            type: 1,
                            brandapp_company_name: $('#brandapp_company_name_fixed').val(),
                            brandapp_coupon_code: $('#brandapp_coupon_code_fixed').val(),
                            brandapp_company_fullname: $('#brandapp_company_fullname_fixed').val(),
                            brandapp_company_phone: $('#brandapp_company_phone_fixed').val(),
                            brandapp_company_email: $('#brandapp_company_email_fixed').val(),
                            brandapp_company_address: $('#brandapp_company_address_fixed').val(),
                            reg_type: 'MOBA',
                            title: 'tạo APP THƯƠNG HIỆU',
                            recaptcha: $('#g-recaptcha-response-brandapp').val()
                        },
                        success: function(res) {
                            if (res.status == 'fail') {
                                alert(res.message);
                                location.reload();
                            } else {
                                var str = '<br><br><h3 style="text-align:center"><i class="icon icon-check text-1x text-success"></i> ĐĂNG KÝ THIẾT KẾ APP THƯƠNG HIỆU THÀNH CÔNG</h3><p>Cảm ơn Quý khách hàng, chúng tôi sẽ liên hệ lại sớm nhất có thể từ thứ hai đến thứ bảy hàng tuần. Trân trọng!</p><br><br><br>';
                                $('#popup_moba_app_register_fixed .tab-content .md-content').empty().append(str);
                                $('#submit_brand_app_register_fixed').hide();
                                check_not_show(1);
                            }
                        }
                    });
                    return;
                }
                //End Register App

                // Recaptcha
                function recaptcha() {
                    grecaptcha.ready(function() {
                        grecaptcha.execute('6LfxZwAgAAAAAMKhU0BYmqjd_kkbUhu-AVAILFso', {
                                action: 'submit'
                            })
                            .then(function(token) {
                                $('#g-recaptcha-response-brandapp').val(token);
                            });
                    });
                }

                $(document).on('click', '.modal-mobaapp', function() {
                    recaptcha();
                })
            });
        </script>
        <script>
            (function(a, s, y, n, c, h, i, d, e) {
                s.className += ' ' + y;
                h.start = 1 * new Date;
                h.end = i = function() {
                    s.className = s.className.replace(RegExp(' ?' + y), '')
                };
                (a[n] = a[n] || []).hide = h;
                setTimeout(function() {
                    i();
                    h.end = null
                }, c);
                h.timeout = c;
            })(window, document.documentElement, '', 'dataLayer', 4000, {
                'GTM-M4X4WRN': true
            });
        </script>
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-101732198-1', 'auto');
            ga('require', 'GTM-M4X4WRN');
            ga('send', 'pageview');
        </script>
        <!-- <div class="zalo-chat-widget" data-oaid="2338372396937950652" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="" data-height=""></div>
            <script src="https://sp.zalo.me/plugins/sdk.js"></script> -->
        <script>
            ! function(s, u, b, i, z) {
                var o, t, r, y;
                s[i] || (s._sbzaccid = z, s[i] = function() {
                    s[i].q.push(arguments)
                }, s[i].q = [], s[i]("setAccount", z), r = ["widget.subiz.net", "storage.googleapis" + (t = ".com"),
                    "app.sbz.workers.dev", i + "a" + (o = function(k, t) {
                        var n = t <= 6 ? 5 : o(k, t - 1) + o(k, t - 3);
                        return k !== t ? n : n.toString(32)
                    })(20, 20) + t, i + "b" + o(30, 30) + t, i + "c" + o(40, 40) + t
                ], (y = function(k) {
                    var t, n;
                    s._subiz_init_2094850928430 || r[k] && (t = u.createElement(b), n = u.getElementsByTagName(b)[0], t
                        .async = 1, t.src = "https://" + r[k] + "/sbz/app.js?accid=" + z, n.parentNode.insertBefore(
                            t, n), setTimeout(y, 2e3, k + 1))
                })(0))
            }(window, document, "script", "subiz", "acrhliqgcuqhmqodagwj")
        </script>
        <script type="text/javascript">
            const support_btn = document.getElementById('support_btn');
            const su_chat = document.getElementById('myspa_subiz');
            const su_chat_mobile = document.getElementById('myspa_subiz-chat-mobile');
            const footer = document.getElementById('footer');
            const fStyle = footer.style;
            const isOrder = document.getElementsByClassName('pre-order-btns');
            let su_widget = document.querySelector("#cprhliqipldavybercftg .widget-container.widget-container--right");

            support_btn.onclick = () => {
                document.getElementsByClassName('support-option')[0].classList.toggle('active');
            };

            document.getElementsByClassName('backdrop')[0].onclick = () => document.getElementsByClassName('support-option')[0]
                .classList.remove('active');


            if (isOrder.length > 0) {
                su_chat.classList.add('is_order');
                fStyle.zIndex = '1000';
                fStyle.position = 'fixed';
                fStyle.top = '-200vh';
                fStyle.width = '0';
                fStyle.height = '0'
            };
            su_chat.onclick = () => handleSubiz();
            // su_chat_mobile.onclick = ()=>handleSubiz();
            function handleSubiz() {
                (!su_widget) && (su_widget = document.getElementById("cprhliqipldavybercftg"))
                su_widget.classList.add('myspa_subiz_widget')
                window.subiz('expandWidget');
                subiz('checkPushNotification', function(status) {})
                //
            }
        </script>
        <style>
            div[id^="omi_sdk_"] {
            visibility: hidden;
            }
        </style>
        <script type="text/javascript">
            function openApp(e) {
                var now = new Date().valueOf();
                let child = e.target.parentElement.querySelector('span').textContent;
                let type;
                if (e.target.querySelector('span')) {
                    type = e.target.querySelector('span').textContent
                } else {
                    type = child
                };
                const IsDownLoad = (url, dUrl) => {
                    let link;
                    if (e.target.tagName == 'I') {
                        link = dUrl
                    } else {
                        link = url
                    }
                    var WINDOW_POPUP = window.open(link, "_blank");
                    e.preventDefault();
                };
                switch (type) {
                    case 'Teamview':
                        IsDownLoad('https://download.teamviewer.com/full?src=cookie-banner', 'teamviewer8://');
                        break;
                    case 'Anydesk':
                        IsDownLoad('https://anydesk.com/en/downloads/windows', 'anydesk://')
                        break;
                    case 'Ultraviewer':
                        IsDownLoad('https://www.ultraviewer.net/en/download.html', 'https://www.ultraviewer.net/en/download.html')
                        break;
                    default:
                        break;
                }
            }

            // check auto close event slider
            // const countDown = new Date("08/18/2023").getTime()
            // const now = new Date().getTime()
            // let distance = countDown - now;
            // if (distance > 0) {
            //     $(".slider-header").slick({
            //         infinite: true,
            //         autoplay: true,
            //         arrows: false,
            //         pauseOnHover: true
            //     });
            // } else {
            //     $('#popup-regis-event').destroy;
            //     document.querySelector(".events-the-face-beauty").style.display = "none";
            // }
            // close check auto close event slider
        </script>
    </body>
</html>





