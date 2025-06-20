<?php include_once('header-dashboard.php') ?>
<div id="SkipContent"></div>

<div class="container-fluid1">
  <div class="layout">
    <?php include_once('left-menu-dashboard.php') ?>
    <div class="main-right">

      <div id="vat-list" class="right-content content">
        <div class="row">
          <div class="col">
            <h1>Payment Against Statutory Order</h1>
          </div>
          <div class="col text-end">
            <button onclick="history.back()" class="btn btn-sm">
              ← Back
            </button>
          </div>
        </div>

        <p>Regular Payment related to Statutory Order (Other than return) shall be made through this option. For
          Advance Payment+ against Return use e-Payment Return. The Part Payment for filling Appeal
          Application should be paid through Appeal Application window provided in Appeals T+ ile. Kindly
          refer Trade Circular 55T of 2019 and User Manual for more details.</p>
        <div class="form-card">
          <div class="row">
            <div class="col">
              <input type="radio" name="formSelector" value="tin" id="tin" checked>
              <label for="tin">TIN</label>
            </div>
            <div class="col">
              <input type="radio" name="formSelector" value="pan" id="pan">
              <label for="pan">PAN/URD Payment</label>
            </div>
            <div class="col">
              <input type="radio" name="formSelector" value="tan" id="tan">
              <label for="tan">TAN/URD Payment</label>
            </div>
            <div class="col">
              <input type="radio" name="formSelector" value="old-act" id="old-act">
              <label for="old-act" class="truncate-label" title="Old Act Payment prior to 01.04.2025">Old Act Payment prior to 01.04.2025</label>
            </div>
            <div class="col">
              <input type="radio" name="formSelector" value="nri" id="nri">
              <label for="nri">NRI/FOREIGN Companies</label>
            </div>
          </div>
        </div>
        <!-- Form Containers -->
        <div class="form-card">
          <div class="tin selectedDiv">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="pan">TIN:<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" id="pan"
                    placeholder="Enter TIN Here" name="pan">
                </div>
              </div>
            </div>
          </div>
          <div class="pan selectedDiv" style="display: none;">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="pan">PAN:<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" id="pan"
                    placeholder="Enter PAN Here" name="pan">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="pan">Name(As per PAN):<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" id="pan"
                    placeholder="Enter name here" name="pan">
                </div>
              </div>
            </div>
          </div>
          <div class="tan selectedDiv" style="display: none;">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="pan">TAN:<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" id="pan"
                    placeholder="Enter TAN Here" name="pan">
                </div>
              </div>
            </div>
          </div>
          <div class="old-act selectedDiv" style="display: none;">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="pan">Old RC Number:<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" id="pan"
                    placeholder="Enter Old RC Number Here" name="pan">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="pan">Name(As per PAN):<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" id="pan"
                    placeholder="Enter name here" name="pan">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="pan">PAN/TAN:<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" id="pan"
                    placeholder="Enter PAN/TAN here" name="pan">
                </div>
              </div>
            </div>
          </div>
          <div class="nri selectedDiv" style="display: none;">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="reason_of_registration">Select Country:</label>
                  <select name="reason_of_registration" id="reason_of_registration"
                    class="form-control pri-form">
                    <option value="">--Select--</option>
                    <option value="voluntarily">Voluntarily</option>
                    <option value="constitutional_change">Change in the Constitution</option>
                    <option value="part_business_transfer">Part transfer of business</option>
                    <option value="full_business_transfer">Full transfer of business</option>
                    <option value="exceeding_turnover_limit">Exceeding the prescribed turnover limit
                    </option>
                    <option value="others">Others</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="pan">Identification Number:<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" id="pan"
                    placeholder="Enter Identification Number Here" name="pan">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="pan">Name(As per PAN):<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" id="pan"
                    placeholder="Enter name here" name="pan">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="pan">Film/Company Number:<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" id="pan"
                    placeholder="Enter Film/Company Number here" name="pan">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <form>
              <div class="mb-3 ">
                <img src="images/captcha.png">

                <button type="button" class="btn btn-sm btn-outline-secondary">↻
                  Refresh</button>
              </div>

              <div class="mb-3 col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="userInput" placeholder="Enter CAPTCHA"
                    required />
                </div>
              </div>

              <div id="captchaResult" class="mb-3"></div>

              <a class="btn btn-sm" href="statutory-payment2.php">Next</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    $('input[name="formSelector"]').click(function() {
      $('.selectedDiv').hide();
      $('.' + $(this).val()).show();
    });
  });
</script>
<?php include_once('footer.php') ?>