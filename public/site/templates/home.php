<?php include('./_head.php');

include('./_nav.php');  ?>

  <!--  Hero -->
  <div class="hero-content">
  	<div class="your-class">
  		<?php foreach ($page->slider as $key => $slide) { ?>
  		<div class="hero-item-<?=$key+1?>" style="background-image:url('<?= $slide->fondo->url ?>')">
  			<h2 class="item-title"><?= $slide->title ?></h2>
  			<?= str_replace("<p>", "<p class='item-p'>", $slide->desc) ?>
  			<a href="<?= $slide->buttonLink ?>" class="item-button"><button><?= $slide->buttonTitle ?></button></a>
  		</div>
  		<?php } ?>
  	</div>
  </div>
  <!-- Qualities -->
  <div class="qualities">
  <?php foreach ($page->qualities as $key => $quality) { ?>
  	<div class="qualities-item<?php if($key==1) echo '-2'; ?>">
  		<img src="<?=$quality->img->url?>" alt="<?=$quality->title?>">
  		<div class="qualities-item-text-content">
  			<h3><?=$quality->title?></h3>
  			<p><?=$quality->subtitle?></p>
  		</div>
  	</div>
  <?php } ?>
  </div>
  <!--  Main content -->
  <main class="j-workspace ">
  	<div class="j-wrap">
  		<!-- section welcome -->
  		<div class="welcome">
  			<div class="welcome-content">
  				<h2><?=$page->title1?></h2>
  				<?=$page->textarea1?>
  				<a href="<?=$page->buttonLink?>"><button><?=$page->buttonTitle?></button></a>
  			</div>
          			<div class="welcome-video">
          				<video>
          				    <source src="<?=$page->video->url?>" type="video/mp4">
          				</video>
          			</div>
  					</div>
  					<!-- section products -->
  					<div class="products">
  						<div class="product-title">
  							<h2>Productos destacados</h2>
  						</div>
  						<div class="products-items-content">
                <?php
                  $products=$pages->find("template=product, sort=-published, limit=4");
                  foreach ($products as $key => $product) {
                    $image=$product->images->first();
                    if($image)
                      $img=$image->width(620, array('quality' => 95, 'upscaling' => true, 'cropping' => false)); ?>
  							<div class="products-item">
  								<img src="<?php if($image) echo $img->url; ?>" alt="<?=$product->title?>">
  								<h3><?=$product->title?></h3>
  								<a href="<?=$product->url?>"><button>Más información</button></a>
  							</div>
                <?php } ?>
  						</div>
              <?php if($products->count>4){ ?>
                <a href="/products" class="products-button-bottom"><button>Ver mas productos</button></a>
              <?php } ?>
  					</div>
  				</div>
  				<!-- section banner -->
  				<?php include('./_subs.php'); ?>
  			</main>
<?php include('./_foot.php'); ?>
