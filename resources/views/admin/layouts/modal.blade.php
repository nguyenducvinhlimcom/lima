<div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="border: none;">
        <style>
            .anim-box {
                position: relative;
                width: 50px;
                height: 41px;
                padding: 4px 5px;
            }

            /* adds the 4 corners */
            .anim-box:before,
            .anim-box:after,
            .anim-box > :first-child:before,
            .anim-box > :first-child:after {
                position: absolute;
                width: 10%;
                height: 15%;
                border-color: white;
                border-style: solid;
                content: " ";
            }

            /* top left corner */
            .anim-box:before {
                top: 0;
                left: 0;
                border-width: 2px 0 0 2px;
            }

            /* top right corner */
            .anim-box:after {
                top: 0;
                right: 0;
                border-width: 2px 2px 0 0;
            }

            /* bottom right corner */
            .anim-box > :first-child:before {
                bottom: 0;
                right: 0;
                border-width: 0 2px 2px 0;
            }

            /* bottom left corner */
            .anim-box > :first-child:after {
                bottom: 0;
                left: 0;
                border-width: 0 0 2px 2px;
            }

            /* barcode bars */
            .anim-item {
                display: inline-block;
                background-color: white;
                height: 30px;
            }

            .anim-item-sm {
                width: 1px;
                margin-right: 1px;
            }

            .anim-item-md {
                width: 2px;
                margin-right: 0px;
            }

            .anim-item-lg {
                width: 3px;
                margin-right: 1.5px;
            }

            /* animated laser beam */
            .scanner {
                width: 100%;
                height: 3px;
                background-color: red;
                opacity: 0.7;
                position: absolute;
                box-shadow: 0px 0px 8px 10px rgba(170, 11, 23, 0.49);
                top: 50%;
                animation-name: scan-qr-code;
                animation-duration: 4s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
                animation-play-state: paused;
            }

            .inp_qr_hidden {
                opacity: 0;
                width: 0;
                height: 0;
                position: absolute;
            }

            @keyframes scan-qr-code {
                0% {
                    box-shadow: 0px 0px 8px 10px rgba(170, 11, 23, 0.49);
                    top: 50%;
                }
                25% {
                    box-shadow: 0px 6px 8px 10px rgba(170, 11, 23, 0.49);
                    top: 4px;
                }
                75% {
                    box-shadow: 0px -6px 8px 10px rgba(170, 11, 23, 0.49);
                    top: 80%;
                }
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#scan_qr_box").on("click", function () {
                    scanner = $("#scan_qr_box").find(".scanner");

                    if (scanner.hasClass("active")) {
                        scanner.css("-webkit-animation-play-state", "paused");
                        scanner.removeClass("active");
                    } else {
                        scanner.css("-webkit-animation-play-state", "running");
                        scanner.addClass("active");
                        $("#inp_qr_all").val("");
                        $("#inp_qr_all").focus();
                    }
                });

                // $('#inp_qr_all').on('focusout', function(){
                //     scanner = $('#scan_qr_box').find('.scanner')
                //     scanner.css("-webkit-animation-play-state", "paused");
                //     scanner.removeClass('active')
                // });

                $("body").on("click", function (evt) {
                    if ($(evt.target).closest("#scan_qr_box").length == 0) {
                        scanner = $("#scan_qr_box").find(".scanner");
                        scanner.css("-webkit-animation-play-state", "paused");
                        scanner.removeClass("active");
                    }
                });

                $("#inp_qr_all").on("change", function () {
                    try {
                        var path_url = window.location.pathname;
                        if (path_url == "/ManageOrder/add_order") {
                            $(this).val($(this).val() + ";");
                            arr_code = $(this)
                                .val()
                                .split(";")
                                .filter((element) => element);
                            scanProductableOnOrder(arr_code[arr_code.length - 1]);
                        } else {
                            scanAll($(this).val());
                        }
                    } catch (error) {
                        console.log("Error Scan QR CODE: ", error);
                    }
                });

                function scanProductableOnOrder(scan_code) {
                    if (scan_code.startsWith("DV-")) {
                        //Service
                        service_id = parseInt(scan_code.replace("DV-", ""));
                        $('.list-services > li[value="' + service_id + '"][class!="relative hide"]:first').trigger("click");
                    } else if (scan_code.startsWith("TT-")) {
                        //Prepay Card
                    } else if (scan_code.startsWith("TLT-")) {
                        //Combo
                    } else {
                        product = $('.list-products > li[class="cls-relative sku-' + scan_code + ' "]:first');
                        if (!product.hasClass("hide")) {
                            product.trigger("click");
                        }
                    }

                    scanner = $("#scan_qr_box").find(".scanner");
                    scanner.css("-webkit-animation-play-state", "running");
                    scanner.addClass("active");

                    return false;
                }

                function scanAll(scan_code) {
                    var inp = JSON.parse(scan_code);
                    if (inp.appointment_id) {
                        url = "/ManageAppointment/show/" + btoa(inp.appointment_id);
                    } else if (inp.order_id) {
                        url = "/ManageOrder/add_order?order_id=" + btoa(inp.order_id);
                    } else {
                        $.ajax({
                            url: BASE_URL + "ManageUser/get_member_for_qr",
                            type: "post",
                            dataType: "json",
                            async: false,
                            data: {
                                telephone: inp.customer_telephone,
                            },
                            success: function (data) {
                                if (data == false) {
                                    alert("Không tìm thấy số điện thoại");
                                    url = "";
                                } else {
                                    url = "/ManageUser/edit_member?member_id=" + btoa(data);
                                }
                            },
                        });
                    }
                    window.location.href = BASE_URL + (url ?? "");
                }
            });
        </script>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
