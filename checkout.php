<!doctype html>
<html lang="en">

<head>
    <?php include('include/head.php') ?>
</head>

<body>
    
    <div class="page-loading">
        <img src="assets\images\loader.gif" alt="">
    </div><!--page-loading end-->
    
    <div class="wrapper">

        <?php include('include/header.php') ?><!--header end-->

        

        <section class="pager-section text-center">
            <div class="fixed-bg bg4"></div>
            <div class="container">
                <div class="pager-head">
                    <h2>Checkout</h2>
                    <ul>
                        <li><a href="index.php" title="">Home</a></li>
                        <li><span>Checkout</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="checkout-head">
                    <ul>
                        <li>
                            <h2 class="active"><span>01.</span> Order details</h2>
                        </li>
                        <li>
                            <h2><span>02.</span> Payment Method</h2>
                        </li>
                        <li>
                            <h2><span>03.</span> Finish</h2>
                        </li>
                    </ul>
                </div><!--checkout-head end-->
                <a href="cart.php" title="" class="btn-default2"><i class="fa fa-long-arrow-alt-left"></i>Back to cart</a>
                <div class="row">
                    <div class="col-lg-8">
                        <form class="checkout-form">
                            <div class="ck-form">
                                <h4>Your Profile:</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control half-radius" placeholder="First name *">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="last-name" class="form-control half-radius" placeholder="Last name *">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="phone" class="form-control half-radius" placeholder="Phone number *">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control half-radius" placeholder="Email *">
                                        </div><!--form-group end-->
                                    </div>
                                </div>
                            </div>
                            <div class="ck-form">
                                <h4>Deliver To:</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="city" class="form-control half-radius" placeholder="City *">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control half-radius" placeholder="Address *">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="delivery-date" class="form-control half-radius" placeholder="Delivery day *">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="delivery-time" class="form-control half-radius" placeholder="Delivery time *">
                                        </div><!--form-group end-->
                                    </div>
                                </div>
                            </div>
                            <div class="ck-form">
                                <h4>Add Delivery instructions:</h4>
                                <div class="form-group">
                                    <textarea name="order-note" placeholder="Order note"></textarea>
                                </div><!--form-group end-->
                            </div>
                            <a href="checkout-step2.php" title="" class="btn-default half-radius">Choose payment method <span></span></a>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-details">
                            <h3>your order</h3>
                            <ul class="vl-ord">
                                <li>
                                    <div class="ppc">
                                        <span>Shrimp and oyster soup</span>
                                        <b>2x</b>
                                    </div>
                                    <span>$130.79</span>
                                </li>
                                <li>
                                    <div class="ppc">
                                        <span>Rib-eye steaks</span>
                                        <b>2x</b>
                                    </div>
                                    <span>$31.38</span>
                                </li>
                                <li>
                                    <div class="ppc">
                                        <span>Greek salad</span>
                                        <b>1x</b>
                                    </div>
                                    <span>$34.19</span>
                                </li>   
                            </ul>
                            <ul class="price-tablee">
                                <li>
                                    <h4>Subtotal</h4>
                                    <span>196.35</span>
                                </li>
                                <li>
                                    <h4 class="delivery">Delivery</h4>
                                    <span>$25</span>
                                </li>
                                <li>
                                    <h4 class="total-price">Total</h4>
                                    <span class="total-price">$221.35</span>
                                </li>
                            </ul>
                        </div><!--order-details end-->
                    </div>
                </div>
            </div>
        </section>

        <?php include('include/footer.php') ?>
        <!--footer end-->
        
    </div><!--wrapper end-->


    <script src="assets\js\jquery.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\js\lib\slick\slick.js"></script>
    <script src="assets\js\scripts.js"></script>

</body>
</html>