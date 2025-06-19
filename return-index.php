<?php include_once('header-dashboard.php') ?>
<?php
$monthArr = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
?>
<div id="SkipContent"></div>

<div class="container-fluid1 content">
    <div class="layout">
        <?php include_once('left-menu-dashboard.php') ?>
        <div class="main-right">
            <div class="right-content">
                <span class="header-buttons float-right">
                    <button type="button" class="btn btn-sm" onclick="history.back()"><i class="priya-arrow-left"></i>
                        Back</button>
                </span>
                <h1>e-Return</h1>
                <div class="form-card">
                    <form action="{{ url('/payment/return-payment') }}" method="post">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mandatory">
                                    <label>TAX Type</label>
                                    <select class="form-control pri-form" name="tax_type" id="tax_type">
                                        <option value="">--Select--</option>
                                        <option value="1">VAT</option>
                                        <option value="2">CST</option>
                                        <option value="3">PTRC</option>
                                        <option value="4">PTEC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mandatory">
                                    <label>Return Type</label>
                                    <select class="form-control pri-form" name="return_type"
                                        id="return_type" class="readonly">
                                        <option value="">--Select--</option>
                                        <option value="1">Monthly</option>
                                        <option value="2">Quarterly</option>
                                        <option value="3">Yearly</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mandatory">
                                    <label>Period</label>
                                    <select class="form-control pri-form" name="period" id="period" class="readonly">
                                        <option value="">--Select--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mandatory">
                                    <label>Year</label>
                                    <select class="form-control pri-form" name="year" id="year" class="readonly">
                                        <option value="">--Select--</option>
                                        <?php
                                        $currentYear = date('Y');
                                        for ($i = $currentYear; $i >= 2000; $i--) {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mandatory">
                                    <label>Form Type</label>
                                    <select class="form-control pri-form" name="form_type" id="form_type">
                                        <option value="">--Select--</option>
                                        <option value="FORM_231">FORM_231</option>
                                        <option value="FORM_232">FORM_232</option>
                                        <option value="FORM_233">FORM_233</option>
                                        <option value="FORM_234">FORM_234</option>
                                        <option value="FORM_235">FORM_235</option>
                                    </select>
                                    <i class="priya-spinner priya-spin fixed-right d-none"
                                        style="top: 22px;right: -10px;position: absolute;width: 20px;"></i>
                                </div>
                            </div>
                        </div>
                        <div class="header-tab" style="display: none;">
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group mandatory">
                                        <label>Dealer Type</label>
                                        <select class="form-control pri-form" name="dealer_type" id="dealer_type">
                                            <option value="">--Select--</option>
                                            <option value="1">Liquor Dealer</option>
                                            <option value="2">Petroleum Dealer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-9" style="display: none;" id="dealer_type_div">
                                    <div class="form-group mandatory">
                                        <label>Dealer sub type</label><br>
                                        <div class="row" id="liquor_dealer_sub_type" style="display: none;">
                                            <div class="col">
                                                <div class="checkbox-wrapper-19">
                                                    <input type="checkbox" name="dealer_sub_type[]" id="pll-1" value="PLL-1">
                                                    <label for="pll-1" class="check-box">
                                                        <p>PLL-1</p>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="checkbox-wrapper-19">
                                                    <input type="checkbox" name="dealer_sub_type[]" id="fl-1" value="FL-1">
                                                    <label for="fl-1" class="check-box">
                                                        <p>FL-1</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="checkbox-wrapper-19">
                                                    <input type="checkbox" name="dealer_sub_type[]" id="fl-2" value="FL-2">
                                                    <label for="fl-2" class="check-box">
                                                        <p>FL-II</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="checkbox-wrapper-19">
                                                    <input type="checkbox" name="dealer_sub_type[]" id="brl" value="BRL">
                                                    <label for="brl" class="check-box">
                                                        <p>BRL</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="checkbox-wrapper-19">
                                                    <input type="checkbox" name="dealer_sub_type[]" id="fl-3" value="FL-3">
                                                    <label for="fl-3" class="check-box">
                                                        <p>FL-III</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="checkbox-wrapper-19">
                                                    <input type="checkbox" name="dealer_sub_type[]" id="fl-4" value="FL-4">
                                                    <label for="fl-4" class="check-box">
                                                        <p>FL-IV</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="checkbox-wrapper-19">
                                                    <input type="checkbox" name="dealer_sub_type[]" id="cl-1" value="CL-1">
                                                    <label for="cl-1" class="check-box">
                                                        <p>CL-I</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="checkbox-wrapper-19">
                                                    <input type="checkbox" name="dealer_sub_type[]" id="cl-2" value="CL-2">
                                                    <label for="cl-2" class="check-box">
                                                        <p>CL-II</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="checkbox-wrapper-19">
                                                    <input type="checkbox" name="dealer_sub_type[]" id="cl-3" value="CL-3">
                                                    <label for="cl-3" class="check-box">
                                                        <p>CL-III</p>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row" id="petroleum_dealer_sub_type" style="display: none;">
                                            <div class="col">
                                                <div class="checkbox-wrapper-19">
                                                    <input type="checkbox" name="dealer_sub_type[]" id="oil_marketing_company" value="oil_marketing_company" id="oil_marketing_company">
                                                    <label for="oil_marketing_company" class="check-box">
                                                        <p>Oil Marketing Company</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="checkbox-wrapper-19">
                                                    <input type="checkbox" name="dealer_sub_type[]" id="natural_gas" value="natural_gas" id="natural_gas">
                                                    <label for="natural_gas" class="check-box">
                                                        <p>Natural Gas</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="checkbox-wrapper-19">
                                                    <input type="checkbox" name="dealer_sub_type[]" value="petroleum_retail_outlet" id="petroleum_retail_outlet">
                                                    <label for="petroleum_retail_outlet" class="check-box">
                                                        <p>Petroleum Retail Outlet</p>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name_of_dealer">Name of Dealer</label>
                                        <input type="text" class="form-control" id="name_of_dealer" name="name_of_dealer" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name_of_dealer">M.V.A.T. R.C. No.</label>
                                        <input type="text" class="form-control" id="name_of_dealer" name="name_of_dealer" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name_of_dealer">C.S.T. R.C. No.</label>
                                        <input type="text" class="form-control" id="name_of_dealer" name="name_of_dealer" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name_of_dealer">PAN No.</label>
                                        <input type="text" class="form-control" id="name_of_dealer" name="name_of_dealer" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name_of_dealer">GSTIN No.</label>
                                        <input type="text" class="form-control" id="name_of_dealer" name="name_of_dealer" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name_of_dealer">PTRC No.</label>
                                        <input type="text" class="form-control" id="name_of_dealer" name="name_of_dealer" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name_of_dealer" class="truncate-label" title="Liquor Licence No. under MAHARASHTRA PROHIBITION ACT, 1949">Liquor Licence No. under MAHARASHTRA PROHIBITION ACT, 1949 </label>
                                        <input type="text" class="form-control" id="name_of_dealer" name="name_of_dealer" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name_of_dealer" class="truncate-label" title="PAN No. of Holder/Lessor of Liquor Licence"> PAN No. of Holder/Lessor of Liquor Licence </label>
                                        <input type="text" class="form-control" id="name_of_dealer" name="name_of_dealer" required>
                                        <p class="text-danger">in case this dealer is not a holder of valid liquor license</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name_of_dealer" class="truncate-label" title="Liquor Licence Type under MAHARASHTRA PROHIBITION ACT, 1949">Liquor Licence Type under MAHARASHTRA PROHIBITION ACT, 1949 </label>
                                        <input type="text" class="form-control" id="name_of_dealer" name="name_of_dealer" required>
                                    </div>
                                </div>
                            </div>
                            <h2 class="form-sub-title">For IPS/PSI Scheme Dealers</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered">

                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Eligibility Certificate No. issued by Industry Dept.</th>
                                            <th>Identification Certificate No.</th>
                                            <th>Mode of Incentive</th>
                                            <th>Category of Eligible Unit</th>
                                            <th>Type of Unit</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="slno">1</td>
                                            <td>
                                                <input type="text" class="form-control" name="eligibility_certificate_no[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="identification_certificate_no[]">
                                            </td>
                                            <td>
                                                <select class="form-control" name="mode_of_incentive[]">
                                                    <option value="">--Select--</option>
                                                    <option value="1">Gross Basis (Before adjustment of setoff)</option>
                                                    <option value="2">Net Basis (After adjustment of setoff)</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="category_of_eligible_unit[]">
                                                    <option value="">--Select--</option>
                                                    <option value="1">Mega</option>
                                                    <option value="2">Large scale</option>
                                                    <option value="3">Small Scale</option>
                                                    <option value="4">MSME</option>
                                                    <option value="5">Ultra Mega</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="type_of_unit[]" class="form-control">
                                                    <option value="">--Select--</option>
                                                    <option value="1">Expansion</option>
                                                    <option value="2">Original</option>

                                                </select>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="deleteTr"><i class="priya-trash text-danger" style="font-size: 30px;"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="position: relative; padding-top: 10px">
                                <a href="javascript:void(0);" class="add-new" data-addnew=".e-payment-unregistered">Add More</a>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="authorised_person_name">Name of Authorised Person</label>
                                        <input type="text" class="form-control" id="authorised_person_name" name="authorised_person_name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mandatory">
                                        <label for="authorised_person_mobile">Mobile No</label>
                                        <input type="text" class="form-control" id="authorised_person_mobile" name="authorised_person_mobile">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mandatory">
                                        <label for="authorised_person_mobile">Designation</label>
                                        <input type="text" class="form-control" id="authorised_person_designation" name="authorised_person_designation">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mandatory">
                                        <label for="authorised_person_email">Email</label>
                                        <input type="text" class="form-control" id="authorised_person_email" name="authorised_person_email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="return-form-231.php" class="btn btn-sm">Submit</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#return_type').change(function() {
            const val = $(this).val();
            const period = $('#period').empty();

            if (val == 1) {
                period.append('<option value="">--Select--</option>');
                for (let m = 1; m <= 12; m++) {
                    const num = m.toString().padStart(2, '0');
                    const month = new Date(0, m - 1).toLocaleString('default', {
                        month: 'long'
                    });
                    period.append(`<option value="${num}">${month}</option>`);
                }
            } else if (val == 2) {
                const quarters = {
                    '04-06': 'APR-JUN',
                    '07-09': 'JULY-SEP',
                    '10-12': 'OCT-DEC',
                    '01-03': 'JAN-MAR'
                };
                period.append('<option value="">--Select--</option>');
                $.each(quarters, (key, value) => period.append(`<option value="${key}">${value}</option>`));
            } else if (val == 3) {
                period.append('<option selected value="04-03">APR-MAR</option>');
            } else {
                period.append('<option value="">--Select--</option>');
            }
        });
        $('#dealer_type').change(function() {
            const val = $(this).val();
            $('#dealer_type_div').show();
            if (val == 1) {
                $('#liquor_dealer_sub_type').show(1000);
                $('#petroleum_dealer_sub_type').hide(1000);
                $('#petroleum_dealer_sub_type input[type="checkbox"]').prop('checked', false);
                $('#liquor_dealer_sub_type input[type="checkbox"]').prop('checked', false);
            } else if (val == 2) {
                $('#liquor_dealer_sub_type').hide(1000);
                $('#petroleum_dealer_sub_type').show(1000);
                $('#petroleum_dealer_sub_type input[type="checkbox"]').prop('checked', false);
                $('#liquor_dealer_sub_type input[type="checkbox"]').prop('checked', false);
            } else {
                $('#dealer_type_div').hide(1000);
            }
        });

        $(document).on('change', '#form_type,#year,#period,#return_type,#tax_type', function() {
            const formType = $('#form_type').val();
            const year = $('#year').val();
            const period = $('#period').val();
            const returnType = $('#return_type').val();
            const taxType = $('#tax_type').val();

            if (formType && year && period && returnType && taxType) {
                $('.header-tab').slideDown(1000);
            } else {
                $('.header-tab').slideUp(1000);
            }
        });
    });
</script>
<?php include_once('footer.php') ?>