<div class="aside-wrap">
    <div class="navi-wrap">
        <!-- nav -->
        <nav ui-nav class="navi clearfix">
            <div class="hide">
                <a href="https://lima.myspa.vn/ManageProcess/process" class="btn w-full inline cls-relative m-b-sm m-t-sm">
                    <span class="intro-banner-vdo-play-btn pinkBg">
                        <span class="ripple pinkBg"></span>
                        <span class="ripple"></span>
                        <span class="ripple"></span>
                    </span>
                    <!--                            <span><i class="text-danger fa fa-circle intro-banner-vdo-play-btn"></i></span>-->
                    <span class="navi-text w-full inline">OptiFlo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </a>
            </div>

            <!-- <div class="hide">
        <a href="https://lima.myspa.vn/ManageAppointment/reminder_scheduler" class="btn w-full inline cls-relative m-b-sm m-t-sm">
            <span class="intro-banner-vdo-play-btn pinkBg">
                <span class="ripple pinkBg"></span>
                <span class="ripple"></span>
                <span class="ripple"></span>
            </span>
            <span class="navi-text w-full inline">Nhắc nhở &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </a>
    </div> -->

            <div class="clearfix"></div>
            <ul class="nav">
                @foreach ($menu as $key=>$value)
                <li data-ncode="{{ $key }}" class="{{ request()->is($value['url']) ? 'active' : '' }}">
                    <a href="/{{ isset($value['children']) ? '' : $value['url'] }}" class="auto">
                        @isset($value['children'])
                        <span class="pull-right text-muted">
                            <i class="fa fa-fw fa-angle-right text"></i>
                            <i class="fa fa-fw fa-angle-down text-active"></i>
                        </span>
                        @endisset
                        <i class="{{ $value['icon'] }}"></i>
                        <span>{{ $value['label'] }}</span>
                    </a>
                    @isset($value['children'])
                    <ul class="nav nav-sub dk">
                        <li class="nav-sub-header" style="background: #363636;">
                            <a>
                                <span>{{ $value['label'] }}</span>
                            </a>
                        </li>
                        @foreach ($value['children'] as $k=>$val)
                        <li data-sncode="{{ $k }}" class="{{ request()->is($val['url']) ? 'active' : '' }}">
                            <a href="/{{ $val['url'] }}">
                                <span>{{ $val['label'] }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @endisset
                </li>
                @endforeach
            </ul>
        </nav>
        <!-- nav -->

        <div class="clearfix"></div>
        <br />
        <br />

        <div class="slider-header">
            <div class="text-white a-download" style="padding: 40px; text-align: center;">
                <!-- <div class="clearfix"></div> -->
                <!-- <br> -->

                <!-- <a href="https://lima.myspa.vn/moba_manager/dashboard"><img src="https://lima.myspa.vn/assets/img/logo_moba_2.png" width="80px"/></a>
            <div class="clearfix"></div>
            <div class="m-t-sm">
                <span><a href="https://lima.myspa.vn/moba_manager/dashboard" class="tn btn-xs btn-primary btn-rounded text-xs">App Thương Hiệu</a></span>
            </div> -->

                <a class="qr_code_moba_app"><img style="padding: 0 10px;" src="https://lima.myspa.vn/assets/img/thietke_app.png" width="100%" /></a>
                <!-- <div class="clearfix"></div> -->
                <div class="m-t-sm">
                    <span><a class="qr_code_moba_app tn btn-xs btn-primary btn-rounded text-xs">App Thương Hiệu</a></span>
                </div>
            </div>

            <!-- <div style="padding:40px; position: relative" class="events-the-face-beauty">
            <img class="icon_new-slider-header" src="https://lima.myspa.vn/assets/img/icon_new.png" width="100%" />
            <a><img style="background-image:unset ; border:unset !important; animation:unset" class="regis_event_30yr" src="https://lima.myspa.vn/assets/img/popup-event30yr-step1-s1.png" width="100%" /></a>
            <div class="m-t-sm text-center">
                <span>
                    <a class="regis_event_30yr tn btn-xs btn-primary btn-rounded text-xs">The Face Beauty
                    </a>
                </span>
            </div>

                                    </div> -->
        </div>

        <div class="clearfix"></div>
        <br />
        <br />
        <div class="col-sm-12 text-white a-download">
            <hr />
        </div>

        <div class="btn-group w-100">
            <a class="a-change-language inline dropdown-toggle" style="color: #fff; margin-left: 18px;" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="a-language">Ngôn ngữ</span> &nbsp;<span class="flag-icon flag-icon-vn"></span>
            </a>
            <ul class="dropdown-menu m-l-md">
                <li>
                    <a href="https://lima.myspa.vn/ChangeLang/switch_language?lang=english" class=" "><span class="flag-icon flag-icon-gb"></span> &nbsp;&nbsp;English</a>
                </li>
                <li>
                    <a href="https://lima.myspa.vn/ChangeLang/switch_language?lang=vietnamese" class="a-selected"><span class="flag-icon flag-icon-vn"></span> &nbsp;&nbsp;Việt Nam</a>
                </li>
                <li>
                    <a href="https://lima.myspa.vn/ChangeLang/switch_language?lang=indonesia" class=" "><span class="flag-icon flag-icon-id"></span> &nbsp;&nbsp;Bahasa Indonesia</a>
                </li>
                <li>
                    <a href="https://lima.myspa.vn/ChangeLang/switch_language?lang=cambodian" class=" "><span class="flag-icon flag-icon-kh"></span> &nbsp;&nbsp;ភាសាខ្មែរ។</a>
                </li>
                <li>
                    <a href="https://lima.myspa.vn/ChangeLang/switch_language?lang=korean" class=" "><span class="flag-icon flag-icon-kr"></span> &nbsp;&nbsp;한국어</a>
                </li>
                <li>
                    <a href="https://lima.myspa.vn/ChangeLang/switch_language?lang=japanese" class=" "><span class="flag-icon flag-icon-jp"></span> &nbsp;&nbsp;日本語</a>
                </li>
                <li>
                    <a href="https://lima.myspa.vn/ChangeLang/switch_language?lang=chinese" class=" "><span class="flag-icon flag-icon-cn"></span> &nbsp;&nbsp;中国语訳</a>
                </li>
                <li>
                    <a href="https://lima.myspa.vn/ChangeLang/switch_language?lang=czech" class=" "><span class="flag-icon flag-icon-cz"></span> &nbsp;&nbsp;Česká republika</a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <style>
            .app-aside-folded .a-currency,
            .app-aside-folded .a-language {
                display: none;
            }

            .a-selected {
                background-color: #c1c3c9 !important;
                pointer-events: none;
            }
        </style>
        <div class="clearfix"></div>
        <br />
        <div class="btn-group w-100">
            <a class="" style="color: #fff; margin-left: 18px;" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="a-currency">Tiền tệ</span> VND </a>
            <ul class="dropdown-menu m-l-md">
                <li>
                    <a class="" href="https://lima.myspa.vn/ChangeCurrency/switch_currency?currency=USD"> <span class="flag-icon flag-icon-us"></span> &nbsp;&nbsp;USD - $ </a>
                </li>
                <li>
                    <a class="a-selected" href="https://lima.myspa.vn/ChangeCurrency/switch_currency?currency=VND"> <span class="flag-icon flag-icon-vn"></span> &nbsp;&nbsp;VND - đ </a>
                </li>
                <li>
                    <a class="" href="https://lima.myspa.vn/ChangeCurrency/switch_currency?currency=JPY"> <span class="flag-icon flag-icon-jp"></span> &nbsp;&nbsp;JPY - ¥ </a>
                </li>
                <li>
                    <a class="" href="https://lima.myspa.vn/ChangeCurrency/switch_currency?currency=CZK"> <span class="flag-icon flag-icon-cz"></span> &nbsp;&nbsp;CZK - Kč </a>
                </li>
                <li>
                    <a class="" href="https://lima.myspa.vn/ChangeCurrency/switch_currency?currency=IDR"> <span class="flag-icon flag-icon-id"></span> &nbsp;&nbsp;IDR - Rp </a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <br />

        <style scoped>
            .app-aside-folded .nav > li > a > img {
                margin: 20px;
            }

            .nav > li > a > img {
                width: 20px;
                margin-right: 14px;
                margin-top: 8px;
                float: left;
            }

            .progress-footer {
                font-size: 12px;
                width: 100%;
            }

            .progress-label {
                display: flex;
                font-size: 10px;
                justify-content: space-between;
                font-weight: 1000;
                height: 15px;
            }

            .progress-label-start {
                text-align: start;
                order: 1;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }

            .progress-label-end {
                text-align: end;
                order: 1;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }

            .company-progress {
                width: 80%;
                margin: 0 auto;
                margin-top: 20px;
            }

            .app-aside-folded .progress-label {
                visibility: hidden;
            }

            .app-aside-folded .progress-label {
                visibility: hidden;
            }

            .app-aside-folded .a-guidline {
                visibility: visible;
            }

            .app-aside-folded .contract_extension_modal_popup u,
            .app-aside-folded .a-download span {
                display: none;
            }

            .app-aside-folded .a-download .text-2x {
                font-size: 15px;
            }

            .app-aside-folded .a-download img {
                max-width: 100%;
            }

            .a-guidline {
                visibility: hidden;
            }

            .a-download i {
                margin-right: 8px;
                margin-bottom: 10px;
            }

            .app-aside-folded .a-download i {
                margin-right: 0px;
            }

            .nav_company_name {
                white-space: nowrap;
                max-width: 150px;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .navbar-form #s2id_customer_info.select2-dropdown-open {
                width: 350px;
            }

            @media screen and (min-width: 980px) and (max-width: 1094px) {
                .add_res_nav_btn {
                    display: none;
                }

                .add_res_nav_icon_btn {
                    display: block !important;
                }

                .navbar-form #s2id_customer_info {
                    width: 150px;
                }

                .navbar-form #s2id_customer_info.select2-dropdown-open {
                    width: 150px;
                }
            }

            @media screen and (min-width: 883px) and (max-width: 912px) {
                .navbar-form #s2id_customer_info {
                    width: 150px;
                }

                .navbar-form #s2id_customer_info.select2-dropdown-open {
                    width: 150px;
                }
            }

            @media screen and (min-width: 832px) and (max-width: 882px) {
                .navbar-form #s2id_customer_info {
                    width: 100px;
                }
            }

            @media screen and (max-width: 831px) {
                .navbar-form #s2id_customer_info {
                    width: 32px;
                    background-position: 110% -19px !important;
                }
            }

            @media (max-width: 767px) and (min-width: 326px) {
                .nav > li > a > img {
                    margin-top: 0px;
                }
            }

            .add_res_nav_btn {
                padding: 5px 3px;
                font-size: 10px;
            }

            /* @media screen and (min-width: 768px) {
        .progress-label-start {
            display: none;
        }
        .progress-label-end {
            display: none;
        }
    } */
        </style>
        <div class="clearfix"></div>
        <br />
        <a class="a-change-language inline m-l-md" style="color: #fff;" href="https://demo.myspa.vn/Guide" target="_blank">
            <span class="a-language" style="color: #abd373;">Hướng dẫn sử dụng</span><i class="a-guidline icon-book-open icon"></i>
        </a>
        <!-- company progress  -->
        <div class="company-progress">
            <div class="progress-label">
                <span title="Gói: Cao cấp" class="progress-label-start">Cao cấp</span>
                <span title="Hạn sử dụng (Còn: 454 ngày)" class="progress-label-end">Còn: 454 ngày</span>
            </div>
            <div style="margin-bottom: 5px;" data-toggle="tooltip" data-placement="bottom" data-original-title="Đã sử dụng: 210 ngày" id="expiry_progress" class="progress progress-xs bg-white active progress-striped">
                <div class="progress-bar current-progress" style="width: 31.626506024096%; background-color: #f69733;"></div>
                <div class="progress-bar remain-progress bg-white" style="width: 68.373493975904%;"></div>
            </div>
            <div class="progress-label">
                <span title="Ngày bắt đầu: 06/02/2023 " class="progress-label-start">06/02/2023</span>
                <span title="Ngày kết thúc: 01/12/2024" class="progress-label-end">01/12/2024</span>
            </div>
            <div class="progress-label invisible">
                <span></span>
                <span style="text-align: right;"></span>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12 text-white a-download">
            <hr />
            <span class="text-xs">Myspa Manager app</span>
            <div class="clearfix"></div>
            <a class="text-2x" href="https://play.google.com/store/apps/details?id=com.myspa.merchant" target="_blank"><i class="fa fa-android"></i></a>
            <a class="text-2x" href="https://apps.apple.com/app/myspa-merchant/id1458962203" target="_blank"><i class="fa fa-apple"></i></a>
            <div class="clearfix"></div>
            <img src="https://lima.myspa.vn/assets/img/onlink_to_myspa_manager.png" width="50px" />
        </div>
        <div class="col-sm-12 text-white a-download" style="padding-bottom: 50px;">
            <hr />
            <div class="">
                <a class="text-xs" href="https://lima.myspa.vn/ManageSystem/storage_manage"> Dung lượng lưu trữ:&nbsp;&nbsp;<span style="color: #abd373;">0/5 (GB)</span> </a>
            </div>
            <div class="clearfix"></div>
            <br />
            <span class="text-xs">2023 MYSPA Jsc. All rights reserved.</span>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
