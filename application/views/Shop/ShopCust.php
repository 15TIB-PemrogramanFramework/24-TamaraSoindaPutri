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

<body data-target="#nino-navbar">

	<!-- Header
    ================================================== -->
	<header id="nino-header">
		<div id="nino-headerInner">					
			<nav id="nino-navbar" class="navbar navbar-default" role="navigation">
				<div class="container">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Find Your Own Fashion !</a>
					</div>

					<div class="nino-menuItem pull-right">
						<div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
							<ul class="nav navbar-nav">
								<a class="navbar-brand" href="<?php echo site_url('Home/homeLoginCust')?>">Home<span class="active"></span></a>
                				<a class="navbar-brand" href="#nino-story">About</a>
								<a class="navbar-brand" href="#nino-services">Service</a>
								<a class="navbar-brand" href="#nino-ourTeam">Our Team</a>
								<a class="navbar-brand" href="<?php echo site_url('Home/shopCust')?>">Shop</a>
							</ul>
						</div>
					</div>
				</div>	
			</nav>

			<section id="nino-slider" class="carousel slide container" data-ride="carousel">
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active"><br><br><br><br><br>
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading">Our Product </span>
						</h2>
	</header><!--/#header-->

      <!-- Page Heading/Breadcrumbs -->
      <section id="nino-story">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Pakaian Wanita</span>
				Untuk ketentuan pembayaran, silahkan hubungi <a href="<?php echo site_url('Home/contactCust'); ?>">Contact</a>!
			</h2> 
    
      <div class="row">
        <?php foreach ($barang as $key => $value) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo site_url()?>assets/images/uploads/<?php echo $value->gambar; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                
              </h4>
                <center><ul class="list-group list-group-flush">
                   
                    <li class="list-group-item">Nama : <?php echo $value->nama_barang; ?></li>
                    <li class="list-group-item">Warna : <?php echo $value->warna; ?></li>
                    <li class="list-group-item">Stok : <?php echo $value->stok; ?></li>
                    <li class="list-group-item">Harga :<?php echo $value->harga; ?></li>

                    <li class="list-group-item">
                        <center>
                        <a href="<?php echo base_url()."Beli/tambah/".$value->id_barang?>" class="btn btn-primary">Beli</a>
                        </center>
                    </li>
                </ul></center>
            </div>
          </div>
          
        </div><?php } ?>
 
      </div>

      <!-- Pagination -->
      

    </div>
    </section>

	<!-- Footer
    ================================================== -->
    <footer id="footer">
			<div class="nino-copyright">Copyright &copy; 2017 <a target="_blank" href="http://www.ninodezign.com/" title="Ninodezign.com - Top quality open source resources for web developer and web designer">BulakanAG.com</a>. All Rights Reserved. <br/>
        </div>
    </footer><!--/#footer-->