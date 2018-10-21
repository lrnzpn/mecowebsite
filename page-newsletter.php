<?php
/**
* Template Name: Newsletter
 */
?>

<?php
get_header();
?>

<script>$('div.main-header').css("background-color","rgba(0,29,48,1)")</script>
<script src="script.js" type="text/javascript"></script>

<?php $custom_query_1 = new WP_Query( array( 'category_name' => 'features' )); ?>
<?php $custom_query_2 = new WP_Query( array( 'category_name' => 'financial-literacy' )); ?>
<?php $custom_query_3 = new WP_Query( array( 'category_name' => 'impact-investing' )); ?>

<section id="mainDiv" class="container-fluid, bg">
<div class="col-md-offset-3"></div>
<div class="newsletterDiv col-md-9 col-centered">
	<div class="row-fluid">
		<div class="col-md-3 newsletterColumn">
<? if ($custom_query_1->have_posts()) : $custom_query_1->the_post(); ?>
			<div class="row newsletterImageDiv" id="newsletterImageDiv1">
				<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}?>
<?php endif;?>
			</div>
			<a href="http://ateneomeco.com/features/"><div class="row newsletterTextDiv" id="newsletterTextDiv1"> 
			<h3 id="newsletterTitle">FEATURES</h3>
			<div class="newsletterBody">
					Events and initiatives of the organization and its members
			</div>
		</div></a>
		</div>
		<div class="col-md-3 newsletterColumn">
<? if ($custom_query_2->have_posts()) : $custom_query_2->the_post(); ?>
			<a href="http://ateneomeco.com/financial-literacy/"><div class="row newsletterTextDiv" id="newsletterTextDiv2">
				<h3 id="newsletterTitle">FINANCIAL LITERACY</h3>
				<div class="newsletterBody">
					Spreading the knowledge and understanding of financial matters - all leading towards financial freedom
				</div>
			</div></a>
			<div class="row newsletterImageDiv" id="newsletterImageDiv2">
				<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}?>
<?php endif;?>
			</div>
		</div>
		<div class="col-md-3 newsletterColumn">
<? if ($custom_query_3->have_posts()) : $custom_query_3->the_post(); ?>
			<div class="row newsletterImageDiv" id="newsletterImageDiv3">
				<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}?>
<?php endif;?>
			</div>
			<a href="http://ateneomeco.com/impact-investing/"><div class="row newsletterTextDiv" id="newsletterTextDiv3">
				<h3 id="newsletterTitle">IMPACT INVESTING</h3>
				<div class="newsletterBody">
						Educating communities and youngsters about channels for their economic improvement and financial freedom
				</div>
			</div></a>
		</div>
	</div>
</div>
</section>



<?php get_footer()?>


<style>
/*
#newsletterImageDiv1 {
background-image: url('http://ateneomeco.com/wp-content/uploads/2017/11/2111767321001_4257981808001_Warren-Buffett-e1509874777746.jpg');
}

#newsletterImageDiv2 {
background-image: url('http://ateneomeco.com/wp-content/uploads/2017/11/1-1.jpg');
}

#newsletterImageDiv3 {
background-image: url('http://ateneomeco.com/wp-content/uploads/2018/01/like-mark-zuckerberg-elon-musk-began-programming-at-an-early-age-unlike-facebooks-founder-he-taught-himself-and-sold-the-code-for-his-first-video-game-for-500-at-age-12_grande.jpg');
}

*/
.newsletterImageDiv {
	
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
