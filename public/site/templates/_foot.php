<footer>
		<div class="j-wrap">
				<div class="footer-content-top">
					<div class="footer-first-content">
						<div class="footer-logos">
							<img src="https://dummyimage.com/80x80/000/fff" alt="">
							<img src="https://dummyimage.com/80x80/000/fff" alt="">
						</div>
						<p>Public realms are fascinating places where people meet each other and also experience the history of the city.</p>
					</div>
					<hr class="footer-hr-vertical">
					<div class="footer-first-list">
						<h3>INFORMATION</h3>
						<a href="#">About us</a>
						<a href="#">Careers</a>
						<a href="#">Privacy & Security</a>
						<a href="#">Site map</a>
						<a href="#">Terms of use</a>
						<a href="#">Blog</a>
					</div>
					<hr class="footer-hr-vertical">
					<div class="footer-second-list">
						<h3>HELP & SUPPORT</h3>
						<a href="#">Recommended Reading</a>
						<a href="#">Submit your Story</a>
						<a href="#">Contact Us</a>
						<a href="#">Frequently Asked Question</a>
						<a href="#">How to Order</a>
          </div>
          <hr class="footer-hr-vertical">
					<div class="footer-third-list">
						<h3>MY ACCOUNT</h3>
						<a href="#">Delivery Information</a>
						<a href="#">My Account</a>
						<a href="#">Order Tracking</a>
						<a href="#">Reminder Service</a>
						<a href="#">Shipping, Returns & Fees</a>
					</div>
				</div>
    </div>
    <hr class="footer-hr-horizontal">
    <div class="j-wrap">
      <div class="footer-content-bottom">
        <p>Copyright © 2018, Mmcite 9. - All Rights Reserved</p>
        <div class="social-networks">
          <img src="https://dummyimage.com/48x48/000/fff" alt="">
          <img src="https://dummyimage.com/48x48/000/fff" alt="">
          <img src="https://dummyimage.com/48x48/000/fff" alt="">
        </div>
      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="<?= $config->urls->templates ?>assets/scripts/ripple.js"></script>
  <script src="<?= $config->urls->templates ?>assets/scripts/header.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="<?= $config->urls->templates ?>assets/slick/slick.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
         $('.your-class').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'ease',
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows:false,
            pauseOnHover: false,
         });
      });
 </script>
</body>
</html>