<!DOCTYPE html>
<html lang="en">
    <head>
    
        <!-- Title -->
        <title>TysonSHOP</title>
    
        <!-- Meta -->
        <meta charset="UTF-8">
        
    
        <!-- Stylesheets
        ============================================= -->
    
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
    
        <!-- Fontawesome -->
        <link href="css/fonts/fontawesome/css/all.css" rel="stylesheet">    
    
        <!-- Themify font icon -->
        <link href="css/themify-icons.css" rel="stylesheet">
    
        <!-- Animate css -->
        <link href="css/animate.css" rel="stylesheet">
    
        <!-- Navik menu css -->
        <link href="css/navik.menu.css" rel="stylesheet">
    
        <!-- Justified Gallery -->
        <link href="css/justifiedGallery.min.css" rel="stylesheet">
    
        <!-- Line progressbar css -->
        <link href="css/jquery.lineProgressbar.css" rel="stylesheet">
    
        <!-- Magnific Popup core CSS file -->
        <link rel="stylesheet" href="css/magnific-popup.css">
    
        <!-- Owl carouser -->
        <link href="css/owl.carousel.min.css" rel="stylesheet">
        <link href="css/owl.theme.default.min.css" rel="stylesheet">
    
        <!-- Lightslider -->
        <link href="css/lightslider.min.css" rel="stylesheet">
    
        <!-- Modal Video -->
        <link href="css/modal-video.min.css" rel="stylesheet">
    
        <!-- Main Css Files -->
        <link href="css/element.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    
        <!-- Shop Css file -->
        <link rel="stylesheet" href="css/shop.css">
    





        <script language="javascript">
  function valid()
  {
    var name1=document.getElementById("username").value;
	var pass1=document.getElementById("password").value;
	if(name1=="")
	{
	  alert("Enter Your Username...");
	  document.getElementById("username").focus();
	  return false;
	 }
	 if(pass1=="")
	{
	  alert("Enter Your Password...");
	  document.getElementById("password").focus();
	  return false;
	 }
	return true;
   }
	
</script>
<script language="javascript">
  function valid1()
  {
    var fname1=document.getElementById("fname").value;
	var lname1=document.getElementById("lname").value;
	var email1=document.getElementById("email").value;
	var pass1=document.getElementById("pass").value;
	
	if(fname1=="")
	{
	  alert("Enter Your First Name...");
	  document.getElementById("fname").focus();
	  return false;
	 }
	 if(lname1=="")
	{
	  alert("Enter Your Last Name...");
	  document.getElementById("lname").focus();
	  return false;
	 }
	 if(email1=="")
	{
	  alert("Enter Your Email...");
	  document.getElementById("email").focus();
	  return false;
	 }
	 if(pass1=="")
	{
	  alert("Enter Your Password...");
	  document.getElementById("pass").focus();
	  return false;
	 }
	 
	return true;
   }
	
</script>
    </head>
<body>


    <div id="wrapper">

        <!-- Start Header -->
        <header class="navik-header header-dark header-shadow">
           <div class="container-fluid full-container-custom">

               <!-- Navik header -->
               <div class="navik-header-container">
                   
                   <!--Logo-->
                   <div class="logo" data-mobile-logo="bg.png" data-sticky-logo="bg.png">
                       <a href="index.html"><img src="bg.png" alt="logo"/></a>
                   </div>
                   
                   <!-- Burger menu -->
                   <div class="burger-menu">
                       <div class="line-menu line-half first-line"></div>
                       <div class="line-menu"></div>
                       <div class="line-menu line-half last-line"></div>
                   </div>

                   <!-- Start Atribute Navigation -->
                   <div class="attr-nav social_area"> 
                       <a href="login.html " class="social-btn social-btn-line line-white mr5"><span class="ti-user social-btn-icon" style="font-size: 25px;"></span></a>
                    
                   </div>        
                   <!-- End Atribute Navigation -->

                   <!--Navigation menu-->
                   <nav class="navik-menu menu-caret">
                       <ul>
                           <li class="current-page"><a href="index.html">Home</a>
                              
                           </li>
                           <li>
                               <a href="contact.html">Contact</a>
                             
                           </li>
                         
                           <li>
                                        <a href="product.php">Products</a>
                                      
                                    </li>
                           
                         
                       </ul>
                   </nav>

               </div>

           </div>
       </header>
       <!-- Start Header -->
         <!-- Register Section -->
         <section class="sectionPT sectionPB bg-color-light3">
            <div class="container">
                <div class="row row-eq-height">
                    <div class="col-md-6 img_area background-cover" style="background-image: url('img/shop/shop2.jpg');">
                    </div>
                    <div class="col-md-6 padding0">
                        <div class="form_area bg-color-light1">
                            <form class="form form-style4 needs-validation" id="register"  action="radd.php" method="post" novalidate>
                                <div class="col-md-12 text-center mb40">
                                    <h5 class="heading">Registration</h5>
                                </div>
                                



                                
                                <div class="form-row">
                                    <div class="col-md-12 mb40">
                                        <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname" required="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb40">
                                        <input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname" required="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb40">
                                        <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb40">
                                        <input type="password" class="form-control" placeholder="Password" name="pass" id="pass" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 text-center"> 
                                    <button class="btn btn-primary mb10" type="submit" value="Register" onclick="return valid1();" name="Register" >REGISTER</button>
                                </div>
                            </form>
                            <p class="text-center mb20">Already have an account? <a href="login.php" class="text-colorPrimary">Login</a></p>
                            <p class="wdper75 text-center col-center mb40">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a class="text-colorPrimary" href="#.">privacy policy</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Register Section -->


        
    <!-- Scripts
    ============================================= -->

    <!-- jQuery library -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap Script -->
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

    <!-- Navik menu Script -->
    <script type="text/javascript" src="js/navik.menu.js"></script>

    <!-- Parallax Script -->
    <script type="text/javascript" src="js/parallaxie.js"></script>

    <!-- Appear Js -->
    <script type="text/javascript" src="js/jquery.appear.js"></script>

    <!-- Counter -->
    <script type="text/javascript" src="js/jQuerySimpleCounter.js"></script>
    
    <!-- Justified Gallery -->
    <script type="text/javascript" src="js/jquery.justifiedGallery.min.js"></script>
    
    <!-- Wow js -->
    <script type="text/javascript" src="js/wow.min.js"></script>

    <!-- Light Slider -->
    <script type="text/javascript" src="js/lightslider.min.js"></script> 

    <!-- Isotope Script -->
    <script type="text/javascript" src='js/isotope.pkgd.js'></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.js"></script>

    <!-- lineProgressbar plugin js -->
    <script type="text/javascript" src="js/jquery.lineProgressbar.js"></script>

    <!-- Circle progress -->
    <script type="text/javascript" src="js/circle-progress.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

    <!-- Owl carouser -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    
    <!-- Modal Video -->
    <script type="text/javascript" src="js/jquery-modal-video.min.js"></script>

    <!-- Point Parallax -->
    <script type="text/javascript" src="js/jquery.pointparallax.min.js"></script>

    <!-- Type Js -->
    <script type="text/javascript" src="js/typed.min.js"></script>

    <!-- TweenMax Script -->
    <script type="text/javascript" src="js/TweenMax.min.js"></script>

    <!-- Touch Swipe -->
    <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>

    <!-- Main Script -->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139847600-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-139847600-1');
    </script>
</body>