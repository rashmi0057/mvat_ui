<?php include_once('header.php') ?>
<style>
  :root {
    --color1: #028cd1;
    --color1-88: #028cd188;
    --color1-ee: #028cd1ee;
    --color1-11: #028cd111;
    --color2: #004668;
    --color2-aa: #004668aa;
  }

  form h6 {
    display: inline-block;
    text-transform: capitalize;
    font-size: 18px;
    color: var(--color1);
    font-weight: 400;
    margin-bottom: 5px;
  }

  #progressbar .active,
  .form-sub-title {
    color: var(--color2);
  }

  #progressbar {
    padding-left: 0;
    margin-bottom: 30px;
    overflow: hidden;
    color: #0003;
    display: flex;
    counter-reset: formpart;
    font-weight: 500;
  }

  #progressbar li {
    list-style-type: none;
    font-size: 14px;
    flex: 1;
    position: relative;
    text-align: center;
    padding-top: 3px;
  }

  #progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 36px;
    display: block;
    font-size: 16px;
    color: #aaa;
    background: #ccc;
    border: 5px solid #fff;
    border-radius: 50%;
    margin: 0 auto 5px;
    padding: 2px;
    text-align: center;
    position: relative;
    z-index: 1;
    counter-increment: formpart;
    content: counter(formpart);
  }

  #progressbar li:after {
    content: "";
    width: 100%;
    height: 2px;
    background: #d3d3d3;
    position: absolute;
    left: 0;
    top: 28px;
    z-index: 0;
  }

  #progressbar li.active:before {
    background: var(--color2);
    color: #fff;
  }

  #progressbar li.visited {
    color: #000;
  }

  #progressbar li.visited:before {
    background: #000;
    color: #fff;
  }

  .form-sub-title {
    display: inline-block;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 15px;
  }

  label {
    margin-bottom: 0.2rem;
  }

  .form-group {
    margin-bottom: 0.8rem;
    position: relative;
  }

  .pri-form,
  textarea.pri-form {
    border: 1px solid #0002;
    background: #0000;
    color: #0008;
    font-size: 18px;
    font-family: arial;
    padding: 0 20px;
    transition: 0.3s;
    height: 40px;
  }

  .pri-form::placeholder {
    color: #0004;
  }

  .pri-form:focus,
  .pri-form:hover {
    background-color: var(--color1-11);
    border-color: #0000;
    border-bottom-color: var(--color1-88);
  }

  .pri-form:focus {
    box-shadow: none;
  }

  .radio-check {
    height: 40px;
    display: table-cell;
    vertical-align: middle;
  }

  .radio-check label {
    margin: 0 10px 0 0;
    font-weight: 400;
  }

  .loopmailcls {
    position: relative;
    padding: 0 15px;
  }

  

  .addMultipleFieldCls .loopField_1 {
    padding: 15px;
    border: 1px dashed #0002;
    position: relative;
    margin: 0 0 20px;
    background: #ddd2;
  }

  .loopField_1:after {
    content: "";
    clear: both;
    display: block;
  }

  

  i.priya-close {
    right: 2px;
    top: 2px;
    background: #caa;
    color: #fdd;
    line-height: 24px;
    width: 24px;
    border-radius: 3px;
    opacity: 0.6;
    z-index: 10;
    font-size: 22px;
  }

  i.priya-close:hover {
    background: #e77;
    opacity: 1;
    transform: rotate(360deg);
  }

  .labChk {
    display: inline-flex;
    align-items: center;
    width: 100%;
  }

  .single-line {
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
    gap: 0.5rem;
  }

  .single-line input.form-control {
    width: auto;
    flex: 0 1 auto;
    min-width: 100px;
  }
</style>
<div id="SkipContent"></div>

<div class="container-fluid1">
  <div class="layout">
    <?php include_once('left-menu.php') ?>
    <div class="main-right">

      <div id="gst-reg" class="right-content content">
        <h1>FORM 101</h1>
        <p>(See rule 17A (2) and rule 8)
          Application form for Registration under section 16 of The Maharashtra
          Value Added Tax Act, 2002.</p>
 
        <form name="vat_registration_name" id="vat_registration_id" class="vat_registration_cls" method="post"
          enctype="multipart/form-data" action="#" data-callback="loginSuccess(data)">
          <ul id="progressbar">
            <li id="stepActive_1" class="steps active">
              Basic Details
            </li>
            <li id="stepActive_2" class="steps">Business Details</li>
            <li id="stepActive_3" class="steps">Other Registration</li>
            <li id="stepActive_4" class="steps">Principal Place of Business</li>
            <li id="stepActive_5" class="steps">Additional POB</li>
            <li id="stepActive_6" class="steps">Bank Accounts Details</li>
            <li id="stepActive_7" class="steps">Commodities</li>

            <li id="stepActive_8" class="steps">Details of Proprietor</li>
            <li id="stepActive_9" class="steps">Authorized Signatory/Representative</li>
            <!--<li id="stepActive_10" class="steps">FORM 105</li>-->
            <li id="stepActive_10" class="steps">Other States POB</li>
            <li id="stepActive_11" class="steps">Details of Signatory</li>
            <li id="stepActive_12" class="steps">Upload Documents</li>
          </ul>
          <div class="stepdivmaincls" id="stepdiv_1" style="">
            <p>To,</p>
            <p>The Registering Authority,</p>
            <p>
              I hereby apply for grant of registration under section 16 of
              the Maharashtra Value Added Tax Act, 2002.
            </p>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="name_as_pan">1. Name of the Business / Proprietor: <span
                      class="text-danger">*</span><input type="text" class="form-control pri-form name_as_pan_cls"
                      id="name_as_pan" placeholder="" name="name_as_pan">
                  </label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="firm_name">2.Trade / Brand Name(s) ( If any):</label>
                  <input type="text" class="form-control pri-form" id="trade_name" name="trade_name"
                    onkeyup="duplicateValue(this,'.firm_name_cls')">
                </div>
              </div>
              <div class="col-md-4 is-other">
                <div class="form-group">
                  <label for="constitution_of_business">3. Constitution of Business:<span
                      class="text-danger">*</span></label>
                  <select class="form-control pri-form" name="constitution_of_business"
                    onchange="ifOther(this, '#addForm2')">
                    <option value="">-- Select --</option>
                    <option value="Proprietorship">Proprietorship</option>
                    <option value="Partnership">Partnership</option>
                    <option value="Provide Ltd. Co">Provide Ltd. Co</option>
                    <option value="Public Ltd .co">Public Ltd .co</option>
                    <option value="HUF">HUF</option>
                    <option value="Co-operative">Co-operative</option>
                    <option value="Society">Society</option>
                    <option value="Trust">Trust</option>
                    <option value="Joint Ventures">Joint Ventures</option>
                    <option value="other">Others</option>
                  </select>

                </div>
              </div>

              <div id="addForm2" class="col-md-4 collapse">
                <div class="form-group">
                  <label>Specify:*</label>
                  <input type="text" class="form-control pri-form" placeholder="" name="state_excise_val">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="pan">4. PAN:<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" id="pan" placeholder="" name="pan">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="opt_for_composition">5. Do you want to opt for composition scheme in lieu of
                    state tax payable?:<span class="text-danger">*</span></label>
                  <div class="row">
                    <div class="col-6">
                      <input type="radio" name="opt_for_composition" value="1"> Yes
                    </div>
                    <div class="col-6">
                      <input type="radio" name="opt_for_composition" value="2"> No
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-3">
              <button type="button" name="nextbtn1" id="nextbtn1" class="nextbtncls btn btn-primary" data-id="1">
                Next&gt;&gt;
              </button>
            </div>
          </div>

          <div class="stepdivmaincls" id="stepdiv_2" style="display: none;">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="date_of_commencement">7. Date of commencement of business:<span
                      class="text-danger">*</span></label>
                  <input type="date" class="form-control pri-form" id="date_of_commencement"
                    name="date_of_commencement">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="date_of_liability">8. Date on which liability to pay tax arises:</label>
                  <input type="date" class="form-control pri-form" id="date_of_liability" name="date_of_liability">
                </div>
              </div>
              <div class="col-md-12">
                <h6>9. Period for which registration is required ( For Causal Dealer only):<span
                    class="text-danger">*</span></h6>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>From Date</label>
                      <input type="date" class="form-control pri-form" name="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>To Date</label>
                      <input type="date" class="form-control pri-form" name="">
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-md-4 is-other">
                <div class="form-group">
                  <label for="reason_of_registration">9. Reason for Registration:</label>
                  <select name="reason_of_registration" id="reason_of_registration" class="form-control pri-form"
                    onchange="ifOther(this, '#addForm3')">
                    <option value="">--Select--</option>
                    <option value=" voluntarily">Voluntarily</option>
                    <option value="constitutional_change">Change in the Constitution</option>
                    <option value="part_business_transfer">Part transfer of business</option>
                    <option value="full_business_transfer">Full transfer of business</option>
                    <option value="exceeding_turnover_limit">Exceeding the prescribed turnover limit</option>
                    <option value="other">Others</option>
                  </select>
                </div>
              </div>

              <div id="addForm3" class="col-md-4 collapse">
                <div class="form-group">
                  <label>Specify:</label>
                  <input type="text" class="form-control pri-form" placeholder="" name="state_excise_val">
                </div>
              </div>


              <!-- <div class="col-md-4 collapse">
                <div class="form-group">
                  <label for="mobile_no">Other Reason:<span class="text-danger">*</span></label><input type="text" class="form-control pri-form" name="" />
                </div>
              </div> -->
            </div>

            <div class="text-center mt-3">
              <button type="button" name="prevbtn2" id="prevbtn2" class="prevbtncls btn btn-info" data-id="2">
                &lt;&lt;Prev</button>&nbsp;&nbsp;
              <button type="button" name="nextbtn2" id="nextbtn2" class="nextbtncls btn btn-primary" data-id="2">
                Next&gt;&gt;
              </button>
            </div>
          </div>

          <div class="stepdivmaincls" id="stepdiv_3" style="display: none;">
            <h2 class="form-sub-title">
              10. Indicate Existing Registration
            </h2>
            <div class="loopmailcls">
              <div class="addMultipleFieldCls">
                <div class="loopField_1 row">
                  <div class="row">
                    <div class="col-md-4 is-other">
                      <div class="form-group">
                        <!--<label for="state_excise">10. Indicate Existing Registration</label>-->
                        <label></label>
                        <select name="state_excise" id="state_excise" class="form-control exe_reg pri-form"
                          onchange="ifOther(this, '#addForm1')">
                          <option value="">--Select--</option>
                          <option value="1" selected>State Excise No</option>
                          <option value="0">GST No.</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                    </div>
                    <div id="addForm1" class="col-md-4 collapse">
                      <div class="form-group">
                        <label>Specify:</label>
                        <input type="text" class="form-control pri-form" placeholder="" name="state_excise_val">
                      </div>
                    </div>
                    <div class="col-md-4 exe_reg_val">
                      <div class="form-group">
                        <label for="state_excise">Registration Details</label>
                        <input type="text" class="form-control pri-form" placeholder="" name="state_excise_val">
                      </div>
                    </div>
                    <div class="col-md-4 exe_reg_val" style="display: none">
                      <div class="form-group">
                        <label for="service_tax_val"><br></label>
                        <input type="text" class="form-control pri-form" id="service_tax_val" placeholder=""
                          name="service_tax_val">
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <a href="javascript:void(0);" class="add_more_button_cls">Add More</a>
            </div>


            <div class="text-center mt-3">
              <button type="button" name="prevbtn3" id="prevbtn3" class="prevbtncls btn btn-info" data-id="3">
                &lt;&lt;Prev</button>&nbsp;&nbsp;<button type="button" name="nextbtn3" id="nextbtn3"
                class="nextbtncls btn btn-primary" data-id="3">
                Next&gt;&gt;
              </button>
            </div>
          </div>
          <div class="stepdivmaincls" id="stepdiv_4" style="display: none;">
            <h2 class="form-sub-title">
              11. Details of Principal Place of Business
            </h2>
            <br>
            <h6>Address</h6>
            <div class="row">

              <div class="col-md-4">
                <div class="form-group mandatory">
                  <label for="building_no">Building No/Flat No/Door No:<span class="text-danger">*</span></label>
                  <input type="text" name="building_no" id="building_no" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="floor_no">Floor No.</label>
                  <input type="text" name="floor_no" id="floor_no" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group mandatory">
                  <label for="premises_name">Name of the Premises/Building:<span class="text-danger">*</span></label>
                  <input type="text" name="premises_name" id="premises_name" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="street_name">Road/Street/Lane:</label>
                  <input type="text" name="street_name" id="street_name" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group mandatory">
                  <label for="district">District:<span class="text-danger">*</span></label>
                  <input type="text" name="district" id="district" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Taluka/Area:</label>
                  <input type="text" name="taluka_name_2[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Locality/Post/Village:</label>
                  <input type="text" name="taluka_name_2[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group mandatory">
                  <label for="pincode">Pincode:<span class="text-danger">*</span></label>
                  <input type="text" name="pincode" id="pincode" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="latitude">Latitude:</label>
                  <input type="text" name="latitude" id="latitude" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="longitude">Longitude:</label>
                  <input type="text" name="longitude" id="longitude" class="form-control pri-form">
                </div>
              </div>
            </div>

            <h6>12. Location of GST Office having Jurisdiction over place of Business</h6>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="location_of_sales">Place:</label>
                  <input type="text" class="form-control pri-form" id="location_of_sales" name="location_of_sales" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="location_of_sales">State:</label>
                  <input type="text" class="form-control pri-form" name="location_of_sales" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="location_of_sales">Code:</label>
                  <input type="text" class="form-control pri-form" name="location_of_sales" />
                </div>
              </div>
            </div>

            <h6>13. Contact Details</h6>
            <div class="row">
              <!--<div class="col-md-4">
                <div class="form-group mandatory">
                  <label for="mobile_no_1">Mobile No 1:<span class="text-danger">*</span></label>
                  <input type="text" name="mobile_no_1" id="mobile_no_1" class="form-control pri-form">
                </div>
              </div>-->
              <div class="col-md-4 repeat-col">
                <div class="form-group mandatory">
                  <label>Mobile No:*</label>
                  <div class="d-flex">
                    <input type="text" name="sign_rep_mobile" class="form-control pri-form">
                    <button type="button" class="btn btn-secondary add-col">
                      <i class="priya-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <!--<div class="col-md-4">
                <div class="form-group">
                  <label for="mobile_no_2">Mobile No 2:</label>
                  <input type="text" name="mobile_no_2" id="mobile_no_2" class="form-control pri-form">
                </div>
              </div>-->
              <!--<div class="col-md-4">
                <div class="form-group">
                  <label for="fax_no">Website:</label>
                  <input type="text" name="website" class="form-control pri-form">
                </div>
              </div>-->
              <!--<div class="col-md-4">
                <div class="form-group mandatory">
                  <label for="email_address_1">Email Address 1:<span class="text-danger">*</span></label>
                  <input type="text" name="email_address_1" id="email_address_1" class="form-control pri-form">
                </div>
              </div>-->
              <!--<div class="col-md-4">
                <div class="form-group">
                  <label for="email_address_2">Email Address 2:</label>
                  <input type="text" name="email_address_2" id="email_address_2" class="form-control pri-form">
                </div>
              </div>-->
              <div class="col-md-4 repeat-col">
                <div class="form-group mandatory">
                  <label>E-mail Address:*</label>
                  <div class="d-flex">
                    <input type="text" name="sign_rep_mobile" class="form-control pri-form">
                    <button type="button" class="btn btn-secondary add-col">
                      <i class="priya-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="website">Website:</label>
                  <input type="text" name="website" id="website" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4 is-other">
                <div class="form-group mandatory">
                  <label for="nature_of_possession">Nature of possession of premises:<span
                      class="text-danger">*</span></label>
                  <select name="nature_of_possession" id="nature_of_possession" class="form-control pri-form"
                    onchange="ifOther(this, '#addForm4')">
                    <option value="">--Select--</option>
                    <option value=" Rented">Rented</option>
                    <option value="Owned">Owned</option>
                    <option value="Leased">Leased</option>
                    <option value="Rent free">Rent free</option>
                    <option value="other">Others</option>
                  </select>
                </div>

              </div>
              <div id="addForm4" class="col-md-4 collapse">
                <div class="form-group">
                  <label>Specify:</label>
                  <input type="text" class="form-control pri-form" placeholder="" name="state_excise_val">
                </div>
              </div>

            </div>
            <h6>14. Electricity Bill Details</h6>
            <div class="loopmailcls">
              <div class="addMultipleFieldCls">
                <div class="loopField_1 row">
                  <div class="row">
                    <div class="col-md-3 is-other">
                      <div class="form-group mandatory">
                        <label>Service Provider Name:<span class="text-danger">*</span></label>
                        <select name="service_provider" id="service_provider" class="form-control pri-form" onchange="ifOther(this, '#addForm7')">
                          <option value="">--Select--</option>
                          <option value="msedcn">MSEDCN</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                    </div>
                    <div id="addForm7" class="col-md-3 collapse">
                      <div class="form-group">
                        <label>Specify:</label>
                        <input type="text" class="form-control pri-form" placeholder="" name="state_excise_val">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group mandatory">
                        <label>Consumer No:<span class="text-danger">*</span></label>
                        <input type="text" name="consumer_no" id="consumer_no" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group mandatory">
                        <label>Account No:<span class="text-danger">*</span></label>
                        <input type="text" name="account_no" id="account_no" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group mandatory">
                        <label>Billing Unit:<span class="text-danger">*</span></label>
                        <input type="text" name="consumer_no" id="consumer_no" class="form-control pri-form">
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <a href="javascript:void(0);" class="add_more_button_cls">Add More</a>
            </div>



            <div class="text-center mt-3">
              <button type="button" name="prevbtn4" id="prevbtn4" class="prevbtncls btn btn-info" data-id="4">
                &lt;&lt;Prev</button>&nbsp;&nbsp;
              <button type="button" name="nextbtn4" id="nextbtn4" class="nextbtncls btn btn-primary" data-id="4">
                Next&gt;&gt;
              </button>
            </div>
          </div>
          <div class="stepdivmaincls" id="stepdiv_5" style="display: none">
            <h2 class="form-sub-title">15. Details of the Additional Place of business/ Godowns/ warehouse in
              Maharashtra</h2>
            <br />
            <h6>Address</h6>
            <div class="loopmailcls">
              <div class="addMultipleFieldCls">
                <div class="loopField_1 row">
                  <div class="col-md-4">
                    <div class="form-group mandatory">
                      <label for="building_no">Building No/Flat No/Door No:<span class="text-danger">*</span></label>
                      <input type="text" name="building_no" id="building_no" class="form-control pri-form">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="floor_no">Floor No.</label>
                      <input type="text" name="floor_no" id="floor_no" class="form-control pri-form">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group mandatory">
                      <label for="premises_name">Name of the Premises/Building:<span
                          class="text-danger">*</span></label>
                      <input type="text" name="premises_name" id="premises_name" class="form-control pri-form">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="street_name">Road/Street/Lane:</label>
                      <input type="text" name="street_name" id="street_name" class="form-control pri-form">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group mandatory">
                      <label for="district">District:<span class="text-danger">*</span></label>
                      <input type="text" name="district" id="district" class="form-control pri-form">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group mandatory">
                      <label for="taluka">Taluka/Area:<span class="text-danger">*</span></label>
                      <input type="text" name="taluka" id="taluka" class="form-control pri-form">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group mandatory">
                      <label for="post">Locality/Post/Village:<span class="text-danger">*</span></label>
                      <input type="text" name="post" id="post" class="form-control pri-form">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group mandatory">
                      <label for="pincode">Pincode:<span class="text-danger">*</span></label>
                      <input type="text" name="pincode" id="pincode" class="form-control pri-form">
                    </div>
                  </div>

                  <div class="col-md-4 is-other">
                    <div class="form-group mandatory">
                      <label for="nature_of_possession">Nature of possession of premises:<span
                          class="text-danger">*</span></label>
                      <select name="nature_of_possession" id="nature_of_possession" class="form-control pri-form"
                        onchange="ifOther(this, '#addForm5')">
                        <option value="">--Select--</option>
                        <option value="Rented">Rented</option>
                        <option value="Owned">Owned</option>
                        <option value="Leased">Leased</option>
                        <option value="Rent free">Rent free</option>
                        <option value="other">Others</option>
                      </select>
                    </div>
                  </div>

                  <div id="addForm5" class="col-md-4 collapse">
                    <div class="form-group">
                      <label>Specify:</label>
                      <input type="text" class="form-control pri-form" placeholder="" name="state_excise_val">
                    </div>
                  </div>


                  <div class="col-12">
                    <h6>Contact Details</h6>
                    <div class="row">
                      <div class="col-md-4 repeat-col">
                        <div class="form-group mandatory">
                          <label>Mobile No:*</label>
                          <div class="d-flex">
                            <input type="text" name="sign_rep_mobile" class="form-control pri-form">
                            <button type="button" class="btn btn-secondary add-col"><i class="priya-plus"></i></button>
                          </div>
                        </div>
                      </div>
                      <!--<div class="col-md-4">
                        <div class="form-group mandatory">
                          <label for="mobile_no_1">Mobile No 1:<span class="text-danger">*</span></label>
                          <input type="text" name="mobile_no_1" id="mobile_no_1" class="form-control pri-form">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="mobile_no_2">Mobile No 2:</label>
                          <input type="text" name="mobile_no_2" id="mobile_no_2" class="form-control pri-form">
                        </div>
                      </div>-->
                      <!--<div class="col-md-4">
                        <div class="form-group">
                          <label for="fax_no">Website:</label>
                          <input type="text" name="website" class="form-control pri-form">
                        </div>
                      </div>-->
                      <div class="col-md-4 repeat-col">
                        <div class="form-group mandatory">
                          <label>E-mail Address:*</label>
                          <div class="d-flex">
                            <input type="text" name="sign_rep_mobile" class="form-control pri-form">
                            <button type="button" class="btn btn-secondary add-col">
                              <i class="priya-plus"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <!--<div class="col-md-4">
                        <div class="form-group mandatory">
                          <label for="email_address_1">Email Address 1:<span class="text-danger">*</span></label>
                          <input type="text" name="email_address_1" id="email_address_1" class="form-control pri-form">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="email_address_2">Email Address 2:</label>
                          <input type="text" name="email_address_2" id="email_address_2" class="form-control pri-form">
                        </div>
                      </div>-->
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="website">Website:</label>
                          <input type="text" name="website" id="website" class="form-control pri-form">
                        </div>
                      </div>-

                    </div>
                  </div>
                  <!-- <div class="col-md-4">
                    <div class="form-group">
                      <label for="latitude">Latitude:</label>
                      <input type="text" name="latitude" id="latitude" class="form-control pri-form">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="longitude">Longitude:</label>
                      <input type="text" name="longitude" id="longitude" class="form-control pri-form">
                    </div>
                  </div> -->
                </div>
              </div>
              <a href="javascript:void(0);" class="add_more_button_cls">Add More</a>
            </div>

            <!--<h2 class="form-sub-title">
              16. Details of the Additional Place(s) of Business /
              Godown(s) / Warehouse(s) in Maharashtra
            </h2>
            <br>
            <div class="loopmailcls col-md-12">
              <div class="addMultipleFieldCls">
                <div class="loopField_1 row">
                  <h6 class="text-decoration-underline">Address(1)</h6>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Building No/Flat No/Door No:</label>
                        <input type="text" name="additional_building_no[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Floor No:</label>
                        <input type="text" name="additional_floor_no[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Name of the Premises/Building: </label>
                        <input type="text" name="additional_premises_name[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Road/Street/Lane: </label>
                        <input type="text" name="additional_road[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>District </label>
                        <input type="text" name="additional_district[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Taluka/Area </label>
                        <input type="text" name="additional_taluka[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Post </label>
                        <input type="text" name="additional_post[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Pincode </label>
                        <input type="text" name="additional_pincode[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Latitude(Optional) </label>
                        <input type="text" name="additional_latitude[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Longitude(Optional) </label>
                        <input type="text" name="additional_longitude[]" class="form-control pri-form">
                      </div>
                    </div>
                  </div>
                  <h6 class="text-decoration-underline">
                    Contact Details(1)
                  </h6>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group mandatory">
                        <label for="telephone_no_1">Telephone No 1 with STD Code:<span class="text-danger">*</span></label>
                        <div class="row">
                          <div class="col-4">
                            <input type="text" name="additional_telephone_no_1_std[]" class="form-control pri-form" placeholder="STD Code">
                          </div>
                          <div class="col-8">
                            <input type="text" name="additional_telephone_no_1[]" class="form-control pri-form">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group mandatory">
                        <label for="telephone_no_2">Telephone No 2 with STD Code:<span class="text-danger">*</span></label>
                        <div class="row">
                          <div class="col-4">
                            <input type="text" name="additional_telephone_no_2_std[]" class="form-control pri-form" placeholder="STD Code">
                          </div>
                          <div class="col-8">
                            <input type="text" name="additional_telephone_no_2[]" class="form-control pri-form">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group mandatory">
                        <label for="mobile_no_1">Mobile No 1:<span class="text-danger">*</span></label>
                        <input type="text" name="additional_mobile_no_1[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="mobile_no_2">Mobile No 2:</label>
                        <input type="text" name="additional_mobile_no_2[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="fax_no">FAX No:</label>
                        <input type="text" name="additional_fax_no[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group mandatory">
                        <label for="email_address_1">Email Address 1:<span class="text-danger">*</span></label>
                        <input type="text" name="additional_email_address_1[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="email_address_2">Email Address 2:</label>
                        <input type="text" name="additional_email_address_2[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="website">Website:</label>
                        <input type="text" name="additional_website[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group mandatory">
                        <label for="nature_of_possession">Nature of possession of premises:<span class="text-danger">*</span></label>
                        <select name="additional_nature_of_possession[]" class="form-control pri-form">
                          <option value="">--Select--</option>
                          <option value="Owned">Owned</option>
                          <option value="Leased">Leased</option>
                          <option value="Tenancy/Sub-tenancy">
                            Tenancy/Sub-tenancy
                          </option>
                          <option value="Rent free">Rent free</option>
                          <option value="Transit/Online Sellers">
                            Transit/Online Sellers
                          </option>
                          <option value="Rented/Leave and license">
                            Rented/Leave and license
                          </option>
                          <option value="Consent">Consent</option>
                          <option value="Stall Booking (only applicable for casual dealers)">
                            Stall Booking (only applicable for casual
                            dealers)
                          </option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <h2 class="form-sub-title">
                    Scanned copy of Document to be uploaded(Select any one
                    Document)
                  </h2>
                  <ul>
                    <li>
                      <input type="checkbox" name="additional_uploaded_documents[]" value="Latest electricity bill">
                      Latest electricity bill.
                    </li>
                    <li>
                      <input type="checkbox" name="additional_uploaded_documents[]" value="Consent letter from family member/s in the name of applicant (owner/co-owners of premises)along with">
                      Consent letter from family member/s in the name of
                      applicant (owner/co-owners of premises)along with.
                    </li>
                    <li>
                      <input type="checkbox" name="additional_uploaded_documents[]" value="Ownership proof of Consenter/s">
                      Ownership proof of Consenter/s
                    </li>
                    <li>
                      <input type="checkbox" name="additional_uploaded_documents[]" value="Property Card">
                      Property Card
                    </li>
                    <li>
                      <input type="checkbox" name="additional_uploaded_documents[]" value="Registered Ownership deed">
                      Registered Ownership deed
                    </li>
                    <li>
                      <input type="checkbox" name="additional_uploaded_documents[]" value="Registered Agreement (including Index II) with the builder">
                      Registered Agreement (including Index II) with the
                      builder
                    </li>
                    <li>
                      <input type="checkbox" name="additional_uploaded_documents[]" value="Society maintenance receipt">
                      Society maintenance receipt
                    </li>
                    <li>
                      <input type="checkbox" name="additional_uploaded_documents[]" value="Share certificate of Co-operative society in the name of applicant">
                      Share certificate of Co-operative society in the
                      name of applicant
                    </li>
                    <li>
                      <input type="checkbox" name="additional_uploaded_documents[]" value="List of directors from Registrar of Companies of sister concern">
                      List of directors from Registrar of Companies of
                      sister concern
                    </li>
                    <li>
                      <input type="checkbox" name="additional_uploaded_documents[]" value="Board Resolution of consenter company">
                      Board Resolution of consenter company
                    </li>
                    <li>
                      <input type="checkbox" name="additional_uploaded_documents[]" value="Consent letter and signature proof of consenter Director">
                      Consent letter and signature proof of consenter
                      Director
                    </li>
                  </ul>
                  <h6 class="text-decoration-underline mt-3">
                    Electricity Bill Details(1)
                  </h6>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group mandatory">
                        <label>Service Provider Name:<span class="text-danger">*</span></label>
                        <select name="additional_service_provider[]" class="form-control pri-form">
                          <option value="">--Select--</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group mandatory">
                        <label>Consumer No:<span class="text-danger">*</span></label>
                        <input type="text" name="additional_consumer_no[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group mandatory">
                        <label>Account No:<span class="text-danger">*</span></label>
                        <input type="text" name="additional_account_no[]" class="form-control pri-form">
                      </div>
                    </div>
                  </div>
                  <h6 class="text-decoration-underline">
                    IGR Details(1)
                  </h6>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>District:</label>
                        <input type="text" name="additional_igr_district[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Location of Sub-registrar:</label>
                        <input type="text" name="additional_igr_sub_registrar[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Year:</label>
                        <select name="additional_igr_year[]" class="form-control pri-form">
                          <option value="">--Select--</option>
                          @for ($i = 1950; $i &lt;= date('Y'); $i++) <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Document Number:</label>
                        <input type="text" name="additional_document_no[]" class="form-control pri-form">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mandatory">
                        <label for="main_nature">Main Nature:<span class="text-danger">*</span></label>
                        <select name="additional_main_nature[]" class="form-control pri-form">
                          <option value="">--Select--</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mandatory">
                        <label for="part_nature">Part Nature:<span class="text-danger">*</span></label>
                        <select name="additional_part_nature[]" class="form-control pri-form">
                          <option value="">--Select--</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <input type="hidden" value="1">
              <a href="javascript:void(0);" class="add_more_button_cls">Add More</a>
            </div>-->
            <div class="text-center mt-3">
              <button type="button" name="prevbtn7" id="prevbtn7" class="prevbtncls btn btn-info" data-id="5">
                &lt;&lt;Prev</button>&nbsp;&nbsp;
              <button type="button" name="nextbtn7" id="nextbtn7" class="nextbtncls btn btn-primary" data-id="5">
                Next&gt;&gt;
              </button>
              <span id="previewbtn"></span>
            </div>
          </div>
          <div class="stepdivmaincls" id="stepdiv_6" style="display: none">
            <div class="row">
              <div class="loopmailcls col-md-12">
                <h2 class="form-sub-title mt-3">
                  12. Details of bank account(s)<span class="text-danger">*</span>
                </h2>
                <div class="addMultipleFieldCls">
                  <div class="loopField_1 row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Account number:</label>
                        <input type="text" name="account_number[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4 is-other">
                      <div class="form-group">
                        <label>Type of Account:</label>
                        <select name="account_type[]" id="" class="form-control pri-form"
                          onchange="ifOther(this, '#addForm6')">
                          <option value="">--Select--</option>
                          <option value="savings">Savings</option>
                          <option value="current">Current</option>
                          <option value="joint">Joint</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                    </div>
                    <div id="addForm6" class="col-md-4 collapse">
                      <div class="form-group">
                        <label>Specify:</label>
                        <input type="text" class="form-control pri-form" placeholder="" name="state_excise_val">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>IFSC Code:</label>
                        <input type="text" name="micr_code[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>MICR Code:</label>
                        <input type="text" name="micr_code[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Name of the Bank:</label>
                        <select type="text" name="bank_name[]" class="form-control pri-form">
                          <option value="">Please Select</option>
                          <option value="129">AU Small Finance Bank - Corporate</option>
                          <option value="128">AU Small Finance Bank - Retail</option>
                          <option value="124">Axis Bank-Corporate</option>
                          <option value="121">Axis Bank-Retail</option>
                          <option value="149">Bandhan Bank - Retail</option>
                          <option value="108">Bank of Baroda - Retail and Corporate</option>
                          <option value="113">Bharat Co-operative Bank Mumbai Ltd&nbsp;- Retail</option>
                          <option value="19">CSB Bank - Retail</option>
                          <option value="35">Canara Bank - Retail and Corporate</option>

                          <option value="130">Capital Small Finance Bank Ltd - Retail and Corporate</option>

                          <option value="90">Central Bank of India - Retail and Corporate</option>

                          <option value="23">City Union Bank - Retail and Coprorate</option>

                          <option value="120">Cosmos Bank - Retail and Corporate</option>

                          <option value="51">DCB Bank - Retail</option>

                          <option value="63">Dhanlaxmi Bank-Corporate</option>

                          <option value="55">Dhanlaxmi Bank-Retail</option>

                          <option value="131">ESAF Small Finance Bank - Retail</option>

                          <option value="18">Federal Bank</option>

                          <option value="105">HDFC Bank - Corporate</option>

                          <option value="72">HDFC Bank - Retail</option>

                          <option value="115">ICICI Bank - Corporate</option>

                          <option value="104">ICICI Bank - Retail</option>

                          <option value="62">IDBI Bank-Corporate</option>

                          <option value="125">Indian Overseas Bank - Retail And Corporate</option>

                          <option value="46">IndusInd Bank - Retail</option>

                          <option value="47">Jammu and Kashmir Bank - Retail</option>

                          <option value="66">Janata Sahakari Bank Ltd. Pune</option>

                          <option value="31">Karnataka Bank Ltd - Retail and Corporate</option>

                          <option value="15">Karur Vysya Bank - Retail</option>

                          <option value="146">Kotak Mahindra Bank - Corporate</option>

                          <option value="54">Kotak Mahindra Bank - Retail</option>

                          <option value="53">Lakshmi Vilas Bank</option>

                          <option value="83">Mehsana Urban Co. Op. Bank Ltd - Retail</option>

                          <option value="107">Punjab National Bank - Retail and Corporate</option>

                          <option value="68">Punjab and Maharashtra Co-operative Bank Ltd</option>

                          <option value="58">Punjab and Sind Bank - Retail and Corporate</option>

                          <option value="126">RBL - Corporate</option>

                          <option value="127">RBL - Retail</option>

                          <option value="70">SVC Co-operative Bank Ltd - Retail</option>

                          <option value="64">Saraswat Bank</option>

                          <option value="26">South Indian Bank - Retail</option>

                          <option value="4">State Bank of India</option>

                          <option value="48">Tamilnad Mercantile Bank Ltd - Retail</option>

                          <option value="59">UCO Bank - Retail and Corporate</option>

                          <option value="85">Union Bank of India - Retail</option>

                          <option value="69">YES Bank - Retail</option>

                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Branch and Address of the Bank:</label>
                        <input type="text" name="branch_address[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Pin Code:</label>
                        <input type="text" name="bank_pin_code[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>State:</label>
                        <input type="text" name="bank_state[]" class="form-control pri-form">
                      </div>
                    </div>
                  </div>
                </div>
                <input type="hidden" value="1">
                <a href="javascript:void(0);" class="add_more_button_cls">Add More</a>
              </div>
            </div>

            <div class="text-center mt-3">
              <button type="button" name="prevbtn5" id="prevbtn5" class="prevbtncls btn btn-info" data-id="6">
                &lt;&lt;Prev</button>&nbsp;&nbsp;
              <button type="button" name="nextbtn5" id="nextbtn5" class="nextbtncls btn btn-primary" data-id="6">
                Next&gt;&gt;
              </button>
            </div>
          </div>
          <div class="stepdivmaincls" id="stepdiv_7" style="display: none">
            <h2 class="form-sub-title">
              13. Commodities to be Sold
            </h2>
            <div class="table-responsive">
              <table class="table table-bordered text-center" id="commodity-table">
                <thead>
                  <tr>
                    <th rowspan="2">Name of Commodity</th>
                    <th rowspan="2"></th>
                    <th colspan="3">Schedule Entry</th>
                    <th rowspan="2">

                    </th>
                  </tr>
                  <tr>
                    <th>Schedule</th>
                    <th>Entry No</th>
                    <th>Sub-Entry No</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <select class="form-control pri-form commodity-select" name="commodity_name[]" onchange='commodityChange(this)'>
                        <option value="Select">-- Select Commodity --</option>
                        <option value="Liquor">Liquor</option>
                        <option value="Petroleum">Petroleum</option>
                        <option value="Others">Others</option>
                      </select>
                    </td>
                    <td class="dynamic-checkboxes"></td>
                    <td><input type="text" class="form-control pri-form" name="schedule[]"></td>
                    <td><input type="text" class="form-control pri-form" name="select_entry[]"></td>
                    <td><input type="text" class="form-control pri-form" name="sub_entry[]"></td>
                    <td><button type="button" class="btn btn-danger deleteTr">Delete</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div style="position: relative; padding-top: 20px">
              <a href="javascript:void(0);" class="add-new" data-addnew=".e-payment-unregistered">Add More</a>
            </div>



            <div class="text-center mt-3">
              <button type="button" name="prevbtn6" id="prevbtn6" class="prevbtncls btn btn-info" data-id="7">
                &lt;&lt;Prev</button>&nbsp;&nbsp;
              <button type="button" name="nextbtn6" id="nextbtn6" class="nextbtncls btn btn-primary" data-id="7">
                Next&gt;&gt;
              </button>
            </div>
          </div>

          <div class="stepdivmaincls" id="stepdiv_8" style="display: none">
            <h2 class="form-sub-title">
              17. Details of Proprietor/ all Partners/Karta/Managing
              Directors and whole time Director/Members of Managing
              Committee of Associations /Board of Trustees / all persons
              having any interest in the business.*
            </h2>
            <a href="javascript:$('.details-list').slideToggle(300)"><strong style="font-size:18px">Show
                Details</strong></a>
            <ul class="collapse details-list">
              <li>
                <p>
                  Please provide details in the table below. In case you
                  need more tables, click on add button
                </p>
              </li>
              <li>
                <i class="priya-angle-double-right"></i> In case of
                <strong>Proprietorship</strong>: Details of
                Owner/Proprietor.
              </li>
              <li>
                <i class="priya-angle-double-right"></i> In case of
                <strong>Partnership</strong>: Details of all
                Managing/Authorized Partners (personal details of all
                partners but photos of only ten partners, including that of
                Managing Partner, are to be submitted).
              </li>
              <li>
                <i class="priya-angle-double-right"></i> In case of
                <strong>Companies registered under Companies Act</strong>:
                Managing Director and whole-time directors.
              </li>
              <li>
                <i class="priya-angle-double-right"></i> In case of
                <strong>HUF (Hindu Undivided Family)</strong>: Details of
                Karta of HUF.
              </li>
              <li>
                <i class="priya-angle-double-right"></i> In case of
                <strong>Trust</strong>: Details of Managing Trustee.
              </li>
              <li>
                <i class="priya-angle-double-right"></i> In case of
                <strong>Association of Persons</strong>: Details of
                Members of Managing Committee (personal details of all
                members but photos of only ten members, including that of
                Chairman, are to be submitted).
              </li>
              <li>
                <i class="priya-angle-double-right"></i> In case of
                <strong>Local Authority</strong>: Details of CEO or
                equivalent.
              </li>
              <li>
                <i class="priya-angle-double-right"></i> In case of
                <strong>Statutory Body</strong>: Details of CEO or
                equivalent.
              </li>
              <li>
                <i class="priya-angle-double-right"></i> In case of
                <strong>Others</strong>: Details of person responsible for
                day-to-day affairs of the business.
              </li>
              <li>
                <i class="priya-angle-double-right"></i> In case of
                <strong>LLP</strong>: If Partners are Registered then TIN;
                otherwise, as above, of all partners.
              </li>
              <li>
                <i class="priya-angle-double-right"></i> Any other documents on which the address is
                available.
              </li>

            </ul>
            <br>
            <br>

            <div class="loopmailcls col-md-12">
              <!--<h2 class="form-sub-title mt-2">
                <strong>Any other documents on which the address is
                  available.</strong>
              </h2>-->
              <div class="addMultipleFieldCls">
                <div class="loopField_1">
                  <h6 class="text-decoration-underline">Details(1)</h6>
                  <div class="row">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Name of the person:*</label>
                          <div class="row">
                            <div class="col-md-4">
                              <input type="text" name="first_name[]" class="form-control pri-form firstName"
                                onchange="$('.firstName').val($(this).val())" placeholder="First Name">
                            </div>
                            <div class="col-md-4">
                              <input type="text" name="middle_name[]" class="form-control pri-form middleName"
                                onchange="$('.middleName').val($(this).val())" placeholder="Middle Name">
                            </div>
                            <div class="col-md-4">
                              <input type="text" name="last_name[]" class="form-control pri-form lastName"
                                onchange="$('.lastName').val($(this).val())" placeholder="Last Name">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Name of Father/Husband:*</label>
                          <div class="row">
                            <div class="col-md-4">
                              <input type="text" name="father_first_name[]" class="form-control pri-form"
                                placeholder="First Name">
                            </div>
                            <div class="col-md-4">
                              <input type="text" name="father_middle_name[]" class="form-control pri-form"
                                placeholder="Middle Name">
                            </div>
                            <div class="col-md-4">
                              <input type="text" name="father_last_name[]" class="form-control pri-form"
                                placeholder="Last Name">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>



                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Designation/Status:*</label>
                        <select name="account_type[]" id="" class="form-control pri-form statusCls"
                          onchange="$('.statusCls').val($(this).val())">
                          <option value="">--Select--</option>
                          <option value="proprietor">Proprietor</option>
                          <option value="partner">Partner</option>
                          <option value="md">Managing Director</option>
                          <option value="wtd">Whole Time Director</option>
                          <option value="mmca">Member of Managing Committee of Association</option>
                          <option value="btt">Board of Trustees</option>
                          <option value="other">All persons having any interest in the business</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Date of birth:*</label>
                        <input type="date" name="date_of_birth[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>PAN:*</label>
                        <input type="text" name="pan[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>POI (Person of Indian Origin):</label>
                        <input type="text" name="poi[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>OCI (Overseas Citizenship of India):</label>
                        <input type="text" name="oci[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>PTEC:</label>
                        <input type="text" name="ptec_2[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>TIN(if LLP):</label>
                        <input type="text" name="tin_llp[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>PTRC(if LLP):</label>
                        <input type="text" name="ptrc_2[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Passport No:</label>
                        <input type="text" name="passport_no[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>UID/Aadhar No:</label>
                        <input type="text" name="uid_no[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>DIN No:</label>
                        <input type="text" name="din_no[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4 repeat-col">
                      <div class="form-group">
                        <label>Mobile Number:</label>
                        <div class="d-flex">
                          <input type="text" name="sign_rep_mobile" class="form-control pri-form">
                          <button type="button" class="btn btn-secondary add-col">
                            <i class="priya-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 repeat-col">
                      <div class="form-group">
                        <label>Email Address:</label>
                        <div class="d-flex">
                          <input type="text" name="sign_rep_mobile" class="form-control pri-form">
                          <button type="button" class="btn btn-secondary add-col">
                            <i class="priya-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <!--<div class="col-md-4">
                      <div class="form-group mandatory">
                        <label>Telephone No:<span class="text-danger">*</span></label>
                        <input type="text" name="telephone_no[]" class="form-control pri-form">
                      </div>
                    </div>-->
                    <div class="col-md-4">
                      <div class="form-group mandatory">
                        <label>Gender:<span class="text-danger">*</span></label>
                        <select name="gender[]" class="form-control pri-form">
                          <option value="">--Select--</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                    </div>
                    <!--<div class="col-md-4">
                      <div class="form-group mandatory">
                        <label>FAX No:<span class="text-danger">*</span></label>
                        <input type="text" name="fax_no[]" class="form-control pri-form">
                      </div>
                    </div>
                  </div>-->
                    <h6 class="text-decoration-underline">
                      Residential Address(1)
                    </h6>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Building No/Flat No/Door No:</label>
                          <input type="text" name="building_no_2[]" class="form-control pri-form">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Floor No:</label>
                          <input type="text" name="floor_no_2[]" class="form-control pri-form">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Name of the Premises/Building:</label>
                          <input type="text" name="building_name_2[]" class="form-control pri-form">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Road/Street/Lane:</label>
                          <input type="text" name="road_name_2[]" class="form-control pri-form">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>State:</label>
                          <input type="text" name="state_name_2[]" class="form-control pri-form">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>District:</label>
                          <input type="text" name="district_name_2[]" class="form-control pri-form">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Taluka:</label>
                          <input type="text" name="taluka_name_2[]" class="form-control pri-form">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Locality/Area/Village:</label>
                          <input type="text" name="taluka_name_2[]" class="form-control pri-form">
                        </div>
                      </div>
                      <!--<div class="col-md-4">
                      <div class="form-group">
                        <label>Post:</label>
                        <input type="text" name="post_name_2[]" class="form-control pri-form">
                      </div>
                    </div>-->
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Pincode:</label>
                          <input type="text" name="pincode_2[]" class="form-control pri-form">
                        </div>
                      </div>
                      <!--<div class="col-md-4">
                      <div class="form-group">
                        <label>Latitude(Optional):</label>
                        <input type="text" name="latitude_2[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Longitude(Optional):</label>
                        <input type="text" name="longitude_2[]" class="form-control pri-form">
                      </div>
                    </div>-->
                    </div>
                    <h6 class="text-decoration-underline">
                      Contact Details(1)
                    </h6>
                    <div class="row">
                      <!--<div class="col-md-4">
                      <div class="form-group">
                        <label>Telephone No 2 with STD Code:</label>
                        <div class="row">
                          <div class="col-4">
                            <input type="text" name="telephone_no_2_std_2[]" class="form-control pri-form" placeholder="STD Code">
                          </div>
                          <div class="col-8">
                            <input type="text" name="telephone_no_2_2[]" class="form-control pri-form" placeholder="Telephone No">
                          </div>
                        </div>
                      </div>
                    </div>-->
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Mobile No 2:</label>
                          <input type="text" name="mobile_no_2_2[]" class="form-control pri-form">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Email Address 2:</label>
                          <input type="text" name="email_address_2_2[]" class="form-control pri-form">
                        </div>
                      </div>
                      <!--<div class="col-md-4">
                      <div class="form-group">
                        <label>FAX No:</label>
                        <input type="text" name="fax_no_2_2[]" class="form-control pri-form">
                      </div>
                    </div>-->
                    </div>
                    <!--<h6 class="text-decoration-underline">
                    Documents required for proof(1)
                  </h6>
                  <ul>
                    <li>
                      <input type="checkbox" name="document[]" value="electricity_bill">
                      Latest paid electricity bill in the name of the
                      applicant
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="ration_card">
                      Ration Card having the name of the applicant
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="passport">
                      Valid Indian Passport
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="driving_license">
                      Driving License
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="voter_id">
                      Election Photo Identity Card
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="property_card">
                      Property Card
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="landline_bill">
                      Latest copy of MNTL/BSNL landline bill
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="gas_bill">
                      Latest copy of bill of domestic gas agency
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="bank_passbook">
                      First page of passbook of saving Bank Account
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="bank_certificate">
                      Certificate showing the address of the applicant
                      issued by the manager of Nationalised Bank
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="consent_letter">
                      Consent letter from family member/s in the name of
                      applicant (owner/co-owners of premises)
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="ownership_proof">
                      Ownership proof of Consenter/s
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="ownership_deed">
                      Registered Ownership deed
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="registered_agreement">
                      Registered Agreement (including Index II) with the
                      builder
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="maintenance_receipt">
                      Society maintenance receipt
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="share_certificate">
                      Share certificate of Co-operative society in the
                      name of applicant
                    </li>
                    <li>
                      <input type="checkbox" name="document[]" value="aadhaar_card">
                      Aadhaar Card
                    </li>
                  </ul>-->
                  </div>
                </div>

                <a href="javascript:void(0);" class="add_more_button_cls">Add More</a>
              </div>
              <div class="text-center mt-3">
                <button type="button" name="prevbtn3" id="prevbtn3" class="prevbtncls btn btn-info" data-id="8">
                  &lt;&lt;Prev</button>&nbsp;&nbsp;<button type="button" name="nextbtn3" id="nextbtn3"
                  class="nextbtncls btn btn-primary" data-id="8">
                  Next&gt;&gt;
                </button>
              </div>
            </div>
          </div>
          <div class="stepdivmaincls" id="stepdiv_9" style="display: none;">
            <h2 class="form-sub-title">
              18. Details of Manager / Authorized Signatory
            </h2>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Name of the person:*</label>
                  <div class="row">
                    <div class="col-md-4">
                      <input type="text" name="first_name[]" class="form-control pri-form firstName"
                        placeholder="First Name" disabled>
                    </div>
                    <div class="col-md-4">
                      <input type="text" name="middle_name[]" class="form-control pri-form middleName"
                        placeholder="Middle Name" disabled>
                    </div>
                    <div class="col-md-4">
                      <input type="text" name="last_name[]" class="form-control pri-form lastName"
                        placeholder="Last Name" disabled>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Designation/Status:*</label>
                  <select name="account_type[]" id="" class="form-control pri-form statusCls" disabled>
                    <option value="">--Select--</option>
                    <option value="proprietor">Proprietor</option>
                    <option value="partner">Partner</option>
                    <option value="md">Managing Director</option>
                    <option value="wtd">Whole Time Director</option>
                    <option value="mmca">Member of Managing Committee of Association</option>
                    <option value="bt">Board of Trustees</option>
                    <option value="other">All persons having any interest in the business</option>
                  </select>
                </div>
              </div>
            </div>

            <br>

            <h2 class="form-sub-title mt-3">
              19. Details of Authorized Representative
              (STP/Advocate/CA/CS etc.)
            </h2>
            <br>
            <div class="loopmailcls">
              <div class="addMultipleFieldCls">
                <div class="loopField_1 row">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">

                        <select name="sign_rep_status" class="form-control pri-form">
                          <option value="">--Select--</option>
                          <option value="">STP</option>
                          <option value="">Advocate</option>
                          <option value="">CA</option>
                          <option value="">CS</option>

                          <option value="">Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Name of the Person:</label>
                        <div class="row">
                          <div class="col-4">
                            <input type="text" name="sign_rep_first_name" class="form-control pri-form"
                              placeholder="First Name">
                          </div>
                          <div class="col-4">
                            <input type="text" name="sign_rep_middle_name" class="form-control pri-form"
                              placeholder="Middle Name">
                          </div>
                          <div class="col-4">
                            <input type="text" name="sign_rep_last_name" class="form-control pri-form"
                              placeholder="Last Name">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Status:</label>
                        <select name="sign_rep_status" class="form-control pri-form">
                          <option value="">--Select--</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 repeat-col">
                      <div class="form-group">
                        <label>Mobile Number:</label>
                        <div class="d-flex">
                          <input type="text" name="sign_rep_mobile" class="form-control pri-form">
                          <button type="button" class="btn btn-secondary add-col">
                            <i class="priya-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 repeat-col">
                      <div class="form-group">
                        <label>Email Address:</label>
                        <div class="d-flex">
                          <input type="text" name="sign_rep_mobile" class="form-control pri-form">
                          <button type="button" class="btn btn-secondary add-col">
                            <i class="priya-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <!--<div class="col-md-4">
                <div class="form-group">
                  <label>Email Address:</label>
                  <input type="text" name="sign_rep_email" class="form-control pri-form">
                </div>
              </div>-->
                    <!--<div class="col-md-4">
                <div class="form-group">
                  <label>Telephone No:</label>
                  <input type="text" name="sign_rep_telephone" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>FAX No:</label>
                  <input type="text" name="sign_rep_fax" class="form-control pri-form">
                </div>
              </div>-->
                  </div>
                </div>

              </div>
              <a href="javascript:void(0);" class="add_more_button_cls">Add More</a>
            </div>

            <div class="text-center mt-3">
              <button type="button" name="prevbtn3" id="prevbtn3" class="prevbtncls btn btn-info" data-id="9">
                &lt;&lt;Prev</button>&nbsp;&nbsp;<button type="button" name="nextbtn3" id="nextbtn3"
                class="nextbtncls btn btn-primary" data-id="9">
                Next&gt;&gt;
              </button>
            </div>
          </div>
          <!--<div class="stepdivmaincls" id="stepdiv_10" style="display: none">
            <h2 class="form-sub-title">FORM-105</h2>
            <br>
            <h6>
              (See rule 16[(1) and (2)]) Declaration / Revised declaration
              under Section 19 of the Maharashtra Value Added Tax Act,
              2002.
            </h6>
            <p>
              I/We the undersigned engaged in the business and liable to
              pay the tax under the Maharashtra Value Added Tax Act, 2002,
              do hereby declare / declare in supercession of the previous
              declaration of the said concern that the person / persons
              mentioned herein below shall be deemed to be the
              Manager/Authorized Signatory of the said businesses at
              <input type="text" name="business_address" id="business_address" style="
                        border-radius: var(--bs-border-radius);
                        font-weight: 400;
                        line-height: 2.5;
                        border: 1px solid #0002;
                      ">
              / all places of business within the State of Maharashtra for
              the purpose of the said Act, and he / they shall at all
              times comply with the provisions of the said Act and the
              rules made there under. The necessary details are as under.
            </p>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>1. Name of the applicant:</label>
                  <input type="text" name="applicant_name" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>2. Name and Style of Business:</label>
                  <input type="text" name="business_name" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>3. Registration Certificate Number under the MVAT
                    Act, 2002( not applicable if declaration is filed
                    along with application for registration):</label>
                  <input type="text" name="registration_certificate_number" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>4. Details of the person deemed to be the Manager/
                    Authorized Signatory of the said business:</label>
                  <input type="text" name="manager_name" class="form-control pri-form">
                </div>
              </div>
            </div>
            <h2 class="form-sub-title">
              Number of Manager / Authorized Signatory
            </h2>
            <h6>Details</h6>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Name of the Person:</label>
                  <div class="row">
                    <div class="col-4">
                      <input type="text" name="manager_first_name[]" class="form-control pri-form">
                    </div>
                    <div class="col-4">
                      <input type="text" name="manager_middle_name[]" class="form-control pri-form">
                    </div>
                    <div class="col-4">
                      <input type="text" name="manager_last_name[]" class="form-control pri-form">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>PAN:</label>
                  <input type="text" name="manager_pan[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>UID No:</label>
                  <input type="text" name="manager_uid[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Mobile Number:</label>
                  <input type="text" name="manager_mobile[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Email Address:</label>
                  <input type="text" name="manager_email[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Telephone No:</label>
                  <input type="text" name="manager_telephone[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>FAX No:</label>
                  <input type="text" name="manager_fax[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Gender:</label>
                  <select name="manager_gender[]" id="" class="form-control pri-form">
                    <option value="">--Select--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
                </div>
              </div>
            </div>
            <h6>Residential Address</h6>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Building No/Flat No/Door No:</label>
                  <input type="text" name="manager_building_no[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Floor No:</label>
                  <input type="text" name="manager_floor_no[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Name of the Premises/Building:</label>
                  <input type="text" name="manager_building_name[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Road/Street/Lane:</label>
                  <input type="text" name="manager_street[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>District:</label>
                  <select name="manager_district[]" id="" class="form-control pri-form">
                    <option value="">--Select--</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Taluka/Area:</label>
                  <select name="manager_area[]" id="" class="form-control pri-form">
                    <option value="">--Select--</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Post:</label>
                  <select name="manager_post[]" id="" class="form-control pri-form">
                    <option value="">--Select--</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Pincode:</label>
                  <input type="text" name="manager_pincode[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>5.Countersignature of the Person Nominated:</label>
                  <input type="text" name="manager_countersignature[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>6. Status of the Person Nominated:</label>
                  <input type="text" name="manager_status[]" class="form-control pri-form">
                </div>
              </div>
            </div>
            <p>
              Declaration: - I hereby solemnly affirm and declare that the
              information given herein above is true and correct to the
              best of my knowledge and belief and nothing has been
              concealed therefrom. I hereby authorise Maharashtra Sales
              Tax Department to collect the information from UID
              authority.
            </p>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Place:</label>
                  <input type="text" name="declaration_place" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Date:</label>
                  <input type="date" name="declaration_date" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Signature:</label>
                  <input type="text" name="declaration_signature" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Designation:</label>
                  <input type="text" name="declaration_designation" class="form-control pri-form">
                </div>
              </div>
            </div>
            <p>
              The declaration shall be signed in the case of ( Applicant
              will click on below declaration)
            </p>
            <ul>
              <li>(a) A Hindu undivided family by its Karta.</li>
              <li>
                (b) An association, club or society, by its President or
                Chairman or the Secretary.
              </li>
              <li>
                (c) A firm, by the partners having a total share of not
                less than 50 per cent.
              </li>
              <li>
                (d) A private limited company, by all its directors or
                where there are no directors by the authorised
                representative.
              </li>
              <li>
                (e) A public limited company or co-operative society, by
                the managing agent or where there are no managing agents,
                by the managing director or the Chairman of the Board of
                Directors and the Secretary.
              </li>
              <li>(f) An individual, by the proprietor.</li>
              <li>
                (g) The Government, by an officer duly authorised by it.
              </li>
              <li>
                (h) A business run by a guardian or trustee or otherwise
                on behalf of another person, by the guardian, trustee, or
                the person managing the business.
              </li>
            </ul>
            <p>Enter here one of the following as may be applicable</p>
            <ul>
              <li class="single-line">
                a) The guardian/trustee or
                <input type="text" name="guardian_name" class="form-control pri-form">
                on behalf of
                <input type="text" name="on_behalf_of" class="form-control pri-form">
                a Hindu undivided family known as
                <input type="text" name="huf_name" class="form-control pri-form">
              </li>

              <li class="single-line p-1">
                b) An association/club/society known as
                <input type="text" name="association_name" class="form-control pri-form">
              </li>
              <li class="single-line p-1">
                c) A firm known as
                <input type="text" name="firm_name" class="form-control pri-form">
              </li>
              <li class="single-line p-1">
                d) A private limited company known as
                <input type="text" name="private_company_name" class="form-control pri-form">
              </li>
              <li class="single-line p-1">
                e) A public limited company/co-operative society known as
                <input type="text" name="public_company_name" class="form-control pri-form">
              </li>
            </ul>
            <div class="text-center mt-3">
              <button type="button" name="prevbtn3" id="prevbtn3" class="prevbtncls btn btn-info" data-id="10">
                &lt;&lt;Prev</button>&nbsp;&nbsp;<button type="button" name="nextbtn3" id="nextbtn3" class="nextbtncls btn btn-primary" data-id="10">
                Next&gt;&gt;
              </button>
            </div>
          </div>-->
          <div class="stepdivmaincls" id="stepdiv_10" style="display: none">
            <h2 class="form-sub-title">
              20(A) Address(s) in other State(s) and corresponding TIN
              under C.S.T. Act, if any
            </h2>
            <div class="loopmailcls col-md-12">
              <div class="addMultipleFieldCls">
                <div class="loopField_1">
                  <h6>Address(1)</h6>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Building No/Flat No/Door No:</label>
                        <input type="text" name="other_building[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Floor No:</label>
                        <input type="text" name="other_floor[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Name of the Premises/Building:</label>
                        <input type="text" name="other_premises[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Road/Street/Lane:</label>
                        <input type="text" name="other_road[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>State:</label>
                        <select name="other_state[]" class="form-control pri-form">
                          <option value="">Select State</option>
                          <option value="State1">State1</option>
                          <option value="State2">State2</option>
                          <option value="State3">State3</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>District/Town/City:</label>
                        <select name="other_district[]" class="form-control pri-form">
                          <option value="">Select District</option>
                          <option value="District1">District1</option>
                          <option value="District2">District2</option>
                          <option value="District3">District3</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Taluka/Area:</label>
                        <input type="text" name="taluka_name_2[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Locality/Post/Village:</label>
                        <input type="text" name="taluka_name_2[]" class="form-control pri-form">
                      </div>
                    </div>
                    <!--<div class="col-md-4">
                      <div class="form-group">
                        <label>Post:</label>
                        <select name="other_post[]" class="form-control pri-form">
                          <option value="">Select Post</option>
                          <option value="Post1">Post1</option>
                          <option value="Post2">Post2</option>
                          <option value="Post3">Post3</option>
                        </select>
                      </div>
                    </div>-->
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Pincode:</label>
                        <input type="text" name="other_pincode[]" class="form-control pri-form">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Corresponding CST RC No. / TIN:</label>
                        <input type="text" name="other_cst[]" class="form-control pri-form">
                      </div>
                    </div>
                  </div>
                  <h6>Contact Details(1)</h6>
                  <div class="row">
                    <!--<div class="col-md-4">
                      <div class="form-group">
                        <label>Telephone No with STD Code:</label>
                        <div class="row">
                          <div class="col-4">
                            <input type="text" name="other_telephone_std[]" class="form-control pri-form" placeholder="STD Code">
                          </div>
                          <div class="col-8">
                            <input type="text" name="other_telephone_no[]" class="form-control pri-form">
                          </div>
                        </div>
                      </div>
                    </div>-->
                    <div class="col-md-4 repeat-col">
                      <div class="form-group">
                        <label>Mobile Number:</label>
                        <div class="d-flex">
                          <input type="text" name="sign_rep_mobile" class="form-control pri-form">
                          <button type="button" class="btn btn-secondary add-col">
                            <i class="priya-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 repeat-col">
                      <div class="form-group">
                        <label>Email Address:</label>
                        <div class="d-flex">
                          <input type="text" name="sign_rep_mobile" class="form-control pri-form">
                          <button type="button" class="btn btn-secondary add-col">
                            <i class="priya-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <!--<div class="col-md-4">
                      <div class="form-group">
                        <label>FAX No:</label>
                        <input type="text" name="other_fax[]" class="form-control pri-form">
                      </div>
                    </div>-->
                  </div>
                </div>
              </div>
              <a href="javascript:void(0);" class="add_more_button_cls">Add More</a>
            </div>
            <div class="text-center mt-3">
              <button type="button" name="prevbtn3" id="prevbtn3" class="prevbtncls btn btn-info" data-id="10">
                &lt;&lt;Prev</button>&nbsp;&nbsp;<button type="button" name="nextbtn3" id="nextbtn3"
                class="nextbtncls btn btn-primary" data-id="10">
                Next&gt;&gt;
              </button>
            </div>
          </div>
          <div class="stepdivmaincls" id="stepdiv_11" style="display: none;">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>20(B) Status of the signatory to the
                    application:</label>
                  <select name="account_type[]" id="" class="form-control pri-form statusCls" disabled="">
                    <option value="">--Select--</option>
                    <option value="proprietor">Proprietor</option>
                    <option value="partner">Partner</option>
                    <option value="md">Managing Director</option>
                    <option value="wtd">Whole Time Director</option>
                    <option value="mmca">Member of Managing Committee of Association</option>
                    <option value="bt">Board of Trustees</option>
                    <option value="other">All persons having any interest in the business</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Name of the signatory to the application:</label>
                  <div class="row">
                    <div class="col-4">
                      <input type="text" name="signatory_first_name[]" class="form-control pri-form firstName"
                        placeholder="First Name" disabled>
                    </div>
                    <div class="col-4">
                      <input type="text" name="signatory_middle_name[]" class="form-control pri-form middleName"
                        placeholder="Middle Name" disabled>
                    </div>
                    <div class="col-4">
                      <input type="text" name="signatory_last_name[]" class="form-control pri-form lastName"
                        placeholder="Last Name" disabled>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>UID/Aadhar No:</label>
                  <input type="text" class="form-control pri-form" name="signatory_uid[]"
                    placeholder="UID/Aadhar Number">
                </div>
              </div>
            </div>
            <div class="text-center mt-3">
              <button type="button" name="prevbtn3" id="prevbtn3" class="prevbtncls btn btn-info" data-id="11">
                &lt;&lt;Prev</button>&nbsp;&nbsp;<button type="button" name="nextbtn3" id="nextbtn3"
                class="nextbtncls btn btn-primary" data-id="11">
                Next&gt;&gt;
              </button>
            </div>
          </div>

          <div class="stepdivmaincls" id="stepdiv_12" style="display: none">
            <div class="col-md-4">
              <div class="form-group">
                <h2 class="form-sub-title">Download forms:</h2>
                <div class="row align-items-center mb-3 justify-content-between">
                  <div class="col-auto">
                    <label class="mb-0">Annexure "B" (Download Template)</label>
                  </div>
                  <div class="col-auto">
                    <a class="btn custom-download-btn d-flex align-items-center" href="javascript:void(0);">
                      <i class="bi bi-download me-2"></i>
                      <span>Download</span>
                    </a>
                  </div>
                </div>
                <div class="row align-items-center mb-3 justify-content-between">
                  <div class="col-auto">
                    <label class="mb-0">Scanned copy of FORM 105*</label>
                  </div>
                  <div class="col-auto">
                    <a class="btn custom-download-btn d-flex align-items-center" href="javascript:void(0);">
                      <i class="bi bi-download me-2"></i>
                      <span>Download</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group preview-btn-enable">
                <h2 class="form-sub-title">Upload Documents:</h2>
                <div class="row align-items-center mb-3 justify-content-between">
                  <div class="col-auto">
                    <label class="mb-0">Photo of signatory to the application*</label>
                  </div>

                  <div class="col-auto d-flex gap-2">
                    <div class="input-group">
                      <input type="file" name="" class="form-control" />
                      <button class="btn custom-download-btn d-flex align-items-center" type="button" disabled>
                        <i class="priya-eye"></i>
                      </button>
                    </div>
                    
                  </div>
                </div>
                <div class="row align-items-center mb-3 justify-content-between">
                  <div class="col-auto">
                    <label class="mb-0">Signature</label>
                  </div>

                  <div class="col-auto d-flex gap-2">
                    <div class="input-group">
                      <input type="file" name="" class="form-control" />
                      <button class="btn custom-download-btn d-flex align-items-center" type="button" disabled>
                        <i class="priya-eye"></i>
                      </button>
                    </div>
                    
                  </div>
                </div>
                <div class="row align-items-center mb-3 justify-content-between">
                  <div class="col-auto">
                    <label class="mb-0">Annexure "B" (Download Template)</label>
                  </div>

                  <div class="col-auto d-flex gap-2">
                    <div class="input-group">
                      <input type="file" name="" class="form-control" />
                      <button class="btn custom-download-btn d-flex align-items-center" type="button" disabled>
                        <i class="priya-eye"></i>
                      </button>
                    </div>
                    
                  </div>
                </div>
                <div class="row align-items-center mb-3 justify-content-between">
                  <div class="col-auto">
                    <label class="mb-0">Scanned copy of FORM 105*</label>
                  </div>

                  <div class="col-auto d-flex gap-2">
                    <div class="input-group">
                      <input type="file" name="" class="form-control" />
                      <button class="btn custom-download-btn d-flex align-items-center" type="button" disabled>
                        <i class="priya-eye"></i>
                      </button>
                    </div>
                    
                  </div>
                </div>
                <div class="row align-items-center mb-3 justify-content-between">
                  <div class="col-auto">
                    <label class="mb-0">PAN of Proprietor</label>
                  </div>

                  <div class="col-auto d-flex gap-2">
                    <div class="input-group">
                      <input type="file" name="" class="form-control" />
                      <button class="btn custom-download-btn d-flex align-items-center" type="button" disabled>
                        <i class="priya-eye"></i>
                      </button>
                    </div>
                    
                  </div>
                </div>
                <div class="row align-items-center mb-3 justify-content-between">
                  <div class="col-auto">
                    <label class="mb-0">Month wise Purchase and Sales Summary and bill wise
                      Sales Statement/Purchase statement for the
                      month</label>
                  </div>

                  <div class="col-auto d-flex gap-2">
                    <div class="input-group">
                      <input type="file" name="" class="form-control" />
                      <button class="btn custom-download-btn d-flex align-items-center" type="button" disabled>
                        <i class="priya-eye"></i>
                      </button>
                    </div>
                    
                  </div>
                </div>
                <div class="row align-items-center mb-3 justify-content-between">
                  <div class="col-auto">
                    <label class="mb-0">Sale Bill/Purchase Bill (in cases where Purchase
                      Tax is leviable) on which threshold limit
                      exceeded.</label>
                  </div>

                  <div class="col-auto d-flex gap-2">
                    <div class="input-group">
                      <input type="file" name="" class="form-control" />
                      <button class="btn custom-download-btn d-flex align-items-center" type="button" disabled>
                        <i class="priya-eye"></i>
                      </button>
                    </div>
                    
                  </div>
                </div>
                <div class="row align-items-center mb-3 justify-content-between">
                  <div class="col-auto">
                    <label class="mb-0">Lorry/Transport receipt of purchase of imported
                      goods(in case of importer)</label>
                  </div>

                  <div class="col-auto d-flex gap-2">
                    <div class="input-group">
                      <input type="file" name="" class="form-control" />
                      <button class="btn custom-download-btn d-flex align-items-center" type="button" disabled>
                        <i class="priya-eye"></i>
                      </button>
                    </div>
                    
                  </div>
                </div>
                <div class="row align-items-center mb-3 justify-content-between">
                  <div class="col-auto">
                    <label class="mb-0">POB-Latest electricity bill*</label>
                  </div>

                  <div class="col-auto d-flex gap-2">
                    <div class="input-group">
                      <input type="file" name="" class="form-control" />
                      <button class="btn custom-download-btn d-flex align-items-center" type="button" disabled>
                        <i class="priya-eye"></i>
                      </button>
                    </div>
                    
                  </div>
                </div>
                <div class="row align-items-center mb-3 justify-content-between">
                  <div class="col-auto">
                    <label class="mb-0">BANK-000001-Cancelled cheque(s) of current account
                      in the name of firm/business</label>
                  </div>

                  <div class="col-auto d-flex gap-2">
                    <div class="input-group">
                      <input type="file" name="" class="form-control" />
                      <button class="btn custom-download-btn d-flex align-items-center" type="button" disabled>
                        <i class="priya-eye"></i>
                      </button>
                    </div>
                    
                  </div>
                </div>
                <div class="row align-items-center mb-3 justify-content-between">
                  <div class="col-auto">
                    <label class="mb-0">APOB-000001-Latest electricity bill*</label>
                  </div>

                  <div class="col-auto d-flex gap-2">
                    <div class="input-group">
                      <input type="file" name="" class="form-control" />
                      <button class="btn custom-download-btn d-flex align-items-center" type="button" disabled>
                        <i class="priya-eye"></i>
                      </button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <input type="checkbox" name="document[]" value="electricity_bill"> Declaration/Verification
              <p class="mt-3">
                * I hereby solemnly affirm and declare that the
                information given herein above is true and correct to the
                best of my knowledge and belief and nothing has been
                concealed therefrom. <br>I hereby authorise Maharashtra Sales
                Tax Department to collect the information from UID
                authority.
              </p>
            </div>

            <div class="col-md-12 mt-3">
              <input type="checkbox" name="document[]" value="electricity_bill"> Whether you want to register for CST
              Act?

            </div>
            <br>
            <br>
            <br>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Place:</label>
                  <input type="text" name="district_name_2[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">

              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Name of authorized signatory:</label>
                  <input type="text" name="district_name_2[]" class="form-control pri-form">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Date:</label>
                  <input type="date" name="date_of_birth[]" class="form-control pri-form">
                </div>
              </div>
              <div class="col-md-4">

              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Designation:</label>
                  <input type="text" name="district_name_2[]" class="form-control pri-form">
                </div>
              </div>
            </div>

            <div class="text-center mt-3">
              <button type="button" name="prevbtn3" id="prevbtn3" class="prevbtncls btn btn-info" data-id="12">
                &lt;&lt;Prev</button>&nbsp;&nbsp;
              <button class="nextbtncls btn btn-primary">
                Preview
              </button>&nbsp;&nbsp;<a type="button" href="success-page.php" name="nextbtn3" id="nextbtn3"
                class="nextbtncls btn btn-primary" data-id="12">
                Submit
              </a>
            </div>

          </div>
        </form>
      </div>


    </div>
  </div>
</div>

<div id="previewModal"></div>

<script>
  const checkboxesMap = {
    Select: [],
    Liquor: ['PLL-1', 'FL-1', 'FL-2', 'BRL', 'FL-3', 'FL-4', 'CL-1', 'CL-2', 'CL-3'],
    Petroleum: ['Oil Marketing Company', 'Natural Gas', 'Petroleum Retail Outlet'],
    Others: []
  };

  function removeAllCheckboxes(row) {
  const checkboxContainer = row.querySelector('.dynamic-checkboxes');
  if (checkboxContainer) {
    checkboxContainer.innerHTML = '';
  }
}


  function commodityChange(select) {
    const value = select.value;
    const row = select.closest('tr');
    const cell = row.querySelector('.dynamic-checkboxes');
    cell.innerHTML = '';

    // Add checkboxes if available
    if (checkboxesMap[value]) {
      checkboxesMap[value].forEach((label, index) => {
        const id = `${value}_${index}_${Math.random().toString(36).substr(2, 5)}`;
        const checkboxHTML = `
          <div class="form-check text-start">
            <input class="form-check-input" type="checkbox" id="${id}" name="${value.toLowerCase()}_options[]">
            <label class="form-check-label" for="${id}">${label}</label>
          </div>`;
        cell.innerHTML += checkboxHTML;
      });
    }

    // If "Others" is selected, show a text input
    if (value === 'Others') {
      const inputId = `others_input_${Math.random().toString(36).substr(2, 5)}`;
      const inputHTML = `
        <div class="form-group">
          
          <input type="text" class="form-control" name="others_text[]" id="${inputId}">
        </div>`;
      cell.innerHTML += inputHTML;
    }
  }

  function attachEventsToRow(row) {
    const select = row.querySelector('.commodity-select');
    select.addEventListener('change', () => renderCheckboxes(select));
    renderCheckboxes(select); // trigger on load
    row.querySelector('.deleteTr')?.addEventListener('click', () => row.remove());
  }

  document.querySelectorAll('#commodity-table tbody tr').forEach(attachEventsToRow);

  document.getElementById('addRowBtn').addEventListener('click', function () {
    const tableBody = document.querySelector('#commodity-table tbody');
    const newRow = tableBody.rows[0].cloneNode(true);

    newRow.commodityChange('Select');

    // Clear inputs
    newRow.querySelectorAll('input').forEach(input => input.value = '');
    newRow.querySelector('.dynamic-checkboxes').innerHTML = '';
    tableBody.appendChild(newRow);

    removeAllCheckboxes(newRow);

    
  });
</script>
<script>
  function ifOther(d, s) {
    if (d.value == 'other') {
      $(d).closest('.is-other').next().show();
      // $(s).show();
    } else {
      // $(s).hide();
      $(d).closest('.is-other').next().hide();
    }
  }
</script>

<script type="text/javascript">
  function numberOnly(evt) {
    var charCode = evt.which ? evt.which : evt.keyCode;
    if (
      charCode != 46 &&
      charCode > 31 &&
      (charCode < 48 || charCode > 57)
    ) {
      return false;
    } else {
      return true;
    }
  }
  $(document).ready(function () {
    $(".prevbtncls").click(function () {
      var selectStep = $(this).data("id");
      $("#stepdiv_" + selectStep).hide();
      var decVal = parseInt(selectStep) - 1;
      $("#stepdiv_" + decVal).slideDown();
      $("#stepActive_" + decVal)
        .addClass("active")
        .siblings()
        .removeClass("active");
      $("html, body").animate({
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

    function toggleFirstRemoveIcon(mainDiv) {
      const groups = mainDiv.find(".loopField_1");
      if (groups.length === 1) {
        // Only one left – it must NOT be removable
        groups.eq(0).find(".removeParentdetails_of_surety").remove();
      } else {
        // More than one – ensure the first group has a remove icon exactly once
        if (groups.eq(0).find(".removeParentdetails_of_surety").length === 0) {
          groups.eq(0).prepend('<i class="priya-close removeParentdetails_of_surety"></i>');
        }
      }
    }

    $('.add_more_button_cls').click(function () {
      const repeatCount = $(this).data('repeat-times') || 0
      let cnt = 0
      let mainDiv = $(this).closest('.loopmailcls')
      if (repeatCount == 0 || cnt < parseInt(repeatCount)) {
        let newEle = $(this)
          .closest('.loopmailcls')
          .find('.loopField_1:first-child')
          .clone()
        newEle.find('.collapse').hide();
        newEle.find('.no-repeat').remove();
        
        newEle
          .appendTo(
            $(this)
              .closest('.loopmailcls')
              .children('.addMultipleFieldCls')
          )
          .addClass('repeat-' + cnt)
          .prepend(
            '<i class="priya-close removeParentdetails_of_surety"></i>'
          )
          .find('input, textarea, select')
          .val('')
          .css('background', '')
        newEle.slideDown(300)
        newEle.find('h6').each(function () {
          let text = $(this).text()
          let count = text.match(/\d+/g)

          if (count) {
            let length = mainDiv.find('.loopField_1').length
            let num = parseInt(count.join(''))
            let newText = text.replace(num, length)
            $(this).text(newText)
          }
        })
        // make sure the very first block now has a ✕
        toggleFirstRemoveIcon(mainDiv);
        cnt++
      }
      $('.removeParentdetails_of_surety').click(function () {
        let parentElement = $(this).closest('.loopField_1')
        let mainDiv = parentElement.parents('.loopmailcls').first()
        parentElement.slideUp(300, function () {
          $(this).remove()
          mainDiv.find('.loopField_1').each(function (index) {
            $(this)
              .find('h6')
              .each(function () {
                let text = $(this).text();
                let numMatch = text.match(/\d+/g);
                if (numMatch) {
                  let num = parseInt(numMatch.join(''));
                  let newText = text.replace(num, index + 1);
                  $(this).text(newText);
                }
              });
          });
          toggleFirstRemoveIcon(mainDiv);
        });

      });
    });

    $('.add-new').click(function () {
      let table = $(this).closest('div').prev('.table-responsive').find('table');
      let firstRow = table.find('tbody tr:first').clone();

      firstRow.find('.dynamic-checkboxes').html('');
      firstRow.find('input').val('');

      table.find('tbody').append(firstRow);
    });

    $(document).on('click', '.deleteTr', function () {
      let rowCount = $(this).closest('tbody').find('tr').length;
      if (rowCount > 1) {
        $(this).closest('tr').remove();
      } else {
        prToast('At least one row must be present.', {
          'type': 'danger'
        });
      }
    });
  });

  function checkpanFunc(panval) {
    if (panval != "") {
      var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
      if (panval.length != 10) {
        $("#pan").focus();
        $("#pan").css("background-color", "rgb(243 172 172)");
        prToast("Pan No must be 10 digit", {
          type: "danger",
        });
        return false;
      } else if (!regpan.test(panval)) {
        $("#pan").focus();
        $("#pan").css("background-color", "rgb(243 172 172)");
        prToast("Invalid Pan No.", {
          type: "danger",
        });
        return false;
      } else {
        $("body").prepend(
          '<div style="position:fixed; z-index: 9000; left:0; right:0; top:0; bottom:0;" class="loading"></div>'
        );
        $.ajax({
          type: "POST",
          url: "http://203.193.144.19/HP-VAT-CR/pancheck",
          dataType: "json",
          data: {
            panval: panval,
            _token: "OWIZYwI0UqRJ2BQaB5kJR5B62yqX2Q56jXTE71uJ",
          },
          success: function (data) {
            $(".loading").remove();
            if (data.response == 1) {
              prToast(data.msg, {
                type: "success",
              });
              $("#pan").css("background-color", "");
            } else {
              prToast(data.msg, {
                type: "danger",
              });
              $("#pan").focus();
              $("#pan").val("");
              $("#pan").css("background-color", "rgb(243 172 172)");
              return false;
            }
          },
        });
      }
    }
  }

  function getCircleOffices(district_id) {
    if (district_id != "") {
      $.ajax({
        type: "POST",
        url: "http://203.193.144.19/HP-VAT-CR/circleofficebydistrictid",
        data: {
          district_id: district_id,
          _token: "OWIZYwI0UqRJ2BQaB5kJR5B62yqX2Q56jXTE71uJ",
        },
        success: function (data) {
          $(".circle_id_cls").html(data);
        },
      });
    }
  }

  function getDistrictFunc(zoneid) {
    if (zoneid != "") {
      $.ajax({
        type: "POST",
        url: "http://203.193.144.19/HP-VAT-CR/getdistrict",
        data: {
          zoneid: zoneid,
          _token: "OWIZYwI0UqRJ2BQaB5kJR5B62yqX2Q56jXTE71uJ",
        },
        success: function (data) {
          $("#district_id").html(data);
        },
      });
    } else {
      $("#district_id").empty();
      $("#district_id").html('<option value="">--Select--</option>');
    }
  }

  jQuery(document).ready(function ($) {
    $("#constitution_of_the_business_other_par").hide();
    $("#constitution_of_the_business").change(function () {
      if ($("#constitution_of_the_business").val() == 11) {
        //For others
        $("#constitution_of_the_business_other_par").show();
      } else {
        $("#constitution_of_the_business_other_par").hide();
      }
    });
  });
  jQuery(document).ready(function ($) {
    $("#nature_of_business_other_par").hide();
    $("#nature_of_business").change(function () {
      if ($("#nature_of_business").val() == 11) {
        $("#nature_of_business_other_par").show();
      } else {
        $("#nature_of_business_other_par").hide();
      }
    });
  });
  jQuery(document).ready(function ($) {
    $("#registration_date_container").hide();
    $("#reg_under_sec_fourteen").change(function () {
      if ($("#reg_under_sec_fourteen").val() == 1) {
        $("#registration_date_container").show();
      } else {
        $("#registration_date_container").hide();
      }
    });
  });

  jQuery(document).ready(function ($) {
    $("#bank_name_cls_par").hide();
    $("#reg_under_sec_fourteen").change(function () {
      if ($("#reg_under_sec_fourteen").val() == 1) {
        $("#registration_date_container").show();
      } else {
        $("#registration_date_container").hide();
      }
    });
  });

  function checkTinNumber(tinalldata) {
    let v = tinalldata.value.trim();
    if (v != "") {
      const regex = /^02\d{9,13}$/;
      if (v.indexOf("02") != 0) {
        $(tinalldata).css("background-color", "#f3acac").focus();
        prToast("Must start with state code 02", {
          type: "danger",
        });
      } else if (!regex.test(v)) {
        $(tinalldata).css("background-color", "#f3acac").focus();
        prToast(
          "TIN length should minimum 11 digit and maximum 15 digit", {
          type: "danger",
        }
        );
      } else {
        var tindata = $(tinalldata).val();
        var tindataID = $(tinalldata).attr("id");
        if (tindata != "") {
          $.ajax({
            type: "POST",
            url: "http://203.193.144.19/HP-VAT-CR/checktinnumber",
            data: {
              tin_number: tindata,
              _token: "OWIZYwI0UqRJ2BQaB5kJR5B62yqX2Q56jXTE71uJ",
            },
            success: function (data) {
              var res = JSON.parse(data);
              console.log(res);
              if (res["output"] == 0) {
                $(tinalldata).val("");
                $(tinalldata)
                  .parents(".loopField_1")
                  .find(".details_of_surety_firm_name_cls")
                  .val("");
                $(tinalldata)
                  .parents(".loopField_1")
                  .find(".type_of_sequirity_furnished_date")
                  .val("");
                $(tinalldata)
                  .parents(".loopField_1")
                  .find(".firm_name_cls")
                  .val("");
                prToast(
                  "TIN Number not existing. Please enter correct TIN.", {
                  type: "danger",
                }
                );
                return false;
              } else if (res["output"] == 2) {
                $(tinalldata).val("");
                $(tinalldata)
                  .parents(".loopField_1")
                  .find(".details_of_surety_firm_name_cls")
                  .val("");
                $(tinalldata)
                  .parents(".loopField_1")
                  .find(".type_of_sequirity_furnished_date")
                  .val("");
                $(tinalldata)
                  .parents(".loopField_1")
                  .find(".firm_name_cls")
                  .val("");
                prToast("TIN Number already used maximum times", {
                  type: "danger",
                });
                return false;
              } else if (res["output"] == 3) {
                $(tinalldata).val("");
                $(tinalldata)
                  .parents(".loopField_1")
                  .find(".details_of_surety_firm_name_cls")
                  .val("");
                $(tinalldata)
                  .parents(".loopField_1")
                  .find(".type_of_sequirity_furnished_date")
                  .val("");
                $(tinalldata)
                  .parents(".loopField_1")
                  .find(".firm_name_cls")
                  .val("");
                prToast("Invalid TIN Number.", {
                  type: "danger",
                });
                return false;
              } else {
                $(tinalldata)
                  .parents(".loopField_1")
                  .find(".details_of_surety_firm_name_cls")
                  .val(res["owner_name"])
                  .prop("readOnly", true);
                $(tinalldata)
                  .parents(".loopField_1")
                  .find(".type_of_sequirity_furnished_date")
                  .val(res["tin_validity"]);
                $(tinalldata)
                  .parents(".loopField_1")
                  .find(".firm_name_cls")
                  .val(res["firm_name"])
                  .prop("readOnly", true);
                $(tinalldata)
                  .parents(".loopField_1")
                  .find(".other")
                  .show();
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth() + 1;
                var yyyy = today.getFullYear();
                var tinVali = res["tin_validity"];
                var today = yyyy + "-" + mm + "-" + dd;
                console.log(today);
                console.log(tinVali);
                if (tinVali > today) {
                  console.log("active");
                } else {
                  console.log("disable");
                }
                $(tinalldata)
                  .parents(".loopField_1")
                  .find(".status_of_trade_cls")
                  .val(1);
                return true;
              }
            },
          });
        }
      }
    }
  }

  function bankotheropen(thisval) {
    var bankVal = $(thisval).val();
    if (bankVal == 56) {
      $(thisval)
        .parents(".loopField_1")
        .find(".bankotherbox")
        .removeClass("collapse");
    } else {
      $(thisval)
        .parents(".loopField_1")
        .find(".bankotherbox")
        .addClass("collapse");
    }
  }

  function banktypeotheropen(thisval) {
    var bankVal = $(thisval).val();
    if (bankVal == 4) {
      $(thisval)
        .parents(".loopField_1")
        .find(".banktypeotherbox")
        .removeClass("collapse");
    } else {
      $(thisval)
        .parents(".loopField_1")
        .find(".banktypeotherbox")
        .addClass("collapse");
    }
  }

  function stateotherfunc(selectval, prefixval) {
    if (prefixval == "perma") {
      if (selectval != 14) {
        $(".perma_districtselectboxcls").html(
          '<div class="form-group"><label for="perma_proprietor_district_1">District:<span class="text-danger">*</span></label><input class="form-control proprietor_district_cls" id="perma_proprietor_district" name="perma_proprietor_district[]"> </div>'
        );
      } else {
        $(".perma_districtselectboxcls").html(
          '<div class="form-group"><label for="perma_proprietor_district_1">District:<span class="text-danger">*</span></label><select class="form-control proprietor_district_cls" id="perma_proprietor_district" name="perma_proprietor_district[]"><option value="">--Select--</option>  <option value="113">   Shimla</option>  <option value="114">   Solan</option>  <option value="115">   Kinnaur</option>  <option value="116">   Sirmour</option>  <option value="117">   Mandi</option>  <option value="118">   Baddi</option>  <option value="119">   Bilaspur</option>  <option value="120">   Hamirpur</option>  <option value="121">   Kangra</option>  <option value="122">   Nurpur RD</option>  <option value="123">   Chamba</option>  <option value="124">   Una</option>  <option value="125">   Kullu</option>  </select> </div>'
        );
      }
    } else if (prefixval == "present") {
      if (selectval != 14) {
        $(".present_districtselectboxcls").html(
          '<div class="form-group"><label for="presnt_proprietor_district_1">District:</label><input class="form-control presnt_proprietor_district_cls" id="presnt_proprietor_district" name="presnt_proprietor_district[]"></div>'
        );
      } else {
        $(".present_districtselectboxcls").html(
          '<div class="form-group"><label for="presnt_proprietor_district_1">District:</label><select class="form-control presnt_proprietor_district_cls" id="presnt_proprietor_district" name="presnt_proprietor_district[]"><option value="">--Select--</option>  <option value="113">   Shimla</option>  <option value="114">   Solan</option>  <option value="115">   Kinnaur</option>  <option value="116">   Sirmour</option>  <option value="117">   Mandi</option>  <option value="118">   Baddi</option>  <option value="119">   Bilaspur</option>  <option value="120">   Hamirpur</option>  <option value="121">   Kangra</option>  <option value="122">   Nurpur RD</option>  <option value="123">   Chamba</option>  <option value="124">   Una</option>  <option value="125">   Kullu</option>  </select></div>'
        );
      }
    } else if (prefixval == "addi_busines") {
      if (selectval != 14) {
        $(".addibusiness_districtinputboxcls").html(
          '<div class="form-group"><label for="presnt_proprietor_district_1">District:</label><input class="form-control presnt_proprietor_district_cls" id="presnt_proprietor_district" name="presnt_proprietor_district[]"></div>'
        );
      } else {
        $(".addibusiness_districtinputboxcls").html(
          '<div class="form-group"><label for="presnt_proprietor_district_1">District:</label><select class="form-control presnt_proprietor_district_cls" id="presnt_proprietor_district" name="presnt_proprietor_district[]"><option value="">--Select--</option>  <option value="113">   Shimla</option>  <option value="114">   Solan</option>  <option value="115">   Kinnaur</option>  <option value="116">   Sirmour</option>  <option value="117">   Mandi</option>  <option value="118">   Baddi</option>  <option value="119">   Bilaspur</option>  <option value="120">   Hamirpur</option>  <option value="121">   Kangra</option>  <option value="122">   Nurpur RD</option>  <option value="123">   Chamba</option>  <option value="124">   Una</option>  <option value="125">   Kullu</option>  </select></div>'
        );
      }

      addi_busines;
    }
  }

  function conditionalValidation(thisval) {
    if ($(thisval).val() == 7) {
      $(thisval)
        .parents(".loopField_1")
        .find(".type_of_sequirity_furnished_postoffice_name_amount")
        .css("background-color", "");
      $(thisval).parents(".loopField_1").find(".amtid").hide();
    } else {
      $(thisval)
        .parents(".loopField_1")
        .find(".type_of_sequirity_furnished_postoffice_name_amount")
        .css("background-color", "rgb(243 172 172)");
      $(thisval).parents(".loopField_1").find(".amtid").show();
    }
  }

  function securityOnTin(d) {
    if (d.value == 7) {
      $(d).closest(".row").find(".other, .amount").hide();
      $(d).closest(".row").find(".Tin-Of-Surety").show();
    } else {
      $(d).closest(".row").find(".other, .Tin-Of-Surety").hide();
      $(d).closest(".row").find(".amount").show();
    }
  }
  $(document).ready(function () {
    $("input[type='file']").on("change", function () {
      if (this.files[0]) {
        var sizefile = this.files[0].size;
        if (sizefile > 3 * 1000000) {
          prToast("Upload file less than 3MB.", {
            type: "danger",
          });
          this.value = "";
          $(this).val("");
        }
      }
    });

    $(".checkimagetype").change(function () {
      var ext = this.value.split(".").pop().toLowerCase();
      switch (ext) {
        case "jpg":
          break;
        case "jpeg":
          break;
        case "png":
          break;

        default:
          prToast("Sorry!!...Invalid file Type", {
            type: "danger",
          });
          this.value = "";
          $(this).next("label").text("");
      }
    });

    $(".preview-btn-enable input[type='file']").on("change", function () {
      var fileName = $(this).val().split("\\").pop();
      $(this).next("label").text(fileName);
      if (fileName) {
        $(this).next("button").prop("disabled", false);
      } else {
        $(this).next("button").prop("disabled", true);
      }
    });
    $('.preview-btn-enable [type="file"]+button').on("click", function () {
      var fileInput = $(this).prev("input[type='file']");
      if (fileInput[0].files && fileInput[0].files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          var img = $("<img>").attr("src", e.target.result).addClass("img-fluid");
          $("#previewModal .modal-body").html(img);
          $("#previewModal").modal("show");
        };
        reader.readAsDataURL(fileInput[0].files[0]);
      }
    });
  });

  function principalcommodityFunc(selval) {
    if (selval == 9999) {
      $(".principal_commodities_cls_other").removeClass("collapse");
    } else {
      $(".principal_commodities_cls_other").addClass("collapse");
      $(".principal_commodities_other").val("");
    }
  }

  $(document).on('click', '.add-col', function () {
    let dis = $(this);
    let parentCol = $(this).closest('.repeat-col');
    let clone = parentCol.clone();

    // Optional: clear input value in clone
    clone.find('input, select, textarea').val('');
    $(this)
      .removeClass('add-col btn-secondary')
      .addClass('remove-col btn-danger')
      .html('<i class="priya-minus"></i>');

    clone.find('.remove-col, .add-col') // remove any old buttons
      .removeClass('remove-col btn-danger')
      .addClass('add-col btn-secondary')
      .html('<i class="priya-plus"></i>');

    parentCol.addClass('no-repeat');

    parentCol.after(clone);
  });

  $(document).on('click', '.remove-col', function () {
    let parentCol = $(this).closest('.repeat-col');
    if ($('.repeat-col').length > 1) {
      parentCol.remove();
    } else {
      prToast('At least one column must be present.', {
        'type': 'danger'
      });
    }
  });
</script>

<?php include_once('footer.php') ?>