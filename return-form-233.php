<?php include_once('header-dashboard.php') ?>
<div id="SkipContent"></div>

<div class="container-fluid1 content">
    <div class="layout">
        <?php include_once('left-menu.php') ?>
        <div class="main-right">
            <div class="right-content">
                <h1>FORM 233</h1>
                <h2 class="form-sub-title">Return of tax payable by a dealer under M.V.A.T.Act, 2002 (See Rule 17, 18 and 45)</h2>
                <ul id="progressbar">
                    <li id="stepActive_1" class="steps active"></li>
                    <li id="stepActive_2" class="steps"></li>
                    <li id="stepActive_3" class="steps"></li>
                    <li id="stepActive_4" class="steps"></li>
                </ul>
                <div class=" stepdivmaincls" id="stepdiv_1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>M.V.A.T. R.C. No.</label>
                                <input type="text" name="vat_rc" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>C.S.T. R.C. No.</label>
                                <input type="text" name="cst_rc" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="stepdivmaincls" id="stepdiv_2" style="display:none;">
                    <div class="row form-horizontal">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="gross_turnover_of_sales">a) Gross turnover of sales including, taxes as well as turnover of non sales transactions like value of Branch Transfer, Consignment transfers, job work charges etc</label>
                                <input type="number" name="gross_turnover_of_sales" id="gross_turnover_of_sales" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="turnover_of_sales_under_form_234/235">b) Less:- Turnover of Sales (including taxes thereon) including inter-state Consignment Transfers and Branch Transfers Covered under Form Number 234 or 235 </label>
                                <input type="number" name="turnover_of_sales_under_form_234/235" id="turnover_of_sales_under_form_234/235" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="turnover_considered">c) Balance :- Turnover Considered under this Form (a-b) </label>
                                <input type="number" name="turnover_considered" id="turnover_considered" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="add_value_of_goods">d) Add:- Value of Goods return (inclusive of tax) including reduction of sale price on account of rate difference and discount claimed in earlier period but not confirmed by buyer. </label>
                                <input type="number" name="add_value_of_goods" id="add_value_of_goods" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_value_of_inclusive_goods">e) Less:-Value ( inclusive of sales tax) of Goods Return</label>
                                <input type="number" name="less_value_of_inclusive_goods" id="less_value_of_inclusive_goods" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="credit_note">f) Less:- Credit Note , price on account of rate difference and discount Within State .</label>
                                <input type="number" name="credit_note" id="credit_note" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_value_of_goods">g) Less:- Value of Goods return (inclusive of tax) including reduction of sale price on account of rate difference and discount claimed in earlier period which is confirmed.</label>
                                <input type="number" name="less_value_of_goods" id="less_value_of_goods" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="balance_turnover_of_sales">h) Balance:- Turnover of sales including, taxes as well as turnover of non sales transactions like value of Branch Transfer, Consignment transfers, job work charges etc ( (c+d)-(e + f + g))</label>
                                <input type="number" name="balance_turnover_of_sales" id="balance_turnover_of_sales" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_turnover_of_sales_under_composition">i) Less:-Turnover of sales under composition scheme(s) , other than Works Contracts under composition option (Computation of turnover of sales liable to tax to be shown in 8 Part B)</label>
                                <input type="number" name="less_turnover_of_sales_under_composition" id="less_turnover_of_sales_under_composition" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="turnover_of_sales_under_contract">j) Less:-Turnover of sales under Works Contracts under composition option (Computation of turnover of sales liable to tax to be shown in Part 12 )</label>
                                <input type="number" name="turnover_of_sales_under_contract" id="turnover_of_sales_under_contract" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="excluding_turnover_of_sales_part_c">k) Less:-Turnover of sales (excluding taxes) relating to on-going works contracts (Computation of turnover of sales liable to tax to be shown in 10 Part C) </label>
                                <input type="number" name="excluding_turnover_of_sales_part_c" id="excluding_turnover_of_sales_part_c" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="excluding_turnover_of_sales_part_d">l) Less:-Turnover of sales (excluding taxes) relating to on-going leasing contracts (Computation of turnover of sales liable to tax to be shown in 10 Part D) </label>
                                <input type="number" name="excluding_turnover_of_sales_part_d" id="excluding_turnover_of_sales_part_d" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="balance_net_turnover">m) Balance: Net turnover of sales including, taxes, as well as turnover of non sales transactions like Branch Transfers / Consignment transfers and job works charges , etc
                                    (h) -(i+j+k+l) </label>
                                <input type="number" name="balance_net_turnover" id="balance_net_turnover" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_net_tax_amount">n) Less:-Net Tax amount ( Tax included in sales shown in (c) above less Tax included in (e+f+g) above)</label>
                                <input type="number" name="less_net_tax_amount" id="less_net_tax_amount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_total_value_not_collected">o) Less:- Total Value in which tax is not collected seperatly ( Inclusive of Tax with whole Amount )</label>
                                <input type="number" name="less_total_value_not_collected" id="less_total_value_not_collected" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_value_of_branch_transfer">p) Less:-Value of Branch Transferes/ Consignment transfers within the State if the tax is to be paid by an Agent</label>
                                <input type="number" name="less_value_of_branch_transfer" id="less_value_of_branch_transfer" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_sales_us81">q) Less:-Sales u/s 8 (1) i.e. Interstate Sales including Central Sales Tax, Sales in the course of imports, exports and value of Branch Transfers/ Consignment transfers outside the State</label>
                                <input type="number" name="less_sales_us81" id="less_sales_us81" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_non_taxable_labour">r) Less:- Non-taxable labour and other charges / expenses u/r 58(1), cost of land u/r 58(1A), deduction u/r 58(1B) for execution of works contract</label>
                                <input type="number" name="less_non_taxable_labour" id="less_non_taxable_labour" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_amount_paid">s) Less:- Amount paid by way of price for sub-contract where tax is borne by sub-contractor</label>
                                <input type="number" name="less_amount_paid_sub_contractor" id="less_amount_paid" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_amount_paid_principal_contractor">t) Less:- Amount paid by way of price for sub-contract where tax is borne by principal contractor</label>
                                <input type="number" name="less_amount_paid_principal_contractor" id="less_amount_paid_principal_contractor" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_sales_tax_free_goods">u) Less:-Sales of tax-free goods specified in Schedule A</label>
                                <input type="number" name="less_sales_tax_free_goods" id="less_sales_tax_free_goods" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_sales_of_taxable_goods">v) Less:-Sales of taxable goods fully exempted u/s 41 and u/s. 8 other than sales under section 8(1) & covered in Box 6(q)</label>
                                <input type="number" name="less_sales_of_taxable_goods" id="less_sales_of_taxable_goods" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_labour_charges">w) Less:-Labour/Job work charges</label>
                                <input type="number" name="less_labour_charges" id="less_labour_charges" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_other_allowable_deductions">x) Less:-Other allowable deductions, if any</label>
                                <input type="number" name="less_other_allowable_deductions" id="less_other_allowable_deductions" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="less_deduction_us_32">y) Less:- deduction under Section 3(2)</label>
                                <input type="number" name="less_deduction_us_32" id="less_deduction_us_32" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="balance_net_trunover_of_sales">z) Balance: Net turnover of Sales liable to tax
                                    [m-(n+o+p+q+r+s+t+u+v+w+x+y)</label>
                                <input type="number" name="balance_net_trunover_of_sales" id="balance_net_trunover_of_sales" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">7. Computation of Sales Tax Seperately payable under the M VAT Act as per box 8(z)</h2>
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
                                        <label>Rate of tax</label>
                                        <select class="form-control" name="seperately_rate_of_tax[]">
                                            <option value="">--Select--</option>
                                            <option value="8%">8%</option>
                                            <option value="18%">18%</option>
                                            <option value="28%">28%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Turnover of sales liable to tax (Rs.) </label>
                                        <input type="text" class="form-control" name="seperately_quantity_sold[]">
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
                </div>
                <div class="stepdivmaincls" id="stepdiv_3" style="display:none;">
                    <h2 class="form-sub-title">8.( PART-B)Computation of net turnover of sales liable to tax under composition</h2>
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
                                <label for="turnover_composition_scheme">A Turnover of sales (excluding taxes) under composition scheme(s) [Same as 6(i)]</label>
                                <input type="number" class="form-control valid-currency length-16" id="turnover_composition_scheme" name="turnover_composition_scheme" data-model="turnover_composition_scheme">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="retailer_total_sales">B RETAILER a) Total turnover of Sales</label>
                                <input type="number" class="form-control valid-currency length-16" id="retailer_total_sales" name="retailer_total_sales" data-model="retailer_total_sales">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="retailer_less_excluded_sales">b) Less:-Turnover of sales of goods excluded from the Composition Scheme</label>
                                <input type="number" class="form-control valid-currency length-16" id="retailer_less_excluded_sales" name="retailer_less_excluded_sales" data-model="retailer_less_excluded_sales">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="retailer_deductions">c) Less:- Allowable deductions such as Goods Return etc</label>
                                <input type="number" class="form-control valid-currency length-16" id="retailer_deductions" name="retailer_deductions" data-model="retailer_deductions">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="retailer_net_turnover">d) Balance:Net turnover of sales liable to tax under composition option [a-{b+c)]</label>
                                <input type="number" class="form-control valid-currency length-16" id="retailer_net_turnover" name="retailer_net_turnover" data-model="retailer_net_turnover">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="restaurant_total_sales">C RESTAURANT, CLUB, CATERER ETC a) Total turnover of sales.</label>
                                <input type="number" class="form-control valid-currency length-16" id="restaurant_total_sales" name="restaurant_total_sales" data-model="restaurant_total_sales">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="baker_total_sales">D BAKER a) Total turnover of sales</label>
                                <input type="number" class="form-control valid-currency length-16" id="baker_total_sales" name="baker_total_sales" data-model="baker_total_sales">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="secondhand_total_sales">E SECOND HAND MOTOR VEHICLES DEALERS a) Total turnover of sales</label>
                                <input type="number" class="form-control valid-currency length-16" id="secondhand_total_sales" name="secondhand_total_sales" data-model="secondhand_total_sales">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="secondhand_deductions">b) Less: Allowable reductions/ deductions</label>
                                <input type="number" class="form-control valid-currency length-16" id="secondhand_deductions" name="secondhand_deductions" data-model="secondhand_deductions">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="secondhand_net_turnover">c) Balance:Net turnover of sales, liable to tax under composition option ( a-b)</label>
                                <input type="number" class="form-control valid-currency length-16" id="secondhand_net_turnover" name="secondhand_net_turnover" data-model="secondhand_net_turnover">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="lease_total_sales">F LEASE COMPOSITION DEALER a) Total turnover of sales</label>
                                <input type="number" class="form-control valid-currency length-16" id="lease_total_sales" name="lease_total_sales" data-model="lease_total_sales">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="lease_deductions">b) Less: Allowable reductions/ deductions</label>
                                <input type="number" class="form-control valid-currency length-16" id="lease_deductions" name="lease_deductions" data-model="lease_deductions">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="lease_net_turnover">c) Balance:Net turnover of sales, liable to tax under composition option ( a-b)</label>
                                <input type="number" class="form-control valid-currency length-16" id="lease_net_turnover" name="lease_net_turnover" data-model="lease_net_turnover">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="total_net_turnover">F Total net turnover of sales liable to tax under composition option [8(B) (d) + 8(C) (a) + 8(D) (a) + 8(E) (c) + 8(F)(c )]</label>
                                <input type="number" class="form-control valid-currency length-16" id="total_net_turnover" name="total_net_turnover" data-model="total_net_turnover">
                            </div>
                        </div>

                    </div>
                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">9. Computation of Sales Tax payable by way of composition other than works contract under the MVAT Act</h2>
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
                                        <label>Rate of tax</label>
                                        <select class="form-control" name="composition_rate_of_tax[]">
                                            <option value="">--Select--</option>
                                            <option value="8%">8%</option>
                                            <option value="18%">18%</option>
                                            <option value="28%">28%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Turnover of sales liable to tax (Rs.) </label>
                                        <input type="text" class="form-control" name="composition_quantity_sold[]">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tax Amount ( Rs)</label>
                                        <input type="text" class="form-control" name="composition_tax_amount[]">
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
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="composition_total_tax_amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="position: relative;padding-top: 1px; left:15px;">
                            <a href="javascript:void(0);" class="add-new-row add_more_button_cls">Add More</a>
                        </div>
                    </div>
                </div>
                <div class="stepdivmaincls" id="stepdiv_4" style="display:none;">
                    <h2 class="form-sub-title">10.( PART-C) Computation of net turnover of sales relating to on-going works contracts liable to tax under section 96(1)(g) of the MVAT Act 2002:
                    </h2>
                    <div class="row form-horizontal">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="ongoing_contract_turnover">a) Turnover of sales (excluding tax/composition) relating to ongoing work contract during the period [same as Box 6(k)]</label>
                                <input type="number" class="form-control valid-currency length-16" id="ongoing_contract_turnover" name="ongoing_contract_turnover" data-model="ongoing_contract_turnover">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exempted_turnover">b) Less:-Turnover of sales exempted from tax</label>
                                <input type="number" class="form-control valid-currency length-16" id="exempted_turnover" name="exempted_turnover" data-model="exempted_turnover">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="deduction_section_6">c) Less:-Deduction u/s 6 of the Earlier Law</label>
                                <input type="number" class="form-control valid-currency length-16" id="deduction_section_6" name="deduction_section_6" data-model="deduction_section_6">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="deduction_section_6a">d) Less:-Deduction u/s.6(A) of the Earlier Law</label>
                                <input type="number" class="form-control valid-currency length-16" id="deduction_section_6a" name="deduction_section_6a" data-model="deduction_section_6a">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="net_turnover_liable_composition">e) Balance:Net turnover of sales liable to tax/ composition [a-(b+c+d)]</label>
                                <input type="number" class="form-control valid-currency length-16" id="net_turnover_liable_composition" name="net_turnover_liable_composition" data-model="net_turnover_liable_composition">
                            </div>
                        </div>
                        <h2 class="form-sub-title">11.( PART-D) Computation of net turnover of sales relating to on-going leasing contracts liable to tax under sec 96(10) (f) of the MVAT Act, 2002</h2>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="leasing_contract_turnover">a) Turnover of sales (excluding taxes) Relating to On-going Leasing Contracts [same as Box 6(l)]</label>
                                <input type="number" class="form-control valid-currency length-16" id="leasing_contract_turnover" name="leasing_contract_turnover" data-model="leasing_contract_turnover">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="leasing_exempted_turnover">b) Less: Turnover of sales exempted from tax</label>
                                <input type="number" class="form-control valid-currency length-16" id="leasing_exempted_turnover" name="leasing_exempted_turnover" data-model="leasing_exempted_turnover">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="leasing_net_turnover">c) Balance:Net turnover of sales liable to tax (a-b)</label>
                                <input type="number" class="form-control valid-currency length-16" id="leasing_net_turnover" name="leasing_net_turnover" data-model="leasing_net_turnover">
                            </div>
                        </div>
                    </div>
                    <div class="loopmailcls col-md-12 mb-5">
                        <h2 class="form-sub-title">12. Computation of Tax under Works Contracts by way of composition option payable under the MVAT Act</h2>
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
                                        <label>Rate of tax</label>
                                        <select class="form-control" name="seperately_rate_of_tax[]">
                                            <option value="">--Select--</option>
                                            <option value="8%">8%</option>
                                            <option value="18%">18%</option>
                                            <option value="28%">28%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Turnover of sales liable to tax (Rs.) </label>
                                        <input type="text" class="form-control" name="seperately_quantity_sold[]">
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
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php') ?>