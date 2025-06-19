<?php include_once('header.php') ?>
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
                <div class="stepdivmaincls" id="stepdiv_2">
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
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php') ?>