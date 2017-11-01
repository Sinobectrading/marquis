<head>
<!-- Basic Page -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" type="image/png" href="images/favicon.png">
<title>MARQUISMETAL</title>
<meta name="description" content="">
<meta name="keywords" content="marquis,metal,railing,alumium,fence,marquismetal">
<meta name="author" content="Alex">
<!-- Mobile Specific Metas
================================================== -->
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Template CSS Files
================================================== -->
<!-- Twitter Bootstrs CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!-- Ionicons Fonts Css -->
<link rel="stylesheet" href="assets/css/ionicons.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<!-- animate css -->
<link rel="stylesheet" href="assets/css/animate.css">
<!-- Hero area slider css-->
<link rel="stylesheet" href="assets/css/slider.css">
<!-- owl craousel css -->
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.theme.css">
<link rel="stylesheet" href="assets/css/jquery.fancybox.css">
<!-- template main css file -->
<link rel="stylesheet" href="assets/css/main.css">
<!-- responsive css -->
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="assets/css/jquery.dataTables.css">

</head>
<!--
==================================================
Header Section Start
================================================== -->
<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->
            
            <!-- logo -->
            <div class="navbar-brand">
                <a href="index.php" >
                    <img src="assets/images/mlogo1.png" alt="">
                </a>
            </div>
            
            <!-- /logo -->
        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if ($currentPage=="home") echo "class=\"active\""; ?>>
                        <a href="index.php" >Home</a>
                    </li>
                   <!--  <li><a href="about.html">About</a></li> -->
                    <!-- <li><a href="service.html">Service</a></li> -->
                    <li <?php if ($currentPage=="products") echo "class=\"active dropdown\""; else echo "class=\"dropdown\""; ?> >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                            	<li><a href="fence.php">Alumium Fence</a></li>
                                <li><a href="balustrade.php">Balustrade</a></li>
                                <li><a href="404.html">Packages</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="blog-fullwidth.html">Blog Full</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>
                            </ul>
                        </div>
                    </li> -->
                    <li <?php if ($currentPage=="contact") echo "class=\"active\""; ?>><a href="contact.php">Contact</a></li>
                    <li <?php if ($currentPage=="track") echo "class=\"active\""; ?>><a href="track.php">Track Inventory</a></li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>