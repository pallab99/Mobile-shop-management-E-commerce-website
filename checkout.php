<?php
ob_start();
// include header.php file
include ('header.php');

?>


<!-- Shopping cart section  -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);  // jodi delete ar jonno request kore thn aita cart ar delete function ke call korbe (item_id soho)
    }

    // save for later
    if (isset($_POST['wishlist-submit'])){
        $Cart->saveForLater($_POST['item_id']);
    }
}
?>
<body style="background-color:#00699661">
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach ($product->getData('cart') as $item) :
                    $cart = $product->getProduct($item['item_id']); // Product.php theke getproduct ke call dibe r getproduct item thke item id deya product display kore dibe
                    $subTotal[] = array_map(function ($item){
                        ?>
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>   <!--item theke item image nibe -->
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>  <!--item theke item name nibe -->
                                <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>  <!--item theke item brand nibe -->
                                <!-- product rating -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                </div>
                                <!--  !product rating-->

                                <!-- product qty -->
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-rale w-25">
                                        <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">   <!-- input hidden rakhbo ,database ar  item id table  thkee ai selected item delete korbo -->
                                        <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="wishlist-submit" class="btn font-baloo text-danger">Save for Later</button>
                                    </form>


                                </div>
                                <!-- !product qty -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    ৳ <span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                                </div>     <!--item theke item price nibe -->
                            </div>
                        </div>
                        <!-- !cart item -->
                        <?php
                        return $item['item_price'];
                    }, $cart); // closing array_map function
                endforeach;
                ?>
            </div>
            <!-- subtotal section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">৳<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                    </div>
                </div>
            </div>
            <!-- !subtotal section-->
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>
<!-- !Shopping cart section  -->


<div class="container">
    <div class="py-5 text-left">
        <h2>Please fill the Checkout from </h2>
    </div>
    <div class="row">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Valid first name is required. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Valid last name is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Username" required="">
                        <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <div class="mb-3">
                    <label for="address2">Mobile Number<span class="text-muted"></span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Mobile or Phone">
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="country">Division</label>
                        <select class="custom-select d-block w-100" id="country" required="">
                            <option value="">Choose...</option>
                            <option>Dhaka Division</option>
                            <option>Sylhet Division</option>
                            <option>Khulna Division</option>
                            <option>Barisal Division</option>
                            <option>Rangpur Division</option>
                            <option>Rajshahi Division</option>
                            <option>Chittagong Division</option>
                            <option>Mymensingh Division</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="zip">Post code</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required="">
                    </div>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                </div>
                <br>
                    <hr class="mb-3">
                    <h4 class="mb-3">Payment Methods</h4>

                <button type="button" class="btn btn-outline-warning btn-lg"><a href="https://docs.google.com/forms/d/e/1FAIpQLScuFhBCHu3PoY7nPALgOxU8TxevgSYtVed54wVaECNoYBRbqA/viewform?usp=sf_link">BKASH PAY</a></button>
                <button type="button" class="btn btn-outline-light btn-lg"><a href="https://docs.google.com/forms/d/e/1FAIpQLSeJESAPH6WdKkQP97xHLES4dNnjeDzNoJ4wsheGcUO971qTlg/viewform?usp=sf_link">NAGAD PAY</a></button>
                <button type="button" class="btn btn-outline-secondary btn-lg">CARDS PAY</button>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit"><a href="goodbye.php" >Continue to checkout</a></button>
            </form>
        </div>
    </div>
    <!--footer started -->

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2021 Mobi-Freake</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="privacy_policy.php">Privacy</a></li>
            <li class="list-inline-item"><a href="ter_con.php">Terms</a></li>
            <li class="list-inline-item"><a href="about_us.php">Support</a></li>
        </ul>
    </footer>
</div>
</body>
</html>