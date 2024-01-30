<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If the user is not logged in, redirect them to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MBZTECHNOLOGY</title>
    <!-- favicon -->
    <link rel=icon href="assets/img/favicon.png" sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- nice-select -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- animated slider -->
    <link rel="stylesheet" href="assets/css/animated-slider.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">   

</head>
<body>

<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

<!-- search Popup -->
<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup" id="search-popup">
    <form action="index.html" class="search-form">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search.....">
        </div>
        <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
    </form>
</div>
<!-- //. search Popup -->

<!-- //. sign in Popup -->
<div class="signIn-popup login-register-popup" id="signIn-popup">
    <div class="login-register-popup-wrap">
        <div class="row no-gutters">
            <div class="col-md-6">
                <div class="thumb">
                    <img src="assets/img/others/signin.png" alt="img">
                </div>
            </div>
            <div class="col-md-6 desktop-center-item">
                <form class="riyaqas-form-wrap">
                    <h4 class="widget-title">Sign In</h4>
                    <div class="single-input-wrap">
                        <input type="text" class="single-input">
                        <label class="">E-mail</label>
                    </div>
                    <div class="single-input-wrap">
                        <input type="password" class="single-input">
                        <label class="">Password</label>
                    </div>
                    <div class="d-block check-box-area">
                        <input id="1checkbox" type="checkbox" class="float-left">
                        <label for="1checkbox">Remember me</label>
                        <span class="float-right">Forgot your password?</span>
                    </div>
                    <div class="btn-wrap">
                        <a class="btn btn-green" href="#">Sign In</a>
                        <span>You don't have account?</span>
                        <a class="signup" href="#">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //. sign in Popup End -->

<!-- //. sign up Popup -->
<div class="signUp-popup login-register-popup" id="signUp-popup">
    <div class="login-register-popup-wrap">
        <div class="row no-gutters">
            <div class="col-md-6">
                <div class="thumb">
                    <img src="assets/img/others/signin.png" alt="img">
                </div>
            </div>
            <div class="col-md-6 desktop-center-item">
                <form class="riyaqas-form-wrap">
                    <h4 class="widget-title">Sign Up</h4>
                    <div class="single-input-wrap">
                        <input type="text" class="single-input">
                        <label class="">User Name</label>
                    </div>
                    <div class="single-input-wrap">
                        <input type="text" class="single-input">
                        <label class="">E-mail</label>
                    </div>
                    <div class="single-input-wrap">
                        <input type="password" class="single-input">
                        <label class="">Password</label>
                    </div>
                    <div class="btn-wrap">
                        <a class="btn btn-green" href="#">Sign Up</a>
                        <span>Already have an account?</span>
                        <a class="signup" href="#">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //. sign up Popup End -->

<!-- navbar area start -->
<?php include 'header.php'; ?>
<!-- navbar area end -->

<!-- breadcrumb area start -->
<div class="breadcrumb-area" style="background-image:url(assets/img/page-title-bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    <h1 class="page-title">Checkout</h1>
                    <ul class="page-list">
                        <li><a href="index.php">Home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area End -->

<div class="checkout-page-area pd-top-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="checkout-form-wrap">
                    <div class="checkout-title">
                        <div class="row">
                            <div class="col-xl-5 col-lg-12 col-md-6">
                                <h6>Contact information</h6>
                            </div>  
                            <div class="col-xl-7 col-lg-12 col-md-6 text-xl-right text-lg-left text-md-right">
                                <span>Already have an account?</span>
                                <a id="signIn-btn" href="#">Sign in /</a>
                                <a id="signUp-btn" href="#">Sign Up</a>
                            </div>  
                        </div>
                    </div>
                    <div class="checkout-form">
                        <form class="riyaqas-form-wrap">
                            <div class="row custom-gutters-20">
                                <div class="col-md-12">
                                    <div class="single-input-wrap">
                                        <input type="text" class="single-input">
                                        <label>E-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text" class="single-input">
                                        <label>First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text" class="single-input">
                                        <label>Last Name</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input-wrap">
                                        <input type="text" class="single-input">
                                        <label>Address</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input-wrap">
                                        <input type="text" class="single-input">
                                        <label>City</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <select class="select single-select">
                                          <option value="1">Country</option>
                                          <option value="2">Canada</option>
                                          <option value="3">Japan</option>
                                          <option value="3">China</option>
                                          <option value="3">Nigeria</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text" class="single-input">
                                        <label>Postal code</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text" class="single-input">
                                        <label>Phone</label>
                                    </div>
                                </div>
                                <div class="col-md-12 padding-top-50">
                                    <div class="checkout-title">
                                        <h6>Payment Method</h6>
                                    </div>
                                    <div class="payment-method">
                                        <ul>
                                            <li>
                                                <a href="#"><img src="assets/img/checkout/1.svg" alt="img"></a>
                                                <a href="#"><img src="assets/img/checkout/Flutterwave-New-Logo-2022-Transparent.webp" width="150" alt="img"></a>
                                
                                            </li>
                                            <!-- <li><a href="#">Cash On Delivery</a></li>
                                            <li><a href="#">Bank Account Payment</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 text-right">
                                    <a class="btn btn-green" href="error.php">Place Order</a>
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
            <div class="checkout-form-product">
            <div class="order-table table-responsive">
    <table class="table">
        <tbody>
            <tr>
                <td>
                    <div class="media single-cart-product">
                        <div class="media-body">
                            <span id="selected-tier">Tier: </span><br>
                            <span>Quantity: 1</span>
                        </div>
                    </div>
                </td>
                <td class="cart-product-price text-center">
                    <span id="selected-currency"></span>
                    <span id="selected-price"></span>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="total-shapping-area-wrap">
        <div class="total-shapping-area">
            <div class="charge">
                <span>Subtotal:</span>
                <span id="subtotal" class="amount float-right"></span>
            </div>
            <div class="total-amount">
                <span>Total:</span>
                <span id="total" class="amount float-right"></span>
            </div>
        </div>
    </div>
</div>

</div>
            </div>    
        </div>
    </div>
</div>


<!-- footer area start -->
<?php include 'footer.php'; ?>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

    <!-- jquery -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <!-- popper -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- wow -->
    <script src="assets/js/wow.min.js"></script>
    <!-- slider js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.cssslider.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <!-- waypoint -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- counterup -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- imageloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- nice-select -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- world map -->
    <script src="assets/js/worldmap-libs.js"></script>
    <script src="assets/js/worldmap-topojson.js"></script>
    <script src="assets/js/mediaelement.min.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>
</html>


<script>
// Example: Update the selected item based on user's selection
const selectItemButton = document.getElementById("select-item-button");
selectItemButton.addEventListener("click", function () {
    const selectedItem = {
        tier: "Selected Tier", // Replace with the actual tier
        price: 25.99, // Replace with the actual price
        currency: "€", // Replace with the actual currency symbol
    };

    // Update the selected item details
    const selectedTierElement = document.getElementById("selected-tier");
    const selectedPriceElement = document.getElementById("selected-price");
    const selectedCurrencyElement = document.getElementById("selected-currency");
    const subtotalElement = document.getElementById("subtotal");
    const totalElement = document.getElementById("total");

    selectedTierElement.textContent = "Tier: " + selectedItem.tier;
    selectedPriceElement.textContent = selectedItem.price.toFixed(2);
    selectedCurrencyElement.textContent = selectedItem.currency;
    subtotalElement.textContent = selectedItem.currency + selectedItem.price.toFixed(2);
    totalElement.textContent = selectedItem.currency + selectedItem.price.toFixed(2);
});

</script>

