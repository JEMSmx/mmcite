<?php

include('./_head.php'); 

include('./_nav.php');  ?>

  <!--  Hero -->
  <div class="hero-content">
  	<div class="your-class">
  		<div class="hero-item-1">
  			<h2 class="item-title">MMCITE 9</h2>
  			<p class="item-p">We value our cities and so we constantly endeavour to make them beautiful wherever they may be</p>
  			<a href="#" class="item-button"><button>GET MORE INFO</button></a>
  		</div>
  		<div class="hero-item-2">
  			<h2 class="item-title">MMCITE 9</h2>
  			<p class="item-p">We value our cities and so we constantly endeavour to make them beautiful wherever they may be</p>
  			<a href="#" class="item-button"><button>GET MORE INFO</button></a>
  		</div>
  		<div class="hero-item-3">
  			<h2 class="item-title">MMCITE 9</h2>
  			<p class="item-p">We value our cities and so we constantly endeavour to make them beautiful wherever they may be</p>
  			<a href="#" class="item-button"><button>GET MORE INFO</button></a>
  		</div>
  		<div class="hero-item-4">
  			<h2 class="item-title">MMCITE 9</h2>
  			<p class="item-p">We value our cities and so we constantly endeavour to make them beautiful wherever they may be</p>
  			<a href="#" class="item-button"><button>GET MORE INFO</button></a>
  		</div>
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
  				<h2>WELCOME TO MMCITE 9</h2>
  				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiipr aesentium voluptatum deleniti atque corru.</p>
  				<p>Quos dolores et quas molestias excepturi sint occaecati cupiditate non pro vident, similique sunt in culpa cui officia deserunt mollitia animi, id estlabo rum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinc tio m libero tempore, cum soluta nobis.</p>
  				<a href="#"><button>READ MORE</button></a>
  			</div>
  			<div class="welcome-video">
  				<video>
  					<source src="<?= $config->urls->templates ?>assets/video/comercial-deportes.ogv" type="video/ogv">
  						<source src="<?= $config->urls->templates ?>assets/video/comercial-deportes.webm" type="video/webm">
  							<source src="<?= $config->urls->templates ?>assets/video/comercial-deportes.mp4" type="video/mp4">
  							</video>
  						</div>
  					</div>
  					<!-- section products -->
  					<div class="products">
  						<div class="product-title">
  							<h2>FEATURED PRODUCTS</h2>
  						</div>
  						<div class="products-items-content">
                <?php
                  $products=$pages->find("template=product, sort=-published, limit=4");
                  foreach ($products as $key => $product) { 
                    $image=$product->images->first();
                    if($image)
                      $img=$image->width(240, array('quality' => 80, 'upscaling' => true, 'cropping' => false)); ?>
  							<div class="products-item">
  								<img src="<?php if($image) echo $img->url; ?>" alt="<?=$product->title?>">
  								<h3><?=$product->title?></h3>
  								<a href="<?=$product->url?>"><button>VIEW DETAILS</button></a>
  							</div>
                <?php } ?>
  						</div>
              <?php if($products->count>4){ ?>
                <a href="/products" class="products-button-bottom"><button>VIEW MORE PRODUCTS</button></a>
              <?php } ?>
  					</div>
  				</div>
  				<!-- section banner -->
  				<?php include('./_subs.php'); ?>
  			</main>
<?php include('./_foot.php'); ?>