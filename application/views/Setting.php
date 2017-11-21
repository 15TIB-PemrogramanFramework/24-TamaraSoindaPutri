<?php $this->load->view('Templates/Header');?>
<center>
           
            <div class="carousel-inner" role="listbox">
					<div class="item active"><br><br><br><br><br>
					<img src="<?php echo base_url().'assets/'; ?>images/story/images.jpg" alt="">
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading"> Hello <?php echo $this->session->userdata('username'); ?></span>
							
						</h2>
					</div>

					
</center>
<?php $this->load->view('Templates/Footer'); ?>