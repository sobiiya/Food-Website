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
                    <h2>404</h2>
                    <ul>
                        <li><a href="index.php" title="">Home</a></li>
                        <li><span>404</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="error-page text-center">
                            <h2>404</h2>
                            <h3>Page not found</h3>
                            <img src="assets\images\resources\404.jpg" alt="">
                            <span>Please try Search or go back to <a href="index.php" title="">Homepage.</a></span>
                            <form>
                                <div class="form-group">
                                    <input type="text" name="search" class="form-control half-radius" placeholder="Search">
                                </div>
                            </form>
                        </div><!--error-page end-->
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
    <script src="assets\js\isotope.js"></script>
    <script src="assets\js\scripts.js"></script>

</body>
</html>