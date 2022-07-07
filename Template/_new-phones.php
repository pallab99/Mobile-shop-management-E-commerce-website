

<!--Start New Phones -->
<?php
shuffle($product_shuffle);
// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['new_phones_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<section id="new-phones">   <!-- akta new section add korlam ajonno amra section tag use kortyce -->
    <div class="container">
        <h4 class="font-rubik font-size-20">New Phones</h4> <!-- new phone nam a section banailam-->
        <hr>

        <!--Owl carousel-->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) { ?>
                <div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center"><!-- New phone (index ) page theke product page a redirect korbe jate sob details dekty pari , item_id dekhe bujbo konta jacche ,valuse hocche item_id -->
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
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>'; // in array search korbe oi product ke jodi age theke oi product cart a thake tobe abr add korbe nah
                                }else{
                                    echo '<button type="submit" name="new_phones_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
            <?php } // closing foreach function ?>
        </div>
    </div>
</section>
<!-- End New Phones -->

