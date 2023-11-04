<?php include 'menu.php'; 
	$menu_content = setMenu();
?>
<!Doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title><?php echo $_SESSION['PageTitle']; ?></title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!--flat icon css-->
		<link rel="stylesheet" href="assets/css/flaticon.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
		<style>
			/*--------------------------------------------------------------
			# Navigation Menu
			--------------------------------------------------------------*/
			/**
			* Desktop Navigation 
			*/
			.navbar {
			padding: 30;
			}

			.navbar ul {
			margin: 0;
			padding: 0;
			display: flex;
			list-style: none;
			align-items: center;
			}

			.navbar li {
			position: relative;
			}
			
			.navbar a, .navbar a:focus {
				display: flex;
				align-items: end;
				justify-content: center;
				padding: 32px 0 18px 41px;
				font-family: revert-layer;
				font-size: 13px;
				color: black;
				white-space: nowrap;
				transition: 0.3s;
			}

			.navbar a i,
			.navbar a:focus i {
			font-size: 1px;
			line-height: 0;
			margin-left: 25px;
			}

			.navbar a:hover,
			.navbar .active,
			.navbar .active:focus,
			.navbar li:hover>a {
			color: #e96b56;
			}
		</style>

    </head>
	<body>
		
	<header class="top-area">
			<div class="header-area">
			    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">
			        <div class="container">
			            <div class="navbar-header">
			                <a class="navbar-brand" href="/">Rajeev</a>
			            </div>
                        <?php echo $menu_content; ?>
			        </div>
			    </nav>
			</div>
		    <div class="clearfix"></div>

		</header>