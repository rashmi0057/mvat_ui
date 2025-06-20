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

  .add_more_button_cls,
  i.priya-close {
    position: absolute;
    cursor: pointer;
    transition: 0.3s;
    text-align: center;
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

  .add_more_button_cls {
    background: #fff;
    color: var(--color2);
    font-size: 14px;
    line-height: 30px;
    z-index: 1;
    border-radius: 20px;
    right: 30px;
    bottom: -15px;
    padding: 0 20px;
    box-shadow: 1px 1px 5px #0006;
    overflow: hidden;
  }

  .add_more_button_cls:hover {
    text-decoration: none;
    transform: scale(1.1);
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

  .form-container {
    display: none;
    margin-top: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
  }
</style>
<div id="SkipContent"></div>

<div class="container-fluid1">
  <div class="layout">
    <?php include_once('left-menu-dashboard.php') ?>
    <div class="main-right">

      <div id="vat-list" class="right-content content">
        <div class="row mb-3">
          <div class="col text-end"> <!-- use text-end if you want it on the right -->
            <a onclick="history.back()" class="btn btn-secondary" href="statutory-payment2.php">
              ← Back
            </a>
          </div>
        </div>

        <div class="container mt-5">
          <div class="row justify-content-center">
            <div class="col-md-8 text-center">
              <h2 class="mb-3">NOTICE</h2>
              <h6 class="mb-3">Terms and Conditions for Refund</h6>
              <p>The request for refunds, if eligible, will be entertained only at the MGSTD through an offline request.
                No online refunds will be granted. Also, the transaction once done can't be cancelled.</p>
            </div>
          </div>
        </div>

        <div class="container mt-4">
          <div class="row justify-content-center">
            <h6>Select Payment Gateway:</h6>
            <div class="col-auto">
              <div class="form-check d-flex align-items-center me-4">
                <input class="form-check-input me-2" type="radio" name="option" id="option1" value="option1">
                <label class="form-check-label d-flex align-items-center" for="option1">
                  <img src="images/gras.png" class="me-2" alt="Option 1" style="height: 100px">
                  <span>Banks supported by GRAS</span>
                </label>
              </div>
            </div>

            <div class="col-auto">
              <div class="form-check d-flex align-items-center">
                <input class="form-check-input me-2" type="radio" name="option" id="option2" value="option2">
                <label class="form-check-label d-flex align-items-center" for="option2">
                  <img src="images/SBI-ePay.png" class="me-2" alt="Option 2" style="height: 100px">
                  <span>Banks supported by SBI E-Pay</span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive mt-4">
          <table class="table table-bordered text-center" id="commodity-table">
            <thead>
              <tr>
                <th rowspan="2">FORM ID</th>
                <th rowspan="2">Act Type</th>
                <th rowspan="2">Period</th>
                <th rowspan="2">Description</th>
                <th rowspan="2">Amount</th>
              </tr>


            </thead>
            <tbody>
              <tr>

                <td><input type="text" class="form-control pri-form" name="schedule[]" readOnly></td>
                <td><input type="text" class="form-control pri-form" name="select_entry[]" readOnly></td>
                <td><input type="text" class="form-control pri-form" name="sub_entry[]" readOnly></td>
                <td><input type="text" class="form-control pri-form" name="select_entry[]" readOnly></td>
                <td><input type="text" class="form-control pri-form" name="sub_entry[]" readOnly></td>

              </tr>
            </tbody>
          </table>
        </div>

        <div class="text-center mt-3">
          <button type="button" name="prevbtn3" id="prevbtn3" class="prevbtncls btn btn-info">
            &lt;&lt;Back</button>&nbsp;&nbsp;
          <a type="button" href="#" name="nextbtn3" id="nextbtn3" class="nextbtncls btn btn-primary">
            Proceed to Payment
          </a>
        </div>



      </div>




    </div>
  </div>
</div>

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
  $(document).ready(function() {
    $(".prevbtncls").click(function() {
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
    $(document).on("click", ".steps", function() {
      var selectStep = $(this).attr("id").split("_")[1];
      $("#stepdiv_" + selectStep).slideDown();
      $(".stepdivmaincls")
        .not("#stepdiv_" + selectStep)
        .hide();
      $(this).addClass("active").siblings().removeClass("active");
    });

    $(document).on("click", ".nextbtncls", function() {
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

    $('.add_more_button_cls').click(function() {
      const repeatCount = $(this).data('repeat-times') || 0
      let cnt = 0
      let mainDiv = $(this).closest('.loopmailcls')
      if (repeatCount == 0 || cnt < parseInt(repeatCount)) {
        let newEle = $(this)
          .closest('.loopmailcls')
          .find('.loopField_1:first-child')
          .clone()
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
        newEle.find('h6').each(function() {
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
      $('.removeParentdetails_of_surety').click(function() {
        let parentElement = $(this).closest('.loopField_1')
        let mainDiv = parentElement.parents('.loopmailcls').first()
        parentElement.slideUp(300, function() {
          $(this).remove()
          mainDiv.find('.loopField_1').each(function(index) {
            $(this)
              .find('h6')
              .each(function() {
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

    $('.add-new').click(function() {
      let table = $(this).closest('div').prev('.table-responsive').find('table');
      let firstRow = table.find('tbody tr:first').clone();

      firstRow.find('input').val('');

      table.find('tbody').append(firstRow);
    });

    $(document).on('click', '.deleteTr', function() {
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
          success: function(data) {
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
        success: function(data) {
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
        success: function(data) {
          $("#district_id").html(data);
        },
      });
    } else {
      $("#district_id").empty();
      $("#district_id").html('<option value="">--Select--</option>');
    }
  }

  jQuery(document).ready(function($) {
    $("#constitution_of_the_business_other_par").hide();
    $("#constitution_of_the_business").change(function() {
      if ($("#constitution_of_the_business").val() == 11) {
        //For others
        $("#constitution_of_the_business_other_par").show();
      } else {
        $("#constitution_of_the_business_other_par").hide();
      }
    });
  });
  jQuery(document).ready(function($) {
    $("#nature_of_business_other_par").hide();
    $("#nature_of_business").change(function() {
      if ($("#nature_of_business").val() == 11) {
        $("#nature_of_business_other_par").show();
      } else {
        $("#nature_of_business_other_par").hide();
      }
    });
  });
  jQuery(document).ready(function($) {
    $("#registration_date_container").hide();
    $("#reg_under_sec_fourteen").change(function() {
      if ($("#reg_under_sec_fourteen").val() == 1) {
        $("#registration_date_container").show();
      } else {
        $("#registration_date_container").hide();
      }
    });
  });

  jQuery(document).ready(function($) {
    $("#bank_name_cls_par").hide();
    $("#reg_under_sec_fourteen").change(function() {
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
            success: function(data) {
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
  $(document).ready(function() {
    $("input[type='file']").on("change", function() {
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

    $(".checkimagetype").change(function() {
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
  });

  function principalcommodityFunc(selval) {
    if (selval == 9999) {
      $(".principal_commodities_cls_other").removeClass("collapse");
    } else {
      $(".principal_commodities_cls_other").addClass("collapse");
      $(".principal_commodities_other").val("");
    }
  }

  $(document).on('click', '.add-col', function() {
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

    parentCol.after(clone);
  });

  $(document).on('click', '.remove-col', function() {
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