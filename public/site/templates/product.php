<?php

include('./_head.php');

include('./_nav.php');  ?>

  <!--  Main content -->
  <main class="j-workspace ">
      <div class="j-wrap">
      <!-- section welcome -->
      <div class="menu-a">
            <h3><a href="/" class="inactive">HOME</a></h3>
            <p>&nbsp;&nbsp;>>&nbsp;&nbsp;</p>
            <h3><a href="/productos" class="inactive">PRODUCTS</a></h3>
            <p>&nbsp;&nbsp;>>&nbsp;&nbsp;</p>
            <h3><a href="<?=$page->parent()->url?>" class="inactive"><?=$page->parent()->title?></a></h3>
            <p>&nbsp;&nbsp;>>&nbsp;&nbsp;</p>
            <h3><a href="<?=$page->url?>" class="active"><?=$page->title?></a></h3>
      </div>
         <!-- section individual-product  -->
         <section class="individual-product">
            <div class="carousel-container" >
               <div class="slider-for">
            <?php foreach ($page->images as $key => $img) {
                   $imgCar=$img->width(400, array('quality' => 80, 'upscaling' => true, 'cropping' => false));?>
              <img src="<?=$imgCar->url?>" alt="">
            <?php } ?>
          </div>
          <div class="slider-nav">
            <?php foreach ($page->images as $key => $img) {
                   $imgCar=$img->width(400, array('quality' => 80, 'upscaling' => true, 'cropping' => false));?>
              <img class="slider-nav-product" src="<?=$imgCar->url?>" alt="">
            <?php } ?>
          </div>

            </div>
            <div class="individual-product-container">
               <div class="individual-title-content">
                  <h2><?=$page->title?></h2>
               </div>
               <div class="quantity-container">
                  <div class="quantity-item">
                     <p>Cantidad :</p>
                     <input class="appearance-number-input" type="number" name="quantity-number" id="quantity-number" min="1" max="9999" value="1">
                  </div>
               </div>
               <div class="social-shares">
                  <button class="redes-btn ripple" style="background-color: #4266b2;" data-type="facebook"><img src="<?= $config->urls->templates ?>assets/images/facebook-logo.svg" height="16px" > Compartir</button>
                  <button class="redes-btn ripple" style="background-color: #217415;" data-type="whatsapp"><img src="<?= $config->urls->templates ?>assets/images/whatsapp.svg" height="16px" >Compartir</button>
                  <button class="redes-btn ripple" style="background-color: #c5c5c5;" data-type="e-mail"><img src="<?= $config->urls->templates ?>assets/images/close-envelope.svg" height="16px" >Compartir</button>
               </div>
               <?=str_replace("<p>","<p class='p-individual-text'>",$page->desc)?>

               <?=$page->specifications?>


          <button class="individual-btn">
              <!--<img src="https://dummyimage.com/24x24/000/fff" alt="">-->
              Cotizar
          </button>
            </div>
         </section>
      <!-- section Tab
      <div class="tabs">
        <input type="radio" name="tabs" id="tabone" checked="checked">
        <label for="tabone">Description</label>
        <div class="tab">

        </div>

        <input type="radio" name="tabs" id="tabtwo">
        <label for="tabtwo">specifications</label>
        <div class="tab">

        </div>

        <input type="radio" name="tabs" id="tabthree">
        <label for="tabthree">Reviews</label>
        <div class="tab">

        </div>

            <input type="radio" name="tabs" id="tabfour">
        <label for="tabfour">Downloads</label>
        <div class="tab">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatnon proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
         </div> -->

         <!--  Section Disqus  -->
         <!-- <div id="disqus_thread"></div>
         <script>
           /**
           *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
           *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
           /*
           var disqus_config = function () {
           this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
           this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
           };
           */
           (function() { // DON'T EDIT BELOW THIS LINE
           var d = document, s = d.createElement('script');
           s.src = 'https://mmcite9-1.disqus.com/embed.js';
           s.setAttribute('data-timestamp', +new Date());
           (d.head || d.body).appendChild(s);
           })();
         </script>
         <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript> -->

     </div>
    <?php include('./_subs.php'); ?>
  </main>

<?php include('./_foot.php'); ?>
