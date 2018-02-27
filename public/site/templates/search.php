<?php if($input->urlSegment1)
        $qSearch=str_replace("_", " ", $input->urlSegment1);
      else if($input->get->q)
        $qSearch=$input->get->q;
      else
        $session->redirect('/'); 
      
      $q = $sanitizer->text($qSearch); 
        if($q){
          $input->whitelist('q', $q); 
          $products = $pages->find("template=product, title|desc|reviews|specifications~=$q, limit=60");
        } 
        include('./_head.php'); 

        include('./_nav.php'); ?>
  <!--  Main content -->
  <main class="j-workspace ">
    <div class="j-wrap">
      <!-- section welcome -->
      <div class="menu-a">
            <h3><a href="/" class="inactive">HOME</a></h3>
            <p>&nbsp;&nbsp;>>&nbsp;&nbsp;</p>
            <h3><a href="<?=$page->url.$q?>" class="active">RESULTS</a></h3>
      </div>
      <!-- section products -->
      <div class="products">
        <div class="product-title">
      <?php if($products->count===0){ ?>
        <h2>No products found matching: <?= $qSearch; ?></h2>
      <?php }else{ ?>
        <h2>Search result for: <?= $qSearch; ?></h2>
      <?php } ?>
        </div>
        <div class="products-items-content">
  <?php  foreach ($products as $key => $product) { 
              $image=$product->images->first();
              if($image)
                $img=$image->width(240, array('quality' => 80, 'upscaling' => true, 'cropping' => false)); ?>
          <div class="products-item-2">
            <img src="<?php if($image) echo $img->url ?>" alt="<?=$product->title?>">
            <h3><a href="<?=$page->url?>"><?=$product->title?></a></h3>
            <img class="stars-img" src="https://dummyimage.com/104x16/000/fff" alt="">
            <p>$<?=$product->price?></p>
          </div>
        <?php } ?>
        </div>
        <?php if($products->count()>18){ ?>
          <a href="#" class="products-button-bottom-2"><button>VIEW MORE PRODUCTS</button></a>
        <?php } ?>
      </div>
    </div>
    <!-- section banner -->
    <?php include('./_subs.php'); ?>
  </main>

<?php include('./_foot.php'); ?>