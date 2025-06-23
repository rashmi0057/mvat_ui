<?php include_once('header.php') ?>
<div id="SkipContent"></div>

<div class="container-fluid1">
  <div class="layout">
    <?php include_once('left-menu.php') ?>
    <div class="main-right">

      <div id="vat-list" class="right-content content">
        <div class="row mb-3">
          <div class="col text-end"> <!-- use text-end if you want it on the right -->
            <a onclick="history.back()" class="btn btn-secondary" href="statutory-payment.php">
              ← Back
            </a>
          </div>
        </div>

        <div class="form-card">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="constitution_of_business">Order Type:<span class="text-danger">*</span></label>
                <select class="form-control pri-form" name="constitution_of_business"
                  onchange="ifOther(this, '#addForm2')">
                  <option value="">-- Select --</option>

                </select>

              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="constitution_of_business">Financial Year:<span class="text-danger">*</span></label>
                <select class="form-control pri-form" name="constitution_of_business"
                  onchange="ifOther(this, '#addForm2')">
                  <option value="">-- Select --</option>

                </select>

              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="constitution_of_business">Period:<span class="text-danger">*</span></label>
                <select class="form-control pri-form" name="constitution_of_business"
                  onchange="ifOther(this, '#addForm2')">
                  <option value="">-- Select --</option>

                </select>

              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="constitution_of_business">Location:<span class="text-danger">*</span></label>
                <select class="form-control pri-form" name="constitution_of_business"
                  onchange="ifOther(this, '#addForm2')">
                  <option value="">-- Select --</option>

                </select>

              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="name_as_pan">Amount of Tax:</label><input type="text"
                  class="form-control pri-form name_as_pan_cls" id="name_as_pan" placeholder="" name="name_as_pan">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="name_as_pan">Amount of TDS:</label><input type="text"
                  class="form-control pri-form name_as_pan_cls" id="name_as_pan" placeholder="" name="name_as_pan">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="name_as_pan">Interest Amount:</label><input type="text"
                  class="form-control pri-form name_as_pan_cls" id="name_as_pan" placeholder="" name="name_as_pan">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="name_as_pan">Penalty Amount:</label><input type="text"
                  class="form-control pri-form name_as_pan_cls" id="name_as_pan" placeholder="" name="name_as_pan">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="name_as_pan">Fine:</label><input type="text" class="form-control pri-form name_as_pan_cls"
                  id="name_as_pan" placeholder="" name="name_as_pan">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="name_as_pan">Amount Forfeited:</label><input type="text"
                  class="form-control pri-form name_as_pan_cls" id="name_as_pan" placeholder="" name="name_as_pan">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="name_as_pan">Mobile No:</label><input type="text"
                  class="form-control pri-form name_as_pan_cls" id="name_as_pan" placeholder="" name="name_as_pan">
              </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-md-4">
              <h2>Total Amount:</h2>
              <div class="input-group">
                <span class="input-group-text">₹</span>
                <input type="number" class="form-control pri-form" value="27" readonly="">
              </div>
            </div>

          </div>

          <ul class=" details-list">

            <li>
              <i class="priya-angle-double-right"></i> For payments of any amount as per returns (before filling the
              return) including PTRC, use Advance Payment utility
            </li>
            <li>
              <i class="priya-angle-double-right"></i> For payments as per any order or other than with returns, use Order
              Dues Payment utility
            </li>
            <li>
              <i class="priya-angle-double-right"></i> For making payment of any amount payable as per return after
              filling of return use Return Dues Payment available after login under payment tab
            </li>
          </ul>
          <div class="text-center mt-3">
            &nbsp;&nbsp;
            <a type="button" href="payment-gateway.php" name="nextbtn3" id="nextbtn3" class="nextbtncls btn btn-primary">
              Proceed to Payment
            </a>
          </div>
        </div>





      </div>




    </div>
  </div>
</div>

<?php include_once('footer.php') ?>