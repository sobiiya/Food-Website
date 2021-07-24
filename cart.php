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
                    <h2>Cart</h2>
                    <ul>
                        <li><a href="index.php" title=""  >Home</a></li>
                        <!-- <li><img src="assets\images\icons\cart.svg" alt="" class="cart-img"><span>Cart</span></li> -->
                          <li><span>Cart</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container cart-section">
                <div class="cart-page">
                    <table>
                        <thead class="head-clr">
                            <tr>
                                <th class="teble-h">Product</th>
                                <th class="teble-h" id="q-h">Quantity</th>
                                <th class="teble-h">Price</th>
                                <th class="teble-h">Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="cart-prod-info d-flex flex-wrap align-items-center">
                                        <img src="assets\images\resources\cart1.jpg" alt="">
                                        <div class="cart-pro-info info-p">
                                            <h4><a href="#" title="" class="table-data">Shrimp and oyster soup</a></h4>
                                            <span class="table-data">200 g / 354 kcal</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="item-counter">
                                        <div class="quantity">
                                            <button class="plus-btn" type="button" name="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            <input type="text" name="name" value="1" class="table-data">
                                            <button class="minus-btn" type="button" name="button">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="price table-data">$65.39</span>
                                </td>
                                <td>
                                    <strong class="sub-total table-total">$130.78</strong>
                                </td>
                                <td>
                                    <a href="#" title="" class="cross-img"><img src="assets\images\icons\icon-close.svg" alt=""></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="cart-prod-info d-flex flex-wrap align-items-center">
                                        <img src="assets\images\resources\cart2.jpg" alt="">
                                        <div class="cart-pro-info info-p">
                                            <h4><a href="#" title="" class="table-data">Rib-eye steaks</a></h4>
                                            <span class="table-data">200 g / 354 kcal</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="item-counter">
                                        <div class="quantity">
                                            <button class="plus-btn" type="button" name="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            <input type="text" name="name" value="1" class="table-data">
                                            <button class="minus-btn" type="button" name="button">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="price table-data">$65.39</span>
                                </td>
                                <td>
                                    <strong class="sub-total table-total">$130.78</strong>
                                </td>
                                <td>
                                    <a href="#" title="" class="cross-img"><img src="assets\images\icons\icon-close.svg" alt=""></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="cart-prod-info d-flex flex-wrap align-items-center">
                                        <img src="assets\images\resources\cart3.jpg" alt="">
                                        <div class="cart-pro-info info-p " id="p-width">
                                            <h4><a href="#" title=""  class="table-data">Greek salad</a></h4>
                                            <span  class="table-data">200 g / 354 kcal</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="item-counter">
                                        <div class="quantity">
                                            <button class="plus-btn" type="button" name="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            <input type="text" name="name" value="1"  class="table-data">
                                            <button class="minus-btn" type="button" name="button">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="price table-data">$65.39</span>
                                </td>
                                <td>
                                    <strong class="sub-total table-total">$130.78</strong>
                                </td>
                                <td>
                                    <a href="#" title="" class="cross-img"><img src="assets\images\icons\icon-close.svg" alt=""></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row justify-content-end align-items-center">
                        <div class="col-lg-8">
                            <div class="update-cart">
                                <a href="#" title=""><i class="fas fa-sync-alt"></i> Update cart</a>
                            </div>
                            <div class="coupan-code">
                                <div class="form-group">
                                    <input type="text" name="coupan" placeholder="Coupon number" class="form-control half-radius " id="coupon-field">
                                    <button type="submit" class="btn-default" id="btn-apply">Apply <span></span></button>
                                </div>
                            </div><!--coupan-code end-->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="price-table" id="coupons-div">
                                <p class="coupon">Offers & Coupons</p>
                                <p class="coupon-list">50% Off for first Order</p>
                                <p class="coupon-list">Get Upto 20% off on your Favourite Pizza</p>
                                <p class="coupon-list">Get upto 20% above Rs.499 Above</p>
                                <p  class="coupon-list">Get Free Delivery above Rs.399</p>
                            </div>   

                        </div>
                        <div class="col-lg-6">
                            <div class="price-table">
                                <ul>
                                    <li>
                                        <h4>Subtotal</h4>
                                        <span>196.35</span>
                                    </li>
                                    <li>
                                        <h4 class="delivery">Delivery</h4>
                                        <span>$25</span>
                                    </li>
                                    <li>
                                        <h4 class="delivery">Discount</h4>
                                        <span>$10</span>
                                    </li>
                                    <li>
                                        <h4 class="total-price">Total</h4>
                                        <span class="total-price">$221.35</span>
                                    </li>
                                </ul>
                                <a href="checkout.php" title="" class="btn-default text-center w-100">Checkout <span></span></a>
                            </div><!--price-table end-->
                        </div>
                    </div>
                </div><!--cart-page end-->
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