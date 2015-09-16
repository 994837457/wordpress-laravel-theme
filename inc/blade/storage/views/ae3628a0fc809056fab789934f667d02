
<?php
$cat=1;
$showposts = -1; // -1 shows all posts
$do_not_show_stickies = 1; // 0 to show stickies
$args=array(
   'category__in' => $cat,
   'showposts' => $showposts,
   'caller_get_posts' => $do_not_show_stickies,
   );
$my_query = new WP_Query($args); 

?>
	<?php if( $my_query->have_posts() ) : ?>

		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<?php
			global $wp_query;
			$wp_query->in_the_loop = true;
			?>
			<article>
<div class="col-md-4 blog-col tblog">
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
				<div class="blog-info"><span> <?php the_time('F jS, Y') ?></span> </div>

				<div class="blog-textx">
    <?php the_content('Read the rest of this entry »'); ?>
				</div>

			
			</div></article>
		<?php endwhile; ?>


	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

	<?php 
   $postslist = get_posts('category_name=blog&showposts=5'); 
   foreach ($postslist as $post) : setup_postdata($post);
?>

<?php endforeach; ?>