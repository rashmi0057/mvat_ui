<?php include_once('header-dashboard.php') ?>
<div id="SkipContent"></div>
<div class="container-fluid1">
  <div class="layout">

    <?php include_once('left-menu-dashboard.php') ?>

    <div class="main-right bg-light">
      <div class="right-content content">
        <h1>Dashboard</h1>
        <div class="dash-sec">
          <h3>E-Services</h3>
          <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-3">
            <div class="col">
              <a class="p-3 bg-primary text-white text-center rounded icon-block dashboard-menu">
                <i class="priya-user-plus"></i>
                Registration
              </a>
              <div class="popup-submenu">
                <a href="javascript:void(0)" onclick="openPopup()">New Registration</a>
                <a href="javascript:void(0)">Update Info</a>
                <a href="javascript:void(0)">View Status</a>
              </div>
            </div>
            <div class="col">
              <a href="return-index.php" class="p-3 bg-secondary text-white text-center rounded icon-block">
                <i class="priya-repeat"></i>
                Return
              </a>
            </div>
            <div class="col">
              <a class="p-3 bg-success text-white text-center rounded icon-block dashboard-menu">
                <i class="priya-credit-card"></i>
                Payment
              </a>
              <div class="popup-submenu">
                <a href="statutory-payment.php?redirect=ereturn-payment.php">e-Payment Return</a>
                <a href="statutory-payment.php?redirect=assessment-order-payment.php">Assessnment Order</a>
                <a href="statutory-payment.php?redirect=ptec-otpt-payment.php">PTET OTPT</a>
                <a href="statutory-payment.php?redirect=return-dues.php">Retrun Order Dues</a>
              </div>
            </div>
            <div class="col">
              <a class="p-3 bg-danger text-white text-center rounded icon-block">
                <i class="priya-bank"></i>
                Recovery
              </a>
            </div>
            <div class="col">
              <a class="p-3 bg-warning text-white text-center rounded icon-block">
                <i class="priya-file-text"></i>
                E-CST
              </a>
            </div>
          </div>
        </div>

        <div class="dash-sec">
          <h3>Activities</h3>
          <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-3">
            <div class="col">
              <a class="p-3 bg-warning text-white text-center rounded icon-block">
                <i class="priya-wallet"></i>
                Refund
              </a>
            </div>
            <div class="col">
              <a class="p-3 bg-primary text-white text-center rounded icon-block">
                <i class="priya-gavel"></i>
                Appeals
              </a>
            </div>
            <div class="col">
              <a class="p-3 bg-secondary text-white text-center rounded icon-block">
                <i class="priya-file-text"></i>
                Form e704
              </a>
            </div>
            <div class="col">
              <a class="p-3 bg-success text-white text-center rounded icon-block">
                <i class="priya-file-text-o"></i>
                Ledger Confirmation Utility
              </a>
            </div>
            <div class="col">
              <a class="p-3 bg-danger text-white text-center rounded icon-block">
                <i class="priya-file"></i>
                GSTIN
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
<script>
  $(document).ready(function() {
    $('.dashboard-menu').on('click', function(e) {
      e.preventDefault();
      e.stopPropagation();

      // Hide all open submenus
      $('.popup-submenu').hide();

      const $trigger = $(this);
      const $menu = $trigger.parent().find('.popup-submenu');

      if ($menu.length) {
        $menu.css({
          top: e.pageY + 'px',
          left: e.pageX + 'px',
          display: 'block',
          position: 'absolute',
          zIndex: 1000
        });
      }
    });

    $(document).on('click', function(e) {
      if (!$(e.target).closest('.popup-submenu').length && !$(e.target).closest('.dashboard-menu').length) {
        $('.popup-submenu').hide();
      }
    });
  });
</script>

<?php include_once('footer.php') ?>