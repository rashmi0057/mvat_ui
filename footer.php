<!-- footer aded by ganeswar -->

<footer class="modern-footer">
  <div class="footer-inner">
    <!-- Government Logo & tagline -->
    <div class="footer-column logo-column">
      <img src="images/Maharashtra_logo_marathi.png" alt="Website Logo" class="footer-logo">
      <p class="footer-text">Empowering Businesses Through Innovation & Technology</p>
    </div>

    <!-- Important Links -->
    <div class="footer-column">
      <h4>Important Links</h4>
      <ul class="footer-links">
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms & Conditions</a></li>
      </ul>
    </div>

    <!-- Quick Info -->
    <div class="footer-column">
      <h4>Quick Info</h4>
      <p><a href="#">How to file tax returns</a></p>
      <p><a href="#">Check registration status</a></p>
      <p><a href="#">Download latest forms</a></p>
    </div>

    <!-- Contact Us -->
    <div class="footer-column contact-column">
      <h4>Contact Us</h4>
      <p>Email: <a href="mailto:support@example.gov.in">support@example.gov.in</a></p>
      <p>Office: 3rd Floor, GST Bhavan, Mumbai, MH - 400001</p>
    </div>
  </div>

  <!-- Bottom Row -->
  <div class="footer-bottom">
    <!-- Powered By -->
    <div class="powered-by">
      <img src="images/orient.jpg" alt="Orient Technologies Limited" class="powered-logo p-1 rounded-2 bg-white">
      <p>Powered by<br><span>Orient Technologies Limited</span></p>
    </div>

    <!-- Social Icons -->
    <div class="footer-social">
      <a href="https://instagram.com" class="social-icon instagram" target="_blank" aria-label="Instagram"></a>
      <a href="https://x.com" class="social-icon x-twitter" target="_blank" aria-label="X"></a>
      <a href="https://facebook.com" class="social-icon facebook" target="_blank" aria-label="Facebook"></a>
      <a href="https://youtube.com" class="social-icon youtube" target="_blank" aria-label="YouTube"></a>
      <a href="https://linkedin.com" class="social-icon linkedin" target="_blank" aria-label="LinkedIn"></a>
    </div>
  </div>
</footer>





<!-- end here -->


<!-- Popup -->
<div id="myPopup" style="
                display: none;
                position: fixed;
                top: 0; left: 0;
                width: 100%; height: 100%;
                background-color: rgba(0,0,0,0.5);
                display: none;
                align-items: center;
                justify-content: center;
                z-index: 9999;
              ">
  <div style="
                  background: white;
                  padding: 20px 30px;
                  border-radius: 10px;
                  min-width: 350px;
                  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
                  position: relative;
                ">
    <!-- Close Button -->
    <span onclick="closePopup()" style="
                    position: absolute;
                    right: 10px;
                    top: 5px;
                    font-size: 24px;
                    cursor: pointer;
                  ">&times;</span>

    <!-- Form -->
    <form id="popupForm" onsubmit="submitPopup(event)">
      <div style="margin-bottom: 10px;">
        <input type="checkbox" id="opt1" name="option" value="mvat" />
        <label for="opt1">The Maharashtra Value Added Tax Act, 2002 (MVAT)</label>
      </div>
      <div style="margin-bottom: 10px;">
        <input type="checkbox" id="opt2" name="option" value="cst" />
        <label for="opt2">The Central Sales Tax Act, 1956 (CST)</label>
      </div>
      <div style="margin-bottom: 10px;">
        <input type="checkbox" id="opt3" name="option" value="ptrc" />
        <label for="opt3">The Maharashtra State Tax on Professions, Trades, Callings and Employments Act, 1975
          (PTRC)</label>
      </div>
      <div style="margin-bottom: 15px;">
        <input type="checkbox" id="opt4" name="option" value="ptec" />
        <label for="opt4">The Maharashtra State Tax on Professions, Trades, Callings and Employments Act, 1975
          (PTEC)</label>
      </div>

      <button type="submit" class="btn custom-download-btn"
        style="padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;">
        Submit
      </button>
    </form>
  </div>
</div>



<!-- Defult footer -->
<!-- <footer class="main-footer">
            
            <div class="foot">
                <div class="container-fluid">
                    
                    Copyright &copy;2025  Himachal Pradesh. All Rights Reserved. <span class="float-right">Powered By <a href="https://luminousinfoways.com" target="_blank">Luminous Infoways</a></span>
                </div>
            </div>
        </footer>
    </div> -->



<script type="text/javascript" src="js/js-md5.js"></script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<script>
  function openPopup() {
    document.getElementById("myPopup").style.display = "flex";
  }

  function closePopup() {
    document.getElementById("myPopup").style.display = "none";
  }

  function submitPopup(event) {
    event.preventDefault();

    const checkboxes = document.querySelectorAll('input[name="option"]:checked');
    if (checkboxes.length === 0) {
      alert("Please select an option.");
      return;
    }

    if (checkboxes.length > 1) {
      alert("Please select only one option to proceed.");
      return;
    }

    // Example: Redirect based on first selected option
    const selected = checkboxes[0].value;

    switch (selected) {
      case "mvat":
        window.location.href = "vat-form.php";
        break;
      case "cst":
        window.location.href = "cst-form.php";
        break;
      case "ptrc":
        window.location.href = "ptrc-form.php";
        break;
      case "ptec":
        window.location.href = "ptec-form.php";
        break;
      default:
        alert("Unknown option selected.");
    }
  }
</script>

</body>

</html>