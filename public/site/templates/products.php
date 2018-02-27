<?php

include('./_head.php'); 

include('./_nav.php');  ?>

 <!--  Hero -->
  <div class="hero-content-products">
    <div class="products-slick">
      <div class="hero-product-item-1">
        <h2 class="item-title">PRODUCTS</h2>
      </div>
      <div class="hero-product-item-2">
        <h2 class="item-title">PRODUCTS</h2>
      </div>
      <div class="hero-product-item-3">
        <h2 class="item-title">PRODUCTS</h2>
      </div>
      <div class="hero-product-item-4">
        <h2 class="item-title">PRODUCTS</h2>
      </div>
     </div>
  </div>
  <!--  Main content -->
  <main class="j-workspace ">
    <div class="j-wrap">
      <!-- section welcome -->
      <div class="menu-a">
            <h3><a href="index.html" class="inactive">HOME</a></h3>
            <p>&nbsp;&nbsp;>>&nbsp;&nbsp;</p>
            <h3><a href="#" class="active">PRODUCTS</a></h3>
      </div>
      <!-- section products -->
      <div class="products">
        <div class="product-title">
          <h2>FEATURED PRODUCTS</h2>
        </div>
        <div class="products-items-content">
  <?php $products=$pages->find("template=product, sort=-published, limit=4");
            foreach ($products as $key => $product) { 
              $image=$product->images->first();
              if($image)
                $img=$image->width(240, array('quality' => 80, 'upscaling' => true, 'cropping' => false)); ?>
          <div class="products-item-2">
            <img src="<?php if($image) echo $img->url ?>" alt="<?=$product->title?>">
            <h3><a href="<?=$productd->url?>"><?=$product->title?></a></h3>
            <img class="stars-img" src="https://dummyimage.com/104x16/000/fff" alt="">
            <p>$<?=$product->price?></p>
          </div>
        <?php } ?>
        </div>
        <?php if($products->count>18){ ?>
          <a href="#" class="products-button-bottom-2"><button>VIEW MORE PRODUCTS</button></a>
        <?php } ?>
      </div>
    </div>
    <!-- section banner -->
    <?php include('./_subs.php'); ?>
  </main>

<?php include('./_foot.php'); ?>