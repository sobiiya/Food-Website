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
                            <h2 class="active"><span>02.</span> Payment Method</h2>
                        </li>
                        <li>
                            <h2><span>03.</span> Finish</h2>
                        </li>
                    </ul>
                </div><!--checkout-head end-->
                <a href="checkout.php" title="" class="btn-default2"><i class="fa fa-long-arrow-alt-left"></i>Back to Order Details</a>
                <div class="row mt-40">
                    <div class="col-lg-8">
                        <form class="checkout-form mt-0">
                            <div class="payment-optionz">
                                <div class="credit-card-payment">
                                    <div class="cd-head">
                                        <h4>
                                            <img src="assets\images\icons\check-circle.svg" alt="">
                                            Credit card
                                        </h4>
                                        <h2 class="accept1">We accept</h2>
                                        <img src="assets/images/pay.jpg" class="accept2">
                                        <img src="assets/images/pay2.png" class="accept3">
                                          <img src="assets/images/pay3.jpg" class="accept3">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Card number</label>
                                                <input type="number" name="credit" placeholder="xxxx xxxx xxxx xxxx" class="form-control">
                                            </div><!--form-group end-->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Expiration date</label>
                                                <input type="number" name="month" placeholder="mm" class="form-control">
                                            </div><!--form-group end-->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="opacity-0">year</label>
                                                <input type="number" name="year" placeholder="yy" class="form-control">
                                            </div><!--form-group end-->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Security code</label>
                                                <input type="number" name="ccv" placeholder="CVV" class="form-control">
                                            </div><!--form-group end-->
                                        </div>
                                    </div>
                                </div><!--credit-card-payment end-->
                                <div class="other-pay-optz">
                                    <h4><span class="circle-box"></span><a href="#" title="">PayPal</a></h4>
                                </div><!--other-pay-optz end-->
                                <div class="other-pay-optz">
                                    <h4><span class="circle-box"></span><a href="#" title="">Pay with cash</a></h4>
                                </div><!--other-pay-optz end-->
                            </div><!--payment-optionz end-->
                            <a href="checkout-step3.php" title="" class="btn-default">Confirm Order <span></span></a>
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