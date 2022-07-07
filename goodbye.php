<?php

session_start();

ob_start();
// include header.php file
//include('header.php');

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
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




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joy Adhikary</title>


    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
          integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>


</head>

<body>

<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <div class="font-rale font-size-14">
            <a href="" class="px-3 text-dark"><img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/20/fa314a/external-email-interface-kiranshastry-lineal-kiranshastry-1.png"/> support@mobifreak.com.bd </a>
            <a href="" class="px-3 text-dark"><img src="https://img.icons8.com/wired/18/fa314a/phone.png"/>  0933225688</a>
        </div>
        <div class="font-rale font-size-14">
            <a href="login.php" class="px-3 border-right border-left text-dark">Login</a>
            <a href="cart.php" class="px-3 border-right text-dark">Whishlist</a>
            <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('wishlist')); ?></span>
        </div>
    </div>

    <!-- Primary Navigation form bootstrape-->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="#">JOY Store </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <!-- nav bar ar margin jate space pai -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="product.php">Products </a> <!-- fas fa for ^ icone-->
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="cart.php">Cart Items</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="comingsoon.php">Cooming soon</a>
                </li>
            </ul>

            <a class="nav-link" href="#"><img src="https://img.icons8.com/office/25/000000/administrator-male--v1.png"/><span style="color:white"><?php echo "  ". $_SESSION['username']?></span></a>
            <!-- curt and shopping icone -->
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <!-- py top and bouttom pading px left and right pading -->
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>    <!-- uprer line a echo statment ke call dice thn product obj thn getdata method aita cart table ar data return korbe , r amra count korbo koita cart a ashe tai count function a raksi  -->
            </form>

        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<!-- end #header section -->
<body style="background-color:#0775a561">


<div class="container mt-4">
    <h3><span style="color:RED"><?php echo " ". $_SESSION['username']?></span> Sir your order has been confirmed and save as processing</h3>
    <hr>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<!-- Shopping cart section  -->

<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20"><span style="color:black">Your Order ID </span><span style="color:RED"><?php echo "#181921030MF-". $_SESSION['id']?></span></h5>
        <br>
        <h5 class="font-baloo font-size-20"><span style="color:black">Expected delivery : Yours product will be delivered between</span><span style="color:RED"> 7-8 </span><span style="color:black"> working days </span></h5>
    <br>
        <h5 class="font-baloo font-size-20"><span style="color:black">Delivery agent : Yours product will be delivered by </span><span style="color:red">joy e-courier</span></h5>
        <br>
        <h5 class="font-baloo font-size-20"><span style="color:blue" >You have ordered following items </span></h5>
        <br>
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
        </div>
    </div>
</section>
<!-- !Shopping cart section  -->


<?php
// include footer.php file
include ('footer.php');
?>


