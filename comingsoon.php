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

</head>

<body>

<!-- start #header section-->
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
        <a class="navbar-brand" href="#">Mobi-Freak </a>
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
                    <a class="nav-link" href="comingsoon.php">Coming soon</a>
                </li>
            </ul>
            <!-- curt and shopping icone -->

            <!-- curt and shopping icone -->
            <form action="cart.php" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <!-- py top and bouttom pading px left and right pading -->
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"></span>
                </a>
            </form>
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<!-- end #header section -->

<!--start #main-site-->
<main id="main-site">

    <!--Owl-carousel for bannaer -->
    <!-- it will produce slide effects-->
    <section id="banner-area">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="./assets/Banner3.png" alt="Banner1"
                     width="1920"
                     height="802">
            </div>
            <div class="item">
                <img src="./assets/Banner2.png" alt="Banner2"
                     width="1920"
                     height="802">
            </div>
            <div class="item">
                <img src="./assets/Banner1.png" alt="Banner3"
                     width="1920"
                     height="802">
            </div>
        </div>
    </section>
    <!--!Owl-carousel-->

    <!--Special Price-->
    <section id="special-price">
        <div class="container">
            <h4 class="font-rubik font-size-20">Comming Soon</h4>
            <div id="filters" class="button-group text-right font-baloo font-size-14">
                <!-- bootstrap command for group buttons in right-->
                <button class="btn is-checked" data-filter="*">All Brand</button>
                <button class="btn" data-filter=".Apple">Apple</button>
                <button class="btn" data-filter=".Samsung">Samsung</button>
                <button class="btn" data-filter=".Redmi">Xiaomi</button>
                <button class="btn" data-filter=".Oneplus">Oneplus</button>
            </div>

            <div class="grid">
                <!-- filter only apple .. its work like a class .. if we send a then it sort only a -->
                <div class="grid-item Apple border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/coming%20soon/Iphone_13_pro_max.jpg"  alt="product1" class="img-fluid" width="600"
                                             height="500"> </a>
                            <div class="text-center">
                                <br>
                                <h6>Apple iphone 13 pro max </h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span> <!--fas for filled star and far for empty star -->
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Samsung border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/coming%20soon/galaxy%20tab%20s7.png" alt="product1" class="img-fluid"  width="600"
                                             height="500"></a>
                            <div class="text-center">
                                <br>
                                <br>
                                <h6>Samsung Galaxy tab s7 </h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item  Oneplus border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/coming%20soon/oneplus%209%20rt.png" alt="product1" class="img-fluid"  width="600"
                                             height="500"></a>
                            <div class="text-center">
                                <br>
                                <h6>Oneplus 9  RT</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Apple border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/coming%20soon/Iphone_se20.jpg" alt="product1" class="img-fluid"  width="600"
                                             height="500"></a>
                            <div class="text-center">
                                <br>
                                <h6>Apple iphone SE 2020</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Samsung border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/coming%20soon/galaxy_z_fold.jpg" alt="product1" class="img-fluid"  width="600"
                                             height="500"></a>
                            <div class="text-center">
                                <br>
                                <h6>Samsung Galaxy Z flip </h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item  Redmi border ">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/coming%20soon/mi%20mix%204.png" class="img-fluid" alt="pro1"  width="600"
                                                 height="500"></a>
                                <div class="text-center">
                                    <h6>Xiaomi mi max 4</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item  Oneplus border ">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/coming%20soon/Oneplus9R.jpg" class="img-fluid" alt="pro1"  width="600"
                                                 height="500"></a>
                                <div class="text-center">
                                    <br>
                                    <h6>Oneplus 9 R</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Redmi border ">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/coming%20soon/MI11x.jpg" class="img-fluid" alt="pro1"  width="600"
                                                 height="500"></a>
                                <div class="text-center">
                                    <br>
                                    <h6>Xiaomi MI MIX 11x</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item  Oneplus border "> <!-- ai line ta group korar jonno use hobe .. jkn sort kori tkn samsung border ar under a aita cole jabe -->
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/coming%20soon/One_plus_n10.jpg" class="img-fluid" alt="pro1"  width="600"
                                                 height="500"></a>
                                <div class="text-center">
                                    <br>
                                    <h6>Oneplus N10</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Apple border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/coming%20soon/iphone%2013%20pro.jpg" class="img-fluid" alt="pro1"  width="600"
                                                 height="500"></a>
                                <div class="text-center">
                                    <h6>Apple iphone 13 max  </h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Samsung border  ">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/coming%20soon/galaxy_z_fold.jpg" class="img-fluid" alt="pro1"  width="600"
                                                 height="500"></a>
                                <div class="text-center">
                                    <br>
                                    <h6>Galaxy Z fold II </h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--!Special Price-->


    <section id="blogs">
        <div class="container py-4"> <!-- top and buttom pading 4-->
            <h4 class="font-rubik font-size-20">Latest Blogs</h4>
            <hr>


            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;"> <!-- border 0 karon blog ar border amra cai na-->
                        <h5 class="card-title font-size-17">Tranding News</h5>
                        <img src="./assets/blog/Pixel-6-Pro.jpg" alt="cart image" class="card-img-top"><br>
                        <p class="card-text font-size-14 text-black-50 py-1">The Pixel 6 Pro is finally being put through its paces, having started shipping to people last week. It and the Pixel 6 are Google's first smartphones in years to not use the Sony IMX363, a camera sensor that the company has relied on since the Pixel 3 series.But According to DxOMark's analysis, the Pixel 6 Pro matches the best of recent flagship smartphones.</p>
                        <a href="https://www.gsmarena.com/google_pixel_6_pro-10918.php" class="color-second text-left">Larn More about it </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                        <h5 class="card-title font-size-17">Tranding News</h5>
                        <img src="./assets/blog/9pro5.jpg" alt="cart image" class="card-img-top"><br>
                        <p class="card-text font-size-14 text-black-50 py-1">The smartphone is powered by Qualcomm SM8350 Snapdragon 888 Octa-core  and it comes with 6.7 inches LTPO Fluid2 AMOLED capacitive touchscreen.The resolution of the screen is 1440 x 3216 pixels.The device is pack with 8 GB and 12 GB RAM while the internal storage is 128 GB and 256 GB.</p>
                        <a href="https://www.gizmochina.com/product/oneplus-9-pro/" class="color-second text-left">Larn More about it</a>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                        <h5 class="card-title font-size-17">Tranding News</h5>
                        <img src="./assets/blog/Apple-launch-new-MacBook-Pro-2021-with-M1Pro-M1Max-2-9.jpg" alt="cart image" class="card-img-top"> <br>
                        <p class="card-text font-size-14 text-black-50 py-1"> Apple today announced M1 Pro and M1 Max, the next breakthrough chips for the Mac. Scaling up M1’s transformational and its new  architecture, M1 Pro offers amazing view and performance with industry-leading power efficiency, while M1 Max takes these special power or capabilities to new heights. The CPU in M1 Pro and M1 Max delivers up to 70 percent faster CPU performance than M1</p>
                        <a href="https://www.apple.com/newsroom/2021/10/introducing-m1-pro-and-m1-max-the-most-powerful-chips-apple-has-ever-built/" class="color-second text-left">Larn More about it</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blogs section -->


</main>
<!--End #main-site-->




<!--start #footer-->
</main>
<!--End #main-site-->
<!--start #footer-->

<footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12"> <!-- it will make 3 coloum space we do it bcz bootstrap has 12 coloum space  -->
                <h4 class="font-rubik font-size-20">Mobi-Freak</h4>
                <p class="font-size-14 font-rale text-white-50">Discover the innovative world of Mobi-freak and shop everything  iPhone,Samsung,Xiaomi,1+ and many other</p>
            </div>
            <div class="col-lg-4 col-12"> <!-- it will make 4 coloum space we do it bcz bootstrap has 12 coloum space  col 12 for responsive  -->
                <h4 class="font-rubik font-size-20">Newslatter</h4>
                <form class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Email *"> <!-- class form coltrol for box -->
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap"> <!-- d-flax for display flax proparty  , flex warp for responsive -->
                    <a href="about_us.php" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                    <a href="delivary.php" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                    <a href="privacy_policy.php" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                    <a href="ter_con.php" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="welcome.php" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                    <a href="cart.php" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                    <a href="cart.php" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                    <a href="register.php" class="font-rale font-size-14 text-white-50 pb-1">Regristraton</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright text-center bg-dark text-white py-2"> <!-- custom class , bg dark colour , text center a thakbe , text white hobe -->
    <p class="font-rale font-size-15">&copy; Copyrights 2021. Design By <a href="#" class="color-first">Joy Adhikary</a></p>
</div>


<!-- !start #footer -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Owl Carousel Js file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

<!-- Custom Javascript -->
<script src="index.js"></script>
</body>
</html>
