<?php get_header(); ?>
<br>
<script>$('div.main-header').css("background-color","rgba(0,29,48,1)")</script>
<section id="mainDiv" class="container single_post">
<?php while(have_posts()) : the_post(); ?>
<div id="newsletterPostTitle" class="newsletterPostTitle"><h3><?php the_title(); ?></h3></div>
<? 
$category=get_the_category();
$category_name=$category[0]->name;
$url=home_url($category_name); ?>
<div class="contentDetails">
<p>Written By <?php the_author(); ?> | <?php echo get_the_date("M d, Y");?> |  <a href="<?php echo esc_url($url); ?> "> <?php echo $category_name; ?></a> </p></div>
<div class="mainContent single_post_content">
<div id="single_post_img">
<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail(); }?>
</div>
<?php the_content();?>
<?php endwhile;?>
</div>
</section>
<div id="footer-container">
<?php get_footer();?>
</div>