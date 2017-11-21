<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="ninodezign.com, ninodezign@gmail.com">
	<meta name="copyright" content="ninodezign.com"> 
	<title>BulakanAG-Website</title>
	
	<!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url().'assets/'; ?>images/ico/favicon.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url().'assets/'; ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url().'assets/'; ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url().'assets/'; ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url().'assets/'; ?>images/ico/apple-touch-icon-57-precomposed.png">
	
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/materialdesignicons.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/jquery.mCustomScrollbar.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/prettyPhoto.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/unslider.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/template.css" />
	
</head>

<body data-target="#nino-navbar" data-spy="scroll">

	<!-- Header
    ================================================== -->
	<header id="nino-header">
		<div id="nino-headerInner">					
			<nav id="nino-navbar" class="navbar navbar-default" role="navigation">
				<div class="container">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Hello.. Enjoy Shoping</a>
						<a class="navbar-brand" href="<?php echo site_url('Home/login');?>">
                			<p>| Login</p>
                		</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="nino-menuItem pull-right">
						<div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
							<ul class="nav navbar-nav">

								<a class="navbar-brand" href="#nino-header">Home<span class="active"></span></a>
                				<a class="navbar-brand" href="#nino-story">About</a>
								<a class="navbar-brand" href="#nino-services">Service</a>
								<a class="navbar-brand" href="#nino-ourTeam">Our Team</a>
								<a class="navbar-brand" href="<?php echo site_url('Home/shop')?>">Shop</a>
							</ul>
						</div>
</div>
				</div><!-- /.container-fluid -->
			</nav>

			<section id="nino-slider" class="carousel slide container" data-ride="carousel">
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active"><br><br><br><br><br>
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading"> Welcome to BulakanAG </span>
							<span class="nino-subHeading"> Jl. Sembilang Rumbai Pekanbaru </span>
						</h2>
					</div>
					<div class="item">
						<h2 class="nino-sectionHeading">
							<img src="<?php echo base_url().'assets/'; ?>images/our-blog/img-7.jpg" alt="">
						</h2>
					</div>
					<div class="item"><br><br><br><br><br>
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading"> Product </span>
						</h2>
						<a href="<?php echo site_url('Home/shop')?>" class="nino-btn">Learn more</a>
					</div>
					<div class="item"><br><br><br><br><br>
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading"> Contact US </span>
						</h2>
						<a href="<?php echo site_url('Home/contact'); ?>" class="nino-btn">Learn more</a>
					</div>
				</div>

				<!-- Indicators -->
				<ol class="carousel-indicators clearfix">
					<li data-target="#nino-slider" data-slide-to="0" class="active">
						<div class="inner">
							<span class="number">01</span> Home
						</div>
					</li>
					<li data-target="#nino-slider" data-slide-to="1">
						<div class="inner">
							<span class="number">02</span> Store
						</div>
					</li>
					<li data-target="#nino-slider" data-slide-to="2"> 
						<div class="inner">
							<span class="number">03</span> Product
						</div>
					</li>
					<li data-target="#nino-slider" data-slide-to="3">
						<div class="inner">
							<span class="number">04</span> Contact Us
						</div>
					</li>
				</ol>
			</section>
		</div>
	</header><!--/#header-->

	<!-- Story About Us
    ================================================== -->
	<section id="nino-story">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">What We Do</span>
				Story about us
			</h2>
			<p class="nino-sectionDesc">Hello great friend, on this occasion allow us from BulakanAG to introduce ourselves. Hopefully with this introduction my friends will be more happy to shop at this online store.It is honorable for us, if you come to this shop and can get many useful things.</p>
			<p class="nino-sectionDesc">BulakanAG is a store that provides a variety of women's clothing ranging from superiors to subordinates. Starting from a building located at Jalan Sembilang, Rumbai Pekanbaru, our store can finally reach the wider market through internet.Along with the development of technology, then we try to innovate in business. One form of innovation is to provide our store services through the internet, and this online store is one of our services to you.</p>
			<p class="nino-sectionDesc">BulakanAG was founded by Mr. Arika Putra on July 13, 2017. The existence of this online store is expected to make it easier for you to get a variety of high quality products but with an affordable price.In giving service, we always try to give the best offer to anyone. In addition we also always uphold the values ​​of good ethics, such as honesty, accuracy, and professionalism in business. Hopefully with him our online store can give you many benefits.</p>
			<p class="nino-sectionDesc">That was the first time. Hope this introduction can inspire and benefit you.Best regards and wish you success always.</p>
			

	<!-- Counting
    ================================================== -->
    <section id="nino-counting">
    	<div class="container">
    		<div layout="row" class="verticalStretch">
    			<div class="item">
    				<div class="number">135</div>
    				<div class="text">Products</div>
    			</div>
    			<div class="item">
    				<div class="number">70</div>
    				<div class="text">Customer</div>
    			</div>
    			<div class="item">
    				<div class="number">3</div>
    				<div class="text">Branch</div>
    			</div>
    			<div class="item">
    				<div class="number">4.7</div>
    				<div class="text">Star Rating</div>
    			</div>
    			<div class="item">
    				<div class="number">1</div>
    				<div class="text">Olshop</div>
    			</div>
    		</div>
    	</div>
    </section><!--/#nino-counting-->

    <!-- Services
    ================================================== -->
    <section id="nino-services">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">We work with</span>
				Services
			</h2>
			<div class="sectionContent">			
				<div class="row">
					
						<div class="text-center">
							<img src="<?php echo base_url().'assets/'; ?>images/what-we-do/service2.png" alt="">
						</div>
					
					
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<i class="mdi mdi-chevron-up nino-icon arrow"></i>
											<i class="mdi mdi-camera nino-icon"></i> 
											Cozy and Comfortable
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										With an elegant look and beautiful design will make you comfortable in shopping. Plus a variety of ordering functions that are easy to understand make you happy to shop online.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<i class="mdi mdi-chevron-up nino-icon arrow"></i>
											<i class="mdi mdi-owl nino-icon"></i> 
											Fast Order Services
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										You just choose what dress that you want and order it in everywhere and anytime.
									</div>
								</div>
							</div>
						</div>
					
				</div>
			</div>
			</div>
    	</div>
    </section><!--/#nino-services-->


    <!-- Our Team
    ================================================== -->
	<section id="nino-ourTeam">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Who we are</span>
				Meet our team
			</h2>
			<div class="sectionContent">
				<div class="row nino-hoverEffect">
					<div class="col-md-4 col-sm-4">
						<div class="item">
							<div class="overlay" href="#">
								<div class="content">
									<a href="https://www.instagram.com/ari_k_putra/?hl=id" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
								</div>
								<img src="<?php echo base_url().'assets/'; ?>images/our-team/owner.png" alt="">
							</div>
						</div>
						<div class="info">
							<h4 class="name">Arika Putra</h4>
							<span class="regency">Owner</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="item">
							<div class="overlay" href="#">
								<div class="content">
									<a href="https://www.instagram.com/ligiasyamsuar/?hl=id" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
								</div>
								<img src="<?php echo base_url().'assets/'; ?>images/our-team/co-owner.png" alt="">
							</div>
						</div>
						<div class="info">
							<h4 class="name">Ligia</h4>
							<span class="regency">Co-Owner</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="item">
							<div class="overlay" href="#">
								<div class="content">
									<a href="https://www.instagram.com/yelviandika/?hl=id" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
								</div>
								<img src="<?php echo base_url().'assets/'; ?>images/our-team/admin.png" alt="">
							</div>
						</div>
						<div class="info">
							<h4 class="name">Yelvi Andika</h4>
							<span class="regency">Admin</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#nino-ourTeam-->

	<!-- Brand
    ================================================== -->
    <section id="nino-brand">
    	<div class="container">
    		<div class="verticalCenter fw" layout="row">
    			<div class="col-md-2 col-sm-4 col-xs-6"><img src="<?php echo base_url().'assets/'; ?>images/brand/img-3.png" alt=""></div>
    			<div class="col-md-2 col-sm-4 col-xs-6"><img src="<?php echo base_url().'assets/'; ?>images/brand/zoya.png" alt=""></div>
    			<div class="col-md-2 col-sm-4 col-xs-6"><img src="<?php echo base_url().'assets/'; ?>images/brand/channel.jpg" alt=""></div>
    			<div class="col-md-2 col-sm-4 col-xs-6"><img src="<?php echo base_url().'assets/'; ?>images/brand/dg.jpg" alt=""></div>
    			<div class="col-md-2 col-sm-4 col-xs-6"><img src="<?php echo base_url().'assets/'; ?>images/brand/zara.png" alt=""></div>
    			<div class="col-md-2 col-sm-4 col-xs-6"><img src="<?php echo base_url().'assets/'; ?>images/brand/img-2.png" alt=""></div>
    		</div>
    	</div>
    </section><!--/#nino-brand-->
	
    <!-- Footer
    ================================================== -->
    <footer id="footer">
			<div class="nino-copyright">Copyright &copy; 2017 <a target="_blank" href="http://www.ninodezign.com/" title="Ninodezign.com - Top quality open source resources for web developer and web designer">BulakanAG.com</a>. All Rights Reserved. <br/>
        </div>
    </footer><!--/#footer-->

    <!-- Search Form - Display when click magnify icon in menu
    ================================================== -->
    <form action="" id="nino-searchForm">
    	<input type="text" placeholder="Search..." class="form-control nino-searchInput">
    	<i class="mdi mdi-close nino-close"></i>
    </form><!--/#nino-searchForm-->
	
    <!-- Scroll to top
    ================================================== -->
	<a href="#" id="nino-scrollToTop">Go to Top</a>
	
	<!-- javascript -->
	<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/jquery.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/jquery.hoverdir.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/modernizr.custom.97074.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/unslider-min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/template.js"></script>
		
</body>
</html>