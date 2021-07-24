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
                    <h2>Restaurants and cafes</h2>
                    <ul>
                        <li><a href="index.php" title="">Home</a></li>
                        <li><span>Restaurants and cafes</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-md-1 order-sm-1 order-col-1">
                        <div class="sidebar left-sidebar">
                            <form>
                                <div class="widget widget-filter filter-div ">
                                    <h3 class="widget-title">Filter</h3>
                                    <ul>
                                        <li>
                                            <label class="label side-label">Beverages
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label side-label">Burgers
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label side-label">Meat & Steaks
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label side-label">Pastry
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label side-label">Pasta
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label side-label">Pizza
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label side-label">Sandwiches
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label side-label">Seafood
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label side-label">Soup & Salads
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label side-label">Sushi
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label side-label">Vegetarian Food
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div><!--widget-filter end-->
                                <div class="widget widget-tags">
                                    <h3 class="widget-title">Tags</h3>
                                    <ul>
                                        <li><a href="#" title="">Fish</a></li>
                                        <li><a href="#" title="">Grill</a></li>
                                        <li><a href="#" title="">Beer</a></li>
                                        <li><a href="#" title="">Chicken</a></li>
                                        <li><a href="#" title="">Beef</a></li>
                                        <li><a href="#" title="">Hot</a></li>
                                        <li><a href="#" title="">Vegetables</a></li>
                                        <li><a href="#" title="">Chilly</a></li>
                                        <li><a href="#" title="">Fruits</a></li>
                                    </ul>
                                </div><!--widget-tags end-->
                                <!-- <div class="widget widget-price-filter">
                                    <h3 class="widget-title">Rating</h3>
                                    <div id="slider-range"></div>
                                    <div class="price-bx">
                                        <input type="text" id="amount" readonly="">
                                    </div>
                                    <div class="clearfix"></div>
                                </div> -->
                                <!--widget-filter end-->
                                <!-- <button type="submit" class="btn-default w-100">Search <span></span></button> -->
                                <div class="step-div">
                                    <h2 class="step-heading">Get Your Favourite Food in 4 Easy Steps</h2>
                                     <div class="steps-div"> 
                                     <ol class="list-group vertical-steps"></i>
                                     
                                        <li class="list-group-item completed"><span>Choose Your Location</span></li>
                                        <li class="list-group-item completed"><span>Choose Restaurant</span</li>
                                        <li class="list-group-item completed"><span>Make Your Order</span</li>
                                        <li class="list-group-item completed"><span>Food Is On The Way</span</li>
    
                                    </ol>
                                     </div>     
                              
                                    <!-- <div class="steps">
                                        <div class="one">
                                        <p class="step-1">1 </p>
                                        </div>
                                        
                                        <p class="description-s">Choose Your Location</p>
                                    </div>
                                    <div class="steps">
                                   
                                    <div class="one">
                                        <p class="step-1">2 </p>
                                        </div>
                                        
                                        <p class="description-s">Choose Restaurant</p>
                                    </div>
                                    <div class="steps">
                                   
                                    <div class="one">
                                        <p class="step-1">3 </p>
                                        </div>
                                        
                                        <p class="description-s">Make Your Order</p>
                                    </div>
                                    <div class="steps">
                                  
                                    <div class="one">
                                        <p class="step-1">4 </p>
                                        </div>
                                        
                                        <p class="description-s">Food Is On The Way</p>
                                    </div> -->
                              
                                </div>
                            </form>
                        </div><!--sidebar end-->
                    </div>
                    <div class="col-lg-9">
                        <div class="search-prod">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="search" placeholder="Search" class="form-control half-radius">
                                    <button type="submit" class="btn-default half-radius">Search Restaurant</button>
                                </div>
                            </form>
                        </div><!--search-prod end-->
                        <div class="listing-products">
                            <a href="restaurant-details.php#menu-r">
                            <div class="listing-product " data-aos="zoom-in-up">
                                <div class="product-thumb" >
                                    <img src="assets\images\resources\listing1.jpg" alt="" class="w-100">
                                    <div class="cl-logo">
                                        <img src="assets\images\resources\logo1.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3><a href="restaurant-details.php" title="">Vegetarian Fresh life</a></h3>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>Salads, soups, sneaks, burgers, drinks, seafood,  grill, fish,  vegetarian menu, wine, hot meals, steaks...</p>
                                    <ul class="btm">
                                        <li><a href="#" title="">Restaurant</a></li>
                                        <li><span><b class="statuss"></b>Open now</span></li>
                                    </ul>
                                    <a href="restaurant-details.php#menu-r" title="" class="view-menu view-m">View Menu <i class="fa fa-long-arrow-alt-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div><!--listing-product end-->
                            </a>
                            <div class="listing-product" data-aos="zoom-in-up">
                                <a href="restaurant-details.php#menu-r">
                                <div class="product-thumb">
                                    <img src="assets\images\resources\listing2.jpg" alt="" class="w-100">
                                    <div class="cl-logo">
                                        <img src="assets\images\resources\logo2.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3><a href="restaurant-details.php" title="">beer power</a></h3>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>Salads, soups, sneaks, burgers, drinks, seafood,  grill, fish,  vegetarian menu, wine, hot meals, steaks...</p>
                                    <ul class="btm">
                                        <li><a href="#" title="">Pub</a></li>
                                        <li><span><b class="statuss"></b>Open now</span></li>
                                    </ul>
                                    <a href="restaurant-details.php#menu-r" title="" class="view-menu view-m">View Menu <i class="fa fa-long-arrow-alt-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                                </a>
                            </div><!--listing-product end-->
                            <div class="listing-product" data-aos="zoom-in-up">
                                <a href="restaurant-details.php#menu-r">
                                <div class="product-thumb">
                                    <img src="assets\images\resources\listing3.jpg" alt="" class="w-100">
                                    <div class="cl-logo">
                                        <img src="assets\images\resources\logo3.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3><a href="restaurant-details.php" title="">Hot pastry cafe</a></h3>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>Salads, soups, sneaks, burgers, drinks, seafood,  grill, fish,  vegetarian menu, wine, hot meals, steaks...</p>
                                    <ul class="btm">
                                        <li><a href="#" title="">Cafe</a></li>
                                        <li><span><b class="statuss"></b>Open now</span></li>
                                    </ul>
                                    <a href="restaurant-details.php#menu-r" title="" class="view-menu view-m">View Menu <i class="fa fa-long-arrow-alt-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                                </a>
                            </div><!--listing-product end-->
                            <div class="listing-product" data-aos="zoom-in-up">
                                <a href="restaurant-details.php#menu-r">
                                <div class="product-thumb">
                                    <img src="assets\images\resources\listing4.jpg" alt="" class="w-100">
                                    <div class="cl-logo">
                                        <img src="assets\images\resources\logo4.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3><a href="restaurant-details.php" title="">Sushi Taste</a></h3>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>Salads, soups, sneaks, burgers, drinks, seafood,  grill, fish,  vegetarian menu, wine, hot meals, steaks...</p>
                                    <ul class="btm">
                                        <li><a href="#" title="">Asian Food</a></li>
                                        <li><span><b class="statuss"></b>Open now</span></li>
                                    </ul>
                                    <a href="restaurant-details.php#menu-r" title="" class="view-menu view-m">View Menu <i class="fa fa-long-arrow-alt-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                                </a>
                            </div><!--listing-product end-->
                            <div class="listing-product" data-aos="zoom-in-up">
                                <a href="restaurant-details.php#menu-r">
                                <div class="product-thumb">
                                    <img src="assets\images\resources\listing5.jpg" alt="" class="w-100">
                                    <div class="cl-logo">
                                        <img src="assets\images\resources\logo5.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3><a href="restaurant-details.php" title="">bulgarian restaurant</a></h3>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>Salads, soups, sneaks, burgers, drinks, seafood,  grill, fish,  vegetarian menu, wine, hot meals, steaks...</p>
                                    <ul class="btm">
                                        <li><a href="#" title="">Restaurant</a></li>
                                        <li><span><b class="statuss closed"></b>Closed</span></li>
                                    </ul>
                                    <a href="restaurant-details.php#menu-r" title="" class="view-menu view-m">View Menu <i class="fa fa-long-arrow-alt-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                                </a>
                            </div><!--listing-product end-->
                        </div><!--listing-products end-->
                        <div class="load-more mt-40 text-center">
                            <a href="#" title="" class="btn-default">Load More <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include('include/footer.php') ?><!--footer end-->
        
    </div><!--wrapper end-->


    <script src="assets\js\jquery.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\js\lib\slick\slick.js"></script>
    <script src="assets\js\jquery-ui.js"></script>
    <script src="assets\js\scripts.js"></script>
    <script src="assets\js\aos.js"></script>

    <script>
        $(function(){
            AOS.init({
                duration: 1000
            });
        });

        $(window).on('load',function(){
            AOS.refresh();
        });

//   AOS.init({
//       offset: 300,
//       duration:1000
//   });
</script>
</body>
</html>