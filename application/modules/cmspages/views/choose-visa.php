<?php
$visa_requires_status = $visaresults['visa_required'];
$visa_not_required = explode(',', $visaresults['vcategory_id']);

?>

<style>
.static_banner{ background:url('<?php echo IMG_PATH; ?>types-of-visa.jpg') no-repeat  center center;}
</style>


<div class="fullwidth">
<div class="banner">
<div class="static_banner">
<div class="filter filter_caption">
<!--h1>ABOUT INSTA<span>DUBAI VISA</span> </h1-->
<h1>GET DUBAI <span>VISA EASIER & FASTER</span> </h1>
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

<div class="choose_tab">
<div class="choose_tab_right">
<h1>Choose Your Visa Type</h1>

<div class="day_conditions">
<ul class="tabs">
<?php  if($category_list){  ?>
<?php 	$i=1; ?>
<?php foreach($category_list['resultSet'] as $value){  ?>
	<li class="tab-link <?php if($i==1){ ?>current <?php }else{ echo ''; } ?>" data-tab="tab-<?php echo $i; ?>">
	<?php $string =  $value->title; ?> 
	<?php  echo @$pos = str_replace('Visa', 'Visa <span>', $string); ?>
	</li>
	<?php  $i++;  ?>
	<?php  } ?>
</ul>
<?php } ?>

<?php if($category_list){  ?>
<?php 	$i=1; ?>
<?php foreach($category_list['resultSet'] as $value){ ?>
<div id="tab-<?php echo $i; ?>" class="tab-content <?php if($i==1){ ?>current <?php }else{ echo ''; } ?>">
		<p><?php echo $value->description; ?></p>
<div class="custom_table">
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="25%">Type of Visa</td>
      <td width="75%"><span><?php echo $value->visa_type; ?></span></td>
    </tr>
	<tr>
      <td>Visa Validity</td>
      <td><span><?php echo $value->visibility_type; ?></span></td>
    </tr>
	<tr>
      <td>Stay Validity</td>
      <td><span><?php echo $value->visa_validity; ?></span></td>
    </tr>
	<tr>
      <td>Processing Time </td>
      <td><span><?php echo $value->processing_time; ?></span></td>
    </tr>
	<!--<tr>
      <td>Govt. Visa Fee  </td>
      <td><span> $<?php echo $value->govt_fees; ?> </span></td>
    </tr>
	<tr>
      <td>Service Fee    </td>
      <td><span>$<?php echo $value->service_fees; ?> </span></td>
    </tr>
	<tr>
      <td>Total Cost       </td>
      <td><span>$ <?php echo $value->total_cost; ?></span></td>
    </tr>-->
   
  </tbody>
</table>
</div>
<?php $visa_requires_status = $visaresults['visa_required'];
$visa_not_required = explode(',', $visaresults['vcategory_id']);

//pr($visa_not_required);

$cate_id = $value->id;
?>
<div class="apply_now"><a href="javascript:;" class="click_popup">Apply Now</a></div>

</div>
	<!-- end tab -->
<?php $i++;  ?>
<?php } ?>
</div>
<?php  } ?>



<div class="choose_tab_left_outer">
<div class="choose_tab_left">
<h1>Prerequisite of Documents</h1>
<ul>
<li><span>Applicant needs to provide</span>a coloured scan copy of his/her passport with minimum 6 months validity remaining. </li>
<li><span>Photo Specification</span>A front facing recent photograph of the applicant with any coloured background.</li>
</ul>

</div>
</div>



</div>
<div class="clr"></div>
</div>
<!--end choose_tab-->
</div>
</div>






<!--div class="wrapper">
<div class="inner_section2">
<div class="inner_section2_left">
<h2>GRAB IT FASTER</h2>
<p>
Since our global existence dates back decades, our services have
 travelled across a diverse range of expertise in the field of UAE 
 Visa processing. Today, with successful issuance of more than 20,000
 UAE visas, we assure all prospective visa applicants to get their
 UAE visas processed and delivered on/before the stipulated time.
 At Dubai VISA.com, you can grab your visa faster and easier!
</p>
</div>
<div class="inner_section2_right">
<div class="inner_section2_right_inner">
<form action="<?php echo base_url();?>visafilter/search/" method="post">
<p>Choose your Nationality</p>
	<select name ="country_id" class="select2" id="select2" style="width: 100%;">
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
	<select name ="nationality_id" class="select2" id="select2" style="width: 100%;">
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
</div>
<!--end inner_section2_right_inner-->
<!--/div>
<div class="clr"></div>
</div>
<!--end inner_section2-->

<!--/div>
<!--end wrapper-->
</div>
<!--end inner_page-->
