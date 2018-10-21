<?php
/**
* Template Name: Humans of MEcO
 */
?>

<?php

get_header();
?>

<script>$('div.main-header').css("background-color","rgba(0,29,48,1)")</script>
<?php $custom_query = new WP_Query( array( 'category_name' => 'humans-of-meco' )); ?>

<section id="mainDiv" class="container-fluid">

<form method="post" action="../search-results" style="float: right; position: relative; right: 8vw;">

Search: &nbsp&nbsp        <input type="text" name="search">
<input name="back" type="hidden" value="Humans of MECO">
<input name="url" type="hidden" value="http://ateneomeco.com/humans-of-meco/">
 <input style="display:none;" type="submit" name="submit" > 

</form>
<br>
<? if ($custom_query->have_posts()):
while($custom_query->have_posts()) : $custom_query->the_post(); ?>
	<a href="<?php the_permalink(); ?>"><div class="row newsletterListDiv" id="newsletterListDiv1">
		<div class="col-md-4 newsletterListImageDiv">
		<div id="newsletterListImageDiv1">
			<div id="newsletterListLayer"><?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}?></div>
		</div>
		</div>
		<div class="col-md-8 newsletterListTextDiv" id="newsletterListTextDiv1">
			<div id="newsletterListInfo">HUMANS OF MECO<span id="division"> | </span><?php the_date(); ?></div><br />
			<div id="newsletterListTitle"><?php the_title(); ?></div><br />
			<div class="newsletterListBody">
<?php the_excerpt(); ?>
			</div>
			<div class="tags">
				<p><?php the_tags(); ?></p>
			</div>
		</div>
	</div></a>
<?php endwhile;
else:
?>

<div id="newsletterListTitle">NO POSTS FOUND :(</div>
<?php endif; ?>


</section>

<?php get_footer()?>