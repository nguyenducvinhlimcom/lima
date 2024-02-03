/**
 *  4/21/17.
 */
const ROOT_USER_ID = 1;


$(function(){
    /*------ Button save effect ------*/
    $('button').filter("[name='submit_form']").click(function(){
        $(this).removeClass('fa');
        $(this).css('font-size','18px');
        $(this).text('Saving...');
        $(this).css('pointer-events','none');
        $(this).css('opacity','0.5');
    });
    $('.check_number').on('keydown', '', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||(/65|67|86|88/.test(e.keyCode)&&(e.ctrlKey===true||e.metaKey===true))&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
    $("form input, form select").keypress(function (e) {
        if ($(this).parents('form').find('button[type=submit], input[type=submit]').length <= 0)
            return true;

        if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
            $(this).parents('form').find('button[type=submit], input[type=submit]').click();
            return false;
        } else {
            return true;
        }
    });


    currency_formatter();

    $('.avatar-form').find(".avatar-save").click(function(){
        if ($('.avatar-form').find('#avatarInput').val() !== ''){
            $(this).text('Waiting...');
            $(this).css('opacity','0.5');
        }
    });
    $('.avatar-view').click(function(){
        // $('.avatar-form').find(".avatar-save").text(image_crop_label);
        $('.avatar-form').find(".avatar-save").css('opacity','1');
    });
    /* ---------- Gen js ---------- */
    $('[data-rel="select2"]').select2();
    //$('[data-toggle="popover"]').popover();
    $('[data-toggle="tooltip"]').tooltip();
    //
    $('.time_start_info_company').datetimepicker({
        format: 'HH:mm',
        locale: moment.locale(moment_locale),
    });
    $('.time_end_info_company').datetimepicker({
        format: 'HH:mm',
        locale: moment.locale(moment_locale),
    });
    /* ------ DatePicker ------*/
    $( ".datepicker" ).datetimepicker({
        format:'DD/MM/YYYY',
        ignoreReadonly:true,
        locale: moment.locale(moment_locale)
    });
    $( ".datetime" ).datetimepicker({ignoreReadonly:true,locale: moment.locale(moment_locale)});

    /* ------ Datetime ------*/
    $('#date_start').datetimepicker({
        format:'DD/MM/YYYY',
        ignoreReadonly:true,
        locale: moment.locale(moment_locale),
    });

    //$('.company-progress').hover(
    //    function(mouseenter) {
    //        $('.progress-label').removeClass('invisible');
    //    },
    //    function(mouseleave) {
    //        $('.progress-label').addClass('invisible');
    //    }
    //)

    // prevent browser autocomplete
    $('input[type=text]').attr('autocomplete','off');
    $('input[id=date_start]').attr('autocomplete','off').tooltip({title: lang['from_date']});
    $('input[id=date_end]').attr('autocomplete','off').tooltip({title: lang['to_date']});

    $('#date_end').datetimepicker({
        format:'DD/MM/YYYY',
        ignoreReadonly:true,
        useCurrent: false, //Important! See issue #1075
        locale: moment.locale(moment_locale),
    });
    $("#date_start").on("dp.change", function (e) {
        $('#date_end').data("DateTimePicker").minDate(e.date);
    });


    $("#date_end").on("dp.change", function (e) {
        $('#date_start').data("DateTimePicker").maxDate(e.date);

    });

    $("#date_end").on("dp.show", function (e) {
        showDpButtonFilter();
    });
    $("#date_start").on("dp.show", function (e) {
        showDpButtonFilter();
    });

    // stringee click
    $(document).on('click','.stringee-btn-call-popup',function(){
        let isStringee = $(this).attr('data-stringee');
        let userName = $(this).attr('data-username');
        let displayNumber = $(this).attr('data-displaynumber');
        let internal = $(this).attr('data-internal');
        let callTo = $(this).attr('data-callTo');
        if(isStringee == "true"){
            let userId = ($(this).attr('data-uid'));
            if(confirm(lang['stringee_ask_make_call']+userName+" ("+displayNumber+") ?")){

                params  = 'width='+screen.width;
                params += ', height='+screen.height;
                params += ', fullscreen=yes';
                params += ', directories=no';
                params += ', location=no';
                params += ', menubar=no';
                params += ', resizable=no';
                params += ', scrollbars=no';
                params += ', status=no';
                params += ', toolbar=no';
                let stringee_popup_window = window.open(BASE_URL+"stringee/ManageStringee/call_ui?callTo="+callTo+"&internal="+internal, "popUpWindow", params);;
                stringee_popup_window.moveTo(0,0);
                if (window.focus) {stringee_popup_window.focus()}
            }
        }
        return
    });

    // omicall click
    $(document).on('click','.omicall-btn-call',function(){
        let isOmicall = $(this).attr('data-omicall');
        let userName = $(this).attr('data-username');
        // let displayNumber = $(this).attr('data-displaynumber');
        // let internal = $(this).attr('data-internal');
        let callTo = $(this).attr('data-callTo');
        const task = async () => {
            await omiSDK.makeCall(callTo)
            omiSDK.updateContactInfo({
                name : userName,
                avatar : "https://thumbs.dreamstime.com/z/cosmos-beauty-deep-space-elements-image-furnished-nasa-science-fiction-art-102581846.jpg"
            });
        }
        if(isOmicall == "true"){
            task();
        }
    });


    // callio click
    $(document).on('click','.callio-btn-call',function(){
        let isCallio = $(this).attr('data-callio');
        let userName = $(this).attr('data-username');
        // let displayNumber = $(this).attr('data-displaynumber');
        // let internal = $(this).attr('data-internal');
        let callTo = $(this).attr('data-callTo');
        const task = async () => {
            CALLIO_API.makeCall(callTo);
        }
        if(isCallio == "true"){
            task();
        }
    });

    $(document).on('click','.active-stringee',function(){
        params  = 'width='+screen.width;
        params += ', height='+screen.height;
        params += ', fullscreen=yes';
        params += ', directories=no';
        params += ', location=no';
        params += ', menubar=no';
        params += ', resizable=no';
        params += ', scrollbars=no';
        params += ', status=no';
        params += ', toolbar=no';
        let stringee_popup_window = window.open(BASE_URL+"stringee/ManageStringee/call_ui", "popUpWindow", params);
        stringee_popup_window.moveTo(0,0);
        if (window.focus) {stringee_popup_window.focus()}
        return
    });

    $('.contract_extension_modal_popup').on('click',function () {
        $(document.querySelector('#modal_contract_extension')).modal('show');
    });

    //Register Brand App
    // $('.register_moba_app').on('click',function () {
    //     $(document.querySelector('#popup_moba_app')).modal('show');
    // });

    // $('.moba_app_register').on('click',function () {
    //     $(document.querySelector('#popup_moba_app_register')).modal('show');
    // });

    // $('#submit_brand_app_register').on('click',function () {
    //     $('#submit_brand_app_register').empty().append('Äang gá»­i...');
    //     $('#submit_brand_app_register').attr('disabled','disabled');
    //     submit_register_brand_app();
    // });

    // function submit_register_brand_app(){
    //     $.ajax({
    //         url: BASE_URL+"MyspaManager/register_brand_app",
    //         type: "post",
    //         dataType: 'json',
    //         data: {
    //             brandapp_company_name: $('#brandapp_company_name').val(),
    //             brandapp_coupon_code: $('#brandapp_coupon_code').val(),
    //             brandapp_company_fullname: $('#brandapp_company_fullname').val(),
    //             brandapp_company_phone: $('#brandapp_company_phone').val(),
    //             brandapp_company_email: $('#brandapp_company_email').val(),
    //             brandapp_company_address: $('#brandapp_company_address').val(),
    //             reg_type: 'ÄÄ‚NG KĂ THIáº¾T Káº¾ APP THÆ¯Æ NG HIá»†U'
    //         },
    //         success: function(res){
    //             var str = '<br><br><h3><i class="icon icon-check text-1x text-success"></i> ÄÄ‚NG KĂ THIáº¾T Káº¾ APP THÆ¯Æ NG HIá»†U THĂ€NH CĂ”NG</h3><p>Cáº£m Æ¡n QuĂ½ khĂ¡ch hĂ ng, chĂºng tĂ´i sáº½ liĂªn há»‡ láº¡i sá»›m nháº¥t cĂ³ thá»ƒ tá»« thá»© hai Ä‘áº¿n thá»© báº£y hĂ ng tuáº§n. TrĂ¢n trá»ng!</p><br><br><br>';
    //             $('#popup_moba_app_register .tab-content .md-content').empty().append(str);
    //             $('#submit_brand_app_register').hide();
    //         }
    //     });
    //     return;
    // }
    //End Register Brand App

    function showDpButtonFilter(){
        let btnToday=  $('<a>',{class:'dp-btn-group col-xs-4',html:
                        $('<span>',{class:'dp-btn dp-today-button',text:lang['today']}) });

        let btnYesterday = $('<a>',{class:'dp-btn-group col-xs-4',html:
                            $('<span>',{class:'dp-btn dp-yesterday-button',text:lang['yesterday']}) });

        let btnThreeDaysAgo = $('<a>',{class:'dp-btn-group col-xs-4',html:
                                $('<span>',{class:'dp-btn dp-3-ago-button',text:lang['three_days_ago']}) });

        let btnSevenDaysAgo = $('<a>',{class:'dp-btn-group col-xs-4',html:
                                $('<span>',{class:'dp-btn dp-7-ago-button',text:lang['seven_days_ago']}) });

        let btnLastMonth = $('<a>',{class:'dp-btn-group col-xs-4',html:
                                $('<span>',{class:'dp-btn dp-last-month-button',text:lang['last_month']}) });
        let btnThisMonth = $('<a>',{class:'dp-btn-group col-xs-4',html:
                                $('<span>',{class:'dp-btn dp-this-month-button',text:lang['this_month']}) });

        let btnLastThreeMonths = $('<a>',{class:'dp-btn-group col-xs-6',html:
                                $('<span>',{class:'dp-btn dp-last-3-month-button',text:lang['last_three_months']}) });

        let btnLastSixMonths = $('<a>',{class:'dp-btn-group col-xs-6',html:
                                $('<span>',{class:' dp-last-6-month-button',text:lang['last_six_months']}) });
        let td_1 = $('<tr>',{html:
            $('<td>', { html: [btnToday,btnThisMonth,btnYesterday] }) });
        let td_2 = $('<tr>',{html:
            $('<td>', { html: [btnThreeDaysAgo,btnSevenDaysAgo,btnLastMonth] }) });
        let td_3 = $('<tr>',{html:
            $('<td>', { html: [btnLastThreeMonths,btnLastSixMonths] }) });



        let dpButtonGroup = $('.bootstrap-datetimepicker-widget').find('.picker-switch').find('.table-condensed').find('tbody');
        dpButtonGroup.append([td_1,td_2,td_3])
    }


    $(document).on('click','.dp-btn-group span',function(){
        let span = $(this);
        var d = new Date();
        var dnow = new Date();

        var fd,td,ds,de;
        if(span.hasClass('dp-today-button')){
            d.setDate(d.getDate());
            fd = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear()  ;
            td = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear() ;
        }
        else if(span.hasClass('dp-yesterday-button')){
            d.setDate(d.getDate() - 1);
            fd = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear()  ;
            td = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear() ;
        }
        else if (span.hasClass('dp-3-ago-button')){
            d.setDate(d.getDate() - 3);
            fd = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear()  ;
            d.setDate(d.getDate() + 3);
            td = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear() ;
        }

        else if(span.hasClass("dp-7-ago-button")){
            d.setDate(d.getDate() - 7);
            fd = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear()  ;
            d.setDate(d.getDate() + 7);
            td = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear() ;
        }

        else if(span.hasClass("dp-last-month-button")){
            d.setMonth(dnow.getMonth()- 1);
            d.setDate(1)
            fd = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear()  ;
            d.setMonth(d.getMonth() + 1);
            d.setDate(0)
            td = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear() ;
        }
        else if(span.hasClass("dp-this-month-button")){
            d.setMonth(dnow.getMonth());
            d.setDate(1)
            fd = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear()  ;
            d.setMonth(dnow.getMonth() + 1)
            d.setDate(0)

            td = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear() ;
        }
        else if(span.hasClass("dp-last-3-month-button")){
            d.setMonth(dnow.getMonth() - 2);
            d.setDate(1)
            fd = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear()  ;
            d.setFullYear(dnow.getFullYear())
            d.setMonth(dnow.getMonth() + 1)
            d.setDate(0)
            td = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear() ;
        }
        else if(span.hasClass("dp-last-6-month-button")){
            d.setMonth(dnow.getMonth() - 5);
            d.setDate(1)
            fd = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear()  ;
            d.setFullYear(dnow.getFullYear())
            d.setMonth(dnow.getMonth() + 1)
            d.setDate(0)
            td = ((d.getDate()<10)?  '0'+d.getDate() : d.getDate()  )  + '/' + ((d.getMonth() + 1<10)?  '0'+(d.getMonth()+1) : d.getMonth()+1  ) + '/'+ d.getFullYear() ;
        }
        ds = fd;
        de = td;
        $('#date_start').val(ds);
        $('#date_end').val(de);
        $('#date_start').data("DateTimePicker").hide();
        $('#date_end').data("DateTimePicker").hide();
    })

    /* ------ Datetime ------*/
    $('#date_start_2').datetimepicker({
        format:'DD/MM/YYYY',
        ignoreReadonly:true,
        locale: moment.locale(moment_locale),
    });
    $('#date_end_2').datetimepicker({
        format:'DD/MM/YYYY',
        ignoreReadonly:true,
        useCurrent: false, //Important! See issue #1075
        locale: moment.locale(moment_locale),
    });
    $("#date_start_2").on("dp.change", function (e) {
        $('#date_end_2').data("DateTimePicker").minDate(e.date);
    });
    $("#date_end_2").on("dp.change", function (e) {
        $('#date_start_2').data("DateTimePicker").maxDate(e.date);
    });

    $('.material-button-toggle').on("click", function () {
        $(this).toggleClass('open');
        $('.option').toggleClass('scale-on');
    });

    /*----- Search Global Customer -----*/
    $("#customer_info").select2({
        placeholder: lang['customer_search_placeholder'],
        formatInputTooShort: function () {
            return lang['inputTooShort'];
        },
        formatNoMatches: function () {
            return lang['inputNoMatches'];
        },
        formatSearching: function () {
            return lang['searching'];
        },
        minimumInputLength: 1,
        ajax: {
            url:  BASE_URL+"ManageUser/search_customer",
            dataType: 'json',
            quietMillis: 250,
            data: function (term, page) { // page is the one-based page number tracked by Select2
                return {
                    q: term, //search term
                    page: page, // page number
                    omicall: $(this).attr('data-omicall'),
                    access_phone,
                };
            },
            results: function (data, page) {
                var more = (page * 15) < data.total_count; // whether or not there are more results available

                // notice we return the value of more so Select2 knows if more results can be loaded
                return { results: data.items, more: more };
            }
        },
        formatResult: repoFormatResult, // omitted for brevity, see the source of this page
        formatSelection: repoFormatSelection, // omitted for brevity, see the source of this page
        dropdownCssClass: "bigdrop", // apply css that makes the dropdown taller
        escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
    });
    /*------ End Search Global Customer ------*/

    /*----- Search Dashboard Customer -----*/
    $("#customer_info_dashboard").select2({
        placeholder: lang['customer_search_placeholder'],
        formatInputTooShort: function () {
            return lang['inputTooShort'];
        },
        formatNoMatches: function () {
            return lang['inputNoMatches'];
        },
        formatSearching: function () {
            return lang['searching'];
        },
        minimumInputLength: 1,
        ajax: {
            url:  BASE_URL+"ManageUser/search_customer",
            dataType: 'json',
            quietMillis: 250,
            data: function (term, page) { // page is the one-based page number tracked by Select2
                return {
                    q: term, //search term
                    page: page, // page number
                    omicall: $(this).attr('data-omicall')
                };
            },
            results: function (data, page) {
                var more = (page * 15) < data.total_count; // whether or not there are more results available

                // notice we return the value of more so Select2 knows if more results can be loaded
                return { results: data.items, more: more };
            }
        },
        formatResult: repoFormatResult, // omitted for brevity, see the source of this page
        formatSelection: repoFormatSelection, // omitted for brevity, see the source of this page
        dropdownCssClass: "bigdrop", // apply css that makes the dropdown taller
        escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
    });
    /*------ End Search Dashboard Customer ------*/

    /*----- Search Local Customer -----*/
    $("#customer_list").select2({
        placeholder: lang['customer_search_placeholder'],
        formatInputTooShort: function () {
            return lang['inputTooShort'];
        },
        formatNoMatches: function () {
            return "<div style='width: 100%'><span style='line-height:26px'>"+lang['inputNoMatches']+"</span><button id='add_new_cus' onclick='assign_new_customer()' class='btn-primary btn-xs' style='float:right'>"+lang['add_new_cus']+"</button></div>";
        },
        formatSearching: function () {
            return lang['searching'];
        },
        minimumInputLength: 1,
        ajax: {
            url:  BASE_URL+"ManageUser/search_customer",
            dataType: 'json',
            quietMillis: 250,
            data: function (term, page) { // page is the one-based page number tracked by Select2
                return {
                    q: term, //search term
                    page: page, // page number
                    except: $('#referral_id').val(),
                    omicall: $(this).attr('data-omicall')
                };
            },
            results: function (data, page) {
                var more = (page * 15) < data.total_count; // whether or not there are more results available

                // notice we return the value of more so Select2 knows if more results can be loaded
                return { results: data.items, more: more };
            }
        },
        formatResult: repoFormatResult, // omitted for brevity, see the source of this page
        formatSelection: repoFormatSelection_2, // omitted for brevity, see the source of this page
        dropdownCssClass: "bigdrop", // apply css that makes the dropdown taller
        escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
    });
    /*------ End Search Local Customer ------*/

    $("#referral_search").select2({
        placeholder: lang['customer_search_placeholder'],
        formatInputTooShort: function () {
            return lang['inputTooShort'];
        },
        formatNoMatches: function () {
            return lang['inputNoMatches'];
        },
        formatSearching: function () {
            return lang['searching'];
        },
        value: $('input#referral_search').val() ,
        minimumInputLength: 1,
        ajax: {
            url:  BASE_URL+"ManageUser/search_customer",
            dataType: 'json',
            quietMillis: 250,
            data: function (term, page) { // page is the one-based page number tracked by Select2
                return {
                    q: term, //search term
                    page: page, // page number
                    except: ($('#cus_id').text()) != '' ? $('#cus_id').text() : $('#uid').val(),
                };
            },
            results: function (data, page) {
                var more = (page * 15) < data.total_count; // whether or not there are more results available

                // notice we return the value of more so Select2 knows if more results can be loaded
                return { results: data.items, more: more };
            }
        },
        formatResult: repoFormatResult, // omitted for brevity, see the source of this page
        formatSelection: repoFormatReferrals, // omitted for brevity, see the source of this page
        dropdownCssClass: "bigdrop", // apply css that makes the dropdown taller
        escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
    });
    /*------ End Search Local Customer ------*/

    /*----- Search Local Customer MBS -----*/
    $('#branch_select2').select2({
        formatInputTooShort: function () {
        return lang['inputTooShort'];
        },
        formatNoMatches: function () {
            return lang['inputNoMatches'];
        },
        formatSearching: function () {
            return lang['searching'];
        }
    })
    $('#room_select2').select2({
        formatInputTooShort: function () {
        return lang['inputTooShort'];
        },
        formatNoMatches: function () {
            return lang['inputNoMatches'];
        },
        formatSearching: function () {
            return lang['searching'];
        }
    })


    $("#customer_list_mbs").select2({
        placeholder: lang['customer_search_placeholder'],
        formatInputTooShort: function () {
            return lang['inputTooShort'];
        },
        formatNoMatches: function () {
            return "<div style='width: 100%'><span style='line-height:26px'>"+lang['inputNoMatches']+"</span><button id='add_new_cus' onclick='assign_new_customer()' class='btn-primary btn-xs' style='float:right'>"+lang['add_new_cus']+"</button></div>";
        },
        formatSearching: function () {
            return lang['searching'];
        },
        minimumInputLength: 1,
        ajax: {
            url:  BASE_URL+"ManageUser/search_customer",
            dataType: 'json',
            quietMillis: 250,
            data: function (term, page) { // page is the one-based page number tracked by Select2
                return {
                    q: term, //search term
                    page: page // page number
                };
            },
            results: function (data, page) {
                var more = (page * 15) < data.total_count; // whether or not there are more results available

                // notice we return the value of more so Select2 knows if more results can be loaded
                return { results: data.items, more: more };
            }
        },
        formatResult: repoFormatResult, // omitted for brevity, see the source of this page
        formatSelection: repoFormatSelection_3, // omitted for brevity, see the source of this page
        dropdownCssClass: "bigdrop", // apply css that makes the dropdown taller
        escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
    });
    /*------ End Search Local Customer MBS ------*/

    /*----- Search Local Customer MBS 2 -----*/
    $("#customer_list_mbs_2").select2({
        placeholder: lang['customer_search_placeholder'],
        formatInputTooShort: function () {
            return lang['inputTooShort'];
        },
        formatNoMatches: function () {
            return lang['inputNoMatches'];
        },
        formatSearching: function () {
            return lang['searching'];
        },
        minimumInputLength: 1,
        ajax: {
            url:  BASE_URL+"ManageUser/search_customer",
            dataType: 'json',
            quietMillis: 250,
            data: function (term, page) { // page is the one-based page number tracked by Select2
                return {
                    q: term, //search term
                    page: page, // page number
                    except: $('#referral_id').val()
                };
            },
            results: function (data, page) {
                var more = (page * 15) < data.total_count; // whether or not there are more results available
                if(data.total_count == 0) {
                    $("#input_cus_name").val('').removeAttr('readonly');
                    $("#input_cus_phone").val('').removeAttr('readonly');
                    $("#input_cus_email").val('').removeAttr('readonly');
                } else {
                    $("#input_cus_name").attr('readonly', true);
                    $("#input_cus_phone").attr('readonly', true);
                    $("#input_cus_email").attr('readonly', true);
                }

                // notice we return the value of more so Select2 knows if more results can be loaded
                return { results: data.items, more: more };
            }
        },
        formatResult: repoFormatResult, // omitted for brevity, see the source of this page
        formatSelection: repoFormatSelection_mbs_2, // omitted for brevity, see the source of this page
        dropdownCssClass: "bigdrop", // apply css that makes the dropdown taller
        escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
    });
    /*------ End Search Local Customer MBS ------*/

    //var screen_width = $( window ).width();
    var top_res = (MERCHANT_APP == 1) ? 0 : 50;

    $('.table').floatThead({
        top: top_res,
        responsiveContainer: function($table){
            return $table.closest(".table-responsive");
        }
    });
    $('.table.noFT-table').floatThead('destroy');


    $('.navbar-nav').click(function(){
        $(document).scrollTop($(window).scrollTop()+1);
    });

    $('.navbar-btn').click(function(){
        $(document).scrollTop($(window).scrollTop()+1);
        if($('.app-header-fixed').hasClass('app-aside-folded')){
            var collapsed = 1;
        }else{
            var collapsed = 0;
        }
        $.ajax({
            url:BASE_URL+"ManageSystem/show_sidebar",
            type:"post",
            data:{'collapsed':collapsed},
            success:function(response){
                console.log(JSON.stringify(response));
                window.dispatchEvent(new Event('resize'));
            },
            error:function(error){
                console.log(JSON.stringify(error));
            }
        })
    })

    // remove auto width of floatThead table in service card
    //$('.no-colgroup').find('colgroup').remove();
    // automatically get input name to paste data of product-sku
    var element_name = '#'+$('#s2id_search_product_id').find('input').attr('id')+'_search';
    $('body').on('paste',element_name,function(){
        setTimeout(function(){
            $(element_name).select();
            element = $('#tab_pro_1 .list-products > li.sku-'+ $.trim($(element_name).val()));
            if(element.length == 1) calculate_order(element,'plus');
        },50);
    });

    $('.print_customer').click(function(){
        var str = '';
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        var hh = String(today.getHours()).padStart(2, '0');
        var ii = String(today.getMinutes()).padStart(2, '0');
        var ss = String(today.getSeconds()).padStart(2, '0');
        today = mm + '/' + dd + '/' + yyyy + ' ' + hh + ':' + ii + ':' + ss;
        loadingText = '<h1 class="text-center" style="font-size:21px;">Loading...</h1>';
        $('#printCustomerNumberModal').modal('show');
        $('.nums_cus').empty().append(loadingText);
        $.ajax({
            url: BASE_URL+"ManageUser/customers_number",
            type: "post",
            dataType: 'json',
            data: {
                get_customers_number: 'yes'
            },
            success: function (result) {
                if (typeof(result) == 'object') {
                    if (result.status == 'ok') {
                        if (result.data) {
                            if (result.data.branch_name != null) {
                                str += '<h3 class="text-center">'+result.data.branch_name+'</h3>';
                            }
                            str += '<h1 class="text-center" style="font-size:45px;"><span style="font-size: 20px">STT/No.:</span> '+result.data.quantity+'</h1>';
                            str += '<h5 class="text-center">NgĂ y in/Print date: '+today+'</h5>';
                            str += '<h5 class="text-center">Há» tĂªn/Name: ...................................................</h5>';
                            str += '<h5 class="text-center">Sá»‘ ÄT/Phone Num: XXXXXX_ _ _ _</h5>';
                            $('.nums_cus').empty().append(str);
                        }
                    }
                }
                setTimeout(function(){
                    $.print('#printCustomerNumberModal');
                }, 1000);
            }
        });
    });
});

$('body').popover({
    selector: '[data-toggle="popover"]',
    trigger: 'focus'
});


// /*------ Get Notification ------*/
// -- use socket to get notification
// ws.onmessage = function(e){
//     if(e.data != ""){
//         var object = JSON.parse(e.data);
//         if(object.type == 'fire_notification'){
//             get_notification();
//         }
//     }
// }

var disable_send_ajax_noti = false;
$('#notification_list').on('scroll', function (e) {
    let currentScroll = $(this).scrollTop();
    let lastScroll = $('#notification_list')[0].scrollHeight - 420;
    let segment = $('#notification_list a').not('.loading_label').length;
    if(currentScroll >= lastScroll) {
        if(disable_send_ajax_noti == false) {
            if( $('#unload_noti').val() == "0") {
                $(this).append("<a class='media loading_label list-group-item'><span class='block m-b-none'>"+lang['searching']+"</span></a>");
                disable_send_ajax_noti = true;
                $.ajax({
                    url: BASE_URL+"Notification/get_notification",
                    type: "get",
                    dataType: 'json',
                    data: {
                        get_notification: 'yes',
                        segment: segment,
                    },
                    success: function (data) {

                        if (typeof(data) == 'object') {
                            $('.loading_label').remove()
                            data_obj = data;
                            disable_send_ajax_noti = false;
                            if(data_obj.length > 0 ){
                                append_notification_list(data_obj);
                            }else {
                                $('#notification_list').append("<a class='media loading_label list-group-item'><span class='block m-b-none'>"+lang["inputNoMatches"]+"</span></a>");
                                $('#unload_noti').val('1');
                            }
                        }
                    }
                });
            }
        }
    }
})

get_notification();

// setInterval(function(){
//     if($('.notification_li').hasClass('open') == false) {
//         get_notification();
//     }
// }, 20000);

function append_notification_list(obj) {
    var str = '';
    if (obj && obj.length > 0){
        for(var i = 0; i < obj.length; i++){
            str += '<a href="'+BASE_URL+'Notification/mark_as_read_notification/'+obj[i].noti_user_id+'" class="media list-group-item">';
            str += '    <span class="block m-b-none">';
            // if (obj[i].image !== null && obj[i].image != ''){
            //     str += '        <img class="thumb-xs avatar pull-left m-r" src="'+BASE_URL+obj[i].image+'">';
            // }
            // if (obj[i].fullname !== null) {
            //     str += obj[i].fullname+'<br>';
            // }
            str += obj[i].title+' <small class="text-muted text-italic text-xs pull-right">'+obj[i].date_time+'</small>';
            str += '    </span>';
            str += '</a>';
        }
    }
    $("#notification_list").append(str);
}

var data_obj = [];
var notification_id = -1;
function get_notification(){
    data_obj = [];
    $.ajax({
        url: BASE_URL+"Notification/get_notification",
        type: "get",
        dataType: 'json',
        data: {
            get_notification: 'yes'
        },
        success: function (data) {
            if (typeof(data) == 'object') {
                data_obj = data;
                $('#unload_noti').val('0');
                disable_send_ajax_noti = false;
                update_notification_list();
            }
        }
    });
}
function update_notification_list(){
    var str = '';
    if (data_obj && data_obj.length > 0){
        $(".notification-no").empty().append(data_obj.length + (data_obj.length == 20 ? "+" : "" )  );
        for(var i = 0; i < data_obj.length; i++){
            str += '<a href="'+BASE_URL+'Notification/mark_as_read_notification/'+data_obj[i].noti_user_id+'" class="media list-group-item">';
            str += '    <span class="block m-b-none">';
            // if (data_obj[i].image !== null && data_obj[i].image != ''){
            //     str += '        <img class="thumb-xs avatar pull-left m-r" src="'+BASE_URL+data_obj[i].image+'">';
            // }
            // if (data_obj[i].fullname !== null) {
            //     str += data_obj[i].fullname+'<br>';
            // }
            str += data_obj[i].title+' <small class="text-muted text-italic text-xs pull-right">'+data_obj[i].date_time+'</small>';
            str += '    </span>';
            str += '</a>';
        }
        var last_noti_id = parseInt(data_obj[0].noti_id);
        if(notification_id < last_noti_id) {
            if (typeof get_new_checkin === 'function') {
                get_new_checkin();
            }
            notification_id = last_noti_id; //save last notification id
        }
    }else{
        $(".notification-no").empty();
    }
    $("#notification_list").empty().append(str);
}

function format_currency(num, is_replace_decimal = true) {
    if (num && $.isNumeric(num)){
        if(BASE_CURRENCY_UNIT && BASE_CURRENCY_UNIT == 'VND' && is_replace_decimal)
        {
            num = num.toString().replace('.00','');
            num = parseFloat(num);
        }else if(IS_USD_CURRENCY && IS_USD_CURRENCY == 1)
        {
            num = parseFloat(num).toFixed(2);
        }
            return num.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
    return 0;
}

function un_format_money(money){
    if (money && money != ''){
        if(money.substr(-1) == '.') return money.replace(/\,/g, '');
        else return parseFloat(money.replace(/\,/g, ''));
    }
    else return 0;
}

function number_format (number, decimals, dec_point, thousands_sep) {
    // Strip all characters but numerical ones.
    if(IS_USD_CURRENCY == 1)
    {
        return number;
    }
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
    return s.join(dec);

}

//Appointment
function render_dropdown(list,element_id,placeholder){
    var str = '<option value="-1">'+placeholder+'</option>';
    if (list.length > 0) {
        for(var i=0; i < list.length; i++){
            str += '<option value="'+list[i].id+'">'+list[i].fullname+ ' - '+list[i].telephone+ ' - ' +list[i].email+ '&nbsp;\n</option>';
        }
    }
    $('#'+element_id).empty().append(str);
    $('#'+element_id).select2();
}

//Commission
function update_commission(price,eid) {
    if (eid == null) {
        var commission_percen = $('#commission_percen').val();
        price = un_format_money(price);
        var commission_money = commission_percen * price / 100;
        $('#commission_money').val(format_currency(commission_money));
    } else {
        var commission_percen = $('#commission_percen_'+eid).val();
        price = un_format_money(price);
        var commission_money = commission_percen * price / 100;
        $('#commission_money_'+eid).val(format_currency(commission_money));
    }

}

//Update format money
function update_format_money(element){
    var money = $(element).val();
    // if ($.trim(money) == '') return;
    money = un_format_money(money);
    $(element).val(format_currency(money));
}

function update_format_money_1(element){
    var money = $(element).val();
    money = money.replace(/\s/g, '');
    money = money.replace(/^[a-zA-Z _-]/, '');
    money = money.replace(/[^0-9 _-]/g, "");
    if(money == ''){
        $(element).val(money);
    }
    if (money && money != ''){
        if(money.substr(-1) == '.') money= money.replace(/\,/g, '');
        else money = parseFloat(money.replace(/\,/g, ''));
    }
    else money = 0;
     num=money  ;

    if (num && $.isNumeric(num) && BASE_CURRENCY_UNIT && BASE_CURRENCY_UNIT == 'VND'){
        num = num.toString().replace('.00','');
        num = parseFloat(num);
    }

    if (num && $.isNumeric(num))
    {
        num= num.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
        return $(element).val(num);
    }
}

//refresh value
function refresh_value(value) {
    var value   = ($.trim(value) != '') ? $.trim(value):0;
    value       = (value != 0) ? value.split(',').join('') : 0;
    value       = $.isNumeric(value) ? value : 0;
    return parseFloat(value);
}


//var data = []
// Search Global Customer
function repoFormatResult(repo) {
    var markup = '<div class="clearfix">';
    markup += repo.id != -1 ? '<div class="col-xs-3 no-pd">' : '<div>';

    if (repo.platform) {
        if (repo.avatar != null && repo.avatar != '') {
            markup += '<img class="avatar-50" style="z-indeX: 99" src="'+repo.avatar+'" />';
        }
        else {
            markup += '<img class="avatar-50" style="z-indeX: 99" src="'+BASE_URL+'assets/img/avatar-omicall.png" />';
        }
        markup += '</div>';
        markup += '<div class="col-xs-9 no-pd">';
        markup += '<strong style="color:#00B1FF">'+repo.full_name+'</strong>';
        markup +=  '<span class="badge badge-sm up bg-info pull-right-lg"style="font-size: 65%;  margin-left: 20px; top: 0px">'+repo.platform+'</span>';
        if (repo.phone_number && repo.phone_number != '') {
            let telephone = !hide_member_phone&&UID!=ROOT_USER_ID?repo.phone_number:hide_phone_number(repo.phone_number,1,5);
            if(UID == ROOT_USER_ID && access_phone) {
                telephone = repo.phone_number;
            }
            markup +='<br>'+(telephone);
        }
        if (repo.mail && repo.mail != '') {
            markup +='<br>'+repo.mail;
        }
    }
    else {
      if(repo.id != -1) {
        if (repo.image != null && repo.image != ''){

            markup += '<img class="avatar-50" style="z-indeX: 99" src="'+BASE_URL+'files/'+COMPANY_N+'/avatar/'+repo.image+'" />';
        }
        else {
            markup += '<img class="avatar-50" style="z-indeX: 99" src="'+BASE_URL+'assets/img/default_avatar.jpg" />';
        }
        markup += '</div>';
        markup += '<div class="col-xs-9 no-pd">';
        markup += '<strong data-toggle="tooltip" data-original-title="'+repo.level_name+'" style="color:#'+repo.color+'">'+repo.fullname+'</strong>';
        if (repo.uid){
            repo.uid.forEach(function(ite){
                    if(ite == repo.id)
                    {
                        markup +=  '<span class="badge badge-sm up bg-danger pull-right-lg"style="font-size: 65%;  margin-left: 20px; top: 0px">new</span>';
                    }
            })
        }
        if (repo.telephone && repo.telephone != '') {
            let telephone = !hide_member_phone && UID != ROOT_USER_ID ? repo.telephone : hide_phone_number(repo.telephone,1,5);
            if(UID == ROOT_USER_ID && access_phone) {
                telephone = repo.telephone;
            }
            markup +='<br>'+(telephone);
        }
        if (repo.email && repo.email != '') {
            markup +='<br>'+repo.email;
        }
        if (repo.member_code && repo.member_code != '') {
            markup +='<br>KH-'+repo.member_code;
        }
        if (repo.pets != null && repo.pets.length > 0) {
            markup += '<br><span class="text-xs-1">Pet:</span> ';
            for(var i=0;i<repo.pets.length;i++){
                if (i > 0) markup += ', ';
                markup += '<span class="text-success text-xs-1 text-bold">'+repo.pets[i].name+' (PET'+repo.pets[i].id+')</span>';
            }

        }
        if (repo.branch_name != null) {
            markup += '<br><label style="cursor:pointer" class="label label-success">'+repo.branch_name+'</label>';
        }
      } else {
        markup += '</div>';
        markup += '<strong data-toggle="tooltip">'+repo.fullname+'</strong>';
      }
        }
            markup += '</div>';
            markup += '</div>';
            return markup;
}

function repoFormatSelection(repo) {
    if (repo.platform == "omicall") {
        load_customer_detail_omicall_global(repo.full_name,repo.mail,repo.phone_number);
        return repo.full_name;
    }
    else {
        load_customer_detail_global(repo.id);
        return repo.fullname;
    }
}
// End Search Global Customer

// Search Referrals
function repoFormatReferrals(repo) {
    $('#referral_id').val(repo.id);
    $('#is_membership_ref').val(repo.is_membership).trigger('update');

    return `${repo.fullname} (${repo.telephone})`;
}
// Search Local Customer
function repoFormatSelection_2(repo) {
    if (repo.platform == "omicall") {
        $('#input_cus_name').val(repo.full_name);
        $('#input_cus_phone').val((hide_member_phone || UID == ROOT_USER_ID ?hide_phone_number(repo.phone_number,1,5):repo.phone_number));
        if(hide_member_phone|| UID == ROOT_USER_ID) {
            $('#input_cus_phone').attr('disabled', true);
        }
        $('#input_cus_phone_hidden').val(repo.phone_number);
        $('#input_cus_email').val(repo.mail);
        $('#cus_name').empty().append(repo.full_name);
        $('#cus_phone').empty().append((hide_member_phone|| UID == ROOT_USER_ID?hide_phone_number(repo.phone_number,1,5):repo.phone_number));
        $('#cus_email').empty().append(repo.mail);
        return repo.full_name;
    }
    else {
        $('#input_cus_name').val(repo.fullname);
        $('#input_cus_phone').val((hide_member_phone|| UID == ROOT_USER_ID?hide_phone_number(repo.telephone,1,5):repo.telephone));
        if(hide_member_phone|| UID == ROOT_USER_ID) {
            $('#input_cus_phone').attr('disabled', true);
        }
        $('#input_cus_phone_hidden').val(repo.telephone);
        $('#input_cus_email').val(repo.email);
        var prev_id = $('#cus_id').text();
        $('#cus_id').empty().append(repo.id);
        $('#cus_name').empty().append(repo.fullname);
        $('#cus_phone').empty().append((hide_member_phone|| UID == ROOT_USER_ID?hide_phone_number(repo.telephone,1,5):repo.telephone));
        $('#cus_email').empty().append(repo.email);
        $('#cus_code').empty().append('KH-'+repo.member_code);
        $('#cus_year').empty().append('- NS: '+repo.year);


        $('#cus_name').tooltip('destroy');
        $('#cus_name').removeAttr('title');
        $('#cus_name').removeAttr('data-toggle');
        $('#cus_name').removeAttr('data-original-title');
        $("#is_membership").val(repo.is_membership).trigger('update');
        $("#user_reward_percent").val(parseFloat(repo.user_reward_percent) > 0 ? repo.user_reward_percent + '%' : repo.user_reward_percent).trigger('change');
        $("#is_new_cus").val(repo.is_new_customer);
        //update user level
        if (repo.color && repo.color != '') {
            $('#cus_name').css('color', '#'+repo.color);
            $('#cus_name').attr('title', 'háº¡ng: '+repo.level_name+' - CK: '+repo.level_discount+'%');
            $('#cus_name').tooltip();
            $('#cus_level').empty().text(repo.level_id);
        } else {
            $('#cus_name').tooltip('destroy');
            $('#cus_name').removeAttr('title');
            $('#cus_name').removeAttr('data-toggle');
            $('#cus_name').removeAttr('data-original-title');
            $('#cus_name').css('color', '#333');
        }
        if(repo.id != prev_id && prev_id != ''){ // Reset order when choosing new customer
            reset_order();
        }
        // Refresh customer info
        $('.new-customer-info').find('input').val('');
        $('.new-customer-info').find('input:radio').removeAttr('checked');
        $('#province').select2().val('').trigger('change');
        $('#district').select2().val('').trigger('change');
        $('#ward').select2().val('').trigger('change');
        $('.new-customer-info').slideUp(500);
        $('#btn_add_new_customer').addClass('hide');
        $('#btn_show_modal_customer').removeClass('hide');
        $('input[name=address]').val(repo.address);

        CURRENT_USER_LEVEL_ID = repo.level_id;

        // Change promotions on service list
        load_service_happy_hour(repo.level_id);
        load_prepaid_money(repo.id);
        setTimeout(function(){  }, 2000); //waiting loadprepaid money
        load_reward_money(repo.id);
        show_service_card(repo.id);
        show_pet_list(repo.id);
        load_agency_collaborator(repo.id);
        if(!ORDER_PAID){
            if(typeof(service_arr)!=='undefined'){
                service_arr.forEach(service => {
                    apply_happy_hour(service.s_happy_h_code, true, true, service.s_id, service.type, service.dup_count);
                });
            }
            apply_happy_hour($('#happy_hour_code').val(),true,true);
            generate_order();
        }
        return repo.fullname;
    }
}
// End Search Local Customer

function get_service_card_add_order() {
    $.ajax({
        url: BASE_URL + "ManageOrder/ajax_control",
        type: "post",
        data: {
            page_type : 'get_service'
        },
        success: function (res) {
            var obj = JSON.parse(res);

        }
    });
}

// Search Local Customer MBS
function repoFormatSelection_3(repo) {
    $('#input_cus_name').val(repo.fullname);
    if(hide_member_phone || UID == ROOT_USER_ID){
        $('#input_cus_phone').val(hide_phone_number(repo.telephone,1,5));
        $('#input_cus_phone').attr('readonly','readonly');
        $('#input_cus_phone_hidden').val(repo.telephone);
    }else{
        $('#input_cus_phone').val(repo.telephone);
        $('#input_cus_phone_hidden').val(repo.telephone);
    }

    // Refresh customer info
    $('.new-customer-info').find('input').val('');
    $('.new-customer-info').find('input:radio').removeAttr('checked');
    $('#province').select2().val('').trigger('change');
    $('.new-customer-info').slideUp(500);
    $('#btn_add_new_customer').addClass('hide');
    $('#btn_show_modal_customer').removeClass('hide');
    $('#btn_add_new_customer').removeClass('active');

    $('#input_cus_email').val(repo.email);
    $('#uid').val(repo.id);

    $(document).trigger('onCustomerResponse', repo);

    return repo.fullname;
}
// End Search Local Customer MBS

// Search Local Customer MBS
function repoFormatSelection_mbs_2(repo) {
    $('#input_cus_name').val(repo.fullname);
    $('#input_cus_phone').val((hide_member_phone||UID==ROOT_USER_ID?hide_phone_number(repo.telephone,1,5):repo.telephone));
    $('#input_cus_phone_hidden').val(repo.telephone);
    $('#input_cus_email').val(repo.email);
    $("#user_reward_percent").val(parseFloat(repo.user_reward_percent) > 0 ? repo.user_reward_percent + '%' : repo.user_reward_percent).trigger('change');
    $('#customer_type').val(1).trigger('change');
    $('#uid').val(repo.id);
    $("#is_new_cus").val(repo.is_new_customer);
    $("#is_membership").val(repo.is_membership).trigger('update');
    $('.list_referral_reward').trigger('updated')
    if($('#customer_type').length == 0) load_prepaid_money(repo.id);
    setTimeout(function(){  }, 1000); //waiting loadprepaid money
    load_reward_money(repo.id);
    return repo.fullname;
}
// End Search Local Customer MBS

function load_customer_detail_global(uid,type) {
    if (uid > 0) {
        var show_checkin_card = window.location.href.includes('add_order') ? 0 : 1;
        $.ajax({
            url: BASE_URL+"ManageUser/load_customer_detail?access_phone=" + access_phone,
            type: "post",
            dataType: 'html',
            data: {
                load_customer_detail: 'yes',
                uid:uid,
                global:'yes',
                show_checkin_card: show_checkin_card
            },
            success: function (data) {
                let show_modal_customer = $('#show_modal_customer');
                show_modal_customer.empty()
                show_modal_customer.append(data)
                // $('#modal_customer .modal-content').empty();
                // $('#modal_customer .modal-content').append(data);
                // load_appointment(uid,2);
                if (type == 3) {
                    $(document.getElementById('modal_customer')).attr('data-type',3);
                    $(document.getElementById('appointmentModal')).modal('hide');
                    $(document.getElementById('appointmentModal')).one('hidden.bs.modal',function(){
                        $(document.getElementById('modal_customer')).modal('show');
                    });
                    $(document.querySelector("#modal_customer[data-type='3']")).one('hidden.bs.modal',function(){
                        $(document.getElementById('appointmentModal')).modal('show');
                    });
                } else {
                    $(document.getElementById('modal_customer')).modal('show');
                }
                show_modal_review_popup();
                currency_formatter();
            }
        });
    }
}


function load_customer_detail_omicall_global(name,email,phone,img) {
    $('.omical_loading').fadeIn();

    if (phone && phone > 0) {
        $.ajax({
            url: BASE_URL+"ManageUser/call_transaction",
            type: "post",
            dataType: 'json',
            data: {
                phone:phone
            },
            success: function (result) {
                $('#call_transaction_global').modal('show');
                $('.name_omicall').text(name)
                $('.phone_omicall').text(phone)
                $('.email_omicall').text(email)
                $('.img_omicall').attr('src',img)
                var str = '';
                if(result.data.length == 0){
                    str = '<li><p>ChÆ°a cĂ³ lá»‹ch sá»­ cuá»™c gá»i</p></li>';
                }else{
                    $.each(result.data,function (index,value) {
                        var date =new Date(value.created_date)
                        str += '<li>';
                        str += '<a href="#" class="float-right">'+date.toLocaleDateString()+', '+date.toLocaleTimeString()+'</a>'
                        str += '<p>ÄÆ°á»£c gá»i bá»Ÿi : '+value.user[0].full_name+' - SDT : '+value.source_number+'</p>'
                        str += '<p>Tags: '+value.tag.toString()+' </p>'
                        str += '<p>Ghi chĂº : '+value.note+'</p>'
                        if(value.recording_file){
                            str += '<audio controls>'
                            str += '<source src="'+value.recording_file+'" type="audio/mpeg">'
                            str += '</audio>'
                        }
                        str += '</li>'
                    })
                }

                $('#call_transaction_global .timeline').html(str)
                $('.omical_loading').fadeOut();
            }
        });
    }
}

function show_service_card(uid) {
    $.ajax({
        url: BASE_URL+"ManageOrder/show_service_card",
        type: "post",
        data: {
            uid: uid
        },
        success: function (res) {
            $(".show_card_for_user").html('').append(res);
            // $(".show_card_for_user [data-toggle='popover']").popover({
            //     trigger: 'focus'
            // });
        }
    });
}

function show_pet_list(uid) {
    $.ajax({
        url: BASE_URL+"ManageOrder/show_pet_list",
        type: "post",
        dataType: 'json',
        data: {
            uid: uid
        },
        success: function (res) {
            //PETS = res.pet_list;
            show_pet_list_html(res.pet_list);

        }
    });
}

function load_customer_detail(open_modal = false) {
    var uid = $('#cus_id').text();
    if (uid > 0) {
        $.ajax({
            url: BASE_URL+"ManageUser/load_customer_detail?access_phone=" + access_phone,
            type: "post",
            dataType: 'html',
            data: {
                load_customer_detail: 'yes',
                uid:uid
            },
            success: function (data) {
                $('#show_modal_customer').html(data);
                load_prepaid_money(uid);
                setTimeout(function(){  }, 2000); //waiting loadprepaid money
                load_reward_money(uid);
                if(open_modal) $('#modal_customer').modal('show');
            }
        });
    }
}

function load_prepaid_money(uid){
    if (uid > 0) {
        $.ajax({
            url: BASE_URL+"ManageOrder/load_prepaid_money",
            type: "post",
            dataType: 'json',
            data: {
                load_payment_method: 'yes',
                uid:uid
            },
            success: function (data) {
                disabled = '';
                if(typeof service_arr !== 'undefined'){
                    for(i=0;i<service_arr.length;i++){
                        if(service_arr[i].type==4){
                            disabled = 'disabled';
                            break;
                        }
                    }
                }
                if($('#prepay_card_value_id').length == 0){
                    $(`[name="payment_method_id[]"]`).each(function(index,element){
                        method = $(element).val();
                        if (data.total_available && data.total_available > 0) {
                            PREPAID_MONEY = Math.round(data.total_available);
                            $(element).select2("destroy");
                            $(element).find("option[value='-1']").remove();
                            $(element).find("option[value='']").after('<option value="-1"  '+disabled+'>'+lang['prepaid_account'] +' ('+lang['available']+' '+format_currency(PREPAID_MONEY)+' '+BASE_CURRENCY_UNIT+')</option>');
                            $(element).select2();
                        } else {
                            PREPAID_MONEY = 0;
                            $(element).select2("destroy");
                            $(element).find("option[value='-1']").remove();
                            $(element).find("option[value='']").after('<option value="-1" disabled>'+lang['prepaid_account']+' ('+format_currency(0)+' '+BASE_CURRENCY_UNIT+')</option>');
                            $(element).select2();
                        }
                        if (method == -1) {
                            $(element).val('-1').trigger('change');
                        }
                    });
                }
            }
        });
    }
}

REWARD_MONEY = 0;
function load_reward_money(uid){
    if (uid > 0) {
        $.ajax({
            url: BASE_URL+"ManageUser/load_reward_money",
            type: "post",
            dataType: 'json',
            data: {
                uid:uid
            },
            success: function (data) {
                if($('#prepay_card_value_id').length == 0){
                    $(`[name="payment_method_id[]"]`).each(function(index,element){
                        method = $(element).val();
                        if (data.total_available && data.total_available > 0) {
                            REWARD_MONEY = (data.total_available);
                            $(element).select2("destroy");
                            $(element).find("option[value='-3']").remove();
                            $(element).prepend('<option value="-3">'+lang['reward_account'] +'('+lang['available']+' '+format_currency(REWARD_MONEY)+' '+BASE_CURRENCY_UNIT+')</option>');
                            $(element).select2();
                        } else {
                            REWARD_MONEY = 0;
                            $(element).select2("destroy");
                            $(element).find("option[value='-3']").remove();
                            $(element).append('<option value="-3" disabled>'+lang['reward_account']+' ('+format_currency(0)+' '+BASE_CURRENCY_UNIT+')</option>');
                            $(element).select2();
                        }
                        if (method == -3) {
                            $(element).val('-3').trigger('change');
                        }
                    });
                }
            }
        });
    }
}

function addParameterToURL(param){
    if (history.pushState) {
        var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?order_id='+param;
        window.history.pushState({path:newurl},'',newurl);
    }
}

$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
        return null;
    }
    else{
        return decodeURI(results[1]) || 0;
    }
}

//LOAD APPOINTMENT
function load_appointment(uid,type) {
    if (uid != '') {
        $.ajax({
            url: BASE_URL+"ManageAppointment/load_appointment",
            type: "get",
            dataType: 'json',
            data: {
                get_appointments:'yes',
                uid:uid,
                type:type
            },
            success: function (data) {
                if (typeof(data) == 'object') {
                    if (data.status == 'ok') {
                        generate_appointment_list(data.appointments,data.passed_appointment,type);
                    }
                } else {
                    if (type && type == 2) {
                        $('#appointment_list').empty().append(data.message);
                    } else {
                        $('#appointment_list').empty().append(data.message);
                    }
                }
            }
        });
    }
}

function generate_appointment_list(appointments, passed_appointment,type){
    var str = '<div class="streamline b-l m-b">';
    var avatar = '';
    if (appointments && appointments.length > 0) {
        for (var i = 0; i < appointments.length; i++) {
            str += '<div class="sl-item b-l" style="border-color:'+appointments[i].color+'" id="apt_block_'+appointments[i].id+'">';
            str += '    <div class="m-l">';
            str += '        <h5 class="m-t-none m-b-xs" id="apt_time_'+appointments[i].id+'">'+appointments[i].start+'</h5>';
            if (appointments[i].type) {
                var apt = appointments[i].type.split('|');
                for(var j=0;j<apt.length;j++){
                    let apt_type = appointments[i].type_appointment;
                    for (let k = 0; k < apt_type.length; k++) {
                        if(apt[j] == apt_type[k].id){
                            str += '<span class="label label-danger">'+apt_type[k].type_name+'</span>&nbsp;';
                        }
                    }
                }
            }
            //if (UID == appointments[i].created_by_id) {
                str += '        <a onclick="delete_appointment('+appointments[i].id+')" class="text-danger pull-right hide-global-view">&nbsp;<i class="fa fa-times text-danger"></i>&nbsp;</a>';
                str += '        <a onclick="edit_appointment('+appointments[i].id+','+appointments[i].status+')" class="text-success pull-right hide-global-view">&nbsp;<i class="icon icon-pencil"></i>&nbsp;</a>';
            //}
            str += '        <p class="" style="color:'+appointments[i].color+'" id="apt_content_'+appointments[i].id+'">'+appointments[i].title+'</p>';

            if (appointments[i].add_author != null) {
                if (appointments[i].add_author.image != null && appointments[i].add_author.image != '')
                    avatar = '     <img class="avatar-25" src="'+BASE_URL+'files/'+COMPANY_N+'/avatar/'+appointments[i].add_author.image+'" /> ';
                else
                    avatar = '     <img class="avatar-25" src="'+BASE_URL+'assets/img/default_avatar.jpg" /> ';
                str += '        <span class="m-b-md inline text-xs-1 text-muted">'+lang['created_by']+': ' + avatar + ' ' +appointments[i].add_author.fullname+'</span>';

                str += '&nbsp;&nbsp;&nbsp;';
            }
            if (appointments[i].author != null){
                if (appointments[i].author.image != null && appointments[i].author.image != '')
                    avatar = '     <img class="avatar-25" src="'+BASE_URL+'files/'+COMPANY_N+'/avatar/'+appointments[i].author.image+'" /> ';
                else
                    avatar = '     <img class="avatar-25" src="'+BASE_URL+'assets/img/default_avatar.jpg" /> ';
                str += '        <span class="m-b-md inline text-xs-1 text-muted">'+lang['last_updated']+': ' + avatar + ' ' +appointments[i].author.fullname+'</span>';
            }
            str += '    </div>';
            str += '</div>';
            str += '<input type="hidden" id="apt_id_'+appointments[i].id+'" value="'+appointments[i].id+'">';
        }
    }

    if (passed_appointment && passed_appointment.length > 0) {
        str += '<div class="bg-primary wrapper-sm m-l-n m-r-n m-b r r-2x">';
        str += '    ' + lang['appointments_are_over'];
        str += '</div>';
        for (var i = 0; i < passed_appointment.length; i++) {
            str += '<div class="sl-item b-l" style="border-color:'+passed_appointment[i].color+'" id="apt_block_'+passed_appointment[i].id+'">';
            str += '    <div class="m-l">';
            str += '        <h5 class="m-t-none m-b-xs text-muted" id="apt_time_'+passed_appointment[i].id+'">'+passed_appointment[i].start+'</h5>';
            if (passed_appointment[i].type) {
                var pass_apt = passed_appointment[i].type.split('|');
                for(var j=0;j<pass_apt.length;j++){
                    let pass_apt_type = passed_appointment[i].type_appointment;
                    for (let k = 0; k < pass_apt_type.length; k++) {
                        if(pass_apt[j] == pass_apt_type[k].id){
                            str += '<span class="label label-danger">'+pass_apt_type[k].type_name+'</span>&nbsp;';
                        }
                    }
                }
            }
            //if (UID == passed_appointment[i].created_by_id) {
                str += '        <a onclick="delete_appointment('+passed_appointment[i].id+')" class="text-danger pull-right hide-global-view">&nbsp;<i class="fa fa-times text-danger"></i>&nbsp;</a>';
                str += '        <a onclick="edit_appointment('+passed_appointment[i].id+','+passed_appointment[i].status+')" class="text-success pull-right hide-global-view">&nbsp;<i class="icon icon-pencil"></i>&nbsp;</a>';
            //}
            str += '        <p class="" style="color:'+passed_appointment[i].color+'" id="apt_content_'+passed_appointment[i].id+'">'+passed_appointment[i].title+'</p>';

            if (passed_appointment[i].add_author != null) {
                if (passed_appointment[i].add_author.image != null && passed_appointment[i].add_author.image != '')
                    avatar = '     <img class="avatar-25" src="'+BASE_URL+'files/'+COMPANY_N+'/avatar/'+passed_appointment[i].add_author.image+'" /> ';
                else
                    avatar = '     <img class="avatar-25" src="'+BASE_URL+'assets/img/default_avatar.jpg" /> ';
                str += '        <span class="m-b-md inline text-xs-1 text-muted">'+lang['created_by']+': ' + avatar + ' ' +passed_appointment[i].add_author.fullname+'</span>';

                str += '&nbsp;&nbsp;&nbsp;';
            }
            if (passed_appointment[i].author != null){
                if (passed_appointment[i].author.image != null && passed_appointment[i].author.image != '')
                    avatar = '     <img class="avatar-25" src="'+BASE_URL+'files/'+COMPANY_N+'/avatar/'+passed_appointment[i].author.image+'" /> ';
                else
                    avatar = '     <img class="avatar-25" src="'+BASE_URL+'assets/img/default_avatar.jpg" /> ';
                str += '        <span class="m-b-md inline text-xs-1 text-muted">'+lang['last_updated']+': ' + avatar + ' ' +passed_appointment[i].author.fullname+'</span>';
            }

            str += '    </div>';
            str += '</div>';
            str += '<input type="hidden" id="apt_id_'+passed_appointment[i].id+'" value="'+passed_appointment[i].id+'">';
        }
    }

    str += '</div>';
    if (type && type == 2) {
        $('#appointment_list_2').empty().append(str);
    } else {
        $('#appointment_list').empty().append(str);
    }
}
function edit_commission(obj,id){
    var commission = obj.value;
    $.ajax({
        url: BASE_URL+"ManageMBS/edit_commission",
        type: "post",
        dataType: 'json',
        data: {
            com_id: id,
            commission: commission
        },
        success: function (data) {
            if (typeof(data) == 'object' && data.status == 'ok') {
                Notify(data.message);
            } else {
                Notify(data.message,'danger');
            }
        }
    });
}
function edit_commission_staff(obj,id){
    var commission = obj.value;
    $.ajax({
        url: BASE_URL+"ManageOrder/edit_commission_staff",
        type: "post",
        dataType: 'json',
        data: {
            com_id: id,
            commission: commission
        },
        success: function (data) {
            if (typeof(data) == 'object' && data.status == 'ok') {
                Notify(data.message);
            } else {
                Notify(data.message,'danger');
            }
        }
    });
}
function edit_appointment(apt_id,apt_status) {
    reset_apt_modal();
    $('.btn-repeat').hide();
    CLICK_MODE = 1;
    CHECK_STAFF = 0;
    $.ajax({
        url: BASE_URL+"ManageAppointment/edit_appointment",
        type: "get",
        dataType: 'json',
        data: {
            apt_id: apt_id
        },
        success: function (data) {
            $('#apt_date_time').val($('#apt_time_'+apt_id).text());
            $('#title').val($('#apt_content_'+apt_id).text());
            $('#apt_id').val($('#apt_id_'+apt_id).val());
            $("#branch_id").select2("val", data.appointments.appointment_info.branch_id);
            $('#apt_end').val(data.appointments.appointment_info.end);
            if(data.appointments.service_list && data.appointments.service_list.length > 0){
                var service_select_arr = [];
                for (var i = 0; i < data.appointments.service_list.length; i++) {
                    service_select_arr[service_select_arr.length] = data.appointments.service_list[i].service_id;
                }
                generate_service_list_by_branch(service_select_arr);
            }else {
                generate_service_list_by_branch();
            }
            if(data.appointments.staff_list && data.appointments.staff_list.length > 0){
                var staff_select_arr = [];
                for (var i = 0; i < data.appointments.staff_list.length; i++) {
                    staff_select_arr[staff_select_arr.length] = data.appointments.staff_list[i].staff_uid;
                }
                generate_staff_list_by_branch(staff_select_arr);
                assign_appointment_staff(staff_select_arr);
            }else {
                generate_staff_list_by_branch();

            }
            $("input[type='radio'][name='apt_status[]'][value=" + apt_status + "]").prop('checked', true);
            if (data.appointments.appointment_info.type) {
                data.appointments.appointment_info.type = data.appointments.appointment_info.type.split('|');
                for(var i = 0; i < data.appointments.appointment_info.type.length; i++){
                    for(var j = 0; j < data.appointments.appointment_type.length; j++){
                        if(data.appointments.appointment_info.type[i] == data.appointments.appointment_type[j].id){
                            $("input[type='checkbox'][name='apt_type[]'][value="+ data.appointments.appointment_info.type[i] +"]").prop('checked', true);
                        }
                    }
                }
            }

            $('#appointmentModal').modal('show');
        }
    });
}
function notification_readed(){
    let noti_no = $(".notification-no").text();
    $(".notification-no").empty();
    $.ajax({
        url: BASE_URL+"Notification/mark_as_all_read_notification",
        type: "post",
        dataType: 'json',
        data: {
            update_readed: 'yes'
        },
        success: function (data) {
            if (data == true) {
                get_notification();
            }else {
                $(".notification-no").empty().append(noti_no);
            }
        }
    });
}
function go_to_notification(){
    window.location = BASE_URL+ 'Notification/notification_list';
}
function generate_select2(arr_data) {
    var str = '';
    for (var i = 0; i < arr_data.length; i++) {
        str += '<option value="'+arr_data[i].id+'">'+arr_data[i].name+'</option>';
    }
    return str;
}
function update_prod_unit(pid,unit_id) {
    $.ajax({
        url: BASE_URL+"ManageProduct/update_product_unit",
        type: "post",
        dataType: 'json',
        data: {
            product_id: pid,
            unit_id: unit_id
        },
        success: function (data) {
            if (typeof(data) == 'object') {
                location.reload();
                if(data.status == 'ok') {
                    alert(data.message);
                    return true;
                } else {
                    alert(data.message);
                    return false;
                }
            } else {
                alert(data.message);
                return false;
            }
        }
    });
    return;
}

function update_prod_unit2(pid,unit2_id) {
    $.ajax({
        url: BASE_URL+"ManageProduct/update_product_unit2",
        type: "post",
        dataType: 'json',
        data: {
            product_id: pid,
            unit2_id: unit2_id
        },
        success: function (data) {
            if (typeof(data) == 'object') {
                location.reload();
                if(data.status == 'ok') {
                    alert(data.message);
                    return true;
                } else {
                    alert(data.message);
                    return false;
                }
            } else {
                alert(data.message);
                return false;
            }
        }
    });
    return;
}
function update_order_sms(ckb_sms,type) { //type 1:order, 2:treatment, 3:prepay
    $.ajax({
        url: BASE_URL+"ManageSystem/update_sms_order",
        type: "post",
        dataType: 'json',
        data: {
            update_sms_order: 'yes',
            ckb_sms: ckb_sms,
            type: type
        },
        success: function (data) {

        }
    });
    return;
}

function update_appointment_sms(ckb_sms){
    $.ajax({
        url: BASE_URL+"ManageSystem/update_sms_appointment",
        type: "post",
        dataType: 'json',
        data: {
            update_sms_appointment: 'yes',
            ckb_sms: ckb_sms
        },
        success: function (data) {

        }
    });
    return;
}

function create_new_profile(){
    $("#input_cus_name").val('').removeAttr('readonly');
    $("#input_cus_phone").val('').removeAttr('readonly');
    $("#input_cus_email").val('').removeAttr('readonly');
    $("#input_cus_name").focus();
}

function count_charater(element){
    var str_sms = $(element).val();
    var count_character = str_sms.length;
    var count_sms = 0;

    var english = /^[A-Za-z0-9 !@#$%^&*()+=.,/<>\-?:;\[\]\_{}]*$/;
    var count_devide = english.test(str_sms)?160:70;

    $('#count_sms').empty().append(count_character+'/'+count_devide);

}

function hide_phone_number(phone_number, part, number){ // part 1 = head, 2 = tail
    if(!phone_number) return '';
    len = phone_number.length;
    if(number>len){
        return '*'.repeat(number)
    }else{
        if(part == 1){
            return '*'.repeat(len-number) + phone_number.substring(len-number);
        }else if(part == 2){
            return phone_number.substring(0, number)+'*'.repeat(len-number);
        }else{
            return phone_number;
        }
    }
}

// Notification function
Notify = function(text, style,time = 4000, callback, close_callback) {
    // Modify timer for notification
    var $container = $('#notifications');
    //var icon = '<i class="fa fa-info-circle "></i>';
    var icon = '';

    if (typeof style == 'undefined' ) style = 'success'

    var html = $('<div class="alert alert-' + style + '  hide alert-notification">' + icon +  " " + text + '</div>');

    $('<a>',{
        text: 'Ă—',
        class: 'button close',
        style: 'padding-left: 10px;',
        href: '#',
        click: function(e){
            e.preventDefault()
            close_callback && close_callback()
            remove_notice()
        }
    }).prependTo(html)

    $container.prepend(html)
    html.removeClass('hide').hide().fadeIn('slow')

    function remove_notice() {
        html.stop().fadeOut('slow',function(){
            clearInterval(timer);
            $(this).remove();
        });
    }

    var timer =  setInterval(remove_notice, time);

    $(html).hover(function(){
        clearInterval(timer);
    }, function(){
        timer = setInterval(remove_notice, time);
    });

    html.on('click', function () {
        clearInterval(timer)
        callback && callback()
        remove_notice()
    });
}

function format_date_for_view(date){
    if(date != '' && date){
        var date_time_arr = date.split(' ');
        date_arr = date_time_arr[0].split('-');
        return date_arr[2]+"/"+date_arr[1]+"/"+date_arr[0]+(date_time_arr[1]!=''?(" "+date_time_arr[1]):'');
    }else return '';
}

function format_date_for_view_from_db(date){
    if(date != '' && date){
        date = date.substring(0,10);
        var date_arr = date.split('-');
        return date_arr[2]+"/"+date_arr[1]+"/"+date_arr[0];
    }else return '';
}

function val_to_time(value){
    value = Math.round(value); // fix nouislider's bug that make value floated
    hour = parseInt(value*5/60);
    min = parseInt(value)*5%60;
    return (hour<10?("0"+hour):hour)+":"+(min<10?("0"+min):min);
}

function format_date_for_view_from_db(date){
    if(date != '' && date){
        date = date.substring(0,10);
        var date_arr = date.split('-');
        return date_arr[2]+"/"+date_arr[1]+"/"+date_arr[0];
    }else return '';
}

function format_date_time_for_view(datetime){
    if(datetime != '' && datetime){
        date = datetime.split(' ');
        return `${format_date_for_view(date[0])} ${date[1]}`;
    }else return '';
}

function format_datetime_for_view(datetime,format = 'dd/mm/yyyy'){
    if(datetime != '' && datetime != '00-00-00 00:00:00' && datetime){
        datetime = datetime.split(' ');
        date = datetime[0];
        date_arr = date.split('-');
        time = datetime[1];
        let date_formatted = format.replace('dd',date_arr[2]).replace('mm',date_arr[1]).replace('yyyy',date_arr[0]);
        return `${date_formatted} ${time}`;
    } else return '';
}

function format_jsDate_for_db(jsDateObj){
    return `${jsDateObj.getDate()<10?'0':''}${jsDateObj.getDate()}-${jsDateObj.getMonth()+1<10?'0':''}${jsDateObj.getMonth()+1}-${jsDateObj.getFullYear()} ${jsDateObj.getHours()<10?'0':''}${jsDateObj.getHours()}:${jsDateObj.getMinutes()<10?'0':''}${jsDateObj.getMinutes()}:${jsDateObj.getSeconds()<10?'0':''}${jsDateObj.getSeconds()}`;
}

function generate_invoice_number(no){
    no_code = no;
    result = '';
    switch (true) {
        case (no_code < 10):
            result += '000000' + no_code;
            break;
        case (no_code >= 10 && no_code < 100):
            result += '00000' + no_code;
            break;
        case (no_code >= 100 && no_code < 1000):
            result += '0000' + no_code;
            break;
        case (no_code >= 1000 && no_code < 10000):
            result += '000' + no_code;
            break;
        case (no_code >= 10000 && no_code < 100000):
            result += '00' + no_code;
            break;
        case (no_code >= 100000 && no_code < 1000000):
            result += '0' + no_code;
            break;
        case (no_code >= 1000000):
            result += no_code;
            break;
    }
    return result;
}

function trimChar(string, charToRemove) {
    while(string.charAt(0) === charToRemove) {
        string = string.substring(1);
    }

    while(string.charAt(string.length-1) === charToRemove) {
        string = string.substring(0,string.length-1);
    }

    return string;
}

document.addEventListener('DOMContentLoaded', () => {
    let config = {
        theme: 'default',
        options: {
            'hideCallButton':false,
            'showNoteInput':true
            },
        callbacks: {
            register: (data) => {
                // Sá»± kiá»‡n xáº£y ra khi tráº¡ng thĂ¡i káº¿t ná»‘i tá»•ng Ä‘Ă i thay Ä‘á»•i
            },
            connecting: (data) => {
                // Sá»± kiá»‡n xáº£y ra khi báº¯t Ä‘áº§u thá»±c hiá»‡n cuá»™c gá»i ra
            },
            invite: (data) => {
                 // Sá»± kiá»‡n xáº£y ra khi cĂ³ cuá»™c gá»i tá»›i
            },
            inviteRejected: (data) => {
                 // Sá»± kiá»‡n xáº£y ra khi cĂ³ cuá»™c gá»i tá»›i, nhÆ°ng bá»‹ tá»± Ä‘á»™ng tá»« chá»‘i
                 // trong khi Ä‘ang diá»…n ra má»™t cuá»™c gá»i khĂ¡c
            },
            ringing: (data) => {
                // Sá»± kiá»‡n xáº£y ra khi cuá»™c gá»i ra báº¯t Ä‘áº§u Ä‘á»• chuĂ´ng
            },
            accepted: (data) => {
                 // Sá»± kiá»‡n xáº£y ra khi cuá»™c gá»i vá»«a Ä‘Æ°á»£c cháº¥p nháº­n
            },
            incall: (data) => {
                 // Sá»± kiá»‡n xáº£y ra má»—i 1 giĂ¢y sau khi cuá»™c gá»i Ä‘Ă£ Ä‘Æ°á»£c cháº¥p nháº­n
            },
            acceptedByOther: (data) => {
                 // Sá»± kiá»‡n dĂ¹ng Ä‘á»ƒ kiá»ƒm tra xem cuá»™c gá»i bá»‹ káº¿t thĂºc
                 // Ä‘Ă£ Ä‘Æ°á»£c cháº¥p nháº­n á»Ÿ thiáº¿t bá»‹ khĂ¡c hay khĂ´ng
            },
            ended: (data) => {
                 // Sá»± kiá»‡n xáº£y ra khi cuá»™c gá»i káº¿t thĂºc
            },
            holdChanged: (status) => {
                 // Sá»± kiá»‡n xáº£y ra khi tráº¡ng thĂ¡i giá»¯ cuá»™c gá»i thay Ä‘á»•i
            },
        }
    };
    omiSDK.init(config, () => {
        omiSDK.register({
            domain: DOMAIN_OMICALL ? DOMAIN_OMICALL : '',
            username: SIP_USER ? SIP_USER : '', // tÆ°Æ¡ng Ä‘Æ°Æ¡ng trÆ°á»ng "sip_user" trong thĂ´ng tin sá»‘ ná»™i bá»™
            password: PWD_OMICALL ? PWD_OMICALL : '',
        });
    });
});

function waitForElm(selector) {
    return new Promise(resolve => {
        if (document.querySelector(selector)) {
            return resolve(document.querySelector(selector));
        }

        const observer = new MutationObserver(mutations => {
            if (document.querySelector(selector)) {
                resolve(document.querySelector(selector));
                observer.disconnect();
            }
        });

        observer.observe(document.body, {
            childList: true,
            subtree: true
        });
    });
}

function makeAudioCallio(el)
{
    let callio_id = el.parent().find('.callio_id').val()
    let parent = el.parent()
    parent.empty().append('<span class="loader-callio"></span>')
    $.ajax({
        url      : BASE_URL+ "CallioApi/get_record_by_id",
        type     : "post",
        dataType : 'json',
        data     : {
            callio_id  :callio_id
        },
        success  : function (result) {
            if (result && result.url) {
                str = '<audio class="record-callio" controls>'
                str += '<source src="'+result.url+'" type="audio/mpeg">'
                str += '</audio>'
                parent.empty().append(str)
            }
            else {
                parent.empty().append('<div class="alert alert-warning" role="alert">KhĂ´ng tĂ¬m tháº¥y file ghi Ă¢m</div>')
            }
        },

        error: function () {
            parent.empty().append('<div class="alert alert-warning" role="alert">KhĂ´ng tĂ¬m tháº¥y file ghi Ă¢m</div>')
        }
    });
}

function makeAudioGrandstream(el)
{
    let grandstream_record_file = el.parent().find('.grandstream_record_file').val()
    let parent = el.parent()
    parent.empty().append('<span class="loader-callio"></span>')
    $.ajax({
        url      : BASE_URL+ "GrandStreamApi/get_record_by_id",
        type     : "post",
        dataType : 'json',
        data     : {
            file_name : grandstream_record_file
        },
        success  : function (result) {
            if (result) {
                str = '<audio class="record-callio" controls>'
                str += '<source src="data:audio/wav;base64,'+result+'" type="audio/wav">'
                str += '</audio>'
                parent.empty().append(str)
            }
            else {
                parent.empty().append('<div class="alert alert-warning" role="alert">KhĂ´ng tĂ¬m tháº¥y file ghi Ă¢m</div>')
            }
        },

        error: function () {
            parent.empty().append('<div class="alert alert-warning" role="alert">KhĂ´ng tĂ¬m tháº¥y file ghi Ă¢m</div>')
        }
    });
}

function load_customer_detail_callio_global(name,email,phone,week) {
    if (phone && phone > 0) {
        $.ajax({
            url: BASE_URL+"CallioApi/get_history_calling",
            type: "post",
            dataType: 'json',
            data: {
                phone : phone,
                week  : week
            },
            success: function (result) {
                $('#call_callio_transaction_global').modal('show');
                $('.name_callio').text(name)
                $('.phone_callio').text(phone)
                $('.email_callio').text(email)
                //$('.img_callio').attr('src',img)
                var str = '';
                if(result.docs.length == 0){
                    str = '<li><p>ChÆ°a cĂ³ lá»‹ch sá»­ cuá»™c gá»i</p></li>';
                }else{
                    $.each(result.docs,function (index,value) {
                        var date =new Date(value.createTime)
                        str += '<li>';
                        str += '<a href="#" class="float-right">'+date.toLocaleDateString()+', '+date.toLocaleTimeString()+'</a>'
                        str += (value.direction == 'outbound') ?
                                    '<h4 class="timeline-title">Cuá»™c gá»i vĂ o tá»«: '+ value.fromUser.name+' - SDT : '+value.fromNumber+'</h4>' :
                                    '<h4 class="timeline-title">Cuá»™c gá»i ra Ä‘áº¿n: '+ value.toUser.name+' - SDT : '+value.toNumber+'</h4>';
                        str +=' <div class="timeline-body">'
                        str +='<input class="callio_id" type="hidden" value="'+value._id+'">'
                        str += '<button class="get-callio-record-global btn btn-info">Láº¥y ghi Ă¢m</button>'
                        str +=' </div>'
                        str += '</li>'
                    })
                }
                $('#call_callio_transaction_global .timeline').html(str)
                $('.get-callio-record-global').on('click', function(){
                    makeAudioCallio($(this))
                })
            }
        });
    }
}

function load_customer_detail_grandstream_global(name,email,phone) {
    if (phone && phone > 0) {
        $.ajax({
            url: BASE_URL+"GrandStreamApi/get_history_calling",
            type: "post",
            dataType: 'json',
            data: {
                phone : phone,
                offset : 0,
                limit : 30
            },
            success: function (result) {
                $('#call_grandstream_transaction_global').modal('show');
                $('.name_grandstream').text(name)
                $('.phone_grandstream').text(phone)
                $('.email_grandstream').text(email)
                var str = '';
                if(result.cdr_root.length == 0){
                    str = '<li><p>ChÆ°a cĂ³ lá»‹ch sá»­ cuá»™c gá»i</p></li>';
                }else{
                    $.each(result.cdr_root,function (index,value) {
                        var date =new Date(value.start)
                        str += '<li>';
                        str += '<a href="#" class="float-right">'+date.toLocaleDateString()+', '+date.toLocaleTimeString()+'</a>'
                        str += (value.userfield == 'Outbound') ?
                                    '<h4 class="timeline-title">Cuá»™c gá»i ra Ä‘áº¿n: '+ value.dst+' tá»« : '+value.caller_name+'</h4>' :
                                    '<h4 class="timeline-title">Cuá»™c gá»i vĂ o tá»«: '+ value.dst+' Ä‘áº¿n : '+value.caller_name+'</h4>';
                        str +=' <div class="timeline-body">'
                        str +='<input class="grandstream_record_file" type="hidden" value="'+value.recordfiles+'">'
                        str += '<button class="get-grandstream-record-global btn btn-info">Láº¥y ghi Ă¢m</button>'
                        str +=' </div>'
                        str += '</li>'
                    })
                }
                $('#call_grandstream_transaction_global .timeline').html(str)
                $('.get-grandstream-record-global').on('click', function(){
                    makeAudioGrandstream($(this))
                })
            }
        });
    }
}

function getTypeTransaction($msg) {
    switch ($msg) {
        case 'outbound': return 'Gá»i Ä‘i';
        case 'inbound': return 'Gá»i Ä‘áº¿n';
        case 'answered': return 'Tráº£ lá»i';
        case 'cancelled': return 'KhĂ´ng tráº£ lá»i';
        default: return 'KhĂ´ng xĂ¡c Ä‘á»‹nh';
    }
}

function call_history_callio($page,$member_id)
{
    $('.show_omicall_timeline').html('');
    $.ajax({
        url      : BASE_URL+"CallioApi/get_history_calling",
        type     : "post",
        dataType : 'json',
        data     : {
            member_id  : $member_id,
            page       : $page
        },
        success  : function (result) {
            totalPages = result.totalPages ;
            var str = '';
            if(result.docs.length == 0){
                str = '<li><p>ChÆ°a cĂ³ lá»‹ch sá»­ cuá»™c gá»i</p></li>';
            }else{
                $.each(result.docs,function (index,value) {
                    if (index % 2 == 0){
                        css='';
                    }
                    else
                    {
                        css='timeline-inverted';
                    }
                     var date =new Date(value.createTime)
                    str += '<li class='+css+'>';
                    str += '<div class="timeline-badge"></div>';
                    str += '<div class="timeline-panel">';
                    str += '<div class="timeline-heading">';
                    str += (value.direction == 'outbound') ?
                    '<h4 class="timeline-title">Cuá»™c gá»i vĂ o tá»«: '+ value.fromUser.name+' - SDT : '+value.fromNumber+'</h4>' :
                    '<h4 class="timeline-title">Cuá»™c gá»i ra Ä‘áº¿n: '+ value.toUser.name+' - SDT : '+value.toNumber+'</h4>';
                    str += '<div class="flex-element">';
                    str += '<h5 class="text-muted"><i class="glyphicon glyphicon-time"></i> '+date.toLocaleDateString()+' '+date.toLocaleTimeString()+'</h5>';
                    str +='</div>'
                    str +='</div>'
                    str +=' <div class="timeline-body">'
                    str +='<input class="callio_id" type="hidden" value="'+value._id+'">'
                    str += '<button class="get-callio-record btn btn-info">Láº¥y ghi Ă¢m</button>'
                    str +=' </div></div>'
                    str += '</li>'
                })
            }

            $('.show_callio_timeline').append(str)
            $('.get-callio-record').on('click', function(){
                makeAudioCallio($(this))
            })
        }
    });
}

function call_history_omicall($member_id)
{
    $('.show_callio_timeline').html('');
    $.ajax({
            url      :BASE_URL + "ManageUser/call_transaction",
            type     : "post",
            dataType : 'json',
            data     : {
                member_id  :$member_id,
            },
            success  : function (result) {
                    var str = '';
                    if(result.data.length == 0){
                        str = '<li><p>ChÆ°a cĂ³ lá»‹ch sá»­ cuá»™c gá»i</p></li>';
                    }else{
                        $.each(result.data,function (index,value) {
                            if (index % 2 == 0){
                                css='';
                            }
                            else
                            {
                                css='timeline-inverted';
                            }
                            var date =new Date(value.created_date)
                            str += '<li class='+css+'>';
                            str += '<div class="timeline-badge"></div>';
                            str += '<div class="timeline-panel">';
                            str += '<div class="timeline-heading">';
                            str += '<h4 class="timeline-title">Cuá»™c gá»i tá»«: '+(value.source_number == value.phone_number ? value.customer.full_name : (value.user[0].full_name))+' - SDT : '+value.source_number+'</h4>';
                            str += '<div class="flex-element">';
                            str += '<h5 class="text-muted">'+ getTypeTransaction(value.direction) +' / '+ getTypeTransaction(value.disposition) +'</h5>';
                            str += '<h5 class="text-muted"><i class="glyphicon glyphicon-time"></i> '+date.toLocaleDateString()+' '+date.toLocaleTimeString()+'</h5>';
                            str +='</div>'
                            str +='</div>'
                            str +=' <div class="timeline-body">'
                            str += '<h4>Tags: '+value.tag.toString()+' </h4>'
                            str += '<h4>Ghi chĂº : '+value.note+'</h4>'
                            if(value.recording_file){
                                str += '<audio controls>'
                                str += '<source src="'+value.recording_file+'" type="audio/mpeg">'
                                str += '</audio>'
                            }
                            str +=' </div></div>'
                            str += '</li>'
                        })
                    }
                    $('.show_omicall_timeline').html(str)
                }
        });
}

function call_history_grandstream($member_id,$offset,$limit,$from_date,$to_date)
{
    $('.show_omicall_timeline').html('');
    $.ajax({
        url      : BASE_URL+"GrandStreamApi/get_history_calling",
        type     : "post",
        dataType : 'json',
        data     : {
            member_id  : $member_id,
            offset     : $offset,
            limit      : $limit,
            from_date  : $from_date,
            to_date    : $to_date
        },
        success  : function (result) {
            LENGTH_GRANDSTREAM =  result.cdr_root.length;
            var str = '';
            if(result.cdr_root.length == 0 &&  CHECK_NOTI_GRANDSTREAM == 0){
                str = '<li><p>ChÆ°a cĂ³ lá»‹ch sá»­ cuá»™c gá»i</p></li>';
            }else{
                CHECK_NOTI_GRANDSTREAM ++ ;
                $.each(result.cdr_root,function (index,value) {
                    if (index % 2 == 0){
                        css='';
                    }
                    else
                    {
                        css='timeline-inverted';
                    }
                    var date =new Date(value.start)
                    str += '<li class='+css+'>';
                    str += '<div class="timeline-badge"></div>';
                    str += '<div class="timeline-panel">';
                    str += '<div class="timeline-heading">';
                    str += (value.userfield   == 'Outbound') ?
                    '<h4 class="timeline-title">Cuá»™c gá»i vĂ o tá»«: '+ value.caller_name+'</h4>' :
                    '<h4 class="timeline-title">Cuá»™c gá»i ra Ä‘áº¿n: '+ value.caller_name+' - SDT : '+value.dst+'</h4>';
                    str += '<div class="flex-element">';
                    str += '<h5 class="text-muted"><i class="glyphicon glyphicon-time"></i> '+date.toLocaleDateString()+' '+date.toLocaleTimeString()+'</h5>';
                    str +='</div>'
                    str +='</div>'
                    str +=' <div class="timeline-body">'
                    str +='<input class="grandstream_record_file" type="hidden" value="'+value.recordfiles+'">'
                    str += '<button class="get-grandstream-record btn btn-info">Láº¥y ghi Ă¢m</button>'
                    str +=' </div></div>'
                    str += '</li>'
                })
            }
            $('.show_grandstream_timeline').append(str)
            $('.get-grandstream-record').on('click', function(){
                makeAudioGrandstream($(this))
            })
        },
        error: function () {
            str = '<li><p>ChÆ°a cĂ³ lá»‹ch sá»­ cuá»™c gá»i</p></li>';
            $('.show_grandstream_timeline').html(str);
        }
    });
}

function scroll_grandstream(){
    window.addEventListener('scroll',()=>{
        const endOfPage = window.scrollY + window.innerHeight >= document.documentElement.scrollHeight;
        if (endOfPage && LENGTH_GRANDSTREAM != 0 ) {
           OFFSET += LIMIT ;
           call_history_grandstream(MEMBER_ID,  OFFSET ,LIMIT );

        }
    })
}

$('.grandstream_cskh').click(function(){
    call_history_grandstream(MEMBER_ID,OFFSET,LIMIT);
    scroll_grandstream()

})

$('#submit-search-grandstream').click(function(){
    $('.show_grandstream_timeline').html('');
    OFFSET = 0;
    CHECK_NOTI_GRANDSTREAM = 0;
    startTime = $('#date_start').val();
    endTime   = $('#date_end').val();
    call_history_grandstream(MEMBER_ID,  OFFSET ,LIMIT,startTime ,endTime  );
})

    // grandstream makephone click
    $(document).on('click','.grandstream-btn-call',function(){
        let lineTo = $(this).attr('data-lineTo');
        let callTo = $(this).attr('data-callTo');
        $.ajax({
            url      : BASE_URL+"GrandStreamApi/callSDK",
            type     : "post",
            dataType : 'json',
            data     : {
                phone  : callTo,
                lineToCall:lineTo
            },
            success  : function (result) {
                console.log(result);
            },
            error: function () {

            }
        });
    });

    function encodeID(id){
        var base64 = btoa(id);
        var urlSafe = base64.replace(/\+/g, '-').replace(/\//g, '_');
        return urlSafe.replace(/=*$/, '');
    }
