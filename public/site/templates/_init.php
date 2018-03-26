<?php

/**
 * Initialization file for template files 
 * 
 * This file is automatically included as a result of $config->prependTemplateFile
 * option specified in your /site/config.php. 
 * 
 * You can initialize anything you want to here. In the case of this beginner profile,
 * we are using it just to include another file with shared functions.
 *
 */

include_once("./_func.php"); // include our shared functions

if ($page->template == "home" && $input->urlSegment) {
 require("./{$input->urlSegment}.php");
 exit;
}

$cart = new Cart([
    // Maximum item can added to cart, 0 = Unlimited
    'cartMaxItem' => 0,

    // Maximum quantity of a item can be added to cart, 0 = Unlimited
    'itemMaxQuantity' => 99,

    // Do not use cookie, cart items will gone after browser closed
    'useCookie' => true,
  ]);