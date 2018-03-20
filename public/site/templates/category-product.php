<?php include('./_head.php');

include('./_nav.php');  ?>

 <!--  Hero -->
  <?php if($page->categoryReference->checkSli==1 && $page->categoryReference->slider->count>0){ ?> 
  <div class="hero-content-products">
    <div class="products-slick">
      <?php foreach ($page->categoryReference->slider as $key => $slide) { ?>
      <div class="hero-product-item-<?=$key+1?>" style="background-image:url('<?= $slide->fondo->url ?>')">
        <h2 class="item-title"><?= $slide->title ?></h2>
        <?= str_replace("<p>", "<p class='item-p'>", $slide->desc); ?> 
        <?php if($slide->buttonTitle){ ?> 
        <a href="<?= $slide->buttonLink ?>" class="item-button"><button><?= $slide->buttonTitle ?></button></a>
        <?php } ?>
      </div>
      <?php } ?>
     </div>
  </div>
<?php } ?>
  <!--  Main content -->
  <main class="j-workspace ">
    <div class="j-wrap">
      <!-- section welcome -->
      <div class="menu-a">
            <h3><a href="/" class="inactive">HOME</a></h3>
            <p>&nbsp;&nbsp;>>&nbsp;&nbsp;</p>
            <h3><a href="/productos" class="inactive">PRODUCTS</a></h3>
            <p>&nbsp;&nbsp;>>&nbsp;&nbsp;</p>
            <h3><a href="<?= $page->url ?>" class="active"><?= $page->title ?></a></h3>
      </div>
      <!-- section products -->
      <div class="products">
        <div class="product-title">
          <h2><?= $page->title ?></h2>
        </div>
        <div class="products-items-content">
        <?php
            foreach ($page->children() as $key => $product) {
              $image=$product->images->first();
              if($image)
                $img=$image->width(480, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
              <div class="products-item-2">
                <a href="<?=$product->url?>"><img src="<?php if($image) echo $img->url ?>" alt="<?=$product->title?>"></a>
                <a href="<?=$product->url?>"><h3><?=$product->title?></h3></a>
              </div>
        <?php } ?>
        </div>
        <?php if($page->children()->count>18){ ?>
          <a href="#" class="products-button-bottom-2"><button>VIEW MORE PRODUCTS</button></a>
        <?php } ?>
      </div>
    </div>
    <!-- section banner -->
    <?php include('./_subs.php'); ?>
  </main>

<?php include('./_foot.php'); ?>
