<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php

/*  include cart items if it is not empty */
count($product->getData('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');

/*  ? diye if cart not empty thn cart tempalte ke call dibo (:) aita diye else bujacche . jodi empty theke tobe not found   */
/*  include cart items if it is not empty */

/*   include wishlist items if it is not empty */
count($product->getData('wishlist')) ? include ('Template/_wishilist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');
/*   include wishlist items if it is not empty */


/*  include top sale section */
include ('Template/_new-phones.php');
/*  include top sale section */

?>

<?php
// include footer.php file
include ('footer.php');
?>

