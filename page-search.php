<?php
/**
* Template Name: Search
 */
?>

<?php

get_header();
?>

<script>$('div.main-header').css("background-color","rgba(0,29,48,1)")</script>


<?php 

$back = $_POST['back'];
$url = $_POST['url'];
$search = $_POST['search'];
$custom_query = new WP_Query( array( 'tag' => $search ) ); 

?>
<section id="mainDiv" class="container-fluid">

<a href="<?php echo $url?>"> 
Back to
<?php
echo  $back
?>
 </a>


<form method="post" action="../search-results" style="float: right; position: relative; right: 8vw;">

Search: &nbsp&nbsp        <input type="text" name="search">
 <input style="display:none;" type="submit" name="submit" > 

<input name="back" type="hidden" value="<?php
echo  $back
?>">
<input name="url" type="hidden" value="<?php echo $url?>">

</form>
<br>
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
			<div id="newsletterListInfo">Impact Investing<span id="division"> | </span><?php the_date(); ?></div><br />
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

<style>
#back {
    height: 25px;
    width: 90px;
    margin-left: 40px;
    font-size: 13px;
    text-align: center;
    color: black;
    font-weight: bold;
    font-family: CH;
}
</style>