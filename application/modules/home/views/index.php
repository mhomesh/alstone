<div class="sl">
<div id="owl-demo1" class="owl-carousel owl-theme">
	<div class="item"><img src="<?php echo IMG_PATH; ?>banner.jpg" class="mainbanner"></div>
	<div class="item"><img src="<?php echo IMG_PATH; ?>banner1.jpg" class="mainbanner"></div>
	<div class="item"><img src="<?php echo IMG_PATH; ?>banner2-b.jpg" class="mainbanner"></div>
</div>



<div class="filter">
<h1>GET <span>OMAN VISA</span> EASIER & FASTER</h1>
<div class="outer_filter">
<div class="inner_filter">

<?php $attributes = array('id' => 'frm_subadmin', 'name'=>'frm_subadmin');
			echo form_open_multipart('visafilter/search', $attributes); ?>
<div class="filter1">
	<select name ="nationality_id" class="select2" id="nationality_id" style="width: 100%;">
		<option value=""><?php echo "Choose your Nationality";?></option>
		<?php 
		if(!empty($fetchnatinality)){ 
			foreach($fetchnatinality as $values){?>
			<option value="<?php echo $values->country_id;?>"><?php echo $values->country_name;?></option>
		<?php }
		}
		?>
	</select>
</div>
<div class="filter1">
	<select name ="country_id" class="select2" id="country_id" style="width: 100%;">
		<option value=""> I am living in </option>
		<?php 
		if(!empty($fetchcountry)){ 
			foreach($fetchcountry as $value){?>
			<option value="<?php echo $value->country_id;?>"><?php echo $value->country_name;?></option>
		<?php }
		}
		?>
	</select>
</div>

<div class="filter1"><button type="submit">Get Started</button> </div>
<div class="clr"></div>
 <?= validation_errors(); ?>
</form>
 
<script src="<?php echo base_url(); ?>instadubai/public/admin/js/jquery.validate.js"></script>

<script type="text/javascript">
	$(document).ready (function(){
		$(".alert").hide();
		$(".alert").fadeTo(2000, 1000).slideUp(1000, function(){
			$(".alert").slideUp(1000);
		});   
	 });
</script>

<script type="text/javascript">
$(document).ready(function() {
  $("#frm_subadmin").validate({
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
<!--end inner_filter-->
</div>
<!--end outer_filter-->
</div>
<!--end filter-->




</div>

 



<div class="section2">
<div class="wrapper">
 <?php
	$post = $this->input->post();
	$value = $this->session->flashdata('contact');
	$neg =   $this->session->flashdata('neg');
	if(!empty($post_error) && empty($value)){
		$value = $post_error;
	} 
?>
<?php if(!empty($neg)): ?>		 
	<div class="alert">
	<span class="closebtn">&times;</span>  
		<?php echo $neg; ?>
	</div>
<?php endif;?> 
<?php if(!empty($value)): ?>		 
	<div class="alert success">
	<span class="closebtn">&times;</span>  
		<?php echo $value; ?>
	</div>
<?php endif;?> 
<div class="section2_left">
<h1>UAE Visa Processing Steps</h1>


<div class="section2_left_inner">
<div class="l1 lt">
<a href="javascript:;">
<div class="l1_img"><img src="<?php echo IMG_PATH; ?>1.png"/></div>
<div class="l1_title">ONLINE FORM FILLUP</div>
<div class="l1_icon"><img src="<?php echo IMG_PATH; ?>11.png"></div>
</a>
</div>
<div class="l2 lt">
<a href="javascript:;">
<div class="l1_img"><img src="<?php echo IMG_PATH; ?>2.png"/></div>
<div class="l1_title">Online Payment</div>
<div class="l1_icon"><img src="<?php echo IMG_PATH; ?>22.png"></div>
</a>
</div>
<div class="l3 lt">
<a href="javascript:;">
<div class="l1_img"><img src="<?php echo IMG_PATH; ?>3.png"/></div>
<div class="l1_title">Visa Processing</div>
<div class="l1_icon"><img src="<?php echo IMG_PATH; ?>23.png"></div>
</a>
</div>
<div class="l4 lt">
<a href="javascript:;">
<div class="l1_img"><img src="<?php echo IMG_PATH; ?>4.png"/></div>
<div class="l1_title">Fly to UAE/Oman</div>
<div class="l1_icon"><img src="<?php echo IMG_PATH; ?>44.png"></div>
</a>
</div>

<div class="clr"></div>
</div>
<!--end section2_left_inner-->

<div class="section2_left_inner_bottom">
<h1>Wondrous figure of 10,000 <span> Oman Visa </span> Applications!!</h1>

<p>To be a part of our unparalleled and specialized Visa services, all prospective Oman Visa Applicants are just a step away to get their Oman Visa processed here without a hassle. This platform is designed to enhance the operational reach of Oman Visa services across the sphere in terms its service standard, flexibility, client requirements and Visa processing drivers.  </p> 
<p></p>

</div>


</div>
<!--end section2_left-->

<div class="section2_right">
<h1>Why The Oman Visa ?</h1>
<ul>
<li><span class="left"></span><span class="right">Magical milestone of 10,000 Oman Visas in just years of operations</span></li>
<li><span class="left"></span><span class="right">Highest visa approval ratio</span></li>
<li><span class="left"></span><span class="right">Highest approval ratio </span></li>
<li><span class="left"></span><span class="right">Affordable processing and Visa Application fees</span></li>
<li><span class="left"></span><span class="right">Prompt and effortless Visa processing service </span></li>
<li><span class="left"></span><span class="right">Hassle-free online documents uploading</span></li>
<li><span class="left"></span><span class="right">Fast online Application Form fill up </span></li>
<li><span class="left"></span><span class="right">Easy Web access </span></li>
<li><span class="left"></span><span class="right">Proficient specialists for Oman Visa operations</span></li>
<li><span class="left"></span><span class="right">Faster and secured online payment</span></li>
<li><span class="left"></span><span class="right">Effective information on Oman Visa </span></li>
<li><span class="left"></span><span class="right">256-bit SSL protection for the entire website</span></li>
<li><span class="left"></span><span class="right">Instant update on Oman Visa processing</span></li>
<li><span class="left"></span><span class="right">24/7 Chat assistance with least response time </span></li>

</ul>
<!-- <div class="more"><a href="javascript:;">More</a></div> -->
</div>
<!--end section2_left-->
<div class="clr"></div>
</div>
<!--end wrapper-->
</div>
<!--end section2-->



<div class="section3" data-parallax='{"translateY":"10%"}'>
<div class="section3_outer">
<div class="wrapper">
<div class="section3_left">

<h1>We <span>Offer </span><br/>
Multiple Types <br/>
of UAE <span>Visa</span></h1>
</div>
<!--end section3_left-->

<div class="section3_right">

 <div class="swiper-container">
        <div class="swiper-wrapper">
		<?php if(isset($category_list)){  ?>
			<?php 	$i=1; ?>
			<?php foreach($category_list['resultSet'] as $value){ ?>
			<?php 
				$string=  $value->title;
				list($second,$first) = explode(' ',strrev($string),2);
				$first = strrev($first);
				$second = strrev($second);
				$first;
			 ?>	 
			<?php
			$arr1 = str_split($string, 2);
			$arr2 = str_split($string, 4);
			//print_r($arr1);
			// print_r($arr1);
			?>
			<?php
				$domain = strstr($string, 'Visa '); 
				$user = strstr($string, 'Visa', true);
			?>

			<?php // echo @$pos = str_replace('Visa', 'Visa <span>', $string); ?>
			<div class="swiper-slide">
			<div class="slide_left"><!--<span class="date"><?php // echo $arr1['0']; ?></span>--><span class="day"><?php if($i==6){ ?>Hours Visa<?php }else{ echo $string ?>  <?php } ?>
			<span class="entry">Other Nationality <?php /* @$pos = str_replace('Visa', '', $domain); if(!empty($pos)){ echo $pos; }else { echo "Single Entry"; } */?></span></span> 
			</div> 
			<div class="slide_right"><p><?php $string = $value->description; echo substr($string ,0,400); ?> ..<a href="<?php base_url(); ?>cmspages/choosevisa">Read more</a></p>
			<div class="pls"><!--<img src="<?php echo IMG_PATH; ?>/pls.png"/> --> </div>
			</div>
			</div>
			<?php $i++;  ?>
			<?php } ?>
		<?php } ?>
        </div>
        <!-- Add Pagination -->
		 <div class="swiper-button-next"><img src="<?php echo IMG_PATH; ?>/up.png"/></div>
        <div class="swiper-button-prev"><img src="<?php echo IMG_PATH; ?>/down.png"/></div>
        <div class="swiper-pagination"></div>
    </div>

</div>
<!--end section3_right-->

<div class="clr"></div>
</div>
<!--end wrapper-->
</div>
<!--end section3_outer-->
</div>
<!--end section3-->


<div class="client_feedback">
<div class="wrapper">

<div class="client_feedback_inner">
<h1>Our Clients Testimonials</h1>

<div class="client_feedback_slider">
<div class="owl-carousel1 owl-theme similler_products_sider">
		<?php if(isset($testimonials)){  ?>
		<?php 	$i=1; ?>
		<?php foreach($testimonials['resultSet'] as $value){ ?>
		 <div class="item">
		 <div class="client_feedback_slider_01">
			<?php echo $value->description; ?>
		 <div class="d_arrow"><img src="<?php echo IMG_PATH; ?>downarrow.png"/></div>
		 </div>
		  <div class="aut_image"></div>
		  <div class="aut_name">-<?php echo $value->name; ?>,   <span><?php echo $value->designation; ?></span></div>
		 </div>
 	    <?php $i++;  ?>
		<?php } ?>
		<?php } ?>
</div>
</div>

</div>
<!--end client_feedback_inner-->


</div>
<!--end wrapper-->
</div>
<!--end client_feedback-->
