<style>
.static_banner{ background:url('<?php echo CMS_IMG_PATH .$cmsContent['cmsBanner']; ?>') no-repeat  center center;}
</style>
 

<div class="fullwidth">
<div class="banner">
<div class="static_banner">
<div class="filter filter_caption">
<!--h1>ABOUT INSTA<span>DUBAI VISA</span> </h1-->
<?php error_reporting(0);?>
 <?php 
	//$string = $cmsContent['cmsTitle'].' '; 
	@$string= $cmsContent['cmsTitle'];
	list($second,$first) = explode(' ',strrev($string),2);
	$first = strrev($first);
	$second = strrev($second);
 ?>
<h1><?php echo $first; ?><span><?php echo $second; ?></span> </h1>
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
 <?php
 if(isset($cmsContent['cmsTitle'])) echo  $cmsContent['cmsContent']; 
 ?> 
</div>
<!--end wrapper-->
</div>
<!--end about_section1-->


<?php if($string == 'About Us' || $string == 'HOW TO APPLY'){ ?>
<div class="wrapper">
<div class="inner_section2">
<div class="inner_section2_left">
<h2>GRAB IT FASTER</h2>
<p>
Since our global existence dates back decades, our services have
 travelled across a diverse range of expertise in the field of Oman 
 Visa processing. Today, with successful issuance of more than 20,000
 Oman visas, we assure all prospective visa applicants to get their
 Oman visas processed and delivered on/before the stipulated time.
 At OMAN VISA.com, you can grab your visa faster and easier!
</p>

</div>
<div class="inner_section2_right">
<div class="inner_section2_right_inner">
<?php $attributes = array('id' => 'frm_search', 'name'=>'frm_search');
			echo form_open_multipart('visafilter/search', $attributes); ?>
<p>Choose your Nationality</p>
	<select name ="nationality_id" class="select2" id="nationality_id" style="width: 100%;">
		<option value=""><?php echo "Select";?></option>
		<?php 
		if(!empty($fetchnatinality)){ 
			foreach($fetchnatinality as $values){?>
			<option value="<?php echo $values->country_id;?>"><?php echo $values->country_name;?></option>
		<?php }
		}
		?>
	</select>

<p>I am living in</p>
	<select name ="country_id" class="select2" id="country_id" style="width: 100%;">
		<option value=""> Select </option>
		<?php 
		if(!empty($fetchcountry)){ 
			foreach($fetchcountry as $value){?>
			<option value="<?php echo $value->country_id;?>"><?php echo $value->country_name;?></option>
		<?php }
		}
		?>
	</select>
<button type="submit">Get Started</button>
</form>

<script type="text/javascript">
$(document).ready(function() {
  $("#frm_search").validate({
            rules: {
			   'nationality_id': {required: true},
			   'country_id': {required: true}
			},
			  submitHandler: function(form) {
			  form.submit();
			}
			
		});
	});
</script>


</div>
<!--end inner_section2_right_inner-->

</div>
<div class="clr"></div>
</div>
<!--end inner_section2-->
</div>
<?php }else { } ?>
<!--end wrapper-->
</div>
<!--end inner_page-->
