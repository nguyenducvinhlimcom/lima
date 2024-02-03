    <!-- navbar header -->
    <div class="navbar-header bg-dark">
        <button class="pull-right visible-xs" onclick="go_to_notification()">
            <i class="icon-bell fa-fw"></i>
            <span class="badge badge-sm up bg-danger pull-right-xs notification-no" style="top: -5px;"></span>
        </button>
        <button class="pull-right visible-xs dk" ui-toggle="show" target=".navbar-collapse">
            <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle="off-screen" target=".app-aside" ui-scroll="app">
            <i class="glyphicon glyphicon-align-justify"></i>
        </button>

        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs box-center">
            <a href="#" class="btn no-shadow navbar-btn" ui-toggle="app-aside-folded" target=".app">
                <i class="icon icon-arrow-right fa-fw text"></i>
                <i class="icon icon-arrow-right fa-fw text-active"></i>
            </a>
        </div>
        <!-- / buttons -->
    </div>
    <!-- / navbar header -->

    <!-- navbar collapse -->
    <div class="collapse pos-rlt navbar-collapse box-shadow bg-dark-1">
        <!-- brand -->
        <a href="{{ config('app.url') }}" class="navbar-brand text-lt navbar-left">
            <h2 class="text-white mt-15 nav_company_name" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" title="{{ config('app.name') }}">
                {{ config('app.name') }}
            </h2>
        </a>
        <!-- / brand -->

        {{-- <!-- BRANCH -->
        <ul class="nav navbar-nav navbar-left navbar-nav-branch">
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">
                    <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
                    <span> Tất cả chi nhánh </span> <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="https://lima.myspa.vn/ManageBranch/change_branch?branch_id=MA&url=https%3A%2F%2Flima.myspa.vn%2Fdashboard">Chi nhánh</a></li>
                    <li class=""><a href="https://lima.myspa.vn/ManageBranch/change_branch?branch_id=Mw&url=https%3A%2F%2Flima.myspa.vn%2Fdashboard">Chi Nhánh Bắc Giang</a></li>
                    <li class=""><a href="https://lima.myspa.vn/ManageBranch/change_branch?branch_id=MQ&url=https%3A%2F%2Flima.myspa.vn%2Fdashboard">Chi nhánh Huế</a></li>
                    <li class=""><a href="https://lima.myspa.vn/ManageBranch/change_branch?branch_id=Mg&url=https%3A%2F%2Flima.myspa.vn%2Fdashboard">Chi nhánh Vũng Tàu</a></li>
                </ul>
            </li>
        </ul> --}}
        <!-- /BRANCH -->

        <!-- <a class="navbar-brand navbar-left btn-success m-l-sm" style="padding-left: 15px;" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" title="Scanner QR" id="scan_qr_all"><i class="fa fa-qrcode"></i>
</a> -->
        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
                    <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                        <img
                            src="
                    https://lima.myspa.vn/assets/img/default_avatar.jpg                            "
                            alt="..."
                        />
                    </span>
                    Chào {{ config('app.name') }}!
                </a>
                <!-- dropdown -->
                <ul class="dropdown-menu animated fadeInRight w">
                    {{-- <li>
                        <a href="https://lima.myspa.vn/ManageUser/edit_admin?user_id=NA">Thông tin cá nhân</a>
                    </li>
                    <li class="divider"></li> --}}
                    <li>
                        <a href="{{ route('admin.logout') }}" ui-sref="{{ route('admin.logout') }}">Đăng xuất</a>
                    </li>
                </ul>
                <!-- / dropdown -->
            </li>
            {{-- <li class="dropdown notification_li">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    <i class="icon-bell fa-fw"></i>
                    <span class="visible-xs-inline">Thông báo</span>
                    <span class="badge badge-sm up bg-danger pull-right-xs notification-no">20+</span>
                </a>
                <!--   dropdown -->
                <div class="dropdown-menu w-xl animated fadeInUp">
                    <div class="panel">
                        <div id="notification_list" class="list-group">
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14814" class="media list-group-item">
                                <span class="block m-b-none">
                                    Lê Thị Mỹ Tiên (Số điện thoại: 946560897) đã thanh toán 2,341,000đ cho ĐH-2025 bao gồm: -Dịch vụ: Đốt mụn thịt (1),Chăm sóc da chuyên sâu (1) -Sản phẩm: Cream B5 laroch 40ml (1),Serum Oh! Oh!
                                    (1),Megaduo (1) <small class="text-muted text-italic text-xs pull-right">7 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14803" class="media list-group-item">
                                <span class="block m-b-none">
                                    Quách Thị Thanh Yến Nhi (Số điện thoại: 0345569849) đã thanh toán 390,000đ cho ĐH-2024 bao gồm: -Sản phẩm: Cream B5 laroch 40ml (1)
                                    <small class="text-muted text-italic text-xs pull-right">7 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14792" class="media list-group-item">
                                <span class="block m-b-none">
                                    Nguyễn Thị Giang (Số điện thoại: 0397277889) đã thanh toán 3,000,000đ cho ĐH-2023 bao gồm: -Dịch vụ: Phun mày shading (1),Phun môi Tế bào gốc (1)
                                    <small class="text-muted text-italic text-xs pull-right">7 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14781" class="media list-group-item">
                                <span class="block m-b-none">
                                    Mary Pearl Acain Guirgio (Số điện thoại: 0944390462) đã thanh toán 1,720,000đ cho ĐH-2022 bao gồm: -Dịch vụ: Phun môi collagen (1),Khử thâm (1),chăm sóc da cơ bản (1)
                                    <small class="text-muted text-italic text-xs pull-right">7 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14771" class="media list-group-item">
                                <span class="block m-b-none">
                                    Nguyễn Thị Bích Hằng (Số điện thoại: 912377445) đã thanh toán 1,000,000đ cho ĐH-2021 bao gồm: -Dịch vụ: Laser Hồng Môi Kết Hợp Phủ Nano (1)
                                    <small class="text-muted text-italic text-xs pull-right">7 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14761" class="media list-group-item">
                                <span class="block m-b-none">
                                    Nguyễn Thị Thanh Lan (Số điện thoại: ) đã thanh toán 890,000đ cho ĐH-2020 bao gồm: -Sản phẩm: serum rilastil (1) <small class="text-muted text-italic text-xs pull-right">7 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14751" class="media list-group-item">
                                <span class="block m-b-none">
                                    Trần Thị Bé (Số điện thoại: 774561188) đã thanh toán 4,200,000đ cho ĐH-2019 bao gồm: -Dịch vụ: Phun mày pha lê (1),Laser hồng môi- Phủ màu TBG (1)
                                    <small class="text-muted text-italic text-xs pull-right">8 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14741" class="media list-group-item">
                                <span class="block m-b-none">
                                    Nguyễn Thị Lệ Hòa (Số điện thoại: 773425367) đã thanh toán 3,000,000đ cho ĐH-2018 bao gồm: -Dịch vụ: Phun mày pha lê (1),Laser hồng môi- Phủ màu TBG (1)
                                    <small class="text-muted text-italic text-xs pull-right">8 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14731" class="media list-group-item">
                                <span class="block m-b-none">
                                    Tôn Nữ Phương Anh (Số điện thoại: 981832146) đã thanh toán 2,350,000đ cho ĐH-2017 bao gồm: -Dịch vụ: Phun Mày Kết Hợp Điêu Khắc (1)
                                    <small class="text-muted text-italic text-xs pull-right">8 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14721" class="media list-group-item">
                                <span class="block m-b-none">
                                    Tôn Nữ Phương Anh (Số điện thoại: 981832146) đã thanh toán 200,000đ cho ĐH-2016 bao gồm: -Dịch vụ: Cọc giữ gói ưu đãi (1)
                                    <small class="text-muted text-italic text-xs pull-right">8 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14711" class="media list-group-item">
                                <span class="block m-b-none">
                                    Nguyễn Ngọc Ánh (Số điện thoại: ) đã thanh toán 220,000đ cho ĐH-2015 bao gồm: -Dịch vụ: chăm sóc da cơ bản (1) <small class="text-muted text-italic text-xs pull-right">8 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14701" class="media list-group-item">
                                <span class="block m-b-none">
                                    Trần Khánh Băng (Số điện thoại: 972177630) đã thanh toán 2,250,000đ cho ĐH-2014 bao gồm: -Dịch vụ: Laser hồng môi- Phủ màu TBG (1)
                                    <small class="text-muted text-italic text-xs pull-right">8 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14691" class="media list-group-item">
                                <span class="block m-b-none">
                                    Nguyễn Thị Minh Thúy (Số điện thoại: ) đã thanh toán 890,000đ cho ĐH-2013 bao gồm: -Sản phẩm: serum rilastil (1) <small class="text-muted text-italic text-xs pull-right">8 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14681" class="media list-group-item">
                                <span class="block m-b-none">
                                    Hoàng Nguyễn Hồng Vân (Số điện thoại: ) đã thanh toán 1,200,000đ cho ĐH-2012 bao gồm: -Dịch vụ: Đốt mụn thịt (1),chăm sóc da cơ bản (1)
                                    <small class="text-muted text-italic text-xs pull-right">8 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14671" class="media list-group-item">
                                <span class="block m-b-none">
                                    Hồ Thị Như Thủy (Số điện thoại: 935615596) đã thanh toán 2,500,000đ cho ĐH-2011 bao gồm: -Dịch vụ: Laser hồng môi- Phủ màu TBG (1)
                                    <small class="text-muted text-italic text-xs pull-right">8 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14661" class="media list-group-item">
                                <span class="block m-b-none">
                                    Trương Thị Thảo (Số điện thoại: ) đã thanh toán 1,350,000đ cho ĐH-2010 bao gồm: -Dịch vụ: Laser Hồng Môi Kết Hợp Phủ Nano (1),Khử thâm (1)
                                    <small class="text-muted text-italic text-xs pull-right">8 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14651" class="media list-group-item">
                                <span class="block m-b-none">
                                    Hoàng Thị Mỹ (Số điện thoại: 941346660) đã thanh toán 1,350,000đ cho ĐH-2009 bao gồm: -Dịch vụ: Laser Hồng Môi Kết Hợp Phủ Nano (1),Khử thâm (1)
                                    <small class="text-muted text-italic text-xs pull-right">8 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14641" class="media list-group-item">
                                <span class="block m-b-none">
                                    Thân Thị Bích Ngọc (Số điện thoại: 775547741) đã thanh toán 2,700,000đ cho ĐH-2008 bao gồm: -Dịch vụ: Laser hồng môi- Phủ màu TBG (1),Khử thâm (1)
                                    <small class="text-muted text-italic text-xs pull-right">8 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14631" class="media list-group-item">
                                <span class="block m-b-none">
                                    Dương Hoài Giang (Số điện thoại: ) đã thanh toán 1,350,000đ cho ĐH-2007 bao gồm: -Dịch vụ: Laser Hồng Môi Kết Hợp Phủ Nano (1),Khử thâm (1)
                                    <small class="text-muted text-italic text-xs pull-right">8 giờ trước</small>
                                </span>
                            </a>
                            <a href="https://lima.myspa.vn/Notification/mark_as_read_notification/14611" class="media list-group-item">
                                <span class="block m-b-none">
                                    Trần Thị Ngọc Lan (Số điện thoại: 843440037) đã thanh toán 900,000đ cho ĐH-2005 bao gồm: -Dịch vụ: Phun mí Eyeliner (1)
                                    <small class="text-muted text-italic text-xs pull-right">1 ngày trước</small>
                                </span>
                            </a>
                        </div>
                        <input type="hidden" id="unload_noti" value="0" />
                        <div class="panel-footer text-sm all-noti">
                            <a href="https://lima.myspa.vn/Notification/notification_list" data-toggle="class:show animated fadeInRight"><i class="icon icon-bell"></i> Xem toàn bộ thông báo </a>
                            <button onclick="notification_readed()" class="btn btn-xs btn-primary pull-right btn-readed"><i class="icon icon-check"></i> Đã đọc</button>
                        </div>
                    </div>
                </div>
                <!-- / dropdown -->
            </li> --}}
        </ul>
        <!-- / navbar right -->
        <!-- search form -->
        {{-- <form class="navbar-form navbar-right shift">
            <div class="form-group">
                <input type="text" id="customer_info" data-omicall="true" class="form-control input-sm bg-light no-border rounded padder" placeholder="Tìm nhanh KH..." />
            </div>
        </form> --}}
        <!-- / search form -->
        {{-- <a href="https://lima.myspa.vn/ManageOrder/add_order" class="btn btn-sm btn-success add_res_nav_btn pull-right rounded-right m-t-sm m-b-sm shortcut-btn">Tạo đơn hàng</a> --}}

        {{-- <a href="https://lima.myspa.vn/ManageUser/add_member" class="btn btn-sm btn-primary add_res_nav_btn pull-right rounded-left m-t-sm m-b-sm shortcut-btn">Thêm KH</a> --}}
        <a href="https://lima.myspa.vn/ManageOrder/add_order" class="btn btn-sm btn-success add_res_nav_icon_btn pull-right rounded-right m-t-sm m-b-sm shortcut-btn" style="display: none;"><i class="icon-grid icon"></i></a>

        <a href="https://lima.myspa.vn/ManageUser/add_member" class="btn btn-sm btn-primary add_res_nav_icon_btn pull-right rounded-left m-t-sm m-b-sm shortcut-btn" style="display: none;"><i class="icon-users icon"></i></a>
    </div>
    <!-- / navbar collapse -->
