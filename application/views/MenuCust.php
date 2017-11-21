<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo site_url('Home/homeLoginCust');?>">
							<p>Selamat Datang <b><?php echo $this->session->userdata('username'); ?></b></p>
                		</a>

                		<a class="navbar-brand" href="<?php echo site_url('Login/logout');?>">
                			<p>| Logout</p>
                		</a>

						
							
                		<!--<a class="navbar-brand" href="<?php //echo site_url('home/register'); ?>">
                			<p>Register</p>
                		</a>-->
</div>

<div class="nino-menuItem pull-right">
						<div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
							<ul class="nav navbar-nav">

								<a class="navbar-brand" href="<?php echo site_url('Home/homeLoginCust')?>">Home<span class="active"></span></a>
                				<a class="navbar-brand" href="#nino-story">About</a>
								<a class="navbar-brand" href="#nino-services">Service</a>
								<a class="navbar-brand" href="#nino-ourTeam">Our Team</a>
								<a class="navbar-brand" href="<?php echo site_url('Home/shopCust')?>">Shop</a>
								<a href="<?php echo site_url('Home/infoCust');?>"><i class="navbar-brand mdi mdi-account-circle"></i></a>
							</ul>
						</div>
</div>