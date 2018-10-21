<?php
/**
* Template Name: MECO Education
 */
?>

<?php
get_header();
?>

<script>$('div.main-header').css("background-color","rgba(0,29,48,1)")</script>
<script src="script.js" type="text/javascript"></script>

<?php $custom_query_2 = new WP_Query( array( 'category_name' => 'investing-101' )); ?>

<section id="mainDiv" class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-4 memberImageDiv" id="memberImageDiv1">
		<div class="memberLayer"></div>
		</div>
		<a href="http://ateneomeco.com/student-support-system/"><div class="col-md-4 memberTextDiv" id="memberTextDiv1">
			<h2 id="memberTitle">Student Support System</h2>
			<div class="memberBody">
				Find your supplementary materials here!
			</div>
		</div></a>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<a href="http://ateneomeco.com/investing101/"><div class="col-md-4 memberTextDiv" id="memberTextDiv2">
			<h2 id="memberTitle">Investing 101</h2>	
			<div class="memberBody">
				Don't know how to invest? Here are the basics of investing.
			</div>
		</div></a>
		<div class="col-md-4 memberImageDiv" id="memberImageDiv2">
		<div class="memberLayer"><? if ($custom_query_2->have_posts()) : $custom_query_2->the_post(); ?>
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}?>
				<?php endif;?></div></div>
		
		<div class="col-md-2">
		</div>
	</div>
</section>
<script src="script.js" type="text/javascript"></script>

<style>
#mainDiv {
     background-image: url('http://ateneomeco.com/wp-content/uploads/2018/01/White_Bulletin_Background.png');
     width: 100%;
}
/* Change SSS Image here */

#memberImageDiv1 {
background-image: url('http://ateneomeco.com/wp-content/uploads/2018/03/SSS_Final.png');
}

#memberImageDiv2 {
background-image: url('http://ateneomeco.com/wp-content/uploads/2018/03/Invest1-1718_3.png');
}

/* Change SSS Image here */

.memberImageDiv img {
    height:35vh;
    object-fit: cover;
}


* {
margin-bottom: 0px !important;
}

.row {
margin-top: 0px !important;
}

.col-main {
padding: 0px!important;
width: 100vw;
}

.post-inner {
padding: 0px;
width: 100%;
margin: 0px;
}

h2 {
font-family: CH!important;
}

p {
font-family: Lato;
}


</style>