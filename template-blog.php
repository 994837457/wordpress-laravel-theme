@include('templates.includes.head')
@include('templates.includes.nav')
{{-- Template Name:blog 
<header class="intro-header" style="background-image: url('{{ bloginfo('template_url')}}/public/img/home-bg.jpg'); height: 300px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>MCastle's Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="container" style="margin-top: 50px;">
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
			<div class="tblog">
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="blog-textx">
    <?php the_content('Read the rest of this entry »'); ?>
				</div>

			
			</div></div>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('« Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries »') ?></div>
		</div>

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
@include('templates.includes.footer')