<?php
/**
* Template Name: Member's Corner
 */
?>

<?php
get_header();
?>

<script>$('div.main-header').css("background-color","rgba(0,29,48,1)")</script>
<script src="script.js" type="text/javascript"></script>

<?php $custom_query_1 = new WP_Query( array( 'category_name' => 'blog-submission' )); ?>
<?php $custom_query_2 = new WP_Query( array( 'category_name' => 'humans-of-meco' )); ?>


<section id="mainDiv" class="container-fluid, bg">
<!-- <div class="col-md-offset-3"></div> -->
<div class="newsletterDiv col-md-9 col-centered">
	<div class="row-fluid">
		<div class="col-md-3 newsletterColumn">
			<div class="row newsletterImageDiv" id="newsletterImageDiv1">
				<? if ($custom_query_1->have_posts()) : $custom_query_1->the_post(); ?>
				<?php if ( has_post_thumbnail() ) { 
					the_post_thumbnail(); 
				}?>
				<?php endif;?>
			</div>
			<a href="http://ateneomeco.com/blog-submission/">
				<div class="row newsletterTextDiv" id="newsletterTextDiv1">
				<h3 id="newsletterTitle">BLOG SUBMISSION</h3>
					<div class="newsletterBody">
					Want to express yourself? Want to share your knowledge on stocks? Have a story to tell? Submit a post now!
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 newsletterColumn">
			<a href="http://ateneomeco.com/humans-of-meco/">
				<div class="row newsletterTextDiv" id="newsletterTextDiv2">
				<h3 id="newsletterTitle">HUMANS OF MECO</h3>
					<div class="newsletterBody">
						Get to know the #HumansOfMEcO!  
					</div>
				</div>
			</a>
			<div class="row newsletterImageDiv" id="newsletterImageDiv2">
				<? if ($custom_query_2->have_posts()) : $custom_query_2->the_post(); ?>
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}?>
				<?php endif;?>
			</div>
		</div>
		<div class="col-md-3 newsletterColumn">
			<div class="row newsletterImageDiv" id="newsletterImageDiv3">
			<!--
				
			-->
			</div>
			<a href="http://ateneomeco.com/incentive-system/">
			<div class="row newsletterTextDiv" id="newsletterTextDiv3">
				<h3 id="newsletterTitle">INCENTIVE SYSTEM</h3>
				<div class="newsletterBody">
						View your stars here! See how many you've acquired. 
				</div>
			</div>
			</a>
		</div>
	</div>
</div>
</section>

<?php get_footer()?>


<style>
/* BLOG */ 
#newsletterImageDiv1 {
background-image: url('');
}

/* Humans of MECO */
#newsletterImageDiv2 {
background-image: url('http://ateneomeco.com/wp-content/uploads/2018/01/Original_MEcO-Logo.png');
}
/* Incenctive */
#newsletterImageDiv3 {
	height: 40vh!important;
	width: 22vw!important;
background-image: url('http://ateneomeco.com/wp-content/uploads/2018/03/Stars_Final.png');
}

.newsletterImageDiv img {
	height: 40vh;
	width: 22vw;
	object-fit: cover;
}

.bg {
background-image: url('http://ateneomeco.com/wp-content/uploads/2018/01/White_Bulletin_Background.png');
}

.col-main {
padding: 0px!important;
width: 100vw;
}

#mainDiv {
overflow-x: hidden;
}



.post-inner {
width: 100%;
margin: 0px;
}

h3 {
font-family: CH!important;
}

p {
font-family: Lato;
}

.newsletterColumn {
     width: 22vw!important;
}

.newsletterDiv {
     position: relative;
     right: 5vw;
}

</style>