<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return 

	'
	<li>
		<a href="'.site_url('home/setting').'"><i class="fa fa-dashboard"></i> Dashboard<span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
				<li>
					<a href="'.site_url('Barang').'"><i class="fa fa-database"></i> Barang</a>
				</li>
				<li>
					<a href="'.site_url('Customer').'"><i class="fa fa-user"></i> Customer</a>
				</li>
				<li>
					<a href="'.site_url('Cs').'"><i class="fa fa-user"></i> Customer Service</a>
				</li>
				<li>
					<a href="'.site_url('Beli').'"><i class="fa fa-credit-card"></i> Pembelian</a>
				</li>
				<li>
					<a href="'.site_url('Service').'"><i class="fa fa-heart-o"></i> Pelayanan</a>
				</li>
				<li>
					<a href="'.site_url('Supplier').'"><i class="fa fa-shopping-basket"></i> Supplier</a>
				</li>
				
			</ul>
		</li>

	
	
	';
	}
