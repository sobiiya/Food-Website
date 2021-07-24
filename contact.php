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
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="index.php" title="">Home</a></li>
                        <li><span>Contact us</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-us-section pr-100">
                            <div class="section-title">
                                <span  data-aos="zoom-in">Be In Touch </span>
                                <h2 class="text-capitalize" data-aos="zoom-in">Send us a message</h2>
                                <p class="mx-auto mw-100" data-aos="zoom-in">If you need a consultation regarding colaboration let us know or maybe you have another question don’t be shy send us a message.</p>
                            </div><!--sec-title end-->
                            <form id="contact-form" method="post" action="#">
                                <div class="response"></div>
                                <div class="row">
                          
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control name half-radius" placeholder="Name*">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control email half-radius" placeholder="Email*">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group ">
                                            <select id="inputState" class="form-control form-s">
                                            <option selected>How can we help you?</option>
                                            <option>I need help with my Zomato online order.</option>
                                            <option>I found incorrect/outdated information on a page</option>
                                            <option>The website/app are not working the way they should.</option>
                                            <option>I would like to give feedback/suggestions.</option>
                                            <option>Other</option>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message" class="m-field"></textarea>
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="button" id="submit" class="btn-default">Submit <span></span></button>
                                    </div>
                                </div>
                            </form>
                        </div><!--contact-us-section end-->
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="widget contact-widget">
                                <div class="numb">
                                    <h5>Phone number:</h5>
                                    <p>+1 654 847 52 25</p>
                                </div>
                                <div class="numb">
                                    <h5>Email:</h5>
                                    <p>info@sitename.com</p>
                                </div>
                                <div class="numb">
                                    <h5>Working hours:</h5>
                                    <p>Mon - Sat: 9:00 am - 10:00 pm <br> Sun: 10:00 am - 8:00 pm</p>
                                </div>
                            </div><!--contact-widget end-->
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