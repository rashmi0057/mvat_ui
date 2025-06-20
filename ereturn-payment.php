<?php include_once('header-dashboard.php') ?>
<div id="SkipContent"></div>

<div class="container-fluid1">
    <div class="layout">
        <?php include_once('left-menu-dashboard.php') ?>
        <div class="main-right">
            <div id="vat-list" class="right-content content">
                <h1>Payment Details</h1>
                <div class="form-card">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="act">Act</label>
                                <select name="act" class="form-control" id="act">
                                    <option value="">--Select--</option>
                                    <option value="1">VAT</option>
                                    <option value="2">CST</option>
                                    <option value="3">PTRC</option>
                                    <option value="4">PTEC</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="form_id">Form ID</label>
                                <select name="form_id" class="form-control" id="form_id">
                                    <option value="">--Select--</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="financial_year">Financial Yeaer</label>
                                <select name="financial_year" class="form-control" id="financial_year">
                                    <option value="">--Select--</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="period">Period</label>
                                <select name="period" class="form-control" id="period">
                                    <option value="">--Select--</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="amount">Amount(Rs.)</label>
                                <input type="number" name="amount" class="form-control" id="amount">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select name="location" class="form-control" id="location">
                                    <option value="">--Select--</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mobile">Mobile No.</label>
                                <input type="number" name="mobile" class="form-control" id="mobile">
                            </div>
                        </div>
                    </div>
                    <ul class="text-danger" style="list-style-type: disc;">
                        <li>>> Please enter the amount payable including Tax, Interest Penalty, fees, any other amount payable together. It will be appropriated as shown in your return.</li>
                        <li>>> For payments other than rehuns use Order Dues Payment ulilily</li>
                        <li>>> For payments after filling of return use Return Oues Payment available after login under payment tab.</li>
                    </ul>
                    <div class="text-center mt-3">
                        <button type="button" class="btn btn-danger" onclick="history.back()">Back</button>
                        <a href="payment-gateway.php" class="btn btn-success">Make Payment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php') ?>