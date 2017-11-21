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
            <a class="navbar-brand" href="#">Let's Be Our Member</a>
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

</div>
</header>

<center>
<h2>Registrasi</h2>
<form action="<?php echo site_url('Customer/daftar_aksi'); ?>" method="post">
            <table>
              <tbody>
              <tr>
                <td> <div class="">
                  <input type="text" class="form-control" name="email" placeholder="Email" size="50" required>
                </div></td>
              </tr>

              <tr>
                <td> <div class="">
                  <input type="password" class="form-control" name="pass_cust" placeholder="Password" size="50" required>
                </div></td>
              </tr>

              <tr>
                <td><div class="">
                  <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" size="50" required>
                </div></td>
              </tr>

              <tr>
                <td> <div class="">
                  <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang" size="50" required>
                </div></td>
              </tr>

                <tr>
                <td><div class="">
                  <input type="text" class="form-control" name="no_hp" placeholder="No HP" size="50" required>
                </div></td>
              </tr>

              <tr>
                <center><td><input type="submit" class="" value="Register" /></td></center>
              </tr>
            </table>
          </form>
          </center>

</body>
</html>