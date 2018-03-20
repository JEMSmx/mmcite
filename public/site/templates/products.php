<?php include('./_head.php'); 

include('./_nav.php');  ?>

 <!--  Hero -->
<?php if($page->checkSli==1 && $page->slider->count>0){ ?> 
  <div class="hero-content-products">
    <div class="products-slick">
      <?php foreach ($page->slider as $key => $slide) { ?>
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
            <h3><a href="/productos" class="active">PRODUCTS</a></h3>
      </div>
      <!-- section products -->
      <div class="products">
        <div class="product-title">
          <h2>PRODUCTS</h2>
        </div>
        <div class="products-items-content">
        <?php     
            $categories=$pages->get(1032);
            foreach ($categories->children() as $key => $category) { 
              $refCategory=$pages->find("template=category-product, categoryReference=$category->id");
              $product=$refCategory[0]->children("limit=1");
              if($product->count<1) continue;
               $image=$product[0]->images->first(); 
              if($image)
                $img=$image->width(480, array('quality' => 80, 'upscaling' => true, 'cropping' => false)); ?>
              <div class="products-item-2">
                <a href="<?=$refCategory[0]->url?>"><img src="<?php if($image) echo $img->url ?>" alt="<?=$category->title?>"></a>
                <a href="<?=$refCategory[0]->url?>"><h3><?=$category->title?></h3></a>
                <p></p>
              </div>
        <?php } ?>
        </div>
        <?php if($categories->count>18){ ?>
          <a href="#" class="products-button-bottom-2"><button>VIEW MORE PRODUCTS</button></a>
        <?php } ?>
      </div>
    </div>
    <!-- section banner -->
    <?php include('./_subs.php'); ?>
  </main>

<?php include('./_foot.php'); ?>