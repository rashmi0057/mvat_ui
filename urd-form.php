<?php include_once('header.php') ?>
    <div id="SkipContent"></div>
    <div class="container-fluid1">
      <div class="layout">

        <?php  include_once('left-menu.php') ?>

        <div class="main-right bg-light">
          <div class="right-content content">
            <h1>URD Profile Creation</h1>
            <div class="p-5 mt-3 border rounded-2 shadow">

            <div class="row g-3" id="urd-pan-verification">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Enter PAN No.</label>
                    <input type="text" class="form-control pri-form" onblur="$('.pan_no').val($(this).val())" name="a" />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label>Constitution<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" name="" />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label><span class="text-danger">&nbsp;</span></label>
                  <select class="form-control pri-form" name="">
                    <option value="">Select</option>
                    <option value="1">Individual</option>
                    <option value="2">Partnership Firm</option>
                    <option value="3">Company</option>
                    <option value="4">LLP</option>
                    <option value="5">Trust</option>
                    <option value="6">Society</option>
                  </select>
                </div>
                </div>
                <div class="col-md-12 pt-3 text-center">
                  <button type="button" class="btn btn-primary" onclick="verifyPan()">Next</button>
                </div>
              </div>


              <div class="row g-3 collapse" id="urd-profile-creation">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>PAN No.<span class="text-danger">*</span></label>
                    <input type="text" class="form-control pri-form pan_no" name="a" readonly />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label>Full Name<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" name="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label>Email Id<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" name="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label>Re-enter Email Id<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" name="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label>Mobile Number<span class="text-danger">*</span></label>
                  <input type="text" class="form-control pri-form" name="">
                  </div>
                </div>
                <div class="col-md-12 pt-3 text-center">
                  <button type="button" class="btn btn-primary">Create Profile</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<script>
function verifyPan() {
  $('.submit-loader').addClass('in');
  setTimeout(() => {
    $('.submit-loader').removeClass('in');
    // Simulate PAN verification
    var panVerified = true; // This would be replaced with actual verification logic

      if (panVerified) {
        document.getElementById('urd-pan-verification').classList.add('collapse');
        document.getElementById('urd-profile-creation').classList.remove('collapse');
      } else {
        alert('PAN verification failed. Please try again.');
      }
  }, timeout = 1000);
}
</script>

<?php include_once('footer.php') ?>