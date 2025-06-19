function loginSubmitFunc() {
    var mobileno = $("#mobileno").val();
    var loginpwd = $("#loginpwd").val();
    var captcha = $("#captcha").val();
    var blankTest = /\S/;
    if (!blankTest.test(mobileno)) {
        $("#mobileno").focus();
        $("#mobileno").parents('.input-group').addClass('form_validate_error');
        return false;
    } else {
        $("#mobileno").parents('.input-group').removeClass('form_validate_error');
    }
    if (!blankTest.test(loginpwd)) {
        $("#loginpwd").focus();
        $("#loginpwd").parents('.input-group').addClass('form_validate_error');
        return false;
    } else {
        $("#loginpwd").parents('.input-group').removeClass('form_validate_error');
        var encryptPwd = calcMD5(loginpwd);
        $("#loginpwd").val(encryptPwd);

    }
}

function loginSuccess(data) {
    console.log(data);

    if (data.success) {
        window.location.href = data.redirect;
    }
}

function forgotfrmFunc() {
    var forgot_login_id = $("#forgot_login_id").val();
    var blankTest = /\S/;
    if (!blankTest.test(forgot_login_id)) {
        $("#forgot_login_id").focus();
        $("#forgot_login_id").parents('.input-group').addClass('form_validate_error');
        return false;
    } else {
        $("#forgot_login_id").parents('.input-group').removeClass('form_validate_error');
    }
}

function forgotOtpSubmitFunc() {
    var forgot_verify_otp = $("#forgot_verify_otp").val();
    var blankTest = /\S/;
    if (!blankTest.test(forgot_verify_otp)) {
        $("#forgot_verify_otp").focus();
        $("#forgot_verify_otp").parents('.input-group').addClass('form_validate_error');
        return false;
    } else {
        $("#forgot_verify_otp").parents('.input-group').removeClass('form_validate_error');
    }
}