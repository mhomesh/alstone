<style>
.static_banner{ background:url('<?php echo IMG_PATH; ?>contactus.jpg') no-repeat  center center;}
</style>
 
<script type="text/javascript" src="<?php echo JS_PATH; ?>contactus.js"></script>



<div class="fullwidth">
<div class="banner">
<div class="static_banner">
<div class="filter filter_caption">
<!--h1>ABOUT INSTA<span>DUBAI VISA</span> </h1-->
<h1>Thank <span>You</span> </h1>
<!--end outer_filter-->
</div>
</div>
</div>
<!--end banner-->
</div>
<!--end fullwidth-->



<div class="inner_page">
<div class="about_section1">
<div class="wrapper">

<div class="privacy">

<div class="bottom_privacy">
 <?php
		$post = $this->input->post();
		$value = $this->session->flashdata('contact');
		$neg =   $this->session->flashdata('neg');
		if(!empty($post_error) && empty($value)){
			$err = $post_error;
		} 

	?>
	<?php if(!empty($value)): ?>
		<div class="alert success">
		  <span class="closebtn">&times;</span>  
		  <strong>Success!</strong> <?php echo $value;?>
		</div>	
	<?php endif;?> 
	<?php if(!empty($err)): ?>
		<div class="alert">
		  <span class="closebtn">&times;</span>  
		  <strong>Oops!</strong> <?php echo $err;?>
		</div>	
	<?php endif;?> 
	<?php if(!empty($neg)): ?>
		<div class="alert">
		  <span class="closebtn">&times;</span>  
		  <strong>Oops!</strong> <?php echo $neg;?>
		</div>	
	<?php endif;?> 

<p class="top_content_privacy">If you have any queries or issues about our services, we are open to hear from you and address your issues/queries right away. We do appreciate your feedback/suggestion that always helps us to enrich our performances. </p>
<p>Feel free to get in touch with us via email/chat/phone.  </p>
<!-- <p><strong>Contact Number:</strong> 1800-2000-144</p> -->
<p class="contact_mail"><strong>Email id:</strong><a href="mailto:info@thedubaivisa.com">info@thedubaivisa.com </a></p>
<p class="contact_mail"><strong style="vertical-align: top;   padding-top:10px;">Connect to:</strong><a href="skype:live:info_692502"><img src="<?php echo IMG_PATH; ?>sky.png" /></a></p>
<!--iframe scrolling="no" width="100%" height="300" frameborder="0" class="frame-width" src="https://www.google.com/maps/d/embed?mid=znx_eFTlDM2A.kGAZY1nvMa1w" marginwidth="0" marginheight="0"></iframe-->


 
 
 
 
	
 

<div class="clr"></div>

</div>
<!--end bottom_privacy-->

<div class="clr"></div>

</div>
<!--end privacy-->


</div>
<!--end wrapper-->
</div>
<!--end about_section1-->


</div>
<!--end inner_page-->
