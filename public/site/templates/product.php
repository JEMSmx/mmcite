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
            <h3><a href="/products" class="inactive">PRODUCTS</a></h3>
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
                  <div class="availability-content">
                     <p>Availability : </p>
                     <div class="availability-img-content">
                        <img src="https://dummyimage.com/12x12/000/fff" alt="">
                        <span class="availability">In Stock</span>
                     </div>
                  </div>
                  <p class="product-price">$<?=$page->price?></p>
               </div>
               <div class="quantity-container">
                  <div class="quantity-item">
                     <p>Quantity :</p>
                     <input class="appearance-number-input" type="number" name="quantity-number" id="quantity-number" min="1" max="9999" value="1">
                  </div>
                  <div class="add-item">
                     <img src="https://dummyimage.com/32x32/000/fff" alt="">
                     <p>Add to compare</p>
                  </div>
               </div>
               <div class="social-shares">
                  <button class="redes-btn btn-facebook" data-type="facebook"></button>
                  <button class="redes-btn btn-twitter" data-type="twitter"></button>
                  <button class="redes-btn btn-google" data-type="google"></button>
               </div>
               <p class="p-individual-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sequia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
               <ul class="ul-individual-product">
                  <li>
                     <img src="https://dummyimage.com/10x10/000/fff" alt="">
                     <p>Nemo enim ipsam voluptatem quia voluptas</p>
                  </li>
                  <li>
                     <img src="https://dummyimage.com/10x10/000/fff" alt="">
                     <p>Sit aspernatur aut odit aut fugit, sed quia con</p>
                  </li>
                  <li>
                     <img src="https://dummyimage.com/10x10/000/fff" alt="">
                     <p>Equuntur magni dolores eos qui ratione voluptat</p>
                  </li>
                  <li>
                     <img src="https://dummyimage.com/10x10/000/fff" alt="">
                     <p>Nesciun que porro quisquam est, qui dolorem</p>
                  </li>
                  <li>
                     <img src="https://dummyimage.com/10x10/000/fff" alt="">
                     <p>Qsum quia dolor sit amet, consectetur, adupisci ve</p>
                  </li>
          </ul>
          <button class="individual-btn"><img src="https://dummyimage.com/24x24/000/fff" alt=""> Add to car</button>
            </div>
         </section>
      <!-- section Tab -->
      <div class="tabs">
        <input type="radio" name="tabs" id="tabone" checked="checked">
        <label for="tabone">Description</label>
        <div class="tab">
          <?=$page->desc?>
        </div>
        
        <input type="radio" name="tabs" id="tabtwo">
        <label for="tabtwo">specifications</label>
        <div class="tab">
          <?=$page->specifications;?>
        </div>
        
        <input type="radio" name="tabs" id="tabthree">
        <label for="tabthree">Reviews</label>
        <div class="tab">
          <?=$page->reviews?>
        </div>

            <input type="radio" name="tabs" id="tabfour">
        <label for="tabfour">Downloads</label>
        <div class="tab">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatnon proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
         </div>
         
         <!--  Section Disqus  -->
         <div id="disqus_thread"></div>
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
         <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                     
     </div>
    <?php include('./_subs.php'); ?>
  </main>

<?php include('./_foot.php'); ?>