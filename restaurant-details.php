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
                    <h2>bulgarian restaurant</h2>
                    <ul>
                        <li><a href="index.php" title="">Home</a></li>
                        <li><a href="restaurants.php" title="">Restaurants</a></li>
                        <li><span>bulgarian restaurant</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="restaurant-details">
                    <div class="food-thumbail-large">
                        <img src="assets\images\resources\food-large.jpg" alt="" class="w-100">
                        <div class="pl-logo">
                            <!-- <img src="assets\images\resources\logo5.png" alt="" id="logo5-img"> -->
                        </div>
                    </div>
                    <div class="food-info">
                        <ul class="meta">
                            <li>
                            <i class="far fa-calendar-alt icon-r" ></i>
                                <p  class="r-detail">Monday - Sunday</p>
                            </li>
                            <li>
                            <i class="far fa-clock icon-r"></i>
                                <p class="r-detail"> 9:00am - 11:00pm</p>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt icon-r"></i>
                                <p class="r-detail"> B Wing,Andheri - Kurla Rd,Andheri(E)400059</p>
                                <!-- <span>3 Reviews</span>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul> -->
                            </li>
                        </ul>
                        <h4>Exercitation pariatur ipsum magna occaecat quis eiusmod magna. Non nulla commodo laborum magna id.</h4>
                        <p>Consequat excepteur eu veniam sunt duis ut do pariatur voluptate ex fugiat. Sit exercitation occaecat exercitation officia enim exercitation sunt. Exercitation pariatur ipsum magna occaecat quis eiusmod magna. Non nulla commodo laborum magna id. Deserunt irure amet adipisicing adipisicing veniam nostrud Lorem anim non voluptate culpa sit. Et veniam dolor reprehenderit non. Ut laboris pariatur tempor pariatur pariatur ad enim veniam duis. Exercitation sint eiusmod amet reprehenderit ipsum</p>
                    </div>
                </div><!--restaurant-details end-->
            </div>
        </section>

        <section class="sec-block p-0" id="menu-r">
            <div class="container">
                <div class="section-title text-center">
                    <span class="">Amazing taste </span>
                    <h2 class="text-capitalize">Menu</h2>
                </div><!--sec-title end-->
                <div class="popular-dishes style2 text-center">
                    <div class="options">
                        <div class="option-isotop">
                            <ul id="filter" class="option-set filters-nav" data-option-key="filter">
                                <li><a class="selected" data-option-value=".meat">Meat</a></li>
                                <li><a data-option-value=".pizza">Pizza</a></li>
                                <li><a data-option-value=".fastfood">Fastfood</a></li>
                                <li><a data-option-value=".sushi">Sushi</a></li>
                                <li><a data-option-value=".vegitarian">Vegitarian food</a></li>
                            </ul>
                        </div>
                    </div><!--options end-->
                    <div class="row">
                        <div class="masonary">
                            <div class="col-lg-4 col-md-4 col-sm-6 meat pizza">
                                <div class="pd-item test">
                                    <div class="pd-thumbnail">
                                        <img src="assets\images\resources\blg1.jpg" alt="" class="w-100 img-r">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="#" title="">Rib-eye Steaks</a> </h3>
                                    <p>Few things are better than a properly grilled steak.</p>
                                    <strong class="semi-bold">$15.69</strong>
                                    <a href="cart.php" title="" class="btn-default gradient-bg half-radius height-2 btn-r">Add to cart <span></span></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 meat fastfood">
                                <div class="pd-item test">
                                    <div class="pd-thumbnail">
                                        <img src="assets\images\resources\blg2.jpg" alt="" class="w-100 img-r ">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="#" title="">Top Sirloin Steaks</a> </h3>
                                    <p>Few things are better than a properly grilled steak.</p>
                                    <strong class="semi-bold">$25.39</strong>
                                    <a href="cart.php" title="" class="btn-default gradient-bg half-radius height-2 btn-r" id="cart-btn ">Add to cart <span></span></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 meat vegitarian">
                                <div class="pd-item test">
                                    <div class="pd-thumbnail">
                                        <img src="assets\images\resources\blg3.jpg" alt="" class="w-100 img-r">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="#" title="">T-Bone Steaks</a> </h3>
                                    <p>Few things are better than a properly grilled steak.</p>
                                    <strong class="semi-bold">$18.99</strong>
                                    <a href="cart.php" title="" class="btn-default gradient-bg half-radius height-2 btn-r">Add to cart <span></span></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 meat sushi">
                                <div class="pd-item test">
                                    <div class="pd-thumbnail">
                                        <img src="assets\images\resources\blg4.jpg" alt="" class="w-100 img-r">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="#" title="">Strip Steaks</a> </h3>
                                    <p>Few things are better than a properly grilled steak.</p>
                                    <strong class="semi-bold">$16.89</strong>
                                    <a href="cart.php" title="" class="btn-default gradient-bg half-radius height-2 btn-r">Add to cart <span></span></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 meat sushi fastfood">
                                <div class="pd-item test">
                                    <div class="pd-thumbnail">
                                        <img src="assets\images\resources\blg5.jpg" alt="" class="w-100 img-r">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="#" title="">Rib-eye Steaks</a> </h3>
                                    <p>Few things are better than a properly grilled steak.</p>
                                    <strong class="semi-bold">$15.69</strong>
                                    <a href="cart.php" title="" class="btn-default gradient-bg half-radius height-2 btn-r">Add to cart <span></span></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 meat vegitarian fastfood">
                                <div class="pd-item test">
                                    <div class="pd-thumbnail">
                                        <img src="assets\images\resources\blg6.jpg" alt="" class="w-100 img-r">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="#" title="">Top Sirloin Steaks</a> </h3>
                                    <p>Few things are better than a properly grilled steak.</p>
                                    <strong class="semi-bold">$25.39</strong>
                                    <a href="cart.php" title="" class="btn-default gradient-bg half-radius height-2 btn-r">Add to cart <span></span></a>
                                </div>
                            </div>
                        </div><!--masonary end-->
                    </div>
                    <div class="load-more mt-40 text-center">
                            <a href="#" title="" class="btn-default">Load More <span></span></a>
                        </div>
                </div><!--popular-dishes end-->
            </div>
        </section>

        <section class="sec-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="feedback-section">
                            <h2>Feedbacks (3)</h2>
                            <div class="testimonials-list">
                                <div class="test-monial">
                                    <div class="testi_head">
                                        <ul>
                                            <li>
                                                <img src="assets\images\resources\auth1.jpg" alt="">
                                                <span>Carlos Bolitti</span>        
                                            </li>
                                            <li>
                                                May 18, 2020
                                            </li>
                                            <li>
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>Very cool team. They work quickly and smoothly. They delivered food on time, the dishes were still hot and the drinks were cold. Good service I will recommend it to everyone.</p>
                                </div><!--test-monial end-->
                                <div class="test-monial">
                                    <div class="testi_head">
                                        <ul>
                                            <li>
                                                <img src="assets\images\resources\auth1.jpg" alt="">
                                                <span>Lili Martin</span>        
                                            </li>
                                            <li>
                                                May 14, 2020
                                            </li>
                                            <li>
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>I ordered food from two different restaurants at the same time which are far from each other but the guys did very well and delivered the food on time hot and fresh. Everything was as tasty and beautiful as in the restaurant. Food has not lost its beautiful appearance.</p>
                                </div><!--test-monial end-->
                                <div class="test-monial">
                                    <div class="testi_head">
                                        <ul>
                                            <li>
                                                <img src="assets\images\resources\auth1.jpg" alt="">
                                                <span>Manuel Bonturini</span>        
                                            </li>
                                            <li>
                                                May 13, 2020
                                            </li>
                                            <li>
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>Very cool team. They work quickly and smoothly. They delivered food on time, the dishes were still hot and the drinks were cold. Good service I will recommend it to everyone.</p>
                                </div><!--test-monial end-->
                            </div>
                        </div><!--feedback section end-->
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="widget widget-review">
                                <h3 class="widget-title">Leave a review</h3>
                                <form>
                                    <input type="text" name="name" placeholder="Name*" class="half-radius">
                                    <input type="email" name="email" placeholder="Email*" class="half-radius">
                                    <textarea name="review" placeholder="Write a review"></textarea>
                                    <ul class="rating d-block">
                                        <li><i class="far fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <button type="submit" class="btn-default half-radius">Submit <span></span></button>
                                </form>
                            </div><!--widget-review end-->
                        </div><!--sidebar end-->
                    </div>
                </div>
            </div>
        </section>

        <?php include('include/footer.php') ?><!--footer end-->
        
    </div><!--wrapper end-->


    <script src="assets\js\jquery.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\js\lib\slick\slick.js"></script>
    <script src="assets\js\isotope.js"></script>
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