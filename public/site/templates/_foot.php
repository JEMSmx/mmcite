<footer>
		<div class="j-wrap">
				<div class="footer-content-top">
					<div class="footer-first-content">
						<div class="footer-logos">
							<img src="<?= $config->urls->templates ?>assets/images/mmcite9_logo.svg" alt="">
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
        <p>Copyright © 2018, mmcite 9. - All Rights Reserved</p>
        <div class="social-networks">
            <a href="#"><img src="<?= $config->urls->templates ?>assets/images/001-twitter-logo-button.svg" alt="" height="48px"></a>
            <a href="#"><img src="<?= $config->urls->templates ?>assets/images/002-facebook-logo-button.svg" alt="" height="48px"></a>
            <a href="#"><img src="<?= $config->urls->templates ?>assets/images/003-instagram-logo.svg" alt="" height="48px"></a>
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
  <script src="<?= $config->urls->templates ?>assets/scripts/compartir.js"></script>
  <script id="dsq-count-scr" src="//mmcite9-1.disqus.com/count.js" async></script>
  <script type="text/javascript">
     var normalize = (function() {
    var from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç",
        to   = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc",
        mapping = {};
    for(var i = 0, j = from.length; i < j; i++ )
        mapping[ from.charAt( i ) ] = to.charAt( i );

    return function( str ) {
        var ret = [];
        for( var i = 0, j = str.length; i < j; i++ ) {
            var c = str.charAt( i );
            if( mapping.hasOwnProperty( str.charAt( i ) ) )
                ret.push( mapping[ c ] );
            else
                ret.push( c );
        }
        return ret.join( '' );
    }
  })();
      $(document).ready(function(){
        $("#search").submit(function(event){
          if($("input[name=word]").val().length>2){
            var search=$("input[name=word]").val();
            search=search.replace(' ','_');
            window.location="/search/"+normalize(search);
          }
          event.preventDefault();
        });
         $('.your-class').slick({
            dots: true,
            infinite: true,
            speed: 3500,
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
    var sharing_name = "Comparte esta pagina";
    var sharing_url = "http://google.com";
  $(document).ready(function(){
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      infinite: false,
      fade: true,
      cssEase: 'ease',
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      centerMode: false,
      asNavFor: '.slider-for',
      dots: false,
      arrows: true,
      infinite: false,
      cssEase: 'ease',
      focusOnSelect: true
    });
  });
  $(document).ready(function(){
     $('.products-slick').slick({
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
  $(document).ready(function(){
         $('.contacto-slick').slick({
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
      $('#contact-form').submit(function(e){
        e.preventDefault();
        $('input').removeClass('error');
        $('label.error').remove();
        var name=$("input[name='name']");
        var subject=$("input[name='subject']");
        var email=$("input[name='email']");
        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
        if(name.val() === ""){
          $(name).addClass('error');
          $(name).after('<label class="error"> Campo obligatorio</label>');
        }
        if(subject.val() === ""){
          $(subject).addClass('error');
          $(subject).after('<label class="error"> Campo obligatorio</label>');
        }

        if(!pattern.test(email.val())){
          $(email).addClass('error');
          $(email).after('<label class="error"> El correo electrónico señalado es incorrecto</label>');
        }
        if($('label.error').length == 0){
          console.log("se enviara un correo");

        }


          return false;
      });
      $("video").click(function() {
          if (this.paused) {
            this.play();
          } else {
            this.pause();
          }
        });
 </script>
</body>
</html>
