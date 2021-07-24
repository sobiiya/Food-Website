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
                    <h2>Sign Up</h2>
                    <ul>
                        <li><a href="index.php" title="">Home</a></li>
                        <li><span>Sign Up</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="delitaste-form text-center">
                            <div class="lg-text">
                                <h3>Sign Up With</h3>
                                <ul class="social">
                                    <li><a class="facebook" href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="linkedin" href="#" title=""><i class="fab fa-linkedin"></i></a></li>
                                    <li><a class="twitter" href="#" title=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="google" href="#" title=""><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div><!--lg-text end-->
                            <div class="or">
                                <span>or</span>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="first-name" placeholder="First name *" class="form-control">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="last-name" placeholder="Last name *" class="form-control">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone number *" class="form-control">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email *" class="form-control">
                                        </div><!--form-group end-->
                                    </div>
                                </div>
                                <h4 class="text-left">Password:</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Password *" class="form-control">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="confirm-password" placeholder="Confirm password *" class="form-control">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn-default w-100">Create Account <span></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="btm-tx">
                                <span class="d-block">Already have an account? <a href="sign-in.php" title="">Log in</a></span>
                            </div>
                        </div>
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