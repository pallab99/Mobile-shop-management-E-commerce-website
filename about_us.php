<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Joy Adhikary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="about_us.css">


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>


<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <div class="font-rale font-size-14">
            <a href="" class="px-3 text-dark"><img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/20/fa314a/external-email-interface-kiranshastry-lineal-kiranshastry-1.png"/> support@mobifreak.com.bd </a>
            <a href="" class="px-3 text-dark"><img src="https://img.icons8.com/wired/18/fa314a/phone.png"/>  0933225688</a>
        </div>
        <div class="font-rale font-size-14">
            <a href="login.php" class="px-3 border-right border-left text-dark">Login</a>
            <a href="cart.php" class="px-3 border-right text-dark">Whishlist</a>
        </div>
    </div>

    <!-- Primary Navigation form bootstrape-->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="#">Mobi_Freak</a>
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
<body>

<section class="team-section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h1>Our Team</h1>
                <p> chill bro </p>
            </div>
        </div>
        <div class="row">
            <div class="team-items">
                <div class="item">
                    <img src="./assets/about_us/joy.jpg" alt="team" />
                    <div class="inner">
                        <div class="info">
                            <h5>Joy Adhikary</h5>
                            <p> DESIGNER & PROGRAMMER</p>
                            <div class="social-links">
                                <a href="https://www.facebook.com/JOY.ADHIKARY.071" target="_blank"><span class="fa fa-facebook"></span></a>
                                <a href=""><span class="fa fa-twitter"></span></a>
                                <a href="https://www.instagram.com/"><span class="fa fa-instagram"></span></a>
                                <a href="https://www.linkedin.cn/in/joy-adhikary-7b44461b7/"><span class="fa fa-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./assets/about_us/pallab.jpg" alt="team" />
                    <div class="inner">
                        <div class="info">
                            <h5>Pallab Majumder</h5>
                            <p><br>PROGRAMMER</p>
                            <div class="social-links">
                                <a href="https://www.facebook.com/pallab.majumdar.99" target="_blank"><span class="fa fa-facebook"></span></a>
                                <a href="https://twitter.com/Pallab06275064"><span class="fa fa-twitter"></span></a>
                                <a href="https://www.instagram.com/pallab.majumdar/"><span class="fa fa-instagram"></span></a>
                                <a href="https://www.linkedin.com/in/pallab-majumdar-a4a91714a/"><span class="fa fa-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./assets/about_us/habib1.jpg" alt="team" />
                    <div class="inner">
                        <div class="info">
                            <h5>Habib  </h5>
                            <p><br>PROGRAMMER</p>
                            <div class="social-links">
                                <a href="https://www.facebook.com/habibullah.bashar.1" target="_blank"><span class="fa fa-facebook"></span></a>
                                <a href="https://twitter.com/Mh_Habib_07"><span class="fa fa-twitter"></span></a>
                                <a href="https://www.instagram.com/the_habib9/"><span class="fa fa-instagram"></span></a>
                                <a href="https://www.linkedin.com/in/mr-habib-3537261a7/"><span class="fa fa-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./assets/about_us/mitu.jpg" alt="team" />
                    <div class="inner">
                        <div class="info">
                            <h5>Mafuja Akter Mitu</h5>
                            <p><br> Designer</p>
                            <div class="social-links">
                                <a href="https://www.facebook.com/profile.php?id=100010988084894&sk=friends_mutual" target="_blank"><span class="fa fa-facebook"></span></a>
                                <a href=""><span class="fa fa-twitter"></span></a>
                                <a href=""><span class="fa fa-instagram"></span></a>
                                <a href=""><span class="fa fa-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
