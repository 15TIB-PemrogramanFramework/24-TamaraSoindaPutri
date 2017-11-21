<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo site_url('Home/homeLoginAdm');?>">
							<p>Hello <b><?php echo $this->session->userdata('username'); ?></b></p>
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

								<a class="navbar-brand" href="<?php echo site_url('Home/homeLoginAdm')?>">Home<span class="active"></span></a>
                				<a class="navbar-brand" href="#nino-story">About</a>
								<a class="navbar-brand" href="#nino-services">Service</a>
								<a class="navbar-brand" href="#nino-ourTeam">Our Team</a>
								<a class="navbar-brand" href="<?php echo site_url('Home/shopAdm')?>">Shop</a>
								<a class="navbar-brand" href="<?php echo site_url('Home/setting')?>">Setting</a>

							</ul>
						</div>
</div>