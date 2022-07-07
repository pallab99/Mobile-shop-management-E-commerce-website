

<!-- Most sold items -->

<?php

shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){ // aita request method ke call korbe ( jodi amra add to cart buttuon a press kori tkn
    if (isset($_POST['top_sale_submit'])){ // only for top sale button
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']); // cart a userid r itemid store korbo , post buttun name
    }
}
$in_cart = $Cart->getCartId($product->getData('cart'));
?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Most sold items</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) { ?>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center"> <!-- top sale(index ) page theke product page a redirect korbe jate sob details dekty pari , item_id dekhe bujbo konta jacche ,valuse hocche item_id -->
                            <h6><?php echo  $item['item_name'] ?? "Unknown";  ?></h6>  <!-- item variable ar key item name pass korle sob company ar jonnoi ashbe database table theke , default value unknown set korsi   -->
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>  <!--fas for filld star and far for empty star -->
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>৳ <?php echo $item['item_price'] ?? '0' ; ?></span> <!-- aitai o akta price print na kore, database theke iteam_price  ar maddome call kore database theke price pass korty parbo ,defalult 0 -->
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>"> <!--input data show korbo nah tai hidden,, upr theke item id pabo  -->
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['item_id'], $in_cart ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';// in array search korbe oi product ke jodi age theke oi product cart a thake tobe abr add korbe nah
                                }else{
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } // closing foreach function ?>
        </div>
        <!-- !owl carousel -->
    </div>
</section>
<!-- !Top Sale -->