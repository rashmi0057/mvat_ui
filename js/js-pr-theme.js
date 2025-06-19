$(document).ready(function () {
    // if($('.main-slider').length > 0){
    //     $('.main-slider').slick({
    //         autoplay: true,
    //         prevArrow: '<i class="priya-angle-double-left"></i>',
    //         nextArrow:'<i class="priya-angle-double-right right-arrow"></i>'
    //     });
    // }

    // ganeswar Aded slider slick arrow
    $('.main-slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,  // 2 seconds
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<div class="slick-arrow left-arrow">&#10094;</div>',
        nextArrow: '<div class="slick-arrow right-arrow">&#10095;</div>',
    });





    if ($('.expand-box').length > 0) {
        $('.expand-box .has-children > span').click(function () {
            if ($(this).parent().hasClass('collapsed')) {
                $(this).parent().removeClass('collapsed');
                $(this).parent().children('ul').slideDown(300);
            } else {
                $(this).parent().addClass('collapsed');
                $(this).parent().children('ul').slideUp(300);
            }
        });
        $('.expand-box .has-children > ul').slideUp(300);
        $('.expand-box .has-children').addClass('collapsed');
    }
    if ($('.login-box').length > 0) {
        $('[data-link]').click(function () {
            let id = $(this).data('link');
            $('#' + id).slideDown(300).siblings().slideUp(300);
        });
    }
    if ($('.ajax-submit').length > 0) {
        $('.ajax-submit [name]').focus(function () {
            $(this).parents('.form-group').find('.err').remove();
        });
        $('.ajax-submit').submit(function () {
            var disForm = $(this);
            var formID = disForm.attr('id');
            window.event.preventDefault();
            var ajaxFormCallback = disForm.data('callback') || '';
            var err_count = 0;
            disForm.find('[name]').each(function () {
                if ($(this).val() == '' && (!$(this).hasClass("optional")) && (!$(this).is(":disabled")) && (!$(this).prop("readonly"))) {
                    var title = $(this).attr('data-title') || 'This field';
                    $(this).parents('.form-group').find('.err').remove();
                    $(this).parents('.form-group').append('<p class="err">' + title + ' is required</p>');
                    err_count++;
                }
            });
            if (err_count <= 0) {
                disForm.find('[data-opt="md5_encrypt"]').each(function () {

                    var pwdrawVal = $(this).val();
                    var encVal = calcMD5(pwdrawVal);
                    $(this).val(encVal);

                });
                var fdata = new FormData(this);
                $.ajax({
                    url: disForm.attr('action') || '',
                    type: disForm.attr('method') || 'get',
                    data: fdata,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        $('[type="submit"]').prepend('<i class="img priya-spinner"></i>').addClass('loading').attr('type', 'button');
                    },
                    success: function (resp) {
                        $('[type="button"].loading .img').remove();
                        $('[type="button"].loading').attr('type', 'submit').removeClass('loading');
                        let data = JSON.parse(resp);
                        console.log(data);
                        if (data.success) {
                            if (formID !== 'loginfrm') {
                                prAlert(data.message);
                            }
                            disForm[0].reset();
                            if ("" != ajaxFormCallback) { for (var fns = ajaxFormCallback.split(";"), i = 0; i < fns.length; i++)if ("" != fns[i]) { for (var f, n = fns[i].split("("), s = n[0], t = n[1].split(")")[0].split(","), l = 0; l < t.length; l++)isNaN(t[l]) ? 0 == t[l].indexOf("'") || 0 == t[l].indexOf('"') ? t[l] = t[l].substr(1, t[l].length - 2) : "data" == t[l] ? t[l] = data : "disForm" == t[l] && (t[l] = disForm) : t[l] = +t[l]; var p = window[s]; "function" == typeof p && p.apply(null, t) } }
                        } else {
                            disForm.find('.err-msg').remove();
                            disForm.find('h5 + hr').after('<div class="err-msg">' + data.message + '</div>');
                            if (formID == 'loginfrm') {
                                $("#reload").trigger('click');
                                $("#mobileno").val('');
                                $("#captcha").val('');
                                $("#loginpwd").val('');
                            }
                        }
                    },
                    error: function (jqXHR) {
                        console.log(jqXHR);
                        $('[type="button"].loading .img').remove();
                        $('[type="button"].loading').attr('type', 'submit').removeClass('loading');
                        let msg = JSON.parse(jqXHR.responseText).message;
                        disForm.find('.err-msg').remove();
                        disForm.find('h5 + hr').after('<div class="err-msg">' + msg + '</div>');
                        if (formID == 'loginfrm') {
                            $("#reload").trigger('click');
                            $("#captcha").val('');
                        }
                    }
                });
            }
        });
    }
    // if($('.sidebar .block-2').length > 0){
    //     $('.sidebar .block-2 h3').click(function(){
    //         let display = $(this).parent().children(':not(h3)').css('display');
    //         if(display == "none"){
    //             $(this).parent().children(':not(h3)').slideDown(300);
    //         }else{
    //             $(this).parent().children(':not(h3)').slideUp(300);
    //         }
    //     });
    // }
    if ($('ol.faq').length > 0) {
        $('ol.faq li h4').click(function () {
            $(this).parent().children('p, .ans').slideDown().closest('li').siblings().find('p, .ans').slideUp(300);
        });
    }
    if ($('.view-data .btn-comply').length > 0) {
        $('.view-data .btn-comply').click(function () {
            let cname = $(this).data('comply') || "comply[]";
            $(this).parent().find('.pri-form').remove();
            $(this).parent().append('<input type="text" class="pri-form join-comments" name="' + cname + '" placeholder="Your Suggestion..." onchange="joinComments()" /><button type="button" class="btn btn-sm comply-cancel" onclick="removeComply(this)">Cancel</button>');
            $(this).parents('.form-group').addClass('comply');
            $(this).hide();
            $('.backToCorrection').show();
            $('.assignToAA').hide();
        });
    }
    if ($('.view-data .btn-amendment').length > 0) {
        $('.view-data .btn-amendment').click(function () {
            let cname = $(this).data('amendment') || "amendment[]";
            $(this).parent().find('.pri-form').remove();
            $(this).parent().append('<input type="text" class="pri-form" name="' + cname + '" placeholder="Your Amendment..." /><button type="button" class="btn btn-sm comply-cancel" onclick="removeComply(this)">Cancel</button>');
            $(this).parents('.form-group').addClass('comply');
            $(this).hide();
            $('.backToCorrection').show();
        });
    }
    if ($('.datatable').length > 0) {
        let table = new DataTable('.datatable');
    }
    if ($('.form-to-view').length > 0) {
        $('span.text-danger, .form-to-view .add_more_button_cls, .form-to-view .add-new, .form-to-view input[type=hidden]').remove();
        $('.form-to-view').find('input, select, textarea').prop('readonly', true);
        $('.form-to-view').find('input, select, textarea').each(function () {
            if ($(this).attr('type') != 'checkbox') {
                let v = ($(this).is('select') && $(this).val() != '') ? $(this).children('option:selected').text() : $(this).val();
                $(this).hide().after('<span class="val">' + v + '</span>');
            } else {

                $(this).attr('readonly');
            }
        });
        $('.form-to-view .prevbtncls, .form-to-view .nextbtncls').parent().remove();
        $('.form-to-view .priya-close').remove();
    }
    $('.sidebar .has-submenu > span').click(function () {
        if ($(this).parent().children('ul').css('display') == 'none') {
            $(this).parent().children('ul').slideDown(300);
        } else {
            $(this).parent().children('ul').slideUp(300);
        }
    });
    $('.prevbtncls,.nextbtncls').click(function () {
        console.log($(this).attr('id') + " Clicked for scroll to top");
        $("*").animate({ scrollTop: 0 }, 300);
        // calculate();
        $('[data-pr-app] [data-model], [data-common][data-model]').keyup();
    });
    addStar();

    $('.dataTables_wrapper').each(function () {
        debugger;
        let tww = $(this).width();
        let tw = $(this).find('table').width();
        if (tww > tw) {
            $(this).find('table').removeClass('table-responsive');
        } else {
            $(this).find('table').addClass('table-responsive');
        }
    });

    let elements = [];
    $('*').each(function () {
        let fs = parseInt($(this).css('font-size'));
        elements.push({ ele: $(this), fs: fs, originalFs: fs });
    });


    $('.priya-font-minus').click(function () {
        elements.forEach((item) => {
            let newFontSize = item.fs - 2;
            item.ele.css('font-size', `${newFontSize}px`); // Apply new font size
            item.fs = newFontSize; // Update stored font size
        });
    });

    // Increase font size
    $('.priya-font-plus').click(function () {
        elements.forEach((item) => {
            let newFontSize = item.fs + 2; // Increase font size by 1
            item.ele.css('font-size', `${newFontSize}px`); // Apply new font size
            item.fs = newFontSize; // Update stored font size
        });
    });

    // Reset to original font size
    $('.priya-font-normal').click(function () {
        elements.forEach((item) => {
            item.ele.css('font-size', `${item.originalFs}px`); // Reset to original font size
            item.fs = item.originalFs; // Update stored font size
        });
    });

    $('.form-control').each(function () {
        if (!$(this).hasClass('pri-form')) {
            $(this).addClass('pri-form');
        };
    });

    $('#highlight').click(function () {
        $("a").toggleClass("highlight");
    });

    var isHeight = false;
    var originalLineHeight = "24px";
    $("#lineHeight").click(function () {
        var currentLineHeight = $("*").css("line-height");

        if (currentLineHeight !== originalLineHeight) {
            $("*").css("line-height", originalLineHeight);
            $(".applink").css("line-height", "80px");
        } else {
            $("*").css("line-height", "4");
        }

        $(".ico-box").css("line-height", "");

        isHeight = !isHeight;
    });


    var isSpaced = false;
    $("#textSpacing").click(function () {
        if (isSpaced) {
            $("*").css({
                "letter-spacing": "normal",
                "word-spacing": "normal",
            });
        } else {
            $("*").css({
                "letter-spacing": "2px",
                "word-spacing": "5px",
            });
        }
        isSpaced = !isSpaced;
    });
    $(document).on("keydown", function (e) {
        if (e.key === "Tab") {
            $("a").on("focus", function () {
                $(this).addClass("highlight");
            });

            $("a").on("blur", function () {
                $(this).removeClass("highlight");
            });
        }
    });

});

function addStar() {
    $('.mandatory').each(function () {
        let lblTxt = $(this).children('label').text().trim();
        if (lblTxt.slice(-1) != '*') {
            $(this).children('label').append('<span class="text-danger">*</span>');
        }
    });
}

function checkBlank(d) {
    let errCnt = 0;
    $(d).closest('.stepdivmaincls').find('.mandatory').each(function () {
        if ($(this).css('display') != "none" && $(this).parent().css('display') != "none") {
            $(this).find('input,select,textarea').each(function () {
                if ($(this).val().trim() == "" && !$(this).is(':radio') && !$(this).is(':checkbox')) {
                    $(this).addClass("highlight-color");
                    errCnt++;
                } else if ($(this).is(':radio') || $(this).is(':checkbox')) {
                    let inputName = $(this).prop('name');
                    let chked = 0;
                    $('[name="' + inputName + '"]').each(function () {
                        if ($(this).is(':checked')) {
                            chked++;
                        }
                    });
                    if (chked == 0) {
                        $(this).css({
                            'background-color': 'rgb(243, 172, 172)',
                            'outline': '2px solid rgb(243, 172, 172)'
                        });
                        errCnt++;
                    } else {
                        $(this).css({
                            'background-color': '',
                            'outline': ''
                        });
                    }
                }
            });
        }
    });
    if (errCnt > 0) {
        prToast("Mandatory fields should be filled", {
            "type": "danger",
            'delay': 15000
        });
        return false;
    } else {
        return true;
    }
}
function moveCursorToEnd(inputField) {
    var length = inputField.value.length;
    inputField.setSelectionRange(length, length);
}
var instructions = [
    {
        selectors: '.hearing_proceeding_remarks,.hearing_reason,.hearing_remark_validation,#firm_name,.sequirity__firm_name_cls,.details_surefy_firm_name_cls, .details_of_surety_firm_name_cls,.general_information_name_cls,.perma_propritor_house_no_cls',
        instruction: '1. Enter Alphanumeric value of length less than or equal to 500 characters . <br />2. No special characters are allowed except space.'
    },
    {
        selectors: '#owner_name, #name_as_pan, .fullname_cls, .fathers_name_cls, .cst_owner_name_cls, .business_prop_or_director_name_cls, .information_fullname_cls, .information_father_name_cls, .applicant_fathers_name_cls, .general_information_father_name_cls',
        instruction: '1. Enter alphabetic value of length less than or equal to 500. <br />2. No special charactors are allowed except space.'
    },
    {
        selectors: '.contact_person_designation,.notice_house_no_address_cls,#address, .propritor_house_no_cls, .address_of_property_situated_cls, .property_situated_cls, .person_inte_partner_fulladdress_cls, .additional_business_address_cls, .presnt_proprietor_house_cls, .additional_places_of_business_house_no_address_cls, #principal_place_business, .declaration_dealer_place_cls, .agreed_place_cls, .place_cls, #business_address,#permanent_details_address, #location_place_of_business_add, .information_address_cls, .information_pres_address_cls, .house_no_address_cls, .business_details_house_no_address_cls, .permanent_address_house_no_address_cls, .valid-address',
        instruction: '1. Enter Alpha numeric value of length less than or equal to 250 characters. <br />2. Following special characters are allowed <b> ).-/(,</b> and space'
    },
    {
        selectors: '.notice_village_town_city_cls,#city, .proprietor_village_cls, .additional_business_village_cls, .presnt_proprietor_village, .additional_places_of_business_village_town_city_cl, #business_village, #permanent_details_village, #location_place_of_business_vil_1, .information_village_cls, .information_pres_village_cls, .village_town_city_cls, .business_details_village_town_city_cls, .permanent_address_village_town_city_cls,,#additional_business_branch_nam_1,#additional_business_village_1,#additional_business_tehsil_1, .valid-village',
        instruction: '1. Enter alphabetic value of length less than or equal to 150.<br />2. No special charactors are allowed except space.'
    },
    {
        selectors: '.challen_recipet_no_cls,#post_office, .type_of_sequirity_furnished_postoffice_name_cls, #business_post_office, .sequirity_furnished_postoffice_name_cls, .security_furnished_postoffice_name_cls',
        instruction: 'Alphanumeric maximum 200 charactors allowed'
    },
    {
        selectors: '.permanent_address_pin_code_cls,.main_office_pin_code_cls,.notice_pin_code_cls,.pin_code_cls,#pincode, .perma_proprietor_pincode_cls, .presnt_proprietor_pincode_cls, .additional_business_pincode_cls, .additional_places_of_business_pin_code_cls, #business_pincode, #permanent_details_pincode, .location_place_of_business_pincode_cls, .information_pincode_cls, .information_pres_pincode_cls, .business_details_pin_code_cls, .present_address_pincode_cls, .valid-pin',
        instruction: 'Enter 6 digit pin'
    },
    {
        selectors: '.additional_business_stdcode_cls, .additional_places_of_business_std_code_cls, #business_stdcode, #business_fax_stdcode, .notices_comm_std_code_cls, .business_details_fax_std_code_cls, .business_details_std_code_cls, .valid-std-code',
        instruction: 'Minimum 2 to Maximum 5 digit STD Code'
    },
    {
        selectors: '#phone_no, #fax_no, .additional_business_telephone_no_cls, .additional_places_of_business_telephone_no_cls, #business_telephone_no, .business_fax_no_cls, .business_details_fax_no_cls, .business_details_telephone_no_cls, .valid-telephone',
        instruction: 'Maximum 9 digits. No special charactors allowed.'
    },
    {
        selectors: '#mobile_no, #business_mobile_no, .main_office_mobile_no_cls',
        instruction: '1. Mobile Number should start from 0. <br>2. It must be 11 digit number.'
    },
    {
        selectors: '#email_id, .Email_Id_cls, .email_cls, #business_email, .business_details_email_id_cls',
        instruction: 'Enter proper email format'
    },
    {
        selectors: '#tan, #business_tan, .main_office_tan_cls',
        instruction: 'Enter valid TAN which should look like ABCD12345E'
    },
    {
        selectors: '#eac',
        instruction: 'Enter alpha-numeric value lessthan or equal to 15 charactors'
    },
    {
        selectors: '.challen_amount_cls,.suerty_amount_cls,.sequirity_furnished_amount_cls,#sales_exceeding_rs, .approximate_value_cls, .property_owned_approximate_value_cls, .person_inte_partner_aproximate_value_cls, .type_of_sequirity_furnished_postoffice_name_amount, .details_of_surety_surety_amount_cls, .security_furnished_amount_cls, .details_surefy_amnout_cls, .value_of_purchase_cls, .valid-currency',
        instruction: 'Please enter numeric value of length less than or equal to 16 including two decimal places.'
    },
    {
        selectors: '.length-16',
        instruction: 'Length should not greater than 16 digit.'
    },
    {
        selectors: '.branch_name_cls, .additional_business_branch_name_cls, .type_of_sequirity_furnished_branch_name_cls, .bank_name_cls, .sequirity_furnished_branch_name_cls, .business_details_branch_name_cls, .security_furnished_branch_name_cls',
        instruction: 'Please enter alphabetic value of length less than or equal to 60 characters, following special characters are allowed -,.()&/ and space.'
    },
    {
        selectors: '.account_no_cls',
        instruction: 'Please enter alphanumeric value of length less than or equal to 20 characters, no special characters are allowed.'
    },
    {
        selectors: '.owner_namee_cls, .propritor_namecls, .full_name_cls, .declaration_fullname_cls',
        instruction: 'Please enter alphabetic value of length less than or equal to 500, no special characters are allowed except space.'
    },
    {
        selectors: '.des_of_properties_cls',
        instruction: 'Please enter alphabetic value of length less than or equal to 200, no special characters are allowed except space.'
    },
    {
        selectors: '.valid-serial',
        instruction: 'Please enter alphanumeric value of length less than or equal to 30 characters, following special characters are allowed - / and space.'
    },
    {
        selectors: '.additional_business_if_otherspecify_cls',
        instruction: 'Please enter alphabetic value of length less than or equal to 4000 characters, following special characters are allowed - / and space.'
    },
    {
        selectors: '.details_of_surety_tin_of_surety_cls, .tin_of_sequirity_cls, .vat_tin_cls, .details_surefy_tin_rc_cls, .valid-tin',
        instruction: '1. Must start with state code 02.<br>2. Minimum 11 digit and Maximum 15 digit.'
    },
    {
        selectors: '.share_percentage_cls, .extent_of_interest_in_busi_cls, .properties_owned_extent_share_cls, .person_inte_partner_extent_of_share_cls, .general_information_extent_of_interest_cls, .valid-percent',
        instruction: 'Please enter numeric value less than or equal to 100, maximum two decimal places are allowed. Do not enter Percent(%) sign.(e.g. 16.50)'
    },
    {
        selectors: '#tehsil, .additional_places_of_business_tehsil_cls, .perma_proprietor_tehsil_cls, .presnt_proprietor_tehsil_cls, .additional_business_tehsil_cls, #business_tehsil, #permanent_details_tehsil, .location_place_of_business_tehsil_cls, .information_tehsil_cls, .information_pres_tehsil_cls, .business_details_tehsil_cls, .permanent_address_tehsil_cls, .valid-tehsil',
        instruction: 'Only alphabets and space allowed'
    },
    {
        selectors: '.particulars_relating_licence_permission_cls, .chamber_of_commerce_trade_comm_cls',
        instruction: 'Only alphabets, numbers and space allowed'
    },
    {
        selectors: '#pan, #business_pan, .main_office_pan_cls',
        instruction: 'Please Enter Valid PAN'
    },
    {
        selectors: '.vehicle_no_cls, .valid-vehicle-no, .valid-vehicle',
        instruction: 'Vechicle Number field should be alphanumeric 8-10'
    },
    {
        selectors: '.vehicle_details_no_of_seats_cls',
        instruction: '1. Numeric value of length less than or equal to 5. <br>2. Decimal not allowed.'
    },
    {
        selectors: '.permit_details_permit_no_cls',
        instruction: 'Please enter alphanumeric value of length less than or equal to 30 characters, following special characters are allowed --> ).-/(,'
    },
    {
        selectors: '.permit_details_no_of_trips_cls, .valid-max-8',
        instruction: 'Please enter numeric value length less than or equal to 8, decimal is not allowed.'
    },
    {
        selectors: '.permit_details_route_area_covered_cls',
        instruction: 'Please enter alphanumeric value of length less than or equal to 200, no special characters are allowed except space.'
    },
    {
        selectors: '.permit_details_remarks_cls',
        instruction: 'Please enter alphabetic value of length less than or equal to 200, no special characters are allowed except dot and space.'
    },
    {
        selectors: '.details_surefy_regist_certif_cls',
        instruction: 'Please enter numeric value of length less than or equal to 4 , decimal is not allowed.'
    },
    {
        selectors: '.valid-goods',
        instruction: 'Alpha-numeric value maximum 200 charactors'
    },
    {
        selectors: '.sales_price_recieved_cls',
        instruction: 'Please Enter the numeric value less than and equal to 16.<br> Include two decimal places.'
    },
    {
        selectors: '.valid-deduction-act',
        instruction: 'Please enter only alphanumeric value of length less than or equal to 50, special characters -/()& space are allowed.'
    },
    {
        selectors: '.valid-tax-liability-desc',
        instruction: 'Please enter alphanumeric value of length less than or equal to 50 characters, no special characters are allowed except space,dot and &.'
    },

    {
        selectors: '.1stmonth_taxable_turnover_cls,.1stmonth_amount_of_tax_cls,.2ndmonth_taxable_turnover,.3rdmonth_amount_of_tax,.total_taxable_turnover_cls.2ndmonth_amount_of_tax_cls',
        instruction: 'Please Enter the numeric value less than and equal to 16.<br> Including two decimal places.'
    },
    {
        selectors: '.sales_price_recieved_cls',
        instruction: 'Please Enter the numeric value less than and equal to 16.<br> Include two decimal places.'
    },
    {
        selectors: '.valid-seller-name',
        instruction: 'Please Enter the alpha-numeric value less than and equal to 100.<br> Allowed special characters are &. &quote; and space'
    },
    {
        selectors: '.valid-commodity-name',
        instruction: 'Please Enter the alpha-numeric value less than and equal to 200.<br> Allowed special characters are &. /)(- and space'
    },
    {
        selectors: '.alphanum-4',
        instruction: 'Please Enter the alpha-numeric value of length less than and equal to 4.<br> No special characters are allowed except space'
    },
    {
        selectors: '.num-max-11',
        instruction: 'Please Enter a numeric value of length less than and equal to 11.'
    },
    {
        selectors: '.valid-contracteeName',
        instruction: '1. Please Enter a Alpha-numeric value of length less than and equal to 100. <br />2. Allowed special characters are dot, space and \'&\''
    },
    {
        selectors: '.num-8',
        instruction: 'Please enter numeric value of length less than or equal to 8, decimal is not allowed.'
    },
    {
        selectors: '.num-max-13',
        instruction: 'Please enter numeric value of length less than or equal to 13 , decimal is not allowed.'
    },
    {
        selectors: '.valid-notification-no',
        instruction: 'Please enter only numeric value of length less than or equal to 20, special characters - and / are allowed.'
    },
    {
        selectors: '.valid-entitlemnet-certi-no',
        instruction: 'Please enter only alphanumeric value of length less than or equal to 20, special characters -/()& are allowed.'
    },
    {
        selectors: '.valid-year-of-availment',
        instruction: 'Please enter value in format 2010-2011.'
    },
    {
        selectors: '.valid-bank',
        instruction: 'Please enter alphanumeric value of length less than or equal to 50 characters, no special characters are allowed except space and dot.'
    },
    {
        selectors: '.valid-receipt',
        instruction: 'Please enter alphanumeric value of length less than or equal to 30 characters, no special characters are allowed.'
    },
    {
        selectors: '.valid-tdn',
        instruction: 'Please enter numeric value of length less than or equal to 11 digits only.'
    },
    {
        selectors: '.opening_stock_cls',
        instruction: 'Please enter numeric value of length less than or equal to 8, decimal is not allowed.'
    },
    {
        selectors: '.transaction_receipt_no_cls',
        instruction: 'Please enter numeric value of length less than or equal to 15, decimal is not allowed.'
    },
    {
        selectors: '.name_of_goods_cls',
        instruction: 'Please enter alphabetic value of length less than or equal to 50, no special characters are allowed except space.'
    },
];
$(document).on('keyup change', '[name]', function () {
    $(this).css('background-color', '');
});
$(document).on('focus keyup', '[name]:not(form,[readonly])', function () {
    let instructPosTop = 120;
    if ($(this).parents('[data-instruct-top-pos]').length > 0) {
        instructPosTop = parseFloat($(this).parents('[data-instruct-top-pos]').data('instruct-top-pos'));
    }
    let msg = "";
    let thisId = '#' + this.id;
    let classes = $(this).attr('class').split(' ').map(cls => "." + cls);
    classes.push(thisId);
    var scroll = $(window).scrollTop();
    let topPos = (scroll < instructPosTop) ? (instructPosTop - scroll) : 0;
    let label = $(this).closest('.form-group').find('label').text() || 'Instruction';
    for (let i = 0; i < instructions.length; i++) {
        let selectors = instructions[i].selectors.split(',').map(s => s.trim());
        let exists = classes.some(item => selectors.indexOf(item) !== -1);
        if (exists) {
            msg += instructions[i].instruction;
            $('.instruction').remove();
            $('.right-content').prepend('<div class="instruction" style="top:' + topPos + 'px"><strong>' + label + '-</strong> <span>' + msg + '</span></div>');
        }
    }
    if ($(this).data('instruct')) {
        $('.instruction').remove();
        $('.right-content').prepend('<div class="instruction" style="top:' + topPos + 'px"><strong>' + label + '-</strong> <span>' + $(this).data('instruct') + '</span></div>');
    }
    $(this).blur(function () {
        $('.instruction').remove();
    });
    if ($(this).attr('maxlength')) {
        let ml = parseInt($(this).attr('maxlength')) || 1000;
        if (this.value.length > this.maxLength) {
            this.value = this.value.slice(0, this.maxLength);
        }
    }
});
$(document).on('focus click', '[data-model]:not(select)', function () {
    moveCursorToEnd(this);
});
$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if (scroll < 120) {
        $('.instruction').css("top", (120 - scroll));
    } else {
        $('.instruction').css("top", 0);
    }
});
$(document).on('blur', '.sales_price_recieved_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[0-9]+$/;
        if (!regex.test(v) || v.length != 16) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid PIN', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.hearing_proceeding_remarks,.hearing_reason,.hearing_remark_validation,#firm_name, .sequirity__firm_name_cls, .details_of_surety_firm_name_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[A-Za-z0-9\s'-.\/\)\(]{0,50}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '#owner_name, #name_as_pan, .fullname_cls, .fathers_name_cls, .propritor_namecls, .cst_owner_name_cls, .business_prop_or_director_name_cls, .information_fullname_cls, .information_father_name_cls, .applicant_fathers_name_cls, .general_information_father_name_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[A-Za-z\s'-.]{0,50}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Name Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.valid-vat-act', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[A-Za-z0-9-\/\(\)\&\s]{0,50}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});

$(document).on('blur', '.contact_person_designation,.notice_house_no_address_cls,#address, .propritor_house_no_cls, .address_of_property_situated_cls, .property_situated_cls, .person_inte_partner_fulladdress_cls, .additional_business_address_cls, .presnt_proprietor_house_cls, .additional_places_of_business_house_no_address_cls, #principal_place_business, .declaration_dealer_place_cls, .agreed_place_cls, .place_cls, #business_address, #permanent_details_address, #location_place_of_business_add, .information_address_cls, .information_pres_address_cls, .house_no_address_cls, .business_details_house_no_address_cls, .permanent_address_house_no_address_cls, .valid-address', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[A-Za-z0-9\/\s'-.\/\)\(]{0,250}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Address', { type: 'danger' });
        }
    }
});
$(document).on('blur', '#city, .proprietor_village_cls, .additional_business_village_cls, .presnt_proprietor_village, .additional_places_of_business_village_town_city_cl, #business_village, #permanent_details_village, #location_place_of_business_vil_1, .information_village_cls, .information_pres_village_cls, .village_town_city_cls, .business_details_village_town_city_cls, .permanent_address_village_town_city_cls, .valid-village', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[A-Za-z0-9\s]+$/;
        if (!regex.test(v) || v.length > 150) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Village/Town/City', { type: 'danger' });
        }
    }
});
$(document).on('blur', '#tehsil, .additional_places_of_business_tehsil_cls, .perma_proprietor_tehsil_cls, .presnt_proprietor_tehsil_cls, .additional_business_tehsil_cls, #business_tehsil, #permanent_details_tehsil, .location_place_of_business_tehsil_cls, .information_tehsil_cls, .information_pres_tehsil_cls, .business_details_tehsil_cls, .permanent_address_tehsil_cls, .valid-tehsil', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[A-Za-z\s]+$/;
        if (!regex.test(v) || v.length > 30) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Tehsil', { type: 'danger' });
        }
    }
});
$(document).on('blur', '#post_office, .type_of_sequirity_furnished_postoffice_name_cls, #business_post_office, .sequirity_furnished_postoffice_name_cls, .security_furnished_postoffice_name_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[A-Za-z0-9\s]+$/;
        if (!regex.test(v) || v.length > 200) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Post Office', { type: 'danger' });
        }
    }
});
$(document).on('blur', '#pincode, .perma_proprietor_pincode_cls, .presnt_proprietor_pincode_cls, .additional_business_pincode_cls, .additional_places_of_business_pin_code_cls, #business_pincode, #permanent_details_pincode, .location_place_of_business_pincode_cls, .information_pincode_cls, .information_pres_pincode_cls, .business_details_pin_code_cls, .present_address_pincode_cls, .valid-pin', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[0-9]+$/;
        if (!regex.test(v) || v.length != 6) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid PIN', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.additional_business_stdcode_cls, .additional_places_of_business_std_code_cls, #business_stdcode, #business_fax_stdcode, .notices_comm_std_code_cls, .business_details_fax_std_code_cls, .business_details_std_code_cls, .valid-std-code', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[0-9]{2,5}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('STD Code should 2 - 5 digit', { type: 'danger' });
        }
    }
});
$(document).on('blur', '#phone_no, #fax_no, .additional_business_telephone_no_cls, .additional_places_of_business_telephone_no_cls, #business_telephone_no, .business_fax_no_cls, .business_details_fax_no_cls, .business_details_telephone_no_cls, .valid-telephone', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[0-9]{5,9}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '#mobile_no, #business_mobile_no, .main_office_mobile_no_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^0\d{10}$/;
        if (!regex.test(v) || v.length != 11) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Mobile Number should be 11 digit followed by 0', { type: 'danger' });
        }
    }
});
$(document).on('blur', '#email_id, .Email_Id_cls, .email_cls, #business_email, .business_details_email_id_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Email', { type: 'danger' });
        }
    }
});
$('.main_office_pan_cls').blur(function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[A-Z]{5}[0-9]{4}[A-Z]$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid PAN', { type: 'danger' });
        }
    }
});
$(document).on('blur', '#tan, #business_tan, .main_office_tan_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[A-Z]{4}[0-9]{5}[A-Z]$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid TAN', { type: 'danger' });
        }
    }
});
$(document).on('blur', '#eac', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9\s]{0,15}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid EAC', { type: 'danger' });
        }
    }
});
$(document).on('blur', '#sales_exceeding_rs, .approximate_value_cls, .property_owned_approximate_value_cls, .person_inte_partner_aproximate_value_cls, .type_of_sequirity_furnished_postoffice_name_amount, .details_of_surety_surety_amount_cls, #tot_val_stock, #val_of_good, #val_of_manufactured, #breakup_value_of_stock, .security_furnished_amount_cls, .details_surefy_amnout_cls,.value_of_purchase_cls, .valid-currency', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^-?\d+(?:\.\d{1,2})?$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        } else {
            $(this).val(parseFloat(v).toFixed(2));
        }
    }
});
$(document).on('blur', '.length-16', function () {
    let v = $(this).val();
    if ((v.indexOf('.') < 0 && v.length > 16) || (v.length > 17)) {
        $(this).css('background-color', '#f3acac').focus();
        prToast('Length should not be greater than 16 charactor', { type: 'danger' });
    }
});
$(document).on('blur', '.branch_name_cls, .additional_business_branch_name_cls, .type_of_sequirity_furnished_branch_name_cls, .bank_name_cls, .sequirity_furnished_branch_name_cls, .business_details_branch_name_cls, .security_furnished_branch_name_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {

        const regex = /^[A-Za-z0-9-()&\s\/,.]{0,60}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid BRANCH NAME', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.account_no_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[A-Za-z0-9]{2,20}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Account No', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.owner_namee_cls, .propritor_namecls, .full_name_cls, .declaration_fullname_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[A-Za-z\s]{2,500}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Owner Name', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.des_of_properties_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[A-Za-z\s]{2,200}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Properties Description', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.additional_business_if_otherspecify_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[A-Za-z-\/\s]{0,4000}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Only alphabets allowed - Maximum 4000 characters', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.valid-serial', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[A-Za-z0-9-\/]{0,30}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Only alphabets allowed - Maximum 4000 characters', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.details_of_surety_tin_of_surety_cls, .tin_of_sequirity_cls, .vat_tin_cls, .details_surefy_tin_rc_cls, .valid-tin', function () {
    let d = $(this);
    let v = $(this).val().trim();
    if (v != "") {
        const regex1 = /^02\d{0,}$/;
        const regex2 = /^02\d{9,13}$/;
        if (!regex1.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Must start with state code 02', { type: 'danger' });
        } else if (!regex2.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('TIN length should be 11 digit', { type: 'danger' });
        }
        let tinName = $(this).attr('name');
        let addedTin = 0;
        $(this).closest('.addMultipleFieldCls').find('[name="' + tinName + '"]').each(function () {
            if ($(this).val().trim() == v) {
                addedTin++;
            }
        });
        if (addedTin > 1) {
            $(d).css('background-color', '#f3acac').focus();
            prToast('This TIN already added.', { type: 'danger' });
        }
    }
});

$(document).on('blur', '.removeduplicate-seller-tin', function () {
    let d = $(this);
    let v = $(this).val().trim();
    if (v != "") {
        const regex1 = /^02\d{0,}$/;
        const regex2 = /^02\d{9,13}$/;
        // if(!regex2.test(v)){
        //     $(this).css('background-color', '#f3acac').focus();
        //     prToast('TIN length should be 11 digit', {type:'danger'});
        // }
        let tinName = $(this).attr('name');
        let addedTin = 0;
        let totTin = [];
        $(this).closest('.addMultipleFieldCls').find('[name="' + tinName + '"]').each(function () {
            if ($(this).val().trim() != v) {
                addedTin++;
                totTin.push($(this).val().trim());
            }

        });
        if (addedTin >= 1) {
            if ($.inArray(v, totTin) === -1) {
                $(d).css('background-color', '#f3acac').focus();
                $(d).val('');
                prToast('Seller TIN must be Same.', { type: 'danger' });
            }

        }
    }
});

$(document).on('blur', '.removeduplicate-purchaser-tin', function () {
    let d = $(this);
    let v = $(this).val().trim();
    if (v != "") {
        const regex1 = /^02\d{0,}$/;
        const regex2 = /^02\d{9,13}$/;
        // if(!regex2.test(v)){
        //     $(this).css('background-color', '#f3acac').focus();
        //     prToast('TIN length should be 11 digit', {type:'danger'});
        // }
        let tinName = $(this).attr('name');
        let addedTin = 0;
        let totTin = [];
        $(this).closest('.addMultipleFieldCls').find('[name="' + tinName + '"]').each(function () {
            if ($(this).val().trim() != v) {
                addedTin++;
                totTin.push($(this).val().trim());
            }

        });
        if (addedTin >= 1) {
            if ($.inArray(v, totTin) === -1) {
                $(d).css('background-color', '#f3acac').focus();
                $(d).val('');
                prToast('Purchaser TIN must be Same.', { type: 'danger' });
            }

        }
    }
});

$(document).on('blur', '.share_percentage_cls, .extent_of_interest_in_busi_cls, .properties_owned_extent_share_cls, .person_inte_partner_extent_of_share_cls, .general_information_extent_of_interest_cls, .valid-percent', function () {
    let v = $(this).val();
    let totalValue = 0;
    $(this).closest('.addMultipleFieldCls').find('.share_percentage_cls, .extent_of_interest_in_busi_cls, .properties_owned_extent_share_cls, .person_inte_partner_extent_of_share_cls, .general_information_extent_of_interest_cls, .valid-percent').each(function () {
        totalValue += (parseFloat($(this).val()) || 0);
    });
    if (totalValue <= 100) {
        if (v.trim() != "") {
            const regex = /^(?:100(?:\.0{1,2})?|\d{0,2}(?:\.\d{1,2})?)$/;
            if (!regex.test(v) || parseFloat(v) > 100 || parseFloat(v) < 0) {
                $(this).css('background-color', '#f3acac').focus();
                prToast('Invalid Percentage', { type: 'danger' });
            }
        }
    } else {
        $(this).css('background-color', '#f3acac').focus();
        prToast('Percent value should not exceed 100', { type: 'danger' });
    }
});
$(document).on('blur', '.valid-percent-breakup', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^(?:100(?:\.0{1,2})?|\d{0,2}(?:\.\d{1,2})?)$/;
        if (!regex.test(v) || parseFloat(v) > 100 || parseFloat(v) < 0) {
            $(this).css("background-color", "#f3acac").focus();
            prToast("Invalid Percentage", { type: "danger" });
        }
    }
});
$(document).on('blur', '.vehicle_no_cls, .valid-vehicle-no, .valid-vehicle', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9]{8,10}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.vehicle_details_no_of_seats_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[0-5]{1}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.permit_details_permit_no_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9-\)\.\/\(\,]{0,30}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.permit_details_no_of_trips_cls, .valid-max-8', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[0-9]{0,8}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.permit_details_route_area_covered_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9\s]{1,200}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.permit_details_remarks_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z\.\s]{1,200}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.details_surefy_regist_certif_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[0-4]{1}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.valid-goods', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9]{1,200}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Alpha-numeric value maximum 200 charactors', { type: 'danger' });
        }
    }
});
$(document).on('keydown', '[type="date"]', function () {
    return false;
});
$(document).on('blur', '.particulars_relating_licence_permission_cls, .chamber_of_commerce_trade_comm_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9\s]{0,200}$/;

        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.valid-seller-name', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9\&\.\'\s]{0,200}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.valid-commodity-name', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9-\&\.\)\(\/\s]{0,200}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.alphanum-4', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9\s]{0,4}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.num-8', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[0-9]{0,8}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.num-max-11', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[0-9]{0,11}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.num-max-13', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[0-9]{0,13}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.valid-tax-liability-desc', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9.\&\s]{0,50}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.contractee_name_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9.\&\s]{0,100}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.valid-bank', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9.\s]{0,50}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.valid-receipt', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9]{0,30}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.valid-tdn', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[0-9]{0,11}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.opening_stock_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[0-9]{0,8}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.transaction_receipt_no_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[0-9]{0,15}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.name_of_goods_cls', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z\s]{0,50}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.valid-notification-no', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[0-9-\/]{0,20}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.valid-entitlemnet-certi-no', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9-\/\(\)\&]{0,20}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', '.valid-year-of-availment', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^\d{4}-\d{4}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Invalid Format', { type: 'danger' });
        }
    }
});
$(document).on('blur', 'input[type=search]', function () {
    let v = $(this).val();
    if (v.trim() != "") {
        const regex = /^[a-zA-Z0-9-_.@]{0,50}$/;
        if (!regex.test(v)) {
            $(this).css('background-color', '#f3acac').focus();
            prToast('Alphabet, numeric, - _.@ are allowed', { type: 'danger' });
            $(this).val("");
        }
    }
});
$(document).on('blur', '[data-regex]', function () {
    let errMsg = 'Invalid Format';
    if ($(this).data('instruct')) {
        errMsg = $(this).data('instruct');
    }
    if ($(this).data('regex')) {
        let v = $(this).val();
        if (v.trim() != "") {
            const regex = new RegExp($(this).data('regex'));
            if (!regex.test(v)) {
                $(this).css('background-color', '#f3acac').focus();
                prToast(errMsg, { type: 'danger' });
            }
        }
    }
});
$(document).on("click", ".loopField_1 .priya-close", function () {
    $(this).parent().slideUp(300, function () {
        $(this).remove();
    });
});
function removeComply(d) {
    $(d).parents('.form-group').removeClass('comply').find('.pri-form').remove();
    $(d).parents('.form-group').removeClass('comply').find('.btn-comply').show();
    $(d).remove();
    if ($('.comply').length <= 0) {
        $('.backToCorrection').hide();
        $('.assignToAA').show();
    }
    joinComments();
}
function otpSent() {
    $('#otpinput').slideDown(300).siblings().slideUp(300);
    showTimer();
}
function joinComments() {
    let compText = '';
    $('.join-comments').each(function () {
        let label = $(this).closest('.comply').find('label').text();
        let v = $(this).val();
        compText += '<b>' + label + ':</b> ' + v + '. <br />';
    });
    if (compText == '') {
        $('.need-corrections').removeClass('not-blank');
    } else {
        $('.need-corrections').addClass('not-blank');
    }
    $('.need-corrections p').html(compText);
    $('.need-corrections input').val(compText);
}
function showTimer() {
    $('.showTimer').each(function () {
        let dis = $(this);
        let callback = $(this).data('callback') || false;
        let original = dis.html();
        let timeCount = parseInt($(this).data('timecount')) || 60000;
        let timetext = $(this).data('timetext') || "###";
        let intval = setInterval(function () {
            timeCount -= 1000;
            let min = (timeCount / 60000 < 1) ? 0 : timeCount / 60000;
            let sec = (timeCount / 1000) % 60;
            let tim = min + ":" + sec;
            dis.text(timetext.replace("###", tim));
            if (timeCount < 0) {
                (callback) ? eval(callback) : dis.html(original);
                clearInterval(intval);
            }
        }, 1000);
    });
}
function prAlert(msg, options) {
    let styles = `<style id="prAlert_style">.prAlert-wrapper{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1000;display:flex;align-items:center;justify-content:center;transition:.3s;opacity:0}.prAlert-wrapper.show{opacity:1}.prAlert-wrapper .prAlert-bg{background-color:#0001;position:absolute;top:0;right:0;bottom:0;left:0;z-index:0}.prAlert-wrapper .prAlert-box{background-color:#fff;box-shadow:1px 1px 5px #0009;position:relative;z-index:10;border-radius:5px;width:400px;max-width:100%;transform:translate(0,-150px);transition:.5s 0.1s;opacity:0}.prAlert-wrapper.show .prAlert-box{opacity:1;transform:translate(0,-50px)}.prAlert-wrapper .prAlert-box>i{position:absolute;right:0;top:0;display:block;line-height:38px;width:38px;text-align:center;font-size:20px;z-index:1;cursor:pointer;transition:.3s}.prAlert-wrapper .prAlert-box>i:hover{color:var(--err-bdr)}.prAlert-wrapper .prAlert-box header{border-radius:5px 5px 0 0;background:#0001;border-bottom:1px solid #ddd;padding:7px 20px 6px}.prAlert-wrapper .prAlert-box .body{padding:20px}.prAlert-wrapper .prAlert-box footer{text-align:right;padding:20px}</style>`;
    if ($('#prAlert_style').length <= 0) {
        $('head').append(styles);
    }
    var id = new Date().getTime();
    msg = msg || '-- No Message --';
    options = options || {};
    var prAlert = `<div class="prAlert-wrapper" id="` + id + `"> <div class="prAlert-box"><i onclick="prAlertCancel(this)">&times;</i>`;
    if (options.header) {
        prAlert += `<header>` + options.header + `</header>`;
    }
    prAlert += `<div class="body">` + msg + `</div> <footer>`;
    if (options.confirm && options.callback == 'link') {
        var link = options.ele.href;
        var target = options.ele.target || '_self';
        $(options.ele).removeAttr('href');
        if ($(options.ele).attr('data-href')) {
            link = $(options.ele).attr('data-href');
        } else {
            $(options.ele).attr('data-href', link);
        }
        prAlert += ` <span class="btn" onclick="prAlertCancel(this);window.open('` + link + `', '` + target + `')">Ok</span>
                <span class="btn btn-cancel" onclick="prAlertCancel(this)">Cancel</span>`;
    } else if (options.confirm) {
        prAlert += ` <span class="btn" onclick="prAlertCancel(this);$(` + options.callback + `)">Ok</span>
                <span class="btn btn-cancel" onclick="prAlertCancel(this)">Cancel</span>`;
    } else {
        prAlert += ` <span class="btn" onclick="prAlertCancel(this);$(` + options.callback + `)">Ok</span>`;
    }
    prAlert += `</footer></div><div class="prAlert-bg"></div></div>`;
    $('body').append(prAlert);
    setTimeout(function () {
        $('#' + id).addClass('show');
    }, 100);
}
function prAlertCancel(dis) {
    $(dis).parents('.prAlert-wrapper').removeClass('show');
    setTimeout(function () {
        $(dis).parents('.prAlert-wrapper').remove();
    }, 500);
}
function showPassword(d) {
    $(d).closest('.pri-form').find('input').attr('type', 'text');
    let w = 1000;
    setTimeout(function () {
        $(d).closest('.pri-form').find('input').attr('type', 'password');
    }, w);
}
function nextForm(d) {
    var cur = $(d).parents('.form-section');
    let nextStep = $(d).parents('.form-section').next();
    $("#progressbar li").eq($(".form-section").index(cur)).removeClass('active').addClass("visited");
    $("#progressbar li").eq($(".form-section").index(nextStep)).addClass("active");
    nextStep.show();
    cur.hide();
    $("html, body").animate({ scrollTop: 0 }, 300);
    calculate();
}
function prevForm(d) {
    var cur = $(d).parents('.form-section');
    let prevStep = $(d).parents('.form-section').prev();
    $("#progressbar li").eq($(".form-section").index(prevStep)).removeClass('visited').addClass("active");
    $("#progressbar li").eq($(".form-section").index(cur)).removeClass("active");
    prevStep.show();
    cur.hide();
    $("html, body").animate({ scrollTop: 0 }, 300);
}
$(document).on('click', '#progressbar > .visited', function () {
    $('#progressbar > .active').addClass('visited').removeClass("active");
    $(this).removeClass('visited').addClass("active");
    $(".stepdivmaincls").eq($(this).index()).show().siblings('.stepdivmaincls').hide();
});
function addNewLand(d, obj) {
    const toBeCloned = obj.toBeCloned;
    const repeatHere = obj.repeatHere;
    const repeatCount = obj.repeatCount || 0;
    const readOnly = obj.readOnly || false;
    let cnt = $(d).closest('.repeat-container').find('.repeat-div').length;
    if (repeatCount == 0 || cnt <= parseInt(repeatCount)) {
        let newEle = $(d).parents(repeatHere).find(toBeCloned).clone();
        newEle.appendTo($(d).parents(repeatHere)).removeClass('clone').addClass('collapse repeat-' + cnt).prepend('<i class="priya-close" onclick="removeParent(this)"></i>').find("input, textarea, select").val("");
        newEle.find('.makeEmpty').html('');
        newEle.find('[type="file"]').css({ 'background-color': '', 'border-color': '' });
        if (readOnly) {
            let readonlyVal = $(d).parents(repeatHere).find(toBeCloned).find(readOnly).val() || '';
            newEle.find(readOnly).addClass('readonly').prop('readonly', true).val(readonlyVal);
        }
        newEle.slideDown(300);

        $('.checkimagetype').change(function () {
            var ext = this.value.split('.').pop().toLowerCase();

            switch (ext) {
                case 'jpg':

                    break;
                case 'jpeg':

                    break;
                case 'png':

                    break;
                default:
                    prToast('Sorry!!...Invalid file Type', {
                        type: 'danger'
                    });
                    this.value = '';
                    $(this).next("label").text("");
            }
        });
    } else {
        prToast("You can not add more than " + repeatCount, { type: "danger" });
    }
}
function removeParent(d) {
    $(d).parent().slideUp(300, function () {
        $(this).remove();
    });
}
function prAlert(msg, options) {
    let styles = `<style id="prAlert_style">.prAlert-wrapper{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1000;display:flex;align-items:center;justify-content:center;transition:.3s;opacity:0}.prAlert-wrapper.show{opacity:1}.prAlert-wrapper .prAlert-bg{background-color:#0001;position:absolute;top:0;right:0;bottom:0;left:0;z-index:0}.prAlert-wrapper .prAlert-box{background-color:#fff;box-shadow:1px 1px 5px #0009;position:relative;z-index:10;border-radius:5px;width:400px;max-width:100%;transform:translate(0,-150px);transition:.5s 0.1s;opacity:0}.prAlert-wrapper.show .prAlert-box{opacity:1;transform:translate(0,-50px)}.prAlert-wrapper .prAlert-box>i{position:absolute;right:0;top:0;display:block;line-height:38px;width:38px;text-align:center;font-size:20px;z-index:1;cursor:pointer;transition:.3s}.prAlert-wrapper .prAlert-box>i:hover{color:var(--err-bdr)}.prAlert-wrapper .prAlert-box header{border-radius:5px 5px 0 0;background:#0001;border-bottom:1px solid #ddd;padding:7px 20px 6px}.prAlert-wrapper .prAlert-box .body{padding:20px}.prAlert-wrapper .prAlert-box footer{text-align:right;padding:20px}</style>`;
    if ($('#prAlert_style').length <= 0) {
        $('head').append(styles);
    }
    var id = new Date().getTime();
    msg = msg || '-- No Message --';
    options = options || {};
    var prAlert = `<div class="prAlert-wrapper" id="` + id + `"> <div class="prAlert-box"><i onclick="prAlertCancel(this)">&times;</i>`;
    if (options.header) {
        prAlert += `<header>` + options.header + `</header>`;
    }
    prAlert += `<div class="body">` + msg + `</div> <footer>`;
    if (options.confirm && options.callback == 'link') {
        var link = options.ele.href;
        var target = options.ele.target || '_self';
        $(options.ele).removeAttr('href');
        if ($(options.ele).attr('data-href')) {
            link = $(options.ele).attr('data-href');
        } else {
            $(options.ele).attr('data-href', link);
        }
        prAlert += ` <span class="btn" onclick="prAlertCancel(this);window.open('` + link + `', '` + target + `')">Ok</span>
                <span class="btn btn-cancel" onclick="prAlertCancel(this)">Cancel</span>`;
    } else if (options.confirm) {
        prAlert += ` <span class="btn" onclick="prAlertCancel(this);$(` + options.callback + `)">Ok</span>
                <span class="btn btn-cancel" onclick="prAlertCancel(this)">Cancel</span>`;
    } else {
        prAlert += ` <span class="btn" onclick="prAlertCancel(this);$(` + options.callback + `)">Ok</span>`;
    }
    prAlert += `</footer></div><div class="prAlert-bg"></div></div>`;
    $('body').append(prAlert);
    setTimeout(function () {
        $('#' + id).addClass('show');
    }, 100);
}
function prAlertCancel(dis) {
    $(dis).parents('.prAlert-wrapper').removeClass('show');
    setTimeout(function () {
        $(dis).parents('.prAlert-wrapper').remove();
    }, 500);
}
function helpModal(s) {
    $(s).show(0, function () {
        $(this).addClass('popin');
    });
}
function helpModalHide(s) {
    $(s).parents('.help-modal').removeClass('popin');
}
function prToast(msg, opt) {
    msg = msg || '';
    opt = opt || {};
    opt.type = opt.type || 'info';
    opt.delay = opt.delay || 5000;
    opt.left = opt.left || 'auto';
    opt.top = opt.top || 0;
    opt.right = opt.right || 0;
    opt.bottom = opt.bottom || 'auto';
    if ($('.pr-toast-container').length < 1) {
        $('body').append('<div class="pr-toast-container" style="padding: 15px; position: fixed; z-index: 10000; top:' + opt.top + '; right:' + opt.right + '; bottom:' + opt.bottom + '; left:' + opt.left + '"></div>');
    }
    var t = Date.now();
    var alert = '<section id="' + t + '" class="alert collapse alert-' + opt.type + '" style="position:static; margin:0 0 5px">' + msg + '</section>';
    if (opt.bottom == 'auto') {
        $('.pr-toast-container').prepend(alert);
        $('#' + t).slideDown(500);
    } else {
        $('.pr-toast-container').append(alert);
        $('#' + t).slideDown(500);
    }
    setTimeout(function () {
        $('#' + t).slideUp(300, function () { $(this).remove(); })
    }, opt.delay);
}
function imgPreview(dis, parentContainer, imgContainer) {
    const file = dis.files[0];
    const reader = new FileReader();
    if (file) {
        reader.onload = function (event) {
            const imgSrc = event.target.result;
            const imgElement = document.createElement('img');
            imgElement.src = imgSrc;
            $(dis).parents(parentContainer).find(imgContainer).html(imgElement);
        }
        reader.readAsDataURL(file);
    } else {
        $(dis).parents(parentContainer).find(imgContainer).html('<img src="./images/prof.png" />');
    }
}
function showOnChange(d, checkVal, showSelector = '', hideSelector = '') {
    let showAll = $(showSelector);
    let hideAll = $(hideSelector);
    if ($(d).closest('.loopField_1').length > 0) {
        showAll = $(d).closest('.loopField_1').find(showSelector);
        hideAll = $(d).closest('.loopField_1').find(hideSelector);
    }
    if (showSelector != '') {
        if (d.value == checkVal) {
            showAll.removeClass('collapse').show();
        } else {
            showAll.addClass('collapse').hide();
        }
    }
    if (hideSelector != '') {
        if (d.value == checkVal) {
            hideAll.addClass('collapse').hide();
        } else {
            hideAll.removeClass('collapse').show();
        }
    }
}
function printDiv(divId) {
    var divToPrint = document.getElementById(divId);
    var newWin = window.open('', 'Print-Window');
    newWin.document.open();
    newWin.document.write('<html><head><title>Print</title></head><body>');
    newWin.document.write(divToPrint.innerHTML);
    newWin.document.write('</body></html>');
    newWin.document.close();
    newWin.print();
    newWin.close();
}
function duplicateValue(d, selectors, cls = "") {
    let v = d.value;
    $(selectors).val(v).addClass(cls);
}
function validateFiles(fileUpload, MB = 4, totalAllowedFiles = 5) {
    var files = fileUpload.files;
    var isValid = true;
    if (files.length === 0) {
        prToast("Please select at least one file.");
        isValid = false;
        return;
    }
    let count = files.length;
    if (count > totalAllowedFiles) {
        prToast("Maximum " + totalAllowedFiles + " files are allowed.", { type: "danger" });
        isValid = false;
    } else {
        for (var i = 0; i < count; i++) {
            var file = files[i];
            if (!file.type.match("image.*") && file.type !== "application/pdf") {
                prToast("Only image or PDF files are allowed.", { type: "danger" });
                isValid = false;
                break;
            }
            if (file.size > MB * 1024 * 1024) {
                prToast("File size should not exceed " + MB + "MB.", { type: "danger" });
                isValid = false;
                break;
            }
        }
    }
    if (isValid) {
        $(fileUpload).css({ 'background-color': '#28a74533', 'border-color': '#28a74588' });
    } else {
        fileUpload.value = '';
        files = [];
        $(fileUpload).css('background-color', '#f3acac').focus();
    }
}
$(document).on('click', '[data-tab-name]', function () {
    let tab = $(this).data('tab-name');
    $(this).addClass('active').siblings().removeClass('active');
    $(this).closest('[data-pr-tab]').find('[data-tab-content=' + tab + ']').show().siblings().hide();
});
$(document).on("click", "#previewbtn", function () {
    let cancelText = $(this).data('cancel') || "Edit";
    let submitText = $(this).data('submit') || "Submit";
    if ($('.preview-pop').length <= 0) {
        var selects = $('.right-content').find("select");
        let previewData = $('.right-content').clone();
        $('body').prepend('<div class="preview-pop"></div><div class="preview-pop-bg"></div>');
        $('.preview-pop').html(previewData);
        $('.preview-pop #progressbar').remove();
        $('.preview-pop .prevbtncls, .preview-pop .nextbtncls').parent().remove();
        $('.preview-pop .stepdivmaincls').show();
        $('#captchaDiv').hide();
        $('.preview-pop form').append('<div class="text-center mt-3"> <button type="button" class="btn btn-cancel">' + cancelText + '</button> <button type="button" class="btn submit">' + submitText + '</button></div>');
        $('.preview-pop-bg, .preview-pop .btn-cancel').click(function () {
            $('.preview-pop, .preview-pop-bg').remove();
        });
        $('.submit').click(function () {
            $(this).closest('form').submit();
        });
        $(selects).each(function (i) {
            var select = this;
            previewData.find("select").eq(i).val($(select).val());
        });
    }
});
function fillPercent(d) {
    let percentVal = $(d).find('option:selected').data("percent") || false;
    if (percentVal) {
        $(d).closest('.row').find('.rate_of_entry_tax_cls').val(percentVal).prop('readonly', true);
    } else {
        $(d).closest('.row').find('.rate_of_entry_tax_cls').prop('readonly', false);
    }
}


function formatDate(date) {
    const day = String(date.getDate()).padStart(2, '0');
    const month = String(date.getMonth() + 1).padStart(2, '0'); // Month is zero-based, so we add 1
    const year = date.getFullYear();

    return `${day}/${month}/${year}`;
}

document.addEventListener('contextmenu', event => event.preventDefault());
document.addEventListener('dblclick', event => event.preventDefault());
document.addEventListener("DOMContentLoaded", function () {
    window.onpopstate = function (event) {
        // alert(0);
        event.preventDefault();
        history.pushState(null, null, location.href);
    };
});
document.addEventListener('keydown', function (event) {
    if (event.keyCode === 123 || event.keyCode === 116) {
        event.preventDefault();
        // prToast("This key is disable",{type:"danger"});
    }
});

document.addEventListener('contextmenu', event => {
    event.preventDefault();
    prToast("Right-click disabled", { type: "danger" });
});
document.addEventListener('dblclick', event => {
    event.preventDefault();
    prToast("Double-click disabled", { type: "danger" });
});
document.addEventListener('keydown', function (event) {
    if (event.keyCode === 123 || event.keyCode === 116) {
        event.preventDefault();
        prToast("This Key disabled", { type: "danger" });
    }
});
window.history.replaceState(null, null, window.location.href);

window.addEventListener('beforeunload', function (event) {

    $('.submit-loader').addClass('in');
    setTimeout(function () {
        $('.submit-loader').removeClass('in');
    }, 5000);
});

document.addEventListener('DOMContentLoaded', function () {

    $('.submit-loader').addClass('in');
});

window.addEventListener('load', function () {
    $('.submit-loader').removeClass('in');
});

// Stop Loader on download click
// $(document).on('click', '.btn', function() {
//     if($(this).find('.priya-download').length !== 0 || $(this).hasClass('downloadBtn')){
//         setTimeout(function(){
//             $('.submit-loader').removeClass('in');
//         }, 3000);
//     }
//     console.log('Download: ', $(this).find('.priya-download').length);
// });
$(document).on('click', '.downloadBtn', function () {
    setTimeout(function () {
        $('.submit-loader').removeClass('in');
    }, 3000);
});
$(document).on("click", "a", function (e) {
    let href = $(this).attr("href");
    if (!href) {
        return true;
    }

    let hostname = new URL(href, window.location.href).hostname;
    const currentHostname = window.location.hostname;

    if (hostname !== currentHostname && hostname !== '') {
        e.preventDefault();
        let confirmRedirect = confirm(
            "You are now leaving our site and being redirected to an External Link. We are not responsible for the content, privacy policies, or practices of the destination site. Proceed with caution."
        );
        if (confirmRedirect) {
            window.open(href, '_blank');
        }
    }
});
function myalpha(e) {
    var k;
    document.all ? k = e.keyCode : k = e.which;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
}
$(document).ready(function () {
    $("input[type=text],input[type=email]").keypress(function (event) {
        var k = event.keyCode || event.which;
        //alert(k)
        // Allow letters (A-Z, a-z), numbers (0-9), backspace (8), and space (32)
        if (
            (k >= 65 && k <= 90) || // A-Z
            (k >= 97 && k <= 122) || // a-z
            (k >= 48 && k <= 57) || // 0-9
            k === 8 || // Backspace
            k === 32 ||
            k === 64 ||
            k === 46 ||
            k === 95 ||
            k === 45 ||
            k === 44
        ) {
            // Space
            return true; // Allow the key press
        }

        event.preventDefault(); // Prevent other key presses
    });
    const regex = /^[a-zA-Z0-9\s.,!?;:'"_()-]*$/;

    $("textarea").on("input", function () {
        let messageVal = $(this).val();

        // Remove characters not allowed by regex
        if (!regex.test(messageVal)) {
            //console.log(messageVal)
            // Replace disallowed characters
            $(this).val(messageVal.replace(/[^a-zA-Z0-9\s.,!?;:'"_()-]/g, ""));
        }
    });
    const emailregex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    $("input[type=text],input[type=email]").keypress(function (event) {
        var k = event.keyCode || event.which;
        //alert(k)
        // Allow letters (A-Z, a-z), numbers (0-9), backspace (8), and space (32)
        if (
            (k >= 65 && k <= 90) || // A-Z
            (k >= 97 && k <= 122) || // a-z
            (k >= 48 && k <= 57) || // 0-9
            k === 8 || // Backspace
            k === 32 ||
            k === 64 ||
            k === 46 ||
            k === 95 ||
            k === 45
        ) {
            // Space
            return true; // Allow the key press
        }

        event.preventDefault(); // Prevent other key presses
    });
    $("input[type=number], #mobile").keypress(function (event) {
        var k = event.keyCode || event.which;
        // alert(k)
        // Allow letters (A-Z, a-z), numbers (0-9), backspace (8), and space (32)
        if ((k >= 48 && k <= 57) || k === 46) {
            // Space
            return true; // Allow the key press
        }

        event.preventDefault(); // Prevent other key presses
    });
    // Restrict cut operation
    $(
        "input[type=text],input[type=email],textarea,input[type=number],input[type=tel],input[type=date]"
    ).on("cut", function (event) {
        event.preventDefault();
        prAlert("Cut operation is restricted.");
    });

    // Restrict copy operation
    $(
        "input[type=text],input[type=email],textarea,input[type=number],input[type=tel],input[type=date]"
    ).on("copy", function (event) {
        event.preventDefault();
        prAlert("Copy operation is restricted.");
    });

    // Restrict paste operation
    $(
        "input[type=text],input[type=email],textarea,input[type=number],input[type=tel],input[type=date]"
    ).on("paste", function (event) {
        event.preventDefault();
        prAlert("Paste operation is restricted.");
    });


    // Color Palate
    $('.clr').click(function () {
        var color = $(this).attr('fill');
        window.localStorage.setItem('color1', color);
        window.localStorage.setItem('color111', color + '11');
        window.localStorage.setItem('color133', color + '33');
        window.localStorage.setItem('color188', color + '88');
        window.localStorage.setItem('color1cc', color + 'cc');
        $('body').css({ '--color1': color, '--color1-11': color + '11', '--color1-33': color + '33', '--color1-88': color + '88', '--color1-cc': color + 'cc' })
        document.documentElement.style.setProperty('--color1', color);
        document.documentElement.style.setProperty('--color1-11', color + '11');
        document.documentElement.style.setProperty('--color1-33', color + '33');
        document.documentElement.style.setProperty('--color1-88', color + '88');
        document.documentElement.style.setProperty('--color1-cc', color + 'cc');
    });
    //end Color Palate

});
function setTheme(theme) {
    const body = document.body;
    if (theme === "dark") {
        body.classList.add("dark-theme");
    } else {
        body.classList.remove("dark-theme");
    }
    localStorage.setItem("theme", theme);
}
document.addEventListener("DOMContentLoaded", () => {
    // Apply theme
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
        document.body.classList.add("dark-theme");
    }
    let color1 = window.localStorage.getItem("color1");
    let color111 = window.localStorage.getItem("color111");
    let color133 = window.localStorage.getItem("color133");
    let color188 = window.localStorage.getItem("color188");
    let color1cc = window.localStorage.getItem("color1cc");
    $("body").css({
        "--color1": color1,
        "--color1-11": color111,
        "--color1-33": color133,
        "--color1-88": color188,
        "--color1-cc": color1cc
    });
    if (color1) {
        document.documentElement.style.setProperty("--color1", color1);
    }
    if (color111) {
        document.documentElement.style.setProperty("--color1-11", color111);
    }
    if (color133) {
        document.documentElement.style.setProperty("--color1-33", color133);
    }
    if (color188) {
        document.documentElement.style.setProperty("--color1-88", color188);
    }
    if (color1cc) {
        document.documentElement.style.setProperty("--color1-cc", color1cc);
    }

});
// Rash
$(document).on("click", ".add-new", function () {
    let table = $(this).closest("div").prev(".table-responsive").find("table");
    let firstRow = table.find("tbody tr:first").clone();
    firstRow.find("input").val("");

    table.find("tbody").append(firstRow);
    table.find("tbody tr").each(function (index) {
        if ($(this).find(".slno").is("input")) {
            $(this).find(".slno").val(index + 1);
        } else {
            $(this).find(".slno").text(index + 1);
        }
    });
});
$(document).on("click", ".deleteTr", function () {
    const $tbody = $(this).closest("tbody");
    const $rows = $tbody.find("tr");

    if ($rows.length > 1) {
        $(this).closest("tr").remove();
    } else {
        prToast("At least one row must be present.", {
            type: "danger",
        });
    }

    // Recalculate serial numbers
    $tbody.find("tr").each(function (index) {
        if ($(this).find(".slno").is("input")) {
            $(this)
                .find(".slno")
                .val(index + 1);
        } else {
            $(this)
                .find(".slno")
                .text(index + 1);
        }
    });
});

$(document).on("click", ".prevbtncls", function () {
  var selectStep = $(this).data("id");
  $("#stepdiv_" + selectStep).hide();
  var decVal = parseInt(selectStep) - 1;
  $("#stepdiv_" + decVal).slideDown();
  $("#stepActive_" + decVal)
    .addClass("active")
    .siblings()
    .removeClass("active");
  $("html, body").animate(
    {
      scrollTop: 0,
    },
    300
  );
});
$(document).on("click", ".steps", function () {
    var selectStep = $(this).attr("id").split("_")[1];
    $("#stepdiv_" + selectStep).slideDown();
    $(".stepdivmaincls")
        .not("#stepdiv_" + selectStep)
        .hide();
    $(this).addClass("active").siblings().removeClass("active");
});

$(document).on("click", ".nextbtncls", function () {
    var selectStep = $(this).data("id") + 1;
    $("#stepdiv_" + selectStep).slideDown();
    $("#stepdiv_" + $(this).data("id")).hide();
    $(".stepdivmaincls")
        .not("#stepdiv_" + selectStep)
        .hide();
    $("#stepActive_" + selectStep)
        .addClass("active")
        .siblings()
        .removeClass("active");
});

function toggleRemoveIconsAndSlNo(mainDiv) {
    const rows = mainDiv.find(".loopField_1");

    rows.each(function (index) {
        $(this).find(".slno").val(index + 1);
        $(this).find('.delete-row').remove();
        if(index == 0){
            if (rows.length > 1){
                $(this).prepend(
                    '<i class="priya-close delete-row d-block" style="top:35px"></i>'
                );
            }
        }else{
            $(this).prepend(
            '<i class="priya-close delete-row d-block" style="top:0"></i>'
            );
        }
    });
}

// ADD NEW ROW
$(document).on("click", ".add-new-row", function () {
  const mainDiv = $(this).closest(".loopmailcls");
    const newEle = mainDiv.find(".loopField_1:first").clone();

    // Reset all inputs (except readonly)
    newEle.find("input, textarea, select").each(function () {
      if (!$(this).is("[readonly]")) {
        $(this).val("").css("background", "");
      }
    });

    newEle.hide();
    mainDiv.find(".addMultipleFieldCls").append(newEle);
    newEle.slideDown(300, function () {
      toggleRemoveIconsAndSlNo(mainDiv);
    });
});

// DELETE ROW
$(document).on("click", ".delete-row", function () {
  const mainDiv = $(this).closest(".loopmailcls");
  $(this).closest(".loopField_1").remove();
  toggleRemoveIconsAndSlNo(mainDiv);
});
  