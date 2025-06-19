<?php include_once('header-dashboard.php') ?>
<div id="SkipContent"></div>

<div class="container-fluid1 content">
    <div class="layout">
        <?php include_once('left-menu-dashboard.php') ?>
        <div class="main-right">
            <div class="right-content">
                <h1>FORM 231</h1>
                <ul id="progressbar">
                    <li id="stepActive_1" class="steps active">Sales Annexure</li>
                    <li id="stepActive_2" class="steps">Purchase Annexure</li>
                    <li id="stepActive_3" class="steps">Sales Summary & Tax Computation</li>
                    <li id="stepActive_4" class="steps">Purchase Summary & ITC Computation</li>
                    <li id="stepActive_5" class="steps">Tax Paid Challan From Payment Summary</li>
                    <li id="stepActive_6" class="steps">CST Tax Computation on Tax Paid Challan</li>
                    <li id="stepActive_7" class="steps">VAT/CST Acknowladgement</li>
                </ul>
                <div class="stepdivmaincls" id="stepdiv_1">
                    <h2 class="form-sub-title">Annexure J1</h2>
                    <h6>Annexure of Sales under M.V.A.T. Act, 2002 (See Rule 17, 17A, 18 and 45)</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="2">Line Item</th>
                                    <th rowspan="2">Category of Sale</th>
                                    <th rowspan="2">TIN of Purchaser</th>
                                    <th rowspan="2">PAN of Purchaser</th>
                                    <th rowspan="2">Liquor Licence Type</th>
                                    <th rowspan="2">Liquor Licence Number</th>
                                    <th rowspan="2">Quantity Sold</th>
                                    <th colspan="2">Taxable Value (Net value after reducing goods return, Credit Note etc.)</th>
                                    <th rowspan="2">Value Inclusive of Tax Rs.</th>
                                    <th rowspan="2">Value of Tax Free Sales Rs.</th>
                                    <th rowspan="2">Value of Exempted Sales Rs.</th>
                                    <th rowspan="2">Labour Charges Rs.</th>
                                    <th rowspan="2">Other Charges Rs.</th>
                                    <th rowspan="2">Gross Total Rs.</th>
                                    <th rowspan="2">Actions</th>
                                </tr>
                                <tr>
                                    <th>Net Rs.</th>
                                    <th>TAX Rs.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control slno" value="1" readonly></td>
                                    <td>
                                        <select class="form-control" name="category_of_sale[]">
                                            <option value="">--Select--</option>
                                            <option value="Local Sales to TIN Holder">Local Sales to TIN Holder</option>
                                            <option value="Local Sales to non TIN Holder">Local Sales to non TIN Holder</option>
                                            <option value="OMS Sales to TIN Holder (excluding against C-Form)">OMS Sales to TIN Holder (excluding against C-Form)</option>
                                            <option value="OMS Sales to non TIN Holder">OMS Sales to non TIN Holder</option>
                                            <option value="Branch Transfer / Consignment (Local or OMS)">Branch Transfer / Consignment (Local or OMS)</option>
                                            <option value="PSI Exempted Sales">PSI Exempted Sales</option>
                                            <option value="Deduction u/s 3(2)">Deduction u/s 3(2)</option>
                                            <option value="Sales against C Form">Sales against C Form</option>
                                            <option value="Sales outside the State">Sales outside the State</option>
                                            <option value="Sales in Transit">Sales in Transit</option>
                                            <option value="Sales to Consulate">Sales to Consulate</option>
                                            <option value="Export on H Form">Export on H Form</option>
                                            <option value="Direct Export">Direct Export</option>
                                            <option value="Import Sales (High Seas)">Import Sales (High Seas)</option>
                                            <option value="Interstate Sales u/s 8(6), Form-I">Interstate Sales u/s 8(6), Form-I</option>
                                            <option value="Tax free Sale">Tax free Sale</option>
                                        </select>
                                    </td>
                                    <td><input type="number" class="form-control" name="tin_of_purchaser[]" data-model="tin_of_purchaser"></td>
                                    <td><input type="number" class="form-control" name="pan_of_purchaser[]" data-model="pan_of_purchaser"></td>
                                    <td>
                                        <select class="form-control" name="liquor_licence_type[]">
                                            <option value="">--Select--</option>
                                            <option value="PLL">PLL</option>
                                            <option value="FL-I">FL-I</option>
                                            <option value="FL-II">FL-II</option>
                                            <option value="FL-III">FL-III</option>
                                            <option value="FL-IV">FL-IV</option>
                                            <option value="BRL">BRL</option>
                                            <option value="CL-I">CL-I</option>
                                            <option value="CL-II">CL-II</option>
                                            <option value="CL-III">CL-III</option>
                                        </select>
                                    </td>
                                    <td><input type="number" class="form-control" name="liquor_licence_number[]" data-model="liquor_licence_number"></td>
                                    <td><input type="number" class="form-control" name="quantity_sold[]" data-model="quantity_sold"></td>
                                    <td><input type="number" class="form-control" name="net_taxable_amount[]" data-model="net_taxable_amount"></td>
                                    <td><input type="number" class="form-control" name="taxable_tax_amount[]" data-model="taxable_tax_amount"></td>
                                    <td><input type="number" class="form-control" name="value_of_inclusive_tax[]" data-model="value_of_inclusive_tax"></td>
                                    <td><input type="number" class="form-control" name="value_of_tax_free_sales[]" data-model="value_of_tax_free_sales"></td>
                                    <td><input type="number" class="form-control" name="value_of_exempted_sales[]" data-model="value_of_exempted_sales"></td>
                                    <td><input type="number" class="form-control" name="labour_charges[]" data-model="labour_charges"></td>
                                    <td><input type="number" class="form-control" name="other_charges[]" data-model="other_charges"></td>
                                    <td><input type="number" class="form-control" name="gross_total[]" data-model="gross_total"></td>
                                    <td>
                                        <a href="javascript:void(0);" class="deleteTr"><i class="priya-trash text-danger" style="font-size:30px"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="position: relative; padding-top: 1px">
                        <a href="javascript:void(0);" class="add-new">Add More</a>
                    </div>
                    <div class="text-center mt-3">
                        <button type="button" name="nextbtn1" id="nextbtn1" class="nextbtncls btn btn-primary" data-id="1">
                            Next&gt;&gt;
                        </button>
                    </div>
                </div>
                <div class="stepdivmaincls" id="stepdiv_2" style="display:none;">
                    <h2 class="form-sub-title">Annexure J2</h2>
                    <h6>Annexure of Sales under M.V.A.T. Act, 2002 (See Rule 17, 17A, 18 and 45)</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="2">Line Item</th>
                                    <th rowspan="2">Category of Purchase</th>
                                    <th rowspan="2">TIN of Seller(if registered)</th>
                                    <th rowspan="2">PAN of Seller(Local as well as OMS seller)</th>
                                    <th rowspan="2">Liquor Licence type of Seller (If applicable)</th>
                                    <th rowspan="2">Liquor Licence Number of Seller (If applicable )</th>
                                    <th rowspan="2">Quantity of Purchase (Kilo Litre/ Litres/ Standard Cubic Meter) </th>
                                    <th colspan="2">Taxable Value (Net value after reducing goods return, Credit Note etc.)</th>
                                    <th rowspan="2">Value of Inclusive of Tax Rs.</th>
                                    <th rowspan="2">Value of Tax Free Sales Rs.</th>
                                    <th rowspan="2">Value of Exempted Sales u/s 41 & 8Rs.</th>
                                    <th rowspan="2">Labour Charges Rs.</th>
                                    <th rowspan="2">Other Charges Rs.</th>
                                    <th rowspan="2">Gross Total Rs.</th>
                                    <th rowspan="2">Actions</th>
                                </tr>
                                <tr>
                                    <th>Net Rs.</th>
                                    <th>TAX Rs.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control slno" value="1" readonly></td>
                                    <td>
                                        <select class="form-control" name="category_of_purchase[]">
                                            <option value="">--Select--</option>
                                            <option value="Within the state purchase from TIN Holder">Within the state purchase from TIN Holder</option>
                                            <option value="Within the state purchase from non TIN Holder">Within the state purchase from non TIN Holder</option>
                                            <option value="Inter-State Branch Transfer">Inter-State Branch Transfer</option>
                                            <option value="Local Branch Transfer">Local Branch Transfer</option>
                                            <option value="Inter-State Purchases against Form-C">Inter-State Purchases against Form-C</option>
                                            <option value="Local Purchases against Form-C">Local Purchases against Form-C</option>
                                            <option value="Inter-State Purchases against Form-H">Inter-State Purchases against Form-H</option>
                                            <option value="Local Purchases against H Form">Local Purchases against H Form</option>
                                            <option value="Imports (Direct)">Imports (Direct)</option>
                                            <option value="Imports (High Seas)">Imports (High Seas)</option>
                                            <option value="Imports (High Seas) under Bond">Imports (High Seas) under Bond</option>
                                            <option value="Inter-State Purchases without Form">Inter-State Purchases without Form</option>
                                            <option value="Inter-State Purchases against Form-I">Inter-State Purchases against Form-I</option>
                                            <option value="Deduction u/s 3(2)">Deduction u/s 3(2)</option>
                                        </select>
                                    </td>
                                    <td><input type="number" class="form-control" name="tin_of_seller[]" data-model="tin_of_seller"></td>
                                    <td><input type="number" class="form-control" name="pan_of_seller[]" data-model="pan_of_seller"></td>
                                    <td>
                                        <select class="form-control" name="purchase_liquor_licence_type[]">
                                            <option value="">--Select--</option>
                                            <option value="PLL">PLL</option>
                                            <option value="FL-I">FL-I</option>
                                            <option value="FL-II">FL-II</option>
                                            <option value="FL-III">FL-III</option>
                                            <option value="FL-IV">FL-IV</option>
                                            <option value="BRL">BRL</option>
                                            <option value="CL-I">CL-I</option>
                                            <option value="CL-II">CL-II</option>
                                            <option value="CL-III">CL-III</option>
                                        </select>
                                    </td>
                                    <td><input type="number" class="form-control" name="purchase_liquor_licence_number[]" data-model="purchase_liquor_licence_number"></td>
                                    <td><input type="number" class="form-control" name="purchase_quantity_sold[]" data-model="purchase_quantity_sold"></td>
                                    <td><input type="number" class="form-control" name="purchase_net_taxable_amount[]" data-model="purchase_net_taxable_amount"></td>
                                    <td><input type="number" class="form-control" name="purchase_taxable_tax_amount[]" data-model="purchase_taxable_tax_amount"></td>
                                    <td><input type="number" class="form-control" name="purchase_value_of_inclusive_tax[]" data-model="value_of_inclusive_tax"></td>
                                    <td><input type="number" class="form-control" name="purchase_value_of_tax_free_sales[]" data-model="value_of_tax_free_sales"></td>
                                    <td><input type="number" class="form-control" name="purchase_value_of_exempted_sales[]" data-model="value_of_exempted_sales"></td>
                                    <td><input type="number" class="form-control" name="purchase_labour_charges[]" data-model="purchase_labour_charges"></td>
                                    <td><input type="number" class="form-control" name="purchase_other_charges[]" data-model="purchase_other_charges"></td>
                                    <td><input type="number" class="form-control" name="purchase_gross_total[]" data-model="purchase_gross_total"></td>
                                    <td>
                                        <a href="javascript:void(0);" class="deleteTr"><i class="priya-trash text-danger" style="font-size:30px"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="position: relative; padding-top: 1px">
                        <a href="javascript:void(0);" class="add-new">Add More</a>
                    </div>
                    <div class="text-center mt-3">
                        <button type="button" name="prevbtn2" id="prevbtn2" class="prevbtncls btn btn-info" data-id="2">
                            &lt;&lt;Prev</button>&nbsp;&nbsp;<button type="button" name="nextbtn2" id="nextbtn2"
                            class="nextbtncls btn btn-primary" data-id="2">
                            Next&gt;&gt;
                        </button>
                    </div>
                </div>
                <div class="stepdivmaincls" id="stepdiv_3" style="display:none;">
                    <h2 class="form-sub-title">Computation of net turnover of sales liable to tax</h2>
                    <div class="row form-horizontal">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-9">
                                    <label style="font-size: 14px;"><strong>Particulars</strong></label>
                                </div>
                                <div class="col-3">
                                    <label style="font-size: 14px;" class="text-center"><strong>Amount ( Rs)</strong></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="gross_turnover_sales">A) Gross turnover of sales including, taxes as well as all outward supplies under GST Act and turnover of non sales transactions like value of branch/ consignment transfers, job work charges, etc.:</label>
                                <input type="number" class="form-control valid-currency length-16" id="gross_turnover_sales" name="gross_turnover_sales" data-model="gross_turnover_sales">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="turnover_outward_supplies">B) Less:- Turnover of all outward supplies covered under GST Act including job work (whether the dealer is registered or not under the GST Act):</label>
                                <input type="number" class="form-control valid-currency length-16" id="turnover_outward_supplies" name="turnover_outward_supplies" data-model="turnover_outward_supplies">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="turnover_of_sales">C) Less:- Turnover of Sales (including taxes thereon) including inter-state Consignment Transfers and Branch Transfers Covered under Industrial Promotion Scheme (IPS):</label>
                                <input type="number" class="form-control valid-currency length-16" id="turnover_of_sales" name="turnover_of_sales" data-model="turnover_of_sales">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="turnover_considered">D) Balance :- Turnover Considered under this Form (D=A-(B+C)):</label>
                                <input type="number" class="form-control valid-currency length-16" id="turnover_considered" name="turnover_considered" data-model="turnover_considered" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="add_value_of_goods_return">E) Add:- Value of Goods return (inclusive of tax) including reduction of sale price on account of rate difference and discount claimed in earlier period but not confirmed by buyer.:</label>
                                <input type="number" class="form-control valid-currency length-16" id="add_value_of_goods_return" name="add_value_of_goods_return" data-model="add_value_of_goods_return">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_value_of_goods_return">F) Less:-Value of Goods Return ( inclusive of sales tax) including Credit Note, reduction of sale price on account of rate difference and discount Within State for Return period or earlier period:</label>
                                <input type="number" class="form-control valid-currency length-16" id="less_value_of_goods_return" name="less_value_of_goods_return" data-model="less_value_of_goods_return">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="net_tax_amount">G) Less:-Net Tax amount ( Tax included in sales shown in (c) above less Tax included in ( d +e+f ) above):</label>
                                <input type="number" class="form-control valid-currency length-16" id="net_tax_amount" name="net_tax_amount" data-model="net_tax_amount">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="total_value_not_collected">H) Less:- Total Value in which tax is not collected separately ( Inclusive of Tax with whole Amount ):</label>
                                <input type="number" class="form-control valid-currency length-16" id="total_value_not_collected" name="total_value_not_collected" data-model="total_value_not_collected">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="value_of_branch_transfers">I) Less:-Value of Branch Transfers / consignment transfers within the State if Tax is Paid by an Agent:</label>
                                <input type="number" class="form-control valid-currency length-16" id="value_of_branch_transfers" name="value_of_branch_transfers" data-model="value_of_branch_transfers">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inter_state_sales">J) Less:-Sales u/s 8(1) i.e Inter state sales including Central Sales Tax,Sales in the course of Imports, Exports and value of Branch Transfers / Consignment Transfers outside the State:</label>
                                <input type="number" class="form-control valid-currency length-16" id="inter_state_sales" name="inter_state_sales" data-model="inter_state_sales">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sales_of_tax_free_goods">K) Less:-Sales of tax-free goods specified in Schedule "A" of MVAT Act:</label>
                                <input type="number" class="form-control valid-currency length-16" id="sales_of_tax_free_goods" name="sales_of_tax_free_goods" data-model="sales_of_tax_free_goods">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sales_of_taxable_goods">L) Less:-Sales of taxable goods fully exempted u/s 41 and u/s. 8 other than sales under section 8(1) & covered in Box 5(k) "Subject to conditions that the Tin and PAN of purchaser is declared correctly":</label>
                                <input type="number" class="form-control valid-currency length-16" id="sales_of_taxable_goods" name="sales_of_taxable_goods" data-model="sales_of_taxable_goods">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="other_allowable_deductions">M) Less:-Other allowable deductions, as per Sale Annexure:</label>
                                <input type="number" class="form-control valid-currency length-16" id="other_allowable_deductions" name="other_allowable_deductions" data-model="other_allowable_deductions">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="deduction_under_section_3_2">N) Less:- Deduction under Section 3(2):</label>
                                <input type="number" class="form-control valid-currency length-16" id="deduction_under_section_3_2" name="deduction_under_section_3_2" data-model="deduction_under_section_3_2">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="balance">O) Balance: Net turnover of Sales liable to tax [O = (D+E)-(F+G+H+I+J+K+L+M+N)]:</label>
                                <input type="number" readonly class="form-control valid-currency length-16" id="balance" name="balance" data-model="balance">
                            </div>
                        </div>
                    </div>
                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">Computation of Sales Tax payable seperately under the MVAT Act</h2>
                        <div class="addMultipleFieldCls toTableView">
                            <div class="loopField_1 row">

                                <div class="col">
                                    <div class="form-group">
                                        <label>SlNo</label>
                                        <input type="text" class="form-control slno" value="1" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Schedule entry No</label>
                                        <select name="" class="form-control" name="seperately_schedule_entry_no[]">
                                            <option value="">--Select--</option>
                                            <option value="B1">B1</option>
                                            <option value="B2">B2</option>
                                            <option value="B3">B3</option>
                                            <option value="B3A">B3A</option>
                                            <option value="B3B">B3B</option>
                                            <option value="B4">B4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Rate of tax</label>
                                        <select name="" class="form-control" name="seperately_rate_of_tax[]">
                                            <option value="">--Select--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Quantity sold (Litres) </label>
                                        <input type="text" class="form-control" name="seperately_quantity_sold[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Sales Turnover (Rs.) </label>
                                        <input type="text" class="form-control" name="seperately_sales_turnover[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Surcharge (Rs.) </label>
                                        <input type="text" class="form-control" name="seperately_surcharge[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tax Amount ( Rs)</label>
                                        <input type="text" class="form-control" name="seperately_tax_amount[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toTableView tableFooter">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="Total" class="form-control" readonly>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="seperately_total_tax_amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="position: relative;padding-top: 1px; left:15px;">
                            <a href="javascript:void(0);" class="add-new-row add_more_button_cls">Add More</a>
                        </div>

                    </div>
                    <div class="row form-horizontal">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sales_tax_collected">Sales Tax collected in Excess of the Amount of Tax payable:</label>
                                <input type="number" class="form-control valid-currency length-16" id="sales_tax_collected" name="sales_tax_collected" data-model="sales_tax_collected">
                            </div>
                        </div>
                    </div>
                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">15. Computation of Sales Tax payable Inclusive under the MVAT Act (Composition levy as per Notification no. VAT/1511/CR-57/Taxation dtd.30.04.2011)</h2>
                        <div class="addMultipleFieldCls toTableView">
                            <div class="loopField_1 row">

                                <div class="col">
                                    <div class="form-group">
                                        <label>SlNo</label>
                                        <input type="text" class="form-control slno" value="1" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Schedule entry No</label>
                                        <select name="" class="form-control" name="inclusive_schedule_entry_no[]">
                                            <option value="">--Select--</option>
                                            <option value="B1">B1</option>
                                            <option value="B2">B2</option>
                                            <option value="B3">B3</option>
                                            <option value="B3A">B3A</option>
                                            <option value="B3B">B3B</option>
                                            <option value="B4">B4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Rate of tax</label>
                                        <select name="" class="form-control" name="inclusive_rate_of_tax[]">
                                            <option value="">--Select--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Quantity sold (Litres) </label>
                                        <input type="text" class="form-control" name="inclusive_quantity_sold[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Sales Turnover (Rs.) </label>
                                        <input type="text" class="form-control" name="inclusive_sales_turnover[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Surcharge (Rs.) </label>
                                        <input type="text" class="form-control" name="inclusive_surcharge[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tax Amount ( Rs)</label>
                                        <input type="text" class="form-control" name="inclusive_tax_amount[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toTableView tableFooter">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="Total" class="form-control" readonly>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="inclusive_total_tax_amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="position: relative;padding-top: 1px; left:15px;">
                            <a href="javascript:void(0);" class="add-new-row add_more_button_cls">Add More</a>
                        </div>
                    </div>
                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">16. Computation of Sales Tax payable seperately under the MVAT Act by BAR & Restaurant, Permit Room & Clubs (i.e. FL-III & FL IV license holder)</h2>
                        <div class="addMultipleFieldCls toTableView">
                            <div class="loopField_1 row">

                                <div class="col">
                                    <div class="form-group">
                                        <label>SlNo</label>
                                        <input type="text" class="form-control slno" value="1" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Schedule entry No</label>
                                        <select name="" class="form-control" name="fl_schedule_entry_no[]">
                                            <option value="">--Select--</option>
                                            <option value="VAT SALE OF LIQUOR FL III OR FL-IV OR E 3 STAR AND BELOW ">VAT SALE OF LIQUOR FL III OR FL-IV OR E 3 STAR AND BELOW </option>
                                            <option value="VAT SALE OF LIQUOR FL III OR E 4 STAR AND ABOVE">VAT SALE OF LIQUOR FL III OR E 4 STAR AND ABOVE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Rate of tax</label>
                                        <select name="" class="form-control" name="fl_rate_of_tax[]">
                                            <option value="">--Select--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Quantity sold (Litres) </label>
                                        <input type="text" class="form-control" name="fl_quantity_sold[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Sales Turnover (Rs.) </label>
                                        <input type="text" class="form-control" name="fl_sales_turnover[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Surcharge (Rs.) </label>
                                        <input type="text" class="form-control" name="fl_surcharge[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tax Amount ( Rs)</label>
                                        <input type="text" class="form-control" name="fl_tax_amount[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toTableView tableFooter">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="Total" class="form-control" readonly>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="fl_total_tax_amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="position: relative;padding-top: 1px; left:15px;">
                            <a href="javascript:void(0);" class="add-new-row add_more_button_cls">Add More</a>
                        </div>
                    </div>
                    <h2>Summary of taxable TO and tax out of Table SALES (Turnover of Sales non eligible for incentive) for IPS dealers u/s/ 41</h2>
                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">17. Computation of Sales Tax payable seperately under the MVAT Act </h2>
                        <div class="addMultipleFieldCls toTableView">
                            <div class="loopField_1 row">

                                <div class="col">
                                    <div class="form-group">
                                        <label>SlNo</label>
                                        <input type="text" class="form-control slno" value="1" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Schedule entry No</label>
                                        <select name="" class="form-control" name="incentive_schedule_entry_no[]">
                                            <option value="">--Select--</option>
                                            <option value="B3A">B3A</option>
                                            <option value="B3B">B3B</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Rate of tax</label>
                                        <select name="" class="form-control" name="incentive_rate_of_tax[]">
                                            <option value="">--Select--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Quantity sold (Litres) </label>
                                        <input type="text" class="form-control" name="incentive_quantity_sold[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Sales Turnover (Rs.) </label>
                                        <input type="text" class="form-control" name="incentive_sales_turnover[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Surcharge (Rs.) </label>
                                        <input type="text" class="form-control" name="incentive_surcharge[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tax Amount ( Rs)</label>
                                        <input type="text" class="form-control" name="incentive_tax_amount[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toTableView tableFooter">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="Total" class="form-control" readonly>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="incentive_total_tax_amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="position: relative;padding-top: 1px; left:15px;">
                            <a href="javascript:void(0);" class="add-new-row add_more_button_cls">Add More</a>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="button" name="prevbtn3" id="prevbtn3" class="prevbtncls btn btn-info" data-id="3">
                            &lt;&lt;Prev</button>&nbsp;&nbsp;<button type="button" name="nextbtn3" id="nextbtn3"
                            class="nextbtncls btn btn-primary" data-id="3">
                            Next&gt;&gt;
                        </button>
                    </div>
                </div>
                <div class="stepdivmaincls" id="stepdiv_4" style="display:none;">
                    <h2 class="form-sub-title">18. Computation of Purchases Eligible for Set-off</h2>
                    <div class="row form-horizontal">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-9">
                                    <label style="font-size: 14px;"><strong>Particulars</strong></label>
                                </div>
                                <div class="col-3">
                                    <label style="font-size: 14px;" class="text-center"><strong>Amount ( Rs)</strong></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="total_turnover_of_purchases">A) Total turnover of Purchases including taxes, turnover of all intward supplies covered under GST Act, value of Branch Transfers/ Consignment Transfers received and Labour/ job work charges:</label>
                                <input type="number" class="form-control valid-currency length-16" id="total_turnover_of_purchases" name="total_turnover_of_purchases" data-model="total_turnover_of_purchases">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="turnover_of_intward_supplies">B) Less:- Turnover of all intward supplies covered under GST Act (whether the dealer is registered or not under the GST Act):</label>
                                <input type="number" class="form-control valid-currency length-16" id="turnover_of_intward_supplies" name="turnover_of_intward_supplies" data-model="turnover_of_intward_supplies">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="industrial_turnover_of_purchases">C) Less:- Turnover of Purchases Covered under Industrial Promotion Scheme (IPS):</label>
                                <input type="number" class="form-control valid-currency length-16" id="industrial_turnover_of_purchases" name="industrial_turnover_of_purchases" data-model="industrial_turnover_of_purchases">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="turnover_of_purchases_considered">D) Balance:- Turnover of Purchases considered in this Form (d=a-b+c):</label>
                                <input type="number" class="form-control valid-currency length-16" id="turnover_of_purchases_considered" name="turnover_of_purchases_considered" data-model="turnover_of_purchases_considered" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="turnover_of_goods_return">E) Less:-Value of goods return (inclusive of tax) reduction of Purchase price including rate difference and discount:</label>
                                <input type="number" class="form-control valid-currency length-16" id="turnover_of_goods_return" name="turnover_of_goods_return" data-model="turnover_of_goods_return" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="direct_imports">F) Less:-Imports (Direct imports):</label>
                                <input type="number" class="form-control valid-currency length-16" id="direct_imports" name="direct_imports" data-model="direct_imports" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="high_seas_import">G) Less:-Imports (High seas purchases):</label>
                                <input type="number" class="form-control valid-currency length-16" id="high_seas_import" name="high_seas_import" data-model="high_seas_import" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="interstate_purchases_of_taxable">H) Less:- Interstate purchases of taxable goods against certificate in Form'H':</label>
                                <input type="number" class="form-control valid-currency length-16" id="interstate_purchases_of_taxable" name="interstate_purchases_of_taxable" data-model="interstate_purchases_of_taxable" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="local_purchases_of_taxable">I) Less:- Local purchases of taxable goods against certificate in Form'H':</label>
                                <input type="number" class="form-control valid-currency length-16" id="local_purchases_of_taxable" name="local_purchases_of_taxable" data-model="local_purchases_of_taxable" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="interstate_purchases_against_certificate">J) Less:-Inter-State purchases (Excluding purchases against any certificate and declaration in form C,H,F,I):</label>
                                <input type="number" class="form-control valid-currency length-16" id="interstate_purchases_against_certificate" name="interstate_purchases_against_certificate" data-model="interstate_purchases_against_certificate" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="interstate_branch_transfer">K) Less:-Inter-State branch / consignment transfers received:</label>
                                <input type="number" class="form-control valid-currency length-16" id="interstate_branch_transfer" name="interstate_branch_transfer" data-model="interstate_branch_transfer" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="interstate_purchases_against_declaration_c">L) Less:- Interstate purchases of taxable goods against declaration in Form'C':</label>
                                <input type="number" class="form-control valid-currency length-16" id="interstate_purchases_against_declaration_c" name="interstate_purchases_against_declaration_c" data-model="interstate_purchases_against_declaration_c" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="local_purchases_against_declaration">M) Less:- Local purchases of taxable goods against declaration in Form'C':</label>
                                <input type="number" class="form-control valid-currency length-16" id="local_purchases_against_declaration" name="local_purchases_against_declaration" data-model="local_purchases_against_declaration" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="within_state_branch_transfers">N) Less:- Within the State Branch Transfers /Consignment Transfers received where tax is to be paid by an Agent:</label>
                                <input type="number" class="form-control valid-currency length-16" id="within_state_branch_transfers" name="within_state_branch_transfers" data-model="within_state_branch_transfers" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="within_state_purchases">O) Less:-Within the State purchases of taxable goods from un-registered dealers:</label>
                                <input type="number" class="form-control valid-currency length-16" id="within_state_purchases" name="within_state_purchases" data-model="within_state_purchases" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="interstate_purchases_against_declaration_i">P) Less:- Interstate purchases of taxable goods against declaration in Form'I':</label>
                                <input type="number" class="form-control valid-currency length-16" id="interstate_purchases_against_declaration_i" name="interstate_purchases_against_declaration_i" data-model="interstate_purchases_against_declaration_i" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="within_state_exempted_purchases">Q) Less:-Within the State purchases of taxable goods which are fully exempted from tax u/s 41 and u/s 8 but not covered under section 8(1):</label>
                                <input type="number" class="form-control valid-currency length-16" id="within_state_exempted_purchases" name="within_state_exempted_purchases" data-model="within_state_exempted_purchases" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="within_state_tax_free_purchases">R) Less:-Within the State purchases of tax-free goods specified in Schedule "A":</label>
                                <input type="number" class="form-control valid-currency length-16" id="within_state_tax_free_purchases" name="within_state_tax_free_purchases" data-model="within_state_tax_free_purchases" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="other_allowable_deductions">S) Less:-Other allowable deductions, if any:</label>
                                <input type="number" class="form-control valid-currency length-16" id="other_allowable_deductions" name="other_allowable_deductions" data-model="other_allowable_deductions" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="within_state_registered_dealers">T) Less:-Within the State purchases of taxable goods from registered dealers where tax seperately not collected (Inclusive of tax):</label>
                                <input type="number" class="form-control valid-currency length-16" id="within_state_registered_dealers" name="within_state_registered_dealers" data-model="within_state_registered_dealers" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="comp_deduction_under_section_3_2">U) Less:- Deduction under Section 3(2):</label>
                                <input type="number" class="form-control valid-currency length-16" id="comp_deduction_under_section_3_2" name="comp_deduction_under_section_3_2" data-model="comp_deduction_under_section_3_2" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="balance_within_state_purchases">V) Balance: Within the State purchases of taxable goods from registered dealers eligible for set-off [D-(E+F+G+H+I+J=K+L+M+N+O+P+Q+R+S+T+U+V)]:</label>
                                <input type="number" class="form-control valid-currency length-16" id="balance_within_state_purchases" name="balance_within_state_purchases" data-model="balance_within_state_purchases" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">19. Tax Rate wise breakup of within state purchases from registered dealers eligible for set-off as per box 18(x)</h2>
                        <div class="addMultipleFieldCls toTableView">
                            <div class="loopField_1 row">

                                <div class="col">
                                    <div class="form-group">
                                        <label>SlNo</label>
                                        <input type="text" class="form-control slno" value="1" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Schedule entry No</label>
                                        <select name="" class="form-control" name="incentive_schedule_entry_no[]">
                                            <option value="">--Select--</option>
                                            <option value="B3A">B3A</option>
                                            <option value="B3B">B3B</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Rate of tax</label>
                                        <select name="" class="form-control" name="incentive_rate_of_tax[]">
                                            <option value="">--Select--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Quantity Purchase (Litre) </label>
                                        <input type="text" class="form-control" name="incentive_quantity_purchase[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Net Turnover of Purchase (Rs.)</label>
                                        <input type="text" class="form-control" name="incentive_net_turnover_purchase[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tax Amount ( Rs)</label>
                                        <input type="text" class="form-control" name="incentive_tax_amount[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toTableView tableFooter">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="Total" class="form-control" readonly>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="incentive_total_tax_amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="position: relative;padding-top: 1px; left:15px;">
                            <a href="javascript:void(0);" class="add-new-row add_more_button_cls">Add More</a>
                        </div>
                    </div>
                    <div class="row form-horizontal">
                        <!-- Header -->
                        <h2 class="form-sub-title">Computation of Purchase Tax payable on the purchases effected during this period or previous periods</h2>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label><strong>Particulars</strong></label>
                                </div>
                                <div class="col-md-3 text-center">
                                    <label><strong>Quantity</strong></label>
                                </div>
                                <div class="col-md-3 text-center">
                                    <label><strong>Amount (Rs)</strong></label>
                                </div>
                            </div>
                        </div>
                        <!-- a -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="a_amount">a) Imports (Direct imports)</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="a_quantity" name="a_quantity">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="a_amount" name="a_amount">
                                </div>
                            </div>
                        </div>

                        <!-- b -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="b_amount">b) Imports (High seas purchases)</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="b_quantity" name="b_quantity">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="b_amount" name="b_amount">
                                </div>
                            </div>
                        </div>

                        <!-- c -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="c_amount">c) Interstate purchases of taxable goods against certificate in Form 'H'</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="c_quantity" name="c_quantity">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="c_amount" name="c_amount">
                                </div>
                            </div>
                        </div>

                        <!-- d -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="d_amount">d) Local purchases of taxable goods against certificate in Form 'H'</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="d_quantity" name="d_quantity">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="d_amount" name="d_amount">
                                </div>
                            </div>
                        </div>

                        <!-- e -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="e_amount">e) Inter-State purchases (Excluding purchases against any certificate and declaration in form C,H,F,I)</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="e_quantity" name="e_quantity">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="e_amount" name="e_amount">
                                </div>
                            </div>
                        </div>

                        <!-- f -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="f_amount">f) Inter-State branch / consignment transfers received</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="f_quantity" name="f_quantity">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="f_amount" name="f_amount">
                                </div>
                            </div>
                        </div>

                        <!-- g -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="g_amount">g) Interstate purchases of taxable goods against declaration in Form 'C'</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="g_quantity" name="g_quantity">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="g_amount" name="g_amount">
                                </div>
                            </div>
                        </div>

                        <!-- h -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="h_amount">h) Local purchases of taxable goods against declaration in Form 'C'</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="h_quantity" name="h_quantity">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="h_amount" name="h_amount">
                                </div>
                            </div>
                        </div>

                        <!-- i -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="i_amount">i) Within the State Branch Transfers /Consignment Transfers received where tax is to be paid by an Agent</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="i_quantity" name="i_quantity">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="i_amount" name="i_amount">
                                </div>
                            </div>
                        </div>

                        <!-- j -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="j_amount">j) Within the State purchases of taxable goods from un-registered dealers</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="j_quantity" name="j_quantity">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="j_amount" name="j_amount">
                                </div>
                            </div>
                        </div>

                        <!-- k -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="k_amount">k) Within the State purchases of taxable goods which are fully exempted from tax u/s 41 and u/s 8 but not covered under section 8(1)</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="k_quantity" name="k_quantity">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="k_amount" name="k_amount">
                                </div>
                            </div>
                        </div>

                        <!-- l -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="l_amount">l) Within the State purchases of tax-free goods specified in Schedule "A"</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="l_quantity" name="l_quantity">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="l_amount" name="l_amount">
                                </div>
                            </div>
                        </div>

                        <!-- Total -->
                        <div class="col-md-12 mt-3">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="total_amount"><strong>Total (a+b+c+d+e+f+g+h+i+j+k+l)</strong></label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="total_quantity" name="total_quantity" readonly>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="total_amount" name="total_amount" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-horizontal">
                        <h2 class="form-sub-title">Computation of set-off claimed in this return</h2>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label><strong>Particulars</strong></label>
                                </div>
                                <div class="col-md-3 text-center">
                                    <label><strong>Purchases Value(Rs)</strong></label>
                                </div>
                                <div class="col-md-3 text-center">
                                    <label><strong>Amount (Rs)</strong></label>
                                </div>
                            </div>
                        </div>
                        <!-- a -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-6">a) Within the State purchases from registered dealers (eligible for set-off)</label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="a_value">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="a_amount">
                                </div>
                            </div>
                        </div>

                        <!-- b -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-6">b) Set-off denial due to RCC</label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="b_value">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="b_amount">
                                </div>
                            </div>
                        </div>

                        <!-- c -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-6">c) Set-off reduction u/r 52A</label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="c_value">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="c_amount">
                                </div>
                            </div>
                        </div>

                        <!-- d -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-6">d) Set-off reduction u/r 52B</label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="d_value">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="d_amount">
                                </div>
                            </div>
                        </div>

                        <!-- e -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-6">e) Set-off reduction u/r 53</label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="e_value">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="e_amount">
                                </div>
                            </div>
                        </div>

                        <!-- f -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-6">f) Set-off denial u/r 54</label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="f_value">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="f_amount">
                                </div>
                            </div>
                        </div>

                        <!-- g -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-6">g) State purchases under MVAT not claimed</label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="g_value">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="g_amount">
                                </div>
                            </div>
                        </div>

                        <!-- h: Calculated Field -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-6"><strong>Set-off available for the period [a - (b + c + d + e + f + g)]</strong></label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="setoff_purchase_value" id="setoff_purchase_value" readonly>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="setoff_available" id="setoff_available" readonly>
                                </div>
                            </div>
                        </div>

                        <!-- i -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-6">h) Allowance of Set-off not claimed on goods return</label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="h_value">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="h_amount">
                                </div>
                            </div>
                        </div>

                        <!-- j: Final Total -->
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-6"><strong>Total Set-off Admissible for the period (i + h)</strong></label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="total_setoff_value" id="total_setoff_value" readonly>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="total_setoff" id="total_setoff" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="button" name="prevbtn4" id="prevbtn4" class="prevbtncls btn btn-info" data-id="4">
                            &lt;&lt;Prev</button>&nbsp;&nbsp;<button type="button" name="nextbtn4" id="nextbtn4"
                            class="nextbtncls btn btn-primary" data-id="4">
                            Next&gt;&gt;
                        </button>
                    </div>
                </div>
                <div class="stepdivmaincls" id="stepdiv_5" style="display:none;">
                    <h2 class="form-sub-title">21. Computation for Tax payable along with return</h2>
                    <h6>A. Aggregate of credit available for the period covered under this return</h6>
                    <div class="row form-horizontal">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="total_setoff">A) Set off admissible as per Box 20 (l)</label>
                                <input type="number" class="form-control" name="total_setoff" id="total_setoff">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="excess_credit_brought_forward">B) Excess credit brought forward from previous return</label>
                                <input type="number" class="form-control" name="excess_credit_brought_forward" id="excess_credit_brought_forward">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="amount_already_paid">C) Amount already paid (As per Box 21 E )</label>
                                <input type="number" class="form-control" name="amount_already_paid" id="amount_already_paid">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="refund_adjustment_order_no">D) Refund adjustment order No. (As per Box 21 F)</label>
                                <input type="number" class="form-control" name="refund_adjustment_order_no" id="refund_adjustment_order_no">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="total_available_credit">E) Total available credit (a+b+c+d)</label>
                                <input type="number" class="form-control" name="total_available_credit" id="total_available_credit">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="total_available_credit">E) Total available credit (a+b+c+d)</label>
                                <input type="number" class="form-control" name="total_available_credit" id="total_available_credit">
                            </div>
                        </div>
                    </div>
                    <h2 class="form-sub-title">B Total tax payable and adjustment of CST payable against available credit</h2>
                    <div class="row form-horizontal">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sales_tax_payable">A) Sales Tax payable as per box 13 + as per box 15 + as per box 16 + as per box 17</label>
                                <input type="number" class="form-control" name="sales_tax_payable" id="sales_tax_payable">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cst_adjustment">B) Adjustment on account of CST payable as per return for this period</label>
                                <input type="number" class="form-control" name="cst_adjustment" id="cst_adjustment">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="excess_tax_collected">C) Amount of Tax Collected in Excess of the amount of Sales Tax payable if any ( as per Box 14)</label>
                                <input type="number" class="form-control" name="excess_tax_collected" id="excess_tax_collected">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="interest_payable">D) Interest Payable</label>
                                <input type="number" class="form-control" name="interest_payable" id="interest_payable">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="late_fee_payable">E) Late Fee Payable</label>
                                <input type="number" class="form-control" name="late_fee_payable" id="late_fee_payable">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="reversal_setoff">F) Add: Reversal on account of set-off claimed Excess in earlier return</label>
                                <input type="number" class="form-control" name="reversal_setoff" id="reversal_setoff">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="reversal_setoff">G) Reduction u/r 52A, 53 and denial u/r 54 out of above (i)</label>
                                <input type="number" class="form-control" name="reversal_setoff" id="reversal_setoff">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="excess_credit">H) Balance: Excess credit =[21A(e)-(21B(a)+21B(b)+21B(c)+ 21B(d)+ 21B(e)+ 21 B(f)+ 21 B(g))]</label>
                                <input type="number" class="form-control" name="excess_credit" id="excess_credit">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="balance_amount_payable">I) Balance Amount payable= [ 21B(a)+21B(b)+21B(c)+ 21B(d)+21B(e)+21 B(f)+ 21B(g) -21A(e)]</label>
                                <input type="number" class="form-control" name="balance_amount_payable" id="balance_amount_payable">
                            </div>
                        </div>
                    </div>
                    <h2 class="form-sub-title">Utilisation of Excess Credit as per box 13B(i)</h2>
                    <div class="row form-horizontal">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="excess_credit_carry_forward">Excess credit carried forward to subsequent tax period</label>
                                <input type="number" class="form-control" name="excess_credit_carry_forward" id="excess_credit_carry_forward">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="excess_credit_refund">Excess credit claimed as refund in this return (21 B(h)- 21 C(a))</label>
                                <input type="number" class="form-control" name="excess_credit_refund" id="excess_credit_refund">
                            </div>
                        </div>
                    </div>
                    <h2 class="form-sub-title">D. Tax payable with return-Cum-Chalan</h2>
                    <div class="row form-horizontal">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="total_amount_payable">Total Amount payable as per Box 21B(i)</label>
                                <input type="number" class="form-control" name="total_amount_payable" id="total_amount_payable">
                            </div>
                        </div>
                    </div>
                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">E. Details of Amount Paid with this return and /or Amount already Paid</h2>
                        <div class="addMultipleFieldCls toTableView">
                            <div class="loopField_1 row">

                                <div class="col">
                                    <div class="form-group">
                                        <label>SlNo</label>
                                        <input type="text" class="form-control slno" value="1" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Chalan CIN No</label>
                                        <input type="text" class="form-control" name="chalan_cin_no[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Amount (Rs)</label>
                                        <input type="text" class="form-control" name="amount[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Payment date </label>
                                        <input type="text" class="form-control" name="payment_date[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Name of the Bank </label>
                                        <input type="text" class="form-control" name="bank_name[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Branch Name </label>
                                        <input type="text" class="form-control" name="branch_name[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toTableView tableFooter">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="Total" class="form-control" readonly>
                                </div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="fl_total_tax_amount" readonly>
                                    </div>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                            </div>
                        </div>
                        <div style="position: relative;padding-top: 1px; left:15px;">
                            <a href="javascript:void(0);" class="add-new-row add_more_button_cls">Add More</a>
                        </div>
                    </div>

                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">F. Details of RAO</h2>
                        <div class="addMultipleFieldCls toTableView">
                            <div class="loopField_1 row">

                                <div class="col">
                                    <div class="form-group">
                                        <label>SlNo</label>
                                        <input type="text" class="form-control slno" value="1" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>RAO No</label>
                                        <input type="text" class="form-control" name="rao_no[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Amount Adjusted( Rs)</label>
                                        <input type="text" class="form-control" name="amount_adjusted[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Date of RAO </label>
                                        <input type="text" class="form-control" name="rao_date[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toTableView tableFooter">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="Total" class="form-control" readonly>
                                </div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="fl_total_tax_amount" readonly>
                                    </div>
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                        <div style="position: relative;padding-top: 1px; left:15px;">
                            <a href="javascript:void(0);" class="add-new-row add_more_button_cls">Add More</a>
                        </div>
                    </div>
                    <h2 class="form-sub-title">G. The Statement contained in Box 1 to 13 are true and correct to the best of my knowledge and belief. </h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mandatory">
                                <label for="date_of_filling_return">Date of Filing of Return</label>
                                <input type="date" class="form-control" name="date_of_filling_return" id="date_of_filling_return">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mandatory">
                                <label for="place">Place</label>
                                <input type="text" class="form-control" name="place" id="place">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mandatory">
                                <label for="name_of_authorised_person">Name Of Authorised Person</label>
                                <input type="text" class="form-control" name="name_of_authorised_person" id="name_of_authorised_person">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mandatory">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" name="designation" id="designation">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mandatory">
                                <label for="remark">Remarks</label>
                                <input type="text" class="form-control" name="remark" id="remark">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mandatory">
                                <label for="mobile">Mobile</label>
                                <input type="number" class="form-control" name="mobile" id="mobile">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mandatory">
                                <label for="email_id">Email ID</label>
                                <input type="email" class="form-control" name="email_id" id="email_id">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="button" name="prevbtn5" id="prevbtn5" class="prevbtncls btn btn-info" data-id="5">
                            &lt;&lt;Prev</button>&nbsp;&nbsp;<button type="button" name="nextbtn5" id="nextbtn5"
                            class="nextbtncls btn btn-primary" data-id="5">
                            Next&gt;&gt;
                        </button>
                    </div>
                </div>
                <div class="stepdivmaincls" id="stepdiv_6" style="display:none;">
                    <h2 class="form-sub-title">Return under rule 5 of the Central Sales Tax (Bombay) Rules, 1957.</h2>
                    <div class="row form-horizontal">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">1) Gross Turnover of Sales i.e Inter state sales including Central Sales Tax,Sales in the course of Imports, Exports and value of Branch Transfers / Consignment Transfers outside the State:</label>
                                <input type="number" name="gross_turnover_of_sales" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">1A) Less:-Turnover of Sales under VAT within the State alongwith turnover of all outward supplies covered under GST Act (whether the dealer is registered or not under the GST Act):</label>
                                <input type="number" name="turnover_of_sales_under_vat" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">1B) Less:-Turnover of Sales of Goods outside the State:</label>
                                <input type="number" name="turnover_of_sales_outside_state" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">1C) Less:- Value (inclusive of sales tax) of Goods Return u/s 8A(1)(b):</label>
                                <input type="number" name="goods_return_us_8a1b" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">1D) Less:- Credit Note , price on account of rate difference and discount:</label>
                                <input type="number" name="credit_note" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">1E) Less:- Sales of the goods in the course of export out of India (Direct Export):</label>
                                <input type="number" name="sales_direct_export_out_india" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">1F) Less:- Sales of the goods in the course of export out of India (Export Against Form-H):</label>
                                <input type="number" name="sales_export_out_india_against_form_h" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">1G) Less:-Sales of the goods in the course of import into India:</label>
                                <input type="number" name="sales_import_into_india" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">1H) Less:- Value of goods transferred u/s 6A (1) of C.S.T. Act 1956:</label>
                                <input type="number" name="value_of_goods_us_6a1" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">1I) Less:- Turnover of interstate sales u/s 6(3) of C.S.T. Act 1956:</label>
                                <input type="number" name="turnover_interstate_sales_us_63" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">1J) Less:- Turnover of sales of goods fully exempted from tax under section 8(5) read with 8(4) of MVAT ACT 2002:</label>
                                <input type="number" name="turnover_undersection_85" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">2) Balance :- Inter-State sales on which tax is leviable in Maharashtra State ( 1- 1A-1B-1C-1D-1E-1F-1G-1H-1I-1J):</label>
                                <input type="number" name="interstate_leviable_tax" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">2A) Less:- Cost of freight , delivery or installation , if separately charged:</label>
                                <input type="number" name="cost_of_freight" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">2B) Less:-Turnover of interstate sales on which no tax is payable:</label>
                                <input type="number" name="interstate_sales_no_tax_payable" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">2C) Less:-Turnover of interstate sales u/s 6(2):</label>
                                <input type="number" name="turnover_interstate_sales_us_62" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">2D) Less:-Turnover of interstate sales u/s 8(6):</label>
                                <input type="number" name="turnover_interstate_sales_us_86" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">3) Balance :-Total Taxable interstate sales ( 2- 2A-2B-2C-2D):</label>
                                <input type="number" name="total_taxable_interstate_sales" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">3A) Less:- Total Value in which tax is not collected seperatly ( Inclusive of Tax with whole Amount ):</label>
                                <input type="number" name="total_tax_not_collected" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">3B) Less:-Deduction u/s 8A(1)(a) :</label>
                                <input type="number" name="deduction_us_8a1a" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">4) Net Taxable interstate sales ( 3- 3A-3B) :</label>
                                <input type="number" name="net_taxable_interstate" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">5. A. Sales Taxable U/s. 8 (1)</h2>
                        <div class="addMultipleFieldCls toTableView">
                            <div class="loopField_1 row">

                                <div class="col">
                                    <div class="form-group">
                                        <label>SlNo</label>
                                        <input type="text" class="form-control slno" value="1" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Schedule entry No</label>
                                        <select name="" class="form-control" name="us81_schedule_entry_no[]">
                                            <option value="">--Select--</option>
                                            <option value="B1">B1</option>
                                            <option value="B2">B2</option>
                                            <option value="B3">B3</option>
                                            <option value="B3A">B3A</option>
                                            <option value="B3B">B3B</option>
                                            <option value="B4">B4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Rate of tax</label>
                                        <select name="" class="form-control" name="us81_rate_of_tax[]">
                                            <option value="">--Select--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Quantity sold (Litres) </label>
                                        <input type="text" class="form-control" name="us81_quantity_sold[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Sales Turnover (Rs.) </label>
                                        <input type="text" class="form-control" name="us81_sales_turnover[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Surcharge (Rs.) </label>
                                        <input type="text" class="form-control" name="us81_surcharge[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tax Amount ( Rs)</label>
                                        <input type="text" class="form-control" name="us81_tax_amount[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toTableView tableFooter">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="Total" class="form-control" readonly>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="us81_total_tax_amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="position: relative;padding-top: 1px; left:15px;">
                            <a href="javascript:void(0);" class="add-new-row add_more_button_cls">Add More</a>
                        </div>

                    </div>
                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">5. B. Sales Taxable U/s. 8 (2) {Tax Collected Separetaly}</h2>
                        <div class="addMultipleFieldCls toTableView">
                            <div class="loopField_1 row">

                                <div class="col">
                                    <div class="form-group">
                                        <label>SlNo</label>
                                        <input type="text" class="form-control slno" value="1" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Schedule entry No</label>
                                        <select name="" class="form-control" name="us82_separetaly_schedule_entry_no[]">
                                            <option value="">--Select--</option>
                                            <option value="B1">B1</option>
                                            <option value="B2">B2</option>
                                            <option value="B3">B3</option>
                                            <option value="B3A">B3A</option>
                                            <option value="B3B">B3B</option>
                                            <option value="B4">B4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Rate of tax</label>
                                        <select name="" class="form-control" name="us82_separetaly_rate_of_tax[]">
                                            <option value="">--Select--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Quantity sold (Litres) </label>
                                        <input type="text" class="form-control" name="us82_separetaly_quantity_sold[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Sales Turnover (Rs.) </label>
                                        <input type="text" class="form-control" name="us82_separetaly_sales_turnover[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Surcharge (Rs.) </label>
                                        <input type="text" class="form-control" name="us82_separetaly_surcharge[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tax Amount ( Rs)</label>
                                        <input type="text" class="form-control" name="us82_separetaly_tax_amount[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toTableView tableFooter">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="Total" class="form-control" readonly>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="us81_total_tax_amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="position: relative;padding-top: 1px; left:15px;">
                            <a href="javascript:void(0);" class="add-new-row add_more_button_cls">Add More</a>
                        </div>

                    </div>
                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">5. C. Sales Taxable U/s. 8 (2) {Inclusive of Tax}</h2>
                        <div class="addMultipleFieldCls toTableView">
                            <div class="loopField_1 row">

                                <div class="col">
                                    <div class="form-group">
                                        <label>SlNo</label>
                                        <input type="text" class="form-control slno" value="1" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Schedule entry No</label>
                                        <select name="" class="form-control" name="us82_inclusive_schedule_entry_no[]">
                                            <option value="">--Select--</option>
                                            <option value="B1">B1</option>
                                            <option value="B2">B2</option>
                                            <option value="B3">B3</option>
                                            <option value="B3A">B3A</option>
                                            <option value="B3B">B3B</option>
                                            <option value="B4">B4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Rate of tax</label>
                                        <select name="" class="form-control" name="us82_inclusive_rate_of_tax[]">
                                            <option value="">--Select--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Quantity sold (Litres) </label>
                                        <input type="text" class="form-control" name="us82_inclusive_quantity_sold[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Sales Turnover (Rs.) </label>
                                        <input type="text" class="form-control" name="us82_inclusive_sales_turnover[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Surcharge (Rs.) </label>
                                        <input type="text" class="form-control" name="us82_inclusive_surcharge[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tax Amount ( Rs)</label>
                                        <input type="text" class="form-control" name="us82_inclusive_tax_amount[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toTableView tableFooter">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="Total" class="form-control" readonly>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="us81_total_tax_amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="position: relative;padding-top: 1px; left:15px;">
                            <a href="javascript:void(0);" class="add-new-row add_more_button_cls">Add More</a>
                        </div>

                    </div>
                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">5 D. Sales Taxable U/s. 8 (5)</h2>
                        <div class="addMultipleFieldCls toTableView">
                            <div class="loopField_1 row">

                                <div class="col">
                                    <div class="form-group">
                                        <label>SlNo</label>
                                        <input type="text" class="form-control slno" value="1" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Schedule entry No</label>
                                        <select name="" class="form-control" name="us85_schedule_entry_no[]">
                                            <option value="">--Select--</option>
                                            <option value="B1">B1</option>
                                            <option value="B2">B2</option>
                                            <option value="B3">B3</option>
                                            <option value="B3A">B3A</option>
                                            <option value="B3B">B3B</option>
                                            <option value="B4">B4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Rate of tax</label>
                                        <select name="" class="form-control" name="us85_rate_of_tax[]">
                                            <option value="">--Select--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Quantity sold (Litres) </label>
                                        <input type="text" class="form-control" name="us85_quantity_sold[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Sales Turnover (Rs.) </label>
                                        <input type="text" class="form-control" name="us85_sales_turnover[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Surcharge (Rs.) </label>
                                        <input type="text" class="form-control" name="us85_surcharge[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tax Amount ( Rs)</label>
                                        <input type="text" class="form-control" name="us85_tax_amount[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toTableView tableFooter">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="Total" class="form-control" readonly>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="us81_total_tax_amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="position: relative;padding-top: 1px; left:15px;">
                            <a href="javascript:void(0);" class="add-new-row add_more_button_cls">Add More</a>
                        </div>

                    </div>
                    <div class="row form-horizontal">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>6) Tax collected in excess of the tax payable (3B - total tax 4(A+B+D)) if positive</label>
                                <input type="number" name="excess_tax_collected_of_payable" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>7) Total Amount of C.S.T Payable (Total tax 4(A+B+C+D))</label>
                                <input type="number" name="total_cst_payable" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>8) Amount deferred (out of Box (7)) (under package scheme of incentives) if any</label>
                                <input type="number" name="amount_deferred" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>9) Balance Amount Payable (Box (7) - Box (8))</label>
                                <input type="number" name="balance_amount_payable_box_7_8" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>10(a) Add:- Interest Payable</label>
                                <input type="number" name="add_interest_payable" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>10(b) Add:- Amount Payable against excess collection if any, as per Box-5</label>
                                <input type="number" name="amount_payable_excess_collection" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>10(c) Add:- Late Fee Payable</label>
                                <input type="number" name="add_late_fee_payable" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>11) Total Amount Payable (Box (9) + Box (10))</label>
                                <input type="number" name="total_amount_payable_box_9+10" class="form-control" readonly>
                            </div>
                        </div>

                        <!-- Deduct Section -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>11(a) Deduct: Excess Credit brought forward from previous return</label>
                                <input type="number" name="deduct_excess_credit_brought_forward" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>11(b) Deduct: Excess MVAT refund to be adjusted against the CST liability</label>
                                <input type="number" name="excess_mvat_refund_adjustment" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>11(c) Deduct: Amount already paid (if any) (Details to be entered in Box 13(c))</label>
                                <input type="number" name="deduct_amount_already_paid" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>11(d) Deduct: Refund Adjustment order Amount (Details to be entered in Box 13(d))</label>
                                <input type="number" name="deduct_refund_adjustment_order" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>12) Balance Amount Refundable / Excess credit (if [11(a)+11(b)+11(c)+11(d)] - Amount 11 is positive)</label>
                                <input type="number" name="balance_refundable_excess_credit" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>12(a) Excess Credit carried forward to subsequent return</label>
                                <input type="number" name="excess_credit_carried_forward" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>12(b) Excess Credit claimed as refund (Amount 12 - 12(a))</label>
                                <input type="number" name="excess_credit_claimed_refund" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>13) Balance Amount payable (if Amount 11 - [11(a)+11(b)+11(c)+11(d)] is positive)</label>
                                <input type="number" name="final_balance_payable" class="form-control" readonly>
                            </div>
                        </div>

                    </div>
                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">c) Details of Amount Already Paid </h2>
                        <div class="addMultipleFieldCls toTableView">
                            <div class="loopField_1 row">

                                <div class="col">
                                    <div class="form-group">
                                        <label>SlNo</label>
                                        <input type="text" class="form-control slno" value="1" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Chalan CIN No</label>
                                        <input type="text" class="form-control" name="cst_chalan_cin_no[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Amount (Rs)</label>
                                        <input type="text" class="form-control" name="cst_amount[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Payment date </label>
                                        <input type="text" class="form-control" name="cst_payment_date[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Name of the Bank </label>
                                        <input type="text" class="form-control" name="cst_bank_name[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Branch Name </label>
                                        <input type="text" class="form-control" name="cst_branch_name[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toTableView tableFooter">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="Total" class="form-control" readonly>
                                </div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="cst_fl_total_tax_amount" readonly>
                                    </div>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                            </div>
                        </div>
                        <div style="position: relative;padding-top: 1px; left:15px;">
                            <a href="javascript:void(0);" class="add-new-row add_more_button_cls">Add More</a>
                        </div>
                    </div>

                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">d) Details of RAO</h2>
                        <div class="addMultipleFieldCls toTableView">
                            <div class="loopField_1 row">

                                <div class="col">
                                    <div class="form-group">
                                        <label>SlNo</label>
                                        <input type="text" class="form-control slno" value="1" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>RAO No</label>
                                        <input type="text" class="form-control" name="cst_rao_no[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Amount Adjusted( Rs)</label>
                                        <input type="text" class="form-control" name="cst_amount_adjusted[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Date of RAO </label>
                                        <input type="text" class="form-control" name="cst_rao_date[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toTableView tableFooter">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="Total" class="form-control" readonly>
                                </div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="cst_fl_total_tax_amount" readonly>
                                    </div>
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                        <div style="position: relative;padding-top: 1px; left:15px;">
                            <a href="javascript:void(0);" class="add-new-row add_more_button_cls">Add More</a>
                        </div>
                    </div>
                    <h2 class="form-sub-title">E) The Statement contained in this return in Box 1 to 12 are true to the best of my knowledge and belief.</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mandatory">
                                <label for="date_of_filling_return">Date of Filing of Return</label>
                                <input type="date" class="form-control" name="cst_date_of_filling_return" id="date_of_filling_return">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mandatory">
                                <label for="place">Place</label>
                                <input type="text" class="form-control" name="cst_place" id="place">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mandatory">
                                <label for="name_of_authorised_person">Name Of Authorised Person</label>
                                <input type="text" class="form-control" name="cst_name_of_authorised_person" id="name_of_authorised_person">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mandatory">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" name="cst_designation" id="designation">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mandatory">
                                <label for="remark">Remarks</label>
                                <input type="text" class="form-control" name="cst_remark" id="remark">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mandatory">
                                <label for="mobile">Mobile</label>
                                <input type="number" class="form-control" name="cst_mobile" id="mobile">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mandatory">
                                <label for="email_id">Email ID</label>
                                <input type="email" class="form-control" name="cst_email_id" id="email_id">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="button" name="prevbtn6" id="prevbtn6" class="prevbtncls btn btn-info" data-id="6">
                            &lt;&lt;Prev</button>&nbsp;&nbsp;<button type="button" name="nextbtn6" id="nextbtn6"
                            class="nextbtncls btn btn-primary" data-id="6">
                            Next&gt;&gt;
                        </button>
                    </div>
                </div>
                <div class="stepdivmaincls" id="stepdiv_7" style="display:none;">
                    <div class="text-center mt-3">
                        <button type="button" name="prevbtn7" id="prevbtn7" class="prevbtncls btn btn-info" data-id="7">
                            &lt;&lt;Prev</button>&nbsp;&nbsp;
                        <button type="button" name="nextbtn7" id="nextbtn7"
                            class="nextbtncls btn btn-primary" data-id="7">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php') ?>