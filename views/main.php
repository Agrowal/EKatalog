<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bootstrap DataBase</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo ROOT_URL; ?>/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>/assets/css/main.css">
    <link href="<?php echo ROOT_URL; ?>/assets/css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>/assets/css/icomoon-social.css">
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>/assets/css/font-awesome.min.css">
	
	<script src="<?php echo ROOT_URL; ?>/assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Javascripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo ROOT_URL; ?>/assets/js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="<?php echo ROOT_URL; ?>/assets/js/bootstrap.min.js"></script>




	<link rel="shortcut icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/assets/images/registry.png" />
	

</head>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo ROOT_URL; ?>"><img src="<?php echo ROOT_URL; ?>/assets/images/logo.png" alt="Basica"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if($viewClass == 'Home') {echo 'class="active"';} ?> ><a href="<?php echo ROOT_URL; ?>">Home</a></li>
                    <li <?php if($viewClass == 'About') {echo 'class="active"';} ?> ><a href="<?php echo ROOT_URL; ?>about">O Nas</a></li>
                    <li <?php if($viewClass == 'Queries') {echo 'class="active"';} ?> ><a href="<?php echo ROOT_URL; ?>queries">Katalog</a></li>
                    <!-- <li><a href="portfolio.html">Portfolio</a></li> -->

                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown Menu 1</a></li>
                            <li><a href="#">Dropdown Menu 2</a></li>
                            <li><a href="#">Dropdown Menu 3</a></li>
                            <li><a href="#">Dropdown Menu 4</a></li>
                            <li><a href="#">Dropdown Menu 5</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </li> -->

                    <!-- <li><a href="blog.html">Blog</a></li>  -->
                    <li <?php if($viewClass == 'Contact') {echo 'class="active"';} ?> ><a href="<?php echo ROOT_URL; ?>contact">Kontakt</a></li>
                    <li>&nbsp&nbsp&nbsp</li>
                    <?php if(isset($_SESSION['is_logged_in'])): ?>
        			<li><a data-toggle="modal" href="<?php echo ROOT_URL; ?>" >Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
        			<li <?php if($viewClass == 'Projects') {echo 'class="active"';} ?>><a data-toggle="modal" href="<?php echo ROOT_URL; ?>projects/index" >Projekty</a></li>
    				<li><a data-toggle="modal" href="<?php echo ROOT_URL; ?>users/logout" >Logout</a></li>

    	  			<?php else: ?>
    				<li><a data-toggle="modal" href="<?php echo ROOT_URL; ?>users/login" ><span class="glyphicon glyphicon-log-in" ></span> Login to database</a></li>
    				<li><a data-toggle="modal" href="<?php echo ROOT_URL; ?>users/register" >Register</a></li>
    	 			<?php endif; ?>
                </ul>
            </div>
        </div>
    </header><!--/header-->

<!--     <?php 
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?> -->


    <?php Messages::display(); ?>
	<?php require($view); ?>

			    


			


	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
			
		    	<div class="row">
				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Napisz do nas</h3>
		    			<p class="contact-us-details">
	        				<b>Address:</b> 123 Narutowicza, Gdańsk, Republic of Poland<br/>
	        				<b>Phone:</b> +1 123 45678910<br/>
	        				<b>Fax:</b> +1 123 45678910<br/>
	        				<b>Email:</b> <a href="mailto:info@fancycompany.com">info@fancycompany.com</a>
	        			</p>
		    		</div>				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>E.Katalog w sieci</h3>
						<p>Here are the links with fancy icons to profiles that do not exist. In fact the links do not exist either. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
		    			<div>
		    				<a href="#"><img src="<?php echo ROOT_URL; ?>/assets/images/icons/facebook.png" width="32" alt="Facebook"></a>
		    				<a href="#"><img src="<?php echo ROOT_URL; ?>/assets/images/icons/twitter.png" width="32" alt="Twitter"></a>
		    				<a href="#"><img src="<?php echo ROOT_URL; ?>/assets/images/icons/linkedin.png" width="32" alt="LinkedIn"></a>
							<a href="#"><img src="<?php echo ROOT_URL; ?>/assets/images/icons/rss.png" width="32" alt="RSS Feed"></a>
						</div>
		    		</div>
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>O naszej organizacji</h3>
		    				<p>There is no company at all... muhahah Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
		    		</div>

		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2016 <a href="#">Grzegorz Mickowski</a> Bootstrap HTML Template. Thanks to <a href="http://www.vactualart.com">Vactual Art</a>.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>


		
		<!-- Scrolling Nav JavaScript -->
		<script src="<?php echo ROOT_URL; ?>/assets/js/jquery.easing.min.js"></script>
		<script src="<?php echo ROOT_URL; ?>/assets/js/scrolling-nav.js"></script>		

    </body>
</html>