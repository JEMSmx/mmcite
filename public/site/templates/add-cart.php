<?php 
	$cart = new Cart([
    // Maximum item can added to cart, 0 = Unlimited
    'cartMaxItem' => 0,

    // Maximum quantity of a item can be added to cart, 0 = Unlimited
    'itemMaxQuantity' => 999,

    // Do not use cookie, cart items will gone after browser closed
    'useCookie' => true,
  ]);
  
	if (isset($input->post->idProduct)) {
		$arrayProducts=$input->post->idProduct;
		foreach ($arrayProducts as $key => $value) {
			if($input->post->quantity[$key]===0) continue;
			$cart->add($input->post->idProduct[$key], $input->post->quantity[$key], [
			  'idModel'  => $input->post->idModel[$key]
			]);
		}
		echo true;
	}else
		echo false;

