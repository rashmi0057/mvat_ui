<div class="sidebar">
        <div class="backdrop"></div>

        <div id="iframeContainer" class="iframe-container"></div>
                <div class="block-2">
            <h3>Login</h3>
            <div class="login-box">

                <form id="loginfrm" class="ajax-submit" name="loginfrm" action="https://www.hptax.gov.in/" method="post" data-callback="loginSuccess(data)">
                    <input type="hidden" name="_token" value="AbU2IbN9rtvLrgxqrIU7M6KzlsZTq4375famDvSX">                    <h5>Login Here</h5>
                    <hr>
                    <div class="form-group">
                        <div class="input-group pri-form">
                            <span class="input-group-addon"><i class="priya-user"></i></span>
                            <input type="text" id="mobileno" name="mobileno" class="form-control" placeholder="Username" autocomplete="off" onkeypress="return usernameValidateFunc(event);" data-opt="md5_encrypt">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group pri-form">
                            <span class="input-group-addon"><i class="priya-lock"></i></span>
                            <input type="password" id="loginpwd" name="pwd" class="form-control" placeholder="Password" autocomplete="off" data-opt="md5_encrypt">
                            <div class="input-group-addon"><i class="priya-eye" aria-hidden="true" onmousedown="showPassword(this)" onmouseout="hidePassword(this)"></i></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="d-flex captcha-field">
                            <div class="flex-auto">
                                <input id="captcha" type="text" class="form-control" placeholder="Captcha" name="captcha" autocomplete="off">
                            </div>
                            <div class="flex-auto text-right">
                                <div class="captcha d-flex">
                                    <span><img src="images/captcha.png"></span>
                                    <button type="button" class="btn btn-r-curved" id="reload">
                                        &#8635;
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-login btn-sm mt-2">Login</button>
                    <div class="text-center small mt-3 bold">
                        <span data-link="forgotpassword">Forgot Password</span>
                    </div>
                </form>
                <form id="otpinput" action="https://www.hptax.gov.in/forgot-verifyotp" method="post" class="ajax-submit collapse" data-callback="enterOTP(data)">
                    <input type="hidden" name="_token" value="AbU2IbN9rtvLrgxqrIU7M6KzlsZTq4375famDvSX">                    <h5>Enter OTP <small>OTP Sent to your <span>Email example@example.com</span></small></h5>
                    <hr>
                    <div class="form-group">
                        <div class="input-group pri-form">
                            <span class="input-group-addon"><i class="priya-phone"></i></span>
                            <input type="number" id="forgot_verify_otp" name="forgot_verify_otp" class="form-control" placeholder="Enter OTP">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-login btn-sm mt-2">Verify Otp</button>
                    <span class="showTimer" data-timetext="Please Wait ###" data-timecount="30000">Didn&rsquo;t receive otp? <a href="javascript:void(0)" onclick="showTimer()">RESEND</a></span>
                    <div class="text-center small mt-3 bold">
                        <span data-link="loginfrm"><i class="priya-arrow-circle-left"></i> Back to Login</span>
                    </div>
                </form>

                <form id="resetpassword" name="setnewpasswordfrm" action="https://www.hptax.gov.in/set-new-pwd" class="ajax-submit collapse" method="post" data-callback="resetPassword(data)">
                    <input type="hidden" name="_token" value="AbU2IbN9rtvLrgxqrIU7M6KzlsZTq4375famDvSX">                    <h5>Reset Password</h5>
                    <hr>
                    <div class="form-group">
                        <div class="input-group pri-form">
                            <span class="input-group-addon"><i class="priya-key"></i></span>
                            <input type="password" id="new_pwd" name="new_pwd" class="form-control" placeholder="Enter New Password" onblur="validatePassword(this.value)" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group pri-form">
                            <span class="input-group-addon"><i class="priya-key"></i></span>
                            <input type="password" id="confirm_pwd" name="confirm_pwd" class="form-control" placeholder="Enter Confirm Password" autocomplete="off">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-login btn-sm mt-2">Submit</button>
                </form>
                <form id="forgotpassword" class="ajax-submit collapse" action="https://www.hptax.gov.in/forgotpwd" method="post" name="forgotfrm" data-callback="goToVerifyOTP(data)">
                    <input type="hidden" name="_token" value="AbU2IbN9rtvLrgxqrIU7M6KzlsZTq4375famDvSX">                    <h5>Forgot Password</h5>
                    <hr>
                    <div class="form-group">
                        <div class="input-group pri-form">
                            <span class="input-group-addon"><i class="priya-user"></i></span>
                            <input type="text" id="forgot_login_id" name="forgot_login_id" class="form-control" placeholder="Enter Username" onkeypress="return usernameValidateFunc(event);" autocomplete="off">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-login btn-sm mt-2">Forgot Password</button>
                    <div class="text-center small mt-3 bold">
                        <span data-link="loginfrm"><i class="priya-arrow-circle-left"></i> Back to Login</span>
                    </div>
                </form>
            </div>
        </div>
                <div class="block-2">
            
        </div>

        <div class="block-2">
            <h3>Dealer Listing</h3>
            <ul>
                <li><a href="dealer-search.html">Dealer Search</a></li>
            </ul>
        </div>
        <div class="block-2">
            <h3>GST</h3>
            <ul>
                <li><a href="https://reg.gst.gov.in/registration/">GST Registration</a></li>
                <li><a href="https://services.gst.gov.in/services/searchtp">Know your GST Jurisdiction</a></li>
            </ul>
        </div>
        <div class="block-2">
            <h3>e-Services</h3>
            <ul>

                <li><a href="unregistered-epayment.html">e-Payment (Unregistered)</a></li>
                <li><a href="https://services.gst.gov.in/services/quicklinks/services">GST Services</a></li>
                
                <li><a href="view-epayment.html">View / Verify e-Payment</a></li>
                <li><a href="e-payment-toll.html">e-Payment Toll</a></li>
                <li><a href="urd-form.php">URD Profile Creation</a></li>
                <li class="has-submenu" onclick="openPopup()" style="cursor: pointer;">
                    <span>e-Registration</span>
                    <!-- <ul>
                        <li><a href="javascript:void(0)" onclick="getIframeSSO('10000052','login','Citizen');">VAT Registration</a></li>
                        <li><a href="javascript:void(0)" onclick="getIframeSSO('10000053','login','Citizen')">CST Registration</a></li>
                        <li><a href="javascript:void(0)" onclick="getIframeSSO('10000054','login','Citizen')">CGCR Registration</a></li>
                        <li><a href="javascript:void(0)" onclick="getIframeSSO('10000071','login','Citizen')">PGT/AGT Registration</a>
                        </li>
                    </ul> -->
                </li>
                
                <li><a href="verifyecst.html">Validate e-CST Forms</a></li>
                <li><a href="validatepdf.html">Validate Signed PDF</a></li>
                <li><a href="e-track.html">e-Track Status</a></li>

            </ul>
        </div>
        <div class="block-2">
            <h3>Referral Websites</h3>
            <ul>
                <li><a href="https://www.gst.gov.in">GST Website</a></li>
                <li><a href="https://himachal.nic.in/en-IN/">Govt. of Himachal Pradesh</a></li>
                <li><a href="https://himachal.nic.in/index.php?lang=1&amp;dpt_id=1">Finance Department</a></li>
                <li><a href="https://www.indiabudget.gov.in/">Budget-India</a></li>
                <li><a href="https://ebudget.hp.nic.in/">Budget of Himachal Pradesh</a></li>
                <li><a href="vat-related-sites.html">VAT Related Sites</a></li>
                <li><a href="https://tinxsys.com/TinxsysInternetWeb/">TINXSYS</a></li>
                <li><a href="https://esamadhan.nic.in/">e-Samadhan</a></li>
                <li><a href="https://himkosh.nic.in/eSalary/Account/Login.aspx?ReturnUrl=%2Fesalary%2F">e-Salary</a></li>
                <li><a href="https://www.pmi.org.in/">PMIS</a></li>
                <li><a href="https://egovef.hptax.gov.in">Excise e-Governance</a></li>
            </ul>
        </div>
        <div class="block-2">
            <h3>Helpline No</h3>
            <ul>
                <li><i class="priya-phone"></i> <span style="font-size: 14px">VAT
                        <strong><small>1800-180-8066</small></strong></span></li>
                <li><i class="priya-phone"></i> <span style="font-size: 14px">EXCISE
                        <strong><small>91820579-73/74/78</small></strong></span></li>
                <li><i class="priya-phone"></i> <span style="font-size: 14px">GST Helpline
                        <strong><small>1800-180-8087</small></strong></span></li>
            </ul>
        </div>

        <script src="js/js-nonlogin-footer.js"></script>
    </div>