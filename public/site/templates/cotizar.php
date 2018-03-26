<?php 
include('./_head.php'); 

include('./_nav.php');  ?>
  <main class="j-workspace ">
      <div class="j-wrap">
			<!-- section welcome -->
			<div class="menu-a">
            <h3><a href="index.html" class="inactive">INICIO</a></h3>
            <p>&nbsp;&nbsp;>>&nbsp;&nbsp;</p>
            <h3><a href="/productos" class="inactive">PRODUCTOS</a></h3>
            <p>&nbsp;&nbsp;>>&nbsp;&nbsp;</p>
            <h3><a href="/cotizar" class="active"><?=$page->title?></a></h3>
			</div>
         <!-- section individual-product  -->
         <section class="quotation">
				<h2 class="h2-quotation-title">QUOTATION</h2>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, excepturi magnam eos sequi unde, id dolorum neque animi temporibus, sapiente enim dignissimos ab iste accusamus velit repudiandae. Provident, harum reprehenderit?</p>
            <section class="quotation-container">
					<table>
						<tbody>
							<tr>
								<th>Product</th>
								<th class="th-description">Description</th>
								<th>quantity</th>
							</tr>
							<?php $allItems = $cart->getItems();
								foreach ($allItems as $idItem => $items) {
								  foreach ($items as $item) { 
								  	$product=$pages->get($item['attributes']['idModel']); ?>
							<tr>
								<th><img src="<?=$product->img->url ?>" alt=""></th>
								<th class="th-description"><p><?=$product->title ?></p></th>
								<th class="th-quantity">
									<input type="number" name="quantity" id="quantity-input" min="1" max="9999" value="<?=$item['quantity']?>">
								</th>
							</tr>
						<?php  }
								} ?>
						</tbody>
					</table>
					<table class="quotation-table-responsive">
						<tbody>
							<tr>
								<th>Product</th>
							</tr>
						<?php $allItems = $cart->getItems();
								foreach ($allItems as $idItem => $items) {
								  foreach ($items as $item) { 
								  	$product=$pages->get($item['attributes']['idModel']); ?>
							<tr>
								<th><img src="<?=$product->img->url ?>" alt=""></th>
							</tr>
							<tr>
								<th class="th-description"><p><?=$product->title ?></p></th>
							</tr>
							<tr>
								
								<th>Quantity:</th>
								<th class="th-quantity">
									<input type="number" name="quantity-input" id="quantity-input" min="1" max="9999" value="<?=$item['quantity']?>">
								</th>
							</tr>
						<?php  }
								} ?>
						</tbody>
					</table>
					<form action="#" method="POST" class="quotation-form-content" id="form-quotation">
						<div class="quotation-input-content">
							<label for="name">Name</label>
							<input type="text" name="name" id="name">
						</div>
						<div class="quotation-input-content">
							<label for="company">Company</label>
							<input type="text" name="company" id="company">
						</div>
						<div class="quotation-input-content">
							<label for="email">Email</label>
							<input type="email" name="email" id="email">
						</div>
						<div class="quotation-input-content">
							<label for="phone">Phone</label>
							<input type="number" name="phone" id="phone">
						</div>
						<div class="quotation-input-content">
							<label for="city">City</label>
							<input type="text" name="city" id="city">
						</div>
						<div class="quotation-input-content">
							<label for="comments">Comments</label>
							<textarea name="comments" id="comments" cols="30" rows="10"></textarea>
						</div>
						<button type="submit">QUOTATION</button>
					</form>
				</section>
			</section>
			                         
	   </div>
  	<!-- section banner -->
  		<?php include('./_subs.php'); ?>
  			</main>
<?php include('./_foot.php'); ?>