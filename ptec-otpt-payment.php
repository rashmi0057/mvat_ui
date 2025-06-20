<?php include_once('header.php') ?>
<div id="SkipContent"></div>

<div class="container-fluid1">
    <div class="layout">
        <?php include_once('left-menu-dashboard.php') ?>
        <div class="main-right">
            <div class="right-content content">
                <h1>Payment Details</h1>
                <form action="#" method="POST">
                    <div class="form-card">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Entry</label>
                                    <input type="text" class="form-control">
                                    <span>OTPT Amount : 8797</span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Tax Rate</label>
                                    <input type="text" class="form-control">
                                    <span>Your Benifit : 8797</span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Sub-Entry</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center align-items-center">
                                <div class="form-group">
                                    <label></label>
                                    <button type="button" onclick="helpModal('#select_entry')" class="btn btn-sm mt-2">Select Entry</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>No Of Years</label>
                                    <select name="location" class="form-control">
                                        <option value="">--Select--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Location</label>
                                    <select name="location" class="form-control" id="location">
                                        <option value="">--Select--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button class="btn btn-sm" type="button">Back</button>
                            <button class="btn btn-sm" type="button" onclick="helpModal('#declaration')">Proced</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="help-modal" id="select_entry">
    <div class="help-modal-content pop-l">
        <header>Select Entry</header>
        <i class="priya-close" onclick="helpModalHide(this)"></i>
        <section>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Entry</th>
                            <th>Sub Entry</th>
                            <th>Description</th>
                            <th>Tax Rate</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <body>
                        <tr>
                            <td>465</td>
                            <td>A</td>
                            <td>dfdjshfksdfslfsdlfldsflsdjf</td>
                            <td>654</td>
                            <td>
                                <input type="radio" name="" id="">
                            </td>
                        </tr>
                        <tr>
                            <td>465</td>
                            <td>A</td>
                            <td>dfdjshfksdfslfsdlfldsflsdjf</td>
                            <td>654</td>
                            <td>
                                <input type="radio" name="" id="">
                            </td>
                        </tr>
                        <tr>
                            <td>465</td>
                            <td>A</td>
                            <td>dfdjshfksdfslfsdlfldsflsdjf</td>
                            <td>654</td>
                            <td>
                                <input type="radio" name="" id="">
                            </td>
                        </tr>
                    </body>
                </table>
                <div class="text-center mt-2">
                    <button class="btn btn-sm">Select</button>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="help-modal" id="declaration">
    <div class="help-modal-content pop-l">
        <header>Declaration</header>
        <section>
            <ul>
                <li>1. I have read and understood the notification of OTPT scheme and I agree the terms and conditions of the scheme.</li>
                <li>2. I am aware that no request for change or corrections in PAN, TIN, name, or any other matter of the tax payment certificate shall be entertained. Below is the infomration about my TIN IS correct</li>
                <div class="row">
                    <div class="col">
                        PAN :
                    </div>
                    <div class="col">
                        Name :
                    </div>
                    <div class="col">
                        TIN :
                    </div>
                    <div class="col">
                        Trade Name :
                    </div>
                </div>
                <li>3. No refund of the amount paid under the OTPT scheme will be given</li>
                <li>4. If any wrong information is submitted by the applicant he shall not be eligible for the benefit under OTPT scheme</li>
            </ul>
            <input type="checkbox" name="" id=""> I Agree
            <div class="text-center mt-2">
                <button class="btn btn-sm" type="button" onclick="helpModalHide(this)">Cancel</button>
                <button class="btn btn-sm">Proced</button>
            </div>
        </section>
    </div>
</div>
<?php include_once('footer.php') ?>