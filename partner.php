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
                    <h2>Become Our Partner</h2>
                    <ul>
                        <li><a href="index.php" title="">Home</a></li>
                        <li><span>Become Our Partner</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-us-section pr-100">
                            <div class="section-title " data-aos="fade-up">
                                <span>Become Our Partner </span>
                                <!-- <h2 class="text-capitalize">Send us a message</h2> -->
                                <p class="mx-auto mw-100">Deli Taste platform gives you the flexibility, visibility and customer insights you need to connect with more customers. Partner with us today.</p>
                            </div><!--sec-title end-->


                                <!-- partial:index.partial.html -->
<div class="form-modal">
    
    <div class="form-toggle">
        <button id="login-toggle" onclick="toggleLogin()">Restaurant Partner</button>
        <button id="signup-toggle" onclick="toggleSignup()">Delivery Partner</button>
    </div>

    <div id="login-form">
        <form>
            <input type="text" placeholder="Restaurant Name"/>
            <input type="text" placeholder="Restaurant Address"/>
            <input type="text" placeholder="Owner's Name"/>
            <input type="text" placeholder="Contact No"/>
            <input type="email" placeholder="Email"/>

           
            <hr/>
           
        </form>

    </div>

    <div id="signup-form">
        <form>
            <input type="text" placeholder="Name"/>
            <input type="email" placeholder="Email"/>
            <input type="text" placeholder="Phone Number"/>
           <input type="text" placeholder="City"/>
           <input type="text" placeholder="Type Of Vehicle"/>
          
            <hr/>
         
        </form>
    </div>

</div>














                            <!-- <form id="contact-form" method="post" action="#">
                                <div class="response"></div>
                                <div class="row">
                          
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control name half-radius" placeholder="Name*"> -->
                                        <!-- </div>form-group end -->
                                    <!-- </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control email half-radius" placeholder="Email*"> -->
                                        <!-- </div>form-group end -->
                                   <!--  </div>
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
                                            <textarea name="message" placeholder="Message" class="m-field"></textarea> -->
                                        <!-- </div>form-group end -->
                                    <!-- </div>
                                    <div class="col-sm-12">
                                        <button type="button" id="submit" class="btn-default">Submit <span></span></button>
                                    </div>
                                </div>
                            </form> -->
                        <!-- </div>contact-us-section end -->
                    </div>
                   
                    
                </div>
                 <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="widget contact-widget">
                                <!-- <img src="assests/images/favicon.png"> -->
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
        </section>

        <?php include('include/footer.php') ?><!--footer end-->
        
    </div><!--wrapper end-->


    <script src="assets\js\jquery.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\js\lib\slick\slick.js"></script>
    <script src="assets\js\scripts.js"></script>
    <!-- partial -->
  <script  src="./script.js"></script>
  <script>
      function toggleSignup(){
   document.getElementById("login-toggle").style.backgroundColor="#fff";
    document.getElementById("login-toggle").style.color="#222";
    document.getElementById("signup-toggle").style.backgroundColor="#E00830";
    document.getElementById("signup-toggle").style.color="#fff";
    document.getElementById("login-form").style.display="none";
    document.getElementById("signup-form").style.display="block";
}

function toggleLogin(){
    document.getElementById("login-toggle").style.backgroundColor="#E00830";
    document.getElementById("login-toggle").style.color="#fff";
    document.getElementById("signup-toggle").style.backgroundColor="#fff";
    document.getElementById("signup-toggle").style.color="#222";
    document.getElementById("signup-form").style.display="none";
    document.getElementById("login-form").style.display="block";
}
  </script>
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