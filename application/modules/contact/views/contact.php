<style>
.static_banner{ background:url('<?php echo IMG_PATH; ?>contactus.jpg') no-repeat  center center;}
</style>
 
<script type="text/javascript" src="<?php echo JS_PATH; ?>contactus.js"></script>


<div class="fullwidth">
<div class="banner">
<div class="static_banner">
<div class="filter filter_caption">
<!--h1>ABOUT INSTA<span>DUBAI VISA</span> </h1-->
<h1>CONTACT<span>US</span> </h1>
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

<div class="contact_left">
<p class="top_content_privacy">To get connected with us regarding any queries/issues/concerns related to Oman Visa services, we are just a call away. Alternatively, you can also reach to us by email and chat. Apart from reaching to us only for Visa related queries, we are also open to hear from you regarding any feedback or suggestions as well. Please refer the following contact details for your convenience:</p>
<!-- <p><strong>Contact Number:</strong> 1800-2000-144</p> -->
<p class="contact_mail"><strong>Email id:</strong><a href="mailto:info@theomanvisa.com">info@theomanvisa.com </a></p>
<p class="contact_mail"><strong style="vertical-align: top;   padding-top:10px;">Connect to:</strong><a href="skype:live:info_692502"><img src="<?php echo IMG_PATH; ?>sky.png" /></a></p>
<!-- <p class="contact_mail"><strong style="vertical-align: top;   padding-top:10px;" >UAE Address:</strong> 
<br/> Shamsi Building <br/>
Al, Dubai <br/>
UAE <br/>
PO Box - 30910

</a></p> -->
<!--iframe scrolling="no" width="100%" height="300" frameborder="0" class="frame-width" src="https://www.google.com/maps/d/embed?mid=znx_eFTlDM2A.kGAZY1nvMa1w" marginwidth="0" marginheight="0"></iframe-->


</div>
<div class="contact_right">
<h1>Contact Us</h1>
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
	
<?php  $attributes = array('id' => 'contactus', 'name' => 'contactus');
    echo form_open_multipart('contact', $attributes); ?>
<div class="contact_form">
<input type="text" name="txtName" data-prompt-position="topLeft:40" class="validate[required],custom[onlyLetterSp],maxSize[30] input1" data-errormessage-value-missing=" Name is required!" placeholder="Name" value="<?php echo set_value('txtName');?>" />
</div>

<div class="contact_form">
<input type="text" name="txtEmail" data-prompt-position="topLeft:40" class="validate[required,custom[email]] input2" placeholder="Email" value="<?php echo set_value('txtEmail');?>"/>
</div>

<div class="contact_form">
<input type="text" name="txtPhone" value="<?php echo set_value('txtPhone');?>" data-prompt-position="topLeft:40" class="validate[required],minSize[10],maxSize[12] input3" placeholder="Phone Number">
</div>


<div class="contact_form">
<textarea placeholder="Message" data-prompt-position="topLeft:40"  class="validate[required] input4" name="txtMessage" >
</textarea> 



</div>

<div class="contact_form">
      <?php echo $captcha['image']; ?>

</div>
 
<div class="contact_form">
<h2>Enter Captcha:</h2>
       <input type="text"   class="validate[required] input4" data-prompt-position="topLeft:40" data-validation-placeholder="Captcha Code"   data-errormessage-value-missing="CaptchaCode is required!" name="captchaCode" id="captchaCode" />
</div>

<div class="submit"><button type="submit"  name="btnSubmit" id="btnSubmit">Submit</button></div>


</form>

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
