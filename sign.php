<!doctype html>
<html lang="en">

<head>
    <?php include('include/head.php') ?>
</head>
<style>

</style>
<body>
    
    <div class="page-loading">
        <img src="assets\images\loader.gif" alt="">
    </div>
    <!--page-loading end-->
    
    <div class="wrapper">

        <?php include('include/header.php') ?><!--header end-->

      

        <section class="pager-section text-center">
            <div class="fixed-bg bg4"></div>
            <div class="container">
                <div class="pager-head">
                    <h2>Sign In</h2>
                    <ul>
                        <li><a href="index.php" title="">Home</a></li>
                        <li><span>Sign in</span></li>
                    </ul>
                </div>
                <!-- pager-head end -->
            </div>
        </section>
        <!-- pager-section end -->

        <section class="uf">
    <div class="container container2">
      <div class="user signinBx">
        <div class="imgBx">
        <h1 class="overlay-h">Welcome Back!</h1>
                <p class="para-s">To keep connected with us please login with your personal info</p>
                <p class="para-c">Connect With Us</p>
                <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="formBx">
          <form action="" onsubmit="return false;">
            <h2 class="s-heading">Sign In</h2>
         
            <input type="text" name="" placeholder="Username" />
            <input type="password" name="" placeholder="Password" />
            <input type="submit" name="" value="Login" />
            <p class="signup">
              Don't have an account ?
              <a onclick="toggleForm();">Sign Up.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action="" onsubmit="return false;">
            <h2 class="s-heading">Create an account</h2>
            <!-- <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div> -->
            <input type="text" name="" placeholder="Username" />
            <input type="email" name="" placeholder="Email Address" />
            <input type="password" name="" placeholder="Create Password" />
            <!-- <input type="password" name="" placeholder="Confirm Password" /> -->
            <input type="submit" name="" value="Sign Up" />
            <p class="signup">
              Already have an account ?
              <a onclick="toggleForm();">Sign in.</a>
            </p>
          </form>
        </div>
        <div class="imgBx">
        <h1 class="overlay-h">Hello, Friend!</h1>
                <p class="para-s">Enter your personal details and start journey with us</p>
                <p class="para-c">Connect With Us</p>
                <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
      </div>
    </div>
  </section>

        <?php include('include/footer.php') ?>
        <!--footer end-->
        
    </div><!--wrapper end-->
<script>
const toggleForm = () => {
  const container = document.querySelector('.container2');
  container.classList.toggle('active');
};
</script>

    <script src="assets\js\jquery.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <!-- <script src="assets\js\lib\slick\slick.js"></script> -->
    <script src="assets\js\scripts.js"></script>

</body>
</html>