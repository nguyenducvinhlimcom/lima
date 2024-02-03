    @extends('admin.layouts.app')

    @section('content')
        <div class="app-content-body ">
        <div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
            app.settings.asideFolded = false;
            app.settings.asideDock = false;
            ">
            <!-- main -->
            <div class="col-lg-12 page-content">
                <div class="col-md-12">
                    <!-- tasks -->
                    <style>
                    .signature-customer {
                    visibility: hidden;
                    opacity: 0;
                    transition: all .3s ease-in-out;
                    max-width: 500px;
                    max-height: 500px;
                    margin: auto;
                    bottom: 0;
                    right: 0;
                    }
                    .panel.news-item{
                    /* background-color: #fff0a9; */
                    border-radius: 10px;
                    box-shadow: 0 0 15px #a59696!important;
                    text-align: center;
                    }
                    .news-item .news-title {
                    margin-top: 0px;
                    }
                    .news-item .news-footer {
                    margin-top: 10px;
                    text-align: right;
                    }
                    .panel-dashboard-news {
                    background-color: #fff0a9;
                    }
                    .icon-fa-plus {
                    color: #ffffff !important;
                    background-color: #7266ba;
                    border-color: #7266ba;
                    border-radius: 50px;
                    padding: 11px 12px;
                    }
                    .icon-container {
                    width: 40px;
                    height: 40px;
                    position: relative;
                    }
                    .status-circle {
                    width: 15px;
                    height: 15px;
                    border-radius: 50%;
                    background-color: #abd373;
                    border: 2px solid white;
                    bottom: 0;
                    right: 0;
                    position: absolute;
                    margin: 0;
                    }
                    .hidden {
                    display: none!important;
                    }
                    .activities-panel {
                    height: 100%;
                    }
                    .tab-pane .list-group-item{
                    padding: 0;
                    }
                    @media (min-width: 992px) {
                    .activities-panel {
                    width: 16.66666667%;
                    position: absolute;
                    right: 0px;
                    }
                    }
                    @media (max-width: 992px) {
                    .activities-panel {
                    margin-left:15px;
                    margin-right:15px;
                    }
                    }
                    .spinner2 {
                    height: 22px;
                    width: 22px;
                    margin: auto;
                    display: flex;
                    float:right;
                    -webkit-animation: rotation .6s infinite linear;
                    -moz-animation: rotation .6s infinite linear;
                    -o-animation: rotation .6s infinite linear;
                    animation: rotation .6s infinite linear;
                    border-left: 6px solid rgba(0, 174, 239, .15);
                    border-right: 6px solid rgba(0, 174, 239, .15);
                    border-bottom: 6px solid rgba(0, 174, 239, .15);
                    border-top: 6px solid rgba(0, 174, 239, .8);
                    border-radius: 100%;
                    }
                    /* using for Chrome, Safari, Opera */
                    @-webkit-keyframes rotate-button {
                    from {
                    -webkit-transform:rotate(0deg);
                    -moz-transform:rotate(0deg);
                    -o-transform:rotate(0deg);
                    }
                    to {
                    -webkit-transform:rotate(-360deg);
                    -moz-transform:rotate(-360deg);
                    -o-transform:rotate(-360deg);
                    }
                    }
                    /* Standard syntax */
                    @keyframes rotate-button {
                    from {
                    -webkit-transform:rotate(0deg);
                    -moz-transform:rotate(0deg);
                    -o-transform:rotate(0deg);
                    }
                    to {
                    -webkit-transform:rotate(-360deg);
                    -moz-transform:rotate(-360deg);
                    -o-transform:rotate(-360deg);
                    }
                    }
                    </style>
                    <!-- <marquee style="background:#f23a3a; color:yellow; font-size:2rem " scrollamount="8" direction="left" onmouseover="this.stop()" onmouseout="this.start()">Myspa xin thông báo: Do lượng truy cập tăng đột biến, chúng tôi sẽ mở rộng hạ tầng server. Quá trình diễn ra bắt đầu từ lúc 12:30 ngày 13/08/2022, dự kiến hoàn thành vào lúc 13:00 ngày 13/08/2022. Trong thời gian này quý khách tạm thời không truy cập được vào phần mềm. Myspa khuyến nghị quý vị hoàn thành thao tác trên phần mềm trước 12:30. Mọi thông tin, data dữ liệu sẽ được bảo đảm an toàn. Trân trọng!</marquee> -->
                    <div class="row">
                    <div class="col-md-10">
                        <!-- tasks -->
                        <div class="panel wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="pull-left mg-t-10">Xin chào {{  config('app.name')  }}!</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    <script language='javascript'>
                    var TYPE_CHECK = 1;
                    var SET_TIME = 10; // seconds
                    var OPEN_CHECK = false;

                    staff_list = [{"id":"3","uid":"236","staff_code":"00003","comment":"","deleted":"0","booking_online":"0","salary_hour":"0","salary_shift":"0","is_agency":"0","uid_agency_id":null,"fullname":"Vi Th\u1ecb H\u1ea3i Y\u1ebfn","user_group_id":"|6|","stage_name":"","image":""},{"id":"6","uid":"243","staff_code":"00006","comment":"K\u1ebf to\u00e1n V\u0169ng t\u00e0u","deleted":"0","booking_online":"0","salary_hour":"0","salary_shift":"0","is_agency":"0","uid_agency_id":null,"fullname":"V\u0169 Th\u1ecb Xoan","user_group_id":"|7|","stage_name":"","image":""},{"id":"7","uid":"244","staff_code":"00007","comment":"K\u1ebf to\u00e1n T\u1ed5ng h\u1ee3p","deleted":"0","booking_online":"1","salary_hour":"0","salary_shift":"0","is_agency":"0","uid_agency_id":null,"fullname":"Tr\u01b0\u01a1ng Qu\u1ef3nh Lai","user_group_id":"|7|","stage_name":"","image":"20230826170836.jpg"},{"id":"8","uid":"265","staff_code":"00008","comment":"","deleted":"0","booking_online":"1","salary_hour":"0","salary_shift":"0","is_agency":"0","uid_agency_id":null,"fullname":"CH\u0102M S\u00d3C KH\u00c1CH H\u00c0NG","user_group_id":"|5|6|4|","stage_name":"","image":""},{"id":"9","uid":"1188","staff_code":"00009","comment":"","deleted":"0","booking_online":"1","salary_hour":"0","salary_shift":"0","is_agency":"0","uid_agency_id":null,"fullname":"Sales Phun X\u0103m","user_group_id":"|6|4|","stage_name":"","image":""},{"id":"10","uid":"1189","staff_code":"00010","comment":"","deleted":"0","booking_online":"1","salary_hour":"0","salary_shift":"0","is_agency":"0","uid_agency_id":null,"fullname":"Sales Da Li\u1ec5u","user_group_id":"|6|4|","stage_name":"","image":""},{"id":"11","uid":"1190","staff_code":"00011","comment":"","deleted":"0","booking_online":"1","salary_hour":"0","salary_shift":"0","is_agency":"0","uid_agency_id":null,"fullname":"Quan H\u1ec7 Kh\u00e1ch H\u00e0ng","user_group_id":"|3|6|4|","stage_name":"","image":""},{"id":"12","uid":"1425","staff_code":"00012","comment":"","deleted":"0","booking_online":"1","salary_hour":"0","salary_shift":"0","is_agency":"0","uid_agency_id":null,"fullname":"Tr\u01b0\u01a1ng Th\u1ecb Qu\u1ef3nh Lai","user_group_id":"|7|","stage_name":"","image":"20230901154008.jpg"},{"id":"13","uid":"1447","staff_code":"00013","comment":"","deleted":"0","booking_online":"1","salary_hour":"0","salary_shift":"0","is_agency":"0","uid_agency_id":null,"fullname":"Lim A- B\u1eafc Giang","user_group_id":"|6|","stage_name":"","image":""},{"id":"14","uid":"1524","staff_code":"00014","comment":"T\u00e0i kho\u1ea3n thao t\u00e1c ph\u00f2ng quan h\u1ec7 kh\u00e1ch h\u00e0ng","deleted":"0","booking_online":"1","salary_hour":"0","salary_shift":"0","is_agency":"0","uid_agency_id":null,"fullname":"Quan h\u1ec7 kh\u00e1ch h\u00e0ng","user_group_id":"|14|","stage_name":"","image":""}];    setting_shift_list = [{"id":"1","name":"S\u00e1ng","time_start":"08:00","time_end":"12:00","deleted":"0"},{"id":"2","name":"Chi\u1ec1u","time_start":"13:00","time_end":"17:00","deleted":"0"},{"id":"3","name":"T\u1ed1i","time_start":"18:00","time_end":"22:00","deleted":"0"}];
                    $(function () {
                    // Active menu
                    active_nav_menu('dashboard');

                    //       var date_end_plan_warning = new Date(//);
                    //       var date_now_plan = new Date();
                    //       if (date_now_plan >= date_end_plan_warning){
                    //           Notify('Sắp hết hạn hợp đồng sử dụng dịch vụ vui lòng liên hệ Hotline, viber, zalo:<br> <b>0935 666 158</b> hoặc <b>0899 455 223</b> để được hỗ trợ gia hạn hợp đồng sử dụng dịch vụ.','warning');
                    //       }
                        $('#appointment_1,#appointment_2,#appointment_3').on('scroll', function (e) {
                            let currentScroll   = $(this).scrollTop();
                            let lastScroll      = $(this)[0].scrollHeight - 220;
                            let segment         = $(this).find('.media').length;
                            let id              = $(this).attr('data-id');
                            let _this           = $(this);
                            // _this.animate({scrollTop: currentScroll - 300}, 10);
                            if (id == 1) {
                                date_time = '2023-09-04'
                            }
                            if (id == 2) {
                                date_time = '2023-09-05'
                            }
                            if (id == 3) {
                                date_time = '2023-09-06'
                            }
                            if(currentScroll >= lastScroll) {
                                $.ajax({
                                    url: BASE_URL+"Dashboard/get_appointment",
                                    type: "get",
                                    dataType: 'json',
                                    data: {
                                        get_appointment: 'yes',
                                        segment: segment,
                                        date_time: date_time
                                    },
                                    success: function (data) {
                                        if (typeof(data) == 'object') {
                                            data_obj = data;
                                            if(data_obj.length > 0 ){
                                                append_appointment_list(data_obj,_this);
                                            }
                                        }
                                    }
                                });
                            }
                        })
                        $("#myModal_checkOut, #modal_checkIn").on("hidden.bs.modal", function () {
                            OPEN_CHECK = false;
                        });
                        $('#checkin_btn,#checkout_btn').click(function(){
                            var uid = '4';
                            searchFinger(uid);
                        });

                        $('#select_shift_checkin').change(function(){
                            var uid = $('#select_staff_checkin').val();
                            searchFinger(uid);
                        });

                        $("#show-all-checked-staff").on("click", function() {

                            if ($(this).attr("data-status") == "hide") {
                                $(".hidden-user").removeClass("hidden");
                                $(".hidden-count").addClass("hidden");
                                $(this).attr("data-status", "show");
                            } else {
                                $(".hidden-user").addClass("hidden");
                                $(".hidden-count").removeClass("hidden");
                                $(this).attr("data-status", "hide");
                            }
                        })
                    });
                    function searchFinger(uid){
                        if (!OPEN_CHECK) return;
                        let shift_id = 0;
                                    if (TYPE_CHECK == 1) {
                                if ($('#select_shift_checkin').val() == '') {
                                    return;
                                } else {
                                    if ($('#select_staff_checkin').val() == '') {
                                        return;
                                    }
                                }
                            }
                            shift_id = $('#select_shift_checkin').val();
                                $.ajax({
                            url: "https://lima.myspa.vn/ManageWorkingTime/check_finger",
                            type: "post",
                            dataType: 'json',
                            data: {
                                check_finger: 'yes',
                                uid: uid,
                                type_check: TYPE_CHECK,
                                shift_id: shift_id
                            },
                            success: function (data) {
                                if (typeof(data) == 'object') {
                                    if (data.status == 'ok') {

                                        if (TYPE_CHECK == 1) {
                                            $('#chk_name').empty().append(data.user_info.fullname);
                                            if (data.user_info.image != null && data.user_info.image != '') {
                                                var avatar_src = BASE_URL+'files/'+COMPANY_N+'/avatar/'+data.user_info.image;
                                            } else {
                                                var avatar_src = BASE_URL+'assets/img/default_avatar.jpg';
                                            }
                                            $('#chk_avatar').empty().append('<img src="'+avatar_src+'" class="avatar-150"/>');

                                            $('.checkin-info').hide();
                                            $('.checkedin-info').fadeIn(300);


                                            switch_waiting_screen(1);

                                        } else if (TYPE_CHECK == 2) {
                                            $('#chkout_name').empty().append(data.user_info.fullname);
                                            if (data.user_info.image != null && data.user_info.image != '') {
                                                var avatar_src = BASE_URL+'files/'+COMPANY_N+'/avatar/'+data.user_info.image;
                                            } else {
                                                var avatar_src = BASE_URL+'assets/img/default_avatar.jpg';
                                            }
                                            $('#chkout_avatar').empty().append('<img src="'+avatar_src+'" class="avatar-150"/>');

                                            $('.checkout-info').hide();
                                            $('.checkedout-info').fadeIn(300);

                                            switch_waiting_screen(2);
                                        }

                                    } else {
                                        alert(data.message);
                                    }
                                    global_checkout = [];
                                }
                            }
                        });
                        return false;
                    }

                    var f_setTimeout;
                    function switch_waiting_screen(type){
                        clearTimeout(f_setTimeout);
                        if (type == 1) {
                            f_setTimeout = setTimeout(function(){
                                $('.checkin-info').fadeIn(500);
                                $('.checkedin-info').hide();
                            },(1000*SET_TIME));
                        } else if (type == 2) {
                            f_setTimeout = setTimeout(function(){
                                $('.checkout-info').fadeIn(500);
                                $('.checkedout-info').hide();
                            },(1000*SET_TIME));
                        }

                    }

                    function append_appointment_list(obj,_this) {
                        var str = '';
                        if (obj && obj.length > 0){
                            for(var i = 0; i < obj.length; i++){
                                let color = '363f44';
                                if (obj[i].color_level.color != 'undefined') {
                                    color = obj[i].color_level.color;
                                }
                                let start_time = obj[i].start.split(' ');
                                let end_time = obj[i].end.split(' ');
                                str += '<div class="media">';
                                str += '    <span class="pull-left thumb-md">';
                                                    str += '    <img class="thumb-sm img-circle" src="https://lima.myspa.vn/assets/img/default_avatar.jpg"';
                                                str += '       alt="..."></span>';
                                str += '    <div class="media-body">';
                                str += '        <div class="pull-right text-center text-muted">';
                                str += '            <small class="label bg-light">'+(start_time[1].split(':'))[0]+':'+(start_time[1].split(':'))[1]+'-'+(end_time[1].split(':'))[0]+':'+(end_time[1].split(':'))[1]+'</small>';
                                str += '        </div>';
                                str += '        <span style="color:#'+color+'" class="block">'+(obj[i].fullname != null ? obj[i].fullname : "Khách lẻ")+'</span>';
                                str += '        <span class="block">'+(obj[i].telephone != null ? obj[i].telephone : "")+'</span>';
                                str += '        <small class="block">';
                                                    let status_name = obj[i].status_data.status_vie;
                                                    if (obj[i].status == 0) {
                                    str += '        <button class="btn btn-xs btn-rounded" style="background-color:'+obj[i].status_data.color+';color:#FFFFFF">';
                                    str += '           '+status_name+'</button>';
                                } else {
                                    str += '        <label class="btn-xs rounded" style="background-color:'+obj[i].status_data.color+';color:#FFFFFF">';
                                    str += '           '+status_name+'</label>';
                                }

                                str += '        </small>';
                                str += '    </div>';
                                str +='</div>';
                                str +='<div class="line pull-in"></div>';
                            }
                        }
                        _this.append(str);
                    }
                    function change_appointment_status(apt_id){
                        var check = confirm('Đổi trạng thái thành "đã xác nhận"');
                        if (check == true) {
                            $.ajax({
                                url: "https://lima.myspa.vn/ManageAppointment/change_appointment_status",
                                type: "post",
                                data: {
                                    apt_id:apt_id
                                },
                                success: function (option) {
                                    location.reload();
                                }
                            });
                        }
                    }
                    </script>
                    <!-- / tasks -->
                </div>
            </div>
            <!-- / main -->
        </div>
        </div>
    @endsection


