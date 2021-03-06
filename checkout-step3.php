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

        <?php include('include/header.php') ?>
        <!--header end-->

      

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
                            <h2 class="active"><span>02.</span> Payment Method</h2>
                        </li>
                        <li>
                            <h2 class="active"><span>03.</span> Finish</h2>
                        </li>
                    </ul>
                </div><!--checkout-head end-->
                <div class="success-para text-center">
                    <img src="assets\images\check-circle.png" alt="">
                    <h2>Thank you!</h2>
                    <p>We have accepted your order and have already begun to cook.  Your favorite food will be on your table soon.</p>
                </div><!--success-para end-->
                <div class="order-infoo">
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
                    </div><!--order-details end-->
                    <div class="order-details">
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
                </div><!--order-infoo end-->
                
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